
 $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '< Ant',
 nextText: 'Sig >',
 currentText: 'Hoy',
 monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
 monthNamesShort: ['Jan','Fev','Mar','Abr', 'Mai','Jun','Jul','Ago','Set', 'Out','Nov','Dez'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb'],
 dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb'],
 weekHeader: 'Sm',
  firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
$(function () {
$("#datepicker").datepicker({
    format: 'd/m/Y',
        lang: 'es'
    }).setLocale('es');
    DataTablesConfig("datatables");
});