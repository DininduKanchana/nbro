<?php

function getUniqueString(){
    // Change the line below to your timezone!
    date_default_timezone_set('Asia/Colombo');
    $date = time();
    return $date;
}

function getNotification($msg, $type) {
    return "<script type=\"text/javascript\">
    $.notify({
        // options
        message: '$msg' 
    },{
        // settings
        type: '$type',
        allow_dismiss: true,
        placement: {
            from: 'bottom',
            align: 'right'
        },
        z_index: 1031,
        delay: 5000,
        timer: 1000,
        mouse_over: null,
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
        },
    });
</script>";

}

?>