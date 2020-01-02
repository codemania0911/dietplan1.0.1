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

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

var gender;
var physical;
var meat = [];
var vegetable = [];
var products = [];
var material = [];
var nomeat = "";
var briefing = 0;
var bmi;
var water;
var age = 0;
var bmr;
var metabolicAge = 0;
var target_weight;
var profile = [];

function initChart(el) {
  var data = el.data();
  var size = data.size ? data.size : 270;
  var line = data.line ? data.line : 20;
  var bgcolor = data.bgcolor ? data.bgcolor : '#ffffff';
  var trackcolor = data.trackcolor ? data.trackcolor : '#c14240';
  var speed = data.speed ? data.speed : 3000;
  el.easyPieChart({
    barColor: trackcolor,
    trackColor: bgcolor,
    scaleColor: false,
    scaleLength: false,
    lineCap: 'butt',
    lineWidth: line,
    size: size,
    rotate: 0,
    animate: speed,
    onStep: function onStep(from, to, percent) {
      $(el).find('.percent').text(Math.round(percent));
    }
  });
} // prev button event


$("#btn-prev").click(function () {
  if ($(".diet-step-1").hasClass("active")) {
    $(this).removeAttr('data-slide');
  }

  if ($(".diet-step-2").hasClass("active")) {
    $(this).attr("data-slide", "prev");
    $(".process-1").addClass("m-progress-bar__dot--active");
    $(".process-1").removeClass("m-progress-bar__dot--previous");
    $(".m-progress-bar__dot--active").css("background-color", '');
    $('#progress-bar').css('width', '0%');
    $(".process-2").removeClass("m-progress-bar__dot--active");
  }

  if ($(".diet-step-3").hasClass("active")) {
    $(this).attr("data-slide", "prev");
    $(".process-2").addClass("m-progress-bar__dot--active");
    $(".process-2").removeClass("m-progress-bar__dot--previous");
    $(".m-progress-bar__dot--active").css("background-color", '');
    $('#progress-bar').css('width', '17%');
    $(".process-3").removeClass("m-progress-bar__dot--active");
  }

  if ($(".diet-step-4").hasClass("active")) {
    $(this).attr("data-slide", "prev");
    $(".process-3").addClass("m-progress-bar__dot--active");
    $(".process-3").removeClass("m-progress-bar__dot--previous");
    $(".m-progress-bar__dot--active").css("background-color", '');
    $('#progress-bar').css('width', '34%');
    $(".process-4").removeClass("m-progress-bar__dot--active");
  }

  if ($(".diet-step-5").hasClass("active")) {
    $(this).attr("data-slide", "prev");
    $(".process-4").addClass("m-progress-bar__dot--active");
    $(".process-4").removeClass("m-progress-bar__dot--previous");
    $(".m-progress-bar__dot--active").css("background-color", '');
    $('#progress-bar').css('width', '50%');
    $(".process-5").removeClass("m-progress-bar__dot--active");
  }

  if ($(".diet-step-6").hasClass("active")) {
    $(this).attr("data-slide", "prev");
    $(".process-5").addClass("m-progress-bar__dot--active");
    $(".process-5").removeClass("m-progress-bar__dot--previous");
    $(".m-progress-bar__dot--active").css("background-color", '');
    $('#progress-bar').css('width', '67%');
    $(".process-6").removeClass("m-progress-bar__dot--active");
  }

  if ($(".diet-step-7").hasClass("active")) {
    $(this).attr("data-slide", "prev");
    $(".process-6").addClass("m-progress-bar__dot--active");
    $(".process-6").removeClass("m-progress-bar__dot--previous");
    $(".m-progress-bar__dot--active").css("background-color", '');
    $('#progress-bar').css('width', '83%');
    $(".process-7").removeClass("m-progress-bar__dot--active");
  }
}); // end preve button event
// next button event

