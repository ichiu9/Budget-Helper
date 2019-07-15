<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


<title>50/30/20 Budget-Helper</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


<!--- CSS STYLE -->
<head>
  <style>
  body {
    font-family: "Lato", sans-serif;
  }
  table.table1 {border-collapse: collapse; width: 80%;}
  table.table1 th.table1 {background-color: #4CAF50; padding: 8px; color: white;font-size:14px}
  table.table1 td.table1 { width:20%; padding: 8px; font-size: 12px}
  table.table1 tr.table1:nth-child(even){background-color: #f2f2f2;}

  table.table2 {border-collapse: collapse; width: 80%;}
  table.table2 th.table2 {background-color: #808080; padding: 8px; color: white; font-size: 20px}
  table.table2 td.table2 {text-align: left; padding: 8px}
  table.table2 tr.table2:nth-child(even){background-color: #008080;}

  .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 1px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    border: 1px black;
    margin: 4px 2px;
    cursor: pointer;
  }

  .sidenav {height: 100%; 
    width: 20%; 
    position: fixed; 
    z-index: 1; 
    top:15%;
    right: 0;
    background-color: white;
    overflow-x: hidden;
    color: gray;
  }

  /* Style the sidenav links and the dropdown button */
  .sidenav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 15px;
    color: #818181;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    padding-top: 10px;
    padding-bottom: 10px;
    outline: none;
  }

  /* On mouse-over */
  .sidenav a:hover, .dropdown-btn:hover {
    color: black;
  }

  /* Main content */
  .main {
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
  }

  /* Add an active class to the active dropdown button */
  .active {
    background-color: green;
    color: white;
  }

  /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
  .dropdown-container {
    display: none;
    background-color: #262626;
    padding-left: 8px;
  }

  .open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  background-color: white;
  display: none;
  position: fixed;
  right: 15px;
  border: 3px solid #f1f1f1;
  color: Black;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 2;
}

  /* Optional: Style the caret down icon */
  .fa-caret-down {
    float: right;
    padding-right: 8px;
  }

  .main {
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
  </style>

</head>
<body>

<?php
$servername = "localhost";
$username = "ichiu";
$password = "Isaiahchiu9";

//CONNECTION AND BASE SQL FILE UPLOAD
try {
    $conn = new PDO("mysql:host=$servername;dbname=budget", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    #$conn->exec(file_get_contents('dropschema.sql'));
    #$conn->exec(file_get_contents('createschema.sql'));
    #$conn->exec(file_get_contents('populatesmall.sql'));
    #$conn->exec(file_get_contents('categ_spread_join.sql'));

    $res = $conn->query('SELECT COUNT(*) FROM category');
    $num_rows = $res->fetchColumn();

    
?>
<!--- SIDENAV--->
<div class="sidenav">
  <button class="dropdown-btn">Add Living Expenses
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container"> 
  <form action="" method="post">
      
  Purchase name: <input type="text" name="pname">

  Purchase cost: <input type="number" name="cost" step="0.01">
          
      <?php
      $sql_insert_purchase = "SELECT category_name FROM category WHERE category_type='Living Expenses'";
      $result_purchase = $conn->query($sql_insert_purchase);
      while($row_purchase = $result_purchase->fetch(PDO::FETCH_ASSOC)) {
          echo '<div class="radio">
                  <label><input type="radio" name="radbean" value ="'.$row_purchase["category_name"].'">' .$row_purchase["category_name"]. '</label></div>';
        }
      ?>
        <div class="form-group"> <!-- Date input -->
          <label class="control-label" for="date">Date</label>
          <input class="form-control" id="datepicker" name="date" placeholder="MM/DD/YYY" type="text"/>
        </div>
        <div class="form-group"> <!-- Submit button -->
          <button class="btn btn-primary " name="submit" type="submit">Submit</button>
        </div>
    </form>
  </div>

  <button class="dropdown-btn">Add Savings
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container"> 
  <form action="" method="post">
      
  Purchase name: <input type="text" name="pname">

  Purchase cost: <input type="number" name="cost" step="0.01">     
  <?php
      $sql_insert_purchase = "SELECT category_name FROM category WHERE category_type='Savings'";
      $result_purchase = $conn->query($sql_insert_purchase);
      while($row_purchase = $result_purchase->fetch(PDO::FETCH_ASSOC)) {
          echo '<div class="radio">
                  <label><input type="radio" name="radbean" value ="'.$row_purchase["category_name"].'">' .$row_purchase["category_name"]. '</label></div>';
        }
      ?>
        <div class="form-group"> <!-- Date input -->
          <label class="control-label" for="date">Date</label>
          <input class="form-control" id="datepicker" name="date" placeholder="MM/DD/YYY" type="text"/>
        </div>
        <div class="form-group"> <!-- Submit button -->
          <button class="btn btn-primary " name="submit" type="submit">Submit</button>
        </div>
    </form>
  </div>

  <button class="dropdown-btn">Add Discretionary
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container"> 
  <form action="" method="post">
      
  Purchase name: <input type="text" name="pname">

  Purchase cost: <input type="number" name="cost" step="0.01">
      
  <?php
      $sql_insert_purchase = "SELECT category_name FROM category WHERE category_type='Discretionary'";
      $result_purchase = $conn->query($sql_insert_purchase);
      while($row_purchase = $result_purchase->fetch(PDO::FETCH_ASSOC)) {
          echo '<div class="radio">
                  <label><input type="radio" name="radbean" value ="'.$row_purchase["category_name"].'">' .$row_purchase["category_name"]. '</label></div>';
        }
      ?>
        <div class="form-group"> <!-- Date input -->
          <label class="control-label" for="date">Date</label>
          <input class="form-control" id="datepicker" name="date" placeholder="MM/DD/YYY" type="text"/>
        </div>
        <div class="form-group"> <!-- Submit button -->
          <button class="btn btn-primary " name="submit" type="submit">Submit</button>
        </div>
    </form>
  </div>
</div>

<!---Dropdown button Javascript file-->
<script>
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;
  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
    dropdownContent.style.display = "none";
    } else {
    dropdownContent.style.display = "block";
    }
    });
  }
