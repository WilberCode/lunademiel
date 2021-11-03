/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_menuMobile__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/menuMobile */ "./assets/js/components/menuMobile.js");
/* harmony import */ var _components_insertIcons__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/insertIcons */ "./assets/js/components/insertIcons.js");
/* harmony import */ var _components_loadPosts__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/loadPosts */ "./assets/js/components/loadPosts.js");
/* harmony import */ var _components_menuTab__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/menuTab */ "./assets/js/components/menuTab.js");
/* harmony import */ var _components_commentValidation__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/commentValidation */ "./assets/js/components/commentValidation.js");
/* harmony import */ var _components_loadGtag__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./components/loadGtag */ "./assets/js/components/loadGtag.js");
/* harmony import */ var _components_loadAds__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./components/loadAds */ "./assets/js/components/loadAds.js");
var $ = jQuery.noConflict();







jQuery(function ($) {
  $(document).ready(function () {
    Object(_components_menuMobile__WEBPACK_IMPORTED_MODULE_0__["default"])($); // Menu Mobile: Show menu and hidde    

    Object(_components_menuTab__WEBPACK_IMPORTED_MODULE_3__["default"])($); // Menu Tab 

    Object(_components_insertIcons__WEBPACK_IMPORTED_MODULE_1__["default"])($); // Insert icons svg

    Object(_components_loadPosts__WEBPACK_IMPORTED_MODULE_2__["default"])($); // Load more post with ajax  

    Object(_components_commentValidation__WEBPACK_IMPORTED_MODULE_4__["default"])($); // Comment validation

    Object(_components_loadGtag__WEBPACK_IMPORTED_MODULE_5__["default"])($);
    Object(_components_loadAds__WEBPACK_IMPORTED_MODULE_6__["default"])($);
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 18,
      nav: true,
      responsive: {
        0: {
          items: 2
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    });
  });
});

/***/ }),

/***/ "./assets/js/components/commentValidation.js":
/*!***************************************************!*\
  !*** ./assets/js/components/commentValidation.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var commentValidation = function commentValidation($) {
  $('form#commentform').submit(function () {
    $('form#commentform .error').remove();
    var hasError = false;
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    $('[required="required"]').each(function () {
      if (!!!jQuery.trim($(this).val())) {
        var labelText = $(this).prev('label').text().replace(' *', '');
        $(this).parent().append('<span class="error">' + labelText + ' es un campo obligatorio.</span>');
        hasError = true;
      }

      if (!regex.test($("#email").val()) && !!jQuery.trim($("#email").val())) {
        if ($('.comment-form-email .error').length == 0) {
          var _labelText = $('#email').prev('label').text().replace(' *', '');

          $('#email').parent().append('<span class="error">' + _labelText + ' es un campo obligatorio.</span>');
        }

        hasError = true;
      }
    });

    if (hasError) {
      return false;
    }
  });
  $('form#commentform [required="required"]').focus(function () {
    $(this).siblings($("label")).addClass('active');
    $(this).addClass('mt-8');
  });
  $('form#commentform [required="required"]').focusout(function () {
    if (!!!jQuery.trim($(this).val())) {
      $(this).siblings($("label")).removeClass('active');
      $(this).removeClass('mt-8');
    }
  });
  $('.comment-form-mailpoet').hide();
  $('#mailpoet_subscribe_on_comment').attr('type', 'hidden');
};

/* harmony default export */ __webpack_exports__["default"] = (commentValidation);

/***/ }),

