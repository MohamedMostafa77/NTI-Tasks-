<?php
$num1 = $_POST['fn'];
$num2 = $_POST['sn'];
$num3 = $_POST['tn'];?>

<!doctype html>
<html lang="en">
  <head>
    <title>max</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-12 text-danger text-center h3 mt-5">Max & Mini</div>
              <div class="col-4 offset-4">
                  <form action="" method="post">
                      <div class="form-group">
                          <input type="number" name="fn" id="fnumber" class="form-control m-2" placeholder="Enter your first number">
                          <input type="number" name="sn" id="secnumber" class="form-control m-2" placeholder="Enter your second number">
                          <input type="number" name="tn" id="thnumber" class="form-control m-2" placeholder="Enter your third number">
                      </div> 
                      <div class="form-group col-12">
                          <button class="btn btn-dark col-12 mx-2">Result</button>
                      </div>
                        <div class="alert aler-success bg-success text-light text-center p-5 "> <?php
                        if($num1 > $num2 and $num2 > $num3){
                            echo "maximum val is ". $num1."</br>"
                            ."minimum value is". $num3
                            ;
                        }
                        elseif($num1 > $num3 and $num3 > $num2){
                            echo "maximum val is ". $num1."</br>"
                            ."minimum value is". $num2
                            ;
                        }
                        elseif($num2 > $num1 and $num1 > $num3){
                            echo "maximum val is ". $num2."</br>"
                            ."minimum value is". $num3
                            ;
                        }
                        elseif($num2 > $num1 and $num1 < $num3){
                            echo "maximum val is ". $num1."</br>"
                            ."minimum value is". $num3
                            ;
                        }
                        elseif($num3 > $num1 and $num1 > $num2){
                            echo "maximum val is ". $num3."</br>"
                            ."minimum value is". $num2
                            ;
                        }
                        elseif($num3 > $num2 and $num2 > $num1){
                            echo "maximum val is ". $num3."</br>"
                            ."minimum value is". $num1
                            ;
                        }
                        ?></div>
                          
                      
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