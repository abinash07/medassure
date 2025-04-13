
<div class="content-wrapper">

    <?php // echo '<pre>'; print_r($counts); exit; ?>

    <?php $loginRoleId = session()->get('role_id'); ?>

    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <a href="<?php echo base_url('admin/hospital'); ?>">
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
                            <a href="<?php echo base_url('admin/doctor'); ?>">
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
                            <a href="<?php echo base_url('admin/video'); ?>">
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
                            <a href="<?php echo base_url('admin/enquiry'); ?>">
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
                                        <div class="col-md-12">
                                            <div class="chart-box-chart">
                                                <canvas id="barChart"></canvas>
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
                                    <p>Total FAQ: <?= $total_faq; ?></p>
                                    <p>Total Author: <?= $total_author; ?></p>
                                    <p>Total Google Rating: <?= $total_rating; ?></p>
                                    <p>Total Department: <?= $total_department; ?></p>
                                    <p>Total Treatment: <?= $total_treatment; ?></p>
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



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script>

    var sellsCount = [];
    var sellsDate = [];
    var sellsBgColor1 = [];
    var sellsBgColor2 = [];
    $.ajax({
        url: "<?php echo base_url('admin/get_sells_data'); ?>",
        method: "POST",
        data: {},
        dataType: 'JSON',         
        beforeSend: function () {

        },
        success: function(data){
            if(data.status == true){
                $.each(data.result, function(key, val){
                    sellsCount.push(parseInt(val.total_sales));
                    sellsDate.push(val.date);
                    sellsBgColor1.push('#2097e1');
                    sellsBgColor2.push('#bdd9e6');
                });
                sellsChart(sellsCount,sellsDate,sellsBgColor1,sellsBgColor2);
            }else{

            }
        },
        complete: function () {

        }
    });





    function sellsChart(sellsCount,sellsDate){
        var canvas = document.getElementById("barChart");
        var ctx = canvas.getContext("2d");

        // Global Options:
        Chart.defaults.global.defaultFontColor = "#2097e1";
        Chart.defaults.global.defaultFontSize = 11;

        // Data with datasets options
        var data = {
            labels: sellsDate,
            datasets: [
                {
                    label: "Enquiry Stats",
                    fill: true,
                    backgroundColor: sellsBgColor1,
                    data: sellsCount
                },
                // {
                //     label: "Community avg.",
                //     fill: true,
                //     backgroundColor: sellsBgColor2,
                //     data: sellsCount
                // }
            ]
        };

        // Notice how nested the beginAtZero is
        var options = {
            title: {
                display: true,
                text: "Last 1 month enquiry",
                position: "bottom"
            },
            scales: {
                xAxes: [
                    {
                        gridLines: {
                            display: true,
                            drawBorder: true,
                            drawOnChartArea: false
                        }
                    }
                ],
                yAxes: [
                    {
                        ticks: {
                            beginAtZero: true
                        }
                    }
                ]
            }
        };

        // added custom plugin to wrap label to new line when \n escape sequence appear
        var labelWrap = [
            {
                beforeInit: function (chart) {
                    chart.data.labels.forEach(function (e, i, a) {
                        if (/\n/.test(e)) {
                            a[i] = e.split(/\n/);
                        }
                    });
                }
            }
        ];

        // Chart declaration:
        var myBarChart = new Chart(ctx, {
            type: "bar",
            data: data,
            options: options,
            plugins: labelWrap
        });
    }
</script>