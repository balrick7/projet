<div class="goalers form">
<?php echo $this->Form->create('Goaler'); ?>
	<fieldset>
		<legend><?php echo __('Add Goaler'); ?></legend>
	<?php
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('birthday');
		echo $this->Form->input('constancy');
		echo $this->Form->input('potential');
		echo $this->Form->input('glove');
		echo $this->Form->input('blocker');
		echo $this->Form->input('pads');
		echo $this->Form->input('stickcontrol');
		echo $this->Form->input('puckcontrol');
		echo $this->Form->input('leadership');
		echo $this->Form->input('fighting');
		echo $this->Form->input('movement');
		echo $this->Form->input('pass');
		echo $this->Form->input('positionning');
		echo $this->Form->input('height');
		echo $this->Form->input('overall_agressive');
		echo $this->Form->input('overall_passive');
		echo $this->Form->input('overall');
		echo $this->Form->input('leagues_team_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Goalers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Leagues Teams'), array('controller' => 'leagues_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leagues Team'), array('controller' => 'leagues_teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
