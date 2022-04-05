let remove=document.getElementById('decrement');
let add=document.getElementById('increment');

let int =document.getElementById('number');
let integer=10000;

remove.addEventListener('click',function(){
	integer -=3000;
	int.innerHTML=integer;
})


add.addEventListener('click',function(){
	integer +=5000;
	int.innerHTML=integer;
})

var data=0;
document.getElementById("number").innerText=data;
function increment(){
	data=data+1;
	document.getElementById("number").innerText=data;)