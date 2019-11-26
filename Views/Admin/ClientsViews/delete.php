
<main class="main">

<h1 class="title">Interface admin</h1>
<h2>Suppresion de client</h2>

<div class="container">
	<form action="#" method="post">
		<p>Etes-vous sûre de vouloir supprimer le client? :</p>
		<p style="color:red"><?= $p ?></p>
		<input type="radio" name="choice" value="yes">
		<label for="yes">Oui</label>
		<input type="radio" name="choice" value="no">
		<label for="no">Non</label>
		<input type="submit" value="Je suis sûr(e)">
	</form>

</div></main>
