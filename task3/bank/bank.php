<?php
$username=$_POST['username'];
$loanamount=$_POST['loanamount'];
$loanyear=$_POST['loanyear'];
$year=12 ;

if($_POST){
    if($loanyear < 3){
        $k=0.1 ;
        $loan  =  $loanamount  * $k  ; 
        $finalresult = $loan  * $loanyear ;
        $loanafter = $finalresult + $loanamount ;
        $loanmonth = $year * $loanyear ;
        $montheresult = $loanafter / $loanmonth ;
        
    }else{
        $k=0.15 ;
        $loan  =  $loanamount  * $k  ; 
        $finalresult = $loan  * $loanyear ;
        $loanafter = $finalresult + $loanamount ;
        $loanmonth = $year * $loanyear ;
        $montheresult = $loanafter / $loanmonth ;
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <title>Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
          <div class="row">
              <div class="col-12 text-danger text-center h3 mt-5"><h1>Bank</h1></div>
              <div class="col-4 offset-4">
                  <form action="" method="post">
                      <div class="form-group">
                          <h3 class="m-0 p-0 text-primary ">User Name</h3>
                          <input type="text" name="username" value="<?=(isset($_POST['username'])) ? $_POST['username'] : '' ?>" class="form-control m-2" >
                          <h3 class="m-0 p-0 text-primary ">Loan amount</h3>
                           <input type ="number" name="loanamount" value="<?=(isset($_POST['loanamount'])) ? $_POST['loanamount'] : '' ?>" class=" m-2 form-control " >
                           <h3 class="m-0 p-0 text-primary ">Loan years</h3>
                          <input type="number" name="loanyear" value="<?=(isset($_POST['loanyear'])) ? $_POST['loanyear'] : '' ?>"  class="form-control m-2" >
                           
                      </div> 
                      <div class="form-group col-12">
                          <button class="btn btn-dark col-12 mx-2">Submit</button>
                      </div>
                      <div class="alert aler-success  text-dark text-center  ">
                      <?php
                     if(isset( $username ,$finalresult , $loanafter , $montheresult)){
                        echo "user name : ".$username ."<br>";
                        echo "interst rate : ".$finalresult  ."<br>";
                        echo "Loan after intrest : ".$loanafter ."<br>";
                        echo "monthly :".$montheresult ."<br>";
                     }
                     ?> 
                      </div>
                    
                      
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