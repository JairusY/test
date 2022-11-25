<?php
    session_start();
    $arrProducts = [
        [
            'name' => "Brown Shirt",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas amet corrupti adipisci beatae laudantium repellat modi qui pariatur, omnis molestias. Sequi officiis, iste modi ratione repellendus impedit nostrum veritatis praesentium.", 
            'price' => "550",
            'photo1' => "img/produc1A.jpg",
            'photo2' => "img/produc1B.jpg"
        ],
        [
            'name' => "Gray Shirt",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas amet corrupti adipisci beatae laudantium repellat modi qui pariatur, omnis molestias. Sequi officiis, iste modi ratione repellendus impedit nostrum veritatis praesentium.", 
            'price' => "550",
            'photo1' => "img/produc2A.jpg",
            'photo2' => "img/produc2B.jpg"
        ],
        [
            'name' => "White Blazer",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas amet corrupti adipisci beatae laudantium repellat modi qui pariatur, omnis molestias. Sequi officiis, iste modi ratione repellendus impedit nostrum veritatis praesentium.", 
            'price' => "750",
            'photo1' => "img/produc3A.jpg",
            'photo2' => "img/produc3B.jpg"
        ],
        [
            'name' => "Dark Blue Polo Shirt",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas amet corrupti adipisci beatae laudantium repellat modi qui pariatur, omnis molestias. Sequi officiis, iste modi ratione repellendus impedit nostrum veritatis praesentium.", 
            'price' => "600",
            'photo1' => "img/produc4A.jpg",
            'photo2' => "img/produc4B.jpg"
        ],
        [
            'name' => "Dark Blue Long Sleeves",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas amet corrupti adipisci beatae laudantium repellat modi qui pariatur, omnis molestias. Sequi officiis, iste modi ratione repellendus impedit nostrum veritatis praesentium.", 
            'price' => "800",
            'photo1' => "img/produc5A.jpg",
            'photo2' => "img/produc5B.jpg"
        ],
        [
            'name' => "White Long Sleeves",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas amet corrupti adipisci beatae laudantium repellat modi qui pariatur, omnis molestias. Sequi officiis, iste modi ratione repellendus impedit nostrum veritatis praesentium.", 
            'price' => "800",
            'photo1' => "img/produc6A.jpg",
            'photo2' => "img/produc6B.jpg" 
        ],
        [
            'name' => "Dark Blue Blazer",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas amet corrupti adipisci beatae laudantium repellat modi qui pariatur, omnis molestias. Sequi officiis, iste modi ratione repellendus impedit nostrum veritatis praesentium.", 
            'price' => "750",
            'photo1' => "img/produc7A.jpg",
            'photo2' => "img/produc7B.jpg"
        ],
        [
            'name' => "Floral Polo",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas amet corrupti adipisci beatae laudantium repellat modi qui pariatur, omnis molestias. Sequi officiis, iste modi ratione repellendus impedit nostrum veritatis praesentium.", 
            'price' => "650",
            'photo1' => "img/produc8A.jpg",
            'photo2' => "img/produc8B.jpg"
        ],
    ]
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/styles.css">
        <title>Learn IT Easy Online Shop</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-10">
                    <h2><i class="fa-solid fa-store"></i>Learn IT Easy Online Shop</h2>
                </div>
                <div class="col-2 text-right">
                    <a href="" class="btn btn-primary"> 
                        <i class="fa-solid fa-cart-shopping"></i>Cart         
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                    <?php
                        if(isset($arrProducts)){
                            foreach ($arrProducts as $index => $valueItem) {
                                echo ' <div class="col-md-3 col-sm-6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="">
                                            <img class="pic-1" src="' . $arrProducts[$index]['photo1'] . '">
                                            <img class="pic-2" src="' . $arrProducts[$index]['photo2'] . '">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title">' . $arrProducts[$index]['name'] . ' <span class="badge badge-secondary">₱ ' . $arrProducts[$index]['price'] . '</span></h3>
                                        <a class="add-to-cart" href="details.php?id='.$index.'">+ Add To Cart</a>
                                    </div>
                                </div>
                            </div>';
                            $_SESSION['productArr'][$index]['name'] = $arrProducts[$index]['name'];
                            $_SESSION['productArr'][$index]['description'] = $arrProducts[$index]['description'];
                            $_SESSION['productArr'][$index]['price'] = $arrProducts[$index]['price'];
                            $_SESSION['productArr'][$index]['photo1'] = $arrProducts[$index]['photo1'];
                            $_SESSION['productArr'][$index]['photo2'] = $arrProducts[$index]['photo2'];
                            }
                        }
                    ?>
                </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>