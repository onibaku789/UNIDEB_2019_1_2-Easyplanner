<?
class Team {
    private $id;
    public function __construct($id) {
        $this->id = $id;
    }
    
    public function getName() {
        $q = Database::getInstance()->makeQuery("SELECT name FROM teams WHERE id = '".$this->id."'");
        return $q->fetch_assoc()["name"];
    }
}