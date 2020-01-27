<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
.main_container {
  height: 46px;
  width: auto;
  padding: 3px;
  margin-left: 40%;
  margin-top: 10%;
  
  max-width: 300px;
  background-color: #555555;
  align-content: center;
}
.container_inner {
  height: auto;
  border: none;
  background-color: #555555;
  max-width: 290px;
  vertical-align: center;
  padding-top: 12px;
  padding-left: 10px;
  align-content: center;
}
 .num_tiles {
  width:30px;
  height: 30px;
  background-color: #888888;
  color: #ffffff;
  font-size: 22px;
  text-align: center;
  line-height: 20px;
  padding: 3px;
  margin: 1.5px;
  font-family: verdana;
  vertical-align: center;
}
h2{
    margin-left:42%;
    margin-top:7%;


}

</style>


   </head>
<body>

<h2 class="attend"> Number of attendees
</h2>
<div class="main_container" id="id_main_container">

      <div class="container_inner" id="display_div_id">
     
<label class="num_tiles"> 
{{$count->count()}}
</label>
      </div>
    </div>




</body>
</html>