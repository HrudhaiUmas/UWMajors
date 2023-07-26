var mysql = require('mysql');
var fs = require('fs');

var con = mysql.createConnection({
  // change these values
  host: "localhost",
  user: "SIMON",
  password: "SIMON",
  database: "uwmajors"
});

con.connect(function(err) {
    if (err) throw err;
    con.query('SELECT * FROM crowdsource_info', function(err, results, fields) {
        if(err) throw err;
        
        fs.writeFile('table.json', JSON.stringify(results), function (err) {
        if (err) throw err;
        console.log('Saved!');
        });

        con.end();
    });
});
