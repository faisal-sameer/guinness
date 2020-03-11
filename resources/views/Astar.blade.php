in potion 2 :{{$Stepaway1}}
<br>
in potion 4 :{{$Stepaway2}}
<br>
in potion 8 :{{$Stepaway3}}

<br>
Min number : {{$min}}
<br>
{{$f}}
<br>
Depth : {{$depth}}
<br>

Opne node :  
<br>
@foreach ($open as  $keys => $value)
    Depth {{$keys}} [
      
    @foreach ($value as $values)
    {{$values}}
    @endforeach
   ] <br>
@endforeach




