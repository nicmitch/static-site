<?php
    include 'header.tpl.php';
?>


	<section class="container align-center">
		<h1><?php echo $texts['intro_title']; ?></h1>
	</section>


	<section class="container">

		<h2>Form Example</h2>
		<div class="richiesta-info">

            <h2><?php echo $texts['form_title']; ?></h2>
            <div class="line-bg max-width-min">
                    <div class="inner">
                        <br>
                        <?php echo $texts['form_intro']; ?>

                        <form enctype="multipart/form-data" method="post" id="quoteForm" class="">

                            <div class="form-group">
                                <input type="text" class="form-control" id="Name" name="Nome" placeholder="<?php echo $texts['form_name']; ?>" data-required="yes">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="Email" name="Email" placeholder="<?php echo $texts['form_email']; ?>" data-required="yes">
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="ProductsSelector" name="Prodotti" data-required="yes">    
                                    <option value=""><?php echo $texts['form_select']; ?></option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="Messaggio" placeholder="<?php echo $texts['form_message']; ?>"></textarea>
                            </div>
                            

                            <div class="form-group">
	                            <input type="button" name="invia" id="invia" class="btn btn-default btn-gray btn-full btn-uppercase send_button" value="<?php echo $texts['form_button']; ?>" data-form="quoteForm" data-alert="<?php echo $texts['form_validation']; ?>" >
	                        </div>
                            
                            <div class="form-group">
	                            <input type="reset" class="cancel-button btn btn-default btn-gray btn-full btn-uppercase" value="<?php echo $texts['form_reset']; ?>">
	                        </div>
  
                            <input type="hidden" name="Lingua" id="Lingua" value="<?php echo $lng; ?>" />   
                            <input type="hidden" name="destinatario" id="destinatario" value="info@nicolamerici.com" />
                            <input type="hidden" name="mittente" id="mittente" value="#" />           
                            <input type="hidden" name="oggetto" id="oggetto" value="Richiesta informazioni dal sito" />         
                            <input type="hidden" name="pagina_post_invio" id="pagina_post_invio" value="#" />           
                            <input type="hidden" name="pagina_errore" id="pagina_errore" value="#" />
                            <input type="hidden" name="messaggio_header" id="messaggio_header" value="E' stata ricevuta una richiesta dal sito web" />
                        </form>

                    </div>
                    
                </div>

                
            </div>


            <div class="mail-message" style="display:none;">
                <h2 class="small"><?php echo $texts['form_sendTitle']; ?></h2>

                <div class="max-width-min">
                    <div class="inner">
                        <div class="line-bg">
                            <?php echo $texts['form_sendMessage']; ?>
                        </div>
                        <a href="../<?php echo $lng; ?>/" class="btn btn-default btn-full btn-gray btn-uppercase"><?php echo $texts['form_sendBack']; ?></a>
                    </div>
                </div>
            </div>


            </div>
	</section>
    
    
<?php 
    include 'footer.tpl.php';
?>