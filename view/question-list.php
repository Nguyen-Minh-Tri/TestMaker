<?php
include "../controller/questionlist.php";
?>
<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <title>Exam Maker - Question List</title>



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
  <style>
    <?php include "question-list.css" ?>
  </style>
</head>

<body class="d-flex flex-column h-100">
  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Exam Maker</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Questions<span class="sr-only">(current)</span></a>
          </li>

        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wellcome <?php echo $_SESSION['username'] ?></a>
            <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Account Settings</a>
              <a class="dropdown-item" href="../TestMaker">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>


  <!-- Begin page content -->
  <main role="main" class="flex-shrink-0">
    <div class="container"></div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-1">

        </div>
        <div class="col-7">
          <h1 class="mt-5">Exam Maker Question List</h1>

          <?php
          $url = 'http://' . $_SERVER['SERVER_NAME'] . '/TestMaker/add-question';
          echo '<a class="btn btn-primary" href=' . $url . '>Add Question<span class="sr-only">(current)</span></a>';
          ?>


          <p></p>
          <table id="example" class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Question ID</th>
                <th scope="col">Content</th>
                <th scope="col">Category</th>
                <th scope="col">Difficulty</th>
                <th scope="col">Author</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>

                  <?php   // LOOP TILL END OF DATA  
                  for ($x = 0; $x < count($listQ); $x++) {
                    $question = $listQ[$x];
                    if ($question[0] == ''){
                      $x = count($listQ);
                    }
                    else{
<<<<<<< HEAD
                      $contents = 
                        '<tr> 
                          <td>'.$question[9].'</td> 
                          <td>'.$question[0].'</td> 
                          <td>'.$question[7].'</td> 
                          <td>'.$question[6].'</td> 
                          <td>'.$question[8].'</td> 
                          <td>
                            <input class="btn btn-primary" type="button" value="Edit">
                            <input class="btn btn-danger" type="button" value="Delete">
                            <input class="btn btn-success" type="button" value="Add">
                            <input class="btn btn-warning" type="button" value="Remove">
                          </td>
                        </tr> ';
                      echo $contents;
                    }
                  } 
                ?>
=======
                  ?> 
                  <tr> 
                      <!--FETCHING DATA FROM EACH
                          ROW OF EVERY COLUMN-->
                      <td><?php echo $question[9];?></td> 
                      <td><?php echo $question[0];?></td> 
                      <td><?php echo $question[7];?></td> 
                      <td><?php echo $question[6];?></td> 
                      <td><?php echo $question[8];?></td> 
                      <td>
                      <form method="get">
                      <button type="submit" class="btn btn-primary" formaction= <?php echo "../TestMaker/controller/edit-question?id=" . $question[9] ?>value="Edit">
                      <input class="btn btn-danger" type="button" value="Delete">
                      <input class="btn btn-success" type="button" value="Add">
                      <input class="btn btn-warning" type="button" value="Remove">
                    </form>
                  </td>
                  </tr> 
                  <?php 
                        }
                      } 
                  ?>
>>>>>>> d379e7aac7b761647cc338283d78bfef0e0fbeaf

                  </td>
                </tr>
              <?php
              }
              ?>


            </tbody>
          </table>


        </div>
        <div class="col-3">
          <div class="card" style="width: 18rem;">

            <div class="card-body">
              <h5 class="card-title">Make Random Exam</h5>


              <form method="POST" action="questions">
                <div class="form-group">
                  <label for="exampleFormControlInput1">No. of Questions</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="pagenumsize">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Category</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="category">
                    <option>All Category</option>
                    <option>Math</option>
                    <option>Physical</option>
                    <option>English</option>
                    <option>Biology</option>
                    <option>Geography</option>
                  </select>
                </div>

                
                  <div class="form-group">
                    <p>Difficulty</p>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="difficulty" id="difficulty" value="All" checked>
                      <label class="form-check-label" for="difficulty">
                        All
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="difficulty" id="difficulty" value="easy">
                      <label class="form-check-label" for="difficulty">
                        Easy
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="difficulty" id="difficulty" value="medium">
                      <label class="form-check-label" for="difficulty">
                        Medium
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="difficulty" id="difficulty" value="hard">
                      <label class="form-check-label" for="difficulty">
                        Hard
                      </label>
                    </div>
                  </div>
                


                <input type="submit" value="Make" name="submit">
              </form>
            
            </div>
          </div>
          <div class="col-1">
          </div>
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