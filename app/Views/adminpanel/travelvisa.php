<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url('admin_assets/js/jquery.dataTables.min.js');?>"></script>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 connectedSortable ui-sortable">

            <section class="content-header">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('admin/home'); ?>"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item">Board Members</li>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-danger with-sh">
                                <div class="box-header with-border">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- <h3 class="box-title pull-left">List of Examinees </h3> -->
                                        </div>
                                        <div class="col-md-6" style="text-align: right;">
                                            <a href="<?= base_url('admin/addtravelvisa'); ?>" class="btn btn-primary btn-sm">Add New Travel Visa</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body birth">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="homeg">
                                                <table id="crudTable" class='display dataTable table table-striped table-bordered' style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th> 
                                                            <th>From</th> 
                                                            <th>To</th>
                                                            <th>Visa Requirements</th>
                                                            <th>Visa Invitation</th>
                                                            <th>Remarks</th> 
                                                            <th>Eligible For Evisa</th>
                                                            <th>Evisa Fees</th>
                                                            <th>Regular Visa Fee</th> 
                                                            <th>Visa Duration</th>
                                                            <th>Visa Application</th>
                                                            <th>Evisa Application</th> 
                                                            <th>Resources</th>
                                                            <th>Created On</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
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

$(document).ready(function(){
    var crudTable = $('#crudTable').DataTable({
        'processing': true,
        'serverSide': true,
        "scrollX": true,
        'serverMethod': 'post',
        'order': [[0, 'desc']],
        'ajax': {
            'url':'<?=base_url('admin/get_all_travel_visa') ?>',
            'data': function(data){
                data.status = "1";
            }
        },
        "columnDefs": [],
        'columns': [
            { data: 'id' },
            { data: 'country_from' },
            { data: 'country_to' },
            { data: 'visa_requirement' },
            { data: 'visa_invitation' },
            { data: 'remark' },
            { data: 'eligible_for_evisa' },
            { data: 'evisa_fees' },
            { data: 'regular_visa_fee' },
            { data: 'visa_duration' },
            { data: 'visa_application' },
            { data: 'evisa_application' },
            { data: 'resource' },
            { data: 'date' },
        ],
    });
});
</script>

