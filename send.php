<?php
if( isset( $_POST['message1'] ) && $_POST['message1'] === '')
    exit;

require( dirname(__FILE__) . '/wp-load.php');

if( isset( $_POST['name'] )
    && isset( $_POST['phone'] ) && is_phone( $_POST['phone'] )) {

    $headers = array(
        "Content-type: text/html; charset=utf-8",
        "From: " . $_POST['name'] . " <" . $_POST['phone'] . ">"
    );

    if( wp_mail( get_option('admin_email'), 'Сообщение с сайта', wpautop( $_POST['message'] ), $headers ) ) {
        header('Location:' . site_url('/contact?msg=success') );
        exit;
    }


}

header('Location:' . site_url('/contact?msg=error') );
exit;
