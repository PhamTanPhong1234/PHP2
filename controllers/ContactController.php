<?php
require_once('Controller.php');
class ContactController extends Controller
{
	public function index()
	{
		$this->loadView("ContactView.php");
	}
}
