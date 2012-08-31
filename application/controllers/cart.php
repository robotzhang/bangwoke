<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
    }
	public function index()
	{
        $this->layout->view("cart/index");
	}

    // 添加到购物车
    public function add()
    {
        $data = $this->input->post('cart');
        $this->cart->insert($data);
        redirect(site_url().'/cart');
    }

    // 从购物车中移除
    public function remove()
    {
        $data = array(
            'rowid' => $_GET['rowid'],
            'qty'   => 0 // 数量设置成0 则会删除
        );
        $this->cart->update($data);
        redirect(site_url().'/cart');
    }

    // 到支付宝支付
    public function todo()
    {
        if (!is_login()) {
            return redirect(site_url().'/login?url='.site_url().'/cart');
        }
        // 如果购物车为空则返回出错提示
        $cart_items = $this->cart->contents();
        if (empty($cart_items)) {
            return redirect(site_url().'/cart');
        }
        // 添加订单
        $order = array(
            'user_id' => current_user()->id,
            'subject' => '',
            'status' => 0,
            'total' => $this->cart->format_number($this->cart->total())
        );
        // 添加订单详情
        $order_subject = array();
        $order_details = array();
        foreach ($this->cart->contents() as $items) {
            $order_subject[] = $items['name'];
            $detail = array(
                'user_id' => current_user()->id,
                'price' => $items['price'],
                'quantity' => $items['qty'],
                'name' => $items['name'],
                'goods_type' => $items['goods_type'],
                'goods_id' => $items['goods_id'],
                'url' => $items['url']
            );
            $order_details[] = $detail;
        }
        $order['subject'] = join(' / ', $order_subject);
        $this->load->model('Order_model', 'order');
        $order_obj = $this->order->create($order, $order_details);
        // 清除购物车
        $this->cart->destroy();
        // 到支付宝支付，应该还有一个确认订单的过程
        $this->load->model('alipay_model', 'alipay');
        header("content-Type: text/html; charset=Utf-8");
        $alipay_form = array(
            'order_id' => $order_obj->id,
            'subject' => $order_obj->subject,
            'body' => '',
            'show_url' => site_url().'/orders/'.$order_obj->id,
            'price' => $order_obj->total
        );
        echo $this->alipay->build_form($alipay_form); // 还应该配置收货地址等，这样用户不用在支付宝去做这个事情了(用户支付宝就用地址？)
    }

    // 支付宝支付结果异步通知页面
    public function notify()
    {
        $this->load->model('alipay_model', 'alipay');
        if ($this->alipay->notify_verify($this->input->post())) {
            echo "success";		//请不要修改或删除,这个必须输出，否则会一直发送请求
        } else {
            echo 'fail';
        };
    }

    // 支付宝支付完成后返回的页面
    public function back()
    {
        $this->load->model('alipay_model', 'alipay');
        $this->alipay->return_verify($this->input->get());
        redirect(site_url()); //应该返回用户订单页
    }
}
