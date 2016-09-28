@extends('layouts.app')
@section('title') Главная страница @stop
@section('content')
    <!-- Slider start -->
    <section id="slider_part">
         <div class="carousel slide" id="carousel-example-generic" data-ride="carousel">
            <!-- Indicators -->
         	 <ol class="carousel-indicators text-center">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
             </ol>

           	<div class="carousel-inner">
           	 	<div class="item active">
           	 		<div class="overlay-slide">
           	 			<img src="img/banner/p5.jpg" alt="" class="img-responsive">
           	 		</div>
           	 		<div class="carousel-caption">
               	 		<div class="col-md-12 col-xs-12 text-center">
                      <h2>Create Sites</h2>
               	 			<h3 class="animated2"> <b>Creative</b> Modern and clean </h3>
               	 			<div class="line"></div>
               	 			<p class="animated3">Unique clean design</p>
               	 		</div>
           	 		</div>
           	 	</div>
                <div class="item">
                    <div class="overlay-slide">
                        <img src="img/banner/p3.jpg" alt="" class="img-responsive">
           	 		</div>
           	 		<div class="carousel-caption">
               	 		<div class="col-md-12 col-xs-12 text-center">
                    <h2>Create Sites</h2>
               	 			<h3 class="animated3"> responsive <b>Flat </b>design</h3>
               	 			<div class="line"></div>
               	 			<p class="animated2">best choice for you</p>
               	 		</div>
           	 		</div>
           	 	</div>
           	 	<div class="item">
                    <div class="overlay-slide">
                        <img src="img/banner/p10.jpg" alt="" class="img-responsive">
           	 		</div>
           	 		<div class="carousel-caption">
               	 		<div class="col-md-12 col-xs-12 text-center">
                    <h2>Create Sites</h2>
               	 			<h3 class="animated3"> We're crazy <b>coders</b></h3>
               	 			<div class="line"></div>
               	 			<p class="animated2"> way to success</p>
               	 		</div>
           	 		</div>
           	 	</div>

           	 </div> 	 <!-- End Carousel Inner -->

            <!-- Controls -->
            <div class="slides-control ">
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                	<span><i class="fa fa-angle-left"></i></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                	<span><i class="fa fa-angle-right"></i></span>
                </a>
            </div>
        </div>
  	</section>
    <!--/ Slider end -->

<!-- Service Area start -->

    <section id="service">
        <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="feature_header text-center">
                            <h3 class="feature_title">Наши <b>услуги</b></h3>
                            {{-- <h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Iusto provident non voluptatibus animi quidem incidunt eum, eligendi doloribus dicta.</h4> --}}
                            <div class="divider"></div>
                        </div>
                    </div>  <!-- Col-md-12 End -->
                </div>
                <div class="row">
                    <div class="main_feature text-center">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                                <div class="feature_content">
                                    <i class="fa fa-lightbulb-o"></i>
                                    <h5>Легкий</h5>
                                    <p>Вы не можете больше игнорировать мобильные устройства, и с Нами все Ваши посетители будут очень довольны.</p>
                                </div>
                            </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                                <div class="feature_content">
                                    <i class="fa fa-sliders"></i>
                                    <h5>Варианты</h5>
                                    <p>Мы включаем чрезвычайно передовые админ-панели, позволяя пользователям быстро и легко настроить целостные материалы. </p>
                                </div>
                        </div> <!-- Col-md-4 Single_feature End -->
                        <div class="col-md-3 col-xs-12 col-sm-6">
                                <div class="feature_content">
                                    <i class="fa fa-clock-o"></i>
                                    <h5>Демо-данные</h5>
                                    <p>Мы создаем сайты и наполняем их тестовыми данными. </p>
                                </div>
                        </div> <!-- Col-md-4 Single_feature End -->
                        <div class="col-md-3 col-xs-12 col-sm-6">
                                <div class="feature_content">
                                    <i class="fa fa-desktop"></i>
                                    <h5>Адаптивный</h5>
                                    <p>CreateSites — это самый простой способ создания веб-сайта с его 100%, реагирующих и сетчатких макетов. </p>
                                </div>
                        </div> <!-- Col-md-4 Single_feature End -->
                        <!-- <button class="btn btn-main"> Read More</button> -->
                    </div>
            </div>  <!-- Row End -->
        </div>  <!-- Container End -->
    </section>
