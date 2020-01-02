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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/payment.js":
/*!*********************************!*\
  !*** ./resources/js/payment.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

paypal.Buttons({
  style: {
    shape: 'pill',
    size: 'small',
    color: 'blue',
    layout: 'vertical',
    label: 'paypal'
  },
  createOrder: function createOrder(data, actions) {
    return actions.order.create({
      purchase_units: [{
        amount: {
          value: '4'
        }
      }]
    });
  },
  onApprove: function onApprove(data, actions) {
    return actions.order.capture().then(function (details) {
      var url = window.location.href;
      var emailaddress = localStorage.getItem("emailaddress");
      var material = localStorage.getItem("material");
      material = material.split(',');
      var locale = $('html').attr('lang');
      var cal = localStorage.getItem("cal");
      profile = localStorage.getItem("profile");
      profile = profile.split(',');
      $.ajax({
        url: "/savedietplan",
        method: 'post',
        data: {
          _token: $('meta[name="csrf-token"]').attr("content"),
          cal: cal,
          material: material,
          profile: profile,
          locale: locale,
          link: url,
          email: emailaddress
        },
        success: function success(response) {
          alert("success! Please check your email.");
          console.log(response);
        }
      });
    });
  }
}).render('#paypal-button-container'); // Create a Stripe client.

var stripe = Stripe('pk_test_MA89Ze5zPpGdITTlApUE5PFl00L5L4v5it'); // Create an instance of Elements.

var elements = stripe.elements(); // Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)

var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
}; // Create an instance of the card Element.

var card = elements.create('card', {
  style: style
}); // Add an instance of the card Element into the `card-element` <div>.

card.mount('#card-element'); // Handle real-time validation errors from the card Element.

card.addEventListener('change', function (event) {
  var displayError = document.getElementById('card-errors');

  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});
var form = document.getElementById('payment-form'); // Handle form submission.

$("#payment-form").on('submit', function (event) {
  event.preventDefault();
  stripe.createToken(card).then(function (result) {
    if (result.error) {
      $('card-errors').textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
}); // Submit the form with the token ID.

function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput); // Submit the form

  form.submit();
  var url = window.location.href;
  var emailaddress = localStorage.getItem("emailaddress");
  var material = localStorage.getItem("material");
  material = material.split(',');
  var locale = $('html').attr('lang');
  var cal = localStorage.getItem("cal");
  profile = localStorage.getItem("profile");
  profile = profile.split(',');
  $.ajax({
    url: "/savedietplan",
    method: 'post',
    data: {
      _token: $('meta[name="csrf-token"]').attr("content"),
      cal: cal,
      material: material,
      profile: profile,
      locale: locale,
      link: url,
      email: emailaddress
    },
    success: function success(response) {
      alert("success! Please check your email.");
      console.log(response);
    }
  });
}

/***/ }),

/***/ 1:
/*!***************************************!*\
  !*** multi ./resources/js/payment.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\Projects\005_diet_project_laravel\diet_plan_v.0.9.5\resources\js\payment.js */"./resources/js/payment.js");


/***/ })

/******/ });