<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    table,th,td{
      border:1px solid #000000;
      text-align:center;
    }

    table{
      border-collapse:collapse;
    }

    td{
      padding:5px;
    }
  </style>
</head>
<body>
  <table>
    <?php for($i=1;$i<10;$i++){
      print "<tr>\n";
      for($j=1;$j<10;$j++){
        $number = $i*$j;
        print "<td>" . $number . "</td>\n";
      }
      print "</tr>\n" ;
    } ?>
  </table>
</body>
</html>