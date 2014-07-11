<div class="positions view">
<h2><?php echo __('Position'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($position['Position']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($position['Position']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Abbreviation'); ?></dt>
		<dd>
			<?php echo h($position['Position']['abbreviation']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Position'), array('action' => 'edit', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Position'), array('action' => 'delete', $position['Position']['id']), array(), __('Are you sure you want to delete # %s?', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Players'); ?></h3>
	<?php if (!empty($position['Player'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Position Id'); ?></th>
		<th><?php echo __('Birthday'); ?></th>
		<th><?php echo __('Potential'); ?></th>
		<th><?php echo __('Constancy'); ?></th>
		<th><?php echo __('Leadership'); ?></th>
		<th><?php echo __('Fighting'); ?></th>
		<th><?php echo __('Slapshoot'); ?></th>
		<th><?php echo __('Snapshoot'); ?></th>
		<th><?php echo __('Strenght'); ?></th>
		<th><?php echo __('Pass'); ?></th>
		<th><?php echo __('Puckcontrol'); ?></th>
		<th><?php echo __('Faceoff'); ?></th>
		<th><?php echo __('Positionning'); ?></th>
		<th><?php echo __('Hitting'); ?></th>
		<th><?php echo __('Checking'); ?></th>
		<th><?php echo __('Feint'); ?></th>
		<th><?php echo __('Balance'); ?></th>
		<th><?php echo __('Creativity'); ?></th>
		<th><?php echo __('Skating'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Shoot'); ?></th>
		<th><?php echo __('Offensive'); ?></th>
		<th><?php echo __('Defensive'); ?></th>
		<th><?php echo __('Overall'); ?></th>
		<th><?php echo __('Leagues Team Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($position['Player'] as $player): ?>
		<tr>
			<td><?php echo $player['id']; ?></td>
			<td><?php echo $player['firstname']; ?></td>
			<td><?php echo $player['lastname']; ?></td>
			<td><?php echo $player['position_id']; ?></td>
			<td><?php echo $player['birthday']; ?></td>
			<td><?php echo $player['potential']; ?></td>
			<td><?php echo $player['constancy']; ?></td>
			<td><?php echo $player['leadership']; ?></td>
			<td><?php echo $player['fighting']; ?></td>
			<td><?php echo $player['slapshoot']; ?></td>
			<td><?php echo $player['snapshoot']; ?></td>
			<td><?php echo $player['strenght']; ?></td>
			<td><?php echo $player['pass']; ?></td>
			<td><?php echo $player['puckcontrol']; ?></td>
			<td><?php echo $player['faceoff']; ?></td>
			<td><?php echo $player['positionning']; ?></td>
			<td><?php echo $player['hitting']; ?></td>
			<td><?php echo $player['checking']; ?></td>
			<td><?php echo $player['feint']; ?></td>
			<td><?php echo $player['balance']; ?></td>
			<td><?php echo $player['creativity']; ?></td>
			<td><?php echo $player['skating']; ?></td>
			<td><?php echo $player['height']; ?></td>
			<td><?php echo $player['shoot']; ?></td>
			<td><?php echo $player['offensive']; ?></td>
			<td><?php echo $player['defensive']; ?></td>
			<td><?php echo $player['overall']; ?></td>
			<td><?php echo $player['leagues_team_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'players', 'action' => 'view', $player['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'players', 'action' => 'edit', $player['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'players', 'action' => 'delete', $player['id']), array(), __('Are you sure you want to delete # %s?', $player['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
