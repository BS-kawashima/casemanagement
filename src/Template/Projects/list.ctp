<?php foreach($list as $i) { ?>
  <?= $this->Form->label('id', 'ID: '. $i->id) ?>
  <?= $this->Form->label('name', '名前: '. $i->name) ?>
  <?= $this->Form->label('agent_id', '担当営業者: '. $i->agent->name) ?>
  <?= $this->Form->label('client_id', '現場名: '. $i->client->name) ?>
  <?= $this->Form->label('skill_id', '必要スキル: '. $i->skill->name) ?>
  <?= $this->Form->label('staffs_number', '必要人数: '. $i->staffs_number) ?>
  <?= $this->Form->label('from_date', '開始時期: '. $i->from_date) ?>
  <?= $this->Form->label('to_date', '終了予定時期: '. $i->to_date) ?>
  <?= $this->Form->label('memo', '備考: '. $i->memo) ?>
  <?= $this->Form->create(null,['type' => 'get', 'url' => ['contorller' => 'projects', 'action' => 'edit', $i->id]]) ?>
  <?= $this->Form->button('編集する') ?>
  <?= $this->Form->end() ?>
<?php } ?>
  <?=$this->Form->create(null, ['url' => ['action' => 'index']]) ?>
  <?=$this->Form->button('前の画面へ戻る') ?>
  <?=$this->Form->end() ?>
