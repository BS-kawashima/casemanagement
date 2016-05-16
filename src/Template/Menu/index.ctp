<h1>めにゅ～がめん</h1><br>

<?=$this->Form->create(null, ['url' => ['controller' => 'projects', 'action' => 'index']]) ?>
<?=$this->Form->button('案件管理') ?>
<?=$this->Form->end() ?>
<?=$this->Form->create(null, ['url' => ['controller' => 'enginners', 'action' => 'index']]) ?>
<?=$this->Form->button('技術者管理') ?>
<?=$this->Form->end() ?>
<?=$this->Form->create(null, ['url' => ['controller' => 'agents', 'action' => 'index']]) ?>
<?=$this->Form->button('ログイン画面へ戻る') ?>
<?=$this->Form->end() ?>
