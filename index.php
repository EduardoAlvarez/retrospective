<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Retrospectiva Eduardo e Patricia</title>
  <meta name="description" content="História de um casal lindo">
  <meta name="author" content="Eduardo">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/script.js"></script>
  <script src="lib/jquery-ui/jquery-ui.min.js"></script>	
  
  <script>
  //document.body.addEventListener('touchstart', function(e){ e.preventDefault(); });
  function reformatDate(dateStr)
  {
    var dArr = dateStr.split(" ");
    dArr  = dArr[0];//remove hora
    dArr = dArr.split("-");  // ex input "2010-01-18"
    return dArr[2]+ "/" +dArr[1]+ "/" +dArr[0]; //ex out: "18/01/10"
  }
  function touchHandler(event)
{
    var touches = event.changedTouches,
        first = touches[0],
        type = "";

         switch(event.type)
    {
        case "touchstart": type = "mousedown"; break;
        case "touchmove":  type="mousemove"; break;        
        case "touchend":   type="mouseup"; break;
        default: return;
    }

    // initMouseEvent(type, canBubble, cancelable, view, clickCount,
    //                screenX, screenY, clientX, clientY, ctrlKey,
    //                altKey, shiftKey, metaKey, button, relatedTarget);

    var simulatedEvent = document.createEvent("MouseEvent");
    simulatedEvent.initMouseEvent(type, true, true, window, 1,
                              first.screenX, first.screenY,
                              first.clientX, first.clientY, false,
                              false, false, false, 0/*left*/, null);

                                                                                 first.target.dispatchEvent(simulatedEvent);
    event.preventDefault();
}

function init()
{
    document.addEventListener("touchstart", touchHandler, true);
    document.addEventListener("touchmove", touchHandler, true);
    document.addEventListener("touchend", touchHandler, true);
    document.addEventListener("touchcancel", touchHandler, true);    
}
    $(function(){
    	init();
      $.ajax({
        url: "ajax/ajaxDispatcher.php?classe=eventoBusiness&metodo=getAllEventosOrder",
        dataType: "json"
      }).done(function(result) {
        $.each(result , function(index , value){
          var data_e = reformatDate(value.data_evento);
          var desc = value.desc_evento;
          desc = desc.replace(/(?:\r\n|\r|\n)/g, '<br />');
          var evento = "<p>"+desc+"<span class='data'>"+data_e+"<span></p>";
          $(".hider").append(evento);
        });
        iniciar();
      });
    })
  </script>
	<img src='img/edu.jpg' class='edu drag'>	
	<img src='img/paty.jpg' class='paty drag'>  
  <div class='center'>
    <img src='img/heart.png' class='heart drop'>
  </div>
  <div class='clear'></div>
  <audio controls id='audio '>
    <source src="music/perfeito.mp3" type="audio/mp3">
  </audio>
  <div class='hider'>
  </div>
</body>
</html>

<!--
 <p class='bomdia'> 
      Bom diaaa.. rs <br> 
      Posso te chamar de Paty?<br> 
      <span class='data'>19/11/2014</span> 
    </p>
    <p class='sp'> 
      <img src='img/sp.jpg' class='sp'><br>  
      Primeira troca de olhar... <br>
      Primeiro beijo <br>
      Primeira risadas <br>
      <span class='data'>21/11/2014</span> 
    </p>
    <p class='movie'> 
      Se for de noite... vou com você!<br><br>
      Nosso primeiro cinema juntos! <br><br>
      <img src='img/jogos.jpg' class='jogos'><br>  
      <span class='data'>22/11/2014</span> 
    </p>
    <p class='regis'> 
      Primeira vez que bebo Vodka com você <br>  
      E Nossa... Primeira vez! <3  <br>
      Te dei trabalho heeem.. rs <br>
      <span class='data'>28/11/2014</span> 
    </p>

    <p class='fato1'> 
      Ah.. você acorda 5:30? <br>
      5:30 da manha.. BOM DIAAA LINDA .. rs <br>
    </p>

    <p class='fato2'> 
      Então ta.. bjos amor... <br>
      hm... amoor? <br>
      aah... hm... é.. rs
    </p>

    <p class='fato3'> 
      Me faz companhia?<br>
      Todos os dias, o dia todo! 
    </p>
    
    <p class='fato4'> 
      Vim até guarulhos, primeira vez! <br>
      Conheci seu irmão, mãe, irmã...<br>
      Japa? tentamos mas tava tudo fechado né?<br>
    </p>
    
    <p class='fato5'> 
      Outro dia em guarulhos rs.. <br>
      Mal sabia eu que Guarulhos estava quase para virar minha segunda casa ... <br>
    </p>

    <p class='fato6'> 
      Fomos para Conceição no dia da Skin <br> 
      Ciumes das amigas por minha causa kkk <br>
    </p>

    <p class='fato7'> 
      Primeira vez no Guanabara <br>
      Conheci suas Paula e Jakie<br>
      Olha.. elas gostaram de mim, né?  <br>
    </p>

    <p class='fato8'> 
      Nossa primeira 'praia' juntos <br>
      Primeira vez que te vi, pessoalmente, muito loka! <br>
      hahaha <br>
      <span class='data'>21/12/2014</span> 
    </p>


    <p class='fato9'> 
      Ficou preocupada porque eu iria chegar tarde <br>
      Chorou porque achou que pudesse nao me ver mais <br>
      <span class='data'>21/12/2014</span> 
    </p>
    <p class='fato9'> 
      Ficou boba porque achou que tinha, naquele momento, 
      mostrado tudo que sentia por mim. <br>
      <span class='data'>21/12/2014</span> 
    </p>

    <p class='fato10'> 
      Mas o que ela não sabia...  <br>
      É que ela desmostrava Todos os dias! <br>
      Todos os dias eu percebia que ela gostava mais de mim !<br>
      <span class='data'>21/12/2014</span> 
    </p>
    <p class='fato10'> 
      Todos os dias eu gostava mais... mais de VOCE! <br> 
      Patricia <br>
      <span class='data'>21/12/2014</span> 
    </p>

    <p class='fato11'> 
      COMEÇAMOS A NAMORAR 
      <span class='data'>21/12/2014</span> 
    </p>
  
    <p class='fato12'> 
      Meu aniversário chegou.. <br>
      Combinamos meu presente rs..  <br> 
      Mas não pude ir =/ Queria tantooo poder ter ido! <br>
      <span class='data'>12/12/2014</span> 
    </p>

    <p class='fato12'> 
      Fiquei em casa.. com cara de bunda!<br>
      E você se afogando em cerveja!<br>
      <span class='data'>12/12/2014</span> 
    </p>

    <p class='fato13'> 
      Passamos o natal longe um do outro..<br>
      Mas me mandou fotos, audios.. <br>
      Me fez companhia!
      <span class='data'>25/12/2014</span> 
    </p>

    <p class='fato14'> 
      Mas logo veio o ano novo !  <br>
      E esse, passamos bem pertinho um do outro! <br>
      <span class='data'>1/1/2015</span> 
    </p>

    <p class='fato15'> 
      Fechamos o ano com chave de ouro! <br>
      Entramos no novo ano com a perna esquerda!  <br>
      Não, pera, a outra esquerda! AHAH (direita!)
    </p>
    -->