<?php include 'bdd.php'; ?>

<table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp">
	<thead>
		<tr>
			<th class="mdl-data-table__cell--non-numeric"><?php Lang::strLang("tit_pb"); ?></th>
			<th><?php echo Lang::strLang("lin_pb"); ?></th>
			<th><?php echo Lang::strLang("plu_pb"); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php

			$req = $bdd->prepare("SELECT * FROM bug_content WHERE resolve = 1");
			$req->execute();
			while ($data = $req->fetch()) { ?>
				<tr>
					<td class="mdl-data-table__cell--non-numeric"><?php echo $data['titre']; ?></td>
					<td><a href="<?php echo $data['link']; ?>" target=_blank><?php echo $data['link']; ?></a></td>
					<td><a href="index.php?c=<?php echo $data['id']; ?>"><?php echo Lang::strLang("view_more"); ?></a></td>
					
				</tr>
			<?php }
		?>
	</tbody>
</table>