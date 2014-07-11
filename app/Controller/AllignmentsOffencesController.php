<?php
App::uses('AppController', 'Controller');
/**
 * AllignmentsOffences Controller
 *
 * @property AllignmentsOffence $AllignmentsOffence
 * @property PaginatorComponent $Paginator
 */
class AllignmentsOffencesController extends AppController {

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
		$this->AllignmentsOffence->recursive = 0;
		$this->set('allignmentsOffences', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AllignmentsOffence->exists($id)) {
			throw new NotFoundException(__('Invalid allignments offence'));
		}
		$options = array('conditions' => array('AllignmentsOffence.' . $this->AllignmentsOffence->primaryKey => $id));
		$this->set('allignmentsOffence', $this->AllignmentsOffence->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AllignmentsOffence->create();
			if ($this->AllignmentsOffence->save($this->request->data)) {
				$this->Session->setFlash(__('The allignments offence has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The allignments offence could not be saved. Please, try again.'));
			}
		}
		$leaguesTeams = $this->AllignmentsOffence->LeaguesTeam->find('list');
		$rightplayers = $this->AllignmentsOffence->Rightplayer->find('list');
		$centerplayers = $this->AllignmentsOffence->Centerplayer->find('list');
		$leftplayers = $this->AllignmentsOffence->Leftplayer->find('list');
		$this->set(compact('leaguesTeams', 'rightplayers', 'centerplayers', 'leftplayers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AllignmentsOffence->exists($id)) {
			throw new NotFoundException(__('Invalid allignments offence'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AllignmentsOffence->save($this->request->data)) {
				$this->Session->setFlash(__('The allignments offence has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The allignments offence could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AllignmentsOffence.' . $this->AllignmentsOffence->primaryKey => $id));
			$this->request->data = $this->AllignmentsOffence->find('first', $options);
		}
		$leaguesTeams = $this->AllignmentsOffence->LeaguesTeam->find('list');
		$rightplayers = $this->AllignmentsOffence->Rightplayer->find('list');
		$centerplayers = $this->AllignmentsOffence->Centerplayer->find('list');
		$leftplayers = $this->AllignmentsOffence->Leftplayer->find('list');
		$this->set(compact('leaguesTeams', 'rightplayers', 'centerplayers', 'leftplayers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AllignmentsOffence->id = $id;
		if (!$this->AllignmentsOffence->exists()) {
			throw new NotFoundException(__('Invalid allignments offence'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AllignmentsOffence->delete()) {
			$this->Session->setFlash(__('The allignments offence has been deleted.'));
		} else {
			$this->Session->setFlash(__('The allignments offence could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
