<div class="schedules form">
<?php echo $this->Form->create('Schedule'); ?>
	<fieldset>
		<legend><?php echo __('Edit Schedule'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('scheduledate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Schedule.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Schedule.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
