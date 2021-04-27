<?php include '../includes/header.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    
    <link href="../assets/styles/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

</head>
<body>
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
                            <textarea></textarea>
                        </div>
                    </div>   
        
            </div>         
            
            <div class="pied-formulaire">
                <button>Envoyez le message</button>
            
            </div>

        </div>


    </form>


    
</body>
</html>

<?php include '../includes/footer.php' ; ?>