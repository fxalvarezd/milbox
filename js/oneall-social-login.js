// https://app.oneall.com - Social Log In
var oa = document.createElement('script');
oa.type = 'text/javascript'; oa.async = true;
oa.src = '//milbox.api.oneall.com/socialize/library.js'
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(oa, s)

// config
var _oneall = _oneall || [];
_oneall.push(['social_login', 'set_callback_uri', 'http://localhost/milbox/pages/home.php']);
_oneall.push(['social_login', 'set_providers', ['facebook', 'google', 'twitter', 'yahoo', 'openid', 'paypal', 'amazon', 'linkedin']]);
_oneall.push(['social_login', 'attach_onclick_popup_ui', 'oa_social_login_link']);