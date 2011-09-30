<?php

class predict extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //$this->load->model('news_model');
    }
    //loads the index parts for the news page.  this includes the header,
    //body (included from index.php), and the footer
    public function index()
    {
        $data['title'] = '4711 project';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navigation');
        $this->load->view('pages/predict', $data);
        $this->load->view('templates/footer');
    }
}
?>
