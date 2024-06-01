<?php 
include "./conn.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$new_record_add = ''; // Initialize the success message variable


// Check if the messages are passed as query parameters
if (isset($_GET['new_record_add'])) {
    // Set the success message
    $new_record_add = '<div class="alert alert-success  alert-dismissible fade show" role="alert">
            <strong></strong> ' . $_GET['new_record_add'] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}
?>
<!-- Local_Database_Updater_With_MsgBox -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <br>
    <br>
    <br>
    <br>
      <div class="d-flex justify-content-center">
                <div class="p-5">
                <?php echo $new_record_add; ?>
                </div>
                </div>
</body>
</html>