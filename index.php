<? 
require_once __DIR__.'/incs/data.php';
require_once __DIR__.'/incs/functions.php';


if(!empty($_POST)){
    debug($_POST);
    $fields = load ($fields);
    debug($fields);
    if($errors = validate($fields)){
        debug($errors);
    }else{
        echo "Ok";
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="address">Адрес</label>
                        <input type="text" name="address" class="form-control" id="address">
                    </div>

                    <div class="form-group">
                        <label for="address">Телефон</label>
                        <input type="text" name="phone" class="form-control" id="phone">
                    </div>

                    <div class="form-group">
                        <label for="comment">Комментарий</label>
                        <textarea  name="comment" class="form-control" id="comment" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn-btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
<? ?>