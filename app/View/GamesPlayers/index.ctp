<div class="gamesPlayers index">
	<h2><?php echo __('Games Players'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('player_id'); ?></th>
			<th><?php echo $this->Paginator->sort('game_id'); ?></th>
			<th><?php echo $this->Paginator->sort('assist'); ?></th>
			<th><?php echo $this->Paginator->sort('goal'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($gamesPlayers as $gamesPlayer): ?>
	<tr>
		<td><?php echo h($gamesPlayer['GamesPlayer']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($gamesPlayer['Player']['id'], array('controller' => 'players', 'action' => 'view', $gamesPlayer['Player']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($gamesPlayer['Game']['id'], array('controller' => 'games', 'action' => 'view', $gamesPlayer['Game']['id'])); ?>
		</td>
		<td><?php echo h($gamesPlayer['GamesPlayer']['assist']); ?>&nbsp;</td>
		<td><?php echo h($gamesPlayer['GamesPlayer']['goal']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gamesPlayer['GamesPlayer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gamesPlayer['GamesPlayer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gamesPlayer['GamesPlayer']['id']), array(), __('Are you sure you want to delete # %s?', $gamesPlayer['GamesPlayer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Games Player'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>