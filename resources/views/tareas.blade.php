<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<style>
    .form-border {
      border: 1px solid black;
      padding: 10px;
    }
    .list-group {
      border: none;
    }
</style>

<body>
    <div div class="container align-items-start mt-5">
        <form class="form-border" action="{{ route('añadirTareas') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tareas">Añadir Tareas</label>
                <input type="text" name="tarea" class="form-control" id="tareas" aria-describedby="emailHelp"
                    placeholder="Escribe aquí">
                <small id="emailHelp" class="form-text text-muted">Escribe en el cuadro superior la actividad que quieres añadir</small>
            </div>
            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
    </div>
    <ul class="list-group list-group-flush container mt-3 form-border justify-content-end">
        @foreach ($misTareas as $t)
        <li class="list-group-item">
            {{$t->tarea}}
            <form action="{{ route('eliminarTarea', $t->id) }}" method="POST" class="float-end">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-success">Realizado</button>
            </form>
        </li>
               
        @endforeach
    </ul> 
</body>

</html>