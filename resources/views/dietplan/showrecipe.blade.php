@extends('masters.master')

@section('content')
<section class="ds s-pt-75 s-pb-0 s-py-lg-100 events">
    <div class="container">
        <div class="d-none d-lg-block divider-60"></div>

        <div class="row c-gutter-60">

            <main class="col-lg-7 col-xl-8 order-lg-2">
                @foreach( $diet_recipes as $diet_recipe)
                <article class="post side-item content-padding bordered">
                    <div class="row">
                        {{-- <div class="col-xl-4 col-lg-5 col-md-5">
                            <div class="item-media cover-image">
                                <img src="{{ $diet_recipe->recipe_img }}" alt="" width="300" height="300">
                            </div>
                        </div> --}}
                        <div class="col-xl-8 col-lg-7 col-md-6">
                            <div class="item-content">
                                <p>
                                    {{ $diet_recipe->recipe_description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach			
            </main>

            <aside class="col-lg-5 col-xl-4 order-lg-1">
                <div class="widget widget_archive">

                    <h3 class="widget-title">@lang('app.products')</h3>

                    <ul>
                        @foreach( $diet_ingredients as $diet_ingredient)
                        <li>
                            {{ $diet_ingredient->value}} &nbsp;&nbsp;{{$diet_ingredient->unit}} &nbsp;&nbsp;{{$diet_ingredient->ingredient_name}}
                        </li>
                        @endforeach
                    </ul>
                </div>

            </aside>

            <div class="d-none d-lg-block divider-60"></div>
        </div>
    </div>
</section>



@endsection

@section('ExtraJavascript')
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endsection