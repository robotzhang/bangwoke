<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movies extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Movie_model', 'movie');
    }

    public function index()
    {
        $movies = $this->movie->get(array(), $this->input->get('page'), 20);
        $this->load->library('page', array('total' => $this->movie->last_query_number));
        $this->layout->view('movies/index', array('movies' => $movies, 'pagination' => $this->page->create()));
    }

	public function show($id = 1) {
        $movie = current($this->movie->find_by('id', $id));
        $this->layout->view('movies/show', array('movie' => $movie));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */