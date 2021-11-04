@extends('layout.frontend')

@section('content')
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(/images/bg-title-page-03.jpg);">
        <h2 class="tit6 t-center">
            Blog
        </h2>
    </section>


    <!-- Content page -->
    <section>
        @yield('bread-crumb')

        <div class="container">
            <div class="row">
                @yield('content1')
                <div class="col-md-4 col-lg-3">
                    <div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
                        <!-- Search -->
                        <div class="search-sidebar2 size12 bo2 pos-relative">
                            <form method="GET" style="width: 100%; height: 100%" action="{{ route('search') }}">
                                @csrf
                                <input class="input-search-sidebar2 txt10 p-l-20 p-r-55" type="text" name="search_title" placeholder="Search">
                                <button class="btn-search-sidebar2 flex-c-m ti-search trans-0-4" type="submit"></button>
                            </form>
                        </div>

                        <!-- Categories -->
                        <div class="categories">
                            <h4 class="txt33 bo5-b p-b-35 p-t-58">
                                Categories
                            </h4>

                            <ul>
                                <li class="bo5-b p-t-8 p-b-8">
                                    <a href="{{ route('cate',1) }}" class="txt27">
                                        Cooking recipe
                                    </a>
                                </li>

                                <li class="bo5-b p-t-8 p-b-8">
                                    <a href="{{ route('cate',2) }}" class="txt27">
                                        Delicious foods
                                    </a>
                                </li>

                                <li class="bo5-b p-t-8 p-b-8">
                                    <a href="{{ route('cate',3) }}" class="txt27">
                                        Events Design
                                    </a>
                                </li>

                                <li class="bo5-b p-t-8 p-b-8">
                                    <a href="{{ route('cate',4) }}" class="txt27">
                                        Restaurant Place
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <!-- Most Popular -->
                        <div class="popular">
                            <h4 class="txt33 p-b-35 p-t-58">
                                Most popular
                            </h4>

                            <ul>
                                @foreach($popular_news as $news1)
                                    <li class="flex-w m-b-25">
                                        <div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
                                            <a href="{{ route('detail',$news1->id) }}">
                                                <img src="{{ asset($news1->image) }}" alt="IMG-BLOG">
                                            </a>
                                        </div>

                                        <div class="size28">
                                            <a href="{{ route('detail',$news1->id) }}" class="dis-block txt28 m-b-8">
                                                {{ $news1->title }}
                                            </a>

                                            <span class="txt14">
											{{ $news1->created_at->diffForHumans() }}
										</span>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection











