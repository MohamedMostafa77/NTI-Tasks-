<?php
$number1=$_POST['num1'];
$number2=$_POST['num2'];
$operator= $_POST['operator'];

if($_POST){
    if($operator == "+"){
        $result = $number1 + $number2 ;
    }
    elseif($operator == "-"){
        $result = $number1 - $number2 ;
    }
    elseif($operator == "*"){
        $result = $number1 * $number2 ;
    }
    elseif($operator == "/"){
        $result = $number1 / $number2 ;
    }
    else{
        $result = "Enter valid number" ;
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>calc</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-12 text-center h3 mt-5">Calculator</div>
              <div class="col-4 offset-4">
                  <form action="" method="post">
                      <div class="form-group">
                          <input type="text" name="num1" id="num1" class="form-control m-2" placeholder="Enter your number">

                          <label for="sel1">Select list:</label>
                          <select class="form-control" name="operator" id="sel1">
                              <option>+</option>
                              <option>-</option>
                              <option>*</option>
                              <option>/</option>
                          </select>
                          <input type="text" name="num2" id="num2" class="form-control m-2" placeholder="Enter your number">
                           
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