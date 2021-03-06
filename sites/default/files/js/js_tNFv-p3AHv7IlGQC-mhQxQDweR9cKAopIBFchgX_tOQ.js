/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

Drupal.debounce = function (func, wait, immediate) {
  var timeout = void 0;
  var result = void 0;
  return function () {
    for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    var context = this;
    var later = function later() {
      timeout = null;
      if (!immediate) {
        result = func.apply(context, args);
      }
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) {
      result = func.apply(context, args);
    }
    return result;
  };
};;
!function(i,s,e){"use strict";function t(t,a){var n=i(a);i(e).on("resize.lists",s.debounce(function(s){n.addClass("is-horizontal");var e=n.find(".is-responsive__list"),t=0;e.find(".is-responsive__item").each(function(){t+=i(this).outerWidth(!0)}),1==e.outerWidth(!0)<=t?n.removeClass("is-horizontal").addClass("is-vertical"):n.removeClass("is-vertical").addClass("is-horizontal")},150)).trigger("resize.lists")}s.behaviors.atRL={attach:function(s){var e=i(s).find("[data-at-responsive-list]");e.length&&e.once().each(t)}}}(jQuery,Drupal,window);
