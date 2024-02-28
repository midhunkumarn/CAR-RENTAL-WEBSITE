<?php   
 $conn=mysqli_connect("localhost","root","","advance"); //database connection  
 //hostname, username, password, database name  
 if ($conn) {  
         
 }else{  
      echo "Error";  
 }  
 //check database connect or not  
 $query="select * from data";  
 $connect=mysqli_query($conn,$query);  
 $num=mysqli_num_rows($connect); //check in database any data have or not  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Data dashboard</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                width: 100%;  
                min-height: 100vh;  
                background: linear-gradient(90deg, rgba(74,166,75,1) 3%, rgba(109,80,205,1) 85%);  
           }  
           header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 10%;
}
.nav_links{
    list-style: none;
    color: white;
}
.nav_links li{
    display: inline-block;
    padding: 0px 20px;
    color: white;
}
.nav_links li a{
    transition: all 0.3s ease 0s;
    color: white;
    font-family: "Montserrat",sans-serif;
    font-weight: 900;
    font-size: 20px;
    text-decoration: none;
}
.nav_links li a:hover{
    color: rgb(105, 191, 234);
}
.title{
    position: relative;
    animation: text 3s 1;
}
           .container{  
                max-width: 900px;  
                margin: 100px auto;  
                width: 100%;  
           }  
           table{  
                border-collapse: collapse;  
                width: 100%;  
           }  
           table th{  
                background: #d559be;  
                color: #fff;  
                padding: 10px;  
           }  
           table td{  
                padding: 12px;  
                color: black;  
                font-size: 1.5rem;  
                text-align: center;  
           }  
           table tr:nth-child(odd){  
                background-color: #797676;  
           }  
      </style>  
 </head>  
 <body> 
 <header>
            <h1 style="color: white; font-weight: bold; font-size: 42px;">Cargage</h1>
           <nav>
               <ul class="nav_links">
                   <li> <a href="index.html">Home</a></li>
                   <li> <a href="about.html">About</a></li>
                   <li><a href="contact.html">Contact</a></li>
               </ul>
           </nav>
 </header>  
 <div class="container">  
      <table border="1">  
           <tr>    
                <th>Name</th>  
                <th>Phone</th>  
                <th>Address</th>
                <th>License</th>
                <th>Number of Days</th>
                <th>Number of Hours</th>
                <th>From Date</th>
                <th>To Date</th>  
           </tr>  
           <?php   
                if ($num>0) {  
                     while($data=mysqli_fetch_assoc($connect)){  
                          echo "  
                               <tr>  
                               <td>".$data['name']."</td>  
                               <td>".$data['phone']."</td>  
                               <td>".$data['text']."</td>  
                               <td>".$data['license']."</td>
                               <td>".$data['days']."</td>
                               <td>".$data['hours']."</td> 
                               <td>".$data['fdate']."</td>
                               <td>".$data['tdate']."</td> 
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
      </table>  
 </div>  
 </body>  
 </html>