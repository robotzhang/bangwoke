<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {
	public function index() {
        $this->layout->view('about/index');
	}

    public function team() {
        $this->layout->view('about/team');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */