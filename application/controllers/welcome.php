<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index() {
        $this->load->model('Topic_model', 'topic');
        $topics = $this->topic->for_homepage();
		$this->layout->view('index', array('topics' => $topics));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */