@extends('layouts.app')

@section('keywords'){{ $project->meta_k }} @stop
@section('description'){{ $project->meta_d }} @stop
@section('title'){{ $project->name }} - CreateSites @stop

@section('content')
	 <section id="portfolio_single">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-header text-center">
                        <h2>{{ $project->name }}</h2>
                        <ul class="breadcrumb">
                            <li><a href="{{ route('main') }}">Главная</a></li>
                            <li>{{ $project->name }}</li>
                        </ul>
                    </div>
                </div>  <!-- Col-md-12 End -->
            </div>
        </div>
    </section>
    <section id="portfolio-single">
        <div class="container">
            <!-- Portfolio item row start -->
            <div class="row">
                <!-- Portfolio item slider start -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="portfolio-slider-wrapper">
                        <ul id="portfolio-slider">
                            <li><img src="/img/projects/full/{{ $project->image }}" alt="{{ $project->name }}" class="img-responsive"/></li>
                        </ul>
                    </div>
                </div>
                <!-- Portfolio item slider end -->
            </div><!-- Portfolio item row end -->

        </div><!-- Portfolio item container end -->
	</section>  <!-- Portfolio Section End -->

	<section id="port-content">
	    <div class="container">
	        <div class="row">
	            {{-- sidebar start --}}
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="portfolio-desc">
                            <h4>Описание</h4>
                            {!! $project->description !!}
                            @if ($project->link != '')
                            	<p><a href="{{ $project->link }}" target="_blank" class="btn btn-main featured">Ссылка на проэкт</a></p>
                            @endif
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	                <div class="right-sidebar">
	                    <h4>Детальная информация</h4>
	                    <ul class="circle">
	                        <li><span>Дата сдачи : </span> {{ $project->finished_at }} </li>
	                        <li><span>Категории :</span> @foreach ($project->categories as $item)
	                        	{{ $item->title }}
	                        @endforeach </li>
	                    </ul>
	                </div>
	                <div class="share">
	                    {{-- <h4>Share this :</h4> --}}
	                    <ul class="social-contact list-inline text-left">
	                        <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
	                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
	                        <li> <a href="#"><i class="fa fa-rss"></i></a></li>
	                        <li> <a href="#"><i class="fa fa-google-plus"></i> </a></li>
	                        <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
	                        <li><a href="#"> <i class="fa fa-pinterest"></i></a></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
@stop