/***/ "./assets/js/components/insertIcons.js":
/*!*********************************************!*\
  !*** ./assets/js/components/insertIcons.js ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var insertIcons = function insertIcons($) {
  /* ACCOUNT PAGE */
  //desktop
  $('nav ul li.menu-item-has-children > a').append("<span class=\"dropdown\" ><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 11.92 5.71\"><defs></defs><g id=\"Capa_2\" data-name=\"Capa 2\"><g id=\"Layer_1\" data-name=\"Layer 1\"><path d=\"M.19,3.68H2.72L6.16,8.36h0L9.72,3.68h2.39L7.31,9.39H5Z\" transform=\"translate(-0.19 -3.68)\"/></g></g></svg></span>");
  /*  $('ul li.facebook a').append(`<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.06 51.06"><defs><style>.cls-1{fill:#ea5f28;}.cls-2{fill:#fff;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><rect class="cls-1" width="51.06" height="51.06" rx="25.53"/><path class="cls-2" d="M21.64,41h6.21V25.4h4.34l.46-5.21h-4.8v-3c0-1.23.25-1.71,1.44-1.71h3.36V10.1h-4.3c-4.62,0-6.71,2-6.71,5.93v4.16H18.41v5.27h3.23Z"/></g></g></svg>`);
   $('ul li.email a').append(`<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.06 51.06"><defs><style>.cls-1{fill:#ea5f28;}.cls-2{fill:#fff;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><rect class="cls-1" width="51.06" height="51.06" rx="25.53"/><path class="cls-2" d="M21.64,41h6.21V25.4h4.34l.46-5.21h-4.8v-3c0-1.23.25-1.71,1.44-1.71h3.36V10.1h-4.3c-4.62,0-6.71,2-6.71,5.93v4.16H18.41v5.27h3.23Z"/></g></g></svg>`);
   $('ul li.house a').append(`<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.06 51.06"><defs><style>.cls-1{fill:#ea5f28;}.cls-2{fill:#fff;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Layer_1" data-name="Layer 1"><rect class="cls-1" width="51.06" height="51.06" rx="25.53"/><path class="cls-2" d="M21.64,41h6.21V25.4h4.34l.46-5.21h-4.8v-3c0-1.23.25-1.71,1.44-1.71h3.36V10.1h-4.3c-4.62,0-6.71,2-6.71,5.93v4.16H18.41v5.27h3.23Z"/></g></g></svg>`);
  */
};

/* harmony default export */ __webpack_exports__["default"] = (insertIcons);

/***/ }),

/***/ "./assets/js/components/loadAds.js":
/*!*****************************************!*\
  !*** ./assets/js/components/loadAds.js ***!
  \*****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var loadAds = function loadAds($) {
  var scriptGtag = $("    \n    \n        <!-- Adsense -->\n        <script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2072313038095874\" crossorigin=\"anonymous\"></script>\n\n    ");
  setTimeout(function () {
    $('head').append(scriptGtag);
  }, 4000);
};

/* harmony default export */ __webpack_exports__["default"] = (loadAds);

/***/ }),

/***/ "./assets/js/components/loadGtag.js":
/*!******************************************!*\
  !*** ./assets/js/components/loadGtag.js ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var loadGtag = function loadGtag($) {
  var scriptGtag = $("   \n        <!-- Global site tag (gtag.js) - Google Analytics -->\n        <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-127421070-1\"></script>\n        <script>\n        window.dataLayer = window.dataLayer || [];\n        function gtag(){dataLayer.push(arguments);}\n        gtag('js', new Date());\n\n        gtag('config', 'UA-127421070-1');\n        </script> \n    ");
  setTimeout(function () {
    $('head').prepend(scriptGtag);
  }, 2000);
};

/* harmony default export */ __webpack_exports__["default"] = (loadGtag);

/***/ }),

/***/ "./assets/js/components/loadPosts.js":
/*!*******************************************!*\
  !*** ./assets/js/components/loadPosts.js ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var ppp = -1; // Post per page

var pageNumber = -1;
var pathsList = window.location.pathname.split('/').filter(function (path) {
  return path != '';
});
var lastSlug = pathsList[pathsList.length - 1];

var loadPosts = function loadPosts($) {
  function load_posts() {
    pageNumber++;
    var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax' + '&current_slug=' + lastSlug;
    $.ajax({
      type: "POST",
      dataType: "html",
      url: ajax_posts.ajaxurl,
      data: str,
      beforeSend: function beforeSend() {
        $("#more_posts").addClass("btn-loader");
      },
      success: function success(data) {
        var $data = $(data);

        if ($data.length) {
          $("#ajax-posts").html($data); //$("#more_posts").attr("disabled",false); // Uncomment this if you want to disable the button once all posts are loaded

          $("#more_posts").hide(); // This will hide the button once all posts have been loaded
        } else {
          $("#more_posts").stop(true, true).animate({
            "opacity": "0"
          }, 500);
          $("#more_posts").attr("disabled", true);
          $("#more_posts").html('');
          $("#more_posts").addClass("btn-loader");
        }
      },
      error: function error(jqXHR, textStatus, errorThrown) {
        $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
      }
    });
    return false;
  }

  $("#more_posts").on("click", function () {
    // When btn is pressed.
    // $("#more_posts").attr("disabled",true); // Disable the button, temp.
    $("#more_posts").addClass("btn-loader");
    $("#more_posts").stop(true, true).animate({
      "opacity": "0"
    }, 500);
    $("#more_posts").html('');
    load_posts(); // $(this).insertAfter('#ajax-posts'); // Move the 'Load More' button to the end of the the newly added posts.
  });
};

/* harmony default export */ __webpack_exports__["default"] = (loadPosts);

