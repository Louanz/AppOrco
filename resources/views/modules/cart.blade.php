<ul>
@foreach ($products as $product)
        <li>{{$product->name}}<span class="info">  {{$product->price}} &euro;</span></li>
@endforeach
</ul>
<div>
    <p>Total price :</p>
    <p>{{$total_price}} &euro;</p>
</div>