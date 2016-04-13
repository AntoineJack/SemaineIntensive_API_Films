console.log('Hello');

//test inté api
$( "figure" ).click(function() {
  id = $(this).data('id');
  $.getJSON(
    'http://api.themoviedb.org/3/movie/'+ id +'?api_key=c22f2fd9062b5e5c6815c9d14c46f6f2',
    function( data )
    {
        console.log(data);
    }
  );
});


// Déclaration des variables
var compte 	  = document.querySelector('.compte');
var signin 	  = document.querySelector('.sign-in');
var exit   	  = document.querySelector('.exit');
var wishlist  = document.querySelector('.wishlist');
var connect   = document.querySelector('.connect');
var exit1     = document.querySelector('.exit1');
var search    = document.querySelector('.search');
var exit3     = document.querySelector('.exit3');
var btnsign	  = document.querySelector('.btn-sign')
var subtitle  = document.querySelector('.sub-title');
var searchbar = document.querySelector('.search-bar');
var socialnet = document.querySelector('.social-net');
var movie     = document.querySelector('.movie');
var exit2	  = document.querySelector('.exit2');
var article   = document.querySelector('.article');



// Apparition de la POP-IN Inscription
compte.addEventListener('click',function(){
	signin.setAttribute("style","display:block;");
	subtitle.setAttribute("style","display:none;");
	searchbar.setAttribute("style","display:none;");
	btnsign.setAttribute("style","display:none;");
	socialnet.setAttribute("style","display:none;");

});
exit.addEventListener('click',function(){
	signin.setAttribute("style","display:none;");
	subtitle.setAttribute("style","display:block;");
	searchbar.setAttribute("style","display:block;");
	btnsign.setAttribute("style","display:block;");
	socialnet.setAttribute("style","display:block;");
});

// Apparition de la POP-IN Wishlist
wishlist.addEventListener('click',function(){
	connect.setAttribute("style","display:block;");
	subtitle.setAttribute("style","display:none;");
	searchbar.setAttribute("style","display:none;");
	btnsign.setAttribute("style","display:none;");
	socialnet.setAttribute("style","display:none;");
});
exit1.addEventListener('click',function(){
	connect.setAttribute("style","display:none;");
	ubtitle.setAttribute("style","display:block;");
	searchbar.setAttribute("style","display:block;");
	btnsign.setAttribute("style","display:block;");
	socialnet.setAttribute("style","display:block;");
});

//Disparition de la page recherche
exit3.addEventListener('click',function(){
	search.setAttribute("style","display:none;");
});


// Apparition de la POP-IN Inscription
btnsign.addEventListener('click',function(){
	signin.setAttribute("style","display:block;");
});
exit.addEventListener('click',function(){
	signin.setAttribute("style","display:none;");
});

// Disparition de la POP-UP Movie
exit2.addEventListener('click',function(){
	movie.setAttribute("style","display:none;");
});

// Apparition de la POPIN movie
article.addEventListener('click',function(){
	movie.setAttribute("style","display:block;");
});

// Touch enter for search our films
searchbar.addEventListener("keydown", function(e) 
{
});











