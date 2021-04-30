<?php 
$title="View Record";
require_once "includes/header.php";
require_once "db/conn.php";//debemos tener también la conexión a la base de datos
if (!isset($_GET['id'])){
    include "includes/errormessage.php";
    header ("Location: viewrecords.php");
}else{
    $id=$_GET['id'];
    $result=$crud->getAttendeeDetails($id);
?>
<!--Begin content of the page -->
<div class="card" style="width: 20rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $result['firstname']." ".$result['lastname']?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['name']; ?></h6>
    <p class="card-text">Date of Birth: <?php echo $result['dateofbirth']; ?></p>
    <p class="card-text">Email Address: <?php echo $result['email']; ?></p>
    <p class="card-text">Contact Number: <?php echo $result['contactnumber']; ?></p>

  </div>
</div>
<br/>
<a href="viewrecords.php" class="btn btn-primary">Back to list</a>
<a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
<a onclick="return confirm('Are you sure you want to delete this record?')"; href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>

<?php } ?>
<!--ENd content of the index page -->
<?php require_once "includes/footer.php";?>