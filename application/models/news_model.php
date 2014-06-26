<?php

/**
 * Tutorial de CodeIgniter
 * Página de Notícias
 * 
 * @link http://127.0.0.1/aulaci/user_guide/tutorial/news_section.html Tutorial
 * @author Tarcnux
 */
class News_model extends CI_Model {

    public function __construct() {
        /**
         * bd: ci
         * user: ci
         * server: localhost
         * senha: eheZwPA3uA5GpNFp
         */
        $this->load->database();
    }

    public function get_news($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_news_autor($autor = FALSE) {
        if ($autor === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('autor' => $autor));
        return $query->result_array();
    }
    
    public function set_news()
{
	$this->load->helper('url');

	$slug = url_title($this->input->post('title'), 'dash', TRUE);

	$data = array(
		'title' => $this->input->post('title'),
		'slug' => $slug,
		'text' => $this->input->post('text'),
            'autor' => $this->input->post('autor')
	);

	return $this->db->insert('news', $data);
}
    
}
