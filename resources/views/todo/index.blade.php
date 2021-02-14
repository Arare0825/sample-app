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
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <form method="get" action="{{ route('todo.home') }}" id="home">
                <button type="submit" form="home" class="home btn btn-outline-info">ホームに戻る</button>
                </form>
                </div>


</div>
    <div class="main">
    <div class="main-title">
     <h1>Tasks</h1>
     <form method="get" id="newTodo" action="{{ route('todo.choose') }}">
     <button type="submit" form="newTodo" class="btn btn-outline-primary">新規作成</button>
     </form>
   </div>
   </div>

   <div class="category">
   <h2>タスクの確認</h2>

   <div class="category-btn">
   <a id="today-btn" href="{{ route ('todo.today') }}" class="btn btn-danger btn-lg">今日</a>
 
   <a id="week-btn" href="{{ route('todo.week') }}" class="btn btn-success btn-lg">一週間以内</a>

   <a href="{{ route('todo.someday') }}"  id="someday-btn"  class="btn btn-warning btn-lg">いつか</a>
   </div>
   </div>
  

</div>
</body>
</html>