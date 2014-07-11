<div class="leaguesTeams view">
<h2><?php echo __('Leagues Team'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($leaguesTeam['LeaguesTeam']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($leaguesTeam['Team']['name'], array('controller' => 'teams', 'action' => 'view', $leaguesTeam['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('League'); ?></dt>
		<dd>
			<?php echo $this->Html->link($leaguesTeam['League']['name'], array('controller' => 'leagues', 'action' => 'view', $leaguesTeam['League']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Leagues Team'), array('action' => 'edit', $leaguesTeam['LeaguesTeam']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Leagues Team'), array('action' => 'delete', $leaguesTeam['LeaguesTeam']['id']), array(), __('Are you sure you want to delete # %s?', $leaguesTeam['LeaguesTeam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues Teams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leagues Team'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Allignments Defences'); ?></h3>
	<?php if (!empty($leaguesTeam['AllignmentsDefence'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Rightplayer Id'); ?></th>
		<th><?php echo __('Leftplayer Id'); ?></th>
		<th><?php echo __('Leagues Team Id'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($leaguesTeam['AllignmentsDefence'] as $allignmentsDefence): ?>
		<tr>
			<td><?php echo $allignmentsDefence['id']; ?></td>
			<td><?php echo $allignmentsDefence['rightplayer_id']; ?></td>
			<td><?php echo $allignmentsDefence['leftplayer_id']; ?></td>
			<td><?php echo $allignmentsDefence['leagues_team_id']; ?></td>
			<td><?php echo $allignmentsDefence['number']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'allignments_defences', 'action' => 'view', $allignmentsDefence['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'allignments_defences', 'action' => 'edit', $allignmentsDefence['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'allignments_defences', 'action' => 'delete', $allignmentsDefence['id']), array(), __('Are you sure you want to delete # %s?', $allignmentsDefence['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Allignments Defence'), array('controller' => 'allignments_defences', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Allignments Offences'); ?></h3>
	<?php if (!empty($leaguesTeam['AllignmentsOffence'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Leagues Team Id'); ?></th>
		<th><?php echo __('Rightplayer Id'); ?></th>
		<th><?php echo __('Centerplayer Id'); ?></th>
		<th><?php echo __('Leftplayer Id'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($leaguesTeam['AllignmentsOffence'] as $allignmentsOffence): ?>
		<tr>
			<td><?php echo $allignmentsOffence['id']; ?></td>
			<td><?php echo $allignmentsOffence['leagues_team_id']; ?></td>
			<td><?php echo $allignmentsOffence['rightplayer_id']; ?></td>
			<td><?php echo $allignmentsOffence['centerplayer_id']; ?></td>
			<td><?php echo $allignmentsOffence['leftplayer_id']; ?></td>
			<td><?php echo $allignmentsOffence['number']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'allignments_offences', 'action' => 'view', $allignmentsOffence['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'allignments_offences', 'action' => 'edit', $allignmentsOffence['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'allignments_offences', 'action' => 'delete', $allignmentsOffence['id']), array(), __('Are you sure you want to delete # %s?', $allignmentsOffence['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Allignments Offence'), array('controller' => 'allignments_offences', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Goalers'); ?></h3>
	<?php if (!empty($leaguesTeam['Goaler'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Birthday'); ?></th>
		<th><?php echo __('Constancy'); ?></th>
		<th><?php echo __('Potential'); ?></th>
		<th><?php echo __('Glove'); ?></th>
		<th><?php echo __('Blocker'); ?></th>
		<th><?php echo __('Pads'); ?></th>
		<th><?php echo __('Stickcontrol'); ?></th>
		<th><?php echo __('Puckcontrol'); ?></th>
		<th><?php echo __('Leadership'); ?></th>
		<th><?php echo __('Fighting'); ?></th>
		<th><?php echo __('Movement'); ?></th>
		<th><?php echo __('Pass'); ?></th>
		<th><?php echo __('Positionning'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Overall Agressive'); ?></th>
		<th><?php echo __('Overall Passive'); ?></th>
		<th><?php echo __('Overall'); ?></th>
		<th><?php echo __('Leagues Team Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($leaguesTeam['Goaler'] as $goaler): ?>
		<tr>
			<td><?php echo $goaler['id']; ?></td>
			<td><?php echo $goaler['firstname']; ?></td>
			<td><?php echo $goaler['lastname']; ?></td>
			<td><?php echo $goaler['birthday']; ?></td>
			<td><?php echo $goaler['constancy']; ?></td>
			<td><?php echo $goaler['potential']; ?></td>
			<td><?php echo $goaler['glove']; ?></td>
			<td><?php echo $goaler['blocker']; ?></td>
			<td><?php echo $goaler['pads']; ?></td>
			<td><?php echo $goaler['stickcontrol']; ?></td>
			<td><?php echo $goaler['puckcontrol']; ?></td>
			<td><?php echo $goaler['leadership']; ?></td>
			<td><?php echo $goaler['fighting']; ?></td>
			<td><?php echo $goaler['movement']; ?></td>
			<td><?php echo $goaler['pass']; ?></td>
			<td><?php echo $goaler['positionning']; ?></td>
			<td><?php echo $goaler['height']; ?></td>
			<td><?php echo $goaler['overall_agressive']; ?></td>
			<td><?php echo $goaler['overall_passive']; ?></td>
			<td><?php echo $goaler['overall']; ?></td>
			<td><?php echo $goaler['leagues_team_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'goalers', 'action' => 'view', $goaler['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'goalers', 'action' => 'edit', $goaler['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'goalers', 'action' => 'delete', $goaler['id']), array(), __('Are you sure you want to delete # %s?', $goaler['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Goaler'), array('controller' => 'goalers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Players'); ?></h3>
	<?php if (!empty($leaguesTeam['Player'])): ?>
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
	<?php foreach ($leaguesTeam['Player'] as $player): ?>
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
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($leaguesTeam['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Privilege'); ?></th>
		<th><?php echo __('Leagues Team Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($leaguesTeam['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['privilege']; ?></td>
			<td><?php echo $user['leagues_team_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
