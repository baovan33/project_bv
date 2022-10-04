<?php
function get_user($conn, $idUser){
    $str = "select * from users where idUser = $idUser";
    $result = mysqli_query($conn, $str);
    $row = mysqli_fetch_assoc($result);
    return $row['HoTen'];
}

function get_loaitin($conn, $idLT){
    $str = "select * from loaitin where idLT = $idLT";
    $result = mysqli_query($conn, $str);
    $row = mysqli_fetch_assoc($result);
    return $row['Ten'];
}

function list_row($conn, $table, $query1, $query2) {
    $str = "select * from $table "; 
    $result = mysqli_query($conn, $str);
    while($rows = mysqli_fetch_assoc($result)) 
    {?>
        <option value= "<?php echo $rows[$query1]; ?> "> 
            <?php echo $rows[$query2]; ?> 
        </option>
    <?php } 
 }

 function menu($conn) {
     $str_tl = "select * from theloai where AnHien = 1";
     $result_tl = mysqli_query($conn, $str_tl);
     while($row_tl = mysqli_fetch_array($result_tl)) { 
        $idTL = $row_tl['idTL'];
         ?>
            <li class="dropdown magz-dropdown">
                <a href="category.php?id=<?php echo $idTL; ?>&type=TL"><?php echo $row_tl['TenTL']; ?><i class="ion-ios-arrow-right"></i></a>
                <ul class="dropdown-menu">
                    
                        <?php 
                            $str_lt = "select * from loaitin where idTL = $idTL and AnHien = 1";
                            $result_lt = mysqli_query($conn, $str_lt);
                            while($row_lt = mysqli_fetch_assoc($result_lt)) { ?>
                                <li><a href="category.php?id=<?php echo $row_lt['idLT']; ?>&type=LT"><?php echo $row_lt['Ten']; ?> </a></li>
                           <?php } ?>
                </ul>
            </li>
     <?php } 

function tinnoibat($conn) { 
    $str = "select * from tin where TinNoiBat = 1 order by idTin asc limit 0,4";
    $result = mysqli_query($conn, $str);
    while ($row = mysqli_fetch_assoc($result)) {
        $idLT =$row['idLT'];
        ?>
        <div class="item">
            <article class="featured">
                <div class="overlay"></div>
                <figure>
                    <img src="images/news/img04.jpg" alt="Sample Article">
                </figure>
                <div class="details">
                    <div class="category"><a href="category.php"><?php echo get_loaitin($conn, $idLT); ?> </a></div>
                    <h1><a href="single.html"><?php echo $row['TieuDe']; ?></a></h1>
                    <div class="time"><?php echo $row['Ngay']; ?></div>
                </div>
            </article>
        </div>
    <?php } 
    ?>
<?php  }

function tinxemnhieu($conn) { 
    $str = "select * from tin where AnHien = 1 order by SoLanXem asc limit 0,10";
    $result = mysqli_query($conn, $str);
    while ($row = mysqli_fetch_assoc($result)) {?>
        <article class="article-mini">
            <div class="inner">
                <figure>
                    <a href="single.html">
                        <img src="images/news/img07.jpg" alt="Sample Article">
                    </a>
                </figure>
                <div class="padding">
                    <h1><a href="single.html"><?php echo $row['TieuDe']; ?></a></h1>
                </div>
            </div>
        </article>
<?php } 
?>
<?php
}
function tinmoi($conn) { 
    $str = "select * from tin where AnHien = 1 order by SoLanXem desc limit 0,4";
    $result = mysqli_query($conn, $str);
    while ($row = mysqli_fetch_assoc($result)) { 
        $idLT =$row['idLT'];
        ?>
    <div class="col-md-6 col-sm-6 col-xs-12">
		<div class="row">
            <article class="article col-md-12">
                <div class="inner">
                    <figure>
                        <a href="single.html">
                            <img src="images/news/img10.jpg" alt="Sample Article">
                        </a>
                    </figure>
                    <div class="padding">
                        <div class="detail">
                            <div class="time"><?php echo $row['Ngay']; ?></div>
                            <div class="category"><a href="category.html"><?php echo get_loaitin($conn, $idLT); ?></a></div>
                        </div>
                        <h2><a href="single.html"><?php echo $row['TieuDe']; ?></a></h2>
                        <p><?php echo $row['TomTat']; ?></p>
                        <footer>
                            <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1263</div></a>
                            <a class="btn btn-primary more" href="single.html">
                                <div>More</div>
                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                            </a>
                        </footer>
                    </div>
                </div>
            </article>
        </div>
    </div>
    
   
<?php } ?>
<?php } ?>
<?php 
 }

function tukhoa($conn){
     $str = "select * from loaitin where AnHien = 1 order by AnHien asc limit 0,10";
     $result = mysqli_query($conn, $str);
     while ($row = mysqli_fetch_assoc($result)) {
         $idLT = $row['idLT'];
         ?>
    
        <li><a href="#"> 
            <?php echo $row['Ten']; ?>
             </a>
        </li>
   
 <?php } ?>
<?php
} ?>