<!-- Service Area End -->
<!-- About details start -->
<section id="about-details">
    <div class="container">
            <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="feature_header text-center">
                            <h3 class="feature_title">Наши <b>Навыки</b></h3>
                            {{-- <h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Iusto provident non voluptatibus animi quidem incidunt eum, eligendi doloribus dicta.</h4> --}}
                            <div class="divider"></div>
                        </div>
                    </div>  <!-- Col-md-12 End -->
                </div>
            <div class="about-desc">
                <div class="row">
                <!-- Left about end -->
                    <div class="col-md-6">
                        <div class="single-progress">
                            <label > WordPress <span>95%</span></label>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%; background-color: rgb(140, 209, 4);">
                                <span class="sr-only">95% Complete (success)</span>
                              </div>
                             </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="single-progress">
                            <label > PHP <span>70%</span></label>
                            <div class="progress">
                              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%; background-color: rgb(4, 157, 255);">
                                <span class="sr-only">70% Complete (primary)</span>
                              </div>
                            </div>
                        </div>
                    </div>
                </div> <!--row end -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="single-progress">
                            <label > JS <span>70%</span></label>
                            <div class="progress">
                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%; background-color: rgb(33, 255, 101);">
                                <span class="sr-only">70% Complete (danger)</span>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-progress">
                            <label > jQuery <span>75%</span></label>
                            <div class="progress">
                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: rgb(255, 74, 75);">
                                <span class="sr-only">75% Complete</span>
                              </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- 2nd row end -->
                <div class="row">
                    <div class="col-md-6">
                         <div class="single-progress">
                            <label > HTML5 <span>96%</span></label>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100" style="width: 96%; background-color: rgb(253, 186, 4);">
                                <span class="sr-only">96% Complete (warning)</span>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-progress">
                            <label > CSS3 <span>97%</span></label>
                            <div class="progress">
                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%; background-color: rgb(30, 115, 190);">
                                <span class="sr-only">97% Complete (danger)</span>
                              </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- 3nd row end -->
            </div> <!-- about desc end -->
        </div>
</section>
<!-- About details end -->

<!-- Portfolio works Start -->

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="feature_header text-center">
                        <h3 class="feature_title">Наши <b>Работы</b></h3>
                        {{-- <h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4> --}}
                        <div class="divider"></div>
                    </div>
                </div>  <!-- Col-md-12 End -->
            </div>
        </div>


    <div id="isotope-filter" class="skew3 text-center">
        <a data-filter="*"  href="#" class="">Все</a>
        @foreach ($project_cat as $item)
            <a data-filter=".{{ $item->slug }}"  href="#" class="">{{ $item->title }}</a>
        @endforeach
    </div>
    <div class="clearfix"></div>
   			<div class="text-center ">
              <ul class="portfolio-wrap" id="portfolio_items">
                @foreach ($projects as $project)
                    <li class="col-xs-12 col-sm-6 col-md-4 single-portfolio @foreach ($project->categories as $element) {{ $element->slug }} @endforeach">
                        <figure>
                            <img src="/img/projects/medium/{{ $project->image }}" alt="" />
                            <figcaption>
                                <h5>{{ $project->name }}</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="/img/projects/originals/{{ $project->image }}" data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    {!! $project->description !!}
                                </p>
                            </figcaption>
                        </figure>
                    </li>
                @endforeach

                    {{-- <li class="col-xs-12 col-sm-6 col-md-4 single-portfolio logo graphic">
                        <figure>
                        <img src="img/portfolio/p2.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="img/portfolio/p2.jpg"  data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                                </figcaption>
                        </figure>
                    </li>

                    <li class="col-xs-12 col-sm-6 col-md-4 single-portfolio graphic logo">
                        <figure>
                            <img src="img/portfolio/p3.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="img/portfolio/p3.jpg" data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-xs-12 col-sm-6 col-md-4 single-portfolio web-design identity">
                        <figure>
                            <img src="img/portfolio/p7.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="img/portfolio/p7.jpg" data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-xs-12 col-sm-6 col-md-4 single-portfolio logo web-design">
                        <figure>
                            <img src="img/portfolio/p5.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="img/portfolio/p5.jpg" data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-xs-12 col-sm-6 col-md-4 single-portfolio logo graphic">
                        <figure>
                            <img src="img/portfolio/p6.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="img/portfolio/p6.jpg" data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-xs-12 col-sm-6 col-md-4 single-portfolio graphic identity">
                        <figure>
                            <img src="img/portfolio/p3.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="img/portfolio/p3.jpg" data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-xs-12 col-sm-6 col-md-4 single-portfolio web-design graphic">
                        <figure>
                            <img src="img/portfolio/p7.jpg" alt="" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="img/portfolio/p7.jpg" data-rel="prettyPhoto" class="img-responsive">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li> --}}

                </ul>
        </div> <!-- Container Full End -->
