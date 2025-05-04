document.addEventListener("DOMContentLoaded", function () {
    const dropDownTrigger = document.querySelector(".dropdownMobile > a");
    const dropDownMenu = document.getElementById("dropdownMenuMobileID");
    const backButton = document.getElementById("backToMain");

    // Hauptmenüpunkte ohne das Dropdown-Menü
    const mainMenu = document.querySelector(".mobileNav ul");
    const mainMenuItems = Array.from(mainMenu.children).filter(
        li => !li.classList.contains("dropdownMobile")
    );

    dropDownTrigger.addEventListener("click", function (event) {
        event.preventDefault();

        // Hauptmenüpunkte ausblenden
        mainMenuItems.forEach(li => li.style.display = "none");

        // Dropdown-Menü anzeigen
        dropDownMenu.style.display = "block";
        dropDownTrigger.style.display = "none";

    });

    backButton.addEventListener("click", function (event) {
        event.preventDefault();

        // Hauptmenüpunkte wieder einblenden
        mainMenuItems.forEach(li => li.style.display = "block");
        dropDownTrigger.style.display = "block"
        // Dropdown-Menü verstecken
        dropDownMenu.style.display = "none";
    });
});

