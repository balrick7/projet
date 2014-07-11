<div class="typegames view">
<h2><?php echo __('Typegame'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($typegame['Typegame']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Types'); ?></dt>
		<dd>
			<?php echo h($typegame['Typegame']['types']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Typegame'), array('action' => 'edit', $typegame['Typegame']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Typegame'), array('action' => 'delete', $typegame['Typegame']['id']), array(), __('Are you sure you want to delete # %s?', $typegame['Typegame']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Typegames'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Typegame'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Games'); ?></h3>
	<?php if (!empty($typegame['Game'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Typegame Id'); ?></th>
		<th><?php echo __('Schedule Id'); ?></th>
		<th><?php echo __('Vleagues Team Id'); ?></th>
		<th><?php echo __('Hleagues Team Id'); ?></th>
		<th><?php echo __('Vscore'); ?></th>
		<th><?php echo __('Hscore'); ?></th>
		<th><?php echo __('Hshoot'); ?></th>
		<th><?php echo __('Vshoot'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($typegame['Game'] as $game): ?>
		<tr>
			<td><?php echo $game['id']; ?></td>
			<td><?php echo $game['typegame_id']; ?></td>
			<td><?php echo $game['schedule_id']; ?></td>
			<td><?php echo $game['vleagues_team_id']; ?></td>
			<td><?php echo $game['hleagues_team_id']; ?></td>
			<td><?php echo $game['vscore']; ?></td>
			<td><?php echo $game['hscore']; ?></td>
			<td><?php echo $game['hshoot']; ?></td>
			<td><?php echo $game['vshoot']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'games', 'action' => 'view', $game['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'games', 'action' => 'edit', $game['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'games', 'action' => 'delete', $game['id']), array(), __('Are you sure you want to delete # %s?', $game['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
