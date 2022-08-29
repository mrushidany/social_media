$(document).ready(function (){
    $('#menu-btn').on('click', function() {
        $(this).removeClass('fa-bars').addClass('fa-times')
    })

    // menu.onclick = () => {
    //     menu.classList.toggle('fa-times')
    //     navbar.classList.toggle('active')
    // }

    window.onscroll = () => {
        menu.classList.remove('fa-times')
        navbar.classList.remove('active')
    }
})
