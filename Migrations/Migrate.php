<?php

namespace ox4D\cli\migrations;

use MvcCore\Jtl\Database\Migrations\DataBaseMigrations;
class migrate
{

    public static function create()
    {

        system("cmd /c ".__DIR__."/sshConnect,bat");
        $migration = new DataBaseMigrations();
        $migration->upExtention();
        echo ' [+] Migration Created Successfully!';
    }


    function update($fileName)
    {

    }

    function delete()
    {
        $migration = new DataBaseMigrations();
        $migration->downExtention();

    }
}