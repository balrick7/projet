<div class="allignmentsDefences view">
<h2><?php echo __('Allignments Defence'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($allignmentsDefence['AllignmentsDefence']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rightplayer Id'); ?></dt>
		<dd>
			<?php echo h($allignmentsDefence['AllignmentsDefence']['rightplayer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leftplayer Id'); ?></dt>
		<dd>
			<?php echo h($allignmentsDefence['AllignmentsDefence']['leftplayer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leagues Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($allignmentsDefence['LeaguesTeam']['id'], array('controller' => 'leagues_teams', 'action' => 'view', $allignmentsDefence['LeaguesTeam']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($allignmentsDefence['AllignmentsDefence']['number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Allignments Defence'), array('action' => 'edit', $allignmentsDefence['AllignmentsDefence']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Allignments Defence'), array('action' => 'delete', $allignmentsDefence['AllignmentsDefence']['id']), array(), __('Are you sure you want to delete # %s?', $allignmentsDefence['AllignmentsDefence']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Allignments Defences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Allignments Defence'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rightplayer'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues Teams'), array('controller' => 'leagues_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leagues Team'), array('controller' => 'leagues_teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
