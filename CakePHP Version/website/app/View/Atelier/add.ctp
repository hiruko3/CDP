	<h2>
	Ajout d'un atelier
	</h2>

<div class="atelier form">
<?php echo $this->Form->create('Atelier'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('atelier_nom', array('label' => 'Nom'));
		echo $this->Form->input('atelier_theme', array('label' => 'Theme'));
                echo $this->Form->input('atelier_type', array('label' => 'Type'));
                echo $this->Form->input('atelier_discipline', array('label' => 'Discipline'));
                echo $this->Form->input('atelier_resume', array('label' => 'Resumé','required' => false));
                echo $this->Form->input('atelier_duree', array('label' => 'Durée'));
                echo $this->Form->input('atelier_capacite', array('label' => 'Capacité'));
                echo $this->Form->input('atelier_inscription', array('label' => 'Inscription'));
                echo $this->Form->input('atelier_laboratoire', array('label' => 'Laboratoire'));
                echo $this->Form->input('atelier_adresse', array('label' => 'Adresse'));
                echo $this->Form->input('atelier_zone', array('label' => 'Zone'));
                echo $this->Form->input('atelier_remarque', array('label' => 'Remarque','required' => false));
		//echo $this->Form->input('information', array('value' => '','required' => false));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Create')); ?>
</div>

<div class="actions">
	<h3>
		<?php //echo __('Actions'); ?>
	</h3>
	<ul>
		<li>
<?php echo $this->Html->link(__('Retour à la liste des ateliers'), array('action' => 'index')); ?>
		</li>
	</ul>
</div>
