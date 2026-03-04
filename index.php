<?php session_start(); ?>
<!-- Session Transfer -->

<!-- Language -->
<html lang="en">

<!-- Style CSS -->
<link rel="stylesheet" href="style.css">



<?php
// If there is a session
if (isset($_SESSION['result'])) {
    // Show text result
    echo "<div class='result'>" . $_SESSION['result'] . "</div>";
    // If there is a session
    if (isset($_SESSION['last_file'])) {
        // Show Image result
        $path = "uploads/" . $_SESSION['last_file'];
        echo  "<img src='$path'>";
        // Delete Session
        unset($_SESSION['last_file']);
    }
    unset($_SESSION['result']);
}

?>



<!-- Notice to users -->
<h4>Supported formats <span>jpg, jpeg, png, gif</span></h4>
<!-- Form \ Load File - Click -->
<form action="handler.php" method="post" enctype="multipart/form-data">
    <!-- Visible label associated with the button -->
    <label for="bunch" id="label-text">Select File</label>
    <!-- Invisible button -->
    <input type="file" class="file" name="myFile" id="bunch" accept=".jpg, .jpeg, .png, .gif" required>
    <!-- Send result for processing -->
    <input type="submit" class="submit" value="Send">
</form>


<script>
    // Hidden Button
    const fileInput = document.getElementById('bunch');
    // Visible text
    const label = document.getElementById('label-text');
    // If pressed the button
    fileInput.addEventListener('change', function() {
        // If a file is selected, we show the name; if not, we send the standart text.
        if (this.files && this.files.length > 0) {
            label.innerText = "Selected: " + this.files[0].name;
        } else {
            label.innerText = "Select File";
        }
    });
</script>


</html>

