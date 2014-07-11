<?php
App::uses('AppController', 'Controller');
/**
 * AllignmentsDefences Controller
 *
 * @property AllignmentsDefence $AllignmentsDefence
 * @property PaginatorComponent $Paginator
 */
class AllignmentsDefencesController extends AppController {

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
		$this->AllignmentsDefence->recursive = 0;
		$this->set('allignmentsDefences', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AllignmentsDefence->exists($id)) {
			throw new NotFoundException(__('Invalid allignments defence'));
		}
		$options = array('conditions' => array('AllignmentsDefence.' . $this->AllignmentsDefence->primaryKey => $id));
		$this->set('allignmentsDefence', $this->AllignmentsDefence->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AllignmentsDefence->create();
			if ($this->AllignmentsDefence->save($this->request->data)) {
				$this->Session->setFlash(__('The allignments defence has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The allignments defence could not be saved. Please, try again.'));
			}
		}
		$rightplayers = $this->AllignmentsDefence->Rightplayer->find('list');
		$leftplayers = $this->AllignmentsDefence->Leftplayer->find('list');
		$leaguesTeams = $this->AllignmentsDefence->LeaguesTeam->find('list');
		$this->set(compact('rightplayers', 'leftplayers', 'leaguesTeams'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AllignmentsDefence->exists($id)) {
			throw new NotFoundException(__('Invalid allignments defence'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AllignmentsDefence->save($this->request->data)) {
				$this->Session->setFlash(__('The allignments defence has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The allignments defence could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AllignmentsDefence.' . $this->AllignmentsDefence->primaryKey => $id));
			$this->request->data = $this->AllignmentsDefence->find('first', $options);
		}
		$rightplayers = $this->AllignmentsDefence->Rightplayer->find('list');
		$leftplayers = $this->AllignmentsDefence->Leftplayer->find('list');
		$leaguesTeams = $this->AllignmentsDefence->LeaguesTeam->find('list');
		$this->set(compact('rightplayers', 'leftplayers', 'leaguesTeams'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AllignmentsDefence->id = $id;
		if (!$this->AllignmentsDefence->exists()) {
			throw new NotFoundException(__('Invalid allignments defence'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AllignmentsDefence->delete()) {
			$this->Session->setFlash(__('The allignments defence has been deleted.'));
		} else {
			$this->Session->setFlash(__('The allignments defence could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
