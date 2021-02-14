<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todos</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">   
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
 <div class="header">

 <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <form method="get" action="{{ route('todo.index') }}" id="home">
                <button type="submit" form="home" class="home btn btn-outline-info">メニュー画面に戻る</button>
                </form>
                </div>

</div>

<div class="main">
    <div class="main-title">
<h1>作成するタスクの期限を選んでください</h1>
</div>
<div class="category-btn">
    
   <a href="{{ route('todo.create') }}" id="today-btn" type="submit" class="btn btn-danger">今日</a>

   <a href="{{ route('todo.weekCreate') }}" id="week-btn" type="submit" class="btn btn-success">一週間以内</a>

   <a href="{{ route('todo.somedayCreate') }}" id="someday-btn" type="submit" class="btn btn-warning">いつか</a>
</div>
</div>

</div>
</body>
</html>