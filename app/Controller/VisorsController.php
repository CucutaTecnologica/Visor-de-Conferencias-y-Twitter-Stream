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
				$this->set("time", $event[0]['Event']['date']);								
				$next=$this->Event->Conference->findAllByNumber($number);
				$this->set("actual",$conferencia[0]);
				$this->set("proxima",$next[0]['Conference']['name']);
				
			
		
				
		// Aqui se debe traer hasta que fecha-hora va la conferencia.
		$this->render();

	}

}
