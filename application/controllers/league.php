<?php

class league extends CI_Controller
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
        $data['body'] = 'league';

        $previousChoice;


        if (isset($_POST['displayBy']))
        {
            if ($_POST['displayBy'] != "-1")
            {
                $data['displayType'] = $_POST['displayBy'];
            } else
                $data['displayType'] = '';
        } else
        {
            $data['displayType'] = '';
        }


        $this->load->view('templates/template', $data);
    }

}

?>
