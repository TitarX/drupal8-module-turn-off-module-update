<?php

namespace Drupal\turn_off_module_update\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;

class TurnOffModuleUpdateController extends ControllerBase {

  private static $modulesWithoutUpdate = [
    // 'rules'
  ];

  public static function getModulesWithoutUpdate() {
    return self::$modulesWithoutUpdate;
  }

  public function getContent() {
    $output = '<ol>';

    foreach ($this::$modulesWithoutUpdate as $moduleWithoutUpdate) {
      $output .= '<li>';
      $output .= $moduleWithoutUpdate;
      $output .= '</li>';
    }

    $output .= '</ol>';

    return [
      '#type' => 'markup',
      '#markup' => $output,
    ];
  }

  public function access(AccountInterface $account) {
    return AccessResult::allowedIf(TRUE);
  }

}
