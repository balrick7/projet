<div class="gamesPlayers view">
<h2><?php echo __('Games Player'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gamesPlayer['GamesPlayer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Player'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gamesPlayer['Player']['id'], array('controller' => 'players', 'action' => 'view', $gamesPlayer['Player']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Game'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gamesPlayer['Game']['id'], array('controller' => 'games', 'action' => 'view', $gamesPlayer['Game']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assist'); ?></dt>
		<dd>
			<?php echo h($gamesPlayer['GamesPlayer']['assist']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Goal'); ?></dt>
		<dd>
			<?php echo h($gamesPlayer['GamesPlayer']['goal']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Games Player'), array('action' => 'edit', $gamesPlayer['GamesPlayer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Games Player'), array('action' => 'delete', $gamesPlayer['GamesPlayer']['id']), array(), __('Are you sure you want to delete # %s?', $gamesPlayer['GamesPlayer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Games Players'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Games Player'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
