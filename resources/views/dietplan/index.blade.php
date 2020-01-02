@extends('masters.master')

@section('content')
    <div id="canvas">
        <div id="box_wrapper">

            <section class="diet-slider1">
                <div class="header_absolute">
                    <header class="page_header s-bordertop nav-narrow ds justify-nav-center header-main">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-xl-2 col-lg-3 col-11">
                                    <a href="/" class="logo">
                                        <img src="assets/s-logo.png" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-8 col-1 text-sm-center">
                                    <nav class="top-nav">
                                        <ul class="nav sf-menu">
    
                                            <li class="active">
                                                <a href="">@lang('app.pricing')</a>
                                            </li>
    
                                            <li>
                                                <a href="">@lang('app.contact')</a>
                                            </li>
    
                                            <li>
                                                <a href="">@lang('app.faqs')</a>
                                            </li>
    
                                            <li>
                                                <a href="">@lang('app.myplan')</a>
                                            </li>

                                        </ul>
    
                                    </nav>
                                </div>
                              
                            </div>
                        </div>
                        <span class="toggle_menu">
                            <span></span>
                        </span>
                    </header>
                </div>
                
                <div id="slide" class="carousel slide justify-content-center text-center" data-ride="carousel">

                    <!-- select gender-->
                    <div class="carousel-item diet-step-1 active">
                        
                        <div class="d-inline-block">
                            <h2 class="intro_featured_word">
                                @lang('app.title')
                            </h2>
                        </div>
                        <div class="pt-5">
                            <div class="gender m-select-gender__button-gender a-button-gender" href="#slide" role="button" data-slide="next" data-gender="2">
                                <div class="a-button-gender__background">
                                    <div class="a-button-gender__circle a-button-gender__circle--1 js-button-circle"></div>
                                    <div class="a-button-gender__circle a-button-gender__circle--2 js-button-circle"></div>
                                </div>
                                <div class="a-button-gender__content">
                                    <div class="a-button-gender__circle a-button-gender__circle--3 js-button-circle-main"></div>
                                        <img class="a-icon a-button-gender__icon" src="assets/images/svg/female.svg">
                                    <div class="a-button-gender__text">@lang('app.female')</div>
                                </div>
                            </div>
                            <div class="gender m-select-gender__button-gender  a-button-gender a-button-gender--man" href="#slide" role="button" data-slide="next" data-gender="1">
                                <div class="a-button-gender__background">
                                    <div class="a-button-gender__circle a-button-gender__circle--1 js-button-circle"></div>
                                    <div class="a-button-gender__circle a-button-gender__circle--2 js-button-circle"></div>
                                </div>
                                <div class="a-button-gender__content">
                                    <div class="a-button-gender__circle a-button-gender__circle--3 js-button-circle-main"></div>
                                        <img class="a-icon a-button-gender__icon" src="assets/images/svg/male.svg">
                                    <div class="a-button-gender__text">@lang('app.male')</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- select gender-->
                    
                    <!-- select physical-->	
                    <div class="carousel-item diet-step-2">
                        <div class="d-inline-block">
                            <h2 class="intro_featured_word">
                                @lang('app.physicaltitle')
                            </h2>
                        </div>

                        <div class="intro_layers flex-btn" data-animation="fadeInUp">
                            <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="1">@lang('app.physical1')</div>
                            <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="2">@lang('app.physical2')</div>
                            <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="3">@lang('app.physical3')</div>
                            <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="4">@lang('app.physical4')</div>
                            <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="5">@lang('app.physical5')</div>
                        </div>
                    </div>
                    <!-- select physical-->

                    <!-- select meat-->
                    <div class="carousel-item diet-step-3">
                        <div class="d-inline-block">
                            <h2 class="intro_featured_word">
                                @lang('app.meat')
                            </h2>
                        </div>

                        <div class="intro_layer" data-animation="fadeInUp">
                            <h6 class="intro_featured_word">
                                @lang('app.meatheading')
                            </h6>
                        </div>
                        
                        <div class="row divider-25">
                            
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="beef">
                                    <img src="assets/images/svg/beef.svg">
                                    <p>@lang('app.beef')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="pork">
                                    <img src="assets/images/svg/pork.svg">
                                    <p>@lang('app.pork')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="chicken">
                                    <img src="assets/images/svg/chicken.svg">
                                    <p>@lang('app.chicken')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="bacon">
                                    <img src="assets/images/svg/bacon.svg">
                                    <p>@lang('app.bacon')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="fish">
                                    <img src="assets/images/svg/fish.svg">
                                    <p>@lang('app.fish')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" id="nomeat" data-products="nomeat">
                                    <img src="assets/images/svg/nomeat.svg">
                                    <p>@lang('app.nomeat')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- select meat-->

                    <!-- select veggies-->
                    <div class="carousel-item diet-step-4">

                        <div class="d-inline-block">
                            <h2 class="intro_featured_word">
                                @lang('app.veggies')
                            </h2>
                        </div>

                        <div class="intro_layer" data-animation="fadeInUp">
                            <h6 class="intro_featured_word">
                                @lang('app.veggiesheading')
                            </h6>
                        </div>

                        <div class="row divider-25">
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="broccoli">
                                    <img src="assets/images/svg/broccoli.svg">
                                    <p>@lang('app.broccoli')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="mushroom">
                                    <img src="assets/images/svg/mushroom.svg">
                                    <p>@lang('app.mushroom')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="zucchini">
                                    <img src="assets/images/svg/zucchini.svg">
                                    <p>@lang('app.zucchini')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="cauliflower">
                                    <img src="assets/images/svg/cauliflower.svg">
                                    <p>@lang('app.cauliflower')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="asparagus">
                                    <img src="assets/images/svg/asparagus.svg">
                                    <p>@lang('app.asparagus')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="avocado">
                                    <img src="assets/images/svg/avocado.svg">
                                    <p>@lang('app.avocado')</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- select veggies-->

                    <!-- select product-->
                    <div class="carousel-item diet-step-5">

                        <div class="d-inline-block">
                            <h2 class="intro_featured_word">
                                @lang('app.products')
                            </h2>
                        </div>

                        <div class="intro_layer" data-animation="fadeInUp">
                            <h6 class="intro_featured_word">
                                @lang('app.productsheading')
                            </h6>
                        </div>

                        <div class="row divider-25">
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="egg">
                                    <img src="assets/images/svg/eggs.svg">
                                    <p>@lang('app.eggs')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="nuts">
                                    <img src="assets/images/svg/nuts.svg">
                                    <p>@lang('app.nuts')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="cheese">
                                    <img src="assets/images/svg/cheese.svg">
                                    <p>@lang('app.cheese')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="butter">
                                    <img src="assets/images/svg/butter.svg">
                                    <p>@lang('app.butter')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="coconut">
                                    <img src="assets/images/svg/coconut.svg">
                                    <p>@lang('app.coconut')</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div class="svg-material svg-select" data-products="tofu">
                                    <img src="assets/images/svg/tofu.svg">
                                    <p>@lang('app.tofu')</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- select product-->

                    <!-- select physical-->	
                    <div class="carousel-item diet-step-6">
                        <div class="intro_layers_wrapper">
                            <div class="intro_layers">
                                <div class="d-inline-block">
                                    <h2 class="intro_featured_word">
                                        @lang('app.briefing')
                                    </h2>
                                </div>

                                <div class="intro_layers flex-btn" data-animation="fadeInUp">
                                    <div class="btn btn-light briefing" data-briefing="1">@lang('app.briefing1')</div>
                                    <div class="btn btn-light briefing" data-briefing="2">@lang('app.briefing2')</div>
                                    <div class="btn btn-light briefing" data-briefing="3">@lang('app.briefing3')</div>
                                    <div class="btn btn-light briefing" data-briefing="4">@lang('app.briefing4')</div>
                                    <div class="btn btn-light briefing" data-briefing="5">@lang('app.briefing5')</div>
                                    <div class="btn btn-light briefing" id="noabove" data-briefing="6">@lang('app.briefing6')</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- select physical-->

                    <!-- select measurements-->
                    <div class="carousel-item diet-step-7 ">
                        <div class="intro_layers">
                            <div class="d-inline-block">
                                <h2 class="intro_featured_word">
                                    @lang('app.measurements')
                                </h2>
                            </div>

                            <div class="container">
                            <div class="woocommerce-tabs shop-single-tab wc-tabs-wrapper">

                                <ul class="tabs wc-tabs" role="tablist">
                                    <li class="description_tab active" id="material_measurement" role="tab" aria-controls="tab-description">
                                        <a href="#material_mea"><p id="metric" for="metric">@lang('app.metric')</p></a>
                                    </li>
                                    <li class="additional_information_tab" id="imperial_measurement" role="tab" aria-controls="tab-additional_information">
                                        <a href="#imperial_mea"><p id="imperial" for="imperial">@lang('app.imperial')</p></a>
                                    </li>
                                </ul>

                                <div class="panel wc-tab" id="material_mea" role="tabpanel" aria-labelledby="tab-title-description">
                                    <div class="container">
                                        <div class="intro_layers divider-35 flex-btn">
                                            <input type="number" class="input-text" id="age" placeholder="@lang('app.age')" autocomplete="organization" min="14" max="99" required>
                                        </div>
                                            <p for="metric_age" id="metric_age_empty" class="errorMsg">@lang('app.ageempty')</p>
                                            <p for="metric_age" id="metric_age_small" class="errorMsg">@lang('app.agesmall')</p>
                                            <p for="metric_age" id="metric_age_big" class="errorMsg">@lang('app.agebig')</p>
                                        
                                        <div class="intro_layers divider-10 flex-btn">
                                            <input type="number" class="input-text" id="height" placeholder="@lang('app.height')" autocomplete="organization" id="height" required>
                                        </div>
                                            <p for="metric_age" id="metric_height_empty" class="errorMsg">@lang('app.heightempty')</p>
                                            <p for="metric_age" id="metric_height_small" class="errorMsg">@lang('app.heightsmall')</p>
                                            <p for="metric_age" id="metric_height_big" class="errorMsg">@lang('app.heightbig')</p>
                                        
                                        <div class="intro_layers divider-10 flex-btn">  
                                            <input type="number" class="input-text" id="weight" placeholder="@lang('app.weight')" autocomplete="organization" id="weight" required>
                                        </div>
                                            <p for="metric_age" id="metric_weight_empty" class="errorMsg">@lang('app.weightempty')</p>
                                            <p for="metric_age" id="metric_weight_small" class="errorMsg">@lang('app.weightsmall')</p>
                                            <p for="metric_age" id="metric_weight_big" class="errorMsg">@lang('app.weightbig')</p>
                                        
                                        <div class="intro_layers divider-10 flex-btn">
                                            <input type="number" class="input-text" id="target_weight" placeholder="@lang('app.targetweight')" autocomplete="organization" required>
                                        </div>
                                            <p for="metric_age" id="metric_target_weight_empty" class="errorMsg">@lang('app.targetweightempty')</p>
                                            <p for="metric_age" id="metric_target_weight_small" class="errorMsg">@lang('app.targetweightsmall')</p>
                                            <p for="metric_age" id="metric_target_weight_big" class="errorMsg">@lang('app.targetweightbig')</p>
                                        
                                    </div>
                                </div>
                                <div class="panel wc-tab" id="imperial_mea" role="tabpanel" aria-labelledby="tab-title-additional_information">
                                    <div class="container">
                                        <div class="intro_layers divider-35 flex-btn">
                                            <input type="number" class="input-text" id="imperial_age" placeholder="@lang('app.age')" autocomplete="organization" min="14" max="99" required>
                                        </div>
                                            <p for="imperial_age" id="imperial_age_empty" class="errorMsg">@lang('app.ageempty')</p>
                                            <p for="imperial_age" id="imperial_age_small" class="errorMsg">@lang('app.agesmall')</p>
                                            <p for="imperial_age" id="imperial_age_big" class="errorMsg">@lang('app.agebig')</p>
                                        
                                        <div class="intro_layers divider-10 flex-btn">
                                            <input type="number" class="input-text" id="ft" placeholder="@lang('app.ft')" autocomplete="organization" id="height" required>
                                            <input type="number" class="input-text" id="inch" placeholder="@lang('app.inch')" autocomplete="organization" id="height" required>
                                        </div>
                                            <p for="imperial_height" id="imperial_ft_empty" class="errorMsg">@lang('app.ftempty')</p>
                                            <p for="imperial_height" id="imperial_ft_small" class="errorMsg">@lang('app.ftsmall')</p>
                                            <p for="imperial_height" id="imperial_ft_big" class="errorMsg">@lang('app.ftbig')</p>
                                            <p for="imperial_height" id="imperial_inch_big" class="errorMsg">@lang('app.inchbig')</p>
                                        
                                        <div class="intro_layers divider-10 flex-btn">  
                                            <input type="number" class="input-text" id="imperial_weight" placeholder="@lang('app.imperialweight')" autocomplete="organization" id="weight" required>
                                        </div>
                                            <p for="imperial_weight" id="imperial_weight_empty" class="errorMsg">@lang('app.imperialweightempty')</p>
                                            <p for="imperial_weight" id="imperial_weight_small" class="errorMsg">@lang('app.imperialweightsmall')</p>
                                            <p for="imperial_weight" id="imperial_weight_big" class="errorMsg">@lang('app.imperialweightbig')</p>
                                        
                                        <div class="intro_layers divider-10 flex-btn">
                                            <input type="number" class="input-text" id="imperial_target_weight" placeholder="@lang('app.imperialtargetweight')" autocomplete="organization" required>
                                        </div>
                                            <p for="imperial_age" id="imperial_target_weight_empty" class="errorMsg">@lang('app.imperialtargetweightempty')</p>
                                            <p for="imperial_age" id="imperial_target_weight_small" class="errorMsg">@lang('app.imperialtargetweightsmall')</p>
                                            <p for="imperial_age" id="imperial_target_weight_big" class="errorMsg">@lang('app.imperialtargetweightbig')</p>
                                        
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- select measurements-->

                    <!-- processing plan-->
                    <div class="carousel-item diet-step-8">
                        <div class="intro_layers">
                            <div class="d-inline-block">
                                <h2 class="intro_featured_word">
                                    @lang('app.processingplan')
                                </h2>
                            </div>

                            <div class="intro_layers divider-100 flex-btn" id="chart-processing" data-animation="fadeInUp">
                                <div class="chart" data-size="240" data-percent="100" data-line="7" data-bgcolor="#e5e5e5" data-trackcolor="#82b440" data-speed="10000">
                                    <div class="chart-meta">
                                        <strong class="percent color-darkgrey"></strong>
                                        <h4 class="text-uppercase thin"></h4>
                                    </div>
                                </div>
                                <div id="show_result" class="btn btn-light divider-35" href="#slide" role="button" data-slide="next">@lang('app.continue')</div>
                            </div>
                        </div>
                    </div>
                    <!-- processing plan-->

                    <!-- show Data-->
                    <div class="carousel-item diet-step-9">
                        <div class="intro_layers">
                            <div class="d-inline-block">
                                <h2 class="intro_featured_word">
                                    @lang('app.summary')
                                </h2>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="divider-70 d-none d-lg-block">
                                    </div>
                                    <div class="col-12">
                                        <div class="row divider-25">
                                            <div class="col-lg-4">
                                                <div class="card text-center ds">
                                                    <img class="card-img-top" src="" alt="">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            @lang('app.bmi')
                                                        </h5>
                                                        <p class="card-text">
                                                            @lang('app.yourbmi')&nbsp;&nbsp;&nbsp;<label id="diet_bmi"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <div class="card text-center ds">
                                                    <img class="card-img-top" src="" alt="">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            @lang('app.metabolictitle')
                                                        </h5>
                                                        <p class="card-text">
                                                            @lang('app.yourmetabolicage')&nbsp;&nbsp;&nbsp;<label id="diet_metabolic_age"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card text-center ds">
                                                    <img class="card-img-top" src="" alt="">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            @lang('app.calories')
                                                        </h5>
                                                        <p class="card-text">
                                                            @lang('app.recommendedcalories')&nbsp;&nbsp;&nbsp;<label id="diet_cal"></label>@lang('app.kcal')
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row divider-25">
                                            <div class="col-lg-4">
                                                <div class="card text-center ds">
                                                    <img class="card-img-top" src="" alt="">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            @lang('app.myweight')
                                                        </h5>
                                                        <p class="card-text">
                                                            @lang('app.myweightcontent')&nbsp;&nbsp;&nbsp;<label id="diet_archieve_weight"></label> @lang('app.kilograms')
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card text-center ds">
                                                    <img class="card-img-top" src="=" alt="">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            @lang('app.achievableweight')
                                                        </h5>
                                                        <p class="card-text">
                                                            @lang('app.achievableweightcontent')&nbsp;&nbsp;&nbsp; <label id="diet_target_weight"></label> @lang('app.kilograms')
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card text-center ds">
                                                    <img class="card-img-top" src="" alt="">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            @lang('app.losebodyparts')
                                                        </h5>
                                                        <p class="card-text">
                                                            @lang('app.losebodypartstitle')<span>@lang('app.losebodypartscontent')</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row divider-25">
                                            <div class="col-lg-4">
                                                <div class="card text-center ds">
                                                    <img class="card-img-top" src="" alt="">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            @lang('app.water')
                                                        </h5>
                                                        <p class="card-title">
                                                            @lang('app.recommendedwater')&nbsp;&nbsp;&nbsp; <label id="diet_water"></label> L 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <div class="card text-center ds">
                                                    <img class="card-img-top" src="" alt="">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            @lang('app.ketogenicdiet')
                                                        </h5>
                                                        <p class="card-text">
                                                            @lang('app.ketogenicdietcontent')
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="intro_layers divider-35 flex-btn" data-animation="fadeInUp">       
                                            <input id="email_address" type="email" class="input-text" placeholder="Enter Your Email Address" autocomplete="organization" required><br />
                                            <p for="email_empty" id="email_empty" class="errorMsg">@lang('app.emailempty')</p>
                                            <p for="email_type" id="email_type_error" class="errorMsg">@lang('app.emailerror')</p>
                                        </div>
                                        
                                        <div id="go_payment" class="btn btn-light divider-50" href="#slide" role="button" data-slide="next">@lang('app.continue')</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- show Data-->

                    <div class="carousel-item diet-step-10">
                        <div class="d-inline-block">
                            <h2 class="intro_featured_word">
                                @lang('app.readydiet')
                            </h2>
                        </div>
                        <div class="intro_layer" data-animation="fadeInUp">
                            <h6 class="intro_featured_word">
                                @lang('app.getdiet')
                            </h6>
                        </div>

                        <div class="container">
                            <!-- paypal -->                        
                            <div id="paypal-button-container"></div>
                            <!-- paypal -->

                            <!-- stripe payment -->
                            <form method="post" action="{{route('stripepayment')}}" id="payment-form">
                                @csrf
                                <div class="form-row">
                                    <label for="card-element">
                                        Credit or debit card
                                    </label>
                                    <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                    </div>
                                
                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>
                                <button class="btn btn-light">Stripe Pay</button>
                            </form>
                            <!-- stripe payment -->
                            <br>
                            <!-- google payment -->
                            <div id="container"></div>
                            <!-- google payment -->
                        </div>

                        <div class="o-section-security">
                            <div class="o-section-security__top">
                                <div class="o-section-security__text">Secured payment by:</div>
                                <div class="o-section-security__items">
                                    <img src="https://assets.appsforfit.com/assets/img/keto/logos/https.png" class="o-section-security__item">
                                    <img src="https://assets.appsforfit.com/assets/img/keto/logos/ssl.png" class="o-section-security__item">
                                    <img src="https://assets.appsforfit.com/assets/img/keto/logos/mcafee.png" class="o-section-security__item">
                                    <img src="https://assets.appsforfit.com/assets/img/keto/logos/norton.png" class="o-section-security__item">
                                    <img src="https://assets.appsforfit.com/assets/img/keto/logos/paypal.png" class="o-section-security__item">
                                </div>
                            </div>
                            <div class="o-section-security__bottom">
                                <div class="o-section-security__cards">
                                    <img src="https://assets.appsforfit.com/assets/img/keto/logos/visa.svg" class="small o-section-security__card">
                                    <img src="https://assets.appsforfit.com/assets/img/keto/logos/masterCard.svg" class="o-section-security__item">
                                    <img src="https://assets.appsforfit.com/assets/img/keto/logos/maestro.svg" class="o-section-security__item">
                                    <img src="https://assets.appsforfit.com/assets/img/keto/logos/jcb.png" class="o-section-security__item">
                                    <img src="https://assets.appsforfit.com/assets/img/keto/logos/amex.png" class="o-section-security__item">
                                    <img src="https://assets.appsforfit.com/assets/img/keto/logos/discover.png" class="small o-section-security__card">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>

                <div id="footer-process" class="m-progress-bar js-progress-bar o-section-home__progress-bar m-progress-bar--without-percentage">
                    <div style="background-image: url('https://assets.appsforfit.com/assets/img/keto/svg/progress-percentage-bg.svg')" class="m-progress-bar__percentage">
                    </div>
                    <div class="m-progress-bar__content">
                        <div class="m-progress-bar__button a-button--with-icon a-button--icon-first a-button--bordered a-button">
                            <a id="btn-prev" href="#slide" role="button" data-slide="prev" class="a-button__link">
                                <div class="a-button__text">@lang('app.prev')</div>
                            </a>
                        </div>
                        <div class="m-progress-bar__indicator">
                            <div class="m-progress-bar__indicator-inner">
                                <div class="m-progress-bar__line">
                                    <div id="progress-bar" class="m-progress-bar__line-inner js-progress-line"></div>
                                </div>
                                <div class="m-progress-bar__dots js-progress-dots cursor-pointer">
                                    <div class="process-1 m-progress-bar__dot" style="white-space: nowrap;">
                                        <span>@lang('app.gender')</span>
                                    </div>
                                    <div class="process-2 m-progress-bar__dot" style="white-space: nowrap;">
                                        <span>@lang('app.physicaltitle')</span>
                                    </div>
                                    <div class="process-3 m-progress-bar__dot" style="white-space: nowrap;">
                                        <span>@lang('app.meat')</span>
                                    </div>
                                    <div class="process-4 m-progress-bar__dot" style="white-space: nowrap;">
                                        <span>@lang('app.veggies')</span>
                                    </div>
                                    <div class="process-5 m-progress-bar__dot" style="white-space: nowrap;">
                                        <span>@lang('app.products')</span>
                                    </div>
                                    <div class="process-6 m-progress-bar__dot" style="white-space: nowrap;">
                                        <span>@lang('app.bad')</span>
                                    </div>
                                    <div class="process-7 m-progress-bar__dot" style="white-space: nowrap;">
                                        <span>@lang('app.measurements')</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-progress-bar__button a-button--with-icon a-button--icon-first a-button--bordered a-button">
                            <a id="btn-next" href="#slide" role="button" data-slide="prev" class="a-button__link">
                                <div class="a-button__text">@lang('app.next')</div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="s-pt-30 s-pb-30 s-py-lg-20 cs cs2 s-parallax s-overlay discount text-center text-lg-left">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-8">
								<h3>
									Do You Want to Get a Healthy Body?
                                </h3>
								<h4 class="small-text">
									If you want to get fit, try this diet.
								</h4>
							</div>
						</div>
					</div>
				</div>
            </section>

            <section class="diet-slider2-1 ls ms s-pt-lg-100 s-pb-lg-75 c-my-0 video-part left-part-bg text-center text-md-left" id="about1">
				<div class="row align-items-center">
					
					<div class="col-12 col-lg-6 order-lg-1">
						<div class="d-none d-lg-block divider-90"></div>
						<div class="item-content">
							<div class="d-none d-lg-block divider-50"></div>
							<div class="media">
							</div>
							<div class="media">
							</div>
							<div class="media">
							</div>
						</div>
                    </div>
                    <div class="col-12 col-lg-6 order-lg-2">
						<a href="" class="photoswipe-link" data-animation="slideInLeft" data-iframe="assets/images/Vegetable_Fibre_Best_Food_Plant_Based_Diet_Diet_Photo_Keto_Interval_Diet_Organic_Food_Good_Video_High_Resolution.mp4">
							<div class="video-text">
								<h5>
                                    <img src="assets/images/ie_Diet_Button_You_Tube_Diet_Channel.svg">
                                    <br>
                                    Home cooked food is the key <br> to prolonged
                                    health and <br> human wellbeing. Learn why?
								</h5>
							</div>
						</a>
					</div>
				</div>
				<div class="d-none d-lg-block divider-50"></div>
            </section>

            <section class="diet-slider2-2 ls ms s-pt-lg-100 s-pb-lg-75 c-my-0 video-part left-part-bg text-center text-md-left hide" id="about2">
				<div class="row align-items-center">
					<div class="col-12 col-lg-6 order-lg-1">
						<div class="d-none d-lg-block divider-90"></div>
						<div class="item-content">
							<div class="d-none d-lg-block divider-50"></div>
							<div class="media">
							</div>
							<div class="media">
							</div>
							<div class="media">
							</div>
						</div>
                    </div>
                    <div class="col-12 col-lg-6 order-lg-2">
						<a href="" class="photoswipe-link" data-animation="slideInLeft" data-iframe="assets/images/Vegetable_Fibre_Best_Food_Plant_Based_Diet_Diet_Photo_Keto_Interval_Diet_Organic_Food_Good_Video_High_Resolution.mp4">
							<div class="video-text">
								<h5>
                                    <img src="assets/images/ie_Diet_Button_You_Tube_Diet_Channel.svg">
                                    <br>
                                    Why vegetable based<br> fibre is so vital for our health?<br>
                                    Learn in this 1 min. video.
								</h5>
							</div>
						</a>
					</div>
				</div>
				<div class="d-none d-lg-block divider-50"></div>
            </section>
            
            <section class="diet-slider3-1 ls">
                    <div class="vertical-item item-gallery content-absolute text-center ds">
                        <div class="item-media">
                            <img src="assets/images/Simple_Diet_Plan_Girl_Smile_Banner_High_Resolution_Diet_Plan.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="diet-slider3-2 ls hide">
                <div class="col-xl-3 col-sm-6">
                    <div class="vertical-item item-gallery content-absolute text-center ds">
                        <div class="item-media">
                            <img src="assets/images/Fruit-Team_Good_Food_Slide_Profile_1_Simple_Diet_Plan_High_Resolution_Diet_Plan_Homepage_Success_Stories.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="vertical-item item-gallery content-absolute text-center ds">
                        <div class="item-media">
                            <img src="assets/images/Fruit-Team_Good_Food_Slide_Profile_2_Simple_Diet_Plan_High_Resolution_Diet_Plan_Homepage_Success_Stories.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="vertical-item item-gallery content-absolute text-center ds">
                        <div class="item-media">
                            <img src="assets/images/Fruit-Team_Good_Food_Slide_Profile_3_Simple_Diet_Plan_High_Resolution_Diet_Plan_Homepage_Success_Stories.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="vertical-item item-gallery content-absolute text-center ds">
                        <div class="item-media">
                            <img src="assets/images/Fruit-Team_Good_Food_Slide_Profile_4_Simple_Diet_Plan_High_Resolution_Diet_Plan_Homepage_Success_Stories.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="diet-slider4 ls">

				<div class="container">
					<div class="row">
						<div class="divider-20 d-none d-xl-block"></div>

						<div class="col-md-12 col-lg-3 animate text-center text-lg-left" data-animation="fadeInUp">
							<div class="widget widget_icons_list footer-list">
								<div class="text-center">
                                    <img src="assets/images/Good_Food_Network_Green_Logo_High_Res_Footer_Simple_Diet_Plan_High_Resolution_Diet_Plan_Homepage_healthy_food_low_calories_Diet_Photo_Keto_Interval_Diet_Organic_Food_.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6 animate" data-animation="fadeInUp">
							<div class="col-6 col-md-4">
                                <img src="assets/images/Good_Food_Network_Simple_Diet_Plan_Video_Icon_Symbol_High_Resolution_Keto_Diet_Interval_Diet_Low_Carb_Low Calorie_Diet_Button_You_Tube_Diet_Channel_Best_Diet_Plan_Scientifically_Proven_Site_Icon_1.png" alt="">
                                <a href="simple-diet-plan.com">Simple-Diet-Plan.com</a>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="assets/images/Good_Food_Network_Simple_Diet_Plan_Video_Icon_Symbol_High_Resolution_Keto_Diet_Interval_Diet_Low_Carb_Low Calorie_Diet_Button_You_Tube_Diet_Channel_Best_Diet_Plan_Scientifically_Proven_Site_Icon_2.png" alt="">
                                <a href="man-with-the-pan.com">Man-with-the-Pan.com</a>
                            </div>
                            <div class="col-6 col-md-4">
                                <img src="assets/images/Good_Food_Network_Simple_Diet_Plan_Video_Icon_Symbol_High_Resolution_Keto_Diet_Interval_Diet_Low_Carb_Low Calorie_Diet_Button_You_Tube_Diet_Channel_Best_Diet_Plan_Scientifically_Proven_Site_Icon_3.png" alt="">
                                <a href="plant-based-diets.com">Plant-Based-Diets.com</a>
							</div>
						</div>

						<div class="col-md-6 col-lg-1 col-5 animate text-center text-lg-left" data-animation="fadeInUp">
                            <nav class="o-footer__nav-footer m-nav-footer">
                                <a href="/faq" class="m-nav-footer__item">Pricing</a>
                                <a href="/terms" class="m-nav-footer__item">Contact</a>
                                <a href="/contacts" class="m-nav-footer__item">FAQs</a>
                            </nav>
                        </div>
                        <div class="col-md-6 col-lg-2 col-7 animate text-center text-lg-left" data-animation="fadeInUp">
							<nav class="o-footer__nav-footer m-nav-footer">
                                <a href="/faq" class="m-nav-footer__item">Imprint</a>
                                <a href="/terms" class="m-nav-footer__item">Privacy Policy</a>
                                <a href="/contacts" class="m-nav-footer__item">Terms of Use</a>
                            </nav>
						</div>
					</div>
				</div>
            </section>
            <section class="diet-slider5 ls">
				<div class="container">
					<div class="row align-items-center">
                        <div class="divider-10 d-none d-lg-block"></div>
						<div class="col-md-12 text-center">
							<p><b>SIMPLE-DIET-PLAN.COM</b> - © COPYRIGHT 2020 - ALL RIGHTS RESERVED // GOOD FOOD NETWORK</p>
						</div>
						<div class="divider-10 d-none d-lg-block"></div>
					</div>
				</div>
			</section>
        </div>
    </div>
