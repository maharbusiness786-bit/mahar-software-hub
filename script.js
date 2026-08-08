const searchBox = document.querySelector(".hero input");

const softwareCards = document.querySelectorAll(".software-card");
const gameCards = document.querySelectorAll(".game-card");
const androidCards = document.querySelectorAll(".android-card");

searchBox.addEventListener("input", function () {

    const searchText = searchBox.value.toLowerCase();

    softwareCards.forEach(function (card) {
        const text = card.innerText.toLowerCase();

        if (text.includes(searchText)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });

    gameCards.forEach(function (card) {
        const text = card.innerText.toLowerCase();

        if (text.includes(searchText)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });

    androidCards.forEach(function (card) {
        const text = card.innerText.toLowerCase();

        if (text.includes(searchText)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });

});
const darkModeBtn = document.getElementById("darkModeBtn");

darkModeBtn.addEventListener("click", function(){

    document.body.classList.toggle("dark-mode");

    if(document.body.classList.contains("dark-mode")){
        darkModeBtn.innerHTML = "☀️ Light Mode";
    }else{
        darkModeBtn.innerHTML = "🌙 Dark Mode";
    }

});