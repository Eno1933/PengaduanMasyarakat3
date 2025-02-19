<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
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
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            backdrop-filter: blur(20px);
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            width: 450px;
        }
        .form-container {
            flex: 1;
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }
        h1 {
            color: white;
            margin-bottom: 20px;
        }
        .input-container {
            position: relative;
            margin: 15px 0;
        }
        .input-container input, .input-container textarea {
            width: 80%;
            padding: 12px;
            border: 2px solid #F9BE4A;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease-in-out;
        }
        .input-container input:focus, .input-container textarea:focus {
            border-color: #45B69F;
            box-shadow: 0px 0px 10px #45B69F;
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
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        button:before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #45B69F, #F9BE4A);
            transition: 0.4s;
        }
        button:hover:before {
            left: 0;
        }
        button:active {
            transform: scale(0.95);
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
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Registrasi</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-container">
                    <input type="text" name="nik" placeholder="NIK" required>
                </div>
                <div class="input-container">
                    <input type="text" name="nama" placeholder="Nama" required>
                </div>
                <div class="input-container">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-container">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-container">
                    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
                </div>
                <div class="input-container">
                    <input type="text" name="telp" placeholder="Telepon" required>
                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="input-container">
                    <textarea name="alamat" placeholder="Alamat"></textarea>
                </div>
                <button type="submit">Daftar</button>
            </form>
            <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>.</p>
        </div>
    </div>
</body>
</html>