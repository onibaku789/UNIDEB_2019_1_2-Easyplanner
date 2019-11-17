<?
class Register_Page extends Abstract_Page {
    var $multilang = true;
    function handleEvents() {
        if(isset($_POST["submit_register"])) {
            if(($this->errors = Authentication::getInstance()->createNewUser($_POST["username"],$_POST["password"],$_POST["password_validate"], $_POST["email"])) === true) {
                header("Location: index.php?page=main");
                $_SESSION["logged"] = true;
            } else {
                echo $this->displayErrors($this->errors);
            }
        }
    }

    function show() {
        $this->form_open();
        ?>
        <div class="container w-md-50 border-rounded bg-light p-3 mx-auto" style="margin-top: 5%;">
            <p class="h2">Regisztráció</p>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="username">Felhasználónév</label>
                <input type="text" name="username" class="form-control" id="username" value="<?=$_POST["username"]?>" placeholder="Felhasználónév">
                <small id="usernameHelp" class="form-text text-muted">Felhasználóneved min. 3 karakter, max. 32 karakter lehet</small>
                </div>
                <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" value="<?=$_POST["email"]?>"" placeholder="E-mail">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">Jelszó</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Jelszó">
                    <small id="usernameHelp" class="form-text text-muted">Jelszavad min. 6 karakter, max. 64 karakter lehet<br>
                    Tartalmaznia kell a következőket:
                    <ul>
                      <li>Legalább egy kisbetű</li>
                      <li>Legalább egy nagybetű</li>
                      <li>Legalább egy szám</li>
                    </ul></small>
                </div>
                <div class="form-group col-md-6">
                    <label for="password_validate">Jelszó megerősítése</label>
                    <input type="password" class="form-control" name="password_validate" id="password_validate" placeholder="Jelszó megerősítése">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <input type="submit" name="submit_register" class="btn btn-primary" value="Regisztrálok">
                </div>
                <div class="col-8 float-left mt-auto">
                    <label>Már van felhasználói fiókod? <a href="index.php?page=login">Lépj be!</a></label>
                </div>
            </div>
            <script src="https://www.google.com/recaptcha/api.js?render=6LdeNLkUAAAAAGPb0pfTOmEEBoIC-cpmo_tgOwY4"></script>
            <script>
              grecaptcha.ready(function() {
                  grecaptcha.execute('6LdeNLkUAAAAAGPb0pfTOmEEBoIC-cpmo_tgOwY4', {action: 'register'}).then(function(token) {
                  });
              });
            </script>
            <div class="g-recaptcha" data-sitekey="6LdeNLkUAAAAAGPb0pfTOmEEBoIC-cpmo_tgOwY4"></div>
        </div>

        <?
        $this->form_close();
    }

    function set_page_name() {
        return "Regisztráció";
    }
}