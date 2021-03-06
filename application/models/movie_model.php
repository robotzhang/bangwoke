<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movie_model extends MY_Model
{
    var $table = 'movies';
    public function set_topic($movie)
    {
        $this->load->model('Topic_model', 'topic');
        $movie->topic = current($this->topic->find_by('id', $movie->topic_id));
        return $movie;
    }
    public function for_homepage()
    {
        $movies = $this->db->limit(16)->order_by('rand()')->get($this->table)->result();
        return $movies;
    }
}

/* End of file movie_model.php */
/* Location: ./application/models/movie_model.php */