<div class="players form">
<?php echo $this->Form->create('Player'); ?>
	<fieldset>
		<legend><?php echo __('Add Player'); ?></legend>
	<?php
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('position_id');
		echo $this->Form->input('birthday', array('minYear' => date('Y') - 70));
		echo $this->Form->input('potential');
		echo $this->Form->input('constancy');
		echo $this->Form->input('leadership');
		echo $this->Form->input('fighting');
		echo $this->Form->input('slapshoot');
		echo $this->Form->input('snapshoot');
		echo $this->Form->input('strenght');
		echo $this->Form->input('pass');
		echo $this->Form->input('puckcontrol');
		echo $this->Form->input('faceoff');
		echo $this->Form->input('positionning');
		echo $this->Form->input('hitting');
		echo $this->Form->input('checking');
		echo $this->Form->input('feint');
		echo $this->Form->input('balance');
		echo $this->Form->input('creativity');
		echo $this->Form->input('skating');
		echo $this->Form->input('height');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Players'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues Teams'), array('controller' => 'leagues_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leagues Team'), array('controller' => 'leagues_teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
