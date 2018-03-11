<?php
$title = 'Ymail';

?>

<?php 
ob_start();
?>
           <div align="center">
           
           <h1>Envoyer un mail </h1>
           
           <br><br><br><br>
           
           
           
           <div class="container">
           <div class="row main">
           <div class="main-login main-center">
           
           
           <form class="" method="post" action="indexController.php" enctype="multipart/form-data">
           
           <p><strong>Votre Adresse mail Gmail </strong></p>    
           <div class="form-group">
           <label for="receveur" class="cols-sm-2 control-label"></label>
           <div class="cols-md-offset-1 col-md-3">
           <div class="input-group">
           <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
           <input type="text" class="form-control" name="emetteur" id="emetteur"  placeholder="Entrez Votre Adresse mail"/>
</div>
</div>
</div>
           <br><br>
             
             <p><strong>Votre Mot de passe</strong></p>    
           <div class="form-group">
           <label for="receveur" class="cols-sm-2 control-label"></label>
           <div class="cols-md-offset-1 col-md-3">
           <div class="input-group">
           <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
           <input type="password" class="form-control" name="mdp" id="mdp"  placeholder="Entrez Votre mot de passe"/>
</div>
</div>
</div>
           <br><br>
             
           
               
           <p><strong>Son Adresse mail</strong></p>    
           <div class="form-group">
           <label for="receveur" class="cols-sm-2 control-label"></label>
           <div class="cols-md-offset-1 col-md-3">
           <div class="input-group">
           <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
           <input type="text" class="form-control" name="receveur" id="receveur"  placeholder="Entrez son adresse mail"/>
</div>
</div>
</div>
           <br><br>
             
               
               <div class="form-group ">
                           <button id="button" class="btn btn-primary btn-lg btn-block login-button">Envoyer</button>
                        </div>
         
               
               
              <p><strong>Votre message </strong></p>
           <div class="form-group">
           <label for="message" class=" .col-xs-6 .col-sm-3 control-label"></label>
           <div class="col-xs-6 .col-sm-10">
           <div class="textarea-group">
         	<textarea class="form-control" name="message" id="message"  placeholder="Entrer votre Message"/></textarea>
               
               
               
</div>
</div>
</div>


                        

                    </form>
                </div>
            </div>
        </div>

        </div>
        
<?php 
$content = ob_get_clean()
?>
<?php 
require 'template.php';
?>