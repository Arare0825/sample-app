<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>someday task create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet"> 
    <style>
    body{
      font-family: 'Noto Serif JP', serif;
    }
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
<div class="header">
<a id="home-btn" href="{{ route('todo.someday') }}" type="submit" class="btn btn-outline-info">戻る</a>
</div>
<div class="form-group">
<form id="check-task" method="post" action="{{ route('todo.somedayStore') }}">
    @csrf
    <label>タスク作成</label>
    <input id="text" type="text" name="title" class="form-control"  placeholder="いつかやるタスクを入力してください">
  <button form="check-task" type="submit" class="btn btn-primary btn-lg">作成</button>

  <form>
  </div>
</div>





</div>
</body>
</html>