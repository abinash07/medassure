<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="content-wrapper">
    <style>
        .user-outer {
            padding: 10px 0 0 10px;
        }
        .user-outer .user-thumb {
            float: left;
            margin-right: 4px;
        }
        .user-outer .user-details {
            padding-top: 2px;
        }
        .user-fil {
            margin: 10px 10px 10px 10px;
            margin-bottom: 4px;
            padding-bottom: 8px;
        }
        .user-fil h4 {
            color: #000000;
            margin-bottom: 0px;
            font-size: 14px;
            margin-top: 5px;
            font-weight: 500;
            margin-left: 18px;
        }
        #empCode {
            font-size: 13px;
            font-weight: 400;
            color: #3e3e3e;
        }
        #batchCode {
            font-size: 13px;
            font-weight: 400;
            color: #3e3e3e;
        }
        #learnerBranch {
            font-size: 13px;
            font-weight: 400;
            color: #3e3e3e;
        }
        #learnerRank {
            font-size: 13px;
            font-weight: 400;
            color: #3e3e3e;
        }
        .final_assessment_high {
            background-color: ghostwhite;
            padding: 15px;

        }
    </style>

    <div class="row">
        <div class="col-md-12 connectedSortable ui-sortable">
            <section class="content-header">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('admin/home'); ?>"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('admin/examinee'); ?>">Board Members</a></li>
                                <li class="breadcrumb-item">Report</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-4">
                        <a href="javascript:history.back()" style="float: right; color: #333333; font-weight: 600;"><i style="font-size: 12px;" class="fa fa-chevron-left"></i> Go Back</a>
                    </div>
                </div>
            </section>

            <section class="content">
                <div id="ContentPlaceHolder2_updatepanel">
                <div class="card">
                    <div class="card-header">
                        <b>Board Evaluation Practice</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="user-outer">
                                    <div class="user-thumb">
                                        <img src="https://tms.tmivirtually.com/assets/img/profile.jpg" class="profile img-fluid showdetails" style="width: 80px;">
                                    </div>
                                    <div class="user-details">
                                        <div class="user-fil">
                                            <h4 class="mb-2" style="margin-left: 95px;"><span id="sc-user_icon"><i class="fa fa-user"></i></span> <span id="learnerName">---</span></h4>
                                            <div style="margin-left: 77px;">
                                                <h4><span id="empCode"><i class="fa fa-envelope"></i> <span id="learnerEmail"></span></span></h4>
                                                <h4><i class="fa fa-calendar"></i>  Submitted By: <span id="assessmentDate"></span></h4>
                                                <!-- <h4><span id="batchCode">---</span></h4>
                                                <h4><span id="learnerBranch"></span></h4>
                                                <h4><span id="learnerRank">---</span></h4> -->
                                            </div>
                                        </div>
                                        <div class="user-fil">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 " style="text-align: right;">
                            <!-- <img src="assets/img/speedometer2.png" class="profile img-fluid showdetails" style="width: 275px;"> -->
                            </div>					
                        </div>

                        <div class="row" id="showStats">
                            <div class="col-md-12 mb-3">
                                <div class="rounded final_assessment_high" style="border: 1px solid #ccc; border-style: dashed;">
                                    <p class="py-2 pl-3 fw-bold" style="color: #9B004B; font-weight: 500; font-size: 14px;border-bottom: 1px dashed #ccc;"> 
                                        <img class="mr-2" src="https://tms.tmivirtually.com/assets/img/Final Assessment.png" style="height: 25px;"> Assessment Summary 
                                        <span class="mr-2" style="float:right;">
                                            <small style="color: #000000;font-size: 13px;font-weight: 500;">Achieved:</small> 
                                            <span style="color: #b05b27;"><span id="userAchived"></span>%</span> | 
                                            <small style="color: #000000;font-size: 13px;font-weight: 500;">Total</small> 
                                            <span style="color: #b05b27;">100%</span>
                                        </span>
                                    </p>
                                    <div class="row">
                                        <div class="col-md-12 pr-0 pl-4">
                                            <table class="table table-sm custom-table">
                                                <thead>
                                                    <tr>
                                                        <th>Category</th>
                                                        <th style="text-align:center;width: 20%;">Achieved Score</th>
                                                        <th style="text-align:center;width: 20%;">Maximum Score</th>
                                                        <th style="text-align:center;width: 20%;">Achieved Percentage</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="reportData">
                                                    
                                                </tbody>
                                                <tbody>

                                                </tbody>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="rounded final_assessment_high" style="border: 1px solid #ccc; border-style: dashed;">
                                    <div id="chartsContainer" style="display: flex; flex-wrap: wrap; gap: 20px;"></div>
                                </div>

                            </div>
                        </div>


                        <div class="rounded final_assessment_high assessmentFeedback" style="display: none;border: 1px solid #ccc; border-style: dashed;">
                            <p class="py-2 pl-3 fw-bold" style="color: #9B004B; font-weight: 500; font-size: 14px;border-bottom: 1px dashed #ccc;"> 
                                <img class="mr-2" src="https://tms.tmivirtually.com/assets/img/Final Assessment.png" style="height: 25px;"> Feedback
                            </p>
                            <div class="row">
                                <div class="col-md-12 pr-0 pl-4">
                                    <table class="table table-sm custom-table">
                                        <thead>
                                            <tr>
                                                <th>Question</th>
                                                <th>Answer</th>
                                            </tr>
                                        </thead>
                                        <tbody id="feedBackData">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script>
    // var userId = "<?php echo @$_GET['u']; ?>";

    // getQuestion(userId);
    // function getQuestion(userId) {
    //     var sl = 1;
    //     var percentage = 0;
    //     var totalAchived = 0;
    //     $.ajax({
    //         url: "<?php echo base_url('admin/userreport'); ?>",
    //         type: "POST",
    //         data: { userId: userId },
    //         cache: false,
    //         dataType: 'json',
    //         success: function (data) {
    //             if (data.status == true) {
    //                 $.each(data.result, function (key, val) {
    //                     percentage = Math.round((parseInt(val.total_score)/parseInt(val.max_possible_score))*100);
    //                     totalAchived += percentage;
    //                     $('#reportData').append(
    //                         '<tr>'+
    //                             '<td align="left"><span class="progress-label">'+val.category_name+'</span></td>'+
    //                             '<td align="center"><span class="progress-val">'+percentage+'%</span></td>'+
    //                             '<td align="center">'+val.max_possible_score+'</td>'+
    //                         '</tr>'
    //                     )
    //                 })
    //                 $('#userAchived').html(Math.round(totalAchived/2));
    //                 $('#learnerName').html(data.result[0].username);
    //                 $('#learnerEmail').html(data.result[0].email);
    //                 $('#assessmentDate').html(data.result[0].formatted_date);
    //             }
    //         }
    //     });
    // }
