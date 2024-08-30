let bookTable = document.querySelector(".user-manga-panel");
let mangaBtnSlide = document.querySelector(".btn-list");
let bordered = document.querySelector(".bordered-list")

bookTable.style.transition = "height 0.7s ease-in-out";

function slidingBook1() {
    if (bookTable.style.height !== "200px") {
        bookTable.style.height = "200px"; 
    } else if (bookTable.style.height === "200px") { 
        bookTable.style.height = "1200px";
    }
}
mangaBtnSlide.addEventListener("click", slidingBook1);






