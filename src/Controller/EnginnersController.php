<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class EnginnersController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function index()
    {

    }

    public function list()
    {
      $list = $this->Enginners->find()
      ->contain(['Skills']);
      $this->set(compact('list'));
    }

    public function registration()
    {

    }

    public function process()
    {
      $this->autoRender = false;
      $name = $this->request->data('name');
      $phonetic = $this->request->data('phonetic');
      $email = $this->request->data('email');
      $skill_id = $this->request->data('skill_id');
      $entering_date = $this->request->data('entering_date');
      $this->Enginners->query()
        ->insert(['name', 'phonetic', 'email', 'skill_id', 'entering_date'])
        ->values(['name' => $name, 'phonetic' => $phonetic, 'email' => $email, 'skill_id' => $skill_id, 'entering_date' => $entering_date])
        ->execute();
      return $this->redirect(['action' => 'index']);
    }

    public function edit($enginner_id)
    {
      $list = $this->Enginners->find('all', ['conditions' => ['id' => $enginner_id]]);
      $this->set(compact('list'));
    }

    public function editProcess()
    {
      $this->autoRender = false;
      $enginner_id = $this->request->data('id');
      $name = $this->request->data('name');
      $phonetic = $this->request->data('phonetic');
      $email = $this->request->data('email');
      $skill_id = $this->request->data('skill_id');
      $entering_date = $this->request->data('entering_date');
      $status = $this->request->data('status');
      $project_id = $this->request->data('project_id');
      $this->Enginners->query()->update()
        ->set(['name' => $name, 'phonetic' => $phonetic, 'email' => $email, 'skill_id' => $skill_id, 'entering_date' => $entering_date, 'status' => $status, 'project_id' => $project_id])
        ->where(['id' => $enginner_id])
        ->execute();
      return $this->redirect(['action' => 'index']);
    }
}
