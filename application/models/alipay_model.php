<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alipay_model extends MY_Model
{
    var $alipay_config;
    function __construct ()
    {
        parent::__construct();
        $this->config->load('alipay', TRUE);
        $this->alipay_config = $this->config->item('alipay');
    }
    /**
     * 服务器异步通知
     */
    function notify_verify ()
    {
        $tmp = array(
            'partner'        => $this->alipay_config['partner'],
            'key'            => $this->alipay_config['key'],
            'sign_type'      => $this->alipay_config['sign_type'],
            '_input_charset' => $this->alipay_config['input_charset'],
            'transport'      => $this->alipay_config['transport'],
        );

        $this->load->library('alipay/alipay_notify', $this->alipay_config);
        $verify_result = $this->alipay_notify->notify_verify();

        if($verify_result) {
            $dingdan           = $_POST['out_trade_no'];	//获取支付宝传递过来的订单号
            $total             = $_POST['total_fee'];		//获取支付宝传递过来的总价格

            if($_POST['trade_status'] == 'TRADE_FINISHED' ||$_POST['trade_status'] == 'TRADE_SUCCESS') {    //交易成功结束
                echo "success";		//请不要修改或删除
            } else {
                echo "success";		//其他状态判断。普通即时到帐中，其他状态不用判断，直接打印success。
            }
            self::update_status($_POST['trade_no'], $dingdan);
        } else {
            echo "fail";
        }
    }

    /**
     * 页面跳转同步通知
     */
    function return_verify($data)
    {
        $this->load->library('alipay/alipay_notify', $this->alipay_config);
        $verify_result = true;//$this->alipay_notify->verifyReturn();
        if ($verify_result) {//验证成功
            if ($data['trade_status'] == 'WAIT_SELLER_SEND_GOODS') { // 已支付，等待发货
                // 更新订单
                $order = array(
                    'id' => $data['out_trade_no'],
                    'pay_at' => $data['gmt_payment'],
                    'status' => 1,
                    'alipay_id' => $data['trade_no'],
                    'alipay_email' => $data['buyer_email'],
                    'alipay_order_id' => $data['buyer_id']
                );
                $this->load->model('Order_model', 'order');
                if ($this->order->update($order)) { // 更新
                    // 添加收货地址
                    $address = array(
                        'user_id' => current($this->order->find_by('id', $order['id']))->user_id,
                        'address' => $data['receive_address'],
                        'zip' => $data['receive_zip']
                    );
                    if (!empty($data['receive_phone'])) {
                        $address['phone'] = $data['receive_phone'];
                    }
                    if (!empty($data['receive_mobile'])) {
                        $address['mobile'] = $data['receive_mobile'];
                    }
                    $this->load->model('Address_model', 'address');
                    return $this->address->create($address);
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    /**
     * 构造提交表单
     */
    function build_form ($opt = array())
    {
        $opt_default = array(
            'order_id' => date('Ymdhis'),
            'subject' => '',
            'body' => '',
            'price' => '',
            'show_url' => $this->alipay_config['show_url'],
            'receive_name' => '', // 收货人姓名
            'receive_address' => '', // 收货人地址
            'receive_zip' => '',
            'receive_phone' => '',
            'receive_mobile' => '' // 收货人手机号码
        );
        $opt = array_merge($opt_default, $opt);
        /**************************请求参数**************************/
        //必填参数//
        $out_trade_no		= $opt['order_id'];		//请与贵网站订单系统中的唯一订单号匹配
        $subject			= $opt['subject'];	//订单名称，显示在支付宝收银台里的“商品名称”里，显示在支付宝的交易管理的“商品名称”的列表里。
        $body				= $opt['body'];	//订单描述、订单详细、订单备注，显示在支付宝收银台里的“商品描述”里
        $price				= $opt['price'];	//订单总金额，显示在支付宝收银台里的“应付总额”里

        $logistics_fee		= "0.00";				//物流费用，即运费。0表示卖家承担费用
        $logistics_type		= "EXPRESS";			//物流类型，三个值可选：EXPRESS（快递）、POST（平邮）、EMS（EMS）
        $logistics_payment	= "SELLER_PAY";			//物流支付方式，两个值可选：SELLER_PAY（卖家承担运费）、BUYER_PAY（买家承担运费）

        $quantity			= "1";					//商品数量，建议默认为1，不改变值，把一次交易看成是一次下订单而非购买一件商品。

        //选填参数//

        //买家收货信息（推荐作为必填）
        //该功能作用在于买家已经在商户网站的下单流程中填过一次收货信息，而不需要买家在支付宝的付款流程中再次填写收货信息。
        //若要使用该功能，请至少保证receive_name、receive_address有值
        //收货信息格式请严格按照姓名、地址、邮编、电话、手机的格式填写
        $receive_name		= $opt['receive_name'];			//收货人姓名，如：张三
        $receive_address	= $opt['receive_address'];			//收货人地址，如：XX省XXX市XXX区XXX路XXX小区XXX栋XXX单元XXX号
        $receive_zip		= $opt['receive_zip'];				//收货人邮编，如：123456
        $receive_phone		= $opt['receive_phone'];		//收货人电话号码，如：0571-81234567
        $receive_mobile		= $opt['receive_mobile'];		//收货人手机号码，如：13312341234

        //网站商品的展示地址，不允许加?id=123这类自定义参数
        $show_url			= $opt['show_url'];

        /************************************************************/

        //构造要请求的参数数组
        $parameter = array(
            "service"			=> "create_partner_trade_by_buyer",
            "payment_type"		=> "1",

            "partner"			=> trim($this->alipay_config['partner']),
            "_input_charset"	=> trim(strtolower($this->alipay_config['input_charset'])),
            "seller_email"		=> trim($this->alipay_config['seller_email']),
            "return_url"		=> trim($this->alipay_config['return_url']),
            "notify_url"		=> trim($this->alipay_config['notify_url']),

            "out_trade_no"		=> $out_trade_no,
            "subject"			=> $subject,
            "body"				=> $body,
            "price"				=> $price,
            "quantity"			=> $quantity,

            "logistics_fee"		=> $logistics_fee,
            "logistics_type"	=> $logistics_type,
            "logistics_payment"	=> $logistics_payment,

            "receive_name"		=> $receive_name,
            "receive_address"	=> $receive_address,
            "receive_zip"		=> $receive_zip,
            "receive_phone"		=> $receive_phone,
            "receive_mobile"	=> $receive_mobile,

            "show_url"			=> $show_url
        );

        //构造担保交易接口
        $this->load->library('alipay/alipay_service', $this->alipay_config);
        $html_text = $this->alipay_service->create_partner_trade_by_buyer($parameter);
        return $html_text;
    }
}

/* End of file alipay_model.php */
/* Location: ./application/models/alipay_model.php */