export function slider () {

    const leftBtn = $('#arrowLeft');
    const rightBtn = $('#arrowRight');
    const slider = $('#slider');
    const number = $('.number');
    const lengthSlider = ($('#slider li').length - 1);
    const numberLink = $('.number__li');

    var active = slider.children('.project--current');
    var activeVal = active.attr('value');


    leftBtn.click((e) => {
        e.preventDefault();

        active.removeClass('project--current');
        active.addClass('project--right');

        if (activeVal > 0) activeVal--;
        else{
            activeVal = lengthSlider;
            $('#slider li').toggleClass('project--right project--left');
        }

        active = slider.find("[value='"+(activeVal)+"']");

        numberLink.removeClass('number__li--active');
        number.find("[value='"+(activeVal)+"']").parent().addClass('number__li--active');

        active.addClass('project--current');
        active.removeClass('project--right project--left');
    });

    rightBtn.click((e) => {
        e.preventDefault();

        active.removeClass('project--current');
        active.addClass('project--left');

        if (activeVal < lengthSlider) activeVal++;
        else{
            activeVal = 0;
            $('#slider li').toggleClass('project--right project--left');
        }

        active = slider.find("[value='"+(activeVal)+"']");

        numberLink.removeClass('number__li--active');
        number.find("[value='"+(activeVal)+"']").parent().addClass('number__li--active');

        active.addClass('project--current');
        active.removeClass('project--right project--left');
    });

    numberLink.click((e) => {
        e.preventDefault();

        activeVal = $(e.target).attr('value');

        active.removeClass('project--current');
        active.addClass('project--left');

        // activeVal = e;

        active = slider.find("[value='"+(activeVal)+"']");

        number.children('li').removeClass('number__li--active');
        $(e.target).parent().addClass('number__li--active');

        active.addClass('project--current');
        active.removeClass('project--right project--left');
    });
}
