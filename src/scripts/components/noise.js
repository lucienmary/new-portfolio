export function noise () {

    // Noise.
    $(window).on('load', addNoise);

    function addNoise() {
      $('.noise-wrapper').css('opacity',0.4);
    }

    // cursor glitch.
    function glitchCursor() {
        $('.glitch-cursor-select').toggleClass('glitch-cursor glitch-cursor--second');
    }

    (function loop() {
        var rand = Math.round(Math.random() * (2000 - 800)) + 0;
        setTimeout(function() {
                //alert('A');
                glitchCursor();
                loop();
        }, rand);
    }());
}
