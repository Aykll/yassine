
<html>
  <head>
  <style>
  input{
  color:black;
  font-size:50px;
  
  border :solid 5px #000;
  border-radius:20px;
  padding:30px 90px;
  
  
  }
  h1{
 border :solid 5px #000;
  border-radius:20px;
  border-color:red blue green purple;
  font-size:80px;
  }
  
  button{
  background-color:aqua;
  border :solid 5px #000;
  border-color:red blue green purple;
  font-size:80px;
  border-radius:20px;
  }
  
  </style>
    <meta charset="utf-8">
  </head>
  <body>
  <center>
  <h1> إضافة منشور </h1>
  <form action="post.php" method="get" >
  <input type="text" name="txl" placeholder="اسم المنشور وصيغته" >
  <br>
  <br>
  <input type="text" name="txp" placeholder=" محتوا المنشور " >
  <br>
  <br>
  <button type="submit"> SEND </button>
  <?php
  $tx =$_GET['txl'];
   $txx =$_GET['txp'];
  file_put_contents("$tx" , "$txx");
  
  
  ?>
  </body>
</html>