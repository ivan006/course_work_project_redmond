<?php
class Trips_c extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		include( APPPATH."libraries/datatables/DataTables.php" );
	}

	function index()
	{
		$this->load->view('header.php');
		$this->load->view('trips_v');
		$this->load->view('footer.php');
	}

}
