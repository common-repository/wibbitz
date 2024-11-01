console.warn('Wibbitz Player Loaded');
(function(d, s, id) {
	if (d.getElementById(id)) return;
	var js = d.createElement(s); js.id = id;
	js.src = '//cdn4.wibbitz.com/static.js';
	d.getElementsByTagName('body')[0].appendChild(js);
}(document, 'script', 'wibbitz-static-embed'));