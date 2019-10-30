<?
class Launcher {
    function launch() {
        session_start();
        
        $this->route();
        
        (new Template)->init();
        
          
    }
    
    protected function route() {
        if($_GET["page"] == "logout") {
          if(Authentication::getInstance()->isLogged()) {
            session_destroy();
            header("Location: /index.php?page=main");
          }
        }
        if (Authentication::getInstance()->isLogged() && ($_GET["page"] == "login" || $_GET["page"] == "register")) {
            header("Location: index.php?page=main");
        }
    }

    
}