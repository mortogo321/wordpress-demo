'use strict';

$(function () {
  const toggleAffix = function (affixElement, scrollElement, wrapper) {
    let height = affixElement.outerHeight();
    let top = wrapper.offset().top;

    if (scrollElement.scrollTop() >= top) {
      wrapper.height(height);
      affixElement.addClass('affix');
    } else {
      affixElement.removeClass('affix');
      wrapper.height('auto');
    }

  };

  $('[data-toggle="affix"]').each(function () {
    var ele = $(this),
      wrapper = $('<div></div>');

    ele.before(wrapper);
    $(window).on('scroll resize', function () {
      toggleAffix(ele, $(this), wrapper);
    });

    toggleAffix(ele, $(window), wrapper);
  });

  let scrollToTop = $('.scrollToTop');
  const scrollFunction = function () {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      scrollToTop.show();
    } else {
      scrollToTop.hide();
    }
  }

  const topFunction = function () {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

  window.onscroll = function () {
    scrollFunction();
  };

  scrollToTop.on('click', function () {
    topFunction();
  });

  new WOW().init();
});