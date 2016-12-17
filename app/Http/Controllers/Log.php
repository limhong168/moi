<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16-Nov-16
 * Time: 11:41 AM
 */

namespace App\Http\Controllers;
use Weboap\Visitor\Visitor;

class Log
{

    public function test(){
        Visitor::get();
    }
}