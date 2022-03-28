<?php
 $physics=$_POST['physics'];
$chemistry=$_POST['chemistry'];
 $biology=$_POST['biology'];
 $mathematics=$_POST['mathematics'];
 $computer=$_POST['computer'];
 $result = $physics + $chemistry+ $biology + $mathematics + $computer ;
 if($_POST){
     if($result >225){
         $result = "<div class='alert alert-success col-12 text-bold text-light bg-success'> A </div>";
     }elseif($result >= 200 AND $result < 225){
        $result = "<div class='alert alert-success col-12 text-bold text-light bg-success'> B </div>";

    }elseif($result >= 175 AND $result < 200){
        $result = "<div class='alert alert-success col-12 text-bold text-light bg-success'> C </div>";

    }elseif($result >= 150 AND $result < 175){
        $result = "<div class='alert alert-success col-12 text-bold text-light bg-success'> D </div>";

    }elseif($result >= 125 AND $result < 150){
        $result = "<div class='alert alert-success col-12 text-bold text-light bg-success'> E </div>";

    }else{
        $result = "<div class='alert alert-success col-12 text-bold text-light bg-success'> f </div>";

    }
 }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>grade</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-12 text-danger text-center h3 mt-5">Grade</div>
              <div class="col-4 offset-4">
                  <form action="" method="post">
                      <div class="form-group">
                          <input type="number" name="physics" id="num1" class="form-control m-2" placeholder="physics">
                          <input type="number" name="chemistry" id="num2" class="form-control m-2" placeholder="chemistry">
                          <input type="number" name="biology" id="num3" class="form-control m-2" placeholder="biology">
                          <input type="number" name="mathematics" id="num4" class="form-control m-2" placeholder="mathematics">
                          <input type="number" name="computer" id="num5" class="form-control m-2" placeholder="computer">
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