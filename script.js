// Vanilla JS
const hamburgerMenu = document.querySelector(".hamburger-menu");

const container = document.querySelector(".the-container");

hamburgerMenu.addEventListener("click", () =>{
    container.classList.toggle("active");
})

//JQuery
$(document).ready(function () {
    $('#tweet-form').on('submit', function(e) {
        e.preventDefault();
        if($('#content').val() == '') {
            alert("You can't submit an empty tweet! .. A content is required")
        }
    });
});