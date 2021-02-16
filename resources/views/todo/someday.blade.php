<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>someday's tasks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">  
    <link rel="stylesheet" href="../css/btnstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet">

    <style>
    body{
      font-family: 'Noto Serif JP', serif;
    }
.form-inline{
  margin-top:15px;
}
.today{
  width:100%;
  height:150px;
}
.today h1{
  padding-top:30px;
}
#home-btn{
  margin-top:15px;
}
.search{
  margin-bottom:30px;
}

</style>
</head>
<body>
    <div class="container">
<div class="today-title">
    <div class="today">
    <a id="home-btn" href="{{ route('todo.home') }}" type="submit" class="float-right btn btn-outline-info ">戻る</a>
    <h1>someday's tasks</h1>
</div>
<div class="search">
    <form  method="get" action="#" class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索する</button>
      </form>
      </div>

<div class="home-btn">

    <a href="{{ route('todo.somedayCreate') }}" form="todo-create" type="submit" class="btn btn-primary">新規作成</a>
</div>
</div>

<div class="today-todo">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">タスク</th>
      <th scope="col"></th>
      <th scope="col">管理</th>
      <th scope="col"></th>
    </tr>
  </thead>

    @foreach( $somedayTodos as $somedayTodo )
  <tbody>
    <tr>
      <th scope="row">{{ $somedayTodo->title }}</th>
      <td></td>
      <td><a type="submit" href="{{ route('todo.somedayShow', ['id'=>$somedayTodo->id ]) }}"  class="btn btn-outline-primary">編集する</a></td>
      <td><a type="submit" href="{{ route('todo.somedayCheck', ['id'=>$somedayTodo->id]) }}" class="btn btn-outline-danger">完了</a></td>
    </tr>
  </tbody>
  @endforeach 

</div>
</div>
</body>
</html>