<?php

//****************************************
//PLEASE SPECIFY THE VARIABLES BELOW
//****************************************

$DB_HOST = '';
//Make sure MySQL is running at default port 3306. Or you have to edit common.php
//If you use localhost, make sure you have localhost defined in /etc/hosts

//The database name for password_manager
$DB_NAME = '';

//Database Username
$DB_USER = '';

//Database Password
$DB_PASSWORD = '';

//Host Domain - Only Allow Visits to This Domain (i.e., the address inputed in users' browser).
//Note: It must start with https://
//This is to prevent cross-site attacks. If $HOSTDOMAIN is not the prefix of HTTP_REFERER string,
//an exception will be raised.
$HOSTDOMAIN = 'https://password-manager.example.com/';

//Default timezone
date_default_timezone_set('America/Los_Angeles');

//SALT For Encryption
//Don't change this section after you start using password-manager. Or you can't decrypt your password!
//DON'T USE '\', IT CAN CAUSE PROBLEMS FOR BACKUP
//DO NOT MAKE THEM SAME
//salt 1 used to create sha512 of password (password signiture)
$GLOBAL_SALT_1 = 'iunin19dnu9ismcj9IUNuia,cne9e389]{}{}[]*@key';
//Only use salt 2 in client side
$GLOBAL_SALT_2 = 'ncew8d7*(e8fyh2inc osd2)wefcsBIUsdfq2as;dqw[;[]]';
//Only use salt 3 in server side
$GLOBAL_SALT_3 = '*&Kjnskjnaucibiqb9298hv9sHIUWNiukJNIusfbic897*(^)';

//****************************************
//OPTIONAL EMAIL VERIFICATION
//****************************************

$EMAIL_VERIFICATION_ENABLED = false;

// If $EMAIL_VERIFICATION_ENABLED is true, configuration below is REQUIRED!
// Go to https://sendgrid.com/ to register. Free account has 100 emails / day
// If you want to use other service provider / use your own SMTP. Please change code in send_email.php

$SENDGRID_USER_NAME = '';
$SENDGRID_PASSWORD = '';

// Use your own domain and configure according to
//    https://sendgrid.com/docs/ui/account-and-settings/how-to-set-up-domain-authentication/
// Do not use random domain as your email will be thrown into spam folder.

$SENDGRID_FROM_ADDRESS = 'example.com<noreply@example.com>';

//********************************************************************
//ADVANCED SETTINGS, STOP EDITING IF YOU DON'T KNOW WHAT YOU ARE DOING
//********************************************************************
//DEFAULT fields
//Don't start key with `_` (e.g. don't include `_password`) as those are system fields.
$DEFAULT_FIELDS = json_encode([
    'url' => [
        'colname' => 'URL',
        'hint'    => '',
        'cls'     => 'hidden',
    ],
    'user' => [
        'colname'  => 'Username',
        'hint'     => '',
        'cls'      => 'hidden-xs',
        'position' => 1,
    ],
    'comment' => [
        'colname' => 'Comment',
        'hint'    => '',
        'cls'     => 'hidden',
        'type'    => 'textarea',
    ],
    'tags' => [
        'colname' => 'Tags',
        'hint'    => 'Comma separated values',
        'cls'     => 'hidden-xs',
    ],
]);

//File upload feature
$FILE_ENABLED = true;
//Allow Password-Manager to store files? True -- YES; False -- NO
//Disabling File feature will hide API on user screen, but the backend won't change.

//Allow new user signup
$ALLOW_SIGN_UP = true;

//Allow users to be able to use the 'Customize fields' option
$CUSTOMIZE_FIELDS = true;

//PIN expire
$PIN_EXPIRE_TIME = 7776000;
//PIN expire in 7776000 seconds.

//LOG expire
$LOG_EXPIRE_TIME = 7776000;
//LOG (history) expire in 7776000 seconds (90 days).

//Block IP error try
$BLOCK_IP_TRY = 10;
//block ip if we see 10 error try in BLOCK_IP_TIME.

//BLOCK IP time
$BLOCK_IP_TIME = 3600;
//block ip for 1 hour

//Block account error try
$BLOCK_ACCOUNT_TRY = 5;
//block account if we see 5 error try in ACCOUNT_BAN_TIME.
// NOTE: if you turn on email verification, set this value to >= 2 for things to work.

//BLOCK account time
$ACCOUNT_BAN_TIME = 180;
//block account if we see BLOCK_ACCOUNT_TRY in 3 minutes

//TIMEOUT -> LOGOUT
$BROWSER_TIMEOUT = 360; //seconds
//Automatically logout after no operation for 6 minutes

$SERVER_TIMEOUT = 1200; //seconds
//Automatically logout (at server side) after 1200s since login

//Number of iterations for the password hashing
$PBKDF2_ITERATIONS = 64000;

//JS number of iterations for backup key hash. Each iteration is
//a call to login PBKDF2 module.
$BACKUP_KEY_ITERATIONS = 10;

//Minimal length of user passwords
$MINIMAL_PASSWORD_LENGTH = 7;
//For default BLOCK_ACCOUNT_TRY and ACCOUNT_BAN_TIME, it will take more than 6 years
// on average to brute-force enumerate 7-digits number-only password

//Minimal length of user name
$MINIMAL_NAME_LENGTH = 5;

//Generating Password (those variables will be written into JavaScript)
//the default password length to be generated
$DEFAULT_LENGTH = 13;
//Use those letters to generate random password
//DO NOT USE LETTERS LIKE &,>,< HERE (letters have special meaning in HTML)
//MAKE SURE EACH LETTER ONLY APPEAR ONCE!!!
$DEFAULT_LETTER_USED = '*+-0123456789=ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz~';

//YOU ARE DONE.
//DON'T FORGET TO UPLOAD THE INITIAL TABLES!
//If you want to implement CAPTCHA, please modify rest/check.php
