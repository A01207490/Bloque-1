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
  const currentTime = Date.now()
  const num1 = Math.floor(Math.random() * 10)
  const num2 = Math.floor(Math.random() * 10)
  const numSum = prompt("Cuánto es " + num1.toString() + " + " + num2.toString() + "?")
  if(numSum == (num1 + num2)){
    window.alert("Correcto\nTiempo de respuesta: " + (Date.now()-currentTime)/1000 + " s");
  }else{
    window.alert("Incorrecto\nTiempo de respuesta: " + (Date.now()-currentTime)/1000 + " s");
  }
}

function fun3 (){
  var positive = 0
  var zeros = 0
  var negative = 0
  const arr = prompt("Ingresa tus números separados por una coma").split(",")
  for(i=1;i<=arr.length;i++){
    if(arr[i] < 0){
      negative = negative + 1
    }else if (arr[i] == 0){
      zeros = zeros + 1
    } else {
      positive = positive + 1
    }
  }
  window.alert("Numeros positivos: " + positive + "\n" + "Numeros negativos: " + negative + "\n" + "Ceros: " + zeros);
}

function fun4(){
  const arr = prompt("Ingresa un arreglo de arreglo de números, separa los números con una coma y los arreglos con un ;").split(";");
  var promedios = new Array();
  var cont = 0;
  for(i=0;i<arr.length;i++){
    var aux = arr[i].split(","); 
    for(j=0;j<aux.length;j++){
      cont = cont + parseInt(aux[j], 10);
      console.log(cont);
    }
    cont = cont / aux.length;
    promedios.push(cont);
    cont = 0;
  }
  window.alert("Los promedios respectivos fueron: " + promedios.toString());
}

function fun5(){
  var num = prompt("Ingresa un número: ");
  window.alert("El número con sus dígitos en orden inverso es: " + num.split('').reverse().join(''));
}









var myCar = new Car("camaro", 80)

function accelerate(){
  myCar.speed = myCar.speed  + 1
  myCar.upDate();
}

function slowDown(){
  myCar.speed = myCar.speed  - 1
  myCar.upDate();
}

function Car(name, speed) {
  this.name = name;
  this.speed = speed;
  this.upDate = upDate;
}

function upDate(){
  document.getElementById("carSpeed").innerHTML = this.speed;
}
