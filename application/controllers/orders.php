<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model', 'order');
    }

    public function show($id = 1)
    {
        $order = current($this->order->find_by('id', $id));
        var_dump($order);
    }
}
