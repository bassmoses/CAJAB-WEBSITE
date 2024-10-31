var express = require('express');
var router = express.Router();
let connection = mysql.createConnection({
  
    host:'localhost',
    user:'root',
    password:'',
    database: 'cajab'
      
  });
router.get('/form', function(req, res, next) { 
res.render('users'); 
});
router.post('/create', function(req, res, next) {
  
  // store all the user input data
  const userDetails=req.body;
 
  // insert user data into users table
  var sql = 'INSERT INTO users SET ?';
  connection.query(sql, userDetails,function (err, data) { 
      if (err) throw err;
         console.log("User data is inserted successfully "); 
  });
 res.redirect('/log.php');  // redirect to user form page after inserting the data
}); 
module.exports = router;