$("#btn-next").click(function () {
  if ($(".diet-step-1").hasClass("active")) {
    $(this).removeAttr('data-slide');
    alert("Please select the above!");
  }

  if ($(".diet-step-2").hasClass("active")) {
    $(this).removeAttr('data-slide');
    alert("Please select the above!");
  }

  if ($(".diet-step-3").hasClass("active")) {
    $(this).removeAttr("data-slide");

    if (nomeat == "" && meat.length == 0) {
      alert("Please select the above!");
    }

    if (nomeat == "nomeat" || meat.length != 0) {
      var meats = meat.toString();
      localStorage.setItem("meat", meats);
      $(this).attr("data-slide", "next");
      $(".process-3").removeClass("m-progress-bar__dot--active");
      $(".process-3").addClass("m-progress-bar__dot--previous");
      $("#progress-bar").css("width", "50%");
      $(".process-4").addClass("m-progress-bar__dot--active");
      $(".m-progress-bar__dot--active").css("background-color", "#78bf4d");
    }
  }

  if ($(".diet-step-4").hasClass("active")) {
    $(this).attr("data-slide", "next");
    var vegetables = vegetable.toString();
    localStorage.setItem("veggies", vegetables);
    $(".process-4").removeClass("m-progress-bar__dot--active");
    $(".process-4").addClass("m-progress-bar__dot--previous");
    $("#progress-bar").css("width", "67%");
    $(".process-5").addClass("m-progress-bar__dot--active");
    $(".m-progress-bar__dot--active").css("background-color", "#78bf4d");
  }

  if ($(".diet-step-5").hasClass("active")) {
    $(this).attr("data-slide", "next");
    var product = products.toString();
    localStorage.setItem("products", product);
    $(".process-5").removeClass("m-progress-bar__dot--active");
    $(".process-5").addClass("m-progress-bar__dot--previous");
    $("#progress-bar").css("width", "83%");
    $(".process-6").addClass("m-progress-bar__dot--active");
    $(".m-progress-bar__dot--active").css("background-color", "#78bf4d");
  }

  if ($(".diet-step-6").hasClass("active")) {
    if (briefing != 0) {
      $(this).attr('data-slide', 'next');
      $(".process-6").removeClass("m-progress-bar__dot--active");
      $(".process-6").addClass("m-progress-bar__dot--previous");
      $("#progress-bar").css("width", "98%");
      $(".process-7").addClass("m-progress-bar__dot--active");
      $(".m-progress-bar__dot--active").css("background-color", "#78bf4d");
    } else {
      $(this).removeAttr('data-slide');
      alert("Select content the above!");
    }
  }

  if ($(".diet-step-7").hasClass("active")) {
    $(this).removeAttr('data-slide');

    if ($("#material_measurement").hasClass("active")) {
      if ($("#age").val() > 14 && $("#age").val() < 99 && $("#height").val() > 135 && $("#height").val() < 255 && $("#weight").val() > 40 && $("#weight").val() < 180 && $("#target_weight").val() > 40 && $("#target_weight").val() < 180) {
        calculator();
        $(this).attr("data-slide", "next");
        $("#footer-process").hide();
        setTimeout(function () {
          $("#show_result").show();
        }, 10000);
      } else {
        alert("Please enter the correct data!");
      }
    } else {
      if ($("#imperial_age").val() > 14 && $("#imperial_age").val() < 99 && $("#ft").val() > 4 && $("#ft").val() < 8 && $("#inch").val() < 11 && $("#imperial_weight").val() > 90 && $("#imperial_weight").val() < 400 && $("#imperial_target_weight").val() > 90 && $("#imperial_target_weight").val() < 400) {
        calculator();
        $(this).attr("data-slide", "next");
        $("#footer-process").hide();
        setTimeout(function () {
          $("#show_result").show();
        }, 10000);
      } else {
        alert("Please enter the correct data!");
      }
    }
  }
}); // end next button event
// stop frame

$(".carousel").carousel({
  interval: false
}); // end stop frame
// svg-select animation

