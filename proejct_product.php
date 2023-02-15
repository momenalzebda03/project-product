<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap7/css7/all.min.css">
    <link rel="stylesheet" href="bootstrap7/css7/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap7/css7/project_product.css">
    <title>project product</title>
</head>

<body>
    <!-- start header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="div_notflex">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">sneakers</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">collections</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">contact</a>
                    </li>
                </ul>
            </div>
            <div class="div_icon_image">
                <a href="sginup.php" style="color: black; text-decoration: none;">
                    <i class="fa-solid fa-plus icon"></i>
                </a>
                <img src="image7/106588898.jfif" alt="">
            </div>
        </div>
    </nav>
    <!-- end header -->
    <!-- start main -->
    <div class="container">
        <div class="container1" id="container1">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-7">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
                        <i class="fas fa-arrow-left my_icon" aria-hidden="true"></i>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
                        <i class="fas fa-arrow-right my_icon" aria-hidden="true"></i>
                    </button>
                    <div class="click_block" id="click_block"></div>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <?php

                                $data = new mysqli("localhost", "root", "", "data_produect");

                                $table = $data->query("select * from table_prodecut");

                                if ($table->num_rows > 0) {
                                    for ($row = 0; $row = $table->fetch_assoc(); $row++) {
                                        print "<img src='image7/" . $row["image1"] . "'>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="carousel-item">
                                <?php

                                $table = $data->query("select * from table_prodecut");

                                if ($table->num_rows > 0) {
                                    for ($row = 0; $row = $table->fetch_assoc(); $row++) {
                                        print "<img src='image7/" . $row["image2"] . "'>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="carousel-item">
                                <?php

                                $table = $data->query("select * from table_prodecut");

                                if ($table->num_rows > 0) {
                                    for ($row = 0; $row = $table->fetch_assoc(); $row++) {
                                        print "<img src='image7/" . $row["image3"] . "'>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="carousel-item">
                                <?php

                                $table = $data->query("select * from table_prodecut");

                                if ($table->num_rows > 0) {
                                    for ($row = 0; $row = $table->fetch_assoc(); $row++) {
                                        print "<img src='image7/" . $row["image4"] . "'>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div id="carouselExampleSlidesOnly" class="carousel slide div_none" data-bs-ride="carousel">
                        <div class="carousel-inner" style="height: 180px;">
                            <div class="div_flex">
                                <div class="div_box">
                                    <?php

                                    $table = $data->query("select * from table_prodecut");

                                    if ($table->num_rows > 0) {
                                        for ($row = 0; $row = $table->fetch_assoc(); $row++) {
                                            print "<img class='my_image' src='image7/" . $row["image1"] . "'>";
                                        }
                                    }
                                    ?>
                                    <div class="carousel-item active">
                                        <div class="div_white"></div>
                                    </div>
                                </div>
                                <div class="div_box">
                                    <?php

                                    $table = $data->query("select * from table_prodecut");

                                    if ($table->num_rows > 0) {
                                        for ($row = 0; $row = $table->fetch_assoc(); $row++) {
                                            print "<img src='image7/" . $row["image2"] . "'>";
                                        }
                                    }
                                    ?>
                                    <div class="carousel-item">
                                        <div class="div_white"></div>
                                    </div>
                                </div>
                                <div class="div_box">
                                    <?php

                                    $table = $data->query("select * from table_prodecut");

                                    if ($table->num_rows > 0) {
                                        for ($row = 0; $row = $table->fetch_assoc(); $row++) {
                                            print "<img src='image7/" . $row["image3"] . "'>";
                                        }
                                    }
                                    ?>
                                    <div class="carousel-item">
                                        <div class="div_white"></div>
                                    </div>
                                </div>
                                <div class="div_box">
                                    <?php

                                    $table = $data->query("select * from table_prodecut");

                                    if ($table->num_rows > 0) {
                                        for ($row = 0; $row = $table->fetch_assoc(); $row++) {
                                            print "<img src='image7/" . $row["image4"] . "'>";
                                        }
                                    }
                                    ?>
                                    <div class="carousel-item">
                                        <div class="div_white"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="div_color">
                        <p class="p_capitel">sneaker company</p>
                        <h1>fall limited edition<br>sneakers</h1>
                        <br>
                        <p class="p_smool">these low-profile sneakers are your perfact casual wear<br>companion.
                            featuring a durable rubber outer sole, they 'll<br>wthstand everything the weathing can
                            offer.</p>
                        <div class="div_between">
                            <div class="div_flex1 mt-4">
                                <h3>$125.00</h3>
                                <p>50%</p>
                            </div>
                            <del>$225.00</del>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="div_box_flex">
                            <div class="div_flex2">
                                <p class="p_orange" id="p_negative">-</p>
                                <p id="p_number">0</p>
                                <p class="p_orange" id="p_plus">+</p>
                            </div>
                            <div class="d-flex">
                                <button><i class="fa-solid fa-plus" style="margin-right: 10px;"></i>add to
                                    cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="div_onclick" id="click_none">
            <div class="div_arrow">
                <p id="click_arrow">
                    < </p>
                        <p id="click_arrow1">></p>
            </div>
            <p class="click_icon" id="click_icon">
                <i class="fas fa-times"></i>
            </p>
            <div class="div_scroll" id="div_scroll">
                <img src="image7/Capture.PNG" alt="" class="my_image" id="my_image">
                <img src="image7/Capture1.PNG" alt="" class="my_image" id="my_image5">
                <img src="image7/Capture2.PNG" alt="" class="my_image" id="my_image6">
                <img src="image7/Capture3.PNG" alt="" class="my_image" id="my_image7">
            </div>
            <div class="div_flex3 mt-4 ms-5 ps-2">
                <div class="div_box">
                    <img src="image7/Capture.PNG" alt="" id="my_image1">
                    <div class="div_white" id="my_whtie"></div>
                </div>
                <div class="div_box">
                    <img src="image7/Capture1.PNG" alt="" id="my_image2">
                </div>
                <div class="div_box">
                    <img src="image7/Capture2.PNG" alt="" id="my_image3">
                </div>
                <div class="div_box">
                    <img src="image7/Capture3.PNG" alt="" id="my_image4">
                </div>
            </div>
        </div>
    </div>
</body>
<!-- end main -->
<script src="bootstrap7/js7/all.min.js"></script>
<script src="bootstrap7/js7/bootstrap.bundle.min.js"></script>
<script src="bootstrap7/js7/project_product.js"></script>

</html>