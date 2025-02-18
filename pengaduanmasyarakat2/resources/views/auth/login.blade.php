<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #222;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            align-items: center;
            background: rgba(0, 0, 0, 0.5);
            padding: 40px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            width: 700px;
        }
        .form-container {
            flex: 1;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
        }
        .image-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-left: 20px;
        }
        .image-container img {
            width: 350px;
            opacity: 0.8;
            border-radius: 10px;
        }
        h1 {
            color: white;
            margin-bottom: 20px;
        }
        .input-group {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .input-container {
            position: relative;
            margin: 15px 0;
        }
        .input-container input {
            width: 80%;
            padding: 12px;
            padding-left: 40px;
            border: 2px solid #F9BE4A;
            border-radius: 5px;
            outline: none;
        }
        .input-container input:focus {
            border-color: #45B69F;
            box-shadow: 0px 0px 10px #45B69F;
        }
        .input-container i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #283480;
            font-size: 18px;
        }
        button {
            width: 80%;
            padding: 12px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(45deg, #F9BE4A, #45B69F);
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        p {
            color: white;
            margin-top: 15px;
        }
        a {
            color: #F9BE4A;
            text-decoration: none;
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Login</h1>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group">
                    <div class="input-container">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-container">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <button type="submit">Login</button>
            </form>
            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a>.</p>
        </div>
        <div class="image-container">
            <img src="{{ asset('images/images-login2.png') }}" alt="Login Illustration">
        </div>
    </div>
</body>
</html>
