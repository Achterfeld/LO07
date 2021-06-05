<?php

require($root.'/view/fragement/header.html');

?>
        <div class="jumbotron" id="main-card">
            <div id="sub-card">
              <h1>vaccination COVID-19 2021</h1>
              <p>Quoi qu'il en coûte ...</p>   
            </div>
            
            <div class="panel panel-default" id="panel">
              <!-- Default panel contents -->
              <div class="panel-heading">ID</div>
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
                    printf("<tr><td>%d</td><td>%s</td><td>%d</td>", $element['id'], 
                      $element['label'], $element['doses'];
                  }
                ?>
              </table>
            </div>
        </div>              
    </body>
</html>