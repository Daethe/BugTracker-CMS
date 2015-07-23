<?php
include 'bdd.php';

if (!isset($_GET['r']) && !isset($_GET['n']) && !isset($_GET['c']) && !isset($_GET['d']) && !isset($_GET['nd']) && !isset($_GET['li'])) {
	$req = $bdd->prepare("SELECT * FROM bug_content WHERE resolve = 0");
	$req->execute();

	if(Auth::isLogged()) { ?>
		<form action="inc/save.php" method="post">
			<table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
				<thead>
					<tr>
						<th class="mdl-data-table__cell--non-numeric">Titre</th>
						<th>Lien</th>
						<th>Plus</th>
						<th>Résolu ?</th>
					</tr>
				</thead>
				<tbody>
					<?php
						while ($data = $req->fetch()) { ?>
							<tr>
								<td class="mdl-data-table__cell--non-numeric"><?php echo $data['titre']; ?></td>
								<td><a href="<?php echo $data['link']; ?>" target=_blank><?php echo $data['link']; ?></a></td>
								<td><a href="index.php?c=<?php echo $data['id']; ?>">Voir plus</a></td>
								<td>
									<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-<?php echo $data['id']; ?>">
										<input name="resolve[<?php echo $data['id']; ?>]" type="checkbox" id="switch-<?php echo $data['id']; ?>" class="mdl-switch__input" />
										<span class="mdl-switch__label"></span>
									</label>
								</td>
							</tr>
						<?php }
					?>
				</tbody>
			</table>
			<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Enregistrer</button>
            <a href="index.php?n" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Nouveau</a>
		</form>
	<?php } else if(!Auth::isLogged()) {
	?>
		<table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
			<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric">Titre</th>
					<th>Lien</th>
					<th>Plus</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					while ($data = $req->fetch()) { ?>
						<tr>
							<td class="mdl-data-table__cell--non-numeric"><?php echo $data['titre']; ?></td>
							<td><a href="<?php echo $data['link']; ?>" target=_blank><?php echo $data['link']; ?></a></td>
							<td><a href="index.php?c=<?php echo $data['id']; ?>">Voir plus</a></td>
						</tr>
					<?php }
				?>
			</tbody>
		</table>
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
			<a href="index.php?n">Signaler un problème</a>
		</button>
	<?php 
	} 
} else if (isset($_GET['d'])) { 
	$req = $bdd->prepare("SELECT * FROM demand_content");
	$req->execute();
	?>

	<table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
			<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric">Titre</th>
					<th>Contenu de la demande </th>
					<th>Plus</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					while ($data = $req->fetch()) { ?>
						<tr>
							<td class="mdl-data-table__cell--non-numeric"><?php echo $data['titre']; ?></td>
							<td>
								<?php
									$parts = explode(" ", $data['content']);
									$contenu = $parts[0]." ";
									$i = 1;
									while ($i < 10) {
										$contenu = $contenu.$parts[$i]." ";
										$i++;
									}
									// On affiche le contenu du billet
									echo nl2br(htmlspecialchars($contenu."..."));
									
									?>
							</td>
							<td><a href="index.php?cd=<?php echo $data['id']; ?>">Voir plus</a></td>
						</tr>
					<?php }
				?>
			</tbody>
		</table>
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
			<a href="index.php?nd">Demander</a>
		</button>
<?php } ?>