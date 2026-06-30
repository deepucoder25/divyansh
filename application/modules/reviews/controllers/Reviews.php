<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Reviews extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
    }

    function index()
    {
        // Load active reviews from SQLite database
        $star_filter = $this->input->get('star');
        $this->db->where('status', 1);
        if ($star_filter) {
            $this->db->where('stars', (int)$star_filter);
        }
        $this->db->order_by('r_id', 'desc');
        $db_reviews = $this->db->get('reviews')->result_array();
        
        $reviews = [];
        foreach ($db_reviews as $r) {
            $reviews[] = [
                "id" => (int) $r['r_id'],
                "name" => $r['name'],
                "city" => $r['r_title'], // city is stored in r_title
                "rating" => (int) $r['stars'],
                "review" => $r['r_desc'],
                "status" => ($r['status'] == 1) ? 'show' : 'hide',
                "created_at" => $r['posted_date']
            ];
        }

        $data['reviews'] = $reviews;
        
        $data['title'] = "Customer Reviews & Ratings | " . $this->comp['company3'];
        $data['description'] = "Detailed feedback and ratings from our satisfied clients. Read real reviews about our relocation services at " . $this->comp['company3'] . ".";
        $data['module'] = "reviews";
        $data['view_file'] = "reviews";
        echo Modules::run('template/layout2', $data);
    }

    function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                "name" => $this->input->post('name'),
                "email" => $this->input->post('email') ?: '',
                "r_title" => $this->input->post('city') ?: '',
                "stars" => (int) $this->input->post('rating'),
                "r_desc" => $this->input->post('review'),
                "status" => 1, // By default show on browser
                "posted_date" => date('Y-m-d H:i:s'),
                "r_img" => '',
                "views" => 0,
                "b_id" => 0
            ];
            
            $this->db->insert('reviews', $data);
            
            $this->session->set_flashdata('success', 'Thank you! Your review has been successfully posted.');
            redirect('reviews');
        }
    }
}