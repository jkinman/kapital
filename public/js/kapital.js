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

function emailSubscribe( ) {

	var MAILCHIMP_API_KEY = b1e6ce9b2cfe599af491897b3349d556-us7;
	var email = $( '#email' ).value();
	var url = 'us7.api.mailchimp.com/2.0//lists/subscribe.json';
	var postData = {
	    "apikey": MAILCHIMP_API_KEY,
	    "id": '1826080186',
	    "email": {
	        "email": email,
	    },
	    "merge_vars": {
	        "new-email": email,
	    },
	    "email_type": "html",
	    "double_optin": true,
	    "update_existing": true,
	    "send_welcome": true
	};

	$.ajax( {
		url:url, 
		type: 'post',
		data: postData
	} );

}