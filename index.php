<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodingLab</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,200" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid" style="background-color: #fffffa;">
        <div class="row vh-100">
            <div class="col-2 bg-fondo pt-3 px-0 text-light text-start d-flex flex-column" style="z-index: 100;">
                <div class="logo px-3 pt-1 fw-semibold fs-4">
                    <a href="#" class="ancla">
                        <img class="mb-1" src="./img/logo.png" width="25" height="25" />
                        <span class="ps-2" style="font-weight: 500; font-size: 26px;">CodingLab</span>
                    </a>
                </div>
                <div class="pt-4 d-flex flex-column bd-highlight mb-3" style="height: 100%;">
                    <?php
                    include_once("./db/ClassPoo.php");
                    $lista = new Lista();
                    $lista->EnlistarArray();
                    ?>
                </div>
            </div>
            <div class="col-10 px-3">
                <div class="row d-flex align-items-center bg-white" style="padding: 11px 0px; box-shadow: 0 0 10px #f5f5f5;">
                    <div class="col-3 fw-semibold d-flex align-items-center fs-4">
                        <div class="px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-list" style="margin-top: -4px;" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </div>
                        <span style="font-weight: 500; font-size: 24px;">Dashboard</span>
                    </div>
                    <div class="col-6 d-flex">
                        <div class="input-group">
                            <input class="form-control" style="padding: 8px; background-color: #f8f8ff;" type="text" placeholder="Search...">
                        </div>
                        <div class="position-relative">
                            <div class="position-absolute top-50 end-0 translate-middle-y" style="margin: auto 6px; z-index: 100;">
                                <button class="btn btn-primary rounded" style="padding: 4px 8px;" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 d-flex justify-content-end">
                        <div class="dropdown rounded border" style="background-color: #f8f8ff;">
                            <button class="btn dropdown-toggle pe-2" style="font-weight: 500; font-size: 17px; padding: 3px;" type="button" id="UserDropdown" data-bs-toggle="dropdown" aria-expanded="true">
                                <img src="img/photo.jpg" width="35px" height="35px" class="rounded">
                                <span class="px-2">Kevin Lopez</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="UserDropdown">
                                <li><a class="dropdown-item" href="#">Option Acc 1</a></li>
                                <li><a class="dropdown-item" href="#">Option Acc 2</a></li>
                                <li><a class="dropdown-item" href="#">Option Acc 3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center py-3 lh-base">
                    <div class="col-3">
                        <div class="bg-white shadow-sm p-3 d-flex justify-content-center align-items-center" style="border-radius: 10px;">
                            <div style="font-size: 16px;">
                                <div class="title" style="font-weight: 500">
                                    Total Order
                                </div>
                                <div class="Value fs-4" style="font-weight: 500">
                                    40,876
                                </div>
                                <div class="Type" style="font-weight: 400; font-size: 14px;">
                                    <i class="bi bi-arrow-up-circle-fill icon-green"></i>
                                    <span>
                                        Up from yesterday
                                    </span>
                                </div>
                            </div>
                            <div class="Icon ps-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart3 order-btn p-2" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="bg-white shadow-sm p-3 d-flex justify-content-center align-items-center" style="border-radius: 10px;">
                            <div style="font-size: 16px;">
                                <div class="title" style="font-weight: 500">
                                    Total Sales
                                </div>
                                <div class="Value fs-4" style="font-weight: 500">
                                    38,876
                                </div>
                                <div class="Type" style="font-weight: 400; font-size: 14px;">
                                    <i class="bi bi-arrow-up-circle-fill icon-green"></i>
                                    <span>
                                        Up from yesterday
                                    </span>
                                </div>
                            </div>
                            <div class="Icon ps-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart-check sales-btn p-2" viewBox="0 0 16 16">
                                    <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="bg-white shadow-sm p-3 d-flex justify-content-center align-items-center" style="border-radius: 10px;">
                            <div style="font-size: 16px;">
                                <div class="title" style="font-weight: 500">
                                    Total Profit
                                </div>
                                <div class="Value fs-4" style="font-weight: 500">
                                    $12,876
                                </div>
                                <div class="Type" style="font-weight: 400; font-size: 14px;">
                                    <i class="bi bi-arrow-up-circle-fill icon-green"></i>
                                    <span>
                                        Up from yesterday
                                    </span>
                                </div>
                            </div>
                            <div class="Icon ps-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart-plus profit-btn p-2" viewBox="0 0 16 16">
                                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="bg-white shadow-sm p-3 d-flex justify-content-center align-items-center" style="border-radius: 10px;">
                            <div style="font-size: 16px;">
                                <div class="title" style="font-weight: 500">
                                    Total Return
                                </div>
                                <div class="Value fs-4" style="font-weight: 500">
                                    11,086
                                </div>
                                <div class="Type" style="font-weight: 400; font-size: 14px;">
                                    <i class="bi bi-arrow-down-circle-fill icon-red"></i>
                                    <span>
                                        Down from today
                                    </span>
                                </div>
                            </div>
                            <div class="Icon ps-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart-dash return-btn p-2" viewBox="0 0 16 16">
                                    <path d="M6.5 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z" />
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="bg-white shadow-sm p-3" style="border-radius: 10px; height: 100%;">
                            <div class="fs-5 mb-2 px-2" style="font-weight: 500;">
                                Recent Sales
                            </div>
                            <div>
                                <table class="table table-borderless mb-2">
                                    <thead>
                                        <tr style="font-size: 16px;">
                                            <th scope="col" style="width: 30%; padding: 3px 8px;">Date</th>
                                            <th scope="col" style="width: 30%; padding: 3px 8px;">Customer</th>
                                            <th scope="col" style="width: 30%; padding: 3px 8px;">Sales</th>
                                            <th scope="col" style="width: 10%; padding: 3px 8px;">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-normal" style="font-size: 15px;">
                                        <tr>
                                            <td style="padding: 3px 8px;">21 Mar 2023</td>
                                            <td style="padding: 3px 8px;"">Alex Doe</td>
                                            <td style=" padding: 3px 8px;"">Delivered</td>
                                            <td style="padding: 3px 8px;"">$204.98</td>
                                        </tr>
                                        <tr>
                                            <td style=" padding: 3px 8px;"">21 Mar 2023</td>
                                            <td style="padding: 3px 8px;"">David Mart</td>
                                            <td style=" padding: 3px 8px;"">Pending</td>
                                            <td style="padding: 3px 8px;"">$24.55</td>
                                        </tr>
                                        <tr>
                                            <td style=" padding: 3px 8px;"">21 Mar 2023</td>
                                            <td style="padding: 3px 8px;"">Roe Parter</td>
                                            <td style=" padding: 3px 8px;"">Returned</td>
                                            <td style="padding: 3px 8px;"">$25.88</td>
                                        </tr>
                                        <tr>
                                            <td style=" padding: 3px 8px;"">21 Mar 2023</td>
                                            <td style="padding: 3px 8px;"">Diana Penty</td>
                                            <td style=" padding: 3px 8px;"">Delivered</td>
                                            <td style="padding: 3px 8px;"">$170.66</td>
                                        </tr>
                                        <tr>
                                            <td style=" padding: 3px 8px;"">21 Mar 2023</td>
                                            <td style="padding: 3px 8px;"">Martin Paw</td>
                                            <td style=" padding: 3px 8px;"">Pending</td>
                                            <td style="padding: 3px 8px;"">$56.56</td>
                                        </tr>
                                        <tr>
                                            <td style=" padding: 3px 8px;"">21 Mar 2023</td>
                                            <td style="padding: 3px 8px;"">Doe Alex</td>
                                            <td style=" padding: 3px 8px;"">Returned</td>
                                            <td style="padding: 3px 8px;"">$44.95</td>
                                        </tr>
                                        <tr>
                                            <td style=" padding: 3px 8px;"">21 Mar 2023</td>
                                            <td style="padding: 3px 8px;"">Alana Lexa</td>
                                            <td style=" padding: 3px 8px;"">Delivered</td>
                                            <td style="padding: 3px 8px;"">$67.33</td>
                                        </tr>
                                        <tr>
                                            <td style=" padding: 3px 8px;"">21 Mar 2023</td>
                                            <td style="padding: 3px 8px;"">Rexel Mags</td>
                                            <td style=" padding: 3px 8px;"">Pending</td>
                                            <td style="padding: 3px 8px;"">$23.53</td>
                                        </tr>
                                        <tr>
                                            <td style=" padding: 3px 8px;"">21 Mar 2023</td>
                                            <td style="padding: 3px 8px;"">Tiana Loths</td>
                                            <td style=" padding: 3px 8px;"">Delivered</td>
                                            <td style="padding: 3px 8px;"">$46.52</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=" d-flex justify-content-end mb-4">
                                                <button class="btn btn-seeAll">See All</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="bg-white shadow-sm px-4 py-2" style="border-radius: 10px; height: 100%;">
                            <div class="fs-5 mb-2" style="font-weight: 500;">
                                Top Seling Product
                            </div>
                            <div class="ListProducts">
                                <div class="Product d-flex bd-highlight mb-1 align-items-center">
                                    <div class="ProdImg bd-highlight">
                                        <img class="ImageP" src="img/products_img/001.jpg" width="30" height="30">
                                    </div>
                                    <div class="ProdName px-3 bd-highlight" style="font-size: 15px;">
                                        Vuitton Sunglasses
                                    </div>
                                    <div class="ProdPrice ms-auto p-2 bd-highlight" style="font-size: 15px;">
                                        $1142
                                    </div>
                                </div>
                                <div class="Product d-flex bd-highlight mb-1 align-items-center">
                                    <div class="ProdImg bd-highlight">
                                        <img class="ImageP" src="img/products_img/002.jpg" width="30" height="30">
                                    </div>
                                    <div class="ProdName px-3 bd-highlight" style="font-size: 15px;">
                                        Hourglass Jeans
                                    </div>
                                    <div class="ProdPrice ms-auto p-2 bd-highlight" style="font-size: 15px;">
                                        $1567
                                    </div>
                                </div>
                                <div class="Product d-flex bd-highlight mb-1 align-items-center">
                                    <div class="ProdImg bd-highlight">
                                        <img class="ImageP" src="img/products_img/003.jpg" width="30" height="30">
                                    </div>
                                    <div class="ProdName px-3 bd-highlight" style="font-size: 15px;">
                                        Nike Sport Shoe
                                    </div>
                                    <div class="ProdPrice ms-auto p-2 bd-highlight" style="font-size: 15px;">
                                        $1234
                                    </div>
                                </div>
                                <div class="Product d-flex bd-highlight mb-1 align-items-center">
                                    <div class="ProdImg bd-highlight">
                                        <img class="ImageP" src="img/products_img/004.jpg" width="30" height="30">
                                    </div>
                                    <div class="ProdName px-3 bd-highlight" style="font-size: 15px;">
                                        Hermes Silk Scarves
                                    </div>
                                    <div class="ProdPrice ms-auto p-2 bd-highlight" style="font-size: 15px;">
                                        $2312
                                    </div>
                                </div>
                                <div class="Product d-flex bd-highlight mb-1 align-items-center">
                                    <div class="ProdImg bd-highlight">
                                        <img class="ImageP" src="img/products_img/005.jpg" width="30" height="30">
                                    </div>
                                    <div class="ProdName px-3 bd-highlight" style="font-size: 15px;">
                                        Gucci Ladies Bag
                                    </div>
                                    <div class="ProdPrice ms-auto p-2 bd-highlight" style="font-size: 15px;">
                                        $1456
                                    </div>
                                </div>
                                <div class="Product d-flex bd-highlight mb-1 align-items-center">
                                    <div class="ProdImg bd-highlight">
                                        <img class="ImageP" src="img/products_img/006.jpg" width="30" height="30">
                                    </div>
                                    <div class="ProdName px-3 bd-highlight" style="font-size: 15px;">
                                        Gucci Women's Bags
                                    </div>
                                    <div class="ProdPrice ms-auto p-2 bd-highlight" style="font-size: 15px;">
                                        $2345
                                    </div>
                                </div>
                                <div class="Product d-flex bd-highlight mb-1 align-items-center">
                                    <div class="ProdImg bd-highlight">
                                        <img class="ImageP" src="img/products_img/007.jpg" width="30" height="30">
                                    </div>
                                    <div class="ProdName px-3 bd-highlight" style="font-size: 15px;">
                                        Adidas Running Shoe
                                    </div>
                                    <div class="ProdPrice ms-auto p-2 bd-highlight" style="font-size: 15px;">
                                        $2345
                                    </div>
                                </div>
                                <div class="Product d-flex bd-highlight mb-1 align-items-center">
                                    <div class="ProdImg bd-highlight">
                                        <img class="ImageP" src="img/products_img/008.jpg" width="30" height="30">
                                    </div>
                                    <div class="ProdName px-3 bd-highlight" style="font-size: 15px;">
                                        Black Wear's Shirt
                                    </div>
                                    <div class="ProdPrice ms-auto p-2 bd-highlight" style="font-size: 15px;">
                                        $1245
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script language='javascript'>
        alert('Bienvenido a CodingLab!');
    </script>
</body>

</html>