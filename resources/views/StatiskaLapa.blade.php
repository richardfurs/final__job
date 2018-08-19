<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/StartaLapa.css">

    <style>
      .row {
        margin-top: 5%;
        margin-left: 5%;
        margin-right: 5%;
      }
    </style>

  </head>


  <body>


    <!--Header-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Final job</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Form</a>
          </li>

      </div>
    </nav>


    <!-- Form + Iframe -->
<div class="row">
  <div class="col-sm-4">
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Name</label>
          <input type="text" class="form-control" id="inputName" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Surname</label>
          <input type="text" class="form-control" id="inputSurname" placeholder="Surname">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">E-mail</label>
        <input type="email" class="form-control" id="inputAddress" placeholder="E-mail">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Phone number</label>
        <input type="number" class="form-control" id="inputAddress2" placeholder="Phone number">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <div class="col-sm-8">

        <iframe width="100%" height="296" src="https://www.youtube.com/embed/TInfxe7c7yA"
                  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>

</div>













    <!--JS for Bootstrap-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



  </body>
</html>
