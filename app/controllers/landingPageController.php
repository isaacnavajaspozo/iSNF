<?php

require_once './iSNF/ORM/db.php';
require_once './iSNF/kernel.php';


class LandingPage extends db {

    public function __construct() {
        $this->env();

    }

    public function index() {
        $data['version'] = getenv('VERSION');
        $data['kernelFile'] = file_exists('./iSNF/kernel.php') ? true : false;
        $data['ORMDir'] = is_dir('./iSNF/ORM') ? true : false;
        $this->view('landingPage.php', $data);
    }
}

