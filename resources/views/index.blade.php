<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" public/css/style.css" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>AF</title>
</head>
<body>
    <h2 class="title">AF Company....</h2>
    <section></section>
    <div class="container">
        <h2>welcome to our Web page..... </h2>
        <p>
            We are Abdulaziz & Fisal a Software Einginner .....
        </p>
    </div>
    <script type="text/javascript">
    var section = document.querySelector('section');
    window.addEventListener('scroll',function(){
        var value = window.scrollY;
        section.style.clipPath ="circle("+ value +"px at center)"
    })
    </script>
    
</body>
</html>