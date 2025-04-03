
var path = window.location.pathname;
var page = path.split("/").pop();
if(page == "enrolldashboard"){
    // $('.page-loader1').show();
    // return 0;



    function refreshData(functionName){
        if(functionName == "overall"){
            overallbatchdata('0');
	        $('#clientName').get(0).selectedIndex = 0;
	        $('#overallBatchDates').html('<i class="far fa-calendar-alt"></i>&nbsp;<span></span> Select Date <i class="fa fa-caret-down"></i>');
        }
        if(functionName == "client"){
            clientWiseData('0');
	        $('#clientWiseDates').html('<i class="far fa-calendar-alt"></i>&nbsp;<span></span> Select Date <i class="fa fa-caret-down"></i>');
        }
        if(functionName == "program"){
            programWiseData();
	        $('#clientType').get(0).selectedIndex = 0;
	        $('#programWiseDates').html('<i class="far fa-calendar-alt"></i>&nbsp;<span></span> Select Date <i class="fa fa-caret-down"></i>');
        }
    }
    /**********Overall batch wise report*************/
    var batchData = [];
    var ongoingCount = '';
    var upcomingCount = '';
    var actionpendingCount = '';
    var cancelledCount = '';
    var completedCount = '';

    function overallbatchdata(reload,clientname,batchformdate,batchtodate,programName,sessionType){
	

	var $chart = $(".learners-chart");
        $chart.data('easy-pie-chart', null);

        $.ajax({
            url: baseUrl + "getoveralbatchstatus",
            method: "POST",
            cache: false,
            data: {clientname: clientname, batchformdate: batchformdate, batchtodate: batchtodate, programName: programName, sessionType: sessionType},
            dataType: 'JSON',
            beforeSend: function () {
                $('.oloader').show();
            },
            success: function (data) {
                //console.log(data);
                var jsonarray = data.result[0];
                if(data.status == true && jsonarray.totalbatch > 0){
                    $('.onGoing').html(jsonarray.ongoing);
                    $('#ogPercent').html(Math.ceil((jsonarray.ongoing/jsonarray.totalbatch)*100));
                    $('#ContentPlaceHolder2_div_ongoing').css('width',Math.ceil((jsonarray.ongoing/jsonarray.totalbatch)*100)+'%');
                    $('#upcommingWidth').css('width',Math.ceil((jsonarray.ongoing/jsonarray.totalbatch)*100)+'%');

                    $('.upComing').html(jsonarray.upcoming);
                    $('#upPercent').html(Math.ceil((jsonarray.upcoming/jsonarray.totalbatch)*100)+'%');
                    $('#ContentPlaceHolder2_div_upcoming').css('width',Math.ceil((jsonarray.upcoming/jsonarray.totalbatch)*100)+'%');

                    //$('.action').html(jsonarray.action_pending_count);
                    $('#aPercent').html(Math.ceil((jsonarray.action_pending_count/jsonarray.totalbatch)*100));
                    $('#ContentPlaceHolder2_div_actionpending').css('width',Math.ceil((jsonarray.action_pending_count/jsonarray.totalbatch)*100)+'%');

                    $('.complete').html(jsonarray.completed);
                    $('#cPercent').html(Math.ceil((jsonarray.completed/jsonarray.totalbatch)*100));
                    $('#ContentPlaceHolder2_div_completed').css('width',Math.ceil((jsonarray.completed/jsonarray.totalbatch)*100)+'%');
			
		    $('.cancelled').html(jsonarray.cancelled);

                    $('.totalbatch').html(jsonarray.totalbatch);
		    $('#totalbatchprogress').css('width',Math.ceil((jsonarray.totalbatch/jsonarray.plannedbatch)*100)+'%');
                    $('#svgdata').html(Math.ceil((jsonarray.completed/jsonarray.totalbatch)*100)+'%');
		    $(".helptexthome").attr("data-original-title","Planned Vs Total Batches ("+jsonarray.totalbatch+"/"+jsonarray.plannedbatch+")");

                    ongoingCount = jsonarray.ongoing;
                    upcomingCount = jsonarray.upcoming;
                    actionpendingCount = jsonarray.action_pending_count;
                    cancelledCount = jsonarray.cancelled;
                    completedCount = jsonarray.completed;


                    batchData = [ongoingCount, upcomingCount, actionpendingCount, cancelledCount, completedCount];

                    piechart(batchData);
                    batchData = '';

		    


                    if(jsonarray.learner != "0"){
                        $('.totalAttendedCount').html(jsonarray.present);
                        $('#attendedCount').html(jsonarray.learner);
                        $('#absentCount').html(jsonarray.absent);

                        $('.totalTierPoints1').each(function () {
                            $(this).prop('Counter',0).animate({
                                Counter: jsonarray.present
                            }, {
                                duration: 2000,
                                easing: 'swing',
                                step: function (now) {
                                    $(this).text(Math.ceil(now));
                                }
                            });
                        });


                        var total = jsonarray.learner;
                        var divname =  'learners';                         
                        var totalper = jsonarray.present/total*('100');
                        var dataper = totalper.toFixed(0)

                        $(function(){
                            $("."+divname).attr("data-percent", dataper);
                            $('.'+divname+'-chart').easyPieChart({
                                animate: 2000,
                                lineWidth: 15,
                                scaleColor: false,
                                lineCap: 'circle',
                                scaleLength: 0,
                                size: 120,
                                trackColor: "#dc3545",
                                barColor: "#0054a6" 
                            });
                        });
                    }

		    
                    
                }else{
                    $('.onGoing').html('0');
                    $('#ogPercent').html('0');
                    $('#ContentPlaceHolder2_div_ongoing').css('width','0%');

                    $('.upComing').html('0');
                    $('#upPercent').html('0');
                    $('#ContentPlaceHolder2_div_upcoming').css('width','0%');

                    $('.action').html('0');
                    $('#aPercent').html('0');
                    $('#ContentPlaceHolder2_div_actionpending').css('width','0%');

                    $('.complete').html('0');
                    $('#cPercent').html('0');
                    $('#ContentPlaceHolder2_div_completed').css('width','0%');

                    $('.totalbatch').html('0');
                    $('#svgdata').html('0%');

                    batchData = [0, 0, 0, 0, 0];
                    piechart(batchData);
                    var $chart = $(".learners-chart");
                    $chart.data('easy-pie-chart', null);
                    $('.totalAttendedCount').html(0);
                    $('#attendedCount').html(0);
                    $('#absentCount').html(0);


                    $('.totalTierPoints1').each(function () {
                        $(this).prop('Counter',0).animate({
                            Counter: 0
                        }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function (now) {
                                $(this).text(Math.ceil(now));
                            }
                        });
                    });

                    var total = 0;
                    var divname =  'learners';                         
                    var totalper = jsonarray.present/total*('100');
                    var dataper = totalper.toFixed(0)

                    $(function(){
                        $("."+divname).attr("data-percent", dataper);
                        $('.'+divname+'-chart').easyPieChart({
                            animate: 2000,
                            lineWidth: 15,
                            scaleColor: false,
                            lineCap: 'circle',
                            scaleLength: 0,
                            size: 120,
                            trackColor: "#dc3545",
                            barColor: "#dc3545" 
                        });
                    });


                }
            },
            complete: function () {
            $('.oloader').hide();
            if(reload == 1){
                    clientWiseData('1');
		    getActionPendingCount();
                }
            }
        });
    }

    overallbatchdata('1');
    let startDate = '';
    let endDate = '';

    function cb(start, end) {
        $('#overallBatchDates').html(start + ' - ' + end);
    }
    $('#overallBatchDates').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
            'This Year': [moment().startOf('year'), moment().endOf('year')],
            'Last Year': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
        },
        "autoApply": true,
        "showCustomRangeLabel": false,
        "alwaysShowCalendars": true,
        "opens": "left"
        }, 
        function(start, end, label) {
            startDate = start.format("YYYY-MM-DD").toString();
            endDate = end.format("YYYY-MM-DD").toString();
            startDate1 = start.format("DD MMMM, YYYY").toString();
            endDate1 = end.format("DD MMMM, YYYY").toString();
            getOverallData(startDate, endDate);
	    cb(startDate1, endDate1);
    });

    function getOverallData(startDate, endDate){
        var clientname = $('#clientName').val();
	    var programName = $('#programName').val();
        var sessionType = $('#sessionType').val();
        overallbatchdata(0,clientname,startDate,endDate,programName,sessionType);
    }

    
    $('#clientName').on('change',function(e){
        e.preventDefault();
        var clientname = $('#clientName').val();
        var sessionType = $('#sessionType').val();
        overallbatchdata(0,clientname,startDate,endDate,0,sessionType);

	    $('#programName').html('');
        $('#programName').prop('disabled',false);
        $.ajax({
            url: baseUrl+"newbatch/getprogramdata2",
            method: "POST",
            data: {client_id: clientname},
            dataType: "JSON",
            success: function (data) {
                $('#programName').html('<option selected="selected" value="0">Select Program</option>');
                if(data.status == true){
                    $.each(data.result, function(key, val) {
                        $('#programName').append(
                            '<option value="'+val.id+'">'+val.Program_Name+'</option>'
                        );
                    });
                }else{
                    $('#programName').html('<option selected disabled value="">No record found</option>');
                }
            },
        });

    });

    $('#programName').on('change',function(e){
        e.preventDefault();
        var clientname = $('#clientName').val();
        var programName = $('#programName').val();
        var sessionType = $('#sessionType').val();
        var reload = '0';
        overallbatchdata(reload,clientname,startDate,endDate,programName,sessionType);
    });

    $('#sessionType').on('change',function(e){
        e.preventDefault();
        var clientname = $('#clientName').val();
        var programName = $('#programName').val();
        var sessionType = $('#sessionType').val();
        var reload = '0';
        overallbatchdata(reload,clientname,startDate,endDate,programName,sessionType);
    });

    function showOngoing(script){
        var clientname = $('#clientName').val();
        var sessionType = $('#sessionType').val();
	var programName = $('#programName').val();
        if(script != 0){
                location.href=baseUrl+"batch?status="+script+"&clientid="+clientname+"&form="+startDate+"&to="+endDate+"&sessionType="+sessionType+"&program="+programName;
        }else{
            location.href=baseUrl+"batch?clientid="+clientname+"&form="+startDate+"&to="+endDate+"&sessionType="+sessionType;
        }
    }


	
    function getActionPendingCount(){
        $.ajax({
            url: baseUrl+"dashboard/getActionPendingCountNew",
            dataType: "JSON",
            beforeSend: function () {
		$('.actionpendingb').css('font-size','14px');
                $('.actionpendingb').html('Loading...');
            },
            success: function (data) {

                if(data.status == true){
                    
                    $('.actionpendingb').html(data.result);
		    batchData = [ongoingCount, upcomingCount, data.result, cancelledCount, completedCount];
                    piechart(batchData);
                }else{
                    
                }
            },
            complete: function () {
		$('.actionpendingb').css('font-size','30px');
                $('.actionpendingb').html();
            }
        });
    }




    function piechart(batchData){
        var oilCanvas = document.getElementById("oilChart");

        var oilData = {
            labels: [
                "Ongoing",
                "Upcoming",
                "Action pending",
		"Cancelled",
                "Completed"
            ],
            datasets: [
                {
                    data: batchData,
                    backgroundColor: [
                        "#007bff",
                        "#ffc107",
                        "#fdeede",
			"#dc3545",
                        "#28a745"
                    ]
                }]
        };
        var option = {
            showLines: true,
            legend: {
              display: true
            }
        };
          
        var pieChart = new Chart(oilCanvas, {
          type: 'pie',
          data: oilData,
          options: option
        });
    } 

    /***********************End****************************/


















    /**********For client wise training status*************/
    var clientnames = [];
    var completedProject = [];
    var incompletedProject = [];
    function clientWiseData(reload,clientformdate,clienttodate){
        $('#projectData').html('');
	$('#chart_projecttype').hide();
        $.ajax({
            url: baseUrl + "getclientwisedata",
            method: "POST",
            cache: false,
            data: {clientformdate: clientformdate, clienttodate: clienttodate},
            dataType: 'JSON',
            beforeSend: function () {
                $('.cloader').show();
            },
            success: function (data) {
            if(data.status == true){
                var i = 1;
                $.each(data.result, function(key, val) {
                    $('#projectData').append(
                        '<tr>'+
                            '<td>'+i+'</td>'+
                            '<td class="text-left">'+
                                '<img class="img-fluid homeimg" src="'+baseUrl2+'docs/client/image/'+val.logo+'">&nbsp;&nbsp;&nbsp;'+val.client_name+
                            '</td>'+
                            '<td class="pogramnobg">'+
                                '<a href="javascript:void(0);" onclick="redirectClient(&#39;'+val.client_id+'&#39;,0)" class="pogramno">'+val.batch+'</a>'+
                            '</td>'+
                            '<td class="pogramnobg">'+
                                '<a class="aspNetDisabled pogramno">'+val.ongoing+'</a>'+
                            '</td>'+
                            '<td class="pogramnobg">'+
                                '<a class="aspNetDisabled pogramno">'+val.upcoming+'</a>'+
                            '</td>'+
                            '<td class="pogramnobg">'+
                                '<a class="aspNetDisabled pogramno">'+val.actionpending+'</a>'+
                            '</td>'+
                            '<td class="pogramnobg">'+
                                '<a href="javascript:void(0);"  onclick="redirectClient(&#39;'+val.client_id+'&#39;,&#39;4d6a6b324e4451344d513d3d&#39;)" class="pogramno">'+val.completed+'</a>'+
                            '</td>'+
                            '<td class="text-center text-green" style="background: #e4fcf1;">'+val.learner+'</td>'+
                            '<td class="text-center text-green" style="background: #e4fcf1;">'+val.present+'</td>'+
                            '<td class="text-center text-green" style="background: #e4fcf1;">'+val.absent+'</td>'+
                            '<td style="background: #e4fcf1;">'+
                            '<span class="percenta">'+
                                '<span>'+val.persentage+' </span>'+
                                '<i class="fa fa-percent" aria-hidden="true"></i></span>'+
                            '</td>'+
                        '</tr>'
                    );
                    i++;
                    clientnames.push(val.client_name);
                    completedProject.push(val.completed);
                    var icp = (val.batch) - (val.completed);
                    incompletedProject.push(icp);
                });
                $('#chart_projecttype').show();
                barchartforclient(clientnames,completedProject,incompletedProject);
                clientnames = [];
                completedProject = [];
                incompletedProject = [];
            }else{
                $('#projectData').html(
                    '<tr class="text-center">'+
                        '<td colspan="12" > No record found </td>'+
                    '</tr>'
                );
                $('#chart_projecttype').hide();
            }
            },
            complete: function () {
                $('.cloader').hide();
                if(reload == 1){
                    programWiseData();
                }
            }
        });
    }
    //clientWiseData();
    /***********************End****************************/

    /**************************For client wise filters*****************************/
    let startDateClient = '';
    let endDateClient = '';
    function cb1(start, end) {
        $('#clientWiseDates').html(start + ' - ' + end);
    }
    $('#clientWiseDates').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
            'This Year': [moment().startOf('year'), moment().endOf('year')],
            'Last Year': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
        },
        "autoApply": true,
        "showCustomRangeLabel": false,
        "alwaysShowCalendars": true,
        "opens": "left"
        }, 
        function(start, end, label) {
            startDateClient = start.format("YYYY-MM-DD").toString();
            endDateClient = end.format("YYYY-MM-DD").toString();
            startDate1 = start.format("DD MMMM, YYYY").toString();
            endDate1 = end.format("DD MMMM, YYYY").toString();
	    cb1(startDate1, endDate1);
	    getClientWiseData(startDateClient, endDateClient);
    });

    function getClientWiseData(startDateClient, endDateClient){
        var reload = '0';
        clientWiseData(0,startDateClient,endDateClient);
    }
    function redirectClient(clientid, status){
        if(status != 0){
            location.href=baseUrl+"batch?status="+status+"&clientid="+clientid+"&form="+startDateClient+"&to="+endDateClient;
        }else{
            location.href=baseUrl+"batch?status=&clientid="+clientid+"&form="+startDateClient+"&to="+endDateClient;
        }
    }



    function barchartforclient(clientnames,completedProject,incompletedProject){

        var ctx = document.getElementById('clientChart1').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels: clientnames,
                datasets: [
                    {
                        label: 'Completed ',
                        data: completedProject,
                        backgroundColor: 'rgba(0,84,166,1)',
                        borderColor: 'rgba(0,84,166,1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Total Batches',
                        data: incompletedProject,
                        backgroundColor: 'rgba(204,221,237,1)',
                        borderColor: 'rgba(204,221,237,1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    xAxes: [{
                        stacked: true,
                        ticks: {
                            beginAtZero: true
                        },
                    }],
                    yAxes: [{
                        stacked: true,
                        ticks: {
                            beginAtZero: true
                        },
                        gridLines: {
                            display: false ,
                            color: "#ccc"
                        },
                    }]
                },
                events: ["mouseout", "click", "touchstart", "touchmove", "touchend"],
                plugins: {
                    tooltip: {
                    events: ['click']
                    }
                }
            }
        });
    }
    /***************************************END*****************************/

    /**********For project wise training status*************/
    var clientnames1 = [];
    var completedProject1 = [];
    var incompletedProject1 = [];
    function programWiseData(clientid,formdate,todate){
        $('#programData').html('');
	$('#charttype2').hide();
        $.ajax({
            url: baseUrl + "getprogramwisedata",
            method: "POST",
            cache: false,
            data: {clientid: clientid, formdate: formdate, todate: todate},
            dataType: 'JSON',
            beforeSend: function () {
                $('.ploader').show();
            },
            success: function (data) {
            if(data.status == true){
                var i = 1;
                $.each(data.result, function(key, val) {
                    $('#programData').append(
                        '<tr>'+
                            '<td>'+i+'</td>'+
                            '<td class="text-left">'+
                                '<img class="img-fluid homeimg" src="'+baseUrl2+'docs/client/image/'+val.logo+'">&nbsp;&nbsp;&nbsp;'+val.client_name+
                            '</td>'+
                            '<td>'+val.Program_Name+'</td>'+
                            '<td class="pogramnobg">'+
                                '<a href="javascript:void(0);" onclick="redirectProgram(&#39;'+val.Client_ID+'&#39;,0,&#39;'+val.Program_Name+'&#39;)" class="pogramno">'+val.batch+'</a>'+
                            '</td>'+
                            '<td class="pogramnobg">'+
                                '<a class="aspNetDisabled pogramno" >'+val.ongoing+'</a>'+
                            '</td class="pogramnobg">'+
                            '<td class="pogramnobg">'+
                                '<a class="aspNetDisabled pogramno" >'+val.upcoming+'</a>'+
                            '</td>'+
                            '<td class="pogramnobg">'+
                                '<a class="aspNetDisabled pogramno" >'+val.actionpending+'</a>'+
                            '</td>'+
                            '<td class="pogramnobg">'+
                                '<a href="javascript:void(0);" onclick="redirectProgram(&#39;'+val.Client_ID+'&#39;,&#39;4d6a6b324e4451344d513d3d&#39;,&#39;'+val.Program_Name+'&#39;)" class="pogramno">'+val.completed+'</a>'+
                            '</td>'+
                            '<td class="text-center text-green" style="background: #e4fcf1;">'+val.learner+'</td>'+
                            '<td class="text-center text-green" style="background: #e4fcf1;">'+val.present+'</td>'+
                            '<td class="text-center text-green" style="background: #e4fcf1;">'+val.absent+'</td>'+
                            '<td style="background: #e4fcf1;">'+
                            '<span class="percenta">'+
                                '<span>'+val.persentage+' </span>'+
                                '<i class="fa fa-percent" aria-hidden="true"></i></span>'+
                            '</td>'+
                        '</tr>'
                    );
                    i++;
                    clientnames1.push(val.Program_Name);
                    completedProject1.push(val.completed);
                    var icp1 = (val.batch) - (val.completed);
                    incompletedProject1.push(icp1);
                });
                //console.log(clientnames1,completedProject1,incompletedProject1);
                $('#charttype2').show();
                barchartforprogram(clientnames1,completedProject1,incompletedProject1);
                clientnames1 = [];
                completedProject1 = [];
                incompletedProject1 = [];
            }else{
                $('#programData').html(
                    '<tr class="text-center">'+
                        '<td colspan="12" > No record found </td>'+
                    '</tr>'
                );
                $('#charttype2').hide();
            }
            },
            complete: function () {
                $('.ploader').hide();
            }
        });
    }
    //programWiseData();
    /***********************End****************************/


    /*******************************For Program wise filters**********************/
    let startDateProgram = '';
    let endDateProgram = '';

    function cb2(start, end) {
        $('#programWiseDates').html(start + ' - ' + end);
    }
    $('#programWiseDates').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
            'This Year': [moment().startOf('year'), moment().endOf('year')],
            'Last Year': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
        },
        "autoApply": true,
        "showCustomRangeLabel": false,
        "alwaysShowCalendars": true,
        "opens": "left"
        }, 
        function(start, end, label) {
            startDateProgram = start.format("YYYY-MM-DD").toString();
            endDateProgram = end.format("YYYY-MM-DD").toString();
	    startDate1 = start.format("DD MMMM, YYYY").toString();
            endDate1 = end.format("DD MMMM, YYYY").toString();
	    cb2(startDate1, endDate1);
            getProgramWiseData(startDateProgram, endDateProgram);
    });

    function getProgramWiseData(startDateProgram, endDateProgram){
        var clientid= $('#clientType').val();
        programWiseData(clientid,startDateProgram,endDateProgram);
    }

    $('#clientType').on('change',function(e){
        e.preventDefault();
        var clientid= $('#clientType').val();
        programWiseData(clientid,startDateProgram,endDateProgram);
    });

    function redirectProgram(clientid, status, program){
        if(status != 0){
            location.href=baseUrl+"batch?status="+status+"&clientid="+clientid+"&form="+startDateProgram+"&to="+endDateProgram+"&program="+program;
        }else{
            location.href=baseUrl+"batch?status=&clientid="+clientid+"&form="+startDateProgram+"&to="+endDateProgram+"&program="+program;
        }
    }

    function barchartforprogram(clientnames1,completedProject1,incompletedProject1){

        var ctx = document.getElementById('programChart2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels: clientnames1,
                datasets: [
                    {
                        label: 'Completed ',
                        data: completedProject1,
                        backgroundColor: 'rgba(0,84,166,1)',
                        borderColor: 'rgba(0,84,166,1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Total Batches',
                        data: incompletedProject1,
                        backgroundColor: 'rgba(204,221,237,1)',
                        borderColor: 'rgba(204,221,237,1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    xAxes: [{
                        stacked: true,
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                },
                events: ["mouseout", "click", "touchstart", "touchmove", "touchend"],
                plugins: {
                    tooltip: {
                    events: ['click']
                    }
                }
            }
        });
        
    }
    /************************************END**************************************/





function statsChart(active,inactive,divname,trackColor){
    var active = active;
    var inactive = inactive; 
    var total = active+inactive;
    var divname =  divname;                         
    var totalper = active/total*('100');
    var dataper = totalper.toFixed(0)

    $(function(){
        $("."+divname).attr("data-percent", dataper);
        $('.'+divname+'-chart').easyPieChart({
            animate: 2000,
            lineWidth: 15,
            scaleColor: false,
            lineCap: 'circle',
            scaleLength: 0,
            size: 110,
            trackColor: "#dc3545",
            barColor: trackColor 
        });
    });
}

$('.totalTierPoints').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});







}
