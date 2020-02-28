function validatePassword(){
  var cont = 0;
  var password = document.getElementById("inputPassword").value;
  var field1 = document.getElementById("requisitoMayuscula");
  var field2 = document.getElementById("requisitoMinuscula");
  var field3 = document.getElementById("requisitoDigito");
  var field4 = document.getElementById("requisitoLongitud");
  field1.innerHTML = "";
  field2.innerHTML = "";
  field3.innerHTML = "";
  field4.innerHTML = "";
  if(password.match(/[A-Z]/g) == null){
    field1.innerHTML = "Incluir al menos una mayúscula";
    field1.classList.add('invalid');
    cont++;
  }
  if(password.match(/[a-z]/g) == null){
    field2.innerHTML = "Incluir al menos una minúscula";
    field2.classList.add('invalid');
    cont++;
  }
  if(password.match(/[0-9]/g) == null){
    field3.innerHTML = "Incluir al menos un número";
    field3.classList.add('invalid');
    cont++;
  }
  if(password.length < 8){
    field4.innerHTML = "Longitud de al menos 8 caracteres";
    field4.classList.add('invalid');
    cont++;
  }
  if(cont == 0){
    field1.innerHTML = "Contraseña válida";
    field1.classList.add('valid');
  }
  cont = 0;
  return false;
}

function fun2 (){


}





function add(){
  this.quantity = this.quantity + 1;
  console.log(this.quantity);
  }

function substract(){
  if(this.quantity >= 1) this.quantity = this.quantity - 1;
  console.log(this.quantity);
}

function Potion(name, price, quantity) {
  this.name = name;
  this.price = price;
  this.quantity = quantity;
  this.add = add;
  this.substract = substract;
}

var red = new Potion("redPotion", 80, 0);
var green = new Potion("greenPotion", 40, 0);
var blue = new Potion("bluePotion", 60, 0);



document.getElementById("addRed").onclick = function addRed(){ 
  red.add();
  document.getElementById("redPotion").innerHTML = red.quantity;
};
document.getElementById("substractRed").onclick = function substractRed(){ 
  red.substract();
  document.getElementById("redPotion").innerHTML = red.quantity;
};


document.getElementById("addGreen").onclick = function addGreen(){ 
  green.add();
  document.getElementById("greenPotion").innerHTML = green.quantity;
};
document.getElementById("substractGreen").onclick = function substractGreen(){ 
  green.substract();
  document.getElementById("greenPotion").innerHTML = green.quantity;
};


document.getElementById("addBlue").onclick = function addBlue(){ 
  blue.add();
  document.getElementById("bluePotion").innerHTML = blue.quantity;
};
document.getElementById("substractBlue").onclick = function substractBlue(){ 
  blue.substract();
  document.getElementById("bluePotion").innerHTML = blue.quantity;
};
