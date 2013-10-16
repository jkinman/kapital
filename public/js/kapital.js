// generic javascript


filepicker.setKey( 'A8yAqYzKpTycXyMc5hrYCz' );


$( 'addPicture' ).on( 'click', function() {
	filepicker.pickAndStore({},{},function(InkBlobs){
	   console.log(JSON.stringify(InkBlobs));
	});
} );
