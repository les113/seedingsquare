/*jslint browser: true*/
/*global $, jQuery*/

$(document).ready(function () {	
    $('li.a').hide(); // hide answers
    $('li.q').addClass('fa-plus');// add fa icon to questions

    // on page load open first answer
    $('li.a:first').addClass('open').css( "display", "list-item" );
    $('li.q:first').addClass('fa-minus').removeClass('fa-plus');

    /* a question is clicked */
    $('li.q').css('cursor', 'pointer').click(function () {		
        $('.open').removeClass('open').hide(400).prev('li.q').addClass('fa-plus').removeClass('fa-minus');// hide currently open answers, change icon 

        $(this).next('li.a').toggleClass('open').slideToggle(function () {												   
             $(this).prev('li.q').addClass('fa-minus fa-rotate-45').removeClass('fa-plus');

            });	
    });
});
	