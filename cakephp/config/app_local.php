<?php
/*
 * Local configuration file to provide any overrides to your app.php configuration.
 * Copy and save this file as app_local.php and make changes as required.
 * Note: It is not recommended to commit files with credentials such as app_local.php
 * into source code version control.
 */
return [
    /*
     * Debug Level:
     *
     * Production Mode:
     * false: No error messages, errors, or warnings shown.
     *
     * Development Mode:
     * true: Errors and warnings shown.
     */
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),

    /*
     * Security and encryption configuration
     *
     * - salt - A random string used in security hashing methods.
     *   The salt value is also used as the encryption key.
     *   You should treat it as extremely sensitive data.
     */
    'Security' => [
        'salt' => env('SECURITY_SALT', 'a78b86b460837444142667d29983cbd23ecc88a5c9a5fdb74105a000bb43d227'),
    ],

    /*
     * Connection information used by the ORM to connect
     * to your application's datastores.
     *
     * See app.php for more configuration options.
     */
    'Datasources' => [
        'default' => [
            'host' => 'myapp-mysql',
            'port' => '3306',
            'username' => 'tyrell_card',
            'password' => 'tyrell_card',
            'database' => 'tyrell_card',
        ],
        // 'default' => [
        //     'host' => 'localhost',
        //     /*
        //      * CakePHP will use the default DB port based on the driver selected
        //      * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
        //      * the following line and set the port accordingly
        //      */
        //     //'port' => 'non_standard_port_number',

        //     'username' => 'my_app',
        //     'password' => 'secret',

        //     'database' => 'my_app',
        //     /*
        //      * If not using the default 'public' schema with the PostgreSQL driver
        //      * set it here.
        //      */
        //     //'schema' => 'myapp',

        //     /*
        //      * You can use a DSN string to set the entire configuration
        //      */
        //     'url' => env('DATABASE_URL', null),
        // ],

        /*
         * The test connection is used during the test suite.
         */
        'test' => [
            'host' => 'localhost',
            //'port' => 'non_standard_port_number',
            'username' => 'my_app',
            'password' => 'secret',
            'database' => 'test_myapp',
            //'schema' => 'myapp',
            'url' => env('DATABASE_TEST_URL', 'sqlite://127.0.0.1/tests.sqlite'),
        ],
    ],

    /*
     * Email configuration.
     *
     * Host and credential configuration in case you are using SmtpTransport
     *
     * See app.php for more configuration options.
     */
    'EmailTransport' => [
        'default' => [
            'host' => 'localhost',
            'port' => 25,
            'username' => null,
            'password' => null,
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
];
