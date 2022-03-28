<?php
$cost=$_POST['cost'];

if($_POST){
    if($cost <= 50 ){ 
        $x=0.02 ; $k1=.5 ; $finalcost = $cost * $k1;
        $result = $finalcost + $x *$finalcost ;
    }
    elseif($cost > 50 AND $cost <= 100){
        $x=0.02 ; $k1=.75 ; $finalcost = $cost * $k1;
     $result = $finalcost + $x *$finalcost ;
    }
    elseif($cost > 100 AND $cost < 250 ){
        $x=0.02 ; $k1=1.20 ; $finalcost = $cost * $k1;
        $result = $finalcost + $x *$finalcost ;
    }
    elseif($cost > 250 ){
        $x=0.02 ; $k1=1.50 ; $finalcost = $cost * $k1;
        $result = $finalcost + $x *$finalcost ;
    }
    else{
        $result = "Enter valid number";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>elec</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-12 text-danger text-center h3 mt-5">Elec</div>
              <div class="col-4 offset-4">
                  <form action="" method="post">
                      <div class="form-group">
                          <input type="number" name="cost" id="num1" class="form-control m-2" placeholder="Enter your cost">
                      </div> 
                      <div class="form-group col-12">
                          <button class="btn btn-dark col-12 mx-2">Result</button>
                      </div>
                     <?php
                     if(isset( $result)){
                        echo $result;
                     }
                     ?>     
                  </form>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>