$(".svg-select").click(function () {
  if ($(".diet-step-3").hasClass("active")) {
    if ($(this).attr('data-products') == "nomeat") {
      meat = [];
      nomeat = "nomeat";
      $(".svg-select").removeClass("checked");
      $(this).addClass("checked");
    } else {
      nomeat = "";
      $("#nomeat").removeClass("checked");

      if ($(this).hasClass("checked")) {
        $(this).removeClass("checked");
        meat.splice($.inArray($(this).attr('data-products'), meat), 1);
      } else {
        $(this).addClass("checked");
        meat.push($(this).attr('data-products'));
      }
    }
  }

  if ($(".diet-step-4").hasClass("active")) {
    if ($(this).hasClass("checked")) {
      $(this).removeClass("checked");
      vegetable.splice($.inArray($(this).attr('data-products'), vegetable), 1);
    } else {
      $(this).addClass("checked");
      vegetable.push($(this).attr('data-products'));
    }
  }

  if ($(".diet-step-5").hasClass("active")) {
    if ($(this).hasClass("checked")) {
      $(this).removeClass("checked");
      products.splice($.inArray($(this).attr('data-products'), products), 1);
    } else {
      $(this).addClass("checked");
      products.push($(this).attr('data-products'));
    }
  }
}); // end svg-select animation
// get gender

$(".gender").click(function () {
  gender = $(this).attr('data-gender');
  $(".process-1").removeClass("m-progress-bar__dot--active");
  $(".process-1").addClass("m-progress-bar__dot--previous");
  $("#progress-bar").css("width", "17%");
  $(".process-2").addClass("m-progress-bar__dot--active");
  $(".m-progress-bar__dot--active").css("background-color", "#78bf4d");
  localStorage.setItem('gender', gender);
}); // end get gender
// get physical activity 

$(".physical").click(function () {
  physical = $(this).attr('data-physical');
  $(".diet-slider1").css("background-image", "url(" + "assets/images/Good_Food_Slide_BG_1_Simple_Diet_Plan_High_Resolution_Diet_Plan_Homepage_healthy_food_low_calories_Diet_Photo_Keto_Interval_Diet_Organic_Food_.jpg" + ") ");
  $(".process-2").removeClass("m-progress-bar__dot--active");
  $(".process-2").addClass("m-progress-bar__dot--previous");
  $("#progress-bar").css("width", "34%");
  $(".process-3").addClass("m-progress-bar__dot--active");
  $(".m-progress-bar__dot--active").css("background-color", "#78bf4d");
  localStorage.setItem('physical', physical);
}); // end gt physical activity
// select typical day

$(".briefing").click(function () {
  if ($(this).hasClass("checked")) {
    if ($(this).attr("data-briefing") == "6") {
      $(".briefing").addClass("checked");
      $(this).removeClass("checked");
      briefing += 5;
    } else {
      $(this).removeClass("checked");
      briefing -= 1;
    }
  } else {
    if ($(this).attr("data-briefing") == "6") {
      $(".briefing").removeClass("checked");
      $(this).addClass("checked");
      briefing -= 5;
    } else {
      $("#noabove").removeClass("checked");
      $(this).addClass("checked");
      briefing += 1;
    }
  }
}); // end select typical day
// get measurements

function calculator() {
  var $chart = $('#chart-processing .chart');
  $chart.appear();
  initChart($chart);

  if ($("#material_measurement").hasClass("active")) {
    age = parseInt($("#age").val());
    height = parseInt($("#height").val());
    weight = parseInt($("#weight").val());
    target_weight = parseInt($("#target_weight").val());
  } else {
    age = parseInt($("#imperial_age").val());
    var ft = parseInt($("#ft").val());
    var inch = parseInt($("#inch").val()) || 0; // It is possible isNaN($("#inch").val());

    height = 30.48 * ft + 2.54 * inch;
    var imweight = parseInt($("#imperial_weight").val());
    weight = 0.45 * imweight;
    var im_ta_weight = parseInt($("#imperial_target_weight").val());
    target_weight = 0.45 * im_ta_weight;
  } // get bmi


  bmi = weight * 10000 / (height * height);
  bmi = bmi.toFixed(2); // end get bmi
  // get water

  water = weight * 0.03;
  water = water.toFixed(1); // end get water

  var genders = localStorage.getItem("gender");

  if (genders == '1') {
    bmr = 9.99 * weight + (6.25 * height - (4.92 * age + 5));
  } else {
    bmr = 9.99 * weight + (6.25 * height - 4.92 * age - 161);
  }

  if (physical == "1") {
    bmr = bmr * 1.2 - 500;
    metabolicAge += 3;
  }

  if (physical == "2") {
    bmr = bmr * 1.375 - 500;
    metabolicAge += 2;
  }

  if (physical == "3") {
    bmr = bmr * 1.55 - 500;
  }

  if (physical == "4") {
    bmr = bmr * 1.725 - 500;
    metabolicAge -= 2;
  }

  if (physical == "5") {
    bmr = bmr * 1.9 - 500;
    metabolicAge -= 3;
  } // get Caloires


  bmr = bmr.toFixed(0);
  localStorage.setItem("cal", bmr); // end get Calories
  // get metabolic Age

  metabolicAge = metabolicAge + briefing + age; // end get metabolic Age

  bmr = (bmr - 50).toString() + "~" + (+bmr + 50).toString();
  target_weight = weight - 4;
  profile.push(bmr, water, metabolicAge, weight, target_weight, bmi);
  profile = profile.toString();
  localStorage.setItem("profile", profile); //save material in localstorage

  var meats = localStorage.getItem("meat");
  meats = meats.split(',');
  var vegetables = localStorage.getItem("veggies");
  vegetables = vegetables.split(',');
  var products = localStorage.getItem("products");
  products = products.split(',');
  var material = meats.concat(vegetables, products);
  material = material.toString();
  localStorage.setItem("material", material);
  localStorage.removeItem("meat");
  localStorage.removeItem("veggies");
  localStorage.removeItem("products"); // end save material in localstorage
} // end get measurements
// show first result


