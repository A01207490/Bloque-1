function spooky(x) {
	console.log("onmouseover");
	x.innerHTML = "It's spooky time!"
	x.classList.add("spooky"); 
}

function normal(x) {
	console.log("onmouseout");
	x.innerHTML = "Glide the mouse over!"
	x.classList.remove("spooky"); 
}