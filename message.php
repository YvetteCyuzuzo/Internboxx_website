
    <?php
    $conn = mysqli_connect("localhost", "root", "", "internships");

    if ($conn === false) {
        die("ERROR: Could not connect."
            . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];



    // database connection

    $sql = "INSERT INTO messages VALUES ('$name','$email','$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Your message has been successfully sent! $name')</script>";
        include 'index.php';
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    mysqli_close($conn);


    ?>
