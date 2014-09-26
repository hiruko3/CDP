	<h2>
	Fiche Atelier
	</h2>

<div class="atelier_display index">
    
    <h2>
        <?php echo h($atelier['Atelier']['atelier_nom']); ?> <br/>
    </h2>

    <h5>
        Thème : <?php echo h($atelier['Atelier']['atelier_theme']); ?> <br/>
        Type : <?php echo h($atelier['Atelier']['atelier_type']);; ?> <br/>
        Discipline : <?php echo h($atelier['Atelier']['atelier_discipline']); ?> <br/>
        Capacité : <?php echo h($atelier['Atelier']['atelier_capacite']); ?> <br/>
    </h5>
<br/>
    <h5>
    	Durée : <?php echo h($atelier['Atelier']['atelier_duree']); ?> <br/>
    	Adresse : <?php echo h($atelier['Atelier']['atelier_adresse']); ?> <br/>
    	Zone : <?php echo h($atelier['Atelier']['atelier_zone']); ?> <br/>
    </h5>
<br/>
    <p>
    	Résumé de l'atelier : <?php echo h($atelier['Atelier']['atelier_resume']); ?>
    </p>
    <br/>
    <p>
    	Remarque concernant l'atelier : <?php echo h($atelier['Atelier']['atelier_remarque']);?>
    
    </p>

    <br />
    </p>
</div>



<div class="actions">
	<h3>
		<?php //echo __('Actions'); ?>
	</h3>
	<ul>
<?php echo $this->Html->link(__('Retour à la liste des ateliers'), array('action' => 'index')); ?>
	</ul>
</div>