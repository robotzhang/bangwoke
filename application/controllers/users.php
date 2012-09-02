<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
    }

	public function login()
	{
        $user = $this->input->post('user');
        if (empty($user)) {
            return $this->layout->view("users/login");
        }
        $user = $this->user->login($user['email'], $user['password']);
        if ($user === false) {
            $this->layout->view("users/login", array('errors' => array('all' => '用户名或密码错误！')));
        } else {
            set_current_user($user);
            redirect($this->input->post('url'));
        }
	}

    public function logout()
    {
        $this->session->unset_userdata('user');
        redirect(site_url('login'));
    }

    public function register()
    {
        $user = $this->input->post('user');
        if (empty($user)) {
            return $this->layout->view("users/register");
        }

        $user_insert = $this->user->register($user);
        if ($user_insert !== false) {
            set_current_user($user_insert);
            $url = $this->input->post('url');
            redirect(empty($url) ? site_url() : $url);
        } else {
            $this->layout->view("users/register", array('errors' =>  $this->user->errors));
        }
    }
}

/* End of file users.php */
/* Location: ./application/controllers/users.php */