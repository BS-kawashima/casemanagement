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
class ProjectsController extends AppController
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
      $list = $this->Projects->find()
        ->contain(['Agents', 'Clients', 'Skills']);
      $this->set(compact('list'));
    }

    public function registration()
    {

    }

    public function process()
    {
      $this->autoRender = false;
      $name = $this->request->data('name');
      $agent = $this->request->data('agent');
      $client = $this->request->data('client');
      $skill = $this->request->data('skill');
      $staffs_number = $this->request->data('staffs_number');
      $from_date = $this->request->data('from_date');
      $to_date = $this->request->data('to_date');
      $memo = $this->request->data('memo');
      $this->Projects->query()
        ->insert(['name', 'agent_id', 'client_id', 'skill_id', 'staffs_number', 'from_date', 'to_date', 'memo'])
        ->values(['name' => $name, 'agent_id' => $agent, 'client_id' => $client, 'skill_id' => $skill, 'staffs_number' => $staffs_number, 'from_date' => $from_date, 'to_date' => $to_date, 'memo' => $memo])
        ->execute();
      return $this->redirect(['action' => 'index']);
    }

    public function edit($project_id)
    {
      $list = $this->Projects->find('all', ['conditions' => ['id' => $project_id]]);
      $this->set(compact('list'));
    }

    public function editProcess()
    {
      $this->autoRender = false;
      $project_id = $this->request->data('id');
      $name = $this->request->data('name');
      $agent_id = $this->request->data('agent_id');
      $client_id = $this->request->data('client_id');
      $skill_id = $this->request->data('skill_id');
      $staffs_number = $this->request->data('staffs_number');
      $from_date = $this->request->data('from_date');
      $to_date = $this->request->data('to_date');
      $status = $this->request->data('status');
      $memo = $this->request->data('memo');
      $this->Projects->query()->update()
        ->set(['name' => $name, 'agent_id' => $agent_id, 'client_id' => $client_id, 'skill_id' => $skill_id, 'staffs_number' => $staffs_number, 'from_date' => $from_date, 'to_date' => $to_date, 'status' => $status, 'memo' => $memo])
        ->where(['id' => $project_id])
        ->execute();
      return $this->redirect(['action' => 'index']);
    }
}
