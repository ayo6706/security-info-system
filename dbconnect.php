<?php
                $link = mysqli_connect('localhost','root','','sis_db');
                if(mysqli_connect_error()){
                  die(" connecction error");
                }else{


                    

                   



                  $query2 = "SELECT * FROM officer" ;

                  if($result = mysqli_query($link,$query2)){
                    
                    $row = mysqli_fetch_array($result);
                    $officer_lName = $row['last_name'];
                    $officer_fName = $row['first_name'];
                    $officer_phoneNo = $row['phone_number'];
                    $officer_photo = $row['photo'];
                    $officer_password = $row['password'];
                    #echo $row['username'];
                  }
                }
               ?>