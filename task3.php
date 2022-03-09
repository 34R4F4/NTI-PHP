
<!DOCTYPE html>
<html>
<head>
     <title>PHP task3</title>
     <style>
          input{
               height: 20px;
               width:200px;
               margin-top: 10px;
               margin-bottom: 10px;
               text-align: left;
          }
          label{
               padding: 10px;
          }
          button{
               padding: 10px;
               width: 150px;
               margin-top: 10px;
               margin-bottom: 20px;
          }
     </style>
</head>
<body>

     <div align="center">
          <h2>Form Validation Using PHP</h2>
          <form action="task3.php" method="post">
               <input type="text" name="name" placeholder="Your Name" ><label>Name</label></input><br>
               <input type="text" name="email" placeholder="Your Email"><label>Email</label></input><br>
               <input type="text" name="password" placeholder="Your Password"><label>Password</label></input><br>
               <input type="text" name="adress" placeholder="Your Adress"><label>Adress</label></input><br>
               <input type="text" name="linked" placeholder="https://www.linkedin.com/account"><label>LinkedIn</label></input><br>
               <button type="submit" value="submit">Submit</button>
          </form>
     </div>

     <?php

     // print_r($_POST);
     // print_r(var_dump($_POST['name']));

     /* foreach($_POST as $key => $value){

          #Name
          if(isset($_POST['name']) == true){
               $nLen = strlen($_POST['name']);
               if($nLen == 0){
                    echo "<p color='red'>no Name entered</p>";
               }else{
                    if(var_dump($_POST['name']) == 'string'.($nLen)){
                         continue;
                    }elseif(var_dump($_POST['name']) != 'string'.($nLen)){
                         echo "<p>not valid Name</p>";
                    }
               }  
          }else{
               
          }
          
          
     } */
     //$name = $email = $password = $adress = $linked = '';
     if ($_SERVER["REQUEST_METHOD"] == "POST"){
          /* $name = $_POST["name"];
          $email = $_POST["email"];
          $password = $_POST["password"];
          $adress = $_POST["adress"];
          $linked =$_POST["linked"]; */

          #name
          $nLen = strlen($_POST['name']);
          if ($nLen == 0){
               echo 'No Name Entered';
               gettype($_POST['name']);
          }else{
               $name = $_POST["name"];
               if(is_int((int)$name) === TRUE){
                    echo 'valid Name';
               }else {
                    echo 'Not valid Name';
               }
          }


     }

     
     /// =========   Arafa Khalaf Khalaf   ===================
     ?>
</body>
</html>
