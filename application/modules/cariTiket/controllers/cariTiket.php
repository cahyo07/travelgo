<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CariTiket extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

    function index()
    {
      $this->load->view('detailTiket');
    }
}
?>