@endsection

@section('ExtraJavascript')
    <script src="https://www.paypal.com/sdk/js?client-id=AYp_X8CbV8ItUm5PTvYeUHBM19s5bCYrLWkzcDDZm0CN5EHI6UrRpHuFV7zqqaxqhvQAcL7dTkEVojYj&currency=USD&disable-funding=credit,card,sepa" data-sdk-integration-source="button-factory"></script>
    <script async src="https://pay.google.com/gp/p/js/pay.js" onload="onGooglePayLoaded()"></script>
   
    <script>
    // Google payment
        /**
         * Define the version of the Google Pay API referenced when creating your
         * configuration
         *
         * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#PaymentDataRequest|apiVersion in PaymentDataRequest}
         */
        const baseRequest = {
              apiVersion: 2,
              apiVersionMinor: 0
            };
        
        /**
          * Card networks supported by your site and your gateway
         *
         * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
         * @todo confirm card networks supported by your site and gateway
         */
        const allowedCardNetworks = ["AMEX", "DISCOVER", "INTERAC", "JCB", "MASTERCARD", "VISA"];
        
        /**
          * Card authentication methods supported by your site and your gateway
         *
         * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
         * @todo confirm your processor supports Android device tokens for your
         * supported card networks
         */
        const allowedCardAuthMethods = ["PAN_ONLY", "CRYPTOGRAM_3DS"];
        
        /**
          * Identify your gateway and your site's gateway merchant identifier
         *
         * The Google Pay API response will return an encrypted payment method capable
         * of being charged by a supported gateway after payer authorization
         *
         * @todo check with your gateway on the parameters to pass
         * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#gateway|PaymentMethodTokenizationSpecification}
         */
        const tokenizationSpecification = {
          type: 'PAYMENT_GATEWAY',
          parameters: {
            'gateway': 'example',
            'gatewayMerchantId': 'exampleGatewayMerchantId'
          }
        };
        
        /**
          * Describe your site's support for the CARD payment method and its required
         * fields
         *
         * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
         */
        const baseCardPaymentMethod = {
          type: 'CARD',
          parameters: {
            allowedAuthMethods: allowedCardAuthMethods,
            allowedCardNetworks: allowedCardNetworks
          }
        };
        
        /**
          * Describe your site's support for the CARD payment method including optional
         * fields
         *
         * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
         */
        const cardPaymentMethod = Object.assign(
          {},
          baseCardPaymentMethod,
          {
            tokenizationSpecification: tokenizationSpecification
          }
        );
        
        /**
          * An initialized google.payments.api.PaymentsClient object or null if not yet set
         *
         * @see {@link getGooglePaymentsClient}
         */
        let paymentsClient = null;
        
        /**
          * Configure your site's support for payment methods supported by the Google Pay
         * API.
         *
         * Each member of allowedPaymentMethods should contain only the required fields,
         * allowing reuse of this base request when determining a viewer's ability
         * to pay and later requesting a supported payment method
         *
         * @returns {object} Google Pay API version, payment methods supported by the site
         */
        function getGoogleIsReadyToPayRequest() {
          return Object.assign(
              {},
              baseRequest,
              {
                allowedPaymentMethods: [baseCardPaymentMethod]
              }
          );
        }
        
        /**
          * Configure support for the Google Pay API
         *
         * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#PaymentDataRequest|PaymentDataRequest}
         * @returns {object} PaymentDataRequest fields
         */
        function getGooglePaymentDataRequest() {
          const paymentDataRequest = Object.assign({}, baseRequest);
          paymentDataRequest.allowedPaymentMethods = [cardPaymentMethod];
          paymentDataRequest.transactionInfo = getGoogleTransactionInfo();
          paymentDataRequest.merchantInfo = {
            // @todo a merchant ID is available for a production environment after approval by Google
            // See {@link https://developers.google.com/pay/api/web/guides/test-and-deploy/integration-checklist|Integration checklist}
            // merchantId: '01234567890123456789',
            merchantName: 'Example Merchant'
          };
          return paymentDataRequest;
        }
        
        /**
          * Return an active PaymentsClient or initialize
         *
         * @see {@link https://developers.google.com/pay/api/web/reference/client#PaymentsClient|PaymentsClient constructor}
         * @returns {google.payments.api.PaymentsClient} Google Pay API client
         */
        function getGooglePaymentsClient() {
          if ( paymentsClient === null ) {
            paymentsClient = new google.payments.api.PaymentsClient({environment: 'PRODUCTION'});
          }
          return paymentsClient;
        }
        
        /**
          * Initialize Google PaymentsClient after Google-hosted JavaScript has loaded
         *
         * Display a Google Pay payment button after confirmation of the viewer's
         * ability to pay.
         */
        function onGooglePayLoaded() {
          const paymentsClient = getGooglePaymentsClient();
          paymentsClient.isReadyToPay(getGoogleIsReadyToPayRequest())
              .then(function(response) {
                if (response.result) {
                  addGooglePayButton();
                  // @todo prefetch payment data to improve performance after confirming site functionality
                  // prefetchGooglePaymentData();
                }
              })
              .catch(function(err) {
                // show error in developer console for debugging
                console.error(err);
              });
        }
        
        /**
          * Add a Google Pay purchase button alongside an existing checkout button
         *
         * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#ButtonOptions|Button options}
         * @see {@link https://developers.google.com/pay/api/web/guides/brand-guidelines|Google Pay brand guidelines}
         */
        function addGooglePayButton() {
          const paymentsClient = getGooglePaymentsClient();
          const button =
              paymentsClient.createButton({onClick: onGooglePaymentButtonClicked});
          document.getElementById('container').appendChild(button);
        }
        
        /**
          * Provide Google Pay API with a payment amount, currency, and amount status
         *
         * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#TransactionInfo|TransactionInfo}
         * @returns {object} transaction info, suitable for use as transactionInfo property of PaymentDataRequest
         */
        function getGoogleTransactionInfo() {
          return {
            countryCode: 'US',
            currencyCode: 'USD',
            totalPriceStatus: 'FINAL',
            // set to cart total
            totalPrice: '4.00'
          };
        }
        
        /**
          * Prefetch payment data to improve performance
         *
         * @see {@link https://developers.google.com/pay/api/web/reference/client#prefetchPaymentData|prefetchPaymentData()}
         */
        function prefetchGooglePaymentData() {
          const paymentDataRequest = getGooglePaymentDataRequest();
          // transactionInfo must be set but does not affect cache
          paymentDataRequest.transactionInfo = {
            totalPriceStatus: 'NOT_CURRENTLY_KNOWN',
            currencyCode: 'USD'
          };
          const paymentsClient = getGooglePaymentsClient();
          paymentsClient.prefetchPaymentData(paymentDataRequest);
        }
        
        /**
          * Show Google Pay payment sheet when Google Pay payment button is clicked
         */
        function onGooglePaymentButtonClicked() {
          const paymentDataRequest = getGooglePaymentDataRequest();
          paymentDataRequest.transactionInfo = getGoogleTransactionInfo();
        
          const paymentsClient = getGooglePaymentsClient();
          paymentsClient.loadPaymentData(paymentDataRequest)
              .then(function(paymentData) {
                // handle the response
                processPayment(paymentData);
              })
              .catch(function(err) {
                // show error in developer console for debugging
                console.error(err);
              });
        }
        
        /**
          * Process payment data returned by the Google Pay API
         *
         * @param {object} paymentData response from Google Pay API after user approves payment
         * @see {@link https://developers.google.com/pay/api/web/reference/response-objects#PaymentData|PaymentData object reference}
         */
        function processPayment(paymentData) {
          // show returned data in developer console for debugging
            console.log(paymentData);
          // @todo pass payment token to your gateway to process payment
          paymentToken = paymentData.paymentMethodData.tokenizationData.token;
        }
        // Google payment
    </script>
    <script src="{{ asset('assets/js/payment.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endsection