<?php

add_action('wp_ajax_send_mail', 'send_mail');
add_action('wp_ajax_nopriv_send_mail', 'send_mail');

function send_mail()
{

    if ( isset($_POST['bot']) && $_POST['bot'] == '' ) {
        $errors = array();
        $message = '<html><body>';
        if ( isset($_POST['name']) ) {
            if ( $_POST['name'] != '' ) {
                $message .= 'Имя: ' . htmlspecialchars($_POST['name']);
            }else{
                $errors[] = 'Введите ваше имя';
            }
        }

        $message .= '</body></html>';
    }
}