</section>  <!-- Portfolio Section End -->

<div class="clearfix"></div>

<!-- About us start -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title">Кто <b>Мы</b></h3>
                    {{-- <h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4> --}}
                    <div class="divider"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                {{-- <h4>Кто мы</h4> --}}
                <p style="font-size: 19px; line-height: 1.62;"><strong>CreateSites</strong>&nbsp;— Разработка сайтов для бизнеса, реализация каталогов и интернет магазинов — качественно, красиво, удобно для пользователей. От вас нам понадобятся только фото-видео-материалы и тексты страниц.<br> Детали и «начинки» сайта обсуждаются с каждым клиентом индивидуально.</p>
                <p style="font-size: 19px; line-height: 1.62;">Если за созданием сайта Вы обращаетесь к нам, то не будет каких-либо скрытых платежей, непрозрачных схем расчета и других подводных камней. Мы заключаем договор на разработку сайта, в котором учитываются все Ваши пожелания. Стандартная схема изготовления сайта включает индивидуальный дизайн сайта, панель управления сайтом CMS (WordPress, Joomla на ваш выбор) — нашу эксклюзивную разработку, которая настраивается под конкретные нужды каждого клиента, плюс набор функциональных блоков (новости, статьи, фотогалерея и т.д.). Как показывает практика, в большинстве случаев этого вполне достаточно. Если Вам нужно что-то особенное, что требует более сложной разработки, следует связаться с нашим менеджером, описать задачи, и после разговора вы получите точный расчет стоимости создания Вашего ресурса. В любом случае конфигурация сайта будет выполнена под Ваши индивидуальные потребности.</p>
            </div>
        </div>
    </div>
</section>
<!-- About us End -->


<!-- Counter Strat -->

