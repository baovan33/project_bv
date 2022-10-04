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
                $str_theloai = "select *from theloai order by idTL desc";
                $result_theloai = mysqli_query($conn,$str_theloai);
                ?>
                
                <table class="table table-bordered">
                    <tr>
                        <th> TÊN THỂ LOẠI </th>
                        <th>  THỨ TỰ </th>
                        <th> ẨN HIỆN </th>
                        <th> HÀNH ĐỘNG </th>
                    </tr>
                    <?php
                    while($rows_theloai = mysqli_fetch_assoc($result_theloai)){ ?>
                    <tr>
                        <td> <?php echo $rows_theloai['TenTL']; ?> </td>
                        <td> <?php echo $rows_theloai['ThuTu']; ?> </td>
                        <td> <?php echo $rows_theloai['AnHien']; ?> </td>
                        <td> <a href="edit_theloai.php?idTL=<?php echo $rows_theloai['idTL'];?>">SỬA</a> | <a href="">XOÁ</a>  </td>
                    </tr>  
                    <?php } ?>
                    
                   
                 </table>   
                <!-- /.container-fluid -->
<?php include 'footer.php'; ?>
