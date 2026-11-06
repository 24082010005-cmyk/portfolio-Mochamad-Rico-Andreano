<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #101827;
        }

        .login-container {
            width: 380px;
            padding: 35px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
            color: #101827;
        }

        .subtitle {
            text-align: center;
            color: #777;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1px solid #ddd;
            border-radius: 7px;
        }

        button {
            width: 100%;
            padding: 13px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 7px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #1d4ed8;
        }

        .error {
            color: #dc2626;
            margin-bottom: 15px;
            font-size: 14px;
        }
    </style>
</head>

<body>

<div class="login-container">

    <h2>Admin Login</h2>
    <p class="subtitle">Silakan masuk ke dashboard portfolio</p>

    @if ($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('login.process') }}" method="POST">

        @csrf

        <label>Email</label>
        <input
            type="email"
            name="email"
            placeholder="Masukkan email"
            value="{{ old('email') }}"
            required
        >

        <label>Password</label>
        <input
            type="password"
            name="password"
            placeholder="Masukkan password"
            required
        >

        <button type="submit">Login</button>

    </form>

</div>

</body>
</html>