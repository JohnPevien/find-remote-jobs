const nav = document.getElementById("nav");

window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
        nav.classList.add("sticky");
        nav.classList.add("top-0");
        nav.classList.add("shadow-lg");
        nav.classList.add("bg-white");
    } else {
        nav.classList.remove("sticky");
        nav.classList.remove("top-0");
        nav.classList.remove("shadow-lg");
        nav.classList.remove("bg-white");
    }
});