$("#show_result").click(function () {
  $(".diet-slider").css("height", "auto");
  var show_result = localStorage.getItem("profile");
  show_result = show_result.split(',');
  $("#diet_bmi").text(show_result[5]);
  $("#diet_metabolic_age").text(show_result[2]);
  $("#diet_cal").text(show_result[0]);
  $("#diet_archieve_weight").text(show_result[3]);
  $("#diet_target_weight").text(show_result[4]);
  $("#diet_water").text(show_result[1]);
}); // end show first result
// email address check

$("#go_payment").click(function () {
  $(this).removeAttr('data-slide');
  var email = $("#email_address").val();

  if (email.trim().length == 0) {
    $("#email_empty").show();
    $("#email_type_error").hide();
  } else {
    $("#email_empty").hide();

    if (email.indexOf('@') == -1) {
      $("#email_type_error").show();
    } else {
      $("#email_empty").hide();
      $("#email_type_error").hide();
      localStorage.setItem("emailaddress", email);
      $(this).attr("data-slide", "next");
    }
  }
}); // end email address check
// select week

$('#select_week').on('change', function () {
  var link_url = "/";
  var locale = $('html').attr('lang');
  var userkey = $('#user_key').val();
  var week = "/week/";
  var week_val = $('#select_week').val();
  link_url = link_url.concat(locale, "/showdiet/", userkey, week, week_val); // window.open(link_url, '_blank');

  $.ajax({
    url: link_url,
    method: 'post',
    data: {
      _token: $('meta[name="csrf-token"]').attr("content")
    },
    success: function success(response) {
      // Begin process response
      if (response.success == true) {
        var profile = response.data.profile;
        var start_date = response.data.diet_plan['startDate'];
        var diet_plan = response.data.diet_plan['recipe'];
        $list1 = $('#date_num');
        $list1 = $list1.empty();
        $list2 = $('#tab_selector');
        $list2 = $list2.empty();

        for (i = 0; i < 7; i++) {
          row1 = '<li class="tab-selector nav-item">\
                    <a class="nav-link first" href="#tab' + (i + 1) + '" data-toggle="tab"> ' + (start_date + i) + '</a>\
                  </li>', $list1.append(row1);
          row2 = '<option value="' + i + '">' + (start_date + i) + '</option>', $list2.append(row2);
        }

        $tabContent = $('.tab-content');
        $tabContent.empty();

        for (i = 0; i < 7; i++) {
          if (i == 0) {
            var temp_header = '<div class="tab-pane fade in active show" id="tab' + (i + 1) + '">';
          } else {
            var temp_header = '<div class="tab-pane" id="tab' + (i + 1) + '">';
          }

          $.each(diet_plan, function () {
            var temp_recipe = '<div class="media bordered diet_detail" data-recipe-id="' + this[i].id + '">\
                    <img src="' + this[i].image_url + '" width="300" height="300">\
                    <div class="media-body">\
                        <h5>' + this[i].name + '</h5>\
                    </div>\
                </div>';
            temp_header += temp_recipe;
          });
          temp_header += "</div>";
          $tabContent.append(temp_header); // diet detail 

          $('.diet_detail').on('click', function () {
            var locale = $('html').attr('lang');
            var link_url = "/";
            var userkey = $('#user_key').val();
            var diet_id = $(this).attr("data-recipe-id");
            link_url = link_url.concat(locale, "/dietdetail/", userkey, "/recipe/", diet_id);
            window.open(link_url, '_blank');
          }); // end diet detail
        }
      }
    }
  });
}); // end select week change
// diet detail 

