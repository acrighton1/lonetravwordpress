AOS.init();



//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}




jQuery(document).ready(function($){

	jQuery(document).ready(function($){
		$('.search-icon').on('click', function() {
			$('.wpbsearchform').slideToggle();
		});
	});

	$(document).keyup(function(e) {
		// Ref https://stackoverflow.com/questions/3369593/how-to-detect-escape-key-press-with-pure-js-or-jquery
		// Close search if esc key pressed
		if (e.key == "Escape") {
		  $(".wpbsearchform").hide();
		}
	});

	$(document).mouseup(function(event) 
{
var div = $(".wpbsearchform");
if (!div.is(event.target) && div.has(event.target).length === 0) 
{
div.hide();
}
});

});

