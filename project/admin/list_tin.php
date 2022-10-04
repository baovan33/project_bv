<?php include 'header.php'; ?>
<?php include 'function.php'; ?>
<style class="">
    .pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.35rem;
    flex-wrap: wrap;
}
</style>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Loại Tin</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                <?php
                //phân trang
                $sobaitrentrang = 20;

                $str = "select * from tin order by idTin desc";
                $result = mysqli_query($conn,$str);

                $numrows = mysqli_num_rows($result);
                $sotrang = $numrows / $sobaitrentrang;
                $sotrang = ceil($sotrang);
                 $sotrang;

                $page = $_GET['page'];
                $vitrilaytin = $page * $sobaitrentrang;

            


                $str_tin = "select * from tin order by idTin desc limit $vitrilaytin, $sobaitrentrang";
                // $str_tin = "select * from tin order by idTin desc ";
                $result_tin = mysqli_query($conn,$str_tin);

                ?>
        
                <table class="table table-bordered">
                    <tr>
                        <th> TIÊU ĐỀ</th>
                        <th>  TÓM TẮT </th>
                        <th> TÁC GIẢ </th>
                        <th> LOẠI TIN </th>
                        <th> HÀNH ĐỘNG </th>
                    </tr>
                    <?php
                    while($rows_tin = mysqli_fetch_assoc($result_tin)){ ?>
                    <tr>
                        <td> <?php echo $rows_tin['TieuDe']; ?> </td>
                        <td> <?php echo $rows_tin['TomTat']; ?> </td>
                        <td> <?php echo get_user($conn, $rows_tin['idUser']);  ?> </td>
                        <td> <?php echo get_loaitin($conn, $rows_tin['idLT']); ?> </td>
                        <td> <a href="edit_tin.php?idTL=<?php echo $rows_tin['idTin'];?>">SỬA</a> | <a href="">XOÁ</a>  </td>
                    </tr>  
                    <?php } ?>
                    
                 </table>   
                 <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>

                        <?php for ($i = 0; $i < $sotrang; $i++) { ?>

                            <li class="page-item">
                                <a class="page-link" href="list_tin.php?page=<?php echo $i; ?>">
                                    <?php echo $i; ?> 
                                </a>
                            </li>
                            
                        <?php } ?>
                        
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>  
       
                 
                <!-- /.container-fluid -->
<?php include 'footer.php'; ?>
