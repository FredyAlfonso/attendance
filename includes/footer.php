    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="footer">
        <?php echo "Copyright 20".date("y");?>
    </div>
</div>
<!--bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<!--Jquery para el date picker-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#dob" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "-100: +0",
      dateFormat: "yy-mm-dd"
    });
  } );
</script>
</body>
</html>