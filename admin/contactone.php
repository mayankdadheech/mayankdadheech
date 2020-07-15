<html>
    <head>
         <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="projectcssdemo.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
         <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">




         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" rel="stylesheet">


    <meta charset="utf-8">
    </head>



<body>

<br>
<br>
<br>


 <div class="container">

        <div class="row">

            <div class="col-md-12">


<table id="example" class="table table-striped table-bordered" style="width:90%">
        <thead>
            <tr>
        <th>Sl No</th>
        <th>Name</th>
        <th>Email</th>
        <th>contact</th>
        <th>Message</th>
    </tr>

        </thead>
        <tbody>
            <?php

$con=mysqli_connect("localhost","root","","energybestrate");

    $sql="select *from contactenergy";
    $a=mysqli_query($con,$sql);
    $f=0;
    $slno=1;
    while ($row=mysqli_fetch_row($a)){ ?>
    <tr>
        <td><?php echo $slno; ?></td>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
    </tr>
    <?php
    $slno++;
    $f=1;
}



?>
</tbody>

</table>
</div>
</div>
</div>

     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
</body>
    </html>

    <script type="text/javascript">

$(document).ready(function() {
    $('#example').DataTable();
} );


    </script>
