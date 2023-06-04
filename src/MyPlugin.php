<?php

namespace YourNamespace\MyPlugin;

use YourNamespace\MyPlugin\Database\Migrations\CreateExampleTable;

class MyPlugin
{
    public function hello()
    {
        return 'Merhaba, benim eklentim! v1.0.0';
    }

    public function install()
    {
        $this->migrationsNamespace = 'YourNamespace\\MyPlugin\\Database\\Migrations';
        parent::install();
        $this->migrate(new CreateExampleTable());
    }
}
