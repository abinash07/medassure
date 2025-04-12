<script src="<?php echo base_url('admin_assets/js') ?>/jquery.easy-pie-chart.js"></script>
<style>
    /* .home-stats{
        background-color: #FFFFFF;
    }
    .legend-div{
        padding: 10px;
        line-height: 0.5;
        font-size: 13px;
        font-weight: 600;
    } */
    .chart-box{
        background-color: #FFF;
    }
    .chart-box-chart{
        width: 500px;
    }
    .chart-header{
        padding: 15px;
        font-weight: 600;
    }
    table.tile_info {
        width: 100%;
    }
    table.tile_info td i {
        margin-right: 8px;
        font-size: 17px;
        float: left;
        width: 18px;
        line-height: 28px;
    }
    table.tile_info td p {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin: 0;
        line-height: 28px;
    }


</style>
<div class="content-wrapper">

    <?php // echo '<pre>'; print_r($counts); exit; ?>

    <?php $loginRoleId = session()->get('role_id'); ?>

    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <a href="<?php echo base_url('admin/examinee'); ?>">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3 class="text-white"><?= $total_hospial; ?></h3>
                                        <p class="text-white">Total Hospitals</p>
                                    </div>
                                    <div class="icon"><i class="fa fa-users"></i></div>
                                    <p class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></p>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-6">
                            <a href="<?php echo base_url('admin/examinee?exstatus=completed'); ?>">
                                <div class="small-box" style="background-color: #17A328;">
                                    <div class="inner">
                                        <h3 class="text-white"><?= $total_doctor; ?><sup style="font-size: 20px"></sup></h3>
                                        <p class="text-white">Total Doctors</p>
                                    </div>
                                    <div class="icon"><i class="fa fa-briefcase"></i></div>
                                    <p class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></p>
                                </div>
                            </a>
                        </div>


                        <div class="col-lg-3 col-6">
                            <a href="#">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3 class="text-white"><?= $total_video; ?></h3>
                                        <p class="text-white">Total Videos</p>
                                    </div>
                                    <div class="icon"><i class="fa fa-briefcase"></i></div>
                                    <p class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></p>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-6">
                            <a href="<?php echo base_url('admin/examinee?exstatus=pending'); ?>">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3><?= $total_enquiry; ?></h3>
                                        <p>Total Enquiry</p>
                                    </div>
                                    <div class="icon"><i class="fa fa-briefcase"></i></div>
                                    <p class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <?php //if($loginRoleId == 1){ ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Dashboard Overview</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="chart-box-chart">
                                                <canvas id="candidateChart" ></canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="chart-box-legend mb-5">
                                                <table class="tile_info">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square blue" style="color: #2962ff;"></i>Completed </p>
                                                        </td>
                                                        <td>10%</td>
                                                        <td id="completed"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square blue" style="color: #3498DB;"></i>In-Completed</p>
                                                        </td>
                                                        <td>90%</td>
                                                        <td id="incompleted"></td>
                                                    </tr>
                                            
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Stats</h3>
                                </div>
                                <div class="box-body">
                                    <p>Online Users: 10</p>
                                    <p>Last 1 hr Active Users: 10</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php //} ?>
            </div>
        </div>
    </section>
</div>
<script>
    

    //candidateStage();
    function candidateStage(){
        $.ajax({
            url: "<?php echo base_url('index.php/home/get_candidate_stage'); ?>",
            method: "POST",
            dataType: 'JSON',
            beforeSend: function () {
                //$(".loaders").show();
            },
            success: function (data){
                console.log(data.result.nostage);
                if(data.status == true){
                    $('#completed').html(Math.ceil(data.result.nostage/data.result.totalcandidate*100)+" %");
                    $('#incompleted').html(Math.ceil(data.result.pool/data.result.totalcandidate*100)+" %");
                    batchData = [
                        data.result.nostage, 
                        data.result.pool
                    ];
                    piechart(batchData);
                }else{
                    
                }
            },
            complete: function () {
                //$(".loaders").hide();
            },
        });
    }


    var batchData = [
        10, 
        15
    ];

    <?php if($loginRoleId == 1){ ?>
    piechart(batchData);
    <?php } ?>
    
    function piechart(batchData){
        var oilCanvas = document.getElementById("candidateChart");

        var oilData = {
            labels: [
                "Completed",
                "In-Completed",
            ],
            datasets: [
                {
                    data: batchData,
                    backgroundColor: [
                        "#17A328",
                        "#FAA61A",
                    ]
                }]
        };
        var option = {
            showLines: true,
            legend: {
              display: false
            }
        };
          
        var pieChart = new Chart(oilCanvas, {
          type: 'pie',
          data: oilData,
          options: option
        });
    }
</script>