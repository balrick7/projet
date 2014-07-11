<div class="gamesPlayers form">
<?php echo $this->Form->create('GamesPlayer'); ?>
	<fieldset>
		<legend><?php echo __('Add Games Player'); ?></legend>
	<?php
		echo $this->Form->input('player_id');
		echo $this->Form->input('game_id');
		echo $this->Form->input('assist');
		echo $this->Form->input('goal');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Games Players'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
