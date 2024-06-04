<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.container {
    display: flex;
    justify-content: space-between;
    margin: 20px;
  }

  .card {
    width: 700px;
    padding: 100px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    text-align: center;
  }

.card h2 {
  margin-top: 0;
}

button {
  background-color: #008CBA;
  color: white;
  padding: 10px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
</style>
</head>
<body>
<H1> Bienvenue voici toute nos offres </H1>

@php($user_count = 0)

@foreach ($modules as $module)
    @if($user_count % 2 == 0)
        <div class="container">
    @endif
    @php($user_count++)
      <div class="card">
        <h2>{{$module->title}}</h2>
        <button><a href="/modules/{{$module->id}}">Voir les Offres</a></button>
      </div>

    @if($user_count % 2 == 0)
        </div>
    @endif

@endforeach

</body>
</html>