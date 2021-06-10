<?php

require(__DIR__.'/../fragment/header.html');
require(__DIR__.'/../fragment/menu.html');

?>
        <div class="jumbotron" id="main-card">
            <form action="routeur.php?action=ajout_vaccin" method="get">
                <input type="hidden" name='action' value='ajout_vaccin'>
                <div class="form-group">
                    <label for="vaccin">Vaccin</label>
                    <input type="text" class="form-control" name="label">
                </div>
                <div class="form-group">
                    <label class="form-label" for="typeNumber">Nombre de doses</label>
                    <input type="number" id="typeNumber" class="form-control" name="doses"/>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>            
        </div>

<?php

require(__DIR__.'/../fragment/footer.html');

?>