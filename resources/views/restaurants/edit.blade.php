@extends('template')

@section('header')
    <header class="small-page-header">
        <div class="header-content">
            <div class="header-content-inner">
                <h1>編輯餐廳</h1>
                <hr>
                <p>餐廳搬家了？還是偷偷漲價了？告訴我們吧！</p>
            </div>
        </div>
    </header>
@stop

@section('content')
	<section>
        <div class="container">
            <form action=" {{ url('restaurants/'.$query->id) }} " method="post"  class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="restaurant_name">餐廳名稱：</label>
                    <input type="text" name="name" class="form-control" id="restaurant_name" value="{{ $query -> name }}">(ex. 勝拉麵;必填)
                </div>
                <div class="form-group">
                    <label for="food_type">食物類型：</label>
                    <input type="text" name="type" class="form-control" id="food_type" value="{{ $query -> type }}">(ex. 拉麵,日式料理)
                </div>
                <div class="form-group">
                    <label for="food_timming">食用時機：</label>
                    時機：<input type="text" name="timming" class="form-control" id="food_timming" value="{{ $query -> timming }}">(ex. 午餐,晚餐)
                </div>
                    <input type="hidden" name="is_alive" class="form-control" value="1">
                <div class="form-group">
                    <label for="food_price">餐廳價位：</label>
                    <input type="text" name="price" class="form-control" id="food_price" value="{{ $query -> price }}">(1=低(0~150);2=中(150~300);3=高(300 up))
                </div>
                <div class="form-group">
                    <label for="food_location">餐廳距離：</label>
                    <input type="text" name="location" class="form-control" id="food_location" value="{{ $query -> location }}">(1=近(0~15分鐘);2=中(15~30分鐘);3=高(30分鐘 up))<br>
                </div>
                <input type="submit" value="送出" class="btn">
            </form>
        </div>
    </section>
@stop