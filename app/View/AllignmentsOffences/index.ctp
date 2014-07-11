<div class="allignmentsOffences index">
	<h2><?php echo __('Allignments Offences'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('leagues_team_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rightplayer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('centerplayer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('leftplayer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('number'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($allignmentsOffences as $allignmentsOffence): ?>
	<tr>
		<td><?php echo h($allignmentsOffence['AllignmentsOffence']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($allignmentsOffence['LeaguesTeam']['id'], array('controller' => 'leagues_teams', 'action' => 'view', $allignmentsOffence['LeaguesTeam']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($allignmentsOffence['Rightplayer']['id'], array('controller' => 'players', 'action' => 'view', $allignmentsOffence['Rightplayer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($allignmentsOffence['Centerplayer']['id'], array('controller' => 'players', 'action' => 'view', $allignmentsOffence['Centerplayer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($allignmentsOffence['Leftplayer']['id'], array('controller' => 'players', 'action' => 'view', $allignmentsOffence['Leftplayer']['id'])); ?>
		</td>
		<td><?php echo h($allignmentsOffence['AllignmentsOffence']['number']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $allignmentsOffence['AllignmentsOffence']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $allignmentsOffence['AllignmentsOffence']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $allignmentsOffence['AllignmentsOffence']['id']), array(), __('Are you sure you want to delete # %s?', $allignmentsOffence['AllignmentsOffence']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Allignments Offence'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Leagues Teams'), array('controller' => 'leagues_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leagues Team'), array('controller' => 'leagues_teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rightplayer'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
