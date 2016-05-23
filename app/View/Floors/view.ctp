<div class="floors view">
<h2><?php echo __('Floor'); ?></h2>
	<dl>
		<dt><?php echo __('IdFloor'); ?></dt>
		<dd>
			<?php echo h($floor['Floor']['idFloor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($floor['Floor']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capacity'); ?></dt>
		<dd>
			<?php echo h($floor['Floor']['capacity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Floor'), array('action' => 'edit', $floor['Floor']['idFloor'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Floor'), array('action' => 'delete', $floor['Floor']['idFloor']), array('confirm' => __('Are you sure you want to delete # %s?', $floor['Floor']['idFloor']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Floors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Floor'), array('action' => 'add')); ?> </li>
	</ul>
</div>
