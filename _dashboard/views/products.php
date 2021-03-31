<?php
include_once('header.php');
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
                    <p class="mb-2">Total Registration</p>
                    <h2><?php echo $total_products;?></h2>
                </div>
                <div class="info-icon">
                    <i class="icon-user1"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="table-container">
                <div class="t-header"></div>
                <div class="table-responsive">
                    <table id="productsTable" class="table custom-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th width="140px;">Create</th>
                                <th width="150px;">Full Name</th>
                                <th width="100px;">CPF</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Purchase Types and Category</th>
                                <th>Request number</th>
                                <th>Month and year of purchase</th>
                                <th>Lucky Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(!empty($products)){
                            $i = 1;
                            foreach ($products as $p) {
                                ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?=$p['datetime']?></td>
                                    <td><?=$p['full_name']?></td>
                                    <td><?=$p['cpf']?></td>
                                    <td><?=$p['telephone']?></td>
                                    <td><?=$p['email']?></td>
                                    <td><?=$p['purchase_type_cate']?></td>
                                    <td><?=$p['request_number']?></td>
                                    <td><?=$p['purchase_month_year']?></td>
                                    <td><?=$p['lucky_number']?></td>
                                    <td><a href="#" class="products_remove" id="<?=$p['id']?>"><i class="icon-trash"></i></a></td>
                                </tr>
                        <?php
                                $i++;
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
<script src="../../_dashboard/assets/js/jquery.min.js"></script>
<script src="../../_dashboard/assets/js/bootstrap.bundle.min.js"></script>
<script src="../../_dashboard/assets/js/moment.js"></script>

<!-- Data Tables -->
<script src="../../_dashboard/assets/vendor/datatables/dataTables.min.js"></script>
<script src="../../_dashboard/assets/vendor/datatables/dataTables.bootstrap.min.js"></script>

<!-- Custom Data tables -->
<script src="../../_dashboard/assets/vendor/datatables/custom/custom-datatables.js"></script>
<script src="../../_dashboard/assets/vendor/datatables/custom/fixedHeader.js"></script>

<script>
    $(document).ready(function(){
        $('.products_remove').click(function(e){
            e.preventDefault();
            var id = $(this).attr('id');
            $.ajax({
                url:'/products_remove',
                method:'post',
                type: 'json',
                data:{'id': id},
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
include_once('footer.php');
?>
