console.log("app.js chargé !");

$.ajax({
	url: '/path/to/file',
	type: 'POST',
	dataType: 'json',
	data: {param1: 'value1'},
	beforeSend: function() {
		//au chargement
	},
	success: function() {
		//chargement réussi
	}
});

$(".comment").delegate(".like", "click", function(event) {
	var id = $(this).attr("id").substring(5);
	console.log("tu as cliqué sur le bouton correspondant au commentaire id = "+id);
	like(id);
});