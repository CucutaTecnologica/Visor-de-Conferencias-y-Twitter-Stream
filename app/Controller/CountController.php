<?php
class CountController extends Controller {
	
	public function index(){
		$helpers = array('Html');
		// Aqui se debe traer hasta que fecha-hora va la conferencia.
		$this->set("time", "xd");
		$this->render();
	}
}