<form class="mdl-color--white mdl-shadow--2dp mdl-cell" action="<?php if(isset($_GET['n'])) { echo "inc/post/new.php?n"; } else { echo "inc/post/new.php?nd"; }?>" method="post" enctype="multipart/form-data">
	<div class="center-login mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
		<input class="mdl-textfield__input" type="text" id="sample3" name="titre"/>
		<label class="mdl-textfield__label" for="sample3">Titre</label>
	</div>
	<?php if(isset($_GET['n'])) { ?>
		<div class="center-login mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
			<input class="mdl-textfield__input" type="text" id="sample3" name="link"/>
			<label class="mdl-textfield__label" for="sample3">Lien</label>
		</div>
		<div class="center-login mdl-textfield mdl-js-textfield textfield-demo">
			<textarea class="mdl-textfield__input" type="text" rows= "10" id="sample5" name="content"></textarea>
			<label class="mdl-textfield__label" for="sample5">Nature du bugs... Expliquer clairement.</label>
		</div>
		<div class="center-login" style="margin-bottom: 20px;">
			<input type="hidden" name="MAX_FILE_SIZE" value="209715200">     
			<input type="file" name="filename">
		</div>
	<?php } else { ?>
		<div class="center-login mdl-textfield mdl-js-textfield textfield-demo">
			<textarea class="mdl-textfield__input" type="text" rows= "10" id="sample5" name="content"></textarea>
			<label class="mdl-textfield__label" for="sample5">Nature de la demande... Expliquer clairement.</label>
		</div>
	<?php } ?>
	<div class="center-login" style="margin-bottom: 20px">
		<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
			Ajouter
		</button>
	</div>
</form>