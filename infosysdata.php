<?php
include('11database.php');
$sql="SELECT * FROM studentinformation";
$run=mysqli_query($conn,$sql);
$count=0;
while($data=mysqli_fetch_assoc($run))
{
    $count++;
?>
<style>
    th{border:2px solid black;}
    td{border:2px solid black;}
</style>
<div class="container" style="border:2px solid black;">

    <table class="table table-info">
        <tr style="border:2px solid black;">
            <th scop="col">S.NO</th>
            <td><?php echo $count;?></td>
</tr>

<tr>
            <th scop="col">FULL NAME</th>
            <td><?php echo $data['fullname'];?></td>
            
</tr>
<tr>
            <th scop="col">CLASS</th>
            <td><?php echo $data['class'];?></td>
</tr>
<tr>
            <th scop="col">GROUP</th>
            <td><?php echo $data['group'];?></td>
</tr>
<tr>
            <th scop="col">ATTENDENCE</th>
            <td><?php echo $data['attendence'];?></td>
</tr>
<tr>
            <th scop="col">HOMEWORK</th>
            <td><?php echo $data['homework'];?></td>
</tr>
<tr>
            <th scop="col">REVISIONWORK</th>
            <td><?php echo $data['revisionwork'];?></td>
</tr>

<tr>
            <th scop="col">INDEX</th>
            <td><?php echo $data['index'];?></td>
</tr>


<tr>
            <th scop="col">EMAIL</th>
            <td><?php echo $data['email'];?></td>
</tr>


<tr>
      <th scop="col">DELETE</th>
      <td>
        <a href="datadelete.php?>sid=
        <?php echo $data['id'];?>">Delete</a>
      </td>
</tr>
</table>
</div>
<?php

}

?>






    
