<?php
return [

    /**
     *
     * table prefix for
     *
     */

    'table_prefix' => 'shaparak_',

    /**
     *
     *  shaparak base url
     *
     */

    'base_url' => env('SHAPARAK_BASE_URL'),

    /**
     *
     * on main server set this option to null
     *
     **/

    'proxy_url' => env('SHAPARAK_PROXY'),

    /**
     *
     *  shaparak username
     *
     */

    'username'      => env('SHAPARAK_USERNAME'),
    /**
     *
     *  shaparak username type: because of .env file return variable as string type. in this case
     * if your username is integer you should pass SHAPARAK_USERNAME_TYPE=true otherwise as default type
     * you get string type
     *
     */
    'username_type' => env('SHAPARAK_USERNAME_TYPE'),

    /**
     *
     *  shaparak password
     *
     */

    'password' => env('SHAPARAK_PASSWORD'),

    /**
     *
     * shaparak username type: because of .env file return variable as string type. in this case
     * if your username is integer you should pass SHAPARAK_PASSWORD_TYPE=true otherwise as default type
     * you get string type
     *
     */

    'password_type' => env('SHAPARAK_PASSWORD_TYPE', 'string'),

];
