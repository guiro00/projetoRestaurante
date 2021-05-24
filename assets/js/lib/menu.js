
$(document).ready(function() {
	// ACA atribuiu o evento click a cada botão da classe bt_plus e chamou a função addField
		$(".bt_plus").each(function (el){
			$(this).bind("click",addField);
									 });
							});
//modal bootstrap
	// $("#modal-boton").on('click',function(){
 //      $('#modal').modal();
	// })

 
function addField(){
// ID do elemento div removendo a palavra "div_" da frente. Então aconteceu de poder aumentar o número. Essa parte não é necessária, mas eu a usei já que cada campo do meu formulário tinha uma sugestão automática, então deixo como estaria caso alguém precise.
var clickID = parseInt($(this).parent('div').attr('id').replace('div_',''));
 
// Eu gero o novo número de id
var newID = (clickID+1);
 
// Eu crio um clone do elemento div que contém os campos de texto
$newClone = $('#div_'+clickID).clone(true);
 
// Eu atribuo o novo número de id
$newClone.attr("id",'div_'+newID);
 
// Atribuo um novo id ao primeiro campo de entrada dentro do div e excluo qualquer valor que ele tenha para que não copie a última coisa que você escreveu. (Como antes, não é necessário ter um id)
$newClone.children("input").eq(0).attr("id",'materiales'+newID).val('');
 
// Excluo o valor do segundo campo de entrada (neste caso é o campo de quantidade)
$newClone.children("input").eq(1).val('');
 
//Asigno nuevo id al boton
$newClone.children("input").eq(2).attr("id",newID)
 
//Inserto el div clonado y modificado despues del div original
$newClone.insertAfter($('#div_'+clickID));
 
//Cambio el signo "+" por el signo "-" y le quito el evento addfield
$("#"+clickID).val('-').unbind("click",addField);
 
//Ahora le asigno el evento delRow para que borre la fial en caso de hacer click
$("#"+clickID).bind("click",delRow);					
 
}
 
 
function delRow() {
// Funcion que destruye el elemento actual una vez echo el click
$(this).parent('div').remove();
 
}
// var contador = 1;

// function main () {
// 	$('.menu_bar').click(function(){
// 		if (contador == 1) {
// 			$('nav').animate({
// 				lfet: '0'
// 			});
// 			contador = 0;
// 		} else {
// 			contador = 1;
// 			$('nav').animate({
// 				left: '-100%'
// 			});
// 		}
// 	});

// 	// Mostramos y ocultamos submenus
// 	$('.submenu').click(function(){
// 		$(this).children('.children').slideToggle();
// 	});
// }
