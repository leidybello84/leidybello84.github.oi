$(document).ready(function () {
    // DOM variables
    let languageDesktopButton = $('.extra-content__language'),
        hamburguerMenu = $('.menu'),
        languageMobileButton = $('.language'),
        languageSelector = '.extra-content__language-selector';

    languageDesktopButton.on('click', function () {
        $(this).toggleClass('is-open');

        toggleARIA($(this).find(languageSelector), 'aria-expanded');
        toggleARIA($(this).find(languageSelector), 'aria-hidden');
    });
    hamburguerMenu.on("click", function () {
        $(this).parent().parent().toggleClass('is-open');

        toggleARIA($(this).parent().parent(), 'aria-hidden');
    });

    languageMobileButton.on('click', function () {
        $(this).toggleClass('is-open');

        toggleARIA($(this), 'aria-expanded');
    });
});

// Toggle ARIA attributes
function toggleARIA(selector, ARIA) {
    selector.attr(ARIA, function (i, attr) {
        return attr == 'true' ? 'false' : 'true';
    });
}