<section id="counter_area">
        <div class="facts">
            <div class="container">
                <div class="col-md-3 col-xs-12 col-sm-6 columns">
                    <div class="facts-wrap">
                     <div class="graph">
                        <div class="graph-left-side">
                        	<div class="graph-left-container">
                        		<div class="graph-left-half"> </div>
                        	</div>
                        </div>
                        <div class="graph-right-side">
                        	<div class="graph-right-container">
                        		<div class="graph-right-half"></div>
                        	</div>
                        </div>
                        <i class="fa fa-thumbs-o-up fa-3x fw"></i>
                        <div class="facts-wrap-num">
                            <span class="counter">67</span>
                        </div>
                    </div>
                        <h6>Клиентов</h6>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6 columns">
                    <div class="facts-wrap">
                     <div class="graph">
                        <div class="graph-left-side">
                        	<div class="graph-left-container">
                        		<div class="graph-left-half"> </div>
                        	</div>
                        </div>
                        <div class="graph-right-side">
                        	<div class="graph-right-container">
                        		<div class="graph-right-half"></div>
                        	</div>
                        </div>
                        <i class="fa fa-gift fa-3x fw"></i>
                        <div class="facts-wrap-num"><span class="counter">25</span></div>
                     </div>
                        <h6>Подарков</h6>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6 columns">
                    <div class="facts-wrap">
                     <div class="graph">
                        <div class="graph-left-side">
                        	<div class="graph-left-container">
                        		<div class="graph-left-half"> </div>
                        	</div>
                        </div>
                        <div class="graph-right-side">
                        	<div class="graph-right-container">
                        		<div class="graph-right-half"></div>
                        	</div>
                        </div>
                        <i class="fa fa-check-square-o fa-3x fw"></i>
                        <div class="facts-wrap-num"><span class="counter">76</span></div>
                        </div>
                        <h6>Проэктов</h6>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6 columns">
                    <div class="facts-wrap">
                     <div class="graph">
                        <div class="graph-left-side">
                        	<div class="graph-left-container">
                        		<div class="graph-left-half"> </div>
                        	</div>
                        </div>
                        <div class="graph-right-side">
                        	<div class="graph-right-container">
                        		<div class="graph-right-half"></div>
                        	</div>
                        </div>
                        <i class="fa fa-envelope-o fa-3x fw"></i>
                        <div class="facts-wrap-num"><span class="counter">46</span></div>
                        </div>
                        <h6>Листов</h6>
                    </div>
                </div>
            </div> <!-- Conatainer End -->
        </div>	<!-- Fact div ENd -->
</section>
<!-- Counter End -->

<div class="clearfix"></div>

<!-- Pricing Table Start -->
<section id="pricing_table" class="pricing_overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title">Нашы <b>Цены</b></h3>
                    {{-- <h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4> --}}
                    <div class="divider"></div>
                </div>
            </div>  <!-- Col-md-12 End -->

            <div class="text-center pricing">
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <div class="single_table">
                    <div class="plan_wraper"></div>
                        <ul>
                            <li class="plan">Сайт Визитка <br><span>&nbsp;</span></li>
                            <li class="price"> 150 <span>$</span></li>
                            <li>Дизайн сайта: индивидуальный</li>
                            <li>Объем сайта: до 10 стр.</li>
                            <li>Срок выполнения: до 1 недели</li>
                            <li>Интернет поддержка</li>
                            <li class="price_button"> <a href="#contact" class="btn btn-main">Заказать сейчас!</a></li>
                        </ul>
                    </div>
                </div> <!-- Single col-md-4 End -->
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <div class="single_table  ">
                        <div class="plan_wraper"></div>
                        <ul>
                            <li class="plan">Сайт Базовый  <br><span>&nbsp;</span></li>
                            <li class="price"> 200 <span>$</span></li>
                            <li>Дизайн сайта: индивидуальный</li>
                            <li>Объем сайта: до 20 стр.</li>
                            <li>Срок выполнения: от 1 до 2 недель</li>
                            <li>Интернет поддержка</li>
                            <li class="price_button"> <a href="#contact" class="btn btn-main">Заказать сейчас!</a></li>
                        </ul>
                    </div>
                </div> <!-- Single col-md-4 End -->
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <div class="single_table dark_bg">
                        <div class="plan_wraper"></div>
                        <ul>
                            <li class="plan">Сайт Магазин  <br><span>&nbsp;</span></li>
                            <li class="price"> 300 <span>$</span></li>
                            <li>Дизайн сайта: индивидуальный</li>
                            <li>Объем сайта: до 10 разд.</li>
                            <li>Резервное копирование даних</li>
                            <li>Срок выполнения: от 2 недель</li>
                            <li>Интернет поддержка</li>
                            <li class="price_button"> <a href="#contact" class="btn btn-main">Заказать сейчас!</a></li>
                        </ul>
                    </div>
                </div> <!-- Single col-md-4 End -->
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <div class="single_table dark_bg">
                        <div class="plan_wraper"></div>
                        <ul>
                            <li class="plan">Корпоративный <br><span>&nbsp;</span></li>
                            <li class="price"> 750 <span>$</span></li>
                            <li>Дизайн сайта: индивидуальный</li>
                            <li>Объем сайта: до 30 стр.</li>
                            <li>Резервное копирование даних</li>
                            <li>Срок выполнения: от 3 недель</li>
                            <li>Интернет поддержка</li>
                            <li class="price_button"> <a href="#contact" class="btn btn-main">Заказать сейчас!</a></li>
                        </ul>
                    </div>
                </div> <!-- Single col-md-4 End -->
            </div>
        </div>
    </div>
