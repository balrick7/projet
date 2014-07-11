<div class="players index">
	<h2><?php echo __('Players'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('position_id'); ?></th>
			<th><?php echo $this->Paginator->sort('birthday'); ?></th>
			<th><?php echo $this->Paginator->sort('potential'); ?></th>
			<th><?php echo $this->Paginator->sort('constancy'); ?></th>
			<th><?php echo $this->Paginator->sort('leadership'); ?></th>
			<th><?php echo $this->Paginator->sort('fighting'); ?></th>
			<th><?php echo $this->Paginator->sort('slapshoot'); ?></th>
			<th><?php echo $this->Paginator->sort('snapshoot'); ?></th>
			<th><?php echo $this->Paginator->sort('strenght'); ?></th>
			<th><?php echo $this->Paginator->sort('pass'); ?></th>
			<th><?php echo $this->Paginator->sort('puckcontrol'); ?></th>
			<th><?php echo $this->Paginator->sort('faceoff'); ?></th>
			<th><?php echo $this->Paginator->sort('positionning'); ?></th>
			<th><?php echo $this->Paginator->sort('hitting'); ?></th>
			<th><?php echo $this->Paginator->sort('checking'); ?></th>
			<th><?php echo $this->Paginator->sort('feint'); ?></th>
			<th><?php echo $this->Paginator->sort('balance'); ?></th>
			<th><?php echo $this->Paginator->sort('creativity'); ?></th>
			<th><?php echo $this->Paginator->sort('skating'); ?></th>
			<th><?php echo $this->Paginator->sort('height'); ?></th>
			<th><?php echo $this->Paginator->sort('shoot'); ?></th>
			<th><?php echo $this->Paginator->sort('offensive'); ?></th>
			<th><?php echo $this->Paginator->sort('defensive'); ?></th>
			<th><?php echo $this->Paginator->sort('overall'); ?></th>
			<th><?php echo $this->Paginator->sort('leagues_team_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($players as $player): ?>
	<tr>
		<td><?php echo h($player['Player']['id']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['lastname']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($player['Position']['abbreviation'], array('controller' => 'positions', 'action' => 'view', $player['Position']['id'])); ?>
		</td>
		<td><?php echo h($player['Player']['birthday']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['potential']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['constancy']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['leadership']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['fighting']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['slapshoot']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['snapshoot']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['strenght']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['pass']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['puckcontrol']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['faceoff']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['positionning']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['hitting']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['checking']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['feint']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['balance']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['creativity']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['skating']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['height']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['shoot']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['offensive']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['defensive']); ?>&nbsp;</td>
		<td><?php echo h($player['Player']['overall']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($player['LeaguesTeam']['id'], array('controller' => 'leagues_teams', 'action' => 'view', $player['LeaguesTeam']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $player['Player']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $player['Player']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $player['Player']['id']), array(), __('Are you sure you want to delete # %s?', $player['Player']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Player'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues Teams'), array('controller' => 'leagues_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leagues Team'), array('controller' => 'leagues_teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
