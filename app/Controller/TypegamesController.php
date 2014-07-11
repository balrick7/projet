<?php
App::uses('AppController', 'Controller');
/**
 * Typegames Controller
 *
 * @property Typegame $Typegame
 * @property PaginatorComponent $Paginator
 */
class TypegamesController extends AppController {

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
		$this->Typegame->recursive = 0;
		$this->set('typegames', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Typegame->exists($id)) {
			throw new NotFoundException(__('Invalid typegame'));
		}
		$options = array('conditions' => array('Typegame.' . $this->Typegame->primaryKey => $id));
		$this->set('typegame', $this->Typegame->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Typegame->create();
			if ($this->Typegame->save($this->request->data)) {
				$this->Session->setFlash(__('The typegame has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The typegame could not be saved. Please, try again.'));
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
		if (!$this->Typegame->exists($id)) {
			throw new NotFoundException(__('Invalid typegame'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Typegame->save($this->request->data)) {
				$this->Session->setFlash(__('The typegame has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The typegame could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Typegame.' . $this->Typegame->primaryKey => $id));
			$this->request->data = $this->Typegame->find('first', $options);
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
		$this->Typegame->id = $id;
		if (!$this->Typegame->exists()) {
			throw new NotFoundException(__('Invalid typegame'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Typegame->delete()) {
			$this->Session->setFlash(__('The typegame has been deleted.'));
		} else {
			$this->Session->setFlash(__('The typegame could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
