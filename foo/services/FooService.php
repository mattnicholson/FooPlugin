<?php
namespace Craft;

class FooService extends BaseApplicationComponent
{
    public function __construct()
    {

    }
    
    public function getSomething(){
      return array('foo'=>'bar');
    }
    
}

?>