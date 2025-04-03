<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 connectedSortable ui-sortable">
            <section class="content-header">
                <div class="row">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('admin/home'); ?>"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item">Clients</li>
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
                                            <h3 class="box-title pull-left">List of Partners </h3>
                                        </div>
                                        <div class="col-md-6" style="text-align: right;">
                                            <a href="<?= base_url('admin/addclient'); ?>" class="btn btn-primary btn-sm">Add New Client</a>
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
                                                            <th>Partner Name</th> 
                                                            <th>Short Name</th>    
                                                            <th>Registered On</th>
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

    var status = "<?php echo @$_GET['status']; ?>";
    if(status == ''){
        status = "1";
    }
    var type = "<?php echo @$_GET['type']; ?>";
    if(type == ''){
        type = 0;
    }
    var crudTable = $('#crudTable').DataTable({
        'processing': true,
        'serverSide': true,
        // "scrollX": true,
        'serverMethod': 'post',
        'order': [[1, 'desc']],
        'ajax': {
            'url':'<?=base_url('admin/clientlist/') ?>',
            'data': function(data){
                data.status = status;
                data.type = type;
            }
        },
        "columnDefs": [
            // { "orderable": false, "targets": 6 },
            // { "orderable": false, "targets": 3 }
            //{ "searchable": true, "targets": [0] },
        ],
        'columns': [
            { data: 'partner_name' },
            { data: 'short_name' },
            { data: 'created_at' },
        ],
    });



});
</script>

