<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>今日のタスク編集</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">   

</head>
<div class="card">
  <div class="card-header">
   この内容を変更する
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $somedayTodos->title }}</h5>
    
   
    <a type="submit" href="{{ route('todo.somedayEdit', ['id'=>$somedayTodos->id]) }}" form="edit" class="btn btn-primary btn-lg">編集する</a>
   

  </div>
   </div>
    </div>

</div>
</body>
</html>