</script>


<?php
  if(isset($_POST['submit'])){
    $name= $_POST['pname'];
    $cost= $_POST['cost']; 
    $type = $_POST['radbean'];
    $wedate = $_POST['date'];
    $date = date("Y-m-d", strtotime($wedate));
  }else{
    $name= "";
    $cost= 0;
    $type = "";
    $date = "";
  }
    echo $name, " - ", $cost, " - ",$type, " - ", $date;
    $sql_insert_purchase = "INSERT INTO purchase VALUES ('$name', '$cost', '$date');
                            INSERT INTO made_of VALUES ('$name', '$date', '$type', '$date');
                            UPDATE category SET total_money = total_money+'$cost' WHERE category_name='$type';
                            ";
    $result_purchase = $conn->query($sql_insert_purchase);

  
  //Query 4 Query for Total headings from Account
  $sql4 = "SELECT allowance FROM spreadsheet";
  $result4 = $conn->query($sql4);
  $row4 = $result4->fetch(PDO::FETCH_ASSOC);

  //Query 6 Query for Month Name
  $sql6 = "SET @h = (SELECT id FROM spreadsheet LIMIT 1)";
  $result6 = $conn->query($sql6);

  $sql7 = "SELECT MONTHNAME(@h), YEAR(@h)";
  $result7 = $conn->query($sql7);
  $row7 = $result7->fetch(PDO::FETCH_ASSOC);

  // Query 5 Query for Sum of Sub categories
  $arr = array ("Living Expenses", "Savings", "Discretionary"); 
  $s=array();
  foreach ($arr as $val) {  
      $sql5 = "SELECT SUM(total_money) FROM category WHERE category_type='$val'";
      $result5 = $conn->query($sql5);
      $row5 = $result5->fetch(PDO::FETCH_ASSOC);
      array_push($s, $row5["SUM(total_money)"]);
  }
  
  $ultimate = round((($s[0]/$row4["allowance"] + 
  $s[1]/$row4["allowance"]+  
  $s[2]/$row4["allowance"]))*100,2);

    
    // creates Month header as well as Gray main bar
    echo "<nav class='navbar navbar-light bg-light'>
            <span class='navbar-brand mb-0 h1'>".$row7["MONTHNAME(@h)"]." - ".$row7["YEAR(@h)"]."</span>
            <span class='navbar-brand mb-0 h1'>Add Purchase</span>
            </nav>";
    echo "<table class='table2'><tr>
            <th class='table2'>$ultimate%</th>
            <th class='table2'>".$row4["allowance"]."</th>
            <th class='table2'>Total Monthly Allowance</th>
            <th class='table2'></th>
        </tr>";

    foreach ($arr as $val) {  
        // Query for all info
        $sql = "SELECT * FROM category WHERE category_type='$val'";
        $result = $conn->query($sql);

        // Query for Sum of Sub Categories
        $sql2 = "SELECT SUM(total_money) FROM category WHERE category_type='$val'";
        $result2 = $conn->query($sql2);

        // Query for percentage of Types
        if ($val == "Living Expenses") {
            $sql3 = "SELECT l_perc
                        FROM categ_spread 
                        WHERE category_type='Living Expenses'
                        LIMIT 1";
            $type="l_perc";
        } elseif ($val == "Savings") {
            $sql3 = "SELECT s_perc
                        FROM categ_spread 
                        WHERE category_type='Savings'
                        LIMIT 1";
            $type="s_perc";
        } else {
            $sql3 = "SELECT d_perc
                        FROM categ_spread 
                        WHERE category_type='Discretionary'
                        LIMIT 1";
            $type="d_perc";
        }
        $b3 = $conn->prepare($sql3);
        $b3->execute();
        $resultbean = $b3->fetchAll();


        if ($num_rows > 0) {
            $row2 = $result2->fetch(PDO::FETCH_ASSOC);

            $sub_perc = round(($row2["SUM(total_money)"]/
                        ($row4["allowance"]*
                        ($resultbean[0][$type]/100))*100), 2);
            // Categories
            echo "<table class='table1'>
                    <tr class='table1'>
                    <th class='table1'>$sub_perc%</th>
                    <th class='table1'>".$row2["SUM(total_money)"]."</th>
                    <th class='table1'>$val ".$resultbean[0][$type]."%</th>
                    <th class='table1'></th>
                    <th class='table1'></th>
                    <th class='table1'>
                    <button class='button' onclick='openForm()'>+</button>  
                    </th>
                    </tr>";
                ?>
        <!---!!!!!!!REEEEEE-->
            <div class='form-popup' id='myForm'>
            <form action ='add_or_delete.php' method='get'>                
                <h1>Add Category</h1>
                <input type='hidden' name='add_or_delete' value="+">
                <input type="hidden" name="type" value="$val">
                <label for="cat"><b>Category Name:</b></label>
                <input type="text" name="cat" required>
                <label for="desc"><b>Description</b></label>
                <input type="text" name="desc">
                <button type="submit" class="btn">Add</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
                </form>
              </div>


              <script>
                function openForm() {
                document.getElementById('myForm').style.display = 'block';
                }

                function closeForm() {
                document.getElementById('myForm').style.display = 'none';
                }
                </script>
        
            <?php

            // Subcategories

            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr class='table1'>
                <td class='table1'></td>
                        <td class='table1'>".$row["total_money"]."</td>
                        <td class='table1'>".$row["category_name"]."</td>
                        <td class='table1'>".$row["description"]."</td>
                        <td class='table1'>
                        <td class='table1'>
                          <div class='btn-group'>
                            <form action ='add_or_delete.php' method='get'>
                              <button class='button' name='add_or_delete' value = '-' onclick='add_or_delete.php'>-</button>
                              <input type='hidden' name='category' value='".$row["category_name"]."'>
                            </form>
                          </div>
                        </td>
                      </tr>";         
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }  

}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>
</body>
</html>