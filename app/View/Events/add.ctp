<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Add Event'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
		echo $floor->name;
		echo $this->Form->input('idFloor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Floors'), array('controller' => 'floors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Floor'), array('controller' => 'floors', 'action' => 'add')); ?> </li>
	</ul>
</div>
