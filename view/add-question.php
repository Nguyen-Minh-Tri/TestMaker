<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <title>Exam Maker - Add Question</title>



  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

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
        <div class="col-1"></div>

        <div class="col-10">
          <h1 class="mt-5">Exam Maker Add Question</h1>
          <form>
            <div class="form-row">
              <div class="col">
                <label for="Question">Question ID</label>
                <input class="form-control" id="q-id" name="q-id" rows="3"></input>
                <label for="Question">Content</label>
                <input class="form-control" id="content" name="content" rows="3"></input>
              </div>

            </div>
            <div class="form-row">
              <div class="col">
                <label for="Answer 1">Answer 1</label>
                <input class="form-control" id="answer-1" name="answer-1" rows="3"></input>
              </div>
              <div class="col">
                <label for="Answer 2">Answer 2</label>
                <input class="form-control" id="answer-2" name="answer-2" rows="3"></input>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <label for="Answer 3">Answer 3</label>
                <input class="form-control" id="answer-3" name="answer-3" rows="3"></input>
              </div>
              <div class="col">
                <label for="Answer 4">Answer 4</label>
                <input class="form-control" id="answer-4" name="answer-4" rows="3"></input>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <p>Correct Answer Is:</p>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="correctAnswer" id="correctAnswer" value="A" checked>
                  <label class="form-check-label" for="correctAnswer">
                    A
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="correctAnswer" id="correctAnswer" value="B">
                  <label class="form-check-label" for="correctAnswer">
                    B
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="correctAnswer" id="correctAnswer" value="C">
                  <label class="form-check-label" for="correctAnswer">
                    C
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="correctAnswer" id="correctAnswer" value="D">
                  <label class="form-check-label" for="correctAnswer">
                    D
                  </label>
                </div>
                <p></p>
                <button type="button" class="btn btn-primary btn-lg">Submit</button>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="categorySelect">Category</label>
                  <select class="form-control" id="categorySelect">
                    <option>Category 1</option>
                    <option>Category 2</option>
                  </select>
                </div>

                <p>Difficulty</p>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="difficulty" id="difficulty" value="Easy" checked>
                  <label class="form-check-label" for="difficulty">
                    Easy
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="difficulty" id="difficulty" value="Medium">
                  <label class="form-check-label" for="difficulty">
                    Medium
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="difficulty" id="difficulty" value="Hard">
                  <label class="form-check-label" for="difficulty">
                    Hard
                  </label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
              </div>
              <div class="col">
              </div>
            </div>
          </form>
        </div>

        <div class="col-1"></div>
      </div>
    </div>
  </main>

  <footer class="footer mt-auto py-3">
    <?php include "footer.php" ?>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


</html>