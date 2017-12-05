var history = window.history;

var url = window.location.href;
var baseURL = url.split("?")[0];
var parseURL = baseURL.replace("http://localhost/", "");
history.replaceState(null, null, "/" + parseURL);
