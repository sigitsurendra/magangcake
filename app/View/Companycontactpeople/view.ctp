<div class="companycontactpeople view">
<h2><?php echo __('Companycontactperson'); ?></h2>
	<dl>
		<dt><?php echo __('IdCompanyContactPerson'); ?></dt>
		<dd>
			<?php echo h($companycontactperson['Companycontactperson']['idCompanyContactPerson']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($companycontactperson['Companycontactperson']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($companycontactperson['Companycontactperson']['Email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone1'); ?></dt>
		<dd>
			<?php echo h($companycontactperson['Companycontactperson']['Phone1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone2'); ?></dt>
		<dd>
			<?php echo h($companycontactperson['Companycontactperson']['Phone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone3'); ?></dt>
		<dd>
			<?php echo h($companycontactperson['Companycontactperson']['Phone3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($companycontactperson['Company']['idCompany'], array('controller' => 'companies', 'action' => 'view', $companycontactperson['Company']['idCompany'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($companycontactperson['Companycontactperson']['Visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedDate'); ?></dt>
		<dd>
			<?php echo h($companycontactperson['Companycontactperson']['CreatedDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateDate'); ?></dt>
		<dd>
			<?php echo h($companycontactperson['Companycontactperson']['LastUpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedBy'); ?></dt>
		<dd>
			<?php echo h($companycontactperson['Companycontactperson']['CreatedBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateBy'); ?></dt>
		<dd>
			<?php echo h($companycontactperson['Companycontactperson']['LastUpdateBy']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Companycontactperson'), array('action' => 'edit', $companycontactperson['Companycontactperson']['idCompanyContactPerson'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Companycontactperson'), array('action' => 'delete', $companycontactperson['Companycontactperson']['idCompanyContactPerson']), array(), __('Are you sure you want to delete # %s?', $companycontactperson['Companycontactperson']['idCompanyContactPerson'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companycontactpeople'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Companycontactperson'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
