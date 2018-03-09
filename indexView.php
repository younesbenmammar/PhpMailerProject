<?php 
$title = 'Ymail';

?>

<?php 
ob_start();
?>
            <div align="center">
            
            <h1>Envoyer un mail </h1><br><br>
            
            
            
            <div class="container">
            <div class="row main">
            <div class="main-login main-center">
            
            
            <form class="" method="post" action="indexController.php" enctype="multipart/form-data">
            
            <div class="form-group">
            <label for="receveur" class="cols-sm-2 control-label">Son Adresse mail</label>
            <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="receveur" id="receveur"  placeholder="Entrez son adresse mail"/>
            </div>
            </div>
            </div>
            
            <div class="form-group">
            <label for="message" class="cols-sm-2 control-label">Votre message</label>
            <div class="cols-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="message" id="message"  placeholder="Entrer votre Message"/>
</div>
</div>
</div>




						<div class="form-group ">
                            <button id="button" class="btn btn-primary btn-lg btn-block login-button">Envoyer</button>
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
