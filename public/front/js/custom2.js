$(function() {
    $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
    })
});

$(function() {
var path = location.pathname;
$("a[href='" + path + "']").addClass('active');
});