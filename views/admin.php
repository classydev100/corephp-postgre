<?php
include_once ('header.php');
?>
<!-- Container start -->
<div class="container">
    <form action="index.html">
        <div class="row logout">
            <a href="/logout"><i class="icon-log-out"></i></a>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <a href="/visitors">
                    <div class="info-tiles admin-screen">
                        <div class="stats-detail">
                            <p class="mb-2">Total Visitors</p>
                            <h2><?php echo $total_visitors;?></h2>
                        </div>
                        <div class="info-icon">
                            <i class="icon-eye1"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <a href="/products">
                    <div class="info-tiles admin-screen">
                        <div class="stats-detail">
                            <p class="mb-2">Total Registration</p>
                            <h2><?php echo $total_products;?></h2>
                        </div>
                        <div class="info-icon">
                            <i class="icon-user1"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </form>
</div>
<!-- Container end -->
<?php
include_once ('footer.php');
?>
