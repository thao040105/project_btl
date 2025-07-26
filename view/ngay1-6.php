<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/ngay1-6.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.6.0-web/css/all.css">
</head>
<body>
<?php
    include("navbar.php");
?>
    <div style="background-color: mintcream;">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <p style="color:rgb(24, 84, 59);font-size: 20px; ">LỌC THEO</p>
                    <p style="color:rgb(24, 84, 59);font-weight:bold;">Trạng thái hàng tồn</p>
                    <p style="color:rgb(24, 84, 59);font-weight: bold;">Giá</p>
                    <p style="color:rgb(24, 84, 59);font-weight: bold;">Product type</p>
                    <ul>
                        <li style="list-style-type: none;"><input type="checkbox">Bánh & Kẹo Chocolate (1)</li>
                        <li style="list-style-type: none;"><input type="checkbox">Giỏ quà</li>
                        <li style="list-style-type: none;"><input type="checkbox"> Hộp quà (1)</li>
                    </ul>
                    <p style="color:rgb(24, 84, 59);font-weight: bold;">Brand</p>
                    <p style="color:rgb(24, 84, 59);font-weight: bold;">Cỡ</p>
                    <p style="color:rgb(24, 84, 59);font-weight: bold;">Loại</p>
                </div>
                <div class="col-9">
                    <img src="media/anh2.2.jpg" height="333px"width="120%">
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 20px; background-color: mintcream;">
            <div class="row">
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.3.png"> </a>
                    <div class="card-body">
                      <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Bánh Cuộn June 1st ĐL Hộp 256g</p>
                      <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                      <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.4.png"> </a>
                    <div class="card-body">
                      <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Bánh Trung Thu Duen Tai Đài Loan Hộp 6 Cái</p>
                      <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                      <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.5.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Hộp Bánh Bông Lan Tươi Imei ĐL 400gr</p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.6.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Bánh Hành Kẹp Sữa Bò ChiaTe Đài Loan </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 475.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.7.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Bánh Quy Nhân Dứa Chiate Đài Loan  </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 565.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.8.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Kẹo Cứng Sữa Bò Hạt Maca Nougat Chiate </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 245.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
         
       
        

        <div class="container" style="margin-top: 20px; background-color: mintcream;">
            <div class="row">
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.9.png"> </a>
                    <div class="card-body">
                      <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Bánh Cuộn June 1st ĐL Hộp 256g</p>
                      <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                      <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh4.1.png"> </a>
                    <div class="card-body">
                      <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Bánh Trung Thu Duen Tai Đài Loan Hộp 6 Cái</p>
                      <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                      <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh4.2.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Hộp Bánh Bông Lan Tươi Imei ĐL 400gr</p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh4.3.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Bánh Hành Kẹp Sữa Bò ChiaTe Đài Loan </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 475.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh4.4.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Bánh Quy Nhân Dứa Chiate Đài Loan  </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 565.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh4.5.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Kẹo Cứng Sữa Bò Hạt Maca Nougat Chiate </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 245.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
           
        


        <div class="container" style="margin-top: 20px; background-color: mintcream;">
            <div class="row">
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.3.png"> </a>
                    <div class="card-body">
                      <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Bánh Cuộn June 1st ĐL Hộp 256g</p>
                      <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                      <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh4.3.png"> </a>
                    <div class="card-body">
                      <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Bánh Trung Thu Duen Tai Đài Loan Hộp 6 Cái</p>
                      <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                      <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh4.5.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Hộp Bánh Bông Lan Tươi Imei ĐL 400gr</p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.8.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Bánh Hành Kẹp Sữa Bò ChiaTe Đài Loan </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 475.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.9.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Bánh Quy Nhân Dứa Chiate Đài Loan  </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 565.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh4.2.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Kẹo Cứng Sữa Bò Hạt Maca Nougat Chiate </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 245.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <div class="container" style="margin-top: 20px; background-color: mintcream;">
            <div class="row">
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.5.png"> </a>
                    <div class="card-body">
                      <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Bánh Cuộn June 1st ĐL Hộp 256g</p>
                      <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                      <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.6.png"> </a>
                    <div class="card-body">
                      <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Bánh Trung Thu Duen Tai Đài Loan Hộp 6 Cái</p>
                      <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                      <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.8.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Hộp Bánh Bông Lan Tươi Imei ĐL 400gr</p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.9.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Bánh Hành Kẹp Sữa Bò ChiaTe Đài Loan </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 475.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.5.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Bánh Quy Nhân Dứa Chiate Đài Loan  </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 565.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh4.3.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Kẹo Cứng Sữa Bò Hạt Maca Nougat Chiate </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 245.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <div class="container" style="margin-top: 20px; background-color: mintcream;">
            <div class="row">
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.5.png"> </a>
                    <div class="card-body">
                      <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Bánh Cuộn June 1st ĐL Hộp 256g</p>
                      <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                      <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.4.png"> </a>
                    <div class="card-body">
                      <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Bánh Trung Thu Duen Tai Đài Loan Hộp 6 Cái</p>
                      <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                      <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh4.5.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Hộp Bánh Bông Lan Tươi Imei ĐL 400gr</p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.9.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Bánh Hành Kẹp Sữa Bò ChiaTe Đài Loan </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 475.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.5.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Bánh Quy Nhân Dứa Chiate Đài Loan  </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 565.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card image-zoom" style="width:220px; height: 390px;">
                    <a href="#"><img class="card-img-top" src="media/anh2.8.png"> </a>
                    <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Kẹo Cứng Sữa Bò Hạt Maca Nougat Chiate </p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 245.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
     

        <p style="text-align: center;margin-top:10px;font-size: 20px;">Khách hàng nói về shop như thế nào?</p>
        <p style="color:rgb(236, 236, 13); text-align: center;">★ ★ ★ ★ ★</p> <!-- 5 sao -->
        <p style="text-align: center;font-size:18px;line-height: 0.8px;">từ 521 bài đánh giá</p>
        <p style="color:rgb(60, 154, 61); text-align: center;">Xác nhận qua</p>
                <div style="display: flex; justify-content: center; gap: 50px;">
                <!-- Ảnh 1 -->
                <div style="text-align: center;">
                  <img src="media/anh70.png" alt="Ảnh 1" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;">
                  <div>
                    <span style="color: rgb(33, 240, 81);">★ ★ ★ ★ ☆</span> <!-- 4 sao -->
                  </div>
                  <p class="review-text">Giỏ trái cây đẹp quá! sẽ ủng hộ dài</p>
                  <p class="reviewer">DANG LE </p>
                </div>
                    
                <!-- Ảnh 2 -->
                <div style="text-align: center;">
                  <img src="media/anh84.jpg" alt="Ảnh 2" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;">
                  <div>
                    <span style="color: rgb(24, 240, 53);">★ ★ ★ ★ ★</span> <!-- 5 sao -->
                  </div>
                  <p class="review-text">Giỏ trái cây đẹp quá! sẽ ủng hộ dài</p>
                  <p class="reviewer">DANG LE </p>
                </div>
              
                <!-- Ảnh 3 -->
                <div style="text-align: center;">
                  <img src="media/anh76.jpg" alt="Ảnh 3" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;">
                  <div>
                    <span style="color: rgb(50, 238, 25);">★ ★ ★ ☆ ☆</span> <!-- 3 sao -->
                  </div>
                  <p class="review-text">Giỏ trái cây đẹp quá! sẽ ủng hộ dài</p>
                  <p class="reviewer">DANG LE </p>
                </div>
    
                <div style="text-align: center;">
                    <img src="media/anh80.jpg" alt="Ảnh 3" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;">
                    <div>
                      <span style="color: rgb(50, 238, 25);">★ ★ ★ ☆ ☆</span> <!-- 3 sao -->
                    </div>
                    <p class="review-text">Giỏ trái cây đẹp quá! sẽ ủng hộ dài</p>
                    <p class="reviewer">DANG LE </p>
                  </div>
    
                  <div style="text-align: center;">
                    <img src="media/anh77.jpg" alt="Ảnh 3" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;">
                    <div>
                      <span style="color: rgb(50, 238, 25);">★ ★ ★ ☆ ☆</span> <!-- 3 sao -->
                    </div>
                    <p class="review-text">Giỏ trái cây đẹp quá! sẽ ủng hộ dài</p>
                    <p class="reviewer">DANG LE </p>
                  </div>
              </div>


    <hr style="width:100%;">
    <div class="container nen2 mt-5" style="width:100%; height:600px;background-color: mintcream;">
        <div class="row mt-4">
            <div class="col-lg-4 col-md-12">
                <h4 style="color:rgb(126, 126, 130)">THÔNG TIN CHUNG</h4>
                <p style="color:rgb(126, 126, 130)">Sứ mạng, Tầm nhìn, Giá trị cốt lõi</p>
                <p style="color:rgb(126, 126, 130)">Review Từ Khách Hàng</p>
                <p style="color:rgb(126, 126, 130)">Liên hệ</p>
                <p style="color:rgb(126, 126, 130)">Tuyển Dụng</p>
                <p style="color:rgb(126, 126, 130)">Blog Vitamin</p>
                <p style="color:rgb(126, 126, 130)">Thanh toán</p>
                <p style="color:rgb(126, 126, 130)">Chính sách thanh toán</p>
                <p style="color:rgb(126, 126, 130)">Chính sách giao nhận</p>
                <p style="color:rgb(126, 126, 130)">Chính sách đổi trả</p>
                <p style="color:rgb(126, 126, 130)">Chính sách tích điểm</p>
                <p style="color:rgb(126, 126, 130)">Điều khoản dịch vụ</p>
                <p style="color:rgb(126, 126, 130)">Chính sách đổi trả hàng</p>
                <p style="color:rgb(126, 126, 130)">Chính sách bảo mật</p>
            </div>
            <div class="col-lg-4 col-md-12">
                <h4 style="color: rgb(126, 126, 130);">VỀ CHÚNG TÔI</h4>
                <img src="media/anh20.png" alt="to" width="170px" height="120px">
                <p style="color:rgb(126, 126, 130)">Thương hiệu trực thuộc:</p>
                <p style="color:rgb(126, 126, 130)">Công ty TNHH TM-DV VTMH</p>
                <p style="color:rgb(126, 126, 130)">Địa chỉ : Tòa Nhà Viettel Complex, 285 Cách Mạng Tháng Tám, Phường 12, Quận 10, Hồ Chí Minh</p>
                <p style="color:rgb(126, 126, 130)">VITAMIN HOUSE - SẢN PHẨM QUỐC TẾ CHO NGƯỜI VIỆT</p>
                <p style="color:rgb(126, 126, 130)">Hotline: 096 135 6668
                    <ul>
                        <li style="color: rgb(126, 126, 130)">563 CMT8, P15, Q10 - 0933 08 1589</li>
                        <li style="color: rgb(126, 126, 130)">219A Phạm Viết Chánh, P.Nguyễn Cư Trinh, Q.1 - 0909 68 1356</li>
                        <li style="color: rgb(126, 126, 130)">330 Quang Trung, P10, Q.Gò Vấp - 093 889 1259</li>
                        <li style="color: rgb(126, 126, 130)">Bán sỉ: 096 186 4789</li>
                        <li style="color: rgb(126, 126, 130)">Quà Doanh Nghiệp: 09788 13568</li>
                    </ul>
                </p>
            </div>
            <div class="col-lg-4 col-md-12">
                <h4 style="color:rgb(126, 126, 130);">BẢN TIN</h4>
                <p style="color:rgb(126, 126, 130)">Đăng ký để không bỏ lỡ thông tin hoặc</p>
                <p style="color:rgb(126, 126, 130)">chương trình khuyến mãi hấp dẫn</p>
                <input type="email" id="email" name="email" placeholder="Nhập địa chỉ Email" required style="padding: 8px; margin-bottom: 10px; width:50%;"><br>
                <button type="submit" class="submit-btn" style="padding: 8px 20px; background-color: rgb(53, 124, 61); color: white; border: none;">Đăng Ký</button><br>
                <img src="media/anh8.png" alt="to" width="170px" height="80px">
            </div>
        </div>
    </div>
        </div>
    </body>
    
        
    </body>
    </html>