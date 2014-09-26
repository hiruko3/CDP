
	<h2>
	Liste des ateliers
	</h2>

	<div class="list_atelier index">
        
        <?php echo $this->Form->input('txt', array('id' => 'researchtab','class' => 'researchtab','type' => 'text','label' => '','placeholder'=>'Search')); ?> <br>

        <table id="tableauAtelier" cellpadding="0" cellspacing="0" >

	<thead>
	<tr>
			<th><?php echo 'nom'; ?></th>
			<th><?php echo 'thème'; ?></th>
			<th><?php echo 'type'; ?></th>
                        <th><?php echo 'discipline'; ?></th>
                        <th><?php echo 'resumé'; ?></th>

			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>

	<tbody>

	<?php foreach ($ateliers as $atelier): ?>

		<td><?php echo h($atelier['Atelier']['atelier_nom']); ?>&nbsp;</td>
		<td><?php echo h($atelier['Atelier']['atelier_theme']); ?>&nbsp;</td>
		<td><?php echo h($atelier['Atelier']['atelier_type']); ?>&nbsp;</td>
		<td><?php echo h($atelier['Atelier']['atelier_discipline']); ?>&nbsp;</td>
		<td><?php echo h($atelier['Atelier']['atelier_resume']); ?>&nbsp;</td>

                <td><?php echo $this->Form->postLink(__('Voir la fiche'), array('controller' => 'atelier','action' => 'form', $atelier['Atelier']['id']), null); ?>

		</td>
		</tr>
	<?php endforeach; ?>

	</tbody>
	</table>
</div>

<div class="actions">
	<h3>
<?php echo __('Actions'); ?>
	</h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('Créer un nouvel atelier'), array('action' => 'add')); ?>
		</li>
	</ul>
	<br/><br/>
	<h3>

<?php echo $this->Html->script("researchTab", array("type" => "text/javascript")); ?>

</div>

