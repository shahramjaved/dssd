/* http://keith-wood.name/timeEntry.html
   Spanish initialisation for the jQuery time entry extension
   Written by diegok (diego@freekeylabs.com). */
(function($) {
	$.timeEntry.regional['es'] = {show24Hours: true, separator: ':',
		ampmPrefix: '', ampmNames: ['AM', 'PM'],
		spinnerTexts: ['Ahora', 'Campo anterior', 'Siguiente campo', 'Aumentar', 'Disminuir']};
	$.timeEntry.setDefaults($.timeEntry.regional['es']);
})(jQuery);
