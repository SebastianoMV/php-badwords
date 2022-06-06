<?php
// var_dump($_GET);
$badWord = $_GET['badWord'];

$divinaCommedia = "Nel mezzo del cammin di nostra vita
mi ritrovai per una selva oscura,
ché la diritta via era smarrita.

Ahi quanto a dir qual era è cosa dura
esta selva selvaggia e aspra e forte
che nel pensier rinova la paura!

Tant' è amara che poco è più morte;
ma per trattar del ben ch'i' vi trovai,
dirò de l'altre cose ch'i' v'ho scorte.

Io non so ben ridir com' i' v'intrai,
tant' era pien di sonno a quel punto
che la verace via abbandonai.

Ma poi ch'i' fui al piè d'un colle giunto,
là dove terminava quella valle
che m'avea di paura il cor compunto,

guardai in alto e vidi le sue spalle
vestite già de' raggi del pianeta
che mena dritto altrui per ogne calle.

Allor fu la paura un poco queta,
che nel lago del cor m'era durata
la notte ch'i' passai con tanta pieta.";

$divinaCommediaCensored = str_replace($badWord, '***' , $divinaCommedia);

$lunghezza= strlen($divinaCommediaCensored);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Live 1 php</title>
</head>
<body>
  <p>divina commedia</p>
  <h1>
    <?php
    echo $divinaCommedia
    ?>
  </h1>
  <h2>
    Il testo è lungo <?php echo $lunghezza ?> caratteri
  </h2>
  
  <p>divina commedia censurata</p>
  <h1> 
    <?php
    echo $divinaCommediaCensored
    ?>
  </h1>
  <h2>
    Il testo è lungo <?php echo $lunghezza ?> caratteri
  </h2>
  
  
</body>
</html>