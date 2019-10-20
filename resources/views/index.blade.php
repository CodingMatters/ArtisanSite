@extends('layout')


@push('css')
<style>

    #homepage-image {
        padding: 50px;
        background: url("/images/homephoto.jpg");
        background-repeat: no-repeat;
        background-size: 1500px 400px;
    }

    #firstlineText {
        font-size: 45px;
        color: white;
    }

    #secondlineText {
        font-size: 22px;
        color: white;
    }

    #thirdlineText {
        color: black;
    }

    .m-tab{
        width: 33.33%;
        background-color: lightgray;
        text-align: center;
        color: black;
    }
    .m-tab:hover{
        color: white;
    }



</style>
@endpush

@section('content')


    <div style="margin-top: 0%">
        <body>

            <div id="homepage-image">
                <h1 id="firstlineText"><strong>Why CODING MATTERS?</strong></h1>
                <h2 id="secondlineText"><strong>WE JUST DON'T MAKE IT WORK, WE DO IT RIGHT</strong></h2>
                <p id="thirdlineText">Harnessing competitive advantage of your product and services in local and global scale.<br>
                    © 2018 - 2019 All rights reserved. </p>
            </div>

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active m-tab" id="nav-services-tab" data-toggle="tab" href="#nav-services" role="tab" aria-controls="nav-services" aria-selected="true"><img src="/images/services.png" style="width: 20px; height: 20px; float: center; margin-right: 5px"><strong>SERVICES</strong></a>
                    <a class="nav-item nav-link m-tab" id="nav-products-tab" data-toggle="tab" href="#nav-products" role="tab" aria-controls="nav-products" aria-selected="false"><img src="/images/products.png" style="width: 20px; height: 20px; float: center; margin-right: 5px"><strong>PRODUCTS</strong></a>
                    <a class="nav-item nav-link m-tab" id="nav-usecase-tab" data-toggle="tab" href="#nav-usecase" role="tab" aria-controls="nav-usecase" aria-selected="false"><img src="/images/use case.png" style="width: 20px; height: 20px; float: center; margin-right: 5px"><strong>USE CASE</strong></a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-services" role="tabpanel" aria-labelledby="nav-services-tab">@include('/partial/services')</div>
                <div class="tab-pane fade" id="nav-products" role="tabpanel" aria-labelledby="nav-products-tab">@include('/partial/products')</div>
                <div class="tab-pane fade" id="nav-usecase" role="tabpanel" aria-labelledby="nav-usecase-tab">@include('/partial/usecase')</div>
            </div>


       </body>
    </div>
@endsection
