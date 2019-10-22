<?
abstract class Abstract_Page {
    public $errors = array();

    function init() {
     // $_SESSION["pages"] = null;
      $_SESSION["title"] = $this->set_page_name();
      if(!isset($_SESSION["pages"])) {
        $this->handleEvents();
        $this->show();
      }
      if(!empty($_SESSION["pages"])){
        $selected_page = new $_SESSION["pages"]["current_page"]["current_page_name"];
        $selected_page->handleEvents();
        $selected_page->show();
      }
      var_dump($_SESSION["pages"]);
      var_dump($_POST);
      echo Database::getInstance()->getNumberOfQueries();
    }

    function form_open($params = "") {
        ?><form method="post"<?=$params?>><?
    }

    function form_close() {
        ?></form><?
    }
    
    function go_back() {
      if(!empty($_SESSION["pages"]["page_container"])) {
        $_SESSION["pages"]["current_page"] = array_pop($_SESSION["pages"]["page_container"]);
      }
    }
    
    function forward($class_name) {
      $_SESSION["pages"]["current_page"] = array("current_page_name" => $class_name);
      $_SESSION["pages"]["page_container"][] = array("current_page_name" => get_class($this)); 
      echo "elso";
    }

    function displayErrors($errors) {
        ob_start();
        ?>
        <!-- Modal -->
        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Hiba történt</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?=implode('<br />',$errors)?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezárás</button>
                </div>
                </div>
            </div>
        </div>
        <?
        return ob_get_clean();
    }
    
    function showMessage($title,$msg) {
        ob_start();
        ?>
        <!-- Modal -->
        <div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"><?=$title?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?=$msg?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Rendben</button>
              </div>
            </div>
          </div>
        </div>
        <?
        return ob_get_clean();
    }

    abstract function handleEvents();
    abstract function show();
    abstract function set_page_name();
}