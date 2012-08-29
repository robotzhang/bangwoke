<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {
	public function index()
	{
        $this->layout->view("cart/index");
	}

    // 到支付宝支付
    public function todo()
    {
        $this->load->model('alipay_model', 'alipay');
        header("content-Type: text/html; charset=Utf-8");
        echo $this->alipay->build_form($this->input->post('cart')); // 还应该配置收货地址等，这样用户不用在支付宝去做这个事情了(用户支付宝就用地址？)
    }

    // 支付宝支付结果异步通知页面
    public function notify()
    {

    }

    // 支付宝支付完成后返回的页面
    public function back()
    {

    }
}
