
@foreach( $diet_recipes as $diet_recipe)
<article class="post side-item content-padding bordered">
    <div class="row">
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
