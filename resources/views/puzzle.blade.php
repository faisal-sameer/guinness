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
Depth : {{$depth}}
<br>
{{$string}}
<br>
Opne node :  
@foreach ($openNode as  $keys => $value)
   {{$keys}} [
      
    @foreach ($value as $values)
    {{$values}}
    @endforeach
   ] <br>
@endforeach

<br>

@foreach ($fringe as  $keys => $value)
{{$keys}} [
    @foreach ($value as $values)
    {{$values}}

    @endforeach
]
    <br>

@endforeach

<br>

Time : {{$execution_time}}