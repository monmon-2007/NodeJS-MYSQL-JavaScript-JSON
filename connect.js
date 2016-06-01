var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : '192.168.200.119:3306',
  user     : 'root',
  password : 'monmon_2007',
  database : 'PhoneBook'
});

connection.connect();

connection.query('SELECT * from Employees', function(err, rows, fields) {
  if (!err)
    console.log('The solution is: ', rows);
  else
    console.log('Error Mina while performing Query.');
});

connection.end();
