<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

//$this->layout = false;

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
</head>
<body>
    <header>
      <h1>案件管理システム</h1>
    </header>
    <?=$this->Form->create(null, [
      'type' => 'post',
      'url' => ['controller' => 'login', 'action' => 'confirm']
    ]) ?>
    <?=$this->Form->label('id', 'ID:') ?>
    <?=$this->Form->text('id') ?><br>
    <?=$this->Form->label('password', 'PASSWORD:') ?>
    <?=$this->Form->password('password') ?>
    <?=$this->Form->submit('ログイン') ?>
    <?=$this->Form->end() ?>
</body>
</html>
