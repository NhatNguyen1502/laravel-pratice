<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid" style="width: 18rem;">
        <div class="d-flex bg-secondary p-2 mb-3 rounded-1" style="width: 18rem;">
            <div class="p-2 w-100">Task List</div>
            <div class="p-2 flex-shrink-1"> <i class="fa-solid fa-bars"></i></div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-header bg-secondary">
                New task
            </div>
            <ul class="list-group list-group-flush">
                <div class="m-3 p-3">
                    <label for="input" class="form-label"><b>Task</b></label>
                    <input type="email" class="form-control" id="input">
                    <button class="btn btn-light border mt-3 p-1"><b>+</b> Add task</button>
                </div>
            </ul>
        </div>

        <div class="card mt-4" style="width: 18rem;">
            <div class="card-header bg-secondary">
                Current tasks
            </div>
            <table class="table p-3">
                <thead>
                    <tr class="m-2">
                        <th>Task</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @each('shared.taskItem', $tasks, 'taskItem')
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
