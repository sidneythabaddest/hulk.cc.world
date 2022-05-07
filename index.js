
const navSlide = () => {
    const burger = document.querySelector(".burger")
    const nav = document.querySelector(".nav-links")
    const navlinks = document.querySelectorAll(".nav-links li")
    // Toggle nav
    burger.addEventListener('click', function () {



        nav.classList.toggle("nav-active")

        navlinks.forEach((links, index) => {
            if (links.style.animation) {
                links.style.animation = ''
            } else {
                links.style.animation = `navLinksFade 0.5s ease forwards ${index / 7 + 0.3}s`
            }


        })


        // burger animation
        burger.classList.toggle("toggle")
    })

}

navSlide()

