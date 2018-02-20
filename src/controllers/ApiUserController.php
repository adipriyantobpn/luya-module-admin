<?php

namespace luya\admin\controllers;

use luya\admin\ngrest\base\Controller;

/**
 * NgRest User Controller.
 *
 * @author Basil Suter <basil@nadar.io>
 * @since 1.0.4
 */
class ApiUserController extends Controller
{
    public $modelClass = 'luya\admin\models\ApiUser';
}
