<?php foreach($list as $i) { ?>
  <?= $this->Form->create(null, ['type' => 'post', 'url' => ['contorller' => 'enginners', 'action' => 'editProcess']]) ?>
  <?= $this->Form->label('id', 'ID: '. $i->id) ?>
  <?= $this->Form->hidden('id', ['value' => $i->id]) ?>
  <?= $this->Form->text('name', ['default' => $i->name]) ?>
  <?= $this->Form->text('phonetic', ['default' => $i->phonetic]) ?>
  <?= $this->Form->text('email', ['default' =>  $i->email]) ?>
  <?= $this->Form->text('skill_id', ['default' =>  $i->skill_id]) ?>
  <?= $this->Form->text('entering_date', ['default' =>  $i->entering_date]) ?>
  <?= $this->Form->text('status', ['default' =>  $i->status]) ?>
  <?= $this->Form->text('project_id', ['default' =>  $i->project_id]) ?>
  <?= $this->Form->submit('編集する') ?>
  <?= $this->Form->end() ?>
<?php } ?>
