作成中
<?=$this->Form->create(null, ['url' => ['action' => 'list']]) ?>
<?=$this->Form->button('案件一覧') ?>
<?=$this->Form->end() ?>
<?=$this->Form->create(null, ['url' => ['action' => 'registration']]) ?>
<?=$this->Form->button('案件新規登録') ?>
<?=$this->Form->end() ?>
<?=$this->Form->create(null, ['url' => ['controller' => 'Menu', 'action' => 'index']]) ?>
<?=$this->Form->button('前の画面へ戻る') ?>
<?=$this->Form->end() ?>
