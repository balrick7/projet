<div class="games index">
	<h2><?php echo __('Games'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('typegame_id'); ?></th>
			<th><?php echo $this->Paginator->sort('schedule_id'); ?></th>
			<th><?php echo $this->Paginator->sort('vleagues_team_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hleagues_team_id'); ?></th>
			<th><?php echo $this->Paginator->sort('vscore'); ?></th>
			<th><?php echo $this->Paginator->sort('hscore'); ?></th>
			<th><?php echo $this->Paginator->sort('hshoot'); ?></th>
			<th><?php echo $this->Paginator->sort('vshoot'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($games as $game): ?>
	<tr>
		<td><?php echo h($game['Game']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($game['Typegame']['id'], array('controller' => 'typegames', 'action' => 'view', $game['Typegame']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($game['Schedule']['id'], array('controller' => 'schedules', 'action' => 'view', $game['Schedule']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($game['VleaguesTeam']['id'], array('controller' => 'leagues_teams', 'action' => 'view', $game['VleaguesTeam']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($game['HleaguesTeam']['id'], array('controller' => 'leagues_teams', 'action' => 'view', $game['HleaguesTeam']['id'])); ?>
		</td>
		<td><?php echo h($game['Game']['vscore']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['hscore']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['hshoot']); ?>&nbsp;</td>
		<td><?php echo h($game['Game']['vshoot']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $game['Game']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $game['Game']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $game['Game']['id']), array(), __('Are you sure you want to delete # %s?', $game['Game']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Game'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Typegames'), array('controller' => 'typegames', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Typegame'), array('controller' => 'typegames', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues Teams'), array('controller' => 'leagues_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vleagues Team'), array('controller' => 'leagues_teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
