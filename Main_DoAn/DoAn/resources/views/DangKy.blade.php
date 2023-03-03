<!doctype html>
<html lang="vi">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/logoshop.png">
	<link href="css/trangbanhang.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<title>
		PNP Shop
	</title>
</head>

<body>
	<header class="dangky">
		<div class="container">
			<div class="logo"><a href="trangchu.html"><img src="img/logoshop.png" alt="PNPSHOP"></a></div>
			<div class="tem1" id="dangky-1">Đăng Ký</div>
		   <div class="tem2" id="dangnhap-1">Đăng Ký</div>
			<span class="support"> Bạn Cần Hổ Trợ ? </span>	
		</div>
		</header>
	<div class="profile">
		<div class="right-col">
			<div class="return">
			</div>
			<form action="{{ route('save') }}" method="POST" >
				@csrf
			<div class="form-group">
				<div class="field">
					<input id="name" type="text" name="name" class="group-item">
					<label for="name" data-title="Họ Và Tên"></label>
					@error('name')
					<p class="description">{{$errors->first('name')  }}</p>
					@enderror
				</div>
			</div>
			<div class="form-group">
				<div class="field">
					<input id="username" type="text" name="username" class="group-item">
					<label for="username" data-title="Tên Đăng Nhập"></label>
					@error('username')
					<p class="description">{{ $message }}</p>
					@enderror
				</div>
			</div>
			<div class="form-group">
				<div class="field">
					<input id="password" type="password" name="password" class="group-item">
					<label for="password" data-title="Mật Khẩu"></label>
					@error('password')
					<p class="description">{{ $message }}</p>
					@enderror
				</div>
			</div>
			<div class="form-group">
				<div class="field">
					<input id="repassword" type="password" name="repassword" class="group-item">
					<label for="repassword" data-title="Xác Nhận Mật Khẩu"></label>
					@error('repassword')
					<p class="description">{{ $message }}</p>
					@enderror
				</div>
			</div>
			<div class="form-group">
				<div class="field">
					<input id="phone" type="text" name="phone" class="group-item">
					<label for="phone" data-title="Số Điện Thoại"></label>
					@error('phone')
					<p class="description">{{ $message }}</p>
					@enderror
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn-form-submit">Đăng Ký</button>
			</div>
			</form>
		</div>
	</div>

	<script src="js/slide.js"></script>
</body>

</html>