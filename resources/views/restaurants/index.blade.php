@extends('template')

@section('header')
    <header class="small-page-header">
        <div class="header-content">
            <div class="header-content-inner">
                <h1>編輯餐廳資訊</h1>
                <hr>
                <p>餐廳資訊跟人的心一樣，常常是善變的，為了提供最好的建議，需要您的協助。</p>
                <a href="{{ url('restaurants/create') }}" role="btn" class="btn btn-primary btn-xl">新增餐廳</a>
            </div>
        </div>
    </header>
@stop

@section('content')
	<section class="container">
		<!-- <a href="{{ url('restaurants/create') }}" role="btn" class="btn btn-info">新增</a> -->
		<table class="table table-striped table-hover">
				<tr>
					<th>餐廳名稱</th>
					<th>食物類型</th>
					<th>食用時機</th>
					<th>餐廳價位</th>
					<th>走路距離</th>
					<th></th>
					<th></th>
				</tr>
			@foreach ( $query as $var )
				<tr>
					<!-- <td>{{$var -> id}}</td> -->
					<td>{{$var -> name}}</td>
					<td>{{$var -> type}}</td>
					<td>{{$var -> timming}}</td>
					<td>
						<?php 
							$price_is = $var -> price;

							switch ($price_is) {
								case '1':
									echo '低於150元';
									break;
								case '2':
									echo '150元~300元';
									break;
								case '3':
									echo '高於300元';
									break;
								default:
									echo '有Bug，快回報給我們';
									break;
							}
						 ?>
					</td>
					<td>
						<?php 
							$location_is = $var -> location;

							switch ($location_is) {
								case '1':
									echo '0~15分鐘';
									break;
								case '2':
									echo '15~30分鐘';
									break;
								case '3':
									echo '30分鐘以上';
									break;
								default:
									echo '有Bug，快回報給我們';
									break;
							}
						 ?>
					</td>
					<td><a href="{{ url('restaurants/'.$var->id.'/edit') }}" role="btn" class="btn btn-success">編輯</a></td>
					<td>
						<form action="{{ url('restaurants/'.$var->id) }}" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="_method" value="delete">
							<input type="submit" role="btn" class="btn btn-danger" value="刪除">
						</form>
					</td>
					<!-- <td><a href="{{ url('restaurants/'.$var->id.'/delete') }}" role="btn">刪除</a></td> -->
				</tr>
			@endforeach
		</table>
	</section>
@stop