<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet">
    <style>
    body{
      font-family: 'Noto Serif JP', serif;
    }
.header{
  width:100%;
  height:100px;
}
#home-btn{
  float:right;
  margin-top:20px;
}
label{
  font-size:24px;
  margin-bottom:20px;
}
input{
  margin-bottom:20px;
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
<div class="header">
<a id="home-btn" href="{{ route('todo.week') }}" type="submit" class="float-right btn btn-outline-info ">戻る</a>
</div>

<form id="edit" method="post" action="{{ route('week.update', ['id'=>$weekTodos->id]) }}">
@csrf
  <div class="form-group">
    <label for="exampleInputtext">タスク名</label>
    <input type="text" name="title" class="form-control" id="text" placeholder="タスクを入力して下さい" value="{{ $weekTodos->title }}">
  </div>
  <button form=edit type="submit" class="btn btn-primary">書き換える</button>
</form>


</div>
</body>
</html>