</script>

<script>
    var userId = "<?php echo @$_GET['u']; ?>";
    getQuestion(userId);

    function getQuestion(userId) {
        var percentage = 0;
        var totalAchived = 0;
        $.ajax({
            url: "<?php echo base_url('admin/userreport'); ?>",
            type: "POST",
            data: { userId: userId },
            cache: false,
            dataType: 'json',
            success: function (data) {
                if (data.status == true) {
                    $('#chartsContainer').empty(); // Clear previous charts

                    $.each(data.result, function (key, val) {
                        let categoryName = val.category_name;
                        let achieved = parseInt(val.total_score);
                        let maxScore = parseInt(val.max_possible_score);
                        let percentAchieved = ((achieved / maxScore) * 100).toFixed(2);
                        let percentRemaining = 100 - percentAchieved;

                        // Create chart container
                        let chartDiv = `
                            <div style="width: 250px; text-align: center;">
                                <h5>${categoryName} (Score: ${achieved})</h5>
                                <canvas id="chart-${key}"></canvas>
                            </div>
                        `;
                        $('#chartsContainer').append(chartDiv);

                        // Draw Chart
                        setTimeout(() => {
                            new Chart(document.getElementById(`chart-${key}`).getContext("2d"), {
                                type: "doughnut",
                                data: {
                                    labels: ["Achieved", "Remaining"],
                                    datasets: [{
                                        data: [percentAchieved, percentRemaining],
                                        backgroundColor: ["#1a2645", "#E0E0E0"], // Blue & Grey
                                        hoverOffset: 4
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    plugins: {
                                        legend: { position: "bottom" }
                                    }
                                }
                            });
                        }, 100); // Small delay to ensure chart loads


                        percentage = Math.round((parseInt(val.total_score)/parseInt(val.max_possible_score))*100);
                        totalAchived += percentage;
                        $('#reportData').append(
                            '<tr>'+
                                '<td align="left"><span class="progress-label">'+val.category_name+'</span></td>'+
                                '<td align="center"><span class="progress-val">'+val.total_score+'</span></td>'+
                                '<td align="center">'+val.max_possible_score+'</td>'+
                                '<td align="center"><span class="progress-val">'+percentage+'%</span></td>'+
                            '</tr>'
                        )
                    });

                    if(data.feedback !=''){
                        $('.assessmentFeedback').show();
                        $.each(data.feedback, function (key, val) {
                            $('#feedBackData').append(
                                '<tr>'+
                                    '<td>'+val.question+'</td>'+
                                    '<td>'+val.answer+'</td>'+
                                '</tr>'
                            )
                        });
                    }else{
                        $('.assessmentFeedback').hide();
                    }

                    $('#userAchived').html(Math.round(totalAchived/data.result.length));
                    $('#learnerName').html(data.result[0].username);
                    $('#learnerEmail').html(data.result[0].email);
                    $('#assessmentDate').html(data.result[0].formatted_date);
                }
            }
        });
    }
</script>