<section>
	<div class="sub-title">
		<p>Écris le nom de ton film favori pour trouver le film de la soirée</p>
	</div>


	
	<div class="search-bar"><!-- BARRE DE RECHERCHE -->
        <form class="test" method="GET" action="" style="text-align: center;margin:0 auto;">
            <input type="search" name="keywords" placeholder="Rechercher votre film"/>
            <input type="submit" class="hide" value="rechercher"></button>
        </form>
    </div>
	
	<div class="btn-sign"><!-- BOUTON D'INSCRIPTION -->
		<a href="#" class="sign">INSCRIS-TOI POUR SAUVEGARDER TES RECHERCHES</a>
	</div>



	<div class="social-net"><!-- RÉSEAUX SOCIAUX -->
		<a href="#"><img src="src/images/fb.png"></a>
		<img src="src/images/line.png">
		<a href="#"><img src="src/images/twitter.png"></a>
		<img src="src/images/line.png">
		<a href="#"><img src="src/images/linkedin.png"></a>
	</div>



	<div class="sign-in animated slideInUp"><!-- POPIN INSCRIPTION -->
		<div class="title2">
			<h4>Inscription</h4>
		</div>
		<div class="exit">
			<img src="src/images/cross.png">
		</div>
		<div class="fbconnect">
			<a href="#"><img src="src/images/facebook.png"></a>
		</div>

		<form action="#" method="post" class="inscri" >
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

	<div class="acount animated slideInUp"><!-- POPIN INSCRIPTION -->
		<div class="title2">
			<h4>Mon compte</h4>
		</div>
		<div class="exit3">
			<img src="src/images/cross.png">
		</div>
		<div class="profil">
			<p>Nom</p>
			<p>Prénom</p>
		</div>
		<div class="picture">
			<img src="">
		</div>	
		<div class="menu">
			<ul>
				<a href="#"><li>Film déja vus</li></a>
				<a href="#"><li>Film adoré</li></a>
				<a href="#"><li>A regarder</li></a>
			</ul>
		</div>
		<div class="content">
			<div class="film">
				<img src="src/images/batmancover.png">
			</div>
		</div>


	</div>



	<div class="search <? if(!empty($_GET['keywords'])){ echo "visible";} ?> animated slideInUp" ><!-- AFFICHE DE FILMS SIMILAIRES -->
		<div class="container">
				<div class="exit3">
					<img src="src/images/cross.png">
				</div>

				<?php foreach(array_slice($data->results, 0, 6) as $results): ?>
				<figure data-id='<?= $results->id ?>'>
					<div class="article">
						<img src="http://image.tmdb.org/t/p/w500/<?= $results->poster_path?>">
							<div class="settings">
								<p><?= $results->title?></p><!-- NOM DE CHAQUE FILM -->
								<a href="#"><img src="src/images/eye.png"></a>
								<img src="src/images/line3.png">
								<a href="#"><img src="src/images/love.png"></a>
								<img src="src/images/line3.png">
								<a href="#"><img src="src/images/plus.png"></a>
							</div>	
					</div>
				</figure>
				<?php endforeach; ?>
		</div>
	</div>


			
	<div class="movie animated zoomIn"><!-- AFFICHE DE LA PAGE DESCRIPTION DE FILM -->
		<div class="backdrop">
			<img  id="cover" src=""><!-- AFFICHE DU BACKDROP -->
		<div class="ss-bar">
			<div class="name">
				<p id="movie-title"></p>
			</div>
			<div class="love">
				<img onclick="#" src="src/images/love.png">
			</div>
			<div class="exit2">
				<img src="src/images/cross.png">
			</div>
		</div>
		<div class="cover">
			<img  id="cover2" src="">
		</div>
		<div class="rating">
			<p>Note du film :</p>
			<p id="rating">1 / 5</p>
			<p class="directeur">Date de parution :</p>
			<p class="name-author" id="director">Nom du directeur</p>
			<p class="directeur">Durée :</p>
			<p class="name-author" id="actor1">Acteur 2</p>
			<p class="directeur" id="actor2">Budget :</p>
			<p class="name-author" id="actor3">Acteur 2</p>
		</div>
		<div class="overview">
			<p id="overview">Dans ce nouveau volet, Batman augmente les mises dans sa guerre contre le crime. Avec l'appui du lieutenant de police Jim Gordon et du procureur de Gotham, Harvey Dent, Batman vise à éradiquer le crime organisé qui pullule dans la ville. Leur association est très efficace mais elle sera bientôt bouleversée par le chaos déclenché par un criminel extraordinaire que les citoyens de Gotham connaissent sous le nom de Joker.</p>
		</div>
		</div>
	</div>

	

</section>











