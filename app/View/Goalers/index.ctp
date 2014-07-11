<div class="goalers index">
	<h2><?php echo __('Goalers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('birthday'); ?></th>
			<th><?php echo $this->Paginator->sort('constancy'); ?></th>
			<th><?php echo $this->Paginator->sort('potential'); ?></th>
			<th><?php echo $this->Paginator->sort('glove'); ?></th>
			<th><?php echo $this->Paginator->sort('blocker'); ?></th>
			<th><?php echo $this->Paginator->sort('pads'); ?></th>
			<th><?php echo $this->Paginator->sort('stickcontrol'); ?></th>
			<th><?php echo $this->Paginator->sort('puckcontrol'); ?></th>
			<th><?php echo $this->Paginator->sort('leadership'); ?></th>
			<th><?php echo $this->Paginator->sort('fighting'); ?></th>
			<th><?php echo $this->Paginator->sort('movement'); ?></th>
			<th><?php echo $this->Paginator->sort('pass'); ?></th>
			<th><?php echo $this->Paginator->sort('positionning'); ?></th>
			<th><?php echo $this->Paginator->sort('height'); ?></th>
			<th><?php echo $this->Paginator->sort('overall_agressive'); ?></th>
			<th><?php echo $this->Paginator->sort('overall_passive'); ?></th>
			<th><?php echo $this->Paginator->sort('overall'); ?></th>
			<th><?php echo $this->Paginator->sort('leagues_team_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($goalers as $goaler): ?>
	<tr>
		<td><?php echo h($goaler['Goaler']['id']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['birthday']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['constancy']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['potential']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['glove']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['blocker']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['pads']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['stickcontrol']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['puckcontrol']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['leadership']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['fighting']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['movement']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['pass']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['positionning']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['height']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['overall_agressive']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['overall_passive']); ?>&nbsp;</td>
		<td><?php echo h($goaler['Goaler']['overall']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($goaler['LeaguesTeam']['id'], array('controller' => 'leagues_teams', 'action' => 'view', $goaler['LeaguesTeam']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $goaler['Goaler']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $goaler['Goaler']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $goaler['Goaler']['id']), array(), __('Are you sure you want to delete # %s?', $goaler['Goaler']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Goaler'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Leagues Teams'), array('controller' => 'leagues_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leagues Team'), array('controller' => 'leagues_teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
