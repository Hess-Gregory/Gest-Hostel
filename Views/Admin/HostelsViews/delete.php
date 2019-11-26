<main class="main">
	<h1 class="title">Interface admin</h1>
	<form action="#" method="post">
		<p>Etes-vous sûre de vouloir supprimer l'hotel ?' :</p>
		<p style="color:red"><?= $p ?></p>
		<input type="radio" name="choice" value="yes">
		<label for="yes">Oui</label>
		<input type="radio" name="choice" value="no">
		<label for="no">Non</label>
		<input type="submit" value="Je suis sûr(e)">
	</form>
</main>
