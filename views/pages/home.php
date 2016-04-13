<section>
	<div class="sub-title">
		<p>Écris le nom de ton film favori pour trouver le film de la soirée</p>
	</div>

	<div class="search-bar">
        <form class="test" method="GET" action="" style="text-align: center;position: absolute;left: 10%;margin-top:25px">
            <input type="search" name="keywords" placeholder="Tapez le nom de votre film"/>
            <input type="submit" class="hide" value="rechercher"></button>
        </form>
    </div>
	
	<div class="btn-sign">
		<a href="#" class="sign">INSCRIS-TOI POUR SAUVEGARDER TES RECHERCHES</a>
	</div>



	<div class="social-net">
		<a href="#"><img src="src/images/fb.png"></a>
		<img src="src/images/line.png">
		<a href="#"><img src="src/images/twitter.png"></a>
		<img src="src/images/line.png">
		<a href="#"><img src="src/images/linkedin.png"></a>
	</div>

	<div class="sign-in animated slideInUp"><!-- POP-IN Inscription -->
		<div class="title2">
			<h4>Inscription</h4>
		</div>
		<div class="exit">
			<img src="src/images/cross.png">
		</div>
		<form action="#" method="post">
			<div>
				<label for="username">IDENTIFIANT :</label>
				<input type="text" name="username" id="username" require="true">
				<label for="motdepass">MOT DE PASSE :</label>
				<input type="text" name="motdepass" id="motdepass" require="true">
				<label for="email">EMAIL :</label>
				<input type="text" name="email" id="email" require="true">
				<input type="submit" class="submit">
			</div>				
		</form>
	</div>

	<div class="connect animated slideInUp"><!-- POP-IN Mon compte -->
		<div class="title2">
			<h4>Mon compte</h4>
		</div>
		<div class="exit1">
			<img src="src/images/cross.png">
		</div>
		<form action="#" method="post" class="account">
			<div>
				<label for="username">IDENTIFIANT :</label>
				<input type="text" name="username" id="username" require="true">
				<label for="motdepass">MOT DE PASSE :</label>
				<input type="password" name="motdepass" id="motdepass" require="true">
				<input type="submit" class="submit">
			</div>				
		</form>
	</div>

	<div class="search <? if(!empty($_GET['keywords'])){ echo "visible";} ?>" >
		<div class="container">
				<div class="exit3">
					<img src="src/images/cross.png">
				</div>					 
					<?php foreach(array_slice($data->results, 0, 6) as $results): ?>
					<figure data-id='<?= $results->id ?>'></figure>
					<div class="article" data-id="<?= $results->id ?>">

					<img src="http://image.tmdb.org/t/p/w500/<?= $results->poster_path?>">
							<div class="settings">
								<p><?= $results->title?></p>
								<img src="src/images/eye.png">
								<img src="src/images/line3.png">
								<img src="src/images/love.png">
								<img src="src/images/line3.png">
								<img src="src/images/plus.png">
							</div>
						
					</div>
					<?php endforeach; ?>
		</div>
	</div>

<?php foreach(array_slice($data->results, 0, 6) as $results): ?>

	<div class="movie animated zoomIn movie-<?= $results->id ?>">
		<div class="ss-bar">
			<div class="name">
				<p><?= $results->title?></p>
			</div>
			<div class="love">
				<img src="src/images/love.png">
			</div>
			<div class="exit2">
				<img src="src/images/cross.png">
			</div>
		</div>
		<div class="cover">
			<img src="http://image.tmdb.org/t/p/w500/<?= $results->poster_path?>">
		</div>
		<div class="rating">
			<p>note du film :</p>
			<p>1 / 5</p>
			<p class="directeur">Directeur</p>
			<p class="name-author">Nom du directeur</p>
			<p class="name-author">Acteurs</p>
			<p class="directeur">Acteurs</p>
			<p class="name-author">Acteur 2</p>
			<p class="name-author">Acteur 2</p>
			<p class="name-author">Acteur 2</p>
		</div>
		<div class="overview">
			<p>Dans ce nouveau volet, Batman augmente les mises dans sa guerre contre le crime. Avec l'appui du lieutenant de police Jim Gordon et du procureur de Gotham, Harvey Dent, Batman vise à éradiquer le crime organisé qui pullule dans la ville. Leur association est très efficace mais elle sera bientôt bouleversée par le chaos déclenché par un criminel extraordinaire que les citoyens de Gotham connaissent sous le nom de Joker.</p>
		</div>
	</div>
<?php endforeach; ?>

				
	


		<div class="btn-search">
			<a href="#" class="search-btn">AFFINER MA RECHERCHE</a>
		</div>
	</div>


</section>