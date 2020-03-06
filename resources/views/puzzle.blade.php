Good Postion :{{$steps}}
<br>
Bad Postion :{{$bad}}

<br>
0's Postion : {{$key}}
<br>
My state [
@foreach ($mystate as $news)
   {{$news}}
@endforeach
]
<br>
Fringe : [ 
@foreach ($fringe as $fringes)
  {{$fringes}} 
@endforeach
]
<br>
Depth : {{$depth}}
<br>
{{$string}}
<br>
Opne node : [ 
@foreach ($openNode as $openNodes)
   {{$openNodes}}
@endforeach
]
<br>

@foreach ($myarray as  $keys => $value)

<br>
    @foreach ($value as $values)
    {{$values}}
    @endforeach
@endforeach

<br>

Time : {{$execution_time}}