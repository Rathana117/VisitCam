<center>
    <table style="width:1280px">
        <tr>
            <td colspan="2">
                <?php include('includeFiles/header.php'); ?>
            </td>
        </tr>
        <tr>
            <td style="width:920px; vertical-align: top">
		<?php
       $img = $_FILES["fImg"]["name"];
        $rand = rand();
        $imgU = $rand.$img;
        $path = "image/".$imgU;
        move_uploaded_file($_FILES['fImg']['tmp_name'],$path);
        $indate = date('Y/m/d H:m:s');

        include('includeFiles/dbCon.php');
 
        $queryAdd = 'Insert into tbldata (ProName, CatID, Descripition, desUrl, imgUrl, Datein) Values("'.$_POST["txtProName"].'", "'.$_POST["CatType"].'", "'.$_POST["des"].'","'.$_POST["txtDesLink"].'", "'. $path .'", "'. $indate .'")';
        //Check From Here  
        if (mysqli_query($dbCon, $queryAdd)) {
          echo '"<h1>"The Post Summary !!!"</h1>"';
          echo 'New record created successfully!';   
        } 
        else 
          echo "Error: " . $queryAdd . "<br>" . mysqli_error($dbCon);
        echo 'Thank You!!!';
    $dbCon->close();
  ?>
	<br><br>
	<a href ="Addnew.php">Add More</a>
	<br><br>
	 </td>
            <td style="width:350px;vertical-align: top"  >
                <?php include('includefiles/Rside.php') ?>
            </td>
		</tr>
        <tr>
            <td>CopyRight@2023, NUM IT30_45</td>
            <td style="text-align: center">
                <a href="aboutus.html">About Us</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="contactus.html">Contact Us</a>
            </td>
        </tr>
    </table>
</center>