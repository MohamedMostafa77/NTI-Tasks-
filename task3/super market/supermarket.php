<?php
$username= $_POST ['username'];
$city=$_POST['city'];
$products=$_POST['products'];
$delivery=0;
// for($i =0; $i < $products; $i++){
//     echo "<div class='form-row'>
//     <div class='col-4'>
//       <label >product name</label>
//       <input type='text' class='form-control' >
      
//     </div>
//     <div class='col-4'>
//       <label >price</label>
//       <input type='text' class='form-control ' >
      
//     </div>
//     <div class='col-4'>
//     <label >Quantities</label>
//       <input type='text' class='form-control'>
        
      
//     </div>
    
//   </div>";
// };

?>
<!-- <html>
    <form>
    <?php
    // if($i > 0){
    //     echo "
    //     <div class='form-group col-12 mt-2'>
    //                       <button class='btn btn-dark col-12 mx-2'>Submit</button>
    //                   </div>";
    // };
    ?>
</form>
</html> -->




<!doctype html>
<html lang="en">
  <head>
    <title>Super Market</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
          <div class="row">
              <div class="col-12 text-danger text-center h3 mt-5"><h1>Super Market</h1></div>
              <div class="col-4 offset-4">
                  <form action="" method="post">
                      <div class="form-group">
                          <h3 class="m-0 p-0 text-primary ">User Name</h3>
                          <input type="text" name="username" value="<?=(isset($_POST['username'])) ? $_POST['username'] : '' ?>" class="form-control m-2" >
                          <h3 class="m-0 p-0 text-primary ">City</h3>
                          <select name="city"class="form-select" value="<?=(isset($_POST['city'])) ? $_POST['city'] : '' ?>">
                                    <option value="cairo">Cairo</option>
                                    <option value="giza">Giza</option>
                                    <option value="alex">Alex</option>
                                    <option value="other">Other</option>
                                  </select>
                           <h3 class="m-0 p-0 text-primary ">products number</h3>
                          <input type="number" name="products" value="<?=(isset($_POST['products'])) ? $_POST['products'] : '' ?>"  class="form-control m-2" >
                           
                      </div> 
                      <div class="form-group col-12">
                          <button class="btn btn-dark col-12 mx-2">Submit</button>
                      </div>    
                  </form>
                  <?php
                     for($i =0; $i < $products; $i++){
                        echo "<div class='form-row'>
                        <div class='col-4'>
                          <label >product name</label>
                          <input type='text' name='prod' class='form-control' >
                          
                        </div>
                        <div class='col-4'>
                          <label >price</label>
                          <input type='text' name='prod' class='form-control ' >
                          
                        </div>
                        <div class='col-4'>
                        <label >Quantities</label>
                          <input type='text' name='prod' class='form-control'>
                            
                          
                        </div>
                        
                      </div>";
                    };?> 
                  
    <form>
    <?php
    if($i > 0){
        echo "
        <div class='form-group col-12 mt-2'>
                          <button class='btn btn-dark col-12 mx-2'>Submit</button>
                      </div>";
    };
    ?>
</form>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
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