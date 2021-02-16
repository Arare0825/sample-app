<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task complete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">   

</head>
<div class="card">
  <div class="card-header">
   この内容を完了する
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $somedayTodos->title }}</h5>
    
   <form id="check" method="post" action="{{ route('todo.somedayDestroy',['id'=>$somedayTodos->id]) }}">
   @csrf
    <button form="check" type="submit"  class="btn btn-danger btn-lg">完了</button>
   </form>

  </div>
   </div>
    </div>

</div>
</body>
</html>