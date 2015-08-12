<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Demo_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('EmailSender.php');
    }

    public function index() {

        $this->emailsender->send('yourclientemail@gmail.com');

    }

}
