// Your existing Node.js code
var mysql = require('mysql');
var fs = require('fs');

var con = mysql.createConnection({
  host: "localhost",
  user: "SIMON",
  password: "SIMON",
  database: "uwmajors"
});

con.connect(function(err) {
  if (err) throw err;
  con.query('SELECT majors, COUNT(*) AS frequency FROM crowdsource_info GROUP BY majors', function(err, results, fields) {
    if(err) throw err;

    fs.writeFile('majorData.json', JSON.stringify(results), function (err) {
      if (err) throw err;
      console.log('Major data saved!');
    });

    con.end();
  });
});