$('.diet_detail').on('click', function () {
  var locale = $('html').attr('lang');
  var link_url = "/";
  var userkey = $('#user_key').val();
  var diet_id = $(this).attr("data-recipe-id");
  link_url = link_url.concat(locale, "/dietdetail/", userkey, "/recipe/", diet_id);
  window.open(link_url, '_blank');
}); // end diet detail
// age value

$("#age").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#metric_age_empty").show();
    $("#metric_age_small").hide();
    $("#metric_age_big").hide();
  } else {
    $("#metric_age_empty").hide();
    $("#metric_age_big").hide();

    if ($(this).val() < 14) {
      $("#metric_age_small").show();
    } else {
      $("#metric_age_small").hide();

      if ($(this).val() > 99) {
        $("#metric_age_big").show();
      } else {
        $("#metric_age_big").hide();
      }
    }
  }
}); // end age value
// height value

$("#height").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#metric_height_empty").show();
    $("#metric_height_small").hide();
    $("#metric_height_big").hide();
  } else {
    $("#metric_height_empty").hide();
    $("#metric_height_big").hide();

    if ($(this).val() < 135) {
      $("#metric_height_small").show();
    } else {
      $("#metric_height_small").hide();

      if ($(this).val() > 255) {
        $("#metric_height_big").show();
      } else {
        $("#metric_height_big").hide();
      }
    }
  }
}); // end height value
// weight value

$("#weight").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#metric_weight_empty").show();
    $("#metric_weight_small").hide();
    $("#metric_weight_big").hide();
  } else {
    $("#metric_weight_empty").hide();
    $("#metric_weight_big").hide();

    if ($(this).val() < 40) {
      $("#metric_weight_small").show();
    } else {
      $("#metric_weight_small").hide();

      if ($(this).val() > 180) {
        $("#metric_weight_big").show();
      } else {
        $("#metric_weight_big").hide();
      }
    }
  }
}); // end weight value
// target_weight value

$("#target_weight").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#metric_target_weight_empty").show();
    $("#metric_target_weight_small").hide();
    $("#metric_target_weight_big").hide();
  } else {
    $("#metric_target_weight_empty").hide();
    $("#metric_target_weight_big").hide();

    if ($(this).val() < 40) {
      $("#metric_target_weight_small").show();
    } else {
      $("#metric_target_weight_small").hide();

      if ($(this).val() > 180) {
        $("#metric_target_weight_big").show();
      } else {
        $("#metric_target_weight_big").hide();
      }
    }
  }
}); // end target_weight value
//imperial age value

$("#imperial_age").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#imperial_age_empty").show();
    $("#imperial_age_small").hide();
    $("#imperial_age_big").hide();
  } else {
    $("#imperial_age_empty").hide();
    $("#imperial_age_big").hide();

    if ($(this).val() < 14) {
      $("#imperial_age_small").show();
    } else {
      $("#imperial_age_small").hide();

      if ($(this).val() > 99) {
        $("#imperial_age_big").show();
      } else {
        $("#imperial_age_big").hide();
      }
    }
  }
}); // end imperial age value
//imperial ft value

$("#ft").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#imperial_ft_empty").show();
    $("#imperial_ft_small").hide();
    $("#imperial_ft_big").hide();
  } else {
    $("#imperial_ft_empty").hide();
    $("#imperial_ft_big").hide();

    if ($(this).val() < 4) {
      $("#imperial_ft_small").show();
    } else {
      $("#imperial_ft_small").hide();

      if ($(this).val() > 8) {
        $("#imperial_ft_big").show();
      } else {
        $("#imperial_ft_big").hide();
      }
    }
  }
}); // end imperial ft value
//imperial inch value

