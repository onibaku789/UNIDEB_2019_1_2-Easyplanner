<?
class Forgot_Page extends Abstract_Page {
  function handleEvents() {
    if(isset($_POST["submit_request_code"])) {
      $user = $this->getUserByUserName($_POST["forgot_username"]);
      $user["code"] = uniqid();
      $_SESSION["password_recovery"]["generated_code"] = password_hash($user["code"],PASSWORD_DEFAULT);
      $_SESSION["password_recovery"]["user_id"] = $user["id"];
      $_SESSION["password_recovery"]["email"] = $user["email"];
      $headers = "From: Taco's Kft <info@tacoskft.com>"."\r\n".
                  "Reply-To: info@tacoskft.com";
      mail($user["email"],"Elfelejtett jelszó","Szia!\nA kódod: ".$user["code"],$headers);
    }
    
    if(isset($_POST["submit_code"])) {
      if(password_verify($_POST["code"],$_SESSION["password_recovery"]["generated_code"])) {
        $_SESSION["password_recovery"]["accepted"] = true;
      } else {
        $this->error[] = "INVALID_CODE";
        echo $this->displayErrors($this->error);
        $_SESSION["password_recovery"]["accepted"] = false;
      }
    }
    
    if(isset($_POST["submit_password"])) {      
      if(($this->error = Authentication::getInstance()->verifyPasswordContraints($_POST["password"], $_POST["password_verify"])) === true) {
        Authentication::getInstance()->modifyPassword($_SESSION["password_recovery"]["user_id"],$_POST["password"]);
        unset($_SESSION["password_recovery"]);
        header("Location: index.php?page=login");
      } else {
        echo $this->displayErrors($this->error);
      }
    }
  }
  
  function show() {
    $this->form_open();
    if(!isset($_SESSION["password_recovery"])) {
      ?>
      <div class="container w-md-50 mx-auto border-rounded p-3 bg-light" style="margin-top: 5%;">
          <p class="h2">Elfelejtett jelszó</p>
          <p>A felhasználónevedet beírva, az e-mail címedre küldünk egy kódot, melyet használva visszakaphatod a jelszavad!</p>
          <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
              </div>
              <input type="text" class="form-control" name="forgot_username" placeholder="Felhasználónév" value="<?=$_POST["forgot_username"]?>">
          </div>
          <input type="submit" name="submit_request_code" class="btn btn-primary" value="Kód küldése">
      </div>
      <?
    } else if(!isset($_SESSION["password_recovery"]["accepted"]) || $_SESSION["password_recovery"]["accepted"] === false) {
      ?>
      <input type="hidden" class="form-control" name="forgot_username" value="<?=$_POST["forgot_username"]?>">
      <div class="container w-md-50 mx-auto border-rounded p-3 bg-light" style="margin-top: 5%;">
          <p class="h2">Elfelejtett jelszó</p>
          <p>Elküldtük a szükséges kódot a folytatáshoz.<br />
          Az alábbi mezőbe írd be a kódot, amit a 
          <i><?=str_replace(substr($_SESSION["password_recovery"]["email"],2,strpos($_SESSION["password_recovery"]["email"],"@")-2),"******",$_SESSION["password_recovery"]["email"])?></i>
          e-mail címedre kaptál!</p>
          <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-user"></i></div>
              </div>
              <input type="text" class="form-control" name="code" placeholder="Kód" value="<?=$_POST["code"]?>">
          </div>
          <input type="submit" name="submit_code" class="btn btn-primary" value="OK">
          <input type="submit" name="submit_request_code" class="btn btn-primary" value="Kód újraküldése">
      </div>
      <?
    } else {
      ?>
          <div class="container w-md-50 mx-auto border-rounded p-3 bg-light" style="margin-top: 5%;">
          <p class="h2">Elfelejtett jelszó</p>
          <p>Változtass jelszót!</p>
          <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-key"></i></div>
              </div>
              <input type="password" class="form-control" name="password" placeholder="Új jelszó" value="<?=$_POST["username"]?>">
          </div>
          <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-key"></i></div>
              </div>
              <input type="password" class="form-control" name="password_verify" placeholder="Új jelszó mégegyszer" value="<?=$_POST["username"]?>">
          </div>
          <input type="submit" name="submit_password" class="btn btn-primary" value="Jelszó megváltoztatása">
      </div>
      <?
    }
    $this->form_close();
  }
  
  function getUserByUserName($username) {
    return Database::getInstance()->makeQuery("SELECT id, email, username FROM users WHERE username = '".$username."'")->fetch_assoc();
  }
  
  function set_page_name() {
    
  }
}
?>