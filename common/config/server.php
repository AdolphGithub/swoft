<?php

return [
    // 弄几个公共的就可以了.后期需要自己加的自己来处理.
    'setting' => [
        'worker_num'            => env('WORKER_NUM', 1),
        'max_request'           => env('MAX_REQUEST', 10000),
        'daemonize'             => env('DAEMONIZE', 0),
        'dispatch_mode'         => env('DISPATCH_MODE', 2),
        'log_file'              => env('LOG_FILE', '@runtime/logs/swoole.log'),
        'task_worker_num'       => env('TASK_WORKER_NUM', 1),
        'package_max_length'    => env('PACKAGE_MAX_LENGTH', 2048),
        'upload_tmp_dir'        => env('UPLOAD_TMP_DIR', '@runtime/uploadfiles'),
        'document_root'         => env('DOCUMENT_ROOT', '@root/public'),
        'enable_static_handler' => env('ENABLE_STATIC_HANDLER', false),
        'open_http2_protocol'   => env('OPEN_HTTP2_PROTOCOL', false),
        'ssl_cert_file'         => env('SSL_CERT_FILE', ''),
        'ssl_key_file'          => env('SSL_KEY_FILE', ''),
        'task_ipc_mode'         => env('TASK_IPC_MODE', 1),
        'message_queue_key'     => env('MESSAGE_QUEUE_KEY', 0x70001001),
        'task_tmpdir'           => env('TASK_TMPDIR', '/tmp'),
    ],
];
