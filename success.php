<?php 
$title="Success";
require_once "includes/header.php";
require_once "db/conn.php";
/*Comprobamos que los valores existan*/
if (isset($_POST['submit'])){
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $specialty=$_POST['specialty'];
  $dob=$_POST['dob'];
  $email=$_POST['email'];
  $contact=$_POST['phone'];

  $isSuccess = $crud->insertAttendees($fname,$lname,$dob,$email,$contact,$specialty);

  if ($isSuccess){
    include "includes/successmessage.php";
  }else{
    include "includes/errormessage.php";
  }
}
?>
<!--Begin content of the page -->


<!--This prints out values that were passed to the action page using method="get" -->
<!--<div class="card" style="width: 20rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_GET['firstname']." ".$_GET['lastname']?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_GET['specialty']; ?></h6>
    <p class="card-text">Date of Birth: <?php echo $_GET['dob']; ?></p>
    <p class="card-text">Email Address: <?php echo $_GET['email']; ?></p>
    <p class="card-text">Contact Number: <?php echo $_GET['phone']; ?></p>

  </div>
</div>
-->
<!--This prints out values that were passed to the action page using method="post" -->
<div class="card" style="width: 20rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['firstname']." ".$_POST['lastname']?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['specialty']; ?></h6>
    <p class="card-text">Date of Birth: <?php echo $_POST['dob']; ?></p>
    <p class="card-text">Email Address: <?php echo $_POST['email']; ?></p>
    <p class="card-text">Contact Number: <?php echo $_POST['phone']; ?></p>

  </div>
</div>

<!--
Así se usa el método GET, gracias al nombre de los elementos en el formulario, podemos rescatar los valores
<?php
    /*echo $_GET['firstname'];
    echo $_GET['lastname'];
    echo $_GET['dob'];
    echo $_GET['specialty'];
    echo $_GET['email'];
    echo $_GET['phone'];*/
?>
-->

<!--ENd content of the page -->
<?php require_once "includes/footer.php";?>