<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends MY_Model
{
    var $table = 'orders';
    // 创建订单之后，再创建订单详情，是一个事务
    public function create($order, $order_details)
    {
        $order['created_at'] = date('Y-m-d H:i:s');
        $order['updated_at'] = date('Y-m-d H:i:s');
        $this->load->model('Order_detail_model', 'order_detail');
        $this->db->trans_start();
        $this->db->insert($this->table, $order);
        $order_id = $this->db->insert_id();
        foreach ($order_details as $order_detail) {
            $order_detail['order_id'] = $order_id;
            $this->order_detail->create($order_detail);
        }
        return current($this->find_by('id', $order_id));
        $this->db->trans_complete();
    }
}

/* End of file order_model.php */
/* Location: ./application/models/order_model.php */