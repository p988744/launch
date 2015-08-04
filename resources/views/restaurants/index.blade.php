<!DOCTYPE html>
<html>
<head>
	<title>Restaurants Manager</title>
</head>
<body>
	<section class="container">
		<a href="{{ url('/') }}" role="btn">首頁</a>
		<a href="{{ url('restaurants/create') }}" role="btn">新增</a>
		<table class="table table-hover">
			@foreach ( $query as $var )
				<tr>
					<td>{{$var -> id}}</td>
					<td>{{$var -> name}}</td>
					<td>{{$var -> type}}</td>
					<td>{{$var -> timming}}</td>
					<td>{{$var -> price}}</td>
					<td>{{$var -> location}}</td>
					<td><a href="{{ url('restaurants/'.$var->id.'/edit') }}" role="btn">編輯</a></td>
					<td>
						<form action="{{ url('restaurants/'.$var->id) }}" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="_method" value="delete">
							<input type="submit" role="btn" value="刪除">
						</form>
					</td>
					<!-- <td><a href="{{ url('restaurants/'.$var->id.'/delete') }}" role="btn">刪除</a></td> -->
				</tr>
			@endforeach
		</table>
	</section>
</body>
</html>