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
<<<<<<< HEAD
                    <input type="text" name="timming" class="form-control" id="food_timming" placeholder="(ex. 午餐,晚餐)">
=======
                    時機：<input type="text" name="timming" class="form-control" id="food_timming" placeholder="(ex. 午餐,晚餐)">
>>>>>>> 604a1cf1d5ce8ef9cc9f755baacffd4991eac872
                </div>
                    <input type="hidden" name="is_alive" class="form-control" value="1">
                <div class="form-group">
                    <label for="food_price">餐廳價位：</label>
                    <input type="radio" name="price" id="food_price" value="0" checked><label>低於100元</label>
                    <input type="radio" name="price" id="food_price" value="1" ><label>100~300元</label>
                    <input type="radio" name="price" id="food_price" value="2"><label>300元以上</label>
                </div>
                <div class="form-group">
                    <label for="food_location">餐廳距離：</label>
                    <input type="radio" name="location" id="food_location" value="0" checked><label>0~15分鐘</label>
                    <input type="radio" name="location" id="food_location" value="1" ><label>15~30分鐘</label>
                    <input type="radio" name="location" id="food_location" value="2"><label>30分鐘以上</label>
                </div>
                <p>
                    <input type="submit" value="送出" class="btn btn-success">
                    <a href="{{ url('restaurants/') }}" role="btn" class="btn">取消</a>
                </p>
            </form>
        </div>
    </section>
@stop