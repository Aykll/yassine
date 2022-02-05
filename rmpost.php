
<html>
  <head>
<style>


input{
color:black;
font-size:50px;
border :solid 5px #000;
border-radius:20px;
padding:30px 70px;


}
h1{
color:red;
font-weight:bold;
font-size:60px;



}
  button{
 font-weight:bold;
  font-size:60px; 
  background-color:red;
  color:white;
 border-radius:20px;
  border :solid 5px red;
  padding:30px 50px;
  
  }
  </style>
    <meta charset="utf-8">
  </head>
  <body>
  <center>
  <h1> حدف  منشور </h1>
  <form action="rmpost.php" method="get" >
  <input type="text" name="rmpost" placeholder="إسم الملف المراد حدفه " >
  <br>
  <br>
  <button type="submit" > DELETE </button>
 <?php
 $rmfile = $_GET['rmpost'];

 unlink($rmfile);
 
 
 
  ?>
  </body>
</html>