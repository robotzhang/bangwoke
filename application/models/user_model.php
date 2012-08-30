<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends MY_Model
{
    var $table = 'users';
    var $errors = array();

    public function login($email, $password)
    {
        $users = $this->db->where(array('email' => $email, 'password' => $password))->get($this->table)->result();
        if (count($users) > 0) {
            return $users[0];
        }
        return false;
    }

    public function register($user)
    {
        if(!preg_match("/^[0-9a-zA-Z]+(?:[\_\-][a-z0-9\-]+)*@[a-zA-Z0-9]+(?:[-.][a-zA-Z0-9]+)*\.[a-zA-Z]+$/i", $user['email'])){
            $this->errors['email'] = '邮箱地址不合法';
            return false;
        }
        if (count($this->find_by('email', $user['email'])) > 0) {
            $this->errors['email'] = '邮箱已经被注册';
            return false;
        }
        if (empty($user['password'])) {
            $this->errors['password'] = '密码不能为空';
        }
        if ($user['password'] !== $user['repassword']) {
            $this->errors['repassword'] = '二次密码不一致';
            return false;
        }

        unset($user['repassword']);
        return $this->create($user);
    }
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */