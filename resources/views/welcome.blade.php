@extends('template')

@section('header')
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>不知道今天要吃什麼嗎？</h1>
                <hr>
                <p>為了解決這個世界難題，資料科學家們決定挺身而出，藉助科學的力量，幫助你決定今天要吃什麼！</p>
                <hr>
                <h2>推薦一下吧</h2>
                <a href="/random_result" class="btn btn-default btn-xl page-scroll">隨便吃</a>
                <a href="/coming" class="btn btn-primary btn-xl page-scroll">我很挑</a>
            </div>
        </div>
    </header>
@stop

@section('content')
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">告訴我您身邊有什麼好吃的</h2>
                    <hr class="light">
                    <p class="text-faded">我們還不了解您附近有什麼樣的餐廳，請您經常更新您附近的餐廳列表。</p>
                    <a href="restaurants" class="btn btn-default btn-xl">編輯餐廳</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">餐廳如何篩選？</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-money wow bounceIn text-primary"></i>
                        <h3>根據今晚的經濟狀況</h3>
                        <p class="text-muted">我們可以依照您想花費的預算，篩選出適合您的餐廳。</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-hourglass-half wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>根據擁有的吃飯時間</h3>
                        <p class="text-muted">我們能依照餐廳的距離，找出能符合您用餐時間的餐廳。</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-clock-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>根據吃飯的時間點</h3>
                        <p class="text-muted">我們能依照您目前吃飯的時間點，篩選出有能力提供餐點的餐廳。</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>根據您所愛</h3>
                        <p class="text-muted">我們能依照您想吃的食物類型，找出符合您目前口味的餐廳。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>注意</h2>
                <p>本專案為Laravel練習用專案，目前尚處實驗階段，餐廳以實踐大學台北校區周邊店家為主。</p>   
            </div>
        </div>
    </aside>

    <!-- <section class="no-padding" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">隨選推薦</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="/coming" class="portfolio-box">
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    一風味
                                </div>
                                <div class="project-name">
                                    便當、日式料理
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="/coming" class="portfolio-box">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    朝日漢堡
                                </div>
                                <div class="project-name">
                                    中式、西式、早餐
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="/coming" class="portfolio-box">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    勝拉麵
                                </div>
                                <div class="project-name">
                                    拉麵、日式料理
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="/coming" class="portfolio-box">
                        <img src="img/portfolio/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    賢記
                                </div>
                                <div class="project-name">
                                    熱炒、便當、台式料理
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="/coming" class="portfolio-box">
                        <img src="img/portfolio/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="/coming" class="portfolio-box">
                        <img src="img/portfolio/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> -->


    
@stop