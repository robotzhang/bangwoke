<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index() {
        $this->load->model('Topic_model', 'topic');
        $this->load->model('Movie_model', 'movie');
        $topics = $this->topic->for_homepage();
        $movies = $this->movie->for_homepage();
		$this->layout->view('index', array('topics' => $topics, 'movies' => $movies));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */