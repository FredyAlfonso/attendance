<?php 
$title="Edit Record";
require_once "includes/header.php";
require_once "db/conn.php";//debemos tener también la conexión a la base de datos
$results=$crud->getSpecialties();//se obtiene todo lo de la tabla de especialidades
if(!isset($_GET['id'])){//revisamos que se haya pasado el parámetro (id)
    include "includes/errormessage.php";
    header ("Location: viewrecords.php");
}else{
    $id=$_GET['id'];
    $attendee=$crud->getAttendeeDetails($id);
?>
<!--Begin content of the page -->

<h1 class="text-center">Edit Record</h1>
    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id']; ?>"/>
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input required type="text" class="form-control" value="<?php echo $attendee['firstname']; ?>" id="firstname" name="firstname" placeholder="First name">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input required type="text" class="form-control" value="<?php echo $attendee['lastname']; ?>" id="lastname" name="lastname" placeholder="Last name">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Bitrth</label>
            <input required type="text" class="form-control" value="<?php echo $attendee['dateofbirth']; ?>" id="dob" name="dob" aria-describedby="dob">
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Expertise</label>
            <select class="form-select" name="specialty" id="specialty">
                <!--Se dejará automática la creación de items de la lista desplegable con la BDD-->
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
                    <option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id']==$attendee['specialty_id']) echo 'selected'; ?>>
                        <?php echo $r['name']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" value="<?php echo $attendee['email']; ?>" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input required type="text" class="form-control" value="<?php echo $attendee['contactnumber']; ?>" id="phone" name="phone" aria-describedby="emailHelp">
            <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
        </div>
        <a href="viewrecords.php" class="btn btn-default">Back to list</a>
        <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
    </form>
<?php } ?>
<!--ENd content of the index page -->
<?php require_once "includes/footer.php";?>