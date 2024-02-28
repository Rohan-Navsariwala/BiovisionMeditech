// document.addEventListener("DOMContentLoaded", function () {
    
//     var navlisten = document.getElementsByClassName("main-li");
    
//     navlisten[0].addEventListener('mouseover', function () {
//         const node1 = document.createElement("span");
//         const text1 = document.createTextNode("Listened");
//         node1.appendChild("text1");
//         document.getElementsByID("thisone").appendChild("node1");
        
//     });

// })

function loadContent(content) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector('.maincontent').innerHTML = this.responseText;
            scrollToTop();
        }
    };
    xhttp.open("GET", content + ".php", true);
    xhttp.send();
}

function scrollToBottom() {
    window.scrollTo(0,document.body.scrollHeight);
}
function scrollToTop(){
    window.scrollTo(0, 0);
}