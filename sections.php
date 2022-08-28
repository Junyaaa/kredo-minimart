<?php
    require_once 'connection.php';

    function createSection($title){
        $conn = db_connect();

        //query string
        $sql = "INSERT INTO sections(title) VALUES('$title')";

        //execute the query
        if ($conn->query($sql)) {
            header("refresh: 0");
        }else {
            die("Error adding new product to the section " . $conn->error);
        }
    }

    function getAllSections(){
        $conn = db_connect();

        //Query String
        $sql = "SELECT * FROM sections";
        if ($result = $conn->query($sql)) {
            return $result;
        }else {
            die("Error retrieving records " . $conn->error);
        }
    }

    if (isset($_POST['btn_add'])) {
        $title = $_POST['title'];

        createSection($title);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sections</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <?php
         include 'main-nav.php';
    ?>
    <main class="my-5">
        <div class="card w-25 mx-auto mb-5">
            <div class="card-header bg-info text-white">
                <h2 class="card-title h4 mb-0">Add New Section</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="title" class="form-label small">Title</label>
                    <input type="text" name="title" id="title" class="form-control mb-4" required autofocus>

                    <a href="products.php" class="btn btn-outline-secondary">Cancel</a>
                    <button type="submit" class="btn btn-info px-5" name="btn_add">ADD</button>
                </form>
            </div>
        </div>
        <div class="w-25 mx-auto">
            <h2 clas="h3 text-muted">Section List</h2>
            <table class="table-hover mt-4">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       $sections_result = getAllSections();
                        while ($sections_row = $sections_result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $sections_row['id'] ?></td>
                            <td><?= $sections_row['title']?></td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>