<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedback_model extends MY_Model
{
    var $table = 'feedbacks';
    public function create($entity)
    {
        if (empty($entity['content'])) {
            return false;
        }
        return parent::create($entity);
    }
}

/* End of file feedback_model.php */
/* Location: ./application/models/feedback_model.php */