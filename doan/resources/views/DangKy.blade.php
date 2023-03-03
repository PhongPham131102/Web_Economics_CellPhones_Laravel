

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Đăng nhập</title>
        <link rel="stylesheet" href="./CSS/dangnhap.css">
        <link rel="stylesheet" href="./FontAwesome/fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.min.css">
    </head>
    <body>
       <div class="container">
           <div class="forms-container">
               <div class="signin-signup">
               <form  class="sign-in-form" action="{{ route('DangKy') }}" method="POST">
                <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
                       <div class="form-control-1">
                            <label><i class="fas fa-user"></i>Tên đăng nhập:</label>
                            <div class="input-field">
                                <input type="text" name="username" placeholder="Tên đăng nhập*" >
                            </div>
                            @error('username')
                            <p class="description">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="form-control">
                            <label><i class="fas fa-lock"></i>Mật khẩu:</label>
                            <div class="input-field">
                                <input type="password" name='password'  placeholder="Mật khẩu*" >
                                @error('password')
                            <p class="description">{{ $message }}</p>
                        @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn solid">Đăng Nhập</button>
                    <p class="social-text">Hoặc đăng nhập bằng</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
        <script type="text/javascript" src="./js/style.js"></script>
    </body>
</html>