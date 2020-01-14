<!doctype html>
<html lang="en">
  <head>
    <title>Marketing</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
      <div class="container-fluid">
        <ul class="nav bg-dark">
            <li class="nav-item">
                <a class="nav-link text-light" href="<?= 'index' ?>">Neurotech</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-light" href="<?= 'marketing' ?>">Created Marketing</a>
            </li>
        </ul>


        <div class="row">
            <div class="col" style="margin-top:24px;">
                
            <?php foreach($results as $row) : ?>
                <div class="card" style="margin-bottom:50px;">
                    <div class="card-header bg-dark text-center text-light" style="font-weight:700">
                       <h1 class="h1"><?= $title; ?></h1>
                    </div>
                    <div class="card-body bg-light" style="height:190px;padding:40px;transform:scale(0.9);width:75%;margin-left:75px;box-shadow:2px 2px 10px #000">
                        <h4 class="h4"><?= $row['NOME'];?></h1>
                        <h5 class="h5"><?= $row['AGE'];?></h4>
                        <h5 class="h5"><?= $row['SALARY'];?></h4>
                    </div>
                </div>
            <?php endforeach ;?>
            </div>

            <div class="col" style="margin-top:24px;">
                
                <div class="header bg-dark text-light text-center" style="padding:10px;">
                   <h1 class="h1"><?= $form; ?></h1>                
                </div>

                <form action="addMaketing" method="post" class="form bg-dark p-4">
                    <div class="form-group">
                        <label class="text-light" style="font-weight:700;" for="">NOME</label>
                        <input type="text" name="NOME" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="text-light" style="font-weight:700;" for="">AGE</label>
                        <input type="text" name="AGE" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="text-light" style="font-weight:700;" for="">SALARY</label>
                        <input type="text" name="SALARY" class="form-control">
                    </div>

                <input type="submit" class="btn btn-success" style="margin-top:20px;">

                </form>
            </div>
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>