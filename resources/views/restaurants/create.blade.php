<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	<section>
        <form action=" {{ url('restaurants') }} " method="post">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            餐廳名稱：<input type="text" name="name" class="form-control">(ex. 勝拉麵;必填)<br>
            食物類型：<input type="text" name="type" class="form-control">(ex. 拉麵,日式料理)<br>
            食用時機：<input type="text" name="timming" class="form-control">(ex. 午餐,晚餐)<br>
            <input type="hidden" name="is_alive" class="form-control" value="1">
            餐廳價位：<input type="text" name="price" class="form-control">(1=低(0~150);2=中(150~300);3=高(300 up))<br>
            餐廳距離：<input type="text" name="location" class="form-control">(1=近(0~15分鐘);2=中(15~30分鐘);3=高(30分鐘 up))<br>
            <input type="submit" value="送出" class="btn">
        </form>
    </section>
</body>
</html>