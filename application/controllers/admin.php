<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index() {
		$this->layout->view('admin/index');
	}

    public function spider() {
        $this->load->model('Movie_model', 'movie');
        if (count($this->movie->find_by('douban_id', $_GET['id'])) > 0) {
            $this->session->set_flashdata('info', sprintf("%d 已经爬取,因为豆瓣请求数的限制，请不要重复爬取", $_GET['id']));
            redirect(site_url().'/admin');
            return;
        }
        $this->load->helper('douban');
        $url = sprintf("http://api.douban.com/movie/subject/%d?alt=json", $_GET['id']);
        $data = array('movie' => parse_douban_movie_to_array( json_decode(file_get_contents($url)) ));
        $this->layout->view('admin/spider', $data);
    }

    public function create_movie() {
        $this->load->model('Movie_model', 'movie');
        $movie = $this->input->post('movie');
        if (count($this->movie->find_by('douban_id', $movie['douban_id'])) > 0) {
            $this->session->set_flashdata('info', 'id：'.$movie['douban_id'].'已经爬取');
            redirect(site_url().'/admin');
            return;
        }
        $this->movie->create($movie);
        redirect(site_url().'/admin');
    }
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */