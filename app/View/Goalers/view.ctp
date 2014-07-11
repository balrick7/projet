<div class="goalers view">
<h2><?php echo __('Goaler'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Constancy'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['constancy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Potential'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['potential']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Glove'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['glove']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blocker'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['blocker']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pads'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['pads']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stickcontrol'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['stickcontrol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Puckcontrol'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['puckcontrol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leadership'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['leadership']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fighting'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['fighting']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Movement'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['movement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pass'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['pass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Positionning'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['positionning']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overall Agressive'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['overall_agressive']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overall Passive'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['overall_passive']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overall'); ?></dt>
		<dd>
			<?php echo h($goaler['Goaler']['overall']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leagues Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($goaler['LeaguesTeam']['id'], array('controller' => 'leagues_teams', 'action' => 'view', $goaler['LeaguesTeam']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Goaler'), array('action' => 'edit', $goaler['Goaler']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Goaler'), array('action' => 'delete', $goaler['Goaler']['id']), array(), __('Are you sure you want to delete # %s?', $goaler['Goaler']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Goalers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Goaler'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues Teams'), array('controller' => 'leagues_teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leagues Team'), array('controller' => 'leagues_teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
