<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout(array('css' => array(base_url('static/stylesheets/about.css'))));
    }
	public function index() {
        $this->layout->view('about/index');
	}

    public function team() {
        $this->layout->view('about/team');
    }

    public function contact()
    {
        $this->layout->view('about/contact');
    }

    public function feedback()
    {
        if (empty($_POST)) {
            return $this->layout->view('about/feedback');
        }
        $feedback = $this->input->post('feedback');
        $this->load->model('Feedback_model', 'feedback');
        $this->layout->view('about/feedback', array('success' => $this->feedback->create($feedback)));
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */