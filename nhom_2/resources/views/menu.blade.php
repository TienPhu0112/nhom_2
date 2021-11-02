@extends("layout.frontend")

@section('content')
    <!-- Main menu -->
    <section class="section-mainmenu p-t-110 p-b-70 bg1-pattern">
        <div class="container">
            <div class="row">
                @foreach($lsType as $type)
                  <div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
                    <div class="wrap-item-mainmenu p-b-22">
                        <h3 class="tit-mainmenu tit10 p-b-25">
                            {{$type->name}}
                        </h3>

                        <!-- Item mainmenu -->

                        @foreach($lsFood as $food)
                            @if( ($food->dishtype_id) == ($type->id))
                                <div class="item-mainmenu m-b-36">
                                    <div class="flex-w flex-b m-b-3">
                                        <a href="#" class="name-item-mainmenu txt21">
                                            {{$food->name}}
                                        </a>

                                        <div class="line-item-mainmenu bg3-pattern"></div>

                                        <div class="price-item-mainmenu txt22">
                                            {{$food->price}}
                                        </div>
                                    </div>

                                    <span class="info-item-mainmenu txt23">
                                        Sed fermentum eros vitae eros
                                    </span>
                                </div>
                            @endif
                        @endforeach

                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>
{{--    End Menu--}}

{{--  Detail Menu--}}
    @foreach($lsType as $type)
     <section class="section-lunch bgwhite">
        <div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
            <div class="bg1-overlay t-center p-t-170 p-b-165">
                <h2 class="tit4 t-center">
                    {{$type->name}}
                </h2>
            </div>
        </div>

        <div class="container">
            <div class="row p-t-108 p-b-70">
                @foreach($lsFood as $food)
                    @if( ($food->dishtype_id) == ($type->id))
                        <div class="col-md-8 col-lg-6 m-l-r">
                    <!-- Block3 -->
                            <div class="blo3 flex-w flex-col-l-sm m-b-30">
                                <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                                    <a href="#"><img src="{{$food->image}}" width="159.99px" height="119.99" alt="IMG-MENU"></a>
                                </div>

                                <div class="text-blo3 size21 flex-col-l-m">
                                    <a href="#" class="txt21 m-b-3">
                                        {{$food->name}}
                                    </a>

                                    <span class="txt23">
                                        Aenean pharetra tortor dui in pellentesque
                                    </span>

                                    <span class="txt22 m-t-20">
                                        ${{$food->price}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
    @endforeach
{{-- End Detail Menu   --}}
@endsection




