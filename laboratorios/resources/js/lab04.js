function fun1(){
  const rows = prompt("Ingresa un número");
  var j=1;
  var output = "<table class='table table-dark table-hover'><tr><th>n</th><th>n^2</th><th>n^3</th></tr>"
  for(i=1;i<=rows;i++){
    output = output + "<tr>";
    while(j<=3){
      output = output + "<td>" + i*j + "</td>";
      j = j+1;
    }
    output = output + "</tr>";
    j = 1;
  }
  output = output + "</table>";
  var obj = Object.create(null);
  obj = output;
  document.getElementById("myTable").insertAdjacentHTML("afterend", output); 
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
