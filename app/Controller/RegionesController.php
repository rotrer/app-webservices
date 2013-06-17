<?php
App::uses('AppController', 'Controller');
/**
 * Regiones Controller
 *
 * @property Regione $Regione
 */
class RegionesController extends AppController {
	public $usess = array('Regione', 'Comuna');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Regione->recursive = 0;
		$arrData = array();
		$regione = $this->Regione->find('all');
		if($regione) foreach($regione as $region){
			$arrData[] = array(
				"id" => $region["Regione"]["id"],
				"name" => utf8_encode($region["Regione"]["name"])
			);
		}
		$this->set('data', $arrData);
		$this->set('_serialize', array('data'));
	}
}
