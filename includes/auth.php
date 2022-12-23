<?php

  include('config.php');

  //check is submit button is clicked
  if(isset($_POST['signin']))
  {
      //catches user/password submitted by html form
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      //Check if the htmls form is filled
      if (empty($_POST['username']) || empty ($_POST['password'])){
          $warning = "All field are required!";
          $_SESSION['warning'] = $warning;
      }

      else {

          $sql = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password' LIMIT 1";
          $query_run = mysqli_query($conn, $sql);

          /* Store Returned Data from query into array */
          $user_data = mysqli_fetch_array($query_run);

          /*Get number of Return Rows */
          $count_row = mysqli_num_rows($query_run); 

          if ($count_row == 1) {
        
              $_SESSION['UserID'] = $user_data['user_id'];
              //$_SESSION['FullName'] =$row["first_name"];
              header("location:../user-dashboard");
            } 

          else {
              $error ="Wrong username or password";
              $_SESSION['error'] = $error;
              header("location:../index.php");
             //die(mysqli_error($conn));
            }
      } 
  }
  
