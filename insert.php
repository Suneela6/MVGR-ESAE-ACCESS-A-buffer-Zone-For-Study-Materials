
<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>INSERT PDF</title>
       <style media="screen">
 div{
 background-color:white;
 border: 2px solid black;
 width:990px;
 height:350px;
 margin-left:490px;
 margin-top:50px;
 padding:30px;
 }  
 form{
 margin-left:120px;
 }
 label{

 font-size:20px;
 font-weight:bold;
 margin-left:250px;
 }
 #pdf{
 font-size:20px;
 font-weight:bold;
 margin-top:10px;
 margin-left:250px;
 }
 #upload{
 font-size:20px;
 font-weight:bold;
     margin-left:100px;
     margin-left:250px;
 }
 </style>
  </head>
  <body style="background-color:#367588;">
    <div class="">
      <form class="" action="insert.php" method="post" enctype="multipart/form-data">
        <label for="">Choose Your PDF File</label><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <input id="upload" type="submit" name="submit" value="Upload">
        <?php
        include 'db.php';

        if (isset($_POST['submit'])) {
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);

          $sql="INSERT INTO pdf_file(pdf) values('$pdf')";
          $query=mysqli_query($conn,$sql);



        }



         ?>

      </form>

    </div>

  </body>
</html>
