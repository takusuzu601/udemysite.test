<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: red;
        }
    </style>
</head>
<body>
    <h1>これはテストメールです</h1>
<p> <strong>{{$course->title}}</strong> コースの審査を結果掲載できません！</p>
<h2>拒否の理由</h2>
{!!$course->observation->body!!}}
</body>
</html>
