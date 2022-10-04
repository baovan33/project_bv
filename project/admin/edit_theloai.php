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
                <form action="xuly_edit_theloai.php" method="get">
                    <?php
                    $idTL = $_GET['idTL'];
                    $str = "select*from theloai where idTL = $idTL";
                    $result = mysqli_query($conn,$str);
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <div class="">
                        <label for=""> Tên thể loại </label>
                        <input type="text" name="TenTL" value="<?php echo $row['TenTL'];?>">
                    </div>
                    <div class="">
                        <label for=""> Thứ tự </label>
                        <input type="text" name="ThuTu" value="<?php echo $row['ThuTu'];?>">
                    </div>
                    <div class="">
                        <label for=""> Ẩn hiện </label>
                        <select name="AnHien" >
                            <option <?php if($row['AnHien'] == 0){echo "selected"; } ?> value="0"> Ẩn</option>
                            <option <?php if($row['AnHien'] == 1){echo "selected"; } ?> value="1"> Hiện</option>
                        </select>
                    </div>
                    <div class="">
                        <input type="hidden" name="idTL" value="<?php echo $idTL;?>">
                        <input type="Submit" value="Lưu">
                    </div>
                
                <!-- /.container-fluid -->
<?php include 'footer.php'; ?>
