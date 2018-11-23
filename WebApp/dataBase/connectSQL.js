function connectDatabase(){
	 $.ajax({
			 type: "POST",
		 url: "db.php",
	 }).done(function( msg ) {
			 alert( msg );
	 });
}
