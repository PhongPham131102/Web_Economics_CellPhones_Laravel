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
            <div class="tem2" id="dangnhap-1">Đăng Nhập</div>
            <span class="support"> Bạn Cần Hổ Trợ ? </span>
        </div>
    </header>
    <div class="profile">
        <div class="right-col">
            <div class="return">
                @if ($message = Session::get('success'))
                    <div>
                        <div style="color: #12c300;
                    font-size: 1.2em;font-weight: bold;">{{ $message }}</div>
                    </div>
                @endif
                @if ($message = Session::get('fail'))
                    <div>
                        <div style="color: #dd0505;
                    font-size: 1.2em;font-weight: bold;">{{ $message }}</div>
                    </div>
                @endif
            </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="field">
                        <input id="username" type="text" name="username" class="group-item">
                        <label for="username" data-title="Tên Đăng Nhập"></label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <input id="password" type="password" name="password" class="group-item">
                        <label for="password" data-title="Mật Khẩu"></label>
                        @error('username')
                            <p class="description">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-form-submit">Đăng Nhập</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/slide.js"></script>
</body>

</html>
