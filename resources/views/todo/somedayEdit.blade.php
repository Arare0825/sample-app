<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>今日のタスク編集</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">   

</head>
<body>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
   </ul>
   </div>
   @endif

<div class="container">

<form id="edit" method="post" action="{{ route('todo.somedayUpdate', ['id'=>$somedayTodos->id]) }}">
@csrf

  <div class="form-group">
    <label for="exampleInputtext">タスク名</label>
    <input type="text" name="title" class="form-control" id="text" placeholder="タスクを入力して下さい" value="{{ $somedayTodos->title }}">
  </div>
  <button form=edit type="submit" class="btn btn-primary">書き換える</button>
</form>


</div>
</body>
</html>