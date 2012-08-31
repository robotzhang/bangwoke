<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Address_model extends MY_Model
{
    var $table = 'addresses';
    function create($entity)
    {
        if (count($this->db->where(array('address' => $entity['address'], 'user_id' => $entity['user_id']))->get($this->table)->result()) > 0) { // 该地址已经存在
            return false;
        }
        echo 'ok';
        return parent::create($entity);
    }
}

/* End of file address_model.php */
/* Location: ./application/models/address_model.php */