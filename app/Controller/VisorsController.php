<?php
App::uses('AppController', 'Controller');
/**
 * Visor Controller
 *
 * @property Conference $Conference
 */
class VisorsController extends AppController {
 var $layout="visor";
 var $uses=array("Conference", "Event");
/**
 * index method
 *
 * @return void
 */
	public function index() {		
		$event=$this->Event->findAllByDate(date('d-m-Y'));
		if(!empty($event)){
			$this->set("name", $event[0]['Event']['name']);
		}
		 /**
		  * Se envia a la vista, un array de la conferencia actual, el nombre de la conferencia siguiente
		  * La fecha del evento actual
		  * Para sacar la duracion de tabla se encuentra en el arreglo "actual"
		  * */
				$conferencia=$this->Event->Conference->findAllByStatus('1');
				$number= $conferencia[0]['Conference']['number']+1;				
				$this->set("time", $conferencia[0]['Event']['date']);
				$next=$this->Event->Conference->find("all", array("conditions"=>array("Conference.id >"=>$conferencia[0]["Conference"]['id']), 'order'=>'Conference.id ASC'));
				$this->set("actual",$conferencia[0]);
				$this->set("proxima",$next[0]['Conference']['name']);
				
		// Contador
		$start = $conferencia[0]['Conference']['start_time'];
		$duration = $conferencia[0]['Conference']['duration'];
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
		$this->set("data", $r);
				
			
		
				
		// Aqui se debe traer hasta que fecha-hora va la conferencia.
		$this->render();

	}

}
