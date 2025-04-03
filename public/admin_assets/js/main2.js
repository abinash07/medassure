
    //## For saveing sidebar menu state
    var sidebarState = localStorage.getItem('sidebarState');
    if(sidebarState){
        $('body').removeClass('sidebar-collapse'); 
    }
    
    function setSidebarState(value){
        localStorage.setItem('sidebarState', value);
    }
    
    function clearSidebarState(){
        localStorage.removeItem('sidebarState');
    }

    $('#leftSideBar').on('click', function(){
        if(($('body').hasClass('sidebar-collapse'))){
            setSidebarState('expands');
            //alert('collapse');
        }else{
            clearSidebarState();
        }
    });


    // For CSV File validation
    $('#fileCSV').change(function(){
        const file = this.files[0];
        if(file.size > 100){
            var userImage = document.getElementById('fileCSV');
            var filename = userImage.value;
            var extdot = filename.lastIndexOf(".")+1;
            var image_ext = filename.substr(extdot,filename.lenght).toLowerCase();
            if (image_ext == "csv" || image_ext == "CSV") {
                $('.error-msg').html('');
            }else{
                $('#fileCSV').val('');
                $('.error-msg').html('Please upload only CSV file');
            }
        }else{
            $('#fileCSV').val('');
            $('.error-msg').html('Please upload file lessthan 2 MB');
        }
    });
    

