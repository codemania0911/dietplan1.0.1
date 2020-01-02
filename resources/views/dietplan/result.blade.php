@extends('masters.master')

@section('content')

<section class="s-pt-40 s-pb-30 s-py-lg-130 timetable ds text-center text-md-left" id="timetables">
    <div class="container">
        <div class="row">
            <div class="container mt-5 mb-5" id="diet-logo">
                <img  src="../../../../assets/s-logo.png">
            </div>
            <form class="woocommerce-ordering">
                <select id="select_week" name="orderby" class="orderby">
                    @for ($i=0; $i<6; $i++)
                        <option value="{{$i+1}}">@lang('app.week') {{$i+1}}</option>
                    @endfor
                </select>
            </form>

            <input type="hidden" id="user_key" value="{{ $key }}">
            <div class="col-12 text-center">
                <div class="section-heading">
                    <h3>@lang('app.personalmealplan')</h3>
                </div>
                <div class="d-none d-lg-block divider-60"></div>
            </div>

            <div class="col-12">
                <ul class="nav nav-tabs form-tabs visible-md" id="date_num">
                    @for ($i=0; $i<7; $i++)
                        <li class="tab-selector nav-item {{$i==0?'active':''}}">
                            <a class="nav-link first" href="#tab{{$i+1}}" data-toggle="tab">@lang('app.day') {{$diet_plan['startDate'] + $i}}</a>
                        </li>
                    @endfor
                </ul>
                <select class="form-control hidden-md hidden-lg hidden-xl" id="tab_selector">

                    @for ($i=0; $i<7; $i++)
                        <option value="{{$i}}"> @lang('app.day'){{$diet_plan['startDate'] + $i}} <p class="day_num"></p></option>
                    @endfor

                </select>
                
                <div class="tab-content">

                    @for ($i=0; $i<7; $i++)
                    <div class="tab-pane {{ $i == 0 ? 'active':''}}" id="tab{{$i+1}}">

                        {{-- Add breakfast, brunch, lunch, dinner --}}
                        @foreach($diet_plan['recipe'] as $plan)
                        <div class="media bordered diet_detail" data-recipe-id="{{$plan[$i]->id}}">
                            <img src="{{$plan[$i]->image_url}}">
                            <div class="media-body">
                                <h5>                                    
                                    {{$plan[$i]->name}}
                                </h5>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    @endfor

                </div>

                <!-- input email-->
                {{-- @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <form action="{{url('/sendemail')}}" method="POST">
                    @csrf
                    <div class="intro_layers divider-35 flex-btn" data-animation="fadeInUp">       
                        <p class="form-row form-row-wide">
                            <input id="email" name="email" type="email" class="text" placeholder="Enter your email address" value="" required>
                        </p>
                    </div>
                    <br>
                    <input class="btn btn-light" type="submit" name="send" value="@lang('app.send')" />
                </form>  --}}
                <!-- input email-->
                <br>
                {{-- <a href="/{lang}/pdfdownload"><div class="btn btn-light" id="download_pdf">@lang('app.downloadpdf')</div></a> --}}
            </div>
        </div>
    </div>
</section>



@endsection

@section('ExtraJavascript')
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endsection