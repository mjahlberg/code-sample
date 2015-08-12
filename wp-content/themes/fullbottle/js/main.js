/*!
 * JS Scripts
 */
// Placeholder

//$('.carousel').carousel();
//
//$('.clients-slider').carousel();
//
//$('.creators-slider').carousel();

//$('.carousel').carousel({
//    interval: false
//});

//Enagements Counter

var NumberSlider = function ($el, number) {
    'use strict';
    var listString = '',
        i,
        j;

    for (i = 7; i >= 0; i -= 1) {
        listString += '<ul data-decimal="' + i + '"></ul>';
    }

    this.$listString = $(listString);

    $.each(this.$listString, function (index, element) {
        for (j = 0; j <= 9; j += 1) {
            $(element).append('<li data-number="' + j + '">' + j + '</li>');
        }
    });

    $el.append(this.$listString);
    this.oldNumberAsArray = [0, 0, 0, 0];
    this.update(number);
};
/**
 * @param {number} number
 */
NumberSlider.prototype.update = function (number) {
    'use strict';
    var numberAsArray = String(number).split(''),
        $currentDecimalPlaceList,
        oldNumber,
        currentNumber,
        marginTop,
        i;

    numberAsArray.reverse();

    for (i = numberAsArray.length; i < 9; i += 1) {
        numberAsArray.push(0);
    }

    this.numberHeight = 192;

    for (i = 0; i < numberAsArray.length; i += 1) {
        $currentDecimalPlaceList = this.$listString.parent().find('ul[data-decimal="' + i + '"]');
        currentNumber = numberAsArray[i];
        oldNumber = this.oldNumberAsArray[i];
        marginTop = currentNumber * this.numberHeight;
        $currentDecimalPlaceList.animate({marginTop: -marginTop});
    }

    this.oldNumberAsArray = numberAsArray;
};

jQuery('document').ready(function () {
    var number = 17000513,
        numberSlider = new NumberSlider($('.number-scroller'), number);
    setInterval(function () {
        number++;
        numberSlider.update(number);
    }, 800);
});