<?php

/**
 * Created by PhpStorm.
 * User: Pathum
 * Date: 9/21/2015
 * Time: 9:11 PM
 */
class Product extends DataObject
{

    private static $db = array(
        'Name'   => 'Varchar',
        'RefId'  => 'Int'
    );

    private static $has_one = array(
        'Caregory' => 'Category'
    );

}