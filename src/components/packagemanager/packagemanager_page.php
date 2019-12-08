<?
class PackageManager_Page extends Abstract_Page {
  function handleEvents() {
    if(isset($_POST["submit_switch_module"])) {
      $_SESSION["packagemanager"]["modul_id"] = $_POST["module_id"];
      $_SESSION["packagemanager"]["modul_neve"] = $_POST["module_name"];
    }
    
    if(isset($_POST["submit_back"])) {
      unset($_SESSION["packagemanager"]);
    }
    
    if(isset($_POST["submit_teszt"])) {
      $this->forward("Team_Page");
    }
    
    if(isset($_POST["submit_auto_add"])) {
      $package_path = PackageManager::getInstance()->getPackagePathById($_SESSION["packagemanager"]["modul_id"]);
      $modul_neve = $_SESSION["packagemanager"]["modul_neve"];
      PackageManager::getInstance()->addAllRemainClasses(dirname($package_path),basename($package_path), $modul_neve);
    }

    if(isset($_POST["submit_create_new_module"])) {
      if(($this->errors = PackageManager::getInstance()->createNewPackage($_POST["new_package_name"])) !== TRUE)
        echo $this->displayErrors($this->errors);
    }
  }
  
  function show() {
    if($_SESSION["user_data"]["id"] != 8 )
      if($_SESSION["user_data"]["id"] != 6)
      header("Location: /index.php?page=main");
    $this->form_open();
    if(!isset($_SESSION["packagemanager"])) {
      $this->showPackageList();
    } else 
      $this->showPackage();
    $this->form_close();
  }
  
  function showPackage() {
    ?>
    <div class="container">
      <table class="table table-hover">
        <thead>
          <th>Osztály neve</th>
          <th>Elérési útvonal</th>
        </thead>
        <tbody>
        <?
        $class = $_SESSION["packagemanager"]["modul_neve"]."_Package";
        foreach(PackageManager::getInstance()->getPackageArray($_SESSION["packagemanager"]["modul_neve"]) as $class_name=>$path) {
          ?>
          <tr>
            <td><?=$class_name?></td>
            <td><?=$path?></td>
          </tr>
          <?
        } 
        ?>
        </tbody>
      </table>
      <input type="submit" name="submit_auto_add" class="btn btn-primary"value="Automatikus hozzáadás">
      <input type="submit" name="submit_back" class="btn btn-secondary"value="Vissza">
    </div>
    <?
  }
  
  function showPackageList() {
    ?>
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Modul neve</th>
          </tr>
        </thead>
        <tbody>
        <?
          $arr = PackageManager::getInstance()->getModules();
          foreach($arr as $module) {
            ?>
            <tr>
              <td colspan="2">
                <?=$this->submitlink("submit_switch_module",$module["module_name"],array("module_id"=>$module["id"],"module_name"=>$module["module_name"]), "class='cursor-default'")?>
              </td>
            </tr>
            <?
          }
        ?>
        <tr>
            <td>
                <input type="text" class="form-control" name="new_package_name" placeholder="Új modul neve"/>
            </td>
            <td>
                <input type="submit" class="form-control btn btn-primary" name="submit_create_new_module" value="Létrehoz">
            </td>
        </tr>
        </tbody>
      </table>      
    </div>
    <?
  }
  
  function set_page_name() {
  
  }
}