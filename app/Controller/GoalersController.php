<?php
App::uses('AppController', 'Controller');
/**
 * Goalers Controller
 *
 * @property Goaler $Goaler
 * @property PaginatorComponent $Paginator
 */
class GoalersController extends AppController {

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
		$this->Goaler->recursive = 0;
		$this->set('goalers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Goaler->exists($id)) {
			throw new NotFoundException(__('Invalid goaler'));
		}
		$options = array('conditions' => array('Goaler.' . $this->Goaler->primaryKey => $id));
		$this->set('goaler', $this->Goaler->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Goaler->create();
			if ($this->Goaler->save($this->request->data)) {
				$this->Session->setFlash(__('The goaler has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The goaler could not be saved. Please, try again.'));
			}
		}
		$leaguesTeams = $this->Goaler->LeaguesTeam->find('list');
		$this->set(compact('leaguesTeams'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Goaler->exists($id)) {
			throw new NotFoundException(__('Invalid goaler'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Goaler->save($this->request->data)) {
				$this->Session->setFlash(__('The goaler has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The goaler could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Goaler.' . $this->Goaler->primaryKey => $id));
			$this->request->data = $this->Goaler->find('first', $options);
		}
		$leaguesTeams = $this->Goaler->LeaguesTeam->find('list');
		$this->set(compact('leaguesTeams'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Goaler->id = $id;
		if (!$this->Goaler->exists()) {
			throw new NotFoundException(__('Invalid goaler'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Goaler->delete()) {
			$this->Session->setFlash(__('The goaler has been deleted.'));
		} else {
			$this->Session->setFlash(__('The goaler could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
