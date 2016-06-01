var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : '192.168.200.119:3306',
  user     : '******',
  password : '******',
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
