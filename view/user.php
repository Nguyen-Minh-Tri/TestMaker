<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <title>Exam Maker - Users</title>



  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="question-list.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
  <header>
    <!-- Fixed navbar -->
    <?php include "nav.php" ?>
  </header>


  <!-- Begin page content -->
  <main role="main" class="flex-shrink-0">

  <div class="container">
   
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-1">

        </div>
        <div class="col-10">
        <h1 class="mt-5">User List</h1>
      <input class="btn btn-primary" type="button" value="Add User">
      <p></p>
          <table id="example" class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">User ID</th>
                <th scope="col">Username</th>
                <th scope="col">User Role</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>

              <tr>

                <td>1</td>
                <td>NhanPham</td>
                <td>Admin</td>
                <td>
                  <input class="btn btn-primary" type="button" value="Edit">
                  <input class="btn btn-danger" type="button" value="Delete">

                </td>
              </tr>

              <tr>

                <td>2</td>
                <td>ThongKute</td>
                <td>Teacher</td>
                <td>
                  <input class="btn btn-primary" type="button" value="Edit">
                  <input class="btn btn-danger" type="button" value="Delete">


                </td>
              </tr>

            </tbody>
          </table>


        </div>
        
          <div class="col-1">

          </div>
        </div>
      </div>

  </main>

  <footer class="footer mt-auto py-3">
  <?php include "footer.php" ?>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>

</html>