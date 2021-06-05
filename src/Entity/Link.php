<?php

namespace Entity;

use Entity\User;
use ludk\Utils\Serializer;

class Link
{
    public $id;
    public $name;
    public $url;
    public $desc;
    public $user;
    use Serializer;
}
