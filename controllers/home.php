<?php 

	$title = 'Mon site';
	$class = 'home';



//include 'home.php';

$api_key = "c22f2fd9062b5e5c6815c9d14c46f6f2";

if(isset($_GET['id'])){
   $index_movie = $_GET['id'];
}


$ch = curl_init();

//curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/movie/$index_movie?api_key=$api_key&language=fr");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   "Accept: application/json"
));

$response = curl_exec($ch);
curl_close($ch);

// Json decode
$response = json_decode($response);
//var_dump($response);


if (isset($_GET['keywords'])) {
	# code...

// ON RECUPERE L'API POUR LE FILM RECHERCHE GRACE AUX KEYWORDS
$query = $_GET['keywords'];
$query=str_replace(' ','',$query);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/search/movie?query=$query&api_key=c22f2fd9062b5e5c6815c9d14c46f6f2");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Accept: application/json"
));

$response = curl_exec($ch);
curl_close($ch);

//var_dump($response);





// ON STOCK L'ID DU FILM DANS UNE VARIABLE AFIN DE RECUPERER LES SIMILAIRES

$url = "http://api.themoviedb.org/3/search/movie?query=$query&api_key=c22f2fd9062b5e5c6815c9d14c46f6f2";
$json = file_get_contents($url); // http request 
$data = json_decode($json);

$id = $data->results[0]->id;
//var_dump($id);

// REQUETE CURL AFIN D'AFFICHER LES SIMILAIRES

$bh = curl_init();

curl_setopt($bh, CURLOPT_URL, "http://api.themoviedb.org/3/movie/$id/similar?api_key=c22f2fd9062b5e5c6815c9d14c46f6f2&");
curl_setopt($bh, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($bh, CURLOPT_HEADER, FALSE);

$similar = curl_exec($bh);
curl_close($bh);

//echo"<pre>";
//print_r($similar);
//echo"</pre>";

// ON STOCK LES IMAGES DANS UNE VARIABLE 

$img = "http://api.themoviedb.org/3/movie/$id/similar?api_key=c22f2fd9062b5e5c6815c9d14c46f6f2&";
$json = file_get_contents($img); // http request 
$data = json_decode($json);

//$image = $similar->results[1]->poster_path;

}
//var_dump($image);

 ?>

