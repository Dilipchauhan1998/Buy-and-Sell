<?php  
 session_start();
 include 'ConnectDB.php';
 $username=$_SESSION['username'];
 $cat=$_GET['id'];
 $sort=$_SESSION['sort'];
$noresult="No result found";
//$_SESSION['category']=$cat;
 ?>

<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
          
                <table class="table table-bordered">  
                     <tr>  
                          <th></th> 
                           <a href="homesearch.php">go to home</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 
                           <a href="p_listicon.php?id=<?php echo$cat;?>">sort by price ASC</a> 
                          
                            <?php  echo"<br>";?> 
                     </tr>  
                <?php 
                if($sort==0)
                { 
                $query ="SELECT * FROM product WHERE category='$cat' ";
                 $_SESSION['sort']=1; 
                } 
                else
                {
                   $query ="SELECT * FROM product WHERE category='$cat' ORDER BY price ASC";

                }
                $result = mysqli_query($db, $query);  
                while($row = mysqli_fetch_array($result)):  
                  ?>
              
              <?php         $name=$city_name=$state_name="";$noresult="";
                      $price=$row['price'];
                      $pid=$row['product_id'];
                       $queryy = "SELECT * FROM seller_Info where p_id5=$pid"; 
                       $resultt = mysqli_query($db, $queryy);

                        while($raw = mysqli_fetch_array($resultt))
                          {
                            $name=$raw['name'];
                            $city_name=$raw['city_name'];
                            $state_name=$raw['state_name'];
 

                          }
                  ?>                       
                     <?php  echo"&nbsp";echo"&nbsp"; echo"<font color='purple'><p>".$row['title']."</p></font>";echo"&nbsp";echo"&nbsp";
                       // echo $name;
                        echo "  <font color='blue'>  ".$city_name." </font>";
                        echo"&nbsp";
 			echo"&nbsp";
			echo"&nbsp";
			echo"&nbsp";
			echo"&nbsp";echo"&nbsp";echo"&nbsp";echo"&nbsp";echo"&nbsp";
                        echo "  <font color='blue'>  ".$state_name." </font>";
                        echo"<br>";


                          ?>
			   
                       
                    
                 <a  href="p_listdetail.php?id=<?php echo $pid;?> "> 
                    	<?php     echo '   <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="70" width="50" class="img-thumnail" />  </a>'; 

echo"&nbsp";echo"&nbsp";echo"&nbsp";echo"&nbsp";echo"&nbsp";echo"&nbsp";echo"&nbsp";echo"&nbsp";echo"&nbsp"; ?>

                 </a>
                 
                 <?php echo"<font color='green'>Rs".$price."</font>";?><br><br>	<br><br><br>
     <?php endwhile  ?>
<?php echo"<br><br><br>";?>
                  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                  <?php echo"<font color='green'>".$noresult."</font>";?>
                </table>  
           </div>  
      </body>  
 </html>  
