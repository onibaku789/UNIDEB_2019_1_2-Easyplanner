<?
class PackageManager {
  private static $instance = null; 
  
  public static function getInstance() {
    if(self::$instance === null) {
        self::$instance = new self;
    }
    return self::$instance;
  }
  /**
   * This returns all the modules with their package
   * file location.
   * @returns an associative array of module name and package name.
   */
  function getModules() {
    return Database::getInstance()->makeQuery("SELECT * FROM blue_modules")->fetch_all(MYSQLI_ASSOC);
  }
  
  function getPackagePathById($id) {
    return Database::getInstance()->makeQuery("SELECT package_path FROM blue_modules WHERE id = '".$id."'")->fetch_assoc()["package_path"];
  }
  
  private function scanModuleDirectory($path, $package_name, $modul_neve, &$result = null) {
    $scan = scandir($path);
    foreach($scan as $file) {
      if($file === "." || $file === ".." || preg_match("#(.*)_package.php#",$file)) continue;
      if(is_dir($path."/".$file)) 
        $this->scanModuleDirectory($path."/".$file, $package_name, $modul_neve, $result);
      else {
        $include_path = substr($path, strpos($path,"components"));
        $pathinfo = pathinfo($include_path."/".$file);
        if($pathinfo["extension"] === "php") {
          $classes = get_declared_classes();
          include_once $include_path."/".$file;
          $diff = array_diff(get_declared_classes(), $classes);
          //var_dump( $diff);
          if(!empty($diff))
            $result[array_pop($diff)] = $include_path.'/'.$file;
        }
      }
    }    
  }
  
  function addAllRemainClasses($path, $package_name, $modul_neve) {
    $this->scanModuleDirectory($path, $package_name, $modul_neve, $result);
    if(count($result) > 0) {
      $elso = true;
      $pattern = "<?
        class ".$modul_neve."_Package {
          static \$classes = array(";
      foreach($result+($modul_neve."_Package")::$classes as $class_name=>$class_path) {
        $pattern .= "\n".(!$elso?",":"")."\"".$class_name."\"=>\"".$class_path."\"";
        $elso = false;
      }
      $pattern .= ");
      }";
      $include_path = substr($path, strpos($path,"components"));
      file_put_contents($include_path."/".$package_name, $pattern);
    }
  }

  function createNewPackage($pkg_name) {
    $lowercased_pkg_name = strtolower($pkg_name);
    $absolute_path = $_SERVER["DOCUMENT_ROOT"]."/components/".$lowercased_pkg_name."/".$lowercased_pkg_name."_package.php";
    
    if(strlen($pkg_name) === 0) $errors[] = "EMPTY_PACKAGE_NAME";
    $q = Database::getInstance()->makeQuery("SELECT module_name FROM blue_modules WHERE module_name = '".$pkg_name."'");
    if($q->num_rows > 0) $errors[] = "PACKAGE_NAME_MUST_BE_UNIQUE";
    
    if(!empty($errors))
      return $errors;
      
    if(!file_exists($_SERVER["DOCUMENT_ROOT"]."/components/".$lowercased_pkg_name))
      mkdir($_SERVER["DOCUMENT_ROOT"]."/components/".$lowercased_pkg_name);
    if(!file_exists($absolute_path)) {
      echo "áá";
      file_put_contents($absolute_path,
      "<?
      class ".ucfirst($pkg_name)."_Package {
        static \$classes = array();
      }");
      Database::getInstance()->makeQuery("INSERT INTO blue_modules(module_name,package_path,class_name) VALUES('".ucfirst($pkg_name)."','".$absolute_path."','".ucfirst($pkg_name)."_Package')");
      return true;
    }
  }
  
  function getPackageArray($modul_name) {
    $modul_name = $modul_name."_Package";
    return $modul_name::$classes;
  }
}