 /*scroll-n-sticky script*/
	window.onscroll = function() {scrollNsticky()};

	var A = document.getElementById("scroll");
	var sticky = A.offsetTop;

	function scrollNsticky() {
	  if (window.pageYOffset >= sticky) {
		A.classList.add("sticky")
	  } else {
		A.classList.remove("sticky");
	  }
	}
 /*toggle minimize_icon responsive class on click for navbar*/
	function minimize() {
    var x = document.getElementById("scroll");
    if (x.className === "navbar") 
	{ x.className += " responsive";}
	else {
        x.className = "navbar";
    }
}