<?php 
$title="Main";
require_once "includes/header.php";
require_once "db/conn.php";//debemos tener también la conexión a la base de datos
$results=$crud->getSpecialties();
?>
<!--Begin content of the index page -->

<!--Form for
    -First Name
    -Last Name
    -Date of birth (Use datepicker)
    -Specialty(Database Admin, Software Developer, Web Administrator, Other)
    -Email Address
    -Contact Number
-->
    <h1 class="text-center">Registration for IT Conference</h1>
    <form method="post" action="success.php"> <!--Note que el método es post o get-->
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname" placeholder="First name">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Bitrth</label>
            <input required type="text" class="form-control" id="dob" name="dob" aria-describedby="dob">
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Expertise</label>
            <select class="form-select" name="specialty" id="specialty">
                <!--Se dejará automática la creación de items de la lista desplegable con la BDD-->
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
                    <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input required type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
            <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
        </div>
        <div class="d-grid gap-2">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
<!--ENd content of the index page -->
<?php require_once "includes/footer.php";?>