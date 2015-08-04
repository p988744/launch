<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	<section>
        <form action=" {{ url('restaurants') }} " method="post">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            餐廳名稱：<input type="text" name="name" class="form-control"><br>
            食物類型：<input type="text" name="type" class="form-control"><br>
            時機：<input type="text" name="timming" class="form-control"><br>
            <input type="hidden" name="is_alive" class="form-control" value="1">
            價格：<input type="text" name="price" class="form-control"><br>
            位置：<input type="text" name="location" class="form-control"><br>
            <input type="submit" value="送出" class="btn">
        </form>
    </section>
</body>
</html>