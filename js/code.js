
function myFunction() {
    var x, p, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("code").value;
    p = "iskartosikarta";

    // If x is Not a Number or less than one or greater than 10
    if (x == p) {
        text = "Gero klausymo!";
        window.open('https://www.youtube.com/playlist?list=PLfypXNVeAeWQX_QextVq9mttJFD8ffV4v');
    } else {
        text = "Neteisingas kodas!";
    }
    document.getElementById("msg").innerHTML = text;
}
