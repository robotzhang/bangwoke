<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if (!is_admin()) {
            return redirect(site_url('login?url='.current_url()));
        }
        $this->layout->setLayout('layout/admin');
        $this->load->model('Order_model', 'order');
    }

    public function index()
    {
        $orders = $this->order->get(array(), $this->input->get('page'), 20);
        $this->load->library('page', array('total' => $this->order->last_query_number));
        $this->layout->view('admin/orders/index', array('orders' => $orders, 'pagination' => $this->page->create()));
    }
}

/* End of file admin/users.php */
/* Location: ./application/controllers/admin/users.php */