<?=$this->Form->create(null, [
  'type' => 'post',
  'url' => ['controller' => 'enginners', 'action' => 'process']
]) ?>
<?= $this->Form->label('name', '名前:') ?>
<?= $this->Form->text('name') ?>
<?= $this->Form->label('phonetic', 'よみかた:') ?>
<?= $this->Form->text('phonetic') ?>
<?= $this->Form->label('email', 'メールアドレス:') ?>
<?= $this->Form->text('email') ?>
<?= $this->Form->label('skill_id', 'スキル:') ?>
<?= $this->Form->text('skill_id') ?>
<?= $this->Form->label('entering_date', '入社日:') ?>
<?= $this->Form->text('entering_date', ['dafault' => 'test']) ?>
<?= $this->Form->submit('登録') ?>
<?= $this->Form->end() ?>
