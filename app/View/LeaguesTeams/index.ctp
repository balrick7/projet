<div class="leaguesTeams index">
	<h2><?php echo __('Leagues Teams'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('team_id'); ?></th>
			<th><?php echo $this->Paginator->sort('league_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($leaguesTeams as $leaguesTeam): ?>
	<tr>
		<td><?php echo h($leaguesTeam['LeaguesTeam']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($leaguesTeam['Team']['name'], array('controller' => 'teams', 'action' => 'view', $leaguesTeam['Team']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($leaguesTeam['League']['name'], array('controller' => 'leagues', 'action' => 'view', $leaguesTeam['League']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $leaguesTeam['LeaguesTeam']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $leaguesTeam['LeaguesTeam']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $leaguesTeam['LeaguesTeam']['id']), array(), __('Are you sure you want to delete # %s?', $leaguesTeam['LeaguesTeam']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Leagues Team'), array('action' => 'add')); ?></li>
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
