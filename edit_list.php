<?php

include 'database_conn.php';

if (isset($_POST['update'])) {

    $user_sn = $_POST["sn"];
    $topic = $_POST["topic"];
    $description = $_POST["description"];

    $sql = "UPDATE `topics_lists` SET `topic` = '$topic', `description` = '$description' WHERE `sn` = '$user_sn'";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "Details has been edited.";

        header('crud_home.php');
    } else {
        echo 'Detail is not updated';
    }
}

if (isset($_GET['sn'])) {
    $user_sn = $_GET['sn'];

    $sql = "SELECT * FROM `topics_lists` WHERE `sn`='$user_sn' ";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $topic = $row["topic"];
            $description = $row["description"];
        }
?>
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <title>CRUD Operation Practice</title>
        </head>

        <div class="container my-5">
            <h2>Add Appointments</h2>
            <form action="../crud/list_input/to_do_list.php" method="post">
                <div class="mb-2">
                    <label for="exampleInputTopic" class="form-label" style="font-family: bold ;">Topics</label>
                    <input type="text" class="form-control" id="exampleInputTopic" name="topic" value="<?php echo $topic ?>" style="height: 50px; width: 50%; border-color:blue; " aria-describedby="topicHelp" require>
                    <input type="hidden" name="sn" value="<?php echo $sn; ?>">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputdescription" class="form-label" style="font-family: bold ;">Description</label>
                    <input type="text" class="form-control" id="exampleInputdescription" name="description" style="height: 80px; width: 50%;border-color:blue; " value="<?php echo $description ?>" require>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Confirm</button>
            </form>
        </div>

<?php
    } else {

        header("location:crud_home.php");
    }
}
?>