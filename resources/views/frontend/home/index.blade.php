@extends('frontend.layouts.app')

@section('contents')
<!--Start hero slider-->
  @include('frontend.home.sections.hero-section')
    <!--End hero slider-->


    <!--Start category slider-->
    @include('frontend.home.sections.category-section')

    <!--End category slider-->

    <!--Start banners-->
    @include('frontend.home.sections.banner-section')
    <!--End banners-->


    <!--Start Products Tabs-->
    @include('frontend.home.sections.products-tab-section')
    <!--End Products Tabs-->


    <!--Start  banners Two -->
    @include('frontend.home.sections.banner-section-two')
    <!--End   banners Two -->

    <!--Start Flash  Sales-->
    @include('frontend.home.sections.flash-sales-section')
    <!--End Flash  Sales-->

    <!--Start new arrival end -->
    @include('frontend.home.sections.new-arrival-section')
    <!--End  new arrival end -->
    <section class="wsus__ctg mt-40">
        <div class="container">
            <a href="#" class="wsus__ctg_area">
                <img src="{{asset('assets/frontend/assets/imgs/cta_bg.png')}}" alt="cta" class="img-fluid w-100" />
            </a>
        </div>
    </section>
    <!--CTA section end-->

    <!-- Start special products end -->
    @include('frontend.home.sections.special-products-section')
    <!-- End special products end -->


    <!--Start 4 columns-->

    @include('frontend.home.sections.four-col-products-section')
    <!--End 4 columns-->

@endsection
