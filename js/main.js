/**
 *
 * Vertical Timeline with CSS and JavaScript
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2016, Script Tutorials
 * https://www.script-tutorials.com/
 */
$(window).on('scroll', function(){
  $('.cd-timeline-block').each(function(){
    if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
      $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
    }
  });
});