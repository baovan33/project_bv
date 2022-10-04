<?php include 'header.php'; ?>
<?php include 'function.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tin</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                <?php
                $str_theloai = "select *from theloai order by idTL asc";
                $result_theloai = mysqli_query($conn,$str_theloai);
                ?>
                <form action="xuly_add_tin.php" method="get">
                    <div class="">
                        <label for=""> Tiêu đề </label>
                        <input type="text" name="TieuDe">
                    </div>
                    <div class="">
                        <label for=""> Tóm tắt </label>
                        <input type="text" name="TomTat">
                    </div>
                    <div class="">
                        <label for=""> Nội dung </label>
                        <input type="text" name="NoiDung">
                    </div>
                    <div class="">
                        <label for=""> Loại tin </label>
                        <select name="LoaiTin" id="">
                            <?php list_row($conn, 'loaitin', 'idLT', 'Ten'); ?>
                        </select>
                    </div>
                    <div class="">
                        <label for=""> Sự Kiện </label>
                        <select name="SuKien" id="">
                            <?php list_row($conn, 'sukien', 'idSK', 'MoTa'); ?>
                        </select>
                    </div>
                    <div class="">
                        <label for=""> Thể loại</label>
                        <select name="TheLoai" id="">
                            <?php list_row($conn, 'theloai', 'idTL', 'TenTL'); ?>
                        </select>
                    </div>
                    <div class="">
                        <input type="Submit" value="Lưu">
                    </div>
                
                <!-- /.container-fluid -->
<?php include 'footer.php'; ?>
