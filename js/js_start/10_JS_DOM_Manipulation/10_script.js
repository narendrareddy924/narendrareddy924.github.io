function displayMsg(message,color) {
    var h3Element = document.querySelector('#msgOne');
    h3Element.textContent = message;
    h3Element.style.backgroundColor = color;
    h3Element.style.padding = '15px';
    h3Element.style.boxShadow = '0 0 15px black';
    h3Element.style.width = '250px';
    h3Element.style.margin = '20px auto';
    h3Element.style.fontSize = '25px';
    h3Element.style.borderRadius = '0 50px';
    h3Element.style.textShadow = '2px 0 0 white';
    h3Element.style.transition = 'all 2s';
    h3Element.style.transform = 'scale(1.2,1.2)';
}
function changeImage(filename) {
    var imgElement = document.querySelector('#myImage');
    var imgsrc = '../img/' + filename;
    imgElement.setAttribute('src',imgsrc);
}