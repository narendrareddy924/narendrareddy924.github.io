// Triangle One
var textBoxOne = document.querySelector('#triangleOne');
var displayTextOne = document.querySelector('#triangleOneText');
textBoxOne.addEventListener('keyup',function() {
    var textEntered = textBoxOne.value;
    displayTextOne.textContent = triangleOne(textEntered);
});

// Triangle Two
var textboxTwo = document.querySelector('#triangleTwo');
var displayTextTwo = document.querySelector('#triangleTwoText');
textboxTwo.addEventListener('keyup',function () {
    var text = textboxTwo.value;
    displayTextTwo.textContent = triangleThree(text);
});