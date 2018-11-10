<!DOCTYPE html>
<html>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/animate.css">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/scripts.js"></script>
      <script type="text/javascript" src="js/form-scripts.js"></script>
    </head>
    <body>
    <form action="form.php" method="post" id="formform" enctype="multipart/form-data" class="mt-5">
      <fieldset>
      <div class="container-fluid">
            <div class = "row">
         <div class = "col-sm-4" \>
                    <label for="name" class="h4">Имя*:</label>
                <input type="text" class="form-control" id="name" placeholder="Введите имя" required>
                <div class="help-block with-errors"></div>
                    <label for="last_name" class="h4">Фамилия*:</label>
                <input type="text" class="form-control" id="last_name" placeholder="Введите фамилию" required>
                <div class="help-block with-errors"></div>
                    <label for="email" class="h4">E-mail*:</label>
                <input type="email" class="form-control" id="email" placeholder="Введите e-mail " required>
                <div class="help-block with-errors"></div>
                    <label for="message" class="h4 ">Описание*:</label> 
                <textarea id="message" class="form-control" cols="25" rows="5" placeholder="Введите сообщение" required></textarea>
<form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Прикрепить файл:</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
    <input value="Отправить" name="sendMail" type="submit" class="btn btn-success"/>
         </div>
         <div class = "col-sm-8"\>
          <div class="container text-center">
    <h1 class="h3 mb-1"></h1>
    <h2 class="lead mt-0 mb-5"/h2>
    <div id="carousel" class="carousel slide d-inline-block" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="img/snow.jpg" alt="first">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/sport.jpg" alt="second">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/weather.jpg" alt="third">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/winter.jpg" alt="fourth">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/extrim.jpg" alt="fifth">
            </div>
        </div>
    </div>
         </div>
  </fieldset>
  </div>
  </form>
  </body>
</html>
