// generic javascript


filepicker.setKey( 'A8yAqYzKpTycXyMc5hrYCz' );



$( '#addPicture' ).on( 'click', function() {
	filepicker.pickAndStore({},{},function(InkBlobs){
		addPic( InkBlobs );
	});
} );
$( '#addArtistPicture' ).on( 'click', function() {
	filepicker.pickAndStore({},{},function(InkBlobs){
		addArtistPic( InkBlobs );
	});
} );

function addArtistPic( obj ) {
	console.log( obj[0].url );
	var id = $( '#master' ).data( 'artistid' );

	$.ajax( {
		url: '/asset',
		type: 'POST',
		data: { url: obj[0].url, artist_id: id, type: 'picture' }
		} );

}
function addPic( obj ) {
	console.log( obj[0].url );
	var userId = $( '#master' ).data( 'userid' );

	$.ajax( {
		url: '/asset',
		type: 'POST',
		data: { url: obj[0].url, user_id: userId, type: 'picture' }
		} );

}