/***/ }),

/***/ "./assets/js/components/menuMobile.js":
/*!********************************************!*\
  !*** ./assets/js/components/menuMobile.js ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var menuMobile = function menuMobile($) {
  // Shorthand 
  var Id = document.getElementById.bind(document);
  var mobileNav = Id('mobile-nav-wrap');
  var navToggle = Id('nav-toggle');
  $('#nav-toggle').on('click', function () {
    navToggle.classList.toggle('nav-toggle-active');
    mobileNav.classList.toggle('nav-active');
  });
  /*  $('#mobile-menu li').on('click',()=>{ 
       navToggle.classList.toggle('nav-toggle-active')
       mobileNav.classList.toggle('nav-active')  
   }) */

  $('#mobile-menu li:not(.menu-item-has-children)').on('click', function () {
    navToggle.classList.toggle('nav-toggle-active');
    mobileNav.classList.toggle('nav-active');
  });
  $('#mobile-menu li.menu-item-has-children').on('click', function (e) {
    console.log(e.target);
    $(e.currentTarget).toggleClass('open-submenu');
    $(e.currentTarget).find('.sub-menu').toggleClass('sub-menu-active');
  });
  $('#mobile-nav li.menu-item-has-children > a ').on('click', function (e) {
    if (e.target.className == 'dropdown' || e.target.parentNode.className == 'dropdown') {
      e.preventDefault();
      $('.header-menu li.menu-item-has-children .sub-menu').toggleClass('dropdown-active');
    }
    /* $('.header-menu li.menu-item-has-children > a').preventDefault()  */

  });
  $('.social-media li.search > a').on('click', function (e) {
    e.preventDefault();
    $('.social-media li.search > a').toggleClass('close');
    $('.search-home').toggleClass('search-home-active');
  });
};

/* harmony default export */ __webpack_exports__["default"] = (menuMobile);

/***/ }),

/***/ "./assets/js/components/menuTab.js":
/*!*****************************************!*\
  !*** ./assets/js/components/menuTab.js ***!
  \*****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var menuTab = function menuTab($) {
  // Shorthand 
  var Id = document.getElementById.bind(document);
  var tabWrap = Id('tab-wrap');
  var tabToggle = Id('tab-toggle');
  var tabTop = Id('tab-top');
  $('#tab-toggle').on('click', function (e) {
    tabToggle.classList.toggle('nav-toggle-active');
    tabWrap.classList.toggle('tab-wrap-active');
    tabTop.classList.toggle('tab-toggle-active');
  });
  /*  $('#mobile-menu li').on('click',()=>{ 
       navToggle.classList.toggle('nav-toggle-active')
       mobileNav.classList.toggle('nav-active')  
   }) */

  /*   $('#mobile-menu li:not(.menu-item-has-children)').on('click',()=>{  
        navToggle.classList.toggle('nav-toggle-active')
        mobileNav.classList.toggle('nav-active')        
    })
   */
};

/* harmony default export */ __webpack_exports__["default"] = (menuTab);

/***/ }),

/***/ "./assets/scss/app.scss":
/*!******************************!*\
  !*** ./assets/scss/app.scss ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./assets/scss/lib/_font-agenda.scss":
/*!*******************************************!*\
  !*** ./assets/scss/lib/_font-agenda.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*******************************************************************************************!*\
  !*** multi ./assets/js/app.js ./assets/scss/lib/_font-agenda.scss ./assets/scss/app.scss ***!
  \*******************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\wordpress\ldm\wp-content\themes\ldm\assets\js\app.js */"./assets/js/app.js");
__webpack_require__(/*! C:\xampp\htdocs\wordpress\ldm\wp-content\themes\ldm\assets\scss\lib\_font-agenda.scss */"./assets/scss/lib/_font-agenda.scss");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\wordpress\ldm\wp-content\themes\ldm\assets\scss\app.scss */"./assets/scss/app.scss");


/***/ })

/******/ });