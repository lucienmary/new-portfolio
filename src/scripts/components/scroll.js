export function scroll () {

    $(function() {
        $("#scroll").on('click', function(e) {
            e.preventDefault();
            var bottom = $(document).height() - $(window).height();
            $("HTML, BODY").animate({
                scrollTop: bottom
            }, 400);
        });
    });

    $(function() {
        $("#goToContact").on('click', function(e) {
            e.preventDefault();
            $("HTML, BODY").animate({
                scrollTop: 0
            }, 400);
        });
    });
}
