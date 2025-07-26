<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Example</title>
    <link rel="stylesheet" href="css/trang logo.CSS">
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
        <div class="container-fluid p-0" >
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="5"></li>
                </ol>
      
                <!-- Wrapper for slides -->
                <div class="carousel-inner" style="height: 500px; padding:50px;">
                    <div class="carousel-item active">
                        <img src="media/anh9.png" alt="Slide 1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="media/anh10.png" alt="Slide 2" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="media/anh11.png" alt="Slide 3" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="media/anh12.png" alt="Slide 4" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="media/anh13.png" alt="Slide 5" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="media/anh14.png" alt="Slide 6" class="d-block w-100">
                </div>
                </div>
      
                <!-- Controls -->
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
         <P style="color:rgb(24, 84, 59); padding:5px; font-size: 25px;margin-top:60px; "> HÀNG XỊN DATE MỚI GIÁ GIẢM SÂU | Các set quà trang trọng có ưu đãi đặc biệt</P>

        <div class="container" style="padding:50px;">
          <div class="row">
              <div class="col-4">
                  <img src="media/anh15.jpg" height="333px"width="440px">
              </div>
              <div class="col-2">
                  <div class="card image-zoom" style="width:220px; height: 333px;">
                      <a href="#"><img class="card-img-top" src="media/anh16.jpg"> </a>
                      <div class="card-body">
                        <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Hộp quà thơm gói vải xinh xắn tặng vợ </p>
                        <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                      </div>
                  </div>
              </div>
              <div class="col-2">
                  <div class="card image-zoom" style="width:220px; height: 333px;">
                      <a href="#"><img class="card-img-top" src="media/anh17.jpg"> </a>
                      <div class="card-body">
                        <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Giỏ quà sức khỏe tặng đồng nghiệp</p>
                        <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 475.000₫</p>
                      </div>
                  </div>
              </div>
              <div class="col-2">
                  <div class="card image-zoom" style="width:220px; height: 333px;">
                      <a href="#"><img class="card-img-top" src="media/anh18.jpg"> </a>
                      <div class="card-body">
                        <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Hộp nến thơm và trà tặng mẹ </p>
                        <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 565.000₫</p>
                      </div>
                  </div>
              </div>
              <div class="col-2">
                  <div class="card image-zoom" style="width:220px; height: 333px;">
                      <a href="#"><img class="card-img-top" src="media/anh19.jpg"> </a>
                      <div class="card-body">
                        <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Hộp starbuck có ly tặng người yêu</p>
                        <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 245.000₫</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>

       <P style="color:rgb(24, 84, 59); padding:5px; font-size: 25px; "> HÀNG XỊN DATE MỚI GIÁ GIẢM SÂU | Các set hoa quả tươi ngon với các ưu đãi đặc biệt</P>

      <div class="container" style="padding:50px;">
          <div class="row">
              <div class="col-4">
                  <img src="media/anh85.png" height="333px"width="440px">
              </div>
              <div class="col-2">
                  <div class="card image-zoom" style="width:220px; height: 333px;">
                      <a href="#"><img class="card-img-top" src="media/anh22.jpg"> </a>
                      <div class="card-body">
                        <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Hộp quà thơm gói vải xinh xắn tặng vợ </p>
                        <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                      </div>
                  </div>
              </div>
              <div class="col-2">
                  <div class="card image-zoom" style="width:220px; height: 333px;">
                      <a href="#"><img class="card-img-top" src="media/anh23.jpg"> </a>
                      <div class="card-body">
                        <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Giỏ quà sức khỏe tặng đồng nghiệp</p>
                        <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 475.000₫</p>
                      </div>
                  </div>
              </div>
              <div class="col-2">
                  <div class="card image-zoom" style="width:220px; height: 333px;">
                      <a href="#"><img class="card-img-top" src="media/anh24.jpg"> </a>
                      <div class="card-body">
                        <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Hộp nến thơm và trà tặng mẹ </p>
                        <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 565.000₫</p>
                      </div>
                  </div>
              </div>
              <div class="col-2">
                  <div class="card image-zoom" style="width:220px; height: 333px;">
                      <a href="#"><img class="card-img-top" src="media/anh25.jpg"> </a>
                      <div class="card-body">
                        <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Hộp starbuck có ly tặng người yêu</p>
                        <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 245.000₫</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
       
      <P style="color:rgb(24, 84, 59); padding:5px; font-size: 25px; "> HÀNG XỊN DATE MỚI GIÁ GIẢM SÂU | Siêu ưu đãi tháng 7 chỉ có tại Vitamin House</P>
      
      <div class="container" style="padding:50px;">
          <div class="row">
              <div class="col-4">
                  <img src="media/anh26.png" height="333px"width="440px">
              </div>
              <div class="col-2">
                  <div class="card image-zoom" style="width:220px; height: 333px;">
                      <a href="#"><img class="card-img-top" src="media/anh27.png"> </a>
                      <div class="card-body">
                        <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Hộp quà thơm gói vải xinh xắn tặng vợ </p>
                        <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                      </div>
                  </div>
              </div>
              <div class="col-2">
                  <div class="card image-zoom" style="width:220px; height: 333px;">
                      <a href="#"><img class="card-img-top" src="media/anh28.png"> </a>
                      <div class="card-body">
                        <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Giỏ quà sức khỏe tặng đồng nghiệp</p>
                        <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 475.000₫</p>
                      </div>
                  </div>
              </div>
              <div class="col-2">
                  <div class="card image-zoom" style="width:220px; height: 333px;">
                      <a href="#"><img class="card-img-top" src="media/anh29.png"> </a>
                      <div class="card-body">
                        <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Hộp nến thơm và trà tặng mẹ </p>
                        <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 565.000₫</p>
                      </div>
                  </div>
              </div>
              <div class="col-2">
                  <div class="card image-zoom" style="width:220px; height: 333px;">
                      <a href="#"><img class="card-img-top" src="media/anh30.png"> </a>
                      <div class="card-body">
                        <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Hộp starbuck có ly tặng người yêu</p>
                        <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 245.000₫</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <P style="color:rgb(24, 84, 59); padding:30px; font-size: 25px; "> Bánh kẹo nổi tiếng | Duty free</P>
      
      <div class="container" style="margin-top: -10px;">
          <div class="row">
          <div class="col-2">
              <div class="card image-zoom" style="width:220px; height: 390px;">
                  <a href="#"><img class="card-img-top" src="media/anh31.png"> </a>
                  <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Bánh Cuộn June 1st ĐL Hộp 256g</p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                  </div>
              </div>
          </div>
          <div class="col-2">
              <div class="card image-zoom" style="width:220px; height: 390px;">
                  <a href="#"><img class="card-img-top" src="media/anh32.png"> </a>
                  <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Bánh Trung Thu Duen Tai Đài Loan Hộp 6 Cái</p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                  </div>
              </div>
          </div>
          <div class="col-2">
              <div class="card image-zoom" style="width:220px; height: 390px;">
                  <a href="#"><img class="card-img-top" src="media/anh33.png"> </a>
                  <div class="card-body">
                  <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Hộp Bánh Bông Lan Tươi Imei ĐL 400gr</p>
                  <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                  <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                  </div>
              </div>
          </div>
          <div class="col-2">
              <div class="card image-zoom" style="width:220px; height: 390px;">
                  <a href="#"><img class="card-img-top" src="media/anh34.png"> </a>
                  <div class="card-body">
                  <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Bánh Hành Kẹp Sữa Bò ChiaTe Đài Loan </p>
                  <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 475.000₫</p>
                  <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                  </div>
              </div>
          </div>
          <div class="col-2">
              <div class="card image-zoom" style="width:220px; height: 390px;">
                  <a href="#"><img class="card-img-top" src="media/anh35.jpg"> </a>
                  <div class="card-body">
                  <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Bánh Quy Nhân Dứa Chiate Đài Loan  </p>
                  <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 565.000₫</p>
                  <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                  </div>
              </div>
          </div>
          <div class="col-2">
              <div class="card image-zoom" style="width:220px; height: 390px;">
                  <a href="#"><img class="card-img-top" src="media/anh36.jpg"> </a>
                  <div class="card-body">
                  <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">Kẹo Cứng Sữa Bò Hạt Maca Nougat Chiate </p>
                  <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 245.000₫</p>
                  <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                  </div>
              </div>
          </div>
          </div>
      </div>
      
      <P style="color:rgb(24, 84, 59); padding:30px; font-size: 25px; "> <P style="color:rgb(24, 84, 59); padding:30px; font-size: 25px; "> Bánh kẹo nổi tiếng | Duty free</P></P>
      
      <div class="container" style="margin-top: -10px;">
          <div class="row">
          <div class="col-2">
              <div class="card image-zoom" style="width:220px; height: 390px;">
                  <a href="#"><img class="card-img-top" src="media/anh37.png"> </a>
                  <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">[Trái cây nhập khẩu] Cherry Đỏ Mỹ Nhiều</p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                  </div>
              </div>
          </div>
          <div class="col-2">
              <div class="card image-zoom" style="width:220px; height: 390px;">
                  <a href="#"><img class="card-img-top" src="media/anh38.png"> </a>
                  <div class="card-body">
                    <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">[Trái cây nhập khẩu] Hộp Việt Quất Mỹ 125g</p>
                    <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                    <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                  </div>
              </div>
          </div>
          <div class="col-2">
              <div class="card image-zoom" style="width:220px; height: 390px;">
                  <a href="#"><img class="card-img-top" src="media/anh39.png"> </a>
                  <div class="card-body">
                  <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;">Việt Quất Rainier Organic Mỹ Hộp 125g</p>
                  <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 640.000₫</p>
                  <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                  </div>
              </div>
          </div>
          <div class="col-2">
              <div class="card image-zoom" style="width:220px; height: 390px;">
                  <a href="#"><img class="card-img-top" src="media/anh40.png"> </a>
                  <div class="card-body">
                  <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">[Trái cây nhập khẩu] Kiwi Vàng New </p>
                  <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 475.000₫</p>
                  <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                  </div>
              </div>
          </div>
          <div class="col-2">
              <div class="card image-zoom" style="width:220px; height: 390px;">
                  <a href="#"><img class="card-img-top" src="media/anh41.png"> </a>
                  <div class="card-body">
                  <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">[Trái cây nhập khẩu] Táo Envy  </p>
                  <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 565.000₫</p>
                  <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                  </div>
              </div>
          </div>
          <div class="col-2">
              <div class="card image-zoom" style="width:220px; height: 390px;">
                  <a href="#"><img class="card-img-top" src="media/anh42.png"> </a>
                  <div class="card-body">
                  <p class="card-text" style="font-weight: 600; text-transform: uppercase; text-align: center;  ">[Trái cây nhập khẩu] Mây Indo (Kg)</p>
                  <p style="text-align: center; color: red; font-weight: 600; margin-top: -10px; font-size: 20px;"> 245.000₫</p>
                  <button type="button" class="btn btn-outline-success" style="margin-left: 45px;">Xem thêm</button>
                  </div>
              </div>
          </div>
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
                  <input type="email" id="email" name="email" placeholder="Nhập địa chỉ Email" required style="padding: 8px; margin-bottom: 10px;width:50%;"><br>
                  <button type="submit" class="submit-btn" style="padding: 8px 20px; background-color: rgb(53, 124, 61); color: white; border: none;">Đăng Ký</button><br>
                  <img src="media/anh8.png" alt="to" width="170px" height="80px">
              </div>
          </div>
      </div>
    </div>
   
</body>
</html>
