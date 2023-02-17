<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add produect</title>
</head>

<body>

    <?php

    if (isset($_POST["btn"])) {

        $my_title = $_POST["title"];
        $my_string = $_POST["string"];
        $my_money = $_POST["money"];
        $my_pedaction_money = $_POST["pedaction_money"];
        $my_image1 = basename($_FILES["image1"]["name"]);
        $my_image2 = basename($_FILES["image2"]["name"]);
        $my_image3 = basename($_FILES["image3"]["name"]);
        $my_image4 = basename($_FILES["image4"]["name"]);

        $data = new mysqli("localhost", "root", "", "data_produect");

        $table = $data->query("UPDATE `table_prodecut` SET `title`='$my_title',`string`='$my_string',`money`='$my_money',`pedaction_money`='$my_pedaction_money',`image1`='$my_image1',`image2`='$my_image2',`image3`='$my_image3',`image4`='$my_image4'");

        if ($table > 0) {
            print "the save produect" . "<br>" . "<a href='proejct_product.php'>click pack page</a>";
        } else {
            print "opse not save produect";
        }
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="Enter The Title" name="title" required>
        <br>
        <br>
        <input type="text" placeholder="Enter The String" name="string" required>
        <br>
        <br>
        <input type="text" placeholder="Enter The Money" name="money" required>
        <br>
        <br>
        <input type="text" placeholder="Enter The pedaction Money" name="pedaction_money">
        <br>
        <br>
        <input type="file" name="image1" required>
        <br>
        <br>
        <input type="file" name="image2" required>
        <br>
        <br>
        <input type="file" name="image3" required>
        <br>
        <br>
        <input type="file" name="image4" required>
        <br>
        <br>
        <input type="submit" value="add produect" name="btn">
    </form>
</body>

</html>