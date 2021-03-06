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
                    <input type="text" name="timming" class="form-control" id="food_timming" value="{{ $query -> timming }}">(ex. 午餐,晚餐)
                </div>
                <input type="hidden" name="is_alive" class="form-control" value="1">

                <!-- price switch-->
                <div class="form-group">
                    <label for="food_price">餐廳價位：</label>
                    <?php 
                        switch ($query -> price) {
                            case '0':
                                echo '                                    
                                    <input type="radio" name="price" value="0" checked="checked"><label>低於100元</label>
                                    <input type="radio" name="price" value="1"><label>100~300元</label>
                                    <input type="radio" name="price" value="2"><label>300元以上</label>
                                    
                                ';
                                break;
                            case '1':
                                echo '
                                    <input type="radio" name="price" value="0""><label>低於100元</label>
                                    <input type="radio" name="price" value="1" checked="checked"><label>100~300元</label>
                                    <input type="radio" name="price" value="2"><label>300元以上</label>
                                ';
                                break;
                            case '2':
                                echo '
                                    <input type="radio" name="price" value="0"><label>低於100元</label>
                                    <input type="radio" name="price" value="1"><label>100~300元</label>
                                    <input type="radio" name="price" value="2" checked="checked"><label>300元以上</label>
                                    
                                ';
                                break;
                            
                            default:
                                echo '有Bug，快回報給我們';
                                break;
                        }
                     ?>
                 </div>

                 <!-- location switch-->
                <div class="form-group">
                    <label for="food_location">餐廳距離：</label>
                    <?php 
                        switch ($query -> location) {
                            case '0':
                                echo '                                    
                                    <input type="radio" name="location" id="food_location" value="0"  checked="checked"><label>0~15分鐘</label>
                                    <input type="radio" name="location" id="food_location" value="1" ><label>15~30分鐘</label>
                                    <input type="radio" name="location" id="food_location" value="2"><label>30分鐘以上</label>
                                    
                                ';
                                break;
                            case '1':
                                echo '
                                    <input type="radio" name="location" id="food_location" value="0"><label>0~15分鐘</label>
                                    <input type="radio" name="location" id="food_location" value="1" checked="checked"><label>15~30分鐘</label>
                                    <input type="radio" name="location" id="food_location" value="2"><label>30分鐘以上</label>
                                ';
                                break;
                            case '2':
                                echo '
                                    <input type="radio" name="location" id="food_location" value="0"><label>0~15分鐘</label>
                                    <input type="radio" name="location" id="food_location" value="1"><label>15~30分鐘</label>
                                    <input type="radio" name="location" id="food_location" value="2" checked="checked"><label>30分鐘以上</label>
                                    
                                ';
                                break;
                            
                            default:
                                echo '有Bug，快回報給我們';
                                break;
                        }
                    ?>
                    
                </div>
                <p>
                    <input type="submit" value="送出" class="btn btn-success">
                    <a href="{{ url('restaurants/') }}" role="btn" class="btn">取消</a>
                </p>
            </form>
        </div>
    </section>
@stop