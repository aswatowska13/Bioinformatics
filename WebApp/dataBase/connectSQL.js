function connectDatabase(){
	 $.ajax({
		type: "POST",
		 url: "database/db.php",
	 }).done(function( msg ) {
			 alert( msg );
	 });
}