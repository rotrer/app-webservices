<?php
App::uses('AppController', 'Controller');
/**
 * Comunas Controller
 *
 * @property Comuna $Comuna
 */
class ComunasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Comuna->recursive = 0;
		$arrData = array();
		$comuna = $this->Comuna->find('all');
		if($comuna) foreach($comuna as $comun){
			$arrData[] = array(
				"id" => $comun["Comuna"]["id"],
				"name" => utf8_encode($comun["Comuna"]["name"]),
				"region_id" => $comun["Comuna"]["region_id"]
			);
		}
		$this->set('data', $arrData);
		$this->set('_serialize', array('data'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Comuna->exists($id)) {
			throw new NotFoundException(__('Invalid comuna'));
		}
		$options = array('conditions' => array('Comuna.' . $this->Comuna->primaryKey => $id));
		$comun = $this->Comuna->find('first', $options);
		$arrData = array();
		$arrData[] = array(
			"id" => $comun["Comuna"]["id"],
			"name" => utf8_encode($comun["Comuna"]["name"]),
			"region_id" => $comun["Comuna"]["region_id"]
		);
		$this->set('data', $arrData);
		$this->set('_serialize', array('data'));
	}

/**
 * get method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function get($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid región'));
		}
		#$options = array('conditions' => array('Comuna.' . $this->Comuna->primaryKey => $id));
		$comuna = $this->Comuna->findAllByRegionId($id);
		if($comuna) foreach($comuna as $comun){
			$arrData[] = array(
				"id" => $comun["Comuna"]["id"],
				"name" => utf8_encode($comun["Comuna"]["name"]),
				"region_id" => $comun["Comuna"]["region_id"]
			);
		}
		$this->set('data', $arrData);
		$this->set('_serialize', array('data'));
	}
}
