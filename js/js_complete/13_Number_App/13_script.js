var inputField = document.querySelector('number');
var h1Element = document.querySelector('text-number');

function wordNumber(){
    var number = inputField.value;
    h1Element.textContent = wordNumber(number);
}
function wordNumber(number) {
    for(var i=0; i<strNum.length; i++){
        var ch = parseInt(strNum.charAt(i));
        switch(ch){
            case 0:
                tempStr += ' ZERO ';
                break;
            case 1:
                tempStr += ' ONE ';
                break;
            case 2:
                tempStr += ' TWO ';
                break;
            case 3:
                tempStr += ' THREE ';
                break;
            case 4:
                tempStr += ' FOUR ';
                break;
            case 5:
                tempStr += ' FIVE ';
                break;
            case 6:
                tempStr += ' SIX ';
                break;
            case 7:
                tempStr += ' SEVEN ';
                break;
            case 8:
                tempStr += ' EIGHT ';
                break;
            case 9:
                tempStr += ' NINE ';
                break;
        }
    }
    return ;