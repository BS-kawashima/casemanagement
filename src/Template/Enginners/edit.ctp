<?php foreach($list as $i) { ?>
	<?= $this->Form->create(null, ['type' => 'post', 'url' => ['contorller' => 'enginners', 'action' => 'editProcess']]) ?>
	<?= $this->Form->label('id', 'ID: '. $i->id) ?>
	<?= $this->Form->hidden('id', ['value' => $i->id]) ?>
	<?= $this->Form->label('name', '名前： '); ?>
	<?= $this->Form->text('name', ['default' => $i->name]) ?>
	<?= $this->Form->label('phonetic', 'よみかた： '); ?>
	<?= $this->Form->text('phonetic', ['default' => $i->phonetic]) ?>
	<?= $this->Form->label('email', 'メールアドレス： '); ?>
	<?= $this->Form->text('email', ['default' =>  $i->email]) ?>
	<?= $this->Form->label('skill', '使用言語、スキル： ') ?>
	<?= $this->Form->text('skill_id', ['default' =>  $i->skill_id]) ?>
	<?= $this->Form->label('entering_date', '入社日： ') ?>
	<?= $this->Form->text('entering_date', ['default' =>  $i->entering_date]) ?>
	<?= $this->Form->label('status', '状態') ?>
	<?= $this->Form->text('status', ['default' =>  $i->status]) ?>
	<?= $this->Form->label('project_id', '現場名： ') ?>
	<?= $this->Form->text('project_id', ['default' =>  $i->project_id]) ?>
	<?= $this->Form->submit('編集する') ?>
	<?= $this->Form->end() ?>
<?php } ?>
	<?=$this->Form->create(null, ['url' => ['controller' => 'Enginners', 'action' => 'index']]) ?>
	<?=$this->Form->button('前の画面へ戻る') ?>
	<?=$this->Form->end() ?>
