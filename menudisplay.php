<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="A food site that contains the most famous international dishes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Security section web team">
    <meta name="keywords" content=" Yummy food sandwich drink Meat chicken fish hot dog pizza ice cream chocolate cake">
    <title>Yummy</title>
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
</head>
<body>

    <section class="menu_food">
        <div class="container">
            <a href="dashboard.php"> <img src="image/logo.png" class="logo_card"></a>
            <h1>Menu <span class="menu_food_text">Food</span></h1>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                   
                    // Display the menu items
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<th scope="row">' . $row['name'] . '</th>';
                            echo '<td>' . $row['image_url'] . '</td>';
                            echo '<td>' . $row['price'] . '</td>';
                            echo '<td>' . $row['description'] . '</td>';
                            echo '<td>';
                            echo '<form method="post">';
                            echo '<input type="hidden" name="id" value="' . $row['id'] . '">'; // Add this line to pass the ID value
                            echo '<button  type="submit" name="delete1">
                        <i class="delete fa-solid fa-trash-can"></i>
                    </button>';
                            echo '</form>';
                            echo '</td>';
                            echo '</tr>';
                            $id = $row['id'];
                        }
                    }
                    
            </table>
            <div class="row pt-5">

                <div class="col-md-6">
                    <form method="post">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Order Name</label>
                            <input name="name" type="text" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Description</label>
                            <input name="description" type="text" class="form-control" id="formGroupExampleInput2">
                        </div>
                        <button name="insert" class="menu_food_button">Insert new food</button>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Image</label>
                        <input name="image" type="text" class="form-control" id="formGroupExampleInput2">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Price</label>
                        <input name="price" type="number" class="form-control" id="formGroupExampleInput2">
                    </div>
                    </form>
                </div>

               

            </div>
        </div>


    </section>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>