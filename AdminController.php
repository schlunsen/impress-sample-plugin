<?php
/**
 * Adds administration grid
 *
 * When this plugin is installed, `Newsletter example` panel appears in administration site.
 *
 */

namespace Plugin\RSMapPlugin;


class AdminController extends \Ip\GridController
{

    protected  function config(){
        return array(
            'title' => 'RS Map',
            'table' => 'rsmapplugin',
            'deleteWarning' => 'Are you sure?',

            'createPosition' => 'top',
            'pageSize' => 25,
            'fields' => array(
                array(
                    'label' => 'lang',
                    'field' => 'lang',
            //        'validators' => array('Required', 'lang'),
                ),
                array(
                    'label' => 'long',
                    'field' => 'long',
              //      'validators' => array('Required', 'long'),
                )

            )
        );
    }

} 