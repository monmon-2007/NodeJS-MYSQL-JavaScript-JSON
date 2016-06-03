var mysql = require('mysql');

var connection = mysql.createConnection(
    {
  		host     : 'www.db4free.net',
  		user     : '**********',
  		password : '**********',
  		database : '**********'
    }
);

connection.connect(function(err){
if(!err) {
    console.log("Database is connected ... nn");
} else {
    console.log("Error connecting database ... nn");
}
});


connection.query('SELECT first FROM info;', function(err, rows, fields) {
    if (err) {console.log('Error while performing Query.');}

    for (var i in rows) {
        console.log('First Name: ', rows[i].first);
    }
});

connection.end();
