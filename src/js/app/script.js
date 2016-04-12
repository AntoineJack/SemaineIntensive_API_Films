console.log('Hello');

var test = document.querySelector('.test');
var signin = document.querySelector('.sign-in');

console.log(test);

console.log(signin);

test.click(function(e){
	signin.style.display = "block;";
	console.log('YES');
});


