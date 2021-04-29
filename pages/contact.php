<?php include '../includes/header.php' ; ?>

<div class="zoneblue">
<!-- ici insertion img position absolute (+divbleu = position relative) et z-index -->


<div class="container-fluid">
<div class="row">
<div class="col-md-3 col-sm-1 border-ad centerback"><img src="pictures/img-blue-left-opacity100.png" alt="" class="back-img blueleft"></div>
<div class="col-md-6 col-sm-10 border-ad">
<h1 class="h1-blue">Contactez nous</h1>
</div>
<div class="col-md-3 col-sm-1 border-ad centerback"><img src="pictures/img-blue-right-opacity100.png" alt="" class="back-img blueright"></div>
</div>
</div>
</div>
<div class="zoneblue2"></div>


<div class="contact">
   <form>
        <div class="separation"></div>
        <div class="corps-formulaire">
                    <div class="gauche">
                            <div class="groupe">
                                <label>Votre nom et prénom</label>
                                <input class="inpu" type="text">
                                <i class="fas fa-user"></i>
                            </div>
                
                            <div class="groupe">
                                <label>Votre adresse e-mail</label>
                            <input class="inpu" type="text">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="groupe">
                            <label>Votre numéro de téléphone</label>
                                <input class="inpu" type="text">
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