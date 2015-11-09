function iniciar(){
	$.each($('.hider').children() ,function(){
		$(this).addClass('hide');
	});
	$('.edu').mouseenter(function(){
        $("body").addClass('lightblue');
        $("body").removeClass('white');
        $("body").removeClass('lightred');
	});	
	$('.paty').mouseenter(function(){
		$("body").addClass('pink');
		$("body").removeClass('white');
		$("body").removeClass('lightred');
	});
	$('.drag').mouseout(function(){
		if(edu & paty){
			$("body").addClass('lightred');
		}else{
			$("body").addClass('white');
		}
		$("body").removeClass('lightblue');
		$("body").removeClass('pink');
	});
	$(".hider").show();
	var paty = false;
	var edu = false;
	var ok = false;
	$(".drag").draggable({revert: "invalid"});
	$(".drop").droppable({
      drop: function( event, ui ) {
			if(ok == false){
				if(ui.draggable[0].className.indexOf('edu')){
					edu = true;
				}
				if(ui.draggable[0].className.indexOf('paty')){
					paty = true;
				}
	        	if(edu & paty){
	        		ok = true;
	        		$("audio")[0].play();
		   			$("body").addClass('lightred');
		   			$("body").removeClass('lightblue');
					$("body").removeClass('pink');
					$("body").removeClass('white');
	        		//nos dois dentro do coração!
	        		var frases = $('.hider p');
	        		mostrarProximo(frases , 0);
	        	}
        	}
      	}
    });
};
function mostrarProximo(lista,index){
	var time = 4000;
	if(index == 0)
		time = 0;
	setTimeout(function(){
		$("html, body").animate({ scrollTop: $(document).height() }, 1000);
		$(lista[index]).show('slow');
		index = index+1;
		if(index <= lista.size()){
			mostrarProximo(lista , index);
		}
	},time);	
}