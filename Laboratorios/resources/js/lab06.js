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

$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});


var wordBank = ["zelda", "metroid", "mario", "saitama", "gohan", "samus", "link", "goku", "genos", "noct", "luna", "peach", "bang"];
var word = document.getElementById("word");
var enterWord = document.getElementById("enterWord");

word.innerHTML = wordBank[Math.floor(Math.random() * wordBank.length)];


enterWord.onkeyup = function(){
  console.log(word.textContent);
  console.log(enterWord.value);
  console.log(word.textContent == enterWord.value);
  if(word.textContent == enterWord.value){
    word.innerHTML = wordBank[Math.floor(Math.random() * wordBank.length)];
    enterWord.value= "";
    enterWord.innerHTML= "";
    c = 5;
  }
}


var t = setInterval(showTime, 1000);
var w = setInterval(changeWord, 5000);
var c = 5;

function showTime() {
	document.getElementById("demo").innerHTML = c;
	c--;
}

function changeWord() {
	c = 5;
	word.innerHTML = wordBank[Math.floor(Math.random() * wordBank.length)];
    enterWord.value= "";
    enterWord.innerHTML= "";
}








function allowDrop(ev, e) {
	if (e.id == "div1") {
		  ev.preventDefault();
	}

}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
	ev.preventDefault();
	var data = ev.dataTransfer.getData("text");
 	ev.target.appendChild(document.getElementById(data));
 
}