<?
class TeamManager {
    private static $instance = null;

    private function __construct() {}
    
    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    
    function createNewTeam($team_name, $description) {
        if(strlen($team_name) < 3) $errors[] = "TEAM_NAME_TOO_SHORT";
        if(strlen($description) < 15) $errors[] = "TEAM_DESCRIPTION_TOO_SHORT";
        if(strlen($team_name) > 32) $errors[] = "TEAM_DESCRIPTION_TOO_LONG";
        if(strlen($description) > 128) $errors[] = "TEAM_DESCRIPTION_TOO_LONG";
        $sql = Database::getInstance()->makeQuery("SELECT name,id FROM teams WHERE name = '".$team_name."'");
        if($sql->num_rows > 0) $errors[] = "TEAM_NAME_MUST_BE_UNIQUE";
        
        if(!empty($errors))
            return $errors;
            
        $create_team_query = Database::getInstance()->makeQuery("INSERT INTO teams(name, description, leader_id)
                                                                VALUES('".$team_name."','".$description."','".$_SESSION["id"]."')");
        var_dump($create_team_query);
        
        $sql = Database::getInstance()->makeQuery("SELECT name,id FROM teams WHERE name = '".$team_name."'");
        $team_id = $sql->fetch_assoc()["id"];
        
        $connector_table_query = Database::getInstance()->makeQuery("INSERT INTO team_user(team_id, user_id)
                                                                VALUES('".$team_id."','".$_SESSION["id"]."')");
                                                                
        return true;
    }
}