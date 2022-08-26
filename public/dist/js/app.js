$(document).ready(function() {
    $('ul.navbar-nav > li.nav-item > a.nav-link').click(function (e) {
        $('ul.navbar-nav > li.nav-item > a').removeClass('active');
        $(this).addClass('active');
    });
});
