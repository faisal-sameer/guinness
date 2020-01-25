<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style type="text/css">
    img{
        padding-left: 20px;
    }
</style>
<body>


<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1 class="text-primary" style="text-align: center;">Laravel 5 Barcode Generator Using milon/barcode</h1>
    </div>
</div>


<div class="container text-center" style="border: 1px solid #a1a1a1;padding: 15px;width: 70%;">
    <br/>


    <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('' , 'C93',2,22,array(1,1,1))}}" alt="barcode" />

    1/1#10
    <br/> 

    <br/>
    <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('abdulaziz', 'C39',2,22,array(1,1,1))}}" alt="barcode" />

</div>
    





</body>
</html>