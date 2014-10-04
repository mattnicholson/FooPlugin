<?php
namespace Craft;

class FooPlugin extends BasePlugin
{
    function getName()
  	{
  		return Craft::t('Jumping off point for plugin development');
  	}
  
  	function getVersion()
  	{
  		return '1';
  	}
  
  	function getDeveloper()
  	{
  		return 'Archive';
  	}
  
  	function getDeveloperUrl()
  	{
  		return 'http://archivestudio.co.uk';
  	}

    public function init()
    {
        
    }
    
}
?>