<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('current_user'))
{
    function current_user() {
        $CI = & get_instance();
        return $CI->session->userdata('user');
    }
}

if ( ! function_exists('set_current_user'))
{
    function set_current_user($user) {
        $CI = & get_instance();
        $CI->session->set_userdata('user', $user);
    }
}

if ( ! function_exists('is_login'))
{
    function is_login() {
        $user = current_user();
        if (empty($user)) {
            return false;
        }
        return true;
    }
}

/* End of file MY_url_helper.php */
/* Location: ./application/help/MY_url_helper.php */