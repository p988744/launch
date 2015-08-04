<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<section>
        <form action=" {{ url('restaurants/'.$query->id) }} " method="post">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <input type="hidden" name="_method" value="PUT">
            餐廳名稱：<input type="text" name="name" class="form-control" value="{{ $query -> name }}">(ex. 勝拉麵;必填)<br>
            食物類型：<input type="text" name="type" class="form-control" value="{{ $query -> type }}">(ex. 拉麵,日式料理)<br>
            時機：<input type="text" name="timming" class="form-control" value="{{ $query -> timming }}">(ex. 午餐,晚餐)<br>
            <input type="hidden" name="is_alive" class="form-control" value="1">
            價格：<input type="text" name="price" class="form-control" value="{{ $query -> price }}">(1=低(0~150);2=中(150~300);3=高(300 up))<br>
            位置：<input type="text" name="location" class="form-control" value="{{ $query -> location }}">(1=近(0~15分鐘);2=中(15~30分鐘);3=高(30分鐘 up))<br>
            <input type="submit" value="送出" class="btn">
        </form>
    </section>
</body>
</html>