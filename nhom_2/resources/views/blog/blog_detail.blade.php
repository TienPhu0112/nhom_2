@extends('blog.main')

@section('bread-crumb')
    <div class="bread-crumb bo5-b p-t-17 p-b-17">
        <div class="container">
            <a href="{{ route('home') }}" class="txt27">
                Home
            </a>

            <span class="txt29 m-l-10 m-r-10">/</span>

            <a href="{{ asset('/blog') }}" class="txt27">
                Blog
            </a>

            <span class="txt29 m-l-10 m-r-10">/</span>

            <span class="txt29">
					{{ $news->title }}
            </span>
        </div>
    </div>
@endsection

@section('content1')
    <div class="col-md-8 col-lg-9">
        <div class="p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
            <!-- Block4 -->
            <div class="blo4 p-b-63">
                <!-- - -->
                <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
                    <a href="{{ route('detail', $news->id) }}">
                        <img src="{{ asset($news->image) }}" alt="IMG-BLOG">
                    </a>

                    <div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
										{{ date('d', strtotime($news->created_at)) }}
									</span>

                        <span class="txt31">
										{{ date('M, Y', strtotime($news->created_at)) }}
									</span>
                    </div>
                </div>

                <!-- - -->
                <div class="text-blo4 p-t-33">
                    <h4 class="p-b-16">
                        <a href="{{ route('detail', $news->id) }}" class="tit9">{{ $news->title }}</a>
                    </h4>

                    <div class="txt32 flex-w p-b-24">
									<span>
										by {{$news->users->name}}
										<span class="m-r-6 m-l-4">|</span>
									</span>

                        <span>
										{{ date('d F, Y', strtotime($news->created_at)) }}
										<span class="m-r-6 m-l-4">|</span>
									</span>

                        <span>
                            {{ $news->topic == 1 ? "Cooking Recipe" : "" }}
                            {{ $news->topic == 2 ? "Delicious Foods" : "" }}
                            {{ $news->topic == 3 ? "Event Design" : "" }}
                            {{ $news->topic == 4 ? "Restaurant Place" : "" }}
                        </span>

                    </div>

                    <p>
                        {!! $news->content !!}
                    </p>
                </div>
            </div>


        </div>
    </div>
@endsection
