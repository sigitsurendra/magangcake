<div class="companies view">
<h2><?php echo __('Company'); ?></h2>
	<dl>
		<dt><?php echo __('IdCompany'); ?></dt>
		<dd>
			<?php echo h($company['Company']['idCompany']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($company['Company']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($company['Company']['Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($company['Company']['Address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($company['Company']['Email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activationstatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($company['Activationstatus']['Description'], array('controller' => 'activationstatuses', 'action' => 'view', $company['Activationstatus']['idActivationStatus'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Industrycategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($company['Industrycategory']['Name'], array('controller' => 'industrycategories', 'action' => 'view', $company['Industrycategory']['idIndustryCategory'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($company['City']['Name'], array('controller' => 'cities', 'action' => 'view', $company['City']['idCity'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($company['Company']['Visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedDate'); ?></dt>
		<dd>
			<?php echo h($company['Company']['CreatedDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateDate'); ?></dt>
		<dd>
			<?php echo h($company['Company']['LastUpdateDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CreatedBy'); ?></dt>
		<dd>
			<?php echo h($company['Company']['CreatedBy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastUpdateBy'); ?></dt>
		<dd>
			<?php echo h($company['Company']['LastUpdateBy']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['idCompany'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['idCompany']), array(), __('Are you sure you want to delete # %s?', $company['Company']['idCompany'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Industrycategories'), array('controller' => 'industrycategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industrycategory'), array('controller' => 'industrycategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activationstatuses'), array('controller' => 'activationstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activationstatus'), array('controller' => 'activationstatuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
