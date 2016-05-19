<?php foreach($list as $i) { ?>
  <?= $this->Form->label('id', 'ID: '. $i->id) ?>
  <?= $this->Form->label('name', '名前: '. $i->name) ?>
  <?= $this->Form->label('phonetic', 'よみかた: '. $i->phonetic) ?>
  <?= $this->Form->label('e-mail', 'e-mail: '. $i->email) ?>
  <?= $this->Form->label('skill', 'スキル: '. $i->skill->name) ?>
  <?= $this->Form->label('entering_date', '入社日: '. $i->entering_date) ?>
  <?= $this->Form->label('status', '状態: '. $i->status->name) ?>
  <?= $this->Form->label('project_id', '出向プロジェクト名: '. $i->project->name) ?>
  <?= $this->Form->create(null,['type' => 'get', 'url' => ['contorller' => 'enginners', 'action' => 'edit', $i->id]]) ?>
  <?= $this->Form->button('編集する') ?>
  <?= $this->Form->end() ?>
<?php } ?>
  <?=$this->Form->create(null, ['url' => ['controller' => 'Enginners', 'action' => 'index']]) ?>
  <?=$this->Form->button('前の画面へ戻る') ?>
  <?=$this->Form->end() ?>
