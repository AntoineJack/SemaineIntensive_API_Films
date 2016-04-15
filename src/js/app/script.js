

//API
$( "figure" ).click(function() {
  id = $(this).data('id');
  $.getJSON(
    'http://api.themoviedb.org/3/movie/'+ id +'?api_key=c22f2fd9062b5e5c6815c9d14c46f6f2',
    function( data )
    {
        console.log($('#director'));
        $('#director').text(data.release_date);
        $('#actor1').text(data.runtime + " min");
        $('#actor3').text(data.budget + " $");
        $('#movie-title').text(data.title);
        $('#overview').text(data.overview);
        $('#rating').text(data.vote_average + " / 10");
        $('#poster').attr("src","http://image.tmdb.org/t/p/w500/"+data.poster_path);
        $("#cover").attr("src","http://image.tmdb.org/t/p/w500/"+data.backdrop_path);
        $("#cover2").attr("src","http://image.tmdb.org/t/p/w500/"+data.backdrop_path);
    }
  );
});


// Déclaration des variables
var compte 	  = document.querySelector('.compte');
var signin 	  = document.querySelector('.sign-in');
var exit   	  = document.querySelector('.exit');
var connect   = document.querySelector('.connect');
var exit1     = document.querySelector('.exit1');
var search    = document.querySelector('.search');
var exit3     = document.querySelector('.exit3');
var btnsign	  = document.querySelector('.btn-sign')
var subtitle  = document.querySelector('.sub-title');
var searchbar = document.querySelector('.search-bar');
var socialnet = document.querySelector('.social-net');
var footer    = document.querySelector('.footer');


// Apparition de la POP-IN Inscription

exit.addEventListener('click',function(){
	signin.setAttribute("style","display:none;");
	subtitle.setAttribute("style","display:block;");
	searchbar.setAttribute("style","display:block;");
	btnsign.setAttribute("style","display:block;");
	socialnet.setAttribute("style","display:block;");
	footer.setAttribute("style","display:block;");
});



//Disparition de la page recherche
exit3.addEventListener('click',function(){
	search.setAttribute("style","display:none;");
});


// Apparition de la POPIN movie
$(".article").on('click', function(){
  $(".movie").css("display", "block");
  $(".footer").css("display", "none");
  console.log(this);
});

$(".exit3").on('click',function(){
	$(".footer").css("display","block");
})

$(".exit2").on('click', function(){
  $(".movie").css("display", "none");
});

// HIDE OF THE FOOTER
if ($('.search').css('display') == 'block')
{
   $(".footer").css("display","none");
   $(".sub-title").css("display","none");
   $(".btn-sign").css("display","none");
   $(".search-bar").css("display","none");
   $(".social-net").css("display","none");
}


$(".exit3").on('click', function(){
  $(".movie").css("display", "none");
  $(".search").css("display", "none");
  $(".footer").css("display","block");
   $(".sub-title").css("display","block");
   $(".btn-sign").css("display","block");
   $(".search-bar").css("display","block");
   $(".social-net").css("display","block");
   $(".acount").css("display","none");
   $(".connexion").css("display","none");

});

if ($('.acount').css('display') == 'block'){
   $(".footer").css("display","none");
   $(".sub-title").css("display","none");
   $(".btn-sign").css("display","none");
   $(".search-bar").css("display","none");
   $(".social-net").css("display","none");
}

$(".wishlist").on('click', function(){
   $(".acount").css("display","block");

});

$(".log-in").on('click', function(){
   $(".sign-in").css("display","block");
   $(".sub-title").css("display","none");
   $(".btn-sign").css("display","none");
   $(".search-bar").css("display","none");
   $(".social-net").css("display","none");
   $(".footer").css("display","none");

});

$(".log-in").on('click', function(){
   $(".sign-in").css("display","block");
});

$(".compte").on('click', function(){
   $(".connexion").css("display","block");
   $(".sub-title").css("display","none");
   $(".btn-sign").css("display","none");
   $(".search-bar").css("display","none");
   $(".social-net").css("display","none");
});






















