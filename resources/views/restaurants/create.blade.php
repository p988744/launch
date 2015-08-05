@extends('template')

@section('header')
    <header class="small-page-header">
        <div class="header-content">
            <div class="header-content-inner">
                <h1>新增餐廳</h1>
                <hr>
                <p>最近有發現什麼好吃的餐廳嗎？</p>
            </div>
        </div>
    </header>
@stop

@section('content')
	<section>
        <div class="container">
            <form action=" {{ url('restaurants') }} " method="post">
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                
                <div class="form-group">
                    <label for="restaurant_name">餐廳名稱：</label>
                    <input type="text" name="name" class="form-control" id="restaurant_name" placeholder="(ex. 勝拉麵;必填)">
                </div>
                <div class="form-group">
                    <label for="food_type">食物類型：</label>
                    <input type="text" name="type" class="form-control" id="food_type" placeholder="(ex. 拉麵,日式料理)">
                </div>
                <div class="form-group">
                    <label for="food_timming">食用時機：</label>
                    時機：<input type="text" name="timming" class="form-control" id="food_timming" placeholder="(ex. 午餐,晚餐)">
                </div>
                    <input type="hidden" name="is_alive" class="form-control" value="1">
                <div class="form-group">
                    <label for="food_price">餐廳價位：</label>
                    <input type="text" name="price" class="form-control" id="food_price" placeholder="(1=低(0~150);2=中(150~300);3=高(300 up))">
                </div>
                <div class="form-group">
                    <label for="food_location">餐廳距離：</label>
                    <input type="text" name="location" class="form-control" id="food_location" placeholder="(1=近(0~15分鐘);2=中(15~30分鐘);3=高(30分鐘 up))">
                </div>
                <input type="submit" value="送出" class="btn">
            </form>
        </div>
    </section>
@stop