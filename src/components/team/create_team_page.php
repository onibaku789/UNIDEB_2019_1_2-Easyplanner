<?
class Create_Team_Page extends Abstract_Page {
    function handleEvents() {
        if(isset($_POST["submit_team"])) {
            if(($this->errors = TeamManager::getInstance()->createNewTeam($_POST["team_name"],$_POST["description"])) === true) {
                header("Location:index.php?page=team");
            } else {
                echo $this->displayErrors($this->errors);
            }
        }
    
    }
    
    function show() {
        $this->form_open();
        ?>
            <div class="container w-md-25 mt-5 p-5 bg-light border border-rounded">
                <p class="h2">Csapat létrehozása</p>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="team_name">Csapat neve</label>
                    <input type="text" id="team_name" name="team_name" class="col-sm-9 form-control" value="<?=$_POST["team_name"]?>" placeholder="Csapat neve">
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="description">Rövid leírás</label>
                    <textarea class="col-sm-9 form-control" name="description" id="description"><?=$_POST["description"]?></textarea>    
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="submit" name="submit_team" value="Csapat létrehozása" class="btn btn-primary">
                    </div>
                    <div class="col-sm-6 text-right">
                        <input type="submit" name="forward_go_back" value="Vissza a főoldalra" class="btn btn-secondary">
                    </div>
                </div>
            </div>
        <?
        $this->form_close();
    }
    
    function set_page_name() {
    
    }
}