<?php include 'header.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Thêm loại tin</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                <?php
                $str_theloai = "select *from theloai order by idTL asc";
                $result_theloai = mysqli_query($conn, $str_theloai);
                ?>
                <form action="xuly_add_loaitin.php" method="get">
                    <div class="">
                        <label for=""> Tên  </label>
                        <input type="text" name="TenLT">
                    </div>
                    <div class="">
                        <label for=""> Thứ tự </label>
                        <input type="text" name="ThuTu">
                    </div>
                    <div class="">
                        <label for=""> Từ khoá </label>
                        <input type="text" name="tukhoa">

                    </div>
                
                    <div class="">
                        <label for=""> Ẩn hiện </label>
                        <select name="AnHien" >
                            <option value="0"> Ẩn</option>
                            <option value="1"> Hiện</option>
                        </select>
                    </div>
                    <div class="">
                        <label for=""> Thể loại  </label> 
                        <select name="idTL" id="" >
                            <?php 
                                $str = "select * from theloai where AnHien = 1 ";
                                $result = mysqli_query($conn, $str);
                                while ($row = mysqli_fetch_assoc($result)){  ?>
                                    <option value="<?php echo $row['idTL'];?>"> <?php echo $row['TenTL'];?></option>
                                <?php } 
                                ?>       
                        </select>
                    </div>
                    <div class="">
                        <input type="Submit" value="Lưu">
                    </div>
                <!-- /.container-fluid -->
<?php include 'footer.php'; ?>
