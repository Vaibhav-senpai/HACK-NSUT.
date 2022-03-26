<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .container{
            min-height: 88vh;
        }
         body{
             background: rgb(173, 175, 253);
         }
   </style>
  </head>
  <body>

  <?php include 'header.php';?>
  <?php
  $servername ="localhost";
  $username = "root";
  $password = "";
  $database = "events";
  $conn = mysqli_connect($servername,$username, $password,$database);
  if(!$conn){
      die("Sorry!! THis is the database error");
  }else{
    //   echo("Connection to the database");
  }

 $method = $_SERVER['REQUEST_METHOD'];
 if($method=='POST'){
     $Name = $_POST['name'];
     $email_id = $_POST['email_id'];
     $contact = $_POST['contact'];
     $Event_name = $_POST['Event_name'];
     $description  =$_POST['description'];
 }
 $sql = "INSERT INTO `event` ( `Name`, `email_id`, `contact`, `Event_name`, `description`) VALUES ( 'name', 'email_id', 'contact', 'Event_name', 'description');";
 $result = mysqli_query($conn,$sql);

  ?>
      <div class="container my-3">

      <div class="mb-3">

        <form action="/programmer/partials/contact.php" method="post"></form>
      <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="name" class="form-control" id="Name" name="Name">

  

  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="email_id" name="email_id" placeholder="name@example.com">
  <label for="phone" py-3 style="margin-top: 1rem;">Enter your phone number:</label>
<input type="tel" id="contact" name="contact" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">

</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Event Name</label>
  <textarea class="form-control" id="Event_name" name="Event_name" rows="3"></textarea>
</div>

<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>
  <button type="button" class="btn btn-primary">Submit</button>
  <?php
   
   if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success </strong> Data has been success successfully and ! we will contact you soon..
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}else{
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Error </strong>We are facing some network issue and we will let you in touch once the server get setled .
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}?>
      </div>
     
      </div>

       

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>