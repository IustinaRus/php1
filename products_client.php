<?php
require_once('connect.php');
if (isset($_POST['submit'])) {
    $image = $_POST['image'];
    $details = $_POST['details'];
    

    $sql = "insert into `items` (image, details) values('$image', '$details')";
    $result = mysqli_query($db, $sql);
    if ($result) {
        //echo "Data inserted succesfully";
        header('location:ceva.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Business Casual - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Your Happy Place</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about_client.php">About us</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products_client.php">Book Club</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store_client.php">A piece of happiness</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Every day is a spring day</span>
                                <audio controls>
                                    <source src="audio\springday.mp3" type="audio/mpeg">
                                </audio>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/products-01.jpg" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">This books are the ones that should be read when you feel like you are drowning in your own thoughts. This are the keys to the magic door that gets you to your Happy Place.</p>
                        <p class="mb-0">Learn about the Danish art of happiness with Meik Wiking. Prepare to love lykke, the Danish word for happiness and fortune. Wiking goes in search of the real meaning of happiness, and finds it has little to do with wealth. A funny, inspiring read.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">A book about courage</span>
                                <span class="section-heading-lower">Find your own self!</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/products-02.jpg" alt="..." />
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-5 rounded">The Courage to be Disliked shows you how to unlock the power within yourself to become your best and truest self, change your future and find lasting happiness. Using the theories of Alfred Adler, one of the three giants of 19th century psychology alongside Freud and Jung, the authors explain how we are all free to determine our own future free of the shackles of past experiences, doubts and the expectations of others. It's a philosophy that's profoundly liberating, allowing us to develop the courage to change, and to ignore the limitations that we and those around us can place on ourselves.<p class="mb-0"></p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">From Around the World</span>
                                <span class="section-heading-lower">Learn about how is happiness seen in every country</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/products-03.jpg" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">A round the world trip through 33 international happiness concepts, from the bestselling author of The Year of Living Danishly, Helen Russell.</p>

                            <p>- Feeling terrified of that upcoming job interview? Take inspiration from the Icelanders and get some Þetta reddast, the unwavering belief that everything will work out in the end.</p>

                            <p>- Lost your way in life? Make like the Chinese and find your xingfu, or the thing that gives you real purpose.</p>

                            <p>- Too much on your plate? The Italians can help you learn the fine art of dolce far niente, aka the sweetness of doing nothing at all.</p>

                            <p>- Overwhelmed by busyness and disconnected from nature? The Swedish have a solution - just find your smultronställe, or 'wild strawberry patch', your perfect escape from the rest of the world.</p>

                            <p>From Australia to Wales, via Bhutan, Ireland, Finland, Turkey, Syria, Japan, and many more besides, The Atlas of Happiness uncovers the global secrets to happiness, and how they can change our lives.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 rounded"><p class="mb-0"> 
                                <div class="form-group">
                                    <table>
                                        <tr>
                                            <th>Image</th>
                                            <th>Details</th>
                                        </tr>
                                        <?php
                                        $res=mysqli_query($db,"SELECT * FROM items ORDER BY id DESC");
                                        while($row= mysqli_fetch_array($res)){
                                            echo '<br><tr>
                                                <td><img src="upload/'.$row['image'].'" height="200"></td>
                                                <td>'.$row['details'].'</td>
                                                
                                                </tr>';
                                                   
                                        }
                                        ?>
                                    </table>
                                    
                                </div>
                            </form>
                        </p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container my-5">
                <div class="product-item-description d-flex me-auto">
                    <div class="bg-faded p-5 rounded"><p class="mb-0"> 
                            Are you looking for a book? Give it a chance! It might be your lucky day!
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td>Id</td>
                                                <td>Image</td>
                                                <td>Details</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $con=mysqli_connect("localhost","root","","items");
                                            
                                            if(isset($_GET['search'])){
                                                $filtervalues=$_GET['search'];
                                                $query="SELECT * FROM `items` WHERE CONCAT(image,details) LIKE '%$filtervalues%'";
                                                $query_run=mysqli_query($con,$query);
                                                
                                                if(mysqli_num_rows($query_run)>0){
                                                    foreach($query_run as $items){
                                                        ?>
                                                            <tr>
                                                                <td><?=$items['id'];?></td>
                                                                <td><?=$items['image'];?></td>
                                                                <td><?=$items['details'];?></td>
                                                               
                                                            </tr>
                                                        <?php
                                                    }
                                                }else{
                                                    ?>
                                                        <tr>
                                                            <td colspan="3">No record found!</td>
                                                        </tr> 
                                                    <?php
                                                    
                                                }
                                            }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">
                    <button id="like" onclick="liked()">
                        <i class="fa fa-thumbs-up"></i>
                        <span class="icon">Like</span>
                    </button>
                    <script>
                        function liked() {
                            var element = document.getElementById("like");
                            element.classList.toggle("liked");
                        }
                    </script>
                    <button id="share" onclick="shared()">
                        <i class="fa fa-thumbs-up"></i>
                        <span class="icon">Share</span>
                    </button>
                    <script>
                        function shared() {
                            var element = document.getElementById("share");
                            element.classList.toggle("shared");
                        }
                    </script>
                </p>
                
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

