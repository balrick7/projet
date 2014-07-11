<div class="leaguesTeams form">
<?php echo $this->Form->create('LeaguesTeam'); ?>
	<fieldset>
		<legend><?php echo __('Edit Leagues Team'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('team_id');
		echo $this->Form->input('league_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LeaguesTeam.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('LeaguesTeam.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Leagues Teams'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New League'), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Allignments Defences'), array('controller' => 'allignments_defences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Allignments Defence'), array('controller' => 'allignments_defences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Allignments Offences'), array('controller' => 'allignments_offences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Allignments Offence'), array('controller' => 'allignments_offences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Goalers'), array('controller' => 'goalers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goaler'), array('controller' => 'goalers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
