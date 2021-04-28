<?php include '../includes/header.php' ; ?>
<div class="contact">
   <form>
        <h1>Contactez-nous</h1>
        <div class="separation"></div>
        <div class="corps-formulaire">
                    <div class="gauche">
                            <div class="groupe">
                                <label>Votre nom et prénom</label>
                                <input type="text">
                                <i class="fas fa-user"></i>
                            </div>
                
                            <div class="groupe">
                                <label>Votre adresse e-mail</label>
                            <input type="text">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="groupe">
                            <label>Votre numéro de téléphone</label>
                                <input type="text">
                                <i class="fas fa-mobile"></i>
                    </div>  </div>
            
            
                    <div class="droite">
                        <div class="groupe">
                            <label>Message</label>
                            <textarea placeholder="Saisissez ici" rows="10" cols="40"></textarea>
                        </div>
                    </div>   
        
            </div>         
            
            <div class="pied-formulaire">
                <button>Envoyez le message</button>
            
            </div>

        </div>

    </form>
</div>



<?php include '../includes/footer.php' ; ?>