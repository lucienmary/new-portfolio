export function pageTrans () {
    // Transition de page.

    $('.fadeTrans').click(function(e) {
		var link = $(this).attr("href");

        // $('.mainEl').remmoveClass('loaded');
        $('.mainEl').addClass('out');

        setTimeout(function() {
            window.location.href = link;
        }, 500);
        e.preventDefault();
    });

    $('page-transition', function() {
        $('.mainEl').addClass('loaded');
    })

}
