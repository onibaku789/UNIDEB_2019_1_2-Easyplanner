<?php
class Autoload {
  public function loadClasses() {
    include_once "components/system/database.php";
    include_once "components/packagemanager/packagemanager.php";
    include_once "components/system/config.php";
    include_once "components/abstracts/abstract_page.php";
    spl_autoload_register(function() {
        $modules = PackageManager::getInstance()->getModules();
        /*foreach(Package::$classes as $path) {
            require_once($path);
        }*/
        foreach($modules as $module) {
          require_once($module["package_path"]);
          foreach($module["class_name"]::$classes as $class_path) {
            require_once($class_path);
          }
        }
    });
  }
}