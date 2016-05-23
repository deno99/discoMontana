<div class="floors form">
<?php echo $this->Form->create('Floor'); ?>
	<fieldset>
		<legend><?php echo __('Add Floor'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('capacity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Floors'), array('action' => 'index')); ?></li>
	</ul>
</div>
