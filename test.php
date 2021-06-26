<?php 
session_start();

?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\bootstrap.min.css" >
     <link rel="stylesheet" href="css\all.css" >
     <link rel="stylesheet" href="css\mycss2.css" >
     <link rel="stylesheet" href="css\mycss1.css" >
    <title>Hello, world!</title>
  </head>

<style>
.table3 {
  width: 100%;
  margin-bottom: $spacer;
  color: $table-color;
  background-color: $table-bg; // Reset for nesting within parents with `background-color`.

}
</style>
  <body >

      

 





<nav class="navbar navbar-expand-lg navbar-dark bg-dark main" style=" margin-right: 0; margin-left: 0 ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">اهلنا الشعب</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="4.php">انشاء حساب  <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="3.php"> تسجيل الدخول</a>
      </li>
     
    </ul>
 
  </div>
</nav>



<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
    Editable table
  </h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"
        ><a href="#!" class="text-success"
          ><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a
      ></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Person Name</th>
            <th class="text-center">Age</th>
            <th class="text-center">Company Name</th>
            <th class="text-center">Country</th>
            <th class="text-center">City</th>
            <th class="text-center">Sort</th>
            <th class="text-center">Remove</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
            <td class="pt-3-half" contenteditable="true">30</td>
            <td class="pt-3-half" contenteditable="true">Deepends</td>
            <td class="pt-3-half" contenteditable="true">Spain</td>
            <td class="pt-3-half" contenteditable="true">Madrid</td>
            <td class="pt-3-half">
              <span class="table-up"
                ><a href="#!" class="indigo-text"
                  ><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a
              ></span>
              <span class="table-down"
                ><a href="#!" class="indigo-text"
                  ><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a
              ></span>
            </td>
            <td>
              <span class="table-remove"
                ><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">
                  Remove
                </button></span
              >
            </td>
          </tr>
          <!-- This is our clonable table line -->
          <tr>
            <td class="pt-3-half" contenteditable="true">Guerra Cortez</td>
            <td class="pt-3-half" contenteditable="true">45</td>
            <td class="pt-3-half" contenteditable="true">Insectus</td>
            <td class="pt-3-half" contenteditable="true">USA</td>
            <td class="pt-3-half" contenteditable="true">San Francisco</td>
            <td class="pt-3-half">
              <span class="table-up"
                ><a href="#!" class="indigo-text"
                  ><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a
              ></span>
              <span class="table-down"
                ><a href="#!" class="indigo-text"
                  ><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a
              ></span>
            </td>
            <td>
              <span class="table-remove"
                ><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">
                  Remove
                </button></span
              >
            </td>
          </tr>
          <!-- This is our clonable table line -->
          <tr>
            <td class="pt-3-half" contenteditable="true">Guadalupe House</td>
            <td class="pt-3-half" contenteditable="true">26</td>
            <td class="pt-3-half" contenteditable="true">Isotronic</td>
            <td class="pt-3-half" contenteditable="true">Germany</td>
            <td class="pt-3-half" contenteditable="true">Frankfurt am Main</td>
            <td class="pt-3-half">
              <span class="table-up"
                ><a href="#!" class="indigo-text"
                  ><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a
              ></span>
              <span class="table-down"
                ><a href="#!" class="indigo-text"
                  ><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a
              ></span>
            </td>
            <td>
              <span class="table-remove"
                ><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">
                  Remove
                </button></span
              >
            </td>
          </tr>
          <!-- This is our clonable table line -->
          <tr class="hide">
            <td class="pt-3-half" contenteditable="true">Elisa Gallagher</td>
            <td class="pt-3-half" contenteditable="true">31</td>
            <td class="pt-3-half" contenteditable="true">Portica</td>
            <td class="pt-3-half" contenteditable="true">United Kingdom</td>
            <td class="pt-3-half" contenteditable="true">London</td>
            <td class="pt-3-half">
              <span class="table-up"
                ><a href="#!" class="indigo-text"
                  ><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a
              ></span>
              <span class="table-down"
                ><a href="#!" class="indigo-text"
                  ><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a
              ></span>
            </td>
            <td>
              <span class="table-remove"
                ><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">
                  Remove
                </button></span
              >
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Editable

</footer>


  </body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/fontawesome.min.js" ></script>
    <link rel="stylesheet" href="css\bootstrap.min.css" >
     <link rel="stylesheet" href="css\all.css" >
     <link rel="stylesheet" href="css\mycss2.css" >
     <link rel="stylesheet" href="css\mycss1.css" >
   
</html>