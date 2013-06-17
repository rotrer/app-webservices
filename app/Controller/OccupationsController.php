<?php
App::uses('AppController', 'Controller');
/**
 * Occupations Controller
 *
 * @property Occupation $Occupation
 */
class OccupationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Occupation->recursive = 0;
		$arrData = array();
		$occupations = $this->Occupation->find('all');
		if($occupations) foreach($occupations as $occupation){
			$arrData[] = array(
				"id" => $occupation["Occupation"]["id"],
				"name" => utf8_encode($occupation["Occupation"]["name"])
			);
		}
		$this->set('data', $arrData);
		$this->set('_serialize', array('data'));
	}
}
