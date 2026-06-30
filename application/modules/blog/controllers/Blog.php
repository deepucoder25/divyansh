<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MX_Controller {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    private function slugify($text) {
        $text = strtolower($text);
        $text = preg_replace('~[^a-z0-9\s-]~', '', $text);
        $text = preg_replace('~[\s-]+~', '-', $text);
        return trim($text, '-');
    }

    private function getBlogsFromDb($only_active = true) {
        if ($only_active) {
            $this->db->where('status', 1);
        }
        $this->db->order_by('b_id', 'desc');
        $res = $this->db->get('blog')->result_array();
        
        $blogs = [];
        foreach ($res as $b) {
            $blogs[] = [
                "id" => (int) $b['b_id'],
                "title" => $b['title'],
                "main_title" => $b['main_title'] ?? $b['title'],
                "description" => $b['description'],
                "author" => $b['author'],
                "date" => $b['date'],
                "time" => $b['time'],
                "tags" => $b['tags'],
                "meta_title" => $b['meta_title'],
                "meta_desc" => $b['meta_desc'],
                "slug" => $b['slug'],
                "status" => (int) $b['status'],
                "image" => $b['image'],
                "views" => (int) $b['views'],
                "created_at" => $b['timestamp']
            ];
        }
        return $blogs;
    }

    function index() {
        redirect('blog/view');
    }

    function view(){
        $this->load->library('pagination');
        $this->load->helper('text'); 

        $all_blogs = $this->getBlogsFromDb(true);
        $total_rows = count($all_blogs);
        $per_page = 6;
        $offset = (int) $this->uri->segment(3);

        $config['base_url'] = site_url('blog/view');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = 3;

        $config['full_tag_open'] = '<ul class="styled-pagination clearfix text-center">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a href="#" class="active rc_first_hr color_dark">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_link'] = 'First';

        $this->pagination->initialize($config);

        $data['blogs'] = array_slice($all_blogs, $offset, $per_page);
        $data['total'] = $total_rows;
        $data['recent_posts'] = array_slice($all_blogs, 0, 5);

        $data['title'] = "Packers and Movers Blog & Relocation Tips | " . $this->comp['company3'];
        $data['description'] = "Read the latest relocation tips, packing guides, shifting hacks, and updates on the official blog of " . $this->comp['company3'] . ". Make your move easy and hassle-free.";
        $data['module'] = "blog";
        $data['view_file'] = "blog"; 

        echo Modules::run('template/layout2', $data);
    }

    function read($slug = '') {
        $this->load->helper('text');

        $all_blogs = $this->getBlogsFromDb(true);
        $selected_blog = null;
        
        foreach ($all_blogs as $b) {
            $custom_slug = $b['slug'] ?? '';
            $auto_slug = $this->slugify($b['title']);
            
            // Handle CI's translate_uri_dashes by replacing _ back to - in incoming slug
            $search_slug = str_replace('_', '-', $slug);

            if (
                (!empty($custom_slug) && strtolower($custom_slug) == strtolower($search_slug)) || 
                (strtolower($auto_slug) == strtolower($search_slug)) ||
                ($b['id'] == $search_slug)
            ) {
                $selected_blog = (object) $b;
                break;
            }
        }

        if ($selected_blog) {
            $data['query'] = [$selected_blog];
            $data['recent_posts'] = array_slice(array_reverse($all_blogs), 0, 5);
            
            $data['title'] = ucfirst($selected_blog->title) . " | " . $this->comp['company3'];
            $data['description'] = character_limiter(strip_tags($selected_blog->description), 155);
            
            $image_file = $selected_blog->image;
            $data['img'] = ($image_file && file_exists(FCPATH . 'assets/uploads/blog/' . $image_file)) ? base_url('assets/uploads/blog/'.$image_file) : base_url('assets/images/about/packers_movers.jpg');
            
            $data['module'] = "blog";
            $data['view_file'] = "view"; 

            echo Modules::run('template/layout2', $data);
        } else {
            show_404();
        }
    }
}
