<title>AyoSurabaya.com - Semua Tentang Surabaya</title>

<!-- meta titles -->
<meta charset="utf-8">
<?php $meta = metadata_seo(); ?>
<title><?php echo $meta['title']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="refresh" content="900" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
<meta name="description" content="<?php echo $meta['desc']; ?>" />
<meta name="keywords" content="<?php echo $meta['keyword']; ?>" />
<meta name="author" content="<?php echo $this->config->item('page_meta')['site_author']; ?>" />
<meta name="copyright" content="<?php echo $this->config->item('page_meta')['copyright']; ?>" />
<meta name="robots" content="index, follow, noodp, noydir" />
<meta name="googlebot" content="index, follow" />
<meta name="language" content="id" />
<meta name="geo.country" content="id" />
<meta http-equiv="content-language" content="In-Id" />
<meta name="geo.placename" content="Indonesia" /> 
<meta name="google-site-verification" content="<?php echo $this->config->item('page_meta')['google_ver']; ?>" />
<meta name="msvalidate.01" content="<?php echo $this->config->item('page_meta')['bing_ver']; ?>" />
<meta name="alexaVerifyID" content="<?php echo $this->config->item('page_meta')['alexa_ver']; ?>" />
<meta property="fb:app_id" content="<?php echo $this->config->item('page_meta')['fb_app_id']; ?>"/>
<meta content="http://www.facebook.com/<?php echo $this->config->item('page_meta')['fb_page_name']; ?>" property="fb:admins"/>
<?php meta_ogp(); ?>
<?php echo (isset($meta['canonical']) || $meta['canonical'] != '') ? $meta['canonical'] : ''; ?>

<link rel="apple-touch-icon" href="http://localhost/ayosurabaya/apple-touch-icon.png">
<link rel="shortcut icon" href="http://localhost/ayosurabaya/assets/img/footer-logo.png">

<!-- css -->
<link rel="stylesheet" href="http://localhost/ayosurabaya/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/ayosurabaya/assets/css/surabaya.css">
<link rel="stylesheet" href="http://localhost/ayosurabaya/assets/fontawesome/css/all.css">
<link rel="icon" href="http://localhost/ayosurabaya/assets/img/footer-logo.png" type="image/x-icon"/ >
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />

