<?
class Launcher {
    function launch() {
        session_start();
        
        $this->route();
        
        (new Template)->init();  
    }
    
    protected function route() {
      $allowed_pages_for_guests = array("main"=>1,"login"=>1,"register"=>1,"forgot"=>1);
      if(isset($_GET["invite"]) || !empty($_SESSION["user_data"]["pending_invitation"])) {
        if(TeamManager::getInstance()->isValidPrivateKey(urldecode($_GET["invite"])) || TeamManager::getInstance()->isValidPrivateKey($_SESSION["user_data"]["pending_invitation"])) {
          if(isset($_SESSION["user_data"]["id"])) {
            if(isset($_GET["invite"]))
              $team_id = TeamManager::getInstance()->getTeamIdByPrivateKey(urldecode($_GET["invite"]));
            else if(!empty($_SESSION["user_data"]["pending_invitation"])) 
              $team_id = TeamManager::getInstance()->getTeamIdByPrivateKey($_SESSION["user_data"]["pending_invitation"]);
            if(TeamManager::getInstance()->userAlreadyInTeam($_SESSION["user_data"]["id"], $team_id) === false) {
              TeamManager::getInstance()->assignUserToTeam($_SESSION["user_data"]["id"],$team_id);
              UserManager::getInstance()->selectTeam($_SESSION["user_data"]["id"],$team_id);
            }
          } else {
            $_SESSION["user_data"]["pending_invitation"]["hash"] = $_GET["invite"];
            header("Location: index.php?page=login");
          }
        }
      }
      
      if(!isset($_GET["page"]))
        header("Location: /index.php?page=main");
        
      if($_GET["page"] == "logout") {
        if(Authentication::getInstance()->isLogged()) {
          session_destroy();
          header("Location: /index.php?page=main");
        }
      }
      if (Authentication::getInstance()->isLogged() && ($_GET["page"] == "login" || $_GET["page"] == "register")) {
          header("Location: index.php?page=main");
      } else if(!Authentication::getInstance()->isLogged() && ($allowed_pages_for_guests[$_GET["page"]] !== 1)) {
        header("Location: /index.php?page=main");
      }
    }

    
}