</section>  <!-- Pricing Section End -->
<!-- Pricing Table End -->

<!-- Testimonial Start -->

<section id="testimonial" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title"><b>Отзывы <b>клиентов</h3>
                    <h4 class="feature_sub">Что говорят наши клиенты. </h4>
                    <div class="divider"></div>
                </div>
            </div>  <!-- Col-md-12 End -->
        </div>
                <div class="row">
                    <div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
                        <div class="item">
                          <div class="testimonial-thumb">
                            {{-- <img class="img-circle" src="images/team/pic1.jpg" alt="testimonial" > --}}
                          </div>
                          <div class="testimonial-content">
                            <h3 class="name">Katee Nureen <span>Exectuive Director</span></h3>
                            <p class="testimonial-text">
                              iLorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
                            </p>
                          </div>
                        </div>
                        <div class="item">
                          <div class="testimonial-thumb">
                            {{-- <img class="img-circle" src="images/testimonial2.png" alt="testimonial" >  --}}
                          </div>
                          <div class="testimonial-content">
                          	<h3 class="name">Angry Figer <span>Frozen Director</span></h3>
                            <p class="testimonial-text">
                              Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
                            </p>
                          </div>
                        </div>
                        <div class="item">
                          <div class="testimonial-thumb">
                            {{-- <img class="img-circle" src="images/team/pic6.jpg" alt="testimonial" > --}}
                          </div>
                          <div class="testimonial-content">
                          	<h3 class="name wow bounceInLeft">Monica Lunaxy<span>Sales Manager</span></h3>
                            <p class="testimonial-text">
                              Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
                            </p>
                          </div>
                        </div>
                    </div>
                  	<!-- Navigation start -->
                  	<div class="customNavigation cyprass-carousel-controller">
                        <a class="prev left">
                        	<i class="fa fa-chevron-left"></i>
                       	</a>
                        <a class="next right">
                          <i class="fa fa-chevron-right"></i>
                        </a>
                	</div>
                	<!-- Navigation ENd -->
                </div>
            </div> <!-- Row End -->
</section> <!-- Section Testimonial End -->

<!-- Testimonial Area End -->

<!-- Conatct Area Start-->

<section id="contact">
    <div class="container">
        <div class="row">
  			<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title">Оставайся <b>на связи</b></h3>
                    <h4 class="feature_sub">Если у вас есть какие-либо вопросы, пожалуйста, не стесняйтесь чтобы отправить нам сообщение.<br />Если вы заказываете сайт, пожалуйста, укажите в сообщении <a href="#pricing_table">тариф</a> который вы выбрали. </h4>
                    <div class="divider"></div>
                </div>
  			</div>
        </div>
        <div class="row">
             <div class="contact_full">
                <div class="col-md-6 left">
                    <div class="left_contact">
                        <form action="role">
                            <div class="form-level">
                                <input name="name" placeholder="Name" id="name"  value="" type="text" class="input-block">
                                <span class="form-icon fa fa-user"></span>
                            </div>
                            <div class="form-level">
                                <input name="email" placeholder="Email" id="mail" class="input-block" value="" type="email">
                                <span class="form-icon fa fa-envelope-o"></span>
                            </div>
                            <div class="form-level">
                                <input name="name" placeholder="Phone" id="phone" class="input-block" value="" type="text">
                                <span class="form-icon fa fa-phone"></span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 right">
                    <div class="form-level">
                        <textarea name="" id="messege"  rows="5" class="textarea-block" placeholder="message"></textarea>
                        <span class="form-icon fa fa-pencil"></span>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn btn-main featured">Отправить сейчас</button>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="g-map" class="no-padding">
	<div class="container-fluid">
		<div class="row">
			<div class="map" id="map"></div>
		</div>
	</div>
</div>
@stop