<?php foreach($list as $i) { ?>
  <?= $this->Form->label('id', 'ID: '. $i->id) ?>
  <?= $this->Form->label('name', '名前: '. $i->name) ?>
  <?= $this->Form->label('phonetic', 'よみかた: '. $i->phonetic) ?>
  <?= $this->Form->label('e-mail', 'e-mail: '. $i->email) ?>
  <?= $this->Form->label('skill', 'スキル: '. $i->skill_id) ?>
  <?= $this->Form->label('entering_date', '入社日: '. $i->entering_date) ?>
  <?= $this->Form->label('status', '状態: '. $i->status) ?>
  <?= $this->Form->label('project_id', '現場名: '. $i->project_id) ?>
  <?= $this->Form->create(null,['type' => 'get', 'url' => ['contorller' => 'enginners', 'action' => 'edit', $i->id]]) ?>
  <?= $this->Form->button('編集する') ?>
  <?= $this->Form->end() ?>
<?php } ?>
