<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo List</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        .header{
            width:100%;
            height:120px
        }
        .header a{
            margin:15px;
        }
            body {
                font-family: 'Nunito';
               
            }
            .todo-btn{
                margin-top:80px;
                
            }
            .todo-btn p{
               
                text-align:center;
            }
            .today-make{
                margin-bottom:35px;
            }
            .week-make{
                margin-bottom:35px;
            }
            .someday-make{
                margin-bottom:35px;
            }
            .title{
                margin-top:80px;
            }

        </style>
    </head>
    <body >
    <div class="container">
    <div class="header">
    
            @if (Route::has('login'))
                    @auth
                        <a class="float-right" href="{{ url('/dashboard') }}">ユーザー情報</a>
                    @else
                        <a class="float-right" href="{{ route('login') }}" >ログイン</a>

                        @if (Route::has('register'))
                            <a class="float-right" href="{{ route('register') }}" >新規作成</a>
                        @endif
                    @endauth
                </div>
            @endif

                <div class="title">
                <h1 class="text-center">Todo List</h1>

                <div class="todo-btn">
                <div class="today-make">
                <a id="today-btn" href="{{ route ('todo.today') }}" class="col-8 offset-2  btn btn-danger btn-lg">今日</a>
                <p>{{ $todayCount }}件のタスクがあります</p>
                </div>
                <div class="week-make">
                <a id="week-btn" href="{{ route('todo.week') }}" class="col-8 offset-2 btn btn-success btn-lg">一週間以内</a>
                <p>{{ $weekCount }}件のタスクがあります</P>
                </div>
                <div class="someday-make">
                <a href="{{ route('todo.someday') }}"  id="someday-btn"  class="col-8 offset-2  btn btn-warning btn-lg">いつか</a>
                <p>{{ $somedayCount }}件のタスクがあります</p> 
                </div>
                </div>
        </div>

    </body>
</html>
