<?php

class ExampleController extends Controller{
	function index()
	{
		$this->load->helper('url');
		$title = 'این یک عنوان نمونه است';
		
		echo url_title($title);//این-یک-عنوان-نمونه-است
	}

}