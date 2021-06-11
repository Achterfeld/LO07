<?php

require(__DIR__.'/../fragment/header.html');

?>
        <div class="jumbotron" id="main-card">
            <div id="sub-card">
              <h1>vaccination COVID-19 2021</h1>
              <p>Quoi qu'il en coûte ...</p>   
            </div>
            
            <div class="panel panel-default" id="panel">
              <!-- Default panel contents -->
              <div class="panel-heading"></div>
              <div class="panel-body">
                <p>Liste des vaccins</p>
              </div>
            
              <!-- Table -->
              <table class="table">
                <tr>
                  <th>ID</th>
                  <th>label</th>
                  <th>doses</th>
                </tr>
                <?php
                  foreach ($results as $element) {
                    $id = $element['id'];
                    $label = $element['label'];
                    $doses = $element['doses'];
                      echo <<<EOF
                      <tr>
                          <td>
                            $id
                          </td>
                          <td>
                            $label
                          </td>
                          <td>
                              <form action="routeur.php">
                                <input type="hidden" name='action' value='modif_vaccin'>
                                <input type="hidden" name='id' value='$id'>
                                <div class="orm-row align-items-center">
                                    <div class="col">
                                      <input type="number" id="typeNumber" class="form-control" placeholder="$doses" name="doses" value="$doses"/>
                                    </div>
                                    <div class="col">
                                      <button type="submit" class="btn btn-primary">
                                          Modifier
                                      </button>
                                    </div>
                                </div>
                              </form>
                          </td>
                      EOF;
                  }
                ?>
              </table>
            </div>
        </div>              
    </body>
</html>