console.log('Hello');


// Déclaration des variables
var compte 	 = document.querySelector('.compte');
var signin 	 = document.querySelector('.sign-in');
var exit   	 = document.querySelector('.exit');
var wishlist = document.querySelector('.wishlist');
var connect  = document.querySelector('.connect');
var exit1    = document.querySelector('.exit1');
var btnsign	 = document.querySelector('.btn-sign')

// Apparition de la POP-IN Inscription
compte.addEventListener('click',function(){
	signin.setAttribute("style","display:block;");
});
// Disparition de la POP-IN Inscription
exit.addEventListener('click',function(){
	signin.setAttribute("style","display:none;");
});

// Apparition de la POP-IN Wishlist
wishlist.addEventListener('click',function(){
	connect.setAttribute("style","display:block;");
});
// Disparition de la POP-IN Wishlist
exit1.addEventListener('click',function(){
	connect.setAttribute("style","display:none;");
});

// Apparition de la POP-IN Inscription
btnsign.addEventListener('click',function(){
	signin.setAttribute("style","display:block;");
});
// Disparition de la POP-IN Inscription
exit.addEventListener('click',function(){
	signin.setAttribute("style","display:none;");
});





