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
class LoginController extends AppController
{

    public function initialize()
    {
      //testレイアウトを指定
      $this->viewBuilder()->layout('login');
    }

    public function index()
    {

    }

    public function confirm()
    {
      //$this->autoRender = false;
      $id = $this->request->data('id');
      $password = $this->request->data('password');
      if ( $id == 'admin' && $password == 'admin') {
        $this->set('anser', 'ログイン成功');
      } else {
        $this->set('anser', 'ログイン失敗');
      }
    }
}
