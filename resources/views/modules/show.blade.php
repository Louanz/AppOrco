
<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
}

.container {
  width: 350px;
  background-color: #b0e0e6;
  border: 1px solid #333;
  padding: 20px;
  margin: 100px auto;
  text-align: center;
}

h1 {
  color: #333;
  font-size: 24px;
  margin-bottom: 10px;
}



.list {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.list li {
  margin-bottom: 10px;
  color: #333;
}

.list li input[type="checkbox"] {
  margin-right: 5px;
}

.info {
  display: inline-block;
  background-color: #fff;
  border: 1px solid #333;
  padding: 3px 5px;
  border-radius: 5px;
  margin-left: 5px;
  font-size: 12px;
}

</style>
</head>
<body>
<div class="container">
  <h1>{{strtoupper($module->title)}}</h1>
</br>
<!-- les prix sont hors hors tva ici -->

  <div class="icon"></div>
  <ul class="list">
      <form method="POST" action="{{route('cart')}}">
          @csrf
      @foreach ($products as $product)
        <li><input type="checkbox" name="products[]" value="{{$product->id}}"> {{$product->name}}<span class="info">{{$product->price}} €</span></li>
      @endforeach

        <input type="submit" value="Acheter"/>
      </form>

  </ul>
</div>
</body>
</html>