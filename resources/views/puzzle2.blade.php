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
@foreach ($openNode as $openNodes)
Opne :    {{$openNodes}}
@endforeach

<br>
@foreach ($view as $views)
    {{$views}}
@endforeach