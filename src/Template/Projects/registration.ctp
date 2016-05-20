<?= $this->Form->create(null, [
	'type' => 'post',
	'url' => ['action' => 'process']
]) ?>
<?= $this->Form->label('name', '案件名： ') ?>
<?= $this->Form->text('name') ?>
<?= $this->Form->label('agent', '担当営業者: ') ?>
<?= $this->Form->text('agent') ?>
<?= $this->Form->label('client', '現場名: ') ?>
<?= $this->Form->text('client') ?>
<?= $this->Form->label('skill', '必要技術: ') ?>
<?= $this->Form->text('skill') ?>
<?= $this->Form->label('staffs_number', '募集人数: ') ?>
<?= $this->Form->text('staffs_number') ?>
<?= $this->Form->label('from_date', '開始時期: ') ?>
<?= $this->Form->text('from_date') ?>
<?= $this->Form->label('to_date', '終了時期: ') ?>
<?= $this->Form->text('to_date') ?>
<?= $this->Form->label('memo', '備考: ') ?>
<?= $this->Form->textarea('memo') ?>
<?= $this->Form->submit('登録') ?>
<?= $this->Form->end() ?>
