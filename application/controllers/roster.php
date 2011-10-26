<?php

class roster extends CI_Controller
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
        $data['body'] = 'roster';
        $data['result'] = $this->getXMLArray();

        if (isset($_POST['sortby'])) {
            $data['sortby'] = $_POST['sortby'];
        }

        $this->load->view('templates/template', $data);
    }

    public function getXMLArray() {
        $xml = simplexml_load_file('data/MaraudersRoster.xml');
        $result = array();

        $index = 0;
        foreach ($xml->players as $player) {
            $row = array($player->number, $player->first_name,
                    $player->last_name, $player->position);

            $result[$index] = $row;
            $index++;
        }
    }
}
?>
