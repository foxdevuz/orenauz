<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="/css/admin/login.css">
    <title>Admin panelga kirish</title>
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                <form action="/login" method="POST">
                    <div class="input-field">
                        <input type="text" name="username" placeholder="Loginni kiriting" required autocomplete="off">
                        <i class="uil uil-envelope icon"></i>
                        @error('username')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Parolni kiriting" required autocomplete="off">
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                        @error('password')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    @csrf
                    @if (session()->has('error'))
                        <p class="text" style="padding-top:10px; color:red;">
                            {{ session('error') }}
                        </p>
                    @endif

                    <div class="input-field button">
                        <button type="submit">Kirish</button>
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">
                        <a href="/" class="text signup-link">Ortga qaytish</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/admin/script.js"></script>

</body>
</html>
