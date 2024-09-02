let bookTable = document.querySelector(".user-manga-panel");
let mangaBtnSlide = document.querySelector(".btn-list");

bookTable.style.transition = "height 0.7s ease-in-out";

function slidingBook1(event) {
    event.preventDefault();
    if (bookTable.style.height !== "200px") {
        bookTable.style.height = "200px"; 
    } else if (bookTable.style.height === "200px") { 
        bookTable.style.height = "1200px";
    }
}
mangaBtnSlide.addEventListener("click", slidingBook1);



let bookTable2 = document.querySelector(".user-comics-panel");
let comicsBtnSlide = document.querySelector(".btn-list2");

bookTable2.style.transition = "height 0.7s ease-in-out";

function slidingBook2(event) {
    event.preventDefault();
    if (bookTable2.style.height !== "200px") {
        bookTable2.style.height = "200px"; 
    } else if (bookTable2.style.height === "200px") { 
        bookTable2.style.height = "1200px";
    }
}
comicsBtnSlide.addEventListener("click", slidingBook2);







