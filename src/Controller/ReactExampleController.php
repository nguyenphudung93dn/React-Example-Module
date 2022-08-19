<?php

namespace Drupal\react_example_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ReatExampleController.
 *
 * @package Drupal\react_example_module\Controller
 */
class ReatExampleController extends ControllerBase {

  /**
   * Form.
   * @return string 
   */
  public function get_form() {

    if (file_exists(__DIR__ . '../../../reactjs/js/dist_dev')) {
      $library = 'react_example_module/react_app_dev';
    }else{
      $library =  'react_example_module/react_app';
    }
    return [
        '#type' => 'markup',
        '#markup' => '<div id="root"></div>',
        '#attached' => [
            'library' =>  [
              $library ,
            ],
        ],
    ];
  }

}