<?php

/**
 * Created by PhpStorm.
 * User: Pathum
 * Date: 9/21/2015
 * Time: 9:14 PM
 */
class AddAdmin extends ModelAdmin
{
    private static $managed_models = array(
        'Product',
        'Category'
    );

    private static $url_segment = 'add';

    private static $menu_title = 'My Add Admin';

}