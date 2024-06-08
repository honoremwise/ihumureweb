<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('assets/lib/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/slick/slick-theme.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .editor-container {
            display: flex;
            flex-direction: column;
            width: 80%;
            max-width: 800px;
            background: white;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .toolbar {
            background-color: #f0f0f0;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
        }
        .toolbar button {
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px 10px;
            margin: 0 5px;
            font-size: 16px;
        }
        .toolbar input[type="file"] {
            display: none;
        }
        .editor {
            flex: 1;
            padding: 10px;
            min-height: 300px;
            max-height: 500px;
            overflow-y: auto;
            outline: none;
            font-size: 16px;
        }
        .submit-button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin: 10px;
            align-self: flex-end;
        }
        .input-field {
            margin-bottom: 15px;
        }
        .input-field label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .input-field input, .input-field textarea, .input-field select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        .featured-image-container {
            position: relative;
            display: inline-block;
        }
        .featured-image-container img {
            max-width: 100%;
            height: auto;
            margin: 10px 0;
        }
        .featured-image-container .cancel-icon {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            cursor: pointer;
            font-size: 20px;
            border-radius: 50%;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>
