<?php
App::uses('AppController', 'Controller');
/**
 * LeaguesTeams Controller
 *
 * @property LeaguesTeam $LeaguesTeam
 * @property PaginatorComponent $Paginator
 */
class LeaguesTeamsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LeaguesTeam->recursive = 0;
		$this->set('leaguesTeams', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LeaguesTeam->exists($id)) {
			throw new NotFoundException(__('Invalid leagues team'));
		}
		$options = array('conditions' => array('LeaguesTeam.' . $this->LeaguesTeam->primaryKey => $id));
		$this->set('leaguesTeam', $this->LeaguesTeam->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LeaguesTeam->create();
			if ($this->LeaguesTeam->save($this->request->data)) {
				$this->Session->setFlash(__('The leagues team has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leagues team could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LeaguesTeam->exists($id)) {
			throw new NotFoundException(__('Invalid leagues team'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LeaguesTeam->save($this->request->data)) {
				$this->Session->setFlash(__('The leagues team has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leagues team could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LeaguesTeam.' . $this->LeaguesTeam->primaryKey => $id));
			$this->request->data = $this->LeaguesTeam->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LeaguesTeam->id = $id;
		if (!$this->LeaguesTeam->exists()) {
			throw new NotFoundException(__('Invalid leagues team'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LeaguesTeam->delete()) {
			$this->Session->setFlash(__('The leagues team has been deleted.'));
		} else {
			$this->Session->setFlash(__('The leagues team could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