$("#inch").on("blur", function () {
  if ($(this).val() > 11) {
    $("#imperial_inch_big").show();
  } else {
    $("#imperial_inch_big").hide();
  }
}); //end imperial inch value
//imperial weight value

$("#imperial_weight").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#imperial_weight_empty").show();
    $("#imperial_weight_small").hide();
    $("#imperial_weight_big").hide();
  } else {
    $("#imperial_weight_empty").hide();
    $("#imperial_weight_big").hide();

    if ($(this).val() < 90) {
      $("#imperial_weight_small").show();
    } else {
      $("#imperial_weight_small").hide();

      if ($(this).val() > 400) {
        $("#imperial_weight_big").show();
      } else {
        $("#imperial_weight_big").hide();
      }
    }
  }
}); // end imperial weight value
// imperial target_weight value

$("#imperial_target_weight").on("blur", function () {
  if ($(this).val().trim().length == 0) {
    $("#imperial_target_weight_empty").show();
    $("#imperial_target_weight_small").hide();
    $("#imperial_target_weight_big").hide();
  } else {
    $("#imperial_target_weight_empty").hide();
    $("#imperial_target_weight_big").hide();

    if ($(this).val() < 90) {
      $("#imperial_target_weight_small").show();
    } else {
      $("#imperial_target_weight_small").hide();

      if ($(this).val() > 400) {
        $("#imperial_target_weight_big").show();
      } else {
        $("#imperial_target_weight_big").hide();
      }
    }
  }
}); // end imperial target_weight value
//preloader remove after 3s

$(document).ready(function () {
  setTimeout(function () {
    $("#preloader").remove();
  }, 3000); // $(".diet-slider2-2").hide();
  // $(".diet-slider3-2").hide();

  $(".process-1").addClass("m-progress-bar__dot--active");
  $(".m-progress-bar__dot--active").css("background-color", "#78bf4d");
  $("#show_result").hide();
  setInterval(function () {
    change();
  }, 6000);
}); //end preloader remove after 3s

var flag = true;

function change() {
  if (flag == true) {
    $(".diet-slider1").stop().animate({
      opacity: 0.7
    }, 1000, function () {
      $(".diet-slider1").css("background-image", "url(" + "assets/images/slide02.jpg" + ")").animate({
        opacity: 1
      }, {
        duration: 1000
      });
    }); // $(".diet-slider2-1").animate({opacity:0.5}, 1000, function(){
    //   $(".diet-slider2-2").fadeIn(1000);
    // });
    // $(".diet-slider3-1").fadeTo(1000, 0.8, function(){
    //   $(".diet-slider3-2").fadeTo(1000, 1);
    // });
    // $(".diet-slider2-1").css("width", "-100%");
    // $(".diet-slider2-2").css("width", "100%");

    flag = false;
  } else {
    $(".diet-slider1").stop().animate({
      opacity: 0.9
    }, 2000, function () {
      $(".diet-slider1").css("background-image", "url(" + "assets/images/slide01.jpg" + ")").animate({
        opacity: 1
      }, {
        duration: 2000
      });
    }); // $(".diet-slider2-2").animate({opacity:0.5}, 1000, function(){
    //   $(".diet-slider2-1").fadeIn(1000);
    // });
    // $(".diet-slider3-2").fadeTo(1000, 0.8, function(){
    //   $(".diet-slider3-1").fadeTo(1000, 0.8);
    // });
    // $(".diet-slider2-2").css("width", "-100%");
    // $(".diet-slider2-1").css("width", "100%");

    flag = true;
  }
} // Stripe dialog


$(document).on('click', '.show_stripe', function (event) {
  event.preventDefault(); // var $modal = $('#stripe_modal');
  //   $modal.modal('show');

  $('#stripe_modal').modal('show');
}); //end Stripe dialog

/***/ }),

/***/ "./resources/sass/scss/app.scss":
/*!**************************************!*\
  !*** ./resources/sass/scss/app.scss ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!******************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/scss/app.scss ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\Projects\005_diet_project_laravel\diet_plan_v.0.9.5\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! D:\Projects\005_diet_project_laravel\diet_plan_v.0.9.5\resources\sass\scss\app.scss */"./resources/sass/scss/app.scss");


/***/ })

/******/ });