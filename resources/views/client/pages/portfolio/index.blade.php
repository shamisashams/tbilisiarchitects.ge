@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.portfolio_meta_title')</title>
    <meta name="description"
          content="@lang('client.portfolio_meta_description')">
@endsection

@section('wrapper')
    <section class="every_showcase production">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.Production')</div>
                <div class="title">@lang('client.Production')</div>
            </div>
        </div>
    </section>

    <section class="production_section wrapper flex">
        <div class="column left">
            <div class="all_titles">
                <div class="s">@lang('client.Production')</div>
                <div class="l">@lang('client.Company_production')</div>
            </div>
            <p class="para light">@lang("client.At_the_moment,_there_is_an_abundance_of_products_on_the_paint_and_varnish_market.Still,_there_are_not_many_materials:")</p>
            <p class="para">• @lang('client.production_of_paint_and_varnish_materials_for_a_wide_range_of_applications')</p>
            <p class="para">• @lang("client.production_of_products_for_the_construction_industry")</p>
            <p class="para">• @lang('client.creation_of_decorative_wall_coverings_and_development_of_application')</p>
            <p class="para">• @lang('client.production_of_paint_for_subsequent_tinting_in_any_color;')</p>
            <p class="para">• @lang("client.development_and_improvement")</p>
            <div class="para light">@lang("client.Thanks_to_the_improvement_of_technologies")</div>
        </div>
        <div class="column">
            <img src="/client/img/other/1.png" alt="">
            <div class="all_titles">
                <div class="s">@lang('client.Production')</div>
                <div class="l">@lang('client.Company parameters')</div>
            </div>
            <div class="para">• @lang('client.High_Consumer_Properties_Of_The_Product')</div>
            <div class="para">• @lang('client.Durability_And_Resistance_Of_Materials_To_External_Influences')</div>
            <div class="para">• @lang('client.Optimal_Material_Consumption_Per_Sq._M')</div>
            <div class="para">• @lang('client.Price-Quality_Ratio')</div>
            <div class="para">• @lang('client.Own_Tinting_System')</div>
            <div class="para">• @lang('client.The_Assortment_Line_Is_Annually_Expanding_By_8-10_Positions')</div>
            <div class="para">• @lang('client.The_Assortment_Line_Is_Annually_Expanding_By_8-10_Positions')</div>
            <div class="para">• @lang('client.Some_Of_The_Products_Have_No_Analogues_In_The_World')</div>
            <div class="para light">@lang("client.We_embody_the_most_advanced_technological_and_design_solutions_in_our_products")</div>
        </div>
    </section>

    <img src="/client/img/about/p1.png" alt="" class="pattern_production">
    <img src="/client/img/about/p2.png" alt="" class="pattern_production2">
@endsection