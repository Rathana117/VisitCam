

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update image</title>
   <?php
        include('includeFiles/dbCon.php');
        $sfId = $_GET["fdId"];
        $qwAll = 'SELECT * FROM tbldata WHERE Id='.$sfId;
        $rwAll = $dbCon->query($qwAll);
        $row = $rwAll->fetch_assoc();
    ?>
</head>

<body>
<center>
    <table style="width:1280px">
        <tr>
            <td colspan="2">
                <?php include('includeFiles/header.php'); ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width:1200px; vertical-align: top">
               <form name="frmUpdate" action="includeFiles/qurUpdateImage.php" method="post" enctype="multipart/form-data">
                <table style="width:920px; font-size:20pt">
                    <tr>
                        <td style="width:920px;padding: 5px">
                            <h3> Updating New Image </h3>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="width:920px;padding: 5px"><input type="text" name="txtId" hidden="true"  style="width:650px;  font-size:20pt" value=<?php echo $row["Id"]; ?> ></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">
                            <font size="+2">
                          <?php echo $row["ProName"]; ?> 
                            </font></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">
                            <img name="imgCur" src="<?php echo $row["imgUrl"]; ?>" /> 
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px"><input type="file" name="imgUpdate" style="width:650px;  font-size:20pt"></td>
                    </tr>
                    
                    
                    <tr>
                        <td style="padding: 5px">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="Submit" name="cmdSubmit" value="Submit">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="Reset" name="cmdReset" value="Cancel"> 
                        </td>
                    </tr>
                </table>
                </form>
            </td>
        </tr>
        <tr>
            <td>CopyRight@2023, NUM IT30_45</td>
            <td style="text-align: center">
                <a href="aboutus.html">About US</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="contactus.html">Contact US</a>
            </td>
        </tr>
    </table>
</center>
</body>
</html>