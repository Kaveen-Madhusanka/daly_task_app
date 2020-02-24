<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="text-center">
            <h1>Daily tasks</h1>
            <div class="row">
                <div class="col-md-12">
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                        
                     @endforeach
                    <form method="POST" action="/savetask">
                        {{csrf_field()}}
                        <input type="text" class="form-control" name="task" placeholder="enter your task here">
                    </br>
                        <input type="submit" class="btn btn-primary" value="SAVE" >
                        <input type="button" class="btn btn-warning" value="CLEAR" >
                    </form>
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Tasks</th>
                        <th>completed</th>
                        @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>
                            <td>{{$task->iscompleted}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>

    </div>
    
</body>
</html>