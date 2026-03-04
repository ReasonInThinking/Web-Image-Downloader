<?php session_start();

// if you clicked the "Send" button
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Checking for the presence of the "File" input
    if (isset($_FILES['myFile'])) {

        // Variable for the file input
        $myFile = $_FILES['myFile'];
        // If there is a miss, it will display the error number
        if ($myFile['error'] !== 0) {
            $_SESSION['result'] = "System error code: " . $myFile['error'];
            header("Location: index.php");
            exit;
        }
        // Checking a file to make sure it's actually an image
        if (!getimagesize($myFile['tmp_name'])) {
            $_SESSION['result'] = "Error: This is not a real image!";
            header("Location: index.php");
            exit;
        }


        // The directory where the files will be uploaded
        $directoryForFiles = __DIR__ . "/uploads/";
        // Automatically create a directory if there is no directory "uploads"
        if (!is_dir($directoryForFiles)) {
            mkdir($directoryForFiles, 0775, true);
        }

        // Getting the file format
        $format = pathinfo($myFile['name'], PATHINFO_EXTENSION);
        // Download only these formats files
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        // Throw an error if the format is not suitable
        if (!in_array(strtolower($format), $allowed)) {
            $_SESSION['result'] = "Error: " . strtolower($format) . " is not supported.";
            header("Location: index.php");
            exit;
        }

        // 1mb   
        $maxSize = 1 * 1024 * 1024;
        // If the file is larger than 1 megabyte, there is an error.
        if ($myFile['size'] > $maxSize) {
            $_SESSION['result'] = "Error: The file is larger than one megabytes!";
            header("Location: index.php");
            exit;
        }


        // Generating a unique filename based on microseconds
        $fileName = str_replace('.', '', microtime(true)) . "." . $format;

        // Full path - folder plus downloaded file
        $fullPath = $directoryForFiles . $fileName;

        // Send file from the temporary directory to the permantent "uploads" directory
        if (move_uploaded_file($myFile['tmp_name'], $fullPath)) {
            // Display success and file size on screen
            $sizeMB = round($myFile['size'] / 1024 / 1024, 2);
            $_SESSION['result'] = "Successful download | " . "File weight: " . $sizeMB . "MB";
            $_SESSION['last_file'] = $fileName;
        }
        // If an error occurred while transferring the file.
        else {
            $_SESSION['result'] = "Error, sorry";
        }
    }

    header("Location: index.php");
    exit;
}
