<?php
namespace Craft;

/**
 * Contact Form controller
 */
class FooController extends BaseController {
  
  protected $allowAnonymous = true;
  
  function actionText() {
    $segments = craft()->request->actionSegments;
    
    $data = array(
      'text'=> $segments[2]
    );
   
    $this->renderTemplate('foo/text',$data);
  }

}
?>