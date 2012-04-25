<?php
class TwitterController extends Controller {
	
	public function index(){
		$helpers = array('Html');
		$this->render();
	}
	
	public function post($key){
		$this->autoRender = false;
		$url = "http://search.twitter.com/search.json?q=$key";
		$ch = curl_init($url);
		$options = array(CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HTTPHEADER => array('Content-type: application/json'));
		curl_setopt_array($ch, $options);
		$result = curl_exec($ch);
		return $result;	
	}
}