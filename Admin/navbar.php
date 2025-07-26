<nav class="sidebar d-flex flex-column" style="min-height:100vh; background: rgb(24, 84, 59); width:240px;">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
        <img src="../View/Media/logo.png" width="60px" height="60px" class="me-2" style="margin-left: 30px;">
        <span class="fs-5 fw-bold" style="color: #fff;">Admin</span>
    </a>
    <hr style="border-color: #eee;">
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="baocaodoanhthu.php" class="nav-link" style="color: #fff; background: transparent;">
                <i class="bi bi-bar-chart"></i>
                <span>Báo cáo doanh thu</span>
            </a>
        </li>
        <li>
            <a class="nav-link" data-bs-toggle="collapse" href="#submenuDonHang" role="button" aria-expanded="false" aria-controls="submenuDonHang" style="color: #fff; background: transparent;">
                <i class="bi bi-box"></i>
                <span>Đơn hàng</span>
                <i class="bi bi-chevron-down float-end"></i>
            </a>
            <div class="collapse" id="submenuDonHang">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small ms-4">
                    <li><a href="ql_donhang.php" class="nav-link" style="color: #fff;">Quản lý đơn hàng</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a class="nav-link" data-bs-toggle="collapse" href="#submenuSanPham" role="button" aria-expanded="false" aria-controls="submenuSanPham" style="color: #fff; background: transparent;">
                <i class="bi bi-box"></i>
                <span>Sản phẩm</span>
                <i class="bi bi-chevron-down float-end"></i>
            </a>
            <div class="collapse" id="submenuSanPham">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small ms-4">
                    <li><a href="ql_sanpham.php" class="nav-link" style="color: #fff;">Quản lý sản phẩm</a></li>
                    <li><a href="themsp.php" class="nav-link" style="color: #fff;">Thêm sản phẩm</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a class="nav-link" data-bs-toggle="collapse" href="#submenuTaiKhoan" role="button" aria-expanded="false" aria-controls="submenuTaiKhoan" style="color: #fff; background: transparent;">
                <i class="bi bi-box"></i>
                <span>Tài khoản khách</span>
                <i class="bi bi-chevron-down float-end"></i>
            </a>
            <div class="collapse" id="submenuTaiKhoan">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small ms-4">
                    <li><a href="qltk.php" class="nav-link" style="color: #fff;">Quản lý tài khoản</a></li>
                </ul>
            </div>
        </li>
    </ul>
    <hr style="border-color: #eee;">
    <div>
        <span style="color: #fff;">Xin chào, <b>admin</b></span>
        <a href="logout.php" class="d-block mt-2 text-danger text-decoration-none">Đăng xuất</a>
    </div>
</nav>
