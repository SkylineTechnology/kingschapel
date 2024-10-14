<!--
Author: W3layouts
Author URL: http://w3layouts.com
<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$rw = mysqli_fetch_array(mysqli_query($conn, "select * from members where email ='$username'"));

?>
<!doctype html>
<html lang="zxx">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Blog | <?php echo $sitename; ?></title>
<!-- Template CSS -->
<link rel="stylesheet" href="css/style-starter.css">
<!-- Template CSS -->
<link href="//fonts.googleapis.com/css?family=Poppins:100,300,400,500,500i,600,700&display=swap" rel="stylesheet">
<!-- Template CSS -->
</head>
<body>

    <!--/top-header-content-->
    <?php
    include 'includes/header.php';
    ?>
    <!--//top-header-content-->


    <section class="w3l-inner-page-main">
        <div class="breadcrumb-infhny">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <h2 class="hny-title text-center">Prophecy Record</h2>
                    <ol class="breadcrumb mb-0">

                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <!-- //services-->
    <!-- head -->

<head>
    <link href="../bundles/css/style-starter.css" rel='stylesheet' type='text/css' /><!-- Style-CSS -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,300,400,500,500i,600,700&display=swap"
          rel="stylesheet">
</head>
<!-- //head -->


<section class="w3l-content-6">
    <!-- /content-6-section -->
    <div class="content-6-mian py-5">
        <div class="container py-lg-5">
            <div class="content-info-in row">
                <?php
//Start Pagination 
                $item_per_page = 10;
                $number_of_items = mysqli_num_rows(mysqli_query($conn, "select * from blog"));
                $number_of_pages = ceil($number_of_items / $item_per_page);

                if (!isset($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }
                $current_page_first_item = ($page - 1) * $item_per_page;
//End Pagination

                $blog_content = mysqli_query($conn, "select * from blog order by date desc limit $current_page_first_item,$item_per_page") or die(mysqli_error($conn));
                while ($row = mysqli_fetch_array($blog_content)) {
                    $title = $row["topic"];
                    $writter = $row["author"];
                    $msg = $row["message"];
                    $type = $row["type"];
                    $image = $row["img"];
                    $date = date_format(date_create($row["date"]), "d M Y H:i A");
                    $blogid = $row["blog_id"];
                    $num_of_comments = mysqli_num_rows(mysqli_query($conn, "select * from comments where blog_id='$blogid'"));
                    ?>
                    <div class="content-gd col-lg-4">
                        <a href="content?read=<?php echo base64_encode($blogid); ?>"><img src="admin/media/blog_images/<?php echo $image; ?>" style="height: 180px; width:100%;" alt=""></a>
                        <h5><a href="content?read=<?php echo base64_encode($blogid); ?>"> <font color="goldenrod"><?php echo html_entity_decode($title); ?></font></h5>

                        <p><?php echo substr(html_entity_decode($msg), 0, 100); ?>...</p>
                        <div style="color: black; font-size: 14px; margin-top: 10px;">
                                    <a href="content?read=<?php echo base64_encode($blogid); ?>"><i class="fa  fa-calendar icon_1"> </i><span class="icon_text"> <span class="m_1"><?php echo $date; ?></span></span></a>
                                </div>
                                <div style="color: black; font-size: 14px;">
                                    <a href="content?read=<?php echo base64_encode($blogid); ?>"><i class="fa  fa-comments-o icon_1"> </i> <span class="icon_text"><?php echo $num_of_comments; ?> Comment(s)</span></a>
                                </div>
                                <div style="color: black; font-size: 14px;">
                                    <a href="content?read=<?php echo base64_encode($blogid); ?>"><span class="icon_text">Read More <i class="fa fa-caret-right icon_1"> </i></span></a>
                                </div>
                    </div>
                    <?php
                }
                ?>	

            </div>

        </div>
    </div>
</section>


<!-- //content-6-section -->
<?php
include 'includes/footer.php';
?>
</div>
</body>

</html>


<script src="js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->
<!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="js/bootstrap.min.js"></script>