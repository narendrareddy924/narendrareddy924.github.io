//Alert Box
//alert('welcome to js');

// confirm Box
confirm('gud mrg js');

// Prompt Box
prompt('say hi to me...');

//console log
console.log('gud mrg narendra reddy');

//Display date on the console
var date = new Date().toLocaleDateString();
console.log(date);

// Display date on the web page using DOM
//document.write(date);
document.querySelector('#display').textContent = date;

//display current time on the web page using DOM
var time=new Date().toLocaleTimeString();
document.querySelector('#display').textContent=time;

//digital clock
function digitalClock() {
    var time=new Date().toLocaleTimeString();
    document.querySelector('#time').textContent = time;
}
setInterval(digitalClock,2000)