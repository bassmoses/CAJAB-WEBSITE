const mysql = require('mysql');

// Connection Pool
let connection = mysql.createConnection({
  
  host:'localhost',
  user:'root',
  password:'',
  database: 'cajab'
    
});
//CODE TO CHECK THE CONNECTION TO THE DATABASE 

/**connection.connect(function(error){
  if(!!error){
      console.log('Connection Failed bro');
  
  }else{
      console.log('Connected bro Youre Good to go!!!');
  }

})
**/


connection.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "INSERT INTO `students` (`id`, `name`, `email`, `password`, `date of birth`, `gender`, `phone number`) VALUES (NULL, 'phoenix', 'bassmoses@gmail.com', '156789', '22/08/200', 'male', '3442804');";
  connection.query(sql, function (err, result) {
    if (err) throw err;
    console.log("1 record inserted");
  });
});




// Add new user
exports.create = (req, res) => {
  const { fullname, email, password, date_of_birth, gender, number } = req.body;
  

  let searchTerm = req.body.search;


  

  // User the connection
  /**connection.query('INSERT INTO students SET name = ?, email = ?, password = ?, date of birth = ?, gender = ?, phone number = ?',
   [fullname, email, password, date_of_birth, gender, number], (err, rows) => {
    if (!err) {
      res.render('add-user', { alert: 'User added successfully.' });
    } else {
      console.log(err);
    }
    console.log('The data from user table: \n', rows);
  }); **/

}
exports.form = (req, res) => {
  res.render('add-user');
}
module.exports = connection;



