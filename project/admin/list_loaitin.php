<?php include 'header.php'; ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Loại Tin</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                <?php
                $str_loaitin = "select *from loaitin order by idLT desc";
                $result_loaitin = mysqli_query($conn,$str_loaitin);
                ?>
                
                <table class="table table-bordered">
                    <tr>
                        <th> TÊN LOẠI TIN</th>
                        <th>  THỨ TỰ </th>
                        <th> ẨN HIỆN </th>
                        <th> TỪ KHOÁ </th>
                        <th> HÀNH ĐỘNG</th>
                    </tr>
                    <?php
                    while($rows_loaitin = mysqli_fetch_assoc($result_loaitin)){ ?>
                    <tr>
                        <td> <?php echo $rows_loaitin['Ten']; ?> </td>
                        <td> <?php echo $rows_loaitin['ThuTu']; ?> </td>
                        <td> <?php echo $rows_loaitin['AnHien']; ?> </td>
                        <td> <?php echo $rows_loaitin['KeyWord']; ?> </td>
                        <td> <a href="edit_loaitin.php?idTL=<?php echo $rows_theloai['idTL'];?>">SỬA</a> | <a href="">XOÁ</a>  </td>
                    </tr>  
                    <?php } ?>
                    
                   
                 </table>   
                <!-- /.container-fluid -->
<?php include 'footer.php'; ?>
