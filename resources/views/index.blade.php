<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Todo</title>
</head>

<body>
  <h3>My Todo</h3>
  <form action="/todos" method="POST">
    @csrf
    <input name="text" placeholder="Input here...">
    <button type="submit">ADD</button>
  </form>

  <h5>Todo List</h5>
  <ul>@foreach ($todos as $todo)
    <li>{{$todo->text}}
      <form action="/todos/{{$todo->id}}" style="display: inline;" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">DEL</button>
      </form>
    </li>
    @endforeach
  </ul>

</body>

</html>