function toggleDropdown() {
    let menu = document.getElementById("userDropdown");
    menu.style.display = (menu.style.display === "block") ? "none" : "block";
}

window.onclick = function(event) {
    if (!event.target.matches('.welcome-text')) {
        let dropdowns = document.getElementsByClassName("dropdown-menu");
        for (let i = 0; i < dropdowns.length; i++) {
            dropdowns[i].style.display = "none";
        }
    }
}