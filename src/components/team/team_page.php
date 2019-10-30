<?
class Team_Page extends Abstract_Page {
    function handleEvents() {
        if(isset($_POST["create_team"])) {
            header("Location: index.php?page=create_team");
        }
        
        if(isset($_POST["join_team"])) {
            header("Location: index.php?page=main#join_team");
        }
        
        if(isset($_POST["submit_team_change"])) {
            $team = new Team($_POST["team_id"]);
            
            $_SESSION["user_data"]["selected_team"]["name"] = $team->getName();
        }
        
        if(isset($_POST["submit_teszt"])) {
          unset($_SESSION["timetable"]["all_timestamps"]);
          $timetable = new TimeTable();
          $timetable->updateTimeTableDb(2,$_POST["time"]);
          $_SESSION["timetable"]["all_timestamps"] = $_POST["time"];
        }
    }
    
    function updateDB($timetable) {
      foreach($_SESSION["interval"] as $intervals) {
        $q = Database::getInstance()->makeQuery("SELECT * FROM times WHERE timetable_id = '".$timetable."' AND start = '".$intervals[0]."'");
        if($q->num_rows > 0)
          Database::getInstance()->makeQuery("DELETE FROM times WHERE timetable_id = '".$timetable."' AND start = '".$intervals[0]."'");
        else
          Database::getInstance()->makeQuery("INSERT INTO times(timetable_id, start, finish)VALUES('".$timetable."','".$intervals[0]."', '".$intervals[1]."')");
      }
    }
    
    function showTimetable() {
      $magyar_napok = array("Hétfő", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat", "Vasárnap");
      ?>
      <table class="table table-sm" style="overflow: scroll;">
        <thead>
          <tr>
          <td></td>
          <?
          for($i = 0; $i<7; $i++) {
            ?>
             <td><?=$magyar_napok[date("N",strtotime("today")+($i*24*60*60)) - 1]?></td>
            <?
          }
          ?>
          </tr>
        </thead>
        <tbody>
        <?
          for($i = 0 ; $i<24; $i++) {
          ?><tr>
              <td width="10%"">
                  <?=$i?>:00 - <?=$i+1?>:00
              </td><?
            for($j = 0 ; $j<7; $j++) {
              $time = strtotime("today")+($i*60*60)+($j*60*60*24);
              ?>
                <td onclick="modify_timeline_value('<?=$time?>');" style='<?=in_array($time, $_SESSION["timetable"]["all_timestamps"]) ? "background: rgba(255,0,0,0.7);": ""?>'>
                  <div class="timetable_slot"></div>
                </td>
              <?
            }
            ?></tr><?
          }
        ?>
        </tbody>
      </table>
      <?
    }
    
    function show() {
        $this->form_open();
        $me = new User($_SESSION["id"]);
        if(empty($me->getTeamsId())) {
            ?>
                <div class="container text-center mt-5 border border-rounded w-md-25 p-5 bg-light">
                    <label>
                        Még nincs csapatod, az alábbi gombokra kattintva létrehozhatsz egyet, vagy csatlakozhatsz egy már meglévő csapathoz.
                    </label>
                    <input type="submit" name="create_team" value="Új csapat létrehozása" class="btn btn-success"/>
                    <input type="submit" name="join_team" value="Csatlakozás már meglévő csapathoz" class="btn btn-secondary"/>
                </div>
            <?
        } else {
          ?>
          <div id="save-message" class="bg-success text-white p-3" style="position: fixed; right: 0; display:none;">
          
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?=$_SESSION["user_data"]["selected_team"]["name"]?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?
            foreach($me->getTeamsId() as $team_id) {
                $team = new Team($team_id);
                $this->submitlink("submit_team_change",$team->getName(),array("team_id"=>$team_id),"class='dropdown-item'");
            }
            ?>
            </div>
          </div>
              <!--<div style="position:fixed; bottom: 0; right: 0;" class="m-2">
                  <input type="submit" class="btn btn-success" name="create_team" value="Csapat létrehozása">
              </div>-->
          <?
          $this->showTimetable();
          ?><a class="btn btn-success text-white" onclick="sendTimeArray('<?=$_SESSION["form"]["id"]?>','submit_teszt')">Tábla mentése</a><?
        }
        
        $this->form_close();
    }
    
    function set_page_name() {
        return "Csapat";
    }
}