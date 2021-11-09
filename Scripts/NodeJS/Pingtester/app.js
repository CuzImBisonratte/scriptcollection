var fs = require('fs');
var ping = require("net-ping");



var session = ping.createSession();

session.pingHost("8.8.8.8", function(error, target) {
    if (error)
        console.log(target + ": " + error.toString());
    else
        console.log(target + ": Alive");
});