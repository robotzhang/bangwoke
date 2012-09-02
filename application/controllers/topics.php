<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topics extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Topic_model', 'topic');
    }

    public function index()
    {
        $records = $this->topic->db->get($this->topic->table)->result();
        $this->layout->view('topics/index', array('records' => $records));
    }

	public function show($id = 1) {
        $topic = $this->topic->find_by('id', $id);
        $topic = $this->topic->set_movies($topic);
        $this->layout->view('topics/show', array('topic' => $topic[0]));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */