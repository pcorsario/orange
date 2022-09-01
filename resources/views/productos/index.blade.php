@foreach($productos as $producto)
{{$producto->nombre}} {{$producto->precio}} {{$producto->categoria}}
<br>
@endforeach