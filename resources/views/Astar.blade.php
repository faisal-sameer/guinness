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
@foreach ($mystate as $mystates)
    {{$mystates}}

@endforeach
<br>
@foreach ($currentState as $currentStates)
    {{$currentStates}}
@endforeach




