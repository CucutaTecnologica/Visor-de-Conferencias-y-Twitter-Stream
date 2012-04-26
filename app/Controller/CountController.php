<?php
class CountController extends Controller {
	
	public function index(){
		$helpers = array('Html');
		// Aqui se debe traer hasta que fecha-hora va la conferencia.
		// Por ahora fecha estatica para simular
		$start = "2012-04-26 07:01:20";
		
		// Tiempo en minutos, dato estatico para ser simulado. Se debe traer
		// del campo duration.
		$duration = 45;
		$duration *= 60;
		
		$tmp = explode(" ", $start);
		$time = explode(":", $tmp[1]);
		$date = explode("-", $tmp[0]);
		$start_unix = mktime($time[0], $time[1], $time[2], $date[1], $date[2], $date[0]);
		$start_unix += $duration;
		
		$r = array();
		$r["year"] = date("Y", $start_unix);
		$r["month"] = date("m", $start_unix);
		$r["day"] = date("d", $start_unix);
		$r["min"] = date("i", $start_unix);
		$r["sec"] = date("s", $start_unix);
		$r["hour"] = date("H", $start_unix);
		//debug($r);
		$this->set("data", $r);
		$this->render();
	}
}