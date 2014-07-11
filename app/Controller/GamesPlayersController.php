<?php
App::uses('AppController', 'Controller');
/**
 * GamesPlayers Controller
 *
 * @property GamesPlayer $GamesPlayer
 * @property PaginatorComponent $Paginator
 */
class GamesPlayersController extends AppController {

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
		$this->GamesPlayer->recursive = 0;
		$this->set('gamesPlayers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GamesPlayer->exists($id)) {
			throw new NotFoundException(__('Invalid games player'));
		}
		$options = array('conditions' => array('GamesPlayer.' . $this->GamesPlayer->primaryKey => $id));
		$this->set('gamesPlayer', $this->GamesPlayer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GamesPlayer->create();
			if ($this->GamesPlayer->save($this->request->data)) {
				$this->Session->setFlash(__('The games player has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The games player could not be saved. Please, try again.'));
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
		if (!$this->GamesPlayer->exists($id)) {
			throw new NotFoundException(__('Invalid games player'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GamesPlayer->save($this->request->data)) {
				$this->Session->setFlash(__('The games player has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The games player could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GamesPlayer.' . $this->GamesPlayer->primaryKey => $id));
			$this->request->data = $this->GamesPlayer->find('first', $options);
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
		$this->GamesPlayer->id = $id;
		if (!$this->GamesPlayer->exists()) {
			throw new NotFoundException(__('Invalid games player'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->GamesPlayer->delete()) {
			$this->Session->setFlash(__('The games player has been deleted.'));
		} else {
			$this->Session->setFlash(__('The games player could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
