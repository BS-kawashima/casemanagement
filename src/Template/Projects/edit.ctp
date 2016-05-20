<?php foreach($list as $i) { ?>
	<?= $this->Form->create(null, ['type' => 'post', 'url' => ['contorller' => 'enginners', 'action' => 'editProcess']]) ?>
	<?= $this->Form->label('id', 'ID: '. $i->id) ?>
	<?= $this->Form->hidden('id', ['value' => $i->id]) ?>
	<?= $this->Form->label('name', '名前： '); ?>
	<?= $this->Form->text('name', ['default' => $i->name]) ?>
	<?= $this->Form->label('agent_id', '担当営業者 '); ?>
	<?= $this->Form->text('agent_id', ['default' => $i->agent_id]) ?>
	<?= $this->Form->label('client_id', '現場名 '); ?>
	<?= $this->Form->text('client_id', ['default' =>  $i->client_id]) ?>
	<?= $this->Form->label('skill_id', '使用言語、必要スキル： ') ?>
	<?= $this->Form->text('skill_id', ['default' =>  $i->skill_id]) ?>
	<?= $this->Form->label('staffs_number', '募集人数、稼動人数： ') ?>
	<?= $this->Form->text('staffs_number', ['default' =>  $i->staffs_number]) ?>
	<?= $this->Form->label('from_date', '開始時期： ') ?>
	<?= $this->Form->text('from_date', ['default' => $i->from_date]) ?>
	<?= $this->Form->label('to_date', '終了予定時期: ') ?>
	<?= $this->Form->text('to_date', ['default' => $i->to_date]) ?>
	<?= $this->Form->label('status', '状態') ?>
	<?= $this->Form->text('status', ['default' =>  $i->status]) ?>
	<?= $this->Form->label('memo', '備考： ') ?>
	<?= $this->Form->text('memo', ['default' =>  $i->memo]) ?>
	<?= $this->Form->submit('編集する') ?>
	<?= $this->Form->end() ?>
<?php } ?>
	<?=$this->Form->create(null, ['url' => ['controller' => 'Enginners', 'action' => 'index']]) ?>
	<?=$this->Form->button('前の画面へ戻る') ?>
	<?=$this->Form->end() ?>
