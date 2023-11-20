<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitungpersegi extends CI_Controller {


    function __construct() 
    {
        parent::__construct();
        $this->load->library('tabung');

    }

     function index()
    {
        $this->tabung->hasil('3.14','5','3');

    }
}
?>
