<div class="allignmentsOffences view">
<h2><?php echo __('Allignments Offence'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($allignmentsOffence['AllignmentsOffence']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leagues Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($allignmentsOffence['LeaguesTeam']['id'], array('controller' => 'leagues_teams', 'action' => 'view', $allignmentsOffence['LeaguesTeam']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rightplayer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($allignmentsOffence['Rightplayer']['id'], array('controller' => 'players', 'action' => 'view', $allignmentsOffence['Rightplayer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Centerplayer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($allignmentsOffence['Centerplayer']['id'], array('controller' => 'players', 'action' => 'view', $allignmentsOffence['Centerplayer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leftplayer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($allignmentsOffence['Leftplayer']['id'], array('controller' => 'players', 'action' => 'view', $allignmentsOffence['Leftplayer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($allignmentsOffence['AllignmentsOffence']['number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Allignments Offence'), array('action' => 'edit', $allignmentsOffence['AllignmentsOffence']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Allignments Offence'), array('action' => 'delete', $allignmentsOffence['AllignmentsOffence']['id']), array(), __('Are you sure you want to delete # %s?', $allignmentsOffence['AllignmentsOffence']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Allignments Offences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Allignments Offence'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues Teams'), array('controller' => 'leagues_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leagues Team'), array('controller' => 'leagues_teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rightplayer'), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>
