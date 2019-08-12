<?php

return [
    'queue' => false,
    'mail_to' => env('SEND_REPORT_MAIL_TO', 'default_mail@gmail.com'),
    'subject' => 'Debug mail',
    'cc' => [],
    'can_send' => env('SEND_REPORT_MAIL', false),
];
