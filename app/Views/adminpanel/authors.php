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
                                            <h3 class="box-title pull-left">List of Authors </h3>
                                        </div>
                                        <div class="col-md-6" style="text-align: right;">
                                            <a href="<?= base_url('admin/addauthor'); ?>" class="btn btn-primary btn-sm">Add New Author</a>
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
                                                            <th>Name</th>
                                                            <th>Bio</th>
                                                            <th>Image</th>
                                                            <th>Created On</th>
                                                            <th>Action</th>
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
            'serverMethod': 'post',
            'order': [[0, 'desc']],
            'ajax': {
                'url':'<?=base_url('admin/get_all_author') ?>',
                'data': function(data){
                    data.status = "1";
                }
            },
            "columnDefs": [],
            'columns': [
                { data: 'id' },
                { data: 'name' },
                { data: 'bio' },
                { data: 'image' },
                { data: 'date' },
                { data: 'action' },
            ],
        });

        crudTable.on('draw.dt', function() {
            deleteMe();
        });

        function showDeleteConfirmation(table,id) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You are about to delete this item.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it',
                cancelButtonText: 'Cancel',
                allowOutsideClick: false,
            }).then((result) => {
                if(result.isConfirmed){
                    $.ajax({
                        url: "<?php echo base_url('admin/delete_me'); ?>",
                        method: "POST",
                        data: {table: table, id: id},
                        dataType: 'JSON',         
                        beforeSend: function () {

                        },
                        success: function(data){
                            if(data.status == true){
                                crudTable.draw();
                            }
                            if(data.status == false){
                                crudTable.draw();
                            }
                        },
                        complete: function () {

                        }
                    });
                }
            });
        }
            
        function deleteMe(){
            $('.delete-me').on('click',function(e){
                e.preventDefault();
                var table = $(this).data('tablename');
                var id = $(this).data('tableid');
                showDeleteConfirmation(table,id);
            })
        }

    });
</script>

