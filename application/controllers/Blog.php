<?php 
class Blog extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$data['title']="Ini judul";
		$data['content']="Ini konten";
		$this->load->view('blog_view',$data);

	}
}
 ?>