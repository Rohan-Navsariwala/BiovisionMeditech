
function scrollToBottom() {
    window.scrollTo(0,document.body.scrollHeight);
}
function scrollToTop(){
    window.scrollTo(0, 0);
}


function loadHTML(elementId, url) {
    fetch(url)
    .then(response => response.text())
    .then(data => document.getElementById(elementId).innerHTML = data);
    scrollToTop();
}
