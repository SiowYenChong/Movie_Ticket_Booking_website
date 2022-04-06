let remove=document.getElementById('decrement');
let int =document.getElementById('number');
let integer=10000;


function decreaseInteger(amount) {
    integer -= amount;
    int.innerHTML = integer;
}
