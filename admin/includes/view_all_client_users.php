 <table class="table table-bordered table-hover">
                            <head>
                                <tr>
                                    <th>Pateince Id</th>
                                    <th>Lastname</th>
                                    <th>Firstname</th>
                                    <th>Middlename</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Branch</th>
                                    
                                </tr>
                            </head>
                                <tbody>
                                   
                                  <?php
                                    
                                     $query = "SELECT * FROM tbl_clients";
                                    $select_posts = mysqli_query ($connection, $query);
                
                
                                    while($row = mysqli_fetch_assoc($select_posts)){
                                        $client_id = $row['client_id'];
                                        $client_firstname = $row['client_firstname'];
                                        $client_lastname = $row['client_lastname'];
                                        $client_middlename = $row['client_middlename'];
                                        $client_email = $row['client_email'];
                                        $client_password = $row['client_password'];
                                        $client_address = $row['client_address'];
                                        $client_contactnum = $row['client_contactnum'];
                                        $client_branch = $row['client_branch'];
                                        
                                      
                                       
                                        
                                        echo "<tr>";
                                        echo "<td>$client_id</td>";
                                        echo "<td>$client_lastname</td>";
                                        echo "<td>$client_firstname</td>";
                                        echo "<td>$client_middlename</td>";
                                        echo "<td>$client_email</td>";
                                        echo "<td>$client_password</td>";
                                        echo "<td>$client_address</td>";
                                        echo "<td>$client_contactnum</td>";
                                        echo "<td>$client_branch</td>";
                                        
                                     
                                        
                                        
                            
                        
                                        
                                   
//                            $query = "SELECT * FROM tbl_petinfo";
//                            $select_pet_id = mysqli_query ($connection, $query);
//                                  
//                            while($row = mysqli_fetch_assoc($select_pet_id)) {
//                            $pet_id = $row['pet_id'];
//                            $pet_name = $row['pet_name'];
//                            $pet_breed = $row['pet_breed'];
//                            $pet_species = $row['pet_species'];
//                            $pet_gender = $row['pet_gender'];
//                            $pet_color = $row['pet_color'];
//                                        
//                                        echo "<td>$pet_id</td>";
//                                        
//                                        echo "<td>$pet_name</td>";
//                                        echo "<td>$pet_breed</td>";
//                                        echo "<td>$pet_species</td>";
//                                        echo "<td>$pet_gender</td>";
//                                        echo "<td>$pet_color</td>";
//                                    }
//                                   
                                        echo "<td><a href='client_user.php?source=edit_client_user&p_id={$client_id}'>Edit</a></td>";
                                        echo "<td><a href='client_user.php?delete={$client_id}'>Delete</a></td>";
                                        echo "</tr>";
                            }
                                    
                                    
                                        
                                    ?>     
                                       
                                       
                                 
                                 <?php 
                                    
                                    if(isset($_GET['delete'])){
                                        
                                        $client_id = $_GET['delete'];
                                        
                                        $query = "DELETE FROM tbl_clients WHERE client_id = {$client_id} ";
                                        $delete_query = mysqli_query($connection, $query);
                                        header("Location: client_user.php");
                                    }
                                    
                                    
                                    ?>
                                 
                                  
                                </tbody>
                        </table>