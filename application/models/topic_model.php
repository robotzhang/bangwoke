<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topic_model extends MY_Model
{
    var $table = 'topics';
    public function for_homepage() {
        $topics = $this->db->limit(10)->order_by('created_at', 'desc')->get($this->table)->result();
        $this->load->model('Movie_model', 'movie');
        foreach  ($topics as $key => $topic) {
            $movies = $this->movie->find_by('topic_id', $topic->id);
            $topics[$key]->movies = $movies;
        }
        return $topics;
    }
}

/* End of file topic_model.php */
/* Location: ./application/models/topic_model.php */