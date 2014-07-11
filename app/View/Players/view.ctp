<div class="players view">
<h2><?php echo __('Player'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($player['Player']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($player['Player']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($player['Player']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo $this->Html->link($player['Position']['id'], array('controller' => 'positions', 'action' => 'view', $player['Position']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($player['Player']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Potential'); ?></dt>
		<dd>
			<?php echo h($player['Player']['potential']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Constancy'); ?></dt>
		<dd>
			<?php echo h($player['Player']['constancy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leadership'); ?></dt>
		<dd>
			<?php echo h($player['Player']['leadership']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fighting'); ?></dt>
		<dd>
			<?php echo h($player['Player']['fighting']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slapshoot'); ?></dt>
		<dd>
			<?php echo h($player['Player']['slapshoot']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Snapshoot'); ?></dt>
		<dd>
			<?php echo h($player['Player']['snapshoot']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Strenght'); ?></dt>
		<dd>
			<?php echo h($player['Player']['strenght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pass'); ?></dt>
		<dd>
			<?php echo h($player['Player']['pass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Puckcontrol'); ?></dt>
		<dd>
			<?php echo h($player['Player']['puckcontrol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faceoff'); ?></dt>
		<dd>
			<?php echo h($player['Player']['faceoff']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Positionning'); ?></dt>
		<dd>
			<?php echo h($player['Player']['positionning']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hitting'); ?></dt>
		<dd>
			<?php echo h($player['Player']['hitting']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checking'); ?></dt>
		<dd>
			<?php echo h($player['Player']['checking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feint'); ?></dt>
		<dd>
			<?php echo h($player['Player']['feint']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Balance'); ?></dt>
		<dd>
			<?php echo h($player['Player']['balance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creativity'); ?></dt>
		<dd>
			<?php echo h($player['Player']['creativity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Skating'); ?></dt>
		<dd>
			<?php echo h($player['Player']['skating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($player['Player']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shoot'); ?></dt>
		<dd>
			<?php echo h($player['Player']['shoot']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Offensive'); ?></dt>
		<dd>
			<?php echo h($player['Player']['offensive']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Defensive'); ?></dt>
		<dd>
			<?php echo h($player['Player']['defensive']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overall'); ?></dt>
		<dd>
			<?php echo h($player['Player']['overall']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leagues Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($player['LeaguesTeam']['id'], array('controller' => 'leagues_teams', 'action' => 'view', $player['LeaguesTeam']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Player'), array('action' => 'edit', $player['Player']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Player'), array('action' => 'delete', $player['Player']['id']), array(), __('Are you sure you want to delete # %s?', $player['Player']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues Teams'), array('controller' => 'leagues_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leagues Team'), array('controller' => 'leagues_teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Games'), array('controller' => 'games', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Game'), array('controller' => 'games', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Games'); ?></h3>
	<?php if (!empty($player['Game'])): ?>
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
	<?php foreach ($player['Game'] as $game): ?>
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