<?php 
function loaitin($conn) { 
    $str = "select * from tin where AnHien = 1 order by AnHien desc limit 0,5";
    $result = mysqli_query($conn, $str);
    while ($row = mysqli_fetch_assoc($result)) { 
        $idLT = $row['idLT'];
        ?>
        <div class="row">
            <article class="col-md-12 article-list">
                <div class="inner">
                    <figure>
                        <a href="single.html">
                            <img src="images/news/img11.jpg" alt="Sample Article">
                        </a>
                    </figure>
                    <div class="details">
                        <div class="detail">
                            <div class="category">
                                <a href="#"><?php echo get_loaitin($conn, $idLT); ?> </a>
                            </div>
                            <div class="time"><?php echo $row['Ngay']; ?> </div>
                        </div>
                        <h1><a href="single.html"><?php echo $row['TieuDe']; ?></a></h1>
                        <p>
                            <?php echo $row['TomTat']; ?>
                        </p>
                        <footer>
                            <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div><?php echo $row['SoLanXem']; ?></div></a>
                            <a class="btn btn-primary more" href="single.html">
                                <div>More</div>
                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                            </a>
                        </footer>
                    </div>
                </div>
        </div>
    ?>
   
<?php } ?>
<?php } ?>
<?php 
function tincuoituan($conn) {
    $str = "select * from tin where AnHien = 1 order by AnHien desc limit 0,4";
    $result = mysqli_query($conn, $str);
    while ($row = mysqli_fetch_assoc($result)) { 
        $idLT = $row['idLT'];
    ?> 
    <article class="article">
        <div class="inner">
            <figure>
                <a href="single.html">
                    <img src="images/news/img03.jpg" alt="Sample Article">
                </a>
            </figure>
            <div class="padding">
                <div class="detail">
                        <div class="time"><?php echo $row['Ngay']; ?></div>
                        <div class="category"><a href="category.html"><?php echo get_loaitin($conn, $idLT); ?></a></div>
                </div>
                <h2><a href="single.html"><?php echo $row['TieuDe']; ?></a></h2>
                <p> <?php echo $row['TomTat']; ?></p>
            </div>
        </div>
    </article>

<?php } ?>
<?php } ?>
<?php ?>

<?php
function tinhot($conn) { 
    $str = "select * from tin where AnHien = 1 order by AnHien desc limit 0,5";
    $result = mysqli_query($conn, $str);
    while ($row = mysqli_fetch_assoc($result)) { 
        $idLT = $row['idLT'];
    ?>
        <article class="article-mini">
            <div class="inner">
                <figure>
                    <a href="single.html">
                        <img src="images/news/img09.jpg" alt="Sample Article">
                    </a>
                </figure>
                <div class="padding">
                    <h1><a href="single.html"><?php echo $row['TieuDe']; ?></a></h1>
                    <div class="detail">
                        <div class="category"><a href="category.php"><?php echo get_loaitin($conn, $idLT); ?></a></div>
                        <div class="time"><?php echo $row['TieuDe']; ?></div>
                    </div>
                </div>
            </div>
        </article>
<?php } ?>
<?php } ?>

<?php 
function get_tin($conn) { 
    $str = "select * from tin where AnHien = 1";
    $result = mysqli_query($conn, $str);
    $row = mysqli_fetch_assoc($result);
    $idLT = $row['idLT'];
    ?>
    <article class="article-fw">
        <div class="inner">
            <figure>
                <a href="single.html">
                    <img src="images/news/img16.jpg" alt="Sample Article">
                </a>
            </figure>
            <div class="details">
                <div class="detail">
                    <div class="time"><?php echo $row['Ngay']; ?></div>
                    <div class="category"><a href="category.php"><?php echo get_loaitin($conn, $idLT); ?></a></div>
                </div>
                <h1><a href="single.html"><?php echo $row['TieuDe']; ?></a></h1>
                <p>
                 <?php echo $row['TomTat']; ?> 
                </p>
            </div>
        </div>
    </article>
<?php } ?>

<?php  
function get_ten($conn) {
    $str = "select * from tin where AnHien = 1";
    $result = mysqli_query($conn, $str);
    $row = mysqli_fetch_assoc($result);
    return $row['TieuDe'];
}


function get_category($conn, $id, $type) {
    if($type == "TL") {
        $table = "theloai";
        $filter = "idTL" ;
        $filget = "TenTL";
    }
    elseif($type == "LT") {
        $table = "loaitin";
        $filter = "idLT" ;
        $filget = "Ten";
    }
    else { echo "Error"; }
    $str = "select * from $table where $filter = $id";
    $result = mysqli_query($conn, $str);
    $row = mysqli_fetch_assoc($result);
    return $row[$filget];
}

function get_tinchuyenmuc($conn) {
    $str = "select * from tin where AnHien = 1 order by AnHien desc limit 0,5";
    $result = mysqli_query($conn, $str);
    while ($row = mysqli_fetch_assoc($result)) { 
        $idLT = $row['idLT'];
        ?>
     <article class="col-md-12 article-list">
        <div class="inner">
            <figure>
                <a href="single.html">
                <img src="images/news/img01.jpg">
            </a>
            </figure>
            <div class="details">
            <div class="detail">
                <div class="category">
                <a href="category.html"><?php echo get_loaitin($conn, $idLT); ?></a>
                </div>
                <div class="time"><?php echo $row['Ngay']; ?></div>
            </div>
            <h1><a href="single.html"><?php echo $row['TieuDe']; ?></a></h1>
            <p>
                <?php echo $row['TomTat']; ?> 
            </p>
            <footer>
                <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>237</div></a>
                <a class="btn btn-primary more" href="single.html">
                <div>More</div>
                <div><i class="ion-ios-arrow-thin-right"></i></div>
                </a>
            </footer>
            </div>
        </div>
    </article>
} ?>
<?php } ?>
<?php } ?>
