<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - CV. Jaya Karya Konsultan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f8f8;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .container {
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 300px;
            text-align: center;
        }

        .container input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #444;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .container button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <h1>CV.<strong>Jaya Karya Konsultan</strong> / <small>Admin Center</small></h1>
    <form action="{{ route('admin.login') }}" method="POST">
        @csrf
        <div class="container">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">
            <button type="submit">Sign-in</button>
        </div>
    </form>
@if ($message = Session::get('gagal'))
<script>
    alert('{{ $message }}');
</script>
@endif
</body>
</html>
