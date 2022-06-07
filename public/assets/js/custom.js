(function($){

    $('#dlt-btn').click(function(){

        let conf = confirm('are you sure to delete');
        if(conf) {
            return true;
        }else{
            return false;
        }
    });

})
(jQuery)
//////////////////////////////////