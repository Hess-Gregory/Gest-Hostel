<h1>Formulaire d'ajout de chambres</h1>
	<form action="" method="post">

		<div >
			<label for="">Titre du bien:</label>
			<input type="text" name="roomName" id="">	
		</div>

		<div>
			<label for="">Description courte:</label>
			<input type="text" name="shortDescription" id="">			
		</div>

		<div >
			<label for="">Description:</label>
			<input type="text" name="longDescription" id="">			
		</div>

		<div >
			<label for="">Nombre de salles de bain:</label>
			<input type="text" name="bathroomQuantity" id="">	
		</div>	

		<div >	
			<label for="">Hôtel:</label>
			<select name="hotelSelect" id="">
				<!-- accéder aux elements à partir de la bd et les crée dynamiquement dans la view $hotels-->
				
						<?= $hostelsOptions ?>
				
			</select>
		</div>
		<div >
			<label for="">Capacité enfants:</label>
			<input type="number" name="children" id="">				
		</div>
		<div >
			<label for="">Capacité adultes:</label>
			<input type="number" name="adults" id="">				
		</div>
		<div >	
			<label for="">Type de Chambre:</label>
			<select name="roomType" id="">
				<!-- accéder aux elements à partir de la bd et les crée dynamiquement dans la view $hotels-->
						<?= $roomResult ?>
				
			</select>
		</div>

		<div>
			<label for="">Nombre de toilettes:</label>
			<input type="text" name="toiletQuantity" id="">		
		</div>

		<div >
			<label for="">Balcon :</label>
			<input type="number" name="balcony" id="">				
		</div>
		
		</div>	
				
		<div >
			<div >
				<h4>Options :</h4>
				<div class="FormHostelOptionsRadio">
			<?= $optionResult ?>
					<!-- accéder aux elements à partir de la bd et les crée dynamiquement dans la view $options -->
				</div>	
			</div>

	

	</div>	

</div>		
<input type="submit" value="Enregistrer" >
</form>