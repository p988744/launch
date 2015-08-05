@extends('template')

@section('header')
    <header class="small-page-header">
        <div class="header-content">
            <div class="header-content-inner">
                <h1>隨便吃</h1>
                <hr>
                <p>經過精密的運算，為您誠摯推薦：</p>
            </div>
        </div>
    </header>
@stop

@section('content')
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">
                    	{{ $result_query -> name }}
                    </h2>
                    <hr>	
                    <p>在這家您可以吃到<srtong>{{$result_query -> type}}</srtong></p>
                   	<p>餐廳價位大約在<srtong>
                   		<?php 
							$price_is = $result_query -> price;

							switch ($price_is) {
								case '0':
									echo '150元以下';
									break;
								case '1':
									echo '150元~300元';
									break;
								case '2':
									echo '高於300元';
									break;
								default:
									echo '有Bug，快回報給我們';
									break;
							}
						 ?>
                   	<srtong></p>
                   	<p>走路大約<srtong>
                   		<?php 
							$location_is = $result_query -> location;

							switch ($location_is) {
								case '0':
									echo '15分鐘以內';
									break;
								case '1':
									echo '15~30分鐘';
									break;
								case '2':
									echo '30分鐘以上';
									break;
								default:
									echo '有Bug，快回報給我們';
									break;
							}
						 ?>
                   		會到<srtong></p>	
                   		<hr>
                   		<div class="col-xs-12 text-center">
                   			<p>
                   				<a target="_blank" href="{{ url('https://www.google.com.tw/?gfe_rd=cr&ei=rI_BVfyXCo2S9QXVsIP4DA&gws_rd=ssl#newwindow=1&q=大直 '.$result_query -> name.' 菜單') }}" class="btn btn-info btn-xl page-scroll">幫我google菜單</a>
                   			</p>
                   		</div>
                   		<div class="col-xs-12 text-center">
                   			<p>
                   				<a href="/random_result" class="btn btn-success btn-xl page-scroll">再來一次</a>
                   			</p>
                   		</div>
                </div>
            </div>
        </div>

    </section>
@stop