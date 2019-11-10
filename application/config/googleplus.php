<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config['googleplus']['application_name'] = getenv('GP_APPLICATION_NAME');
$config['googleplus']['client_id']        = getenv('GP_CLIENT_ID');
$config['googleplus']['client_secret']    = getenv('GP_CLIENT_SECRET');
$config['googleplus']['redirect_uri']     = getenv('GP_REDIRECT_URI');
$config['googleplus']['api_key']          = getenv('GP_API_KEY');
$config['googleplus']['scopes']           = array();