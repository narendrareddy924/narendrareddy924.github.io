var a=90;
console.log('value: '+a + ' type is: ' +typeof a);

var b='narendra';
console.log('value: '+b + ' type is: ' +typeof b);

var c= true;
console.log('value: '+c + ' type is: ' +typeof c);

var d;
console.log('value: '+d + ' type is: ' +typeof d);

var e=null;
console.log('value: '+e + ' type is: ' +typeof e);

// Assignment Operator
var name = 'narendra';
console.log('Name is : '+ name);

// Arithmatic Operators (+ - * / %)
var x = 20;
var y = 440;
var z = x - y;
console.log('the subtraction of x & y is: ' + z);

// Short hand method
var x=x+10;
x += 10;
x++;
console.log('value: '+ x);

// Unary Operator ( ++ --)
var p=10;
var q=20;
++p;
++q;
p++;
q++;
console.log('value is : ' + p +' & ' + q);

// Conditional Operators (< > <= >= !=)
if(x >= y){
    console.log('u r bad in peace' +x);
}
else{
    console.log('u r good in peace ' +x);
}

// Logical Operator (&& //)
var sleep = true;
var goToClass = true;
var study = true;
if(sleep && goToClass){
    console.log('wake up early & practice the class');
}
else if(sleep && !goToClass){
    console.log('wake up early & go to class');
}
else if(sleep && study){
    console.log('u r wasting time. think about future');
}
else{
    console.log('u r waste');
}

// String Concatenation
var m = 10+20+40+2+'10'+10+230+21+10;
console.log('value is: ' + m);

// Ternary Operator (? :)
age = 15;
var msg = '';
(age>18)? msg='u r major' : msg='u r minor';
console.log(msg);