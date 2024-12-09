<?php

namespace BOILERPLATE\Inc;

use BOILERPLATE\Inc\Traits\Credentials_Options;
use BOILERPLATE\Inc\Traits\Program_Logs;
use BOILERPLATE\Inc\Traits\Singleton;

class Template {

    use Singleton;
    use Program_Logs;
    use Credentials_Options;

    public function __construct() {
        $this->setup_hooks();
        // $this->load_credentials_options();
    }

    public function setup_hooks() {
        // Actions and filters hooks
    }

}