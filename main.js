$(function() {
    $.each(['#f00', '#ff0', '#0f0', '#0ff', '#00f', '#f0f', '#000', '#fff'], function() {
        $('.tools').append("<a href='#colors_sketch' data-color='" + this + "' class='theColors' style='background: " + this + ";'></a> ");
    });
    $.each([3, 5, 10, 15], function() {
        $('.tools').append("<a href='#colors_sketch' data-size='" + this + "' class='theSize'>" + this + "</a> ");
    });
    $('#colors_sketch').sketch();
});

var myDataRef = new Firebase('https://drawandview.firebaseio.com/');
var dataURL;

function sendToFirebase() {
    console.log('--Send to firebase');
    var canvas = document.getElementById("colors_sketch");
    if (dataURL != canvas.toDataURL()) {
        dataURL = canvas.toDataURL();
        firebaseConnection(dataURL);
        console.log('sending');
    }

    setTimeout(sendToFirebase, 100);

}

function firebaseConnection(dataURL) {

    myDataRef.set({
        image: dataURL
    });
}


sendToFirebase();