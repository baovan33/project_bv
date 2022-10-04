<?php include 'header.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Thể Loại</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                <?php
                $str_theloai = "select *from theloai order by idTL asc";
                $result_theloai = mysqli_query($conn,$str_theloai);
                ?>
                <form action="xulyadd_theloai.php" method="get">
                    <div class="">
                        <label for=""> Tên thể loại </label>
                        <input type="text" name="TenTL">
                    </div>
                    <div class="">
                        <label for=""> Thứ tự </label>
                        <input type="text" name="ThuTu">
                    </div>
                    <div class="">
                        <label for=""> Ẩn hiện </label>
                        <select name="AnHien" >
                            <option value="0"> Ẩn</option>
                            <option value="1"> Hiện</option>
                        </select>
                    </div>
                    <div class="">
                        <input type="Submit" value="Lưu">
                    </div>
                
                <!-- /.container-fluid -->
<?php include 'footer.php'; ?>
