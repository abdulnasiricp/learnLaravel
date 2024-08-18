<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>{{$title}}</title>
    <style>
         .header{
            position: absolute;
            top: 0;
            background-color: skyblue;
            width: 100%;
            text-align: center;
            word-spacing: 50px;
            margin: 0;
            padding: 10px;

        }
        .footer{
            position: absolute;
            bottom: 0;
            background-color: skyblue;
            width: 100%;
            text-align: center;
            margin: 0;
            padding: 10px;

        }

        li{
            display: inline;
        }
        li a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="header">
<a href="/home">Home</a>

<a href="/about">About</a>
<a href="/login">Login</a>
<a href="/upload">Upload</a>
</div>

<div class="footer">
    <div>
        <p>Page footer</p>
    </div>

</div>
</body>
</html>