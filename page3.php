<html>

   <head>
      <title>Add New Record in MySQL Database</title>
   </head>

   <body>
      <?php
         if(isset($_POST['add']))
         {
            $dbhost = 'www.db4free.net';
            $dbuser = 'monmon_2007';
            $dbpass = 'marina_zoom';
			$dbname = 'mina';
            $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname); // Create connection

            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }

            if(! get_magic_quotes_gpc() )
            {
               $emp_name = addslashes ($_POST['emp_name']);
               $emp_address = addslashes ($_POST['emp_address']);
            }
            else
            {
               $emp_name = $_POST['emp_name'];
               $emp_address = $_POST['emp_address'];
            }


            $sql ="INSERT INTO info (first, last)
			VALUES ('$emp_name', '$emp_address')";


            $retval = $conn->query($sql);

            if(! $retval )
            {
               die('Could not enter data: ' . $conn->connect_error);
            }

            echo "Entered data successfully\n";

            $conn->close();
         }
         else
         {
            ?>

               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1"
                     cellpadding = "2">

                     <tr>
                        <td width = "100">First Name</td>
                        <td><input name = "emp_name" type = "text"
                           id = "emp_name"></td>
                     </tr>

                     <tr>
                        <td width = "100">Last Name</td>
                        <td><input name = "emp_address" type = "text"
                           id = "emp_address"></td>
                     </tr>


                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>

                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add"
                              value = "Add Employee">
                        </td>
                     </tr>

                  </table>
               </form>

            <?php
         }
      ?>

   </body>
</html>