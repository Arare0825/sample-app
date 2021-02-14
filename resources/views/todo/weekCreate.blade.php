<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1週間以内のタスク作成</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">   
    <style>
label{
  padding:15px 0 15px 0;
}
.btn{
  margin-top:15px;
}
#home-btn{
float:right;
}
</style>

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

    
<div class="main">
<a id="home-btn" href="{{ route('todo.week') }}" type="submit" class="btn btn-outline-info">戻る</a>

<div class="form-group">
<form id="check" method="post" action="{{ route('todo.weekStore') }}">
    @csrf
    <label for="today-create">タスク作成</label>
    <input type="text" name="title" class="form-control"  placeholder="1週間以内にやるタスクを入力してください">
  </div>
  <button form="check" type="submit" class="btn btn-primary btn-lg">作成</button>
  </div>
  <form>


</div>
</body>
</html>