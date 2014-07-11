<div class="allignmentsOffences form">
<?php echo $this->Form->create('AllignmentsOffence'); ?>
	<fieldset>
		<legend><?php echo __('Add Allignments Offence'); ?></legend>
	<?php
		echo $this->Form->input('leagues_team_id');
		echo $this->Form->input('rightplayer_id');
		echo $this->Form->input('centerplayer_id');
		echo $this->Form->input('leftplayer_id');
		echo $this->Form->input('number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Allignments Offences'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Leagues Teams'), array('controller' => 'leagues_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leagues Team'), array('controller' => 'leagues_teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rightplayer'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
