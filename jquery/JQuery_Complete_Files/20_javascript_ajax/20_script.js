//click on the button
$('#green-button').click(function () {
    // javascript ajax

    //create a ajax request
    let http = new XMLHttpRequest();

    //prepare the request
    //http.open(method,'JSON file',flse);
    http.open('GET','https://gist.githubusercontent.com/narendrareddy924/784a2d9fb4779e8ad751956abbe44f4b/raw/4a46ae4093f5cb4d480a52b35a77a912eac64ecb/10012019.json',true);

    //send the request
    http.send();

    //track the request
    http.onreadystatechange = function () {
        if(http.readyState === 4 && http.status === 200){
            processData(http);
        }
    };
});

//let preTag = $('#pre-tag');
let processData = (http) => {
    let theData = http.responseText;
    //console.log(theData);
    let jsonData = JSON.parse(theData);
    // console.log(jsonData);
  //  preTag.text(theData);
};

let tableBodyElement = $('#table-body');
let prepareHTMLTags = (contacts) => {
    let tempRow = '';
    contacts.forEach(contact) => {
        let theRow = `<tr>
                          <td>${S.NO}</td>
                          <td>${contact.name} ${contact.name.last}</td>
                          <td>${contact.dob}</td>
                          <td>${contact.location.city}</td>
                          <td>${contact.location.state}</td>
                          <td>${contact.location.postcode}</td>
                       </tr>`;
        tempRow += theRow;
        sno++;

    });
    tableBodyElement.empty().append(tempRow);
};