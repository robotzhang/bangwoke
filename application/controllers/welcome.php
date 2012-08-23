<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index() {
        $data = array('json' => json_decode(file_get_contents('http://api.douban.com/book/subject/1220562?alt=json')));
		$this->layout->view('index', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */