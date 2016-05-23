<div class="floors form">
<?php echo $this->Form->create('Floor'); ?>
	<fieldset>
		<legend><?php echo __('Edit Floor'); ?></legend>
	<?php
		echo $this->Form->input('idFloor');
		echo $this->Form->input('name');
		echo $this->Form->input('capacity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Floor.idFloor')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Floor.idFloor')))); ?></li>
		<li><?php echo $this->Html->link(__('List Floors'), array('action' => 'index')); ?></li>
	</ul>
</div>
