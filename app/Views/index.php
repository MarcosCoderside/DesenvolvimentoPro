<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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
            <a class="nav-link text-light" style="font-weight:bold" href="<?= 'index' ?>">Neurotech</a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-light" style="font-weight:bold" href="<?= 'marketing' ?>">Created Marketing</a>
        </li>
    </ul>
        <div class="row">
            <div class="col-6">
            <?php foreach($results as $row) : ?>
                <div class="card bg-light border border-solid mb-4 mt-4">
                    <div class="header text-uppercase bg-dark">
                           <h1 class="text-light text-center"><?= $title; ?></h1>
                    </div>
                    <div class="card-body" style="background-color:#FFF;width:75%;margin-left:100px;box-shadow:1px 1px 10px #000;transform:scale(0.9)">
                        <h2 class="h2 border border-dark p-2"><?= $row['NOME'];?></h2>
                        <h4 class="h4 border border-dark p-2"><?= $row['SOBRENOME'];?></h4>
                        <h4 class="h4 border border-dark p-2"><?= $row['SALARY'];?></h4>
                        <h4 class="h4 border border-dark p-2"><?= $row['FUNCAO']; ?></h4>
                    </div>
                </div>
            <?php endforeach ; ?>
            </div>

            <div class="col-6" style="margin-top:24px;">
            <h1 class="text-light bg-dark text-center" style="padding:8px;"><?= $name; ?></h1>            
                <form method="post" action="addData" class="form bg-light" style="padding:8px;">

                    <div class="form-group">
                        <label class="text-dark" style="font-weight:700" for="">NOME</label>
                        <input type="text" name="NOME" class="form-control">
                    </div>

                    
                    <div class="form-group">
                        <label class="text-dark" style="font-weight:700" for="">SOBRENOME</label>
                        <input type="text" name="SOBRENOME" class="form-control">
                    </div>

                    
                    <div class="form-group">
                        <label class="text-dark" style="font-weight:700" for="">SALARY</label>
                        <input type="text" name="SALARY" class="form-control">
                    </div>

                    
                    <div class="form-group">
                        <label class="text-dark" style="font-weight:700" for="">FUNÇÃO</label>
                        <input type="text" name="FUNCAO" class="form-control">
                    </div>
                
                    <input type="submit" value="Save" class="btn btn-success">
                </form>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>