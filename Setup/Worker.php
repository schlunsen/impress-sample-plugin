<?php

namespace Plugin\RSMapPlugin\Setup;

class Worker extends \Ip\SetupWorker
{

    /**
     * Create SQL table on plugin activation
     */
    public function activate()
    {

        $sql = '
        CREATE TABLE IF NOT EXISTS
           ' . ipTable('rsmapplugin') . '
        (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `lang` varchar(255) ,
        `long` varchar(255) ,
        PRIMARY KEY (`id`)
        )';
        ipDb()->execute($sql);

    }

    public function deactivate()
    {
    }

    public function remove()
    {
        $sql = '
        DROP TABLE IF EXISTS
           ' . ipTable('rsmapplugin') ;

        ipDb()->execute($sql);
    }

}

