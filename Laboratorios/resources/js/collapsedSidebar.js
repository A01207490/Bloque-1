function toogleNav() {
	if(document.getElementById("mySidebar").style.width == "250px"){
		document.getElementById("mySidebar").style.width = "0";
		document.getElementById("main").style.marginLeft = "0";
	}
	else {
		document.getElementById("mySidebar").style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";
	}
}

window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}



var setText = $('.breadcrumb .set-text');
setText.addClass('active');
var initText = $('.nav-tabs .active').text();
setText.text(initText);

$('.nav-tabs li a').on('click', function () {
  setText.text($(this).text());
});


document.getElementById("dir").innerHTML = document.title;