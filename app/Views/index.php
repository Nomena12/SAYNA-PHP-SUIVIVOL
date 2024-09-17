<?php 
include('config/app.php');
include('config/db.php');
include('connexion.php');
include('html/header.php');
include('fct/item.php');
include('fct/request.php');


?>


        <div class="row">
          <div class="col-12">
      <div class="card" style="position: relative; left: 0px; top: 0px;">

             
              <!-- /.card-header -->
              <div class="card-body">
                <!-- formulaire --> 
                <form action='addItem.php' method='POST'>
                <div class="input-group input-group-sm">
                  
                        <input type="text" class="form-control" name='intitule'>
                            <span class="input-group-append">
                      <button type="submit" class="btn btn-info btn-flat">+</button>
                            </span>
                            
                </div>
                </form>

                <!-- list --> 
                <ul class="todo-list " data-widget="todo-list">
                  
                 <?php
                
                       // displayItem($key,$item);
                       $query = 'SELECT * FROM todo';
                       $stmt = $pdo->query($query);

                       while($item = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo displayItem($item);
                       }
                  ?>
                </ul>
              </div>
              <!-- /.card-body -->
             
            </div>
            </div>
     
<?php
include('html/footer.php');