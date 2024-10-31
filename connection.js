const express= require ('express');
var app= express();
const mysql = require ('mysql');
var Connection= mysql.createConnection({
    host : "localhost",
    user : "root",
    password : "",
    database : "cajab",
    multipleStatements :true
});

Connection.connect(function (err){
    if (!err) {
        console.log("Connected!!");
    } else {
        console.log("Failed to COnnect!");
    }
});
app.get('/', function(req, resp){
    // about mysql
    Connection.query("SELECT * FROM students", function(error, rows, field){
    //callback
    
    if(!!error){
    console.log('Error in the query bro');
    }else{
        console.log('Successful query bro You Got IT');
        console.log(rows);
        resp.send("hello"+rows[0].name);
        
    //parse with your rows/fields
    }
    
    
    } );

});
app.listen(3000)
//module.exports= mysqlConnection;