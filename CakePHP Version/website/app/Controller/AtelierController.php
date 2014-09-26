<?php

App::uses('AppController', 'Controller');

/**
 * Patients Controller
 *
 * @property Patient $Patient
 */
class AtelierController extends AppController {

    var $helpers = array('Js' => array('Jquery'));

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        //$idUser = $this->Session->read('Auth.User.id');
        //$this->set('idUser', $idUser);
        
        $this->set('ateliers', $this->Atelier->find('all', array('order' => 'atelier_nom ASC')));
    }

    
    public function add() {
        // En cas de post
        if ($this->request->is('post')) {
            
            $this->Atelier->create();
            if ($this->Atelier->save($this->request->data)) {
                //$this->Session->setFlash("Cet Atelier a été créé", "success");
                $this->Session->setFlash("Cet Atelier a été créé");
                //return $this->redirect(array('action' => 'index'));
            } else {
                //$this->Session->setFlash("ERREUR : L'atelier n'a pas été sauvegardé", "error");
                $this->Session->setFlash("ERREUR : L'atelier n'a pas été sauvegardé");
            }
        }
    }
    
    
    public function form($idAtelier) {
        $options = array('conditions' => array('atelier.' . $this->Atelier->primaryKey => $idAtelier));
        $this->set('atelier', $this->Atelier->find('first', $options));
    }

}