<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-messaging.js"></script>
<!-- <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script> -->
<script>
	var firebaseConfig = {
		apiKey: "AIzaSyCT-stYM_MUWchnU0pngnSdTrByWOshox0",
		authDomain: "ayosurabaya-fa0d2.firebaseapp.com",
		databaseURL: "https://ayosurabaya-fa0d2.firebaseio.com",
		projectId: "ayosurabaya-fa0d2",
		storageBucket: "ayosurabaya-fa0d2.appspot.com",
		messagingSenderId: "37274051004",
		appId: "1:37274051004:web:da688840dda06038"
	};
	// Initialize Firebase
	firebase.initializeApp(firebaseConfig);

	const messaging = firebase.messaging();
	messaging.usePublicVapidKey('BFmzDJqBOisYGkImC6jmFDO4eKJv3ZePbP9AJ_oEKSQRRHwaw2zQdOpBNYxTLuiDv_3-VhdEboR6MIzlCFgOeCA');

	messaging.onTokenRefresh(function() {
		messaging.getToken().then(function(refreshedToken) {
			console.log('Token refreshed.');
			// Indicate that the new Instance ID token has not yet been sent to the
			// app server.
			setTokenSentToServer(false);
			// Send Instance ID token to app server.
			sendTokenToServer(refreshedToken);
			// [START_EXCLUDE]
			// Display new Instance ID token and clear UI of all previous messages.
			resetUI();
			// [END_EXCLUDE]
		}).catch(function(err) {
			console.log('Unable to retrieve refreshed token ', err);
			// showToken('Unable to retrieve refreshed token ', err);
		});
	});

	messaging.onMessage(function(payload) {
		console.log('Message received. ', payload);
		// [START_EXCLUDE]
		// Update the UI to include the received message.
		appendMessage(payload);
		// [END_EXCLUDE]
	});

	// self.addEventListener('appendMessage', function(e) {
	// 	console.log('explore', e.notification);
	// 	var notification = e.notification;
	// 	var primaryKey = notification.data.primaryKey;
	// 	var action = e.action;

	// 	if (action === 'close') {
	// 		notification.close();
	// 	} else {
	// 		clients.openWindow('https://www.ayobandung.com');
	// 		notification.close();
	// 	}
	// });

	// [END receive_message]
	function resetUI() {
		// clearMessages();
		// showToken('loading...');
		// [START get_token]
		// Get Instance ID token. Initially this makes a network call, once retrieved
		// subsequent calls to getToken will return from cache.
		messaging.getToken().then(function(currentToken) {
			if (currentToken) {
				console.log(currentToken);
				sendTokenToServer(currentToken);
				// updateUIForPushEnabled(currentToken);
				addSubscribeToTopic(currentToken, "news_web");
			} else {
				// Show permission request.
				console.log('No Instance ID token available. Request permission to generate one.');
				// Show permission UI.
				// updateUIForPushPermissionRequired();
				setTokenSentToServer(false);
			}
		}).catch(function(err) {
			console.log('An error occurred while retrieving token. ', err);
			// showToken('Error retrieving Instance ID token. ', err);
			setTokenSentToServer(false);
		});
		// [END get_token]
	}

	function addSubscribeToTopic(token, topic) {
		fetch('https://iid.googleapis.com/iid/v1/' + token + '/rel/topics/' + topic, {
			method: 'POST',
			headers: new Headers({
				'Authorization': 'key=AAAACK204bw:APA91bHZRgQdyhhr-ZbwZPJ1eFwxOiFFA0HfjKwPeAEhkDYJ9yQzxRUEd7065OJaG_0pyK7F_mk-5fPG5taMWfz2J-9ihqVSjQZ5GXrPLJAsgQEeTWrkva9i_yiSUocmm8sUNbg-z84k'
			})
		}).then(response => {
			if (response.status < 200 || response.status >= 400) {
				throw 'Error subscribing to topic: ' + response.status + ' - ' + response.text();
			}
			console.log('Subscribed to "' + topic + '"');
		}).catch(error => {
			console.error(error);
		});
	}

	function requestPermission() {
		console.log('Requesting permission...');
		// [START request_permission]
		messaging.requestPermission().then(function() {
			console.log('Notification permission granted.');
			// TODO(developer): Retrieve an Instance ID token for use with FCM.
			// [START_EXCLUDE]
			// In many cases once an app has been granted notification permission, it
			// should update its UI reflecting this.
			resetUI();
			// [END_EXCLUDE]
		}).catch(function(err) {
			console.log('Unable to get permission to notify.', err);
		});
		// [END request_permission]
	}

	function deleteToken() {
		// Delete Instance ID token.
		// [START delete_token]
		messaging.getToken().then(function(currentToken) {
			messaging.deleteToken(currentToken).then(function() {
				console.log('Token deleted.');
				setTokenSentToServer(false);
				// [START_EXCLUDE]
				// Once token is deleted update UI.
				resetUI();
				// [END_EXCLUDE]
			}).catch(function(err) {
				console.log('Unable to delete token. ', err);
			});
			// [END delete_token]
		}).catch(function(err) {
			console.log('Error retrieving Instance ID token. ', err);
			// showToken('Error retrieving Instance ID token. ', err);
		});
	}
	// function showToken(currentToken) {
	//     // Show token in console and UI.
	//     var tokenElement = document.querySelector('#token');
	//     tokenElement.textContent = currentToken;
	// }

	function sendTokenToServer(currentToken) {
		if (!isTokenSentToServer()) {
			console.log('Sending token to server...');
			// TODO(developer): Send the current token to your server.
			setTokenSentToServer(true);
		} else {
			console.log('Token already sent to server so won\'t send it again ' + 'unless it changes');
		}
	}
	function isTokenSentToServer() {
		return window.localStorage.getItem('sentToServer') === '1';
	}

	function setTokenSentToServer(sent) {
		window.localStorage.setItem('sentToServer', sent ? '1' : '0');
	}
	// Add a message to the messages element.
	function appendMessage(payload) {
		var reg = navigator.serviceWorker.register('/../firebase-messaging-sw.js');
		navigator.serviceWorker.getRegistration().then(function(reg) {
			var options = {
				body: payload.notification.body,
				icon: payload.notification.icon,
				click_action: payload.notification.click_action,
				vibrate: [100, 50, 100],
				data: {
					dateOfArrival: Date.now(),
					primaryKey: 1
				},
				// actions: [
				//   {action: 'explore', title: 'Explore this new world',
				//     icon: 'images/checkmark.png'},
				//   {action: 'close', title: 'Close notification',
				//     icon: 'images/xmark.png'},
				// ]
			};
			return reg.showNotification(payload.notification.title, options);
		});

		// messaging.setBackgroundMessageHandler(function(payload) {
		// console.log('[firebase-messaging-sw.js] Received background message ', payload);
		// // Customize notification here
		// var notificationTitle = 'Background Message Title';
		// var notificationOptions = {
		//     body: 'Background Message body.',
		//     icon: '/firebase-logo.png'
		// };

		// return self.registration.showNotification(notificationTitle,
		//     notificationOptions);
		// });
	}
	requestPermission();
	// resetUI();
</script>

<script data-ad-client="ca-pub-6344910443143463" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!--Adomik randomizer for ad call key value targeting-->
<script type='text/javascript'>
	window.Adomik = window.Adomik || {};
	Adomik.randomAdGroup = function() {
		var rand = Math.random();
		switch (false) {
			case !(rand < 0.09):
				return "ad_ex" + (Math.floor(100 * rand));
			case !(rand < 0.10):
				return "ad_bc";
			default:
				return "ad_opt";
		}
	};
</script>

<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
<script>
	window.googletag = window.googletag || {
		cmd: []
	};
	googletag.cmd.push(function() {
		googletag.defineSlot('/21622890900/ID_ayosurabaya.com_pc_article_Mid1_300x250//336x280//640x360', [
			[300, 250],
			[640, 360],
			[336, 280]
		], 'div-gpt-ad-1567136321673-0').setCollapseEmptyDiv(true).setTargeting('ad_group', Adomik.randomAdGroup()).addService(googletag.pubads());
		googletag.pubads().enableSingleRequest();
		googletag.enableServices();
	});
</script>