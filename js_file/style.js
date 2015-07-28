$(document).ready(function () {

    $(".tile").height($("#tile1").width());
    $(".carousel").height($("#tile1").width());
    $(".item").height($("#tile1").width());

    $(window).resize(function () {
        if (this.resizeTO) clearTimeout(this.resizeTO);
        this.resizeTO = setTimeout(function () {
            $(this).trigger('resizeEnd');
        }, 10);
    });

    $(window).bind('resizeEnd', function () {
        $(".tile").height($("#tile1").width());
        $(".carousel").height($("#tile1").width());
        $(".item").height($("#tile1").width());
    });

    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover().click(function () {
        /*There is problem that when first popover opens up, as in the code it will hide others. 
          but when one open and you opens the second, the first ones timeout will execute and 
          it will close the second one immediately upon opening since the code is to hide all popovers after 3 second 
          Therefore, we could add an intermediate variable pointing to the original jQuery object to avoid this problem*/
    var $self = $(this);
    setTimeout(function () {
        $self.popover('hide');
    }, 3000);
});

    $(".chartDescription").css('visibility', 'hidden');

});





$("#customBtn").click(function(){
    $(".skillList, #customBtn").css('display', 'none');
    $(".chartDescription").css('visibility', 'visible');
$('.indicatorContainer').radialIndicator({
barColor: {
        0: '#eeff05',
        33: '#db6206',
        66: '#0066FF',
        85: '#33CC33'
    },
barWidth: 3,
initValue: 0,
roundCorner : true,
percentage: true
});

var radialObj = $('#indicatorContainer1').data('radialIndicator');
radialObj.animate(80);
var radialObj = $('#indicatorContainer2').data('radialIndicator');
radialObj.animate(60);
var radialObj = $('#indicatorContainer3').data('radialIndicator');
radialObj.animate(80);
var radialObj = $('#indicatorContainer4').data('radialIndicator');
radialObj.animate(60);
var radialObj = $('#indicatorContainer5').data('radialIndicator');
radialObj.animate(77);
var radialObj = $('#indicatorContainer6').data('radialIndicator');
radialObj.animate(50);
var radialObj = $('#indicatorContainer7').data('radialIndicator');
radialObj.animate(70);
var radialObj = $('#indicatorContainer8').data('radialIndicator');
radialObj.animate(20);
var radialObj = $('#indicatorContainer9').data('radialIndicator');
radialObj.animate(65);
var radialObj = $('#indicatorContainer10').data('radialIndicator');
radialObj.animate(84);
var radialObj = $('#indicatorContainer11').data('radialIndicator');
radialObj.animate(85);
var radialObj = $('#indicatorContainer12').data('radialIndicator');
radialObj.animate(78);



});
