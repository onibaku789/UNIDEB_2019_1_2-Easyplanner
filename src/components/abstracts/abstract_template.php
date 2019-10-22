<?
abstract class Abstract_Template {

    final function init() {
        $this->handleEvents();
        $this->show();
    }
    
    function form_open($params = "") {
        ?><form method="post"<?=$params?>><?
    }

    function form_close() {
        ?></form><?
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
}