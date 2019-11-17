<?
class Login_Page extends Abstract_Page {
    var $multilang = true;
    function handleEvents() {
        if(isset($_POST["packagemanager"])) {
            //(new PackageManager)->load("../");
        }

        if(isset($_POST["login"])) {
            if(isset($_POST["username"]) && isset($_POST["password"])) {
                if(($this->errors = Authentication::getInstance()->authenticate($_POST["username"],$_POST["password"])) === true) {
                    header("Location: /index.php?page=main");
                    $_SESSION["logged"] = true;
                } else {
                    echo $this->displayErrors($this->errors);
                }
            }
        }
        
        if(isset($_POST["submit_back"])) {
          $this->go_back();
        }
    }

    function show() {
        $this->form_open();
        ?>
            <div class="container w-md-25 mx-auto border-rounded p-3 bg-light" style="margin-top: 5%;">
                <p class="h2">Bejelentkezés</p>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                    </div>
                    <input type="text" class="form-control" name="username" placeholder="Felhasználónév" value="<?=$_POST["username"]?>">
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Jelszó">
                </div>
        

                <div class="registerLabel">
                    <label>
                        <a href="index.php?page=register">Még nem regisztráltál?</a>
                    </label>
                     <label>
                        <a href="index.php?page=forgot">Elfelejtetted a jelszavad?</a>
                    </label>
                </div>
                <input type="submit" name="login" class="btn btn-primary" value="Belépek">
            </div>
        <?
        $this->form_close();
    }

    function set_page_name() {
        return "Bejelentkezés";
    }
}