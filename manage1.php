<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <link href="bootstrap.min.css" rel="stylesheet">

    </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">LMS</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Log out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Main Page <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Manage
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  View Data
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Upload
                </a>
              </li>
            </ul>
        </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Manage your data</h1>
          </div>
          <h3><center>Student Records</center></h3>
    
          <form action="manage.php" method="POST">
          <table style="width:100%;" >
              <tr>
                  <td scope="col"><b>NAME</td>
                  <th colspan="2"><input type="text" name="uname"></th>
              </tr>
              <tr>
              <td scope="col"><b>EMAIL</td>
                  <th colspan="2"> <input type="text" name="email"></th>
              </tr>
             
              <tr>
              <td scope="col"><b>PASSWORD</td>
              <th colspan="2"> <input type="text" name="pass"></th>
              </tr> 
              <br>
              <tr>
                  <td><input type="submit" class="btn btn-primary" name="add" value="ADD NEW ACCOUNT"></td>
                  <td><input type="submit" class="btn btn-danger" name="delete" value="DELETE ACCOUNT"></td>
                  <td><input type="submit" name="update" class="btn btn-success" value="UPDATE ACCOUNT"></td>
      
      
              </tr>    
          </table>
            
          </form>
          

          <table style="width:100%"class="table table-dark">
              <th>NAME</th>
              <th>EMAIL  </th>
              <th> PASSWORDS</th>     
      
      <?php
           $servername="localhost";
           $username="root";
           $password="";
           $db="project";
           $conn= mysqli_connect($servername,$username,$password,$db);
      
          //  if(!$conn)
          //  {
          //     echo 'not connected';
          //  }
          //  else
          //  {
          //    echo ' connected';
          //  }
           
      
           if(isset($_POST['add']))
           {
               $id= $_POST['uname'];
               $fname= $_POST['email'];
               $lname= $_POST['pass'];
               $qry = "INSERT INTO users (uname,email,pass) VALUES('$id','$fname','$lname')";
               $data1 =mysqli_query($conn, $qry);
                                           
                                                       //here check condition
               if(!$data1)
           {
               echo 'Record Not added';
               }
               else
               {
                   echo 'Record  added successfully';
                   }
           
               $qry = "SELECT * FROM users";
      
               $data =mysqli_query($conn, $qry);
           while($row=mysqli_fetch_array($data))
           {
               echo '<tr>';
               echo '<td>'.$row['uname'].'</td>';
               echo '<td>'.$row['email'].'</td>';
               echo '<td>'.$row['pass'].'</td>';
           }} 
                                              #code for update
           
          if(isset($_POST['update']))
           {
              $id= $_POST['uname'];
              $fname= $_POST['email'];
              $lname= $_POST['pass'];
              $qry = $qry = "UPDATE users SET email = '$fname' , pass ='$lname' where uname = $id";
              $data1 =mysqli_query($conn, $qry);
          if(!$data1)
          {
            echo 'Record Not Updated';
            }
            else
            {
              echo 'Record  Updated successfully';
              }
          
            $qry = "SELECT * FROM users";
          
              $data =mysqli_query($conn, $qry);
              while($row=mysqli_fetch_array($data))
           {
               echo '<tr>';
               echo '<td>'.$row['uname'].'</td>';
               echo '<td>'.$row['email'].'</td>';
               echo '<td>'.$row['pass'].'</td>';
                   }}
                          // code for delete 
                          if(isset($_POST['delete']))
                          {
                              $id= $_POST['uname'];
                              
                              $qry = "DELETE FROM users where uname = $id";
                              $data1 =mysqli_query($conn, $qry);
                          if(!$data1)
                          {
                              echo 'Record Not Deleted';
                              }
                              else
                              {
                                  echo 'Record  Deleted successfully';
                                  }
                          
                              $qry = "SELECT * FROM users";
                          
                          $data =mysqli_query($conn, $qry);
                          while($row=mysqli_fetch_array($data))
                          {
                          echo '<tr>';
                          echo '<td>'.$row['uname'].'</td>';
                          echo '<td>'.$row['email'].'</td>';
                          echo '<td>'.$row['pass'].'</td>';
                          }}
               
               
          
          ?>
      
      </center>
      </table>
      

          
        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

</body>
</html>
