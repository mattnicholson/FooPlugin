<?php
namespace Craft;

/**
 * Contact Form controller
 */
class FooController extends BaseController {
  
  protected $allowAnonymous = true;
  
  function actionText() {
  
    $segments = craft()->request->actionSegments;
    $serviceData = craft()->foo->getSomething();
    
    $data = array(
      'segment'=> $segments[2],
      'serviceData' => $serviceData
    );
   
    $this->renderTemplate('foo/text',$data);
  }

}
?>