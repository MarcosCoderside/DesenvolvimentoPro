<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  
  
    <script type="text/javascript">
        $(document).ready(function(){
            $("#table").DataTable({
                processing: true;
                serverSide: true;
                ajax: "<?php echo site_url("MainController/ajax")?>";
            });
        });
    </script>

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
            <li class="nav-item">
                <a class="nav-link text-light" style="font-weight:bold" href="<?='sales'?>">Created Vendas</a>
            </li>
        </ul>
        <div class="row">
            <div class="col" style="margin-top:40px;">
                <table class="table bg-dark text-light" id="table">
                    <thead>
                        <th>ID</th>
                        <th>PEAPLES</th>
                        <th>REGION</th>
                        <th>AUTOR</th>
                    </thead>
                <?php foreach($results as $row) : ?>
                    <tbody>
                      <td><?= $row['PEAPLES'];?></td>
                      <td><?= $row['REGION'];?></td>
                      <td><?= $row['LANGUAGES'];?></td>
                      <td><?= $row['state'];?></td>
                    </tbody>
                <?php endforeach ; ?>
                </table>
            </div>
            <div class="col">
                    <div class="form">
                        <form action="" method="post"> 
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" class="form-control">
                            </div> 
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" class="form-control">
                            </div>
                        </form>
                    
                    </div>
            </div>
        </div>
    </div>
    </body>
</html>