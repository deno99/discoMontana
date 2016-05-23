<div class="events view">
<h2><?php echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('IdEvent'); ?></dt>
		<dd>
			<?php echo h($event['Event']['idEvent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($event['Event']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($event['Event']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($event['Event']['end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdFloor'); ?></dt>
		<dd>
			<?php echo h($event['Event']['idFloor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['idEvent'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['idEvent']), array('confirm' => __('Are you sure you want to delete # %s?', $event['Event']['idEvent']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Floors'), array('controller' => 'floors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Floor'), array('controller' => 'floors', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Floors'); ?></h3>
	<?php if (!empty($event['Floor'])): ?>
		<dl>
			<dt><?php echo __('IdFloor'); ?></dt>
		<dd>
	<?php echo $event['Floor']['idFloor']; ?>
&nbsp;</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
	<?php echo $event['Floor']['name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Capacity'); ?></dt>
		<dd>
	<?php echo $event['Floor']['capacity']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Floor'), array('controller' => 'floors', 'action' => 'edit', $event['Floor']['idFloor'])); ?></li>
			</ul>
		</div>
	</div>
	