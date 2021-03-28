<?php
include_once('views/header.php');
?>
<!-- Container start -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="back_arrow">
                <a href="#" onclick="window.history.back();"><i class="icon-arrow_back"></i></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="logout">
                <a href="/dashboard/logout"><i class="icon-log-out"></i></a>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
            <div class="info-tiles admin-screen-child">
                <div class="stats-detail">
                    <p class="mb-2">Total Visitors</p>
                    <h2><?php echo $total_visitors;?></h2>
                </div>
                <div class="info-icon">
                    <i class="icon-eye1"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="table-container">
                <div class="t-header"></div>
                <div class="info-icon visitor-remove">
                    <a href="#" id="visitors_remove"><i class="icon-trash"></i></a>
                </div>
                <div class="table-responsive">
                    <table id="visitorsTable" class="table custom-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Date/Time</th>
                                <th>IP Address</th>
                                <th>User Agent</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(!empty($visitors)){
                            foreach ($visitors as $v) {
                                ?>
                                <tr>
                                    <td><?=$v['id']?></td>
                                    <td><?=$v['datetime']?></td>
                                    <td><?=$v['ip_address']?></td>
                                    <td><?=$v['user_agent']?></td>
                                </tr>
                        <?php
                            }}
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Container end -->

<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/moment.js"></script>

<!-- Data Tables -->
<script src="/assets/vendor/datatables/dataTables.min.js"></script>
<script src="/assets/vendor/datatables/dataTables.bootstrap.min.js"></script>

<!-- Custom Data tables -->
<script src="/assets/vendor/datatables/custom/custom-datatables.js"></script>
<script src="/assets/vendor/datatables/custom/fixedHeader.js"></script>

<script>
    $(document).ready(function(){
        $('#visitors_remove').click(function(e){
            e.preventDefault();
            $.ajax({
                url:'/visitors_remove',
                method:'post',
                type: 'json',
                data:{'name': 'visitor_remove'},
                success:function(res){
                    res = JSON.parse(res);
                    console.log(res)
                    if(res > 0){
                        window.location.reload();
                    }
                }
            })
        })

    })
</script>
<?php
include_once('views/footer.php');
?>
