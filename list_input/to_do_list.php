<?php
include('../database_conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $topic = $_POST["topic"];
    $description = $_POST["description"];

    $sql = "INSERT INTO `topics_lists` (`topic`, `description`) VALUES ('$topic', '$description')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Recod inserted Succesfully";
        header('location:../crud_home.php');
    } else {
        echo "Insertion Failed";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD Operation Practice</title>
</head>

<body>

    <div class="container my-5">
        <h2>Add Appointments</h2>
        <form action="to_do_list.php" method="post">
            <div class="mb-3">
                <label for="exampleInputTopic" class="form-label" style="font-family: bold ;">Topics</label>
                <input type="text" class="form-control" id="exampleInputTopic" name="topic" aria-describedby="topicHelp" style="height: 50px; width: 50%; border-color:blue; " required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputdescription" class="form-label" style="font-family: bold ;">Description</label>
                <input type="text" class="form-control" id="exampleInputdescription" name="description" style="height: 80px; width: 50%;border-color:blue; " required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Confirm</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>

</html>