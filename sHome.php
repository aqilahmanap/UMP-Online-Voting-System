<style>
  .custom-menu {
        z-index: 1000;
      position: absolute;
      background-color: #ffffff;
      border: 1px solid #0000001c;
      border-radius: 5px;
      padding: 8px;
      min-width: 13vw;
}
a.custom-menu-list {
    width: 100%;
    display: flex;
    color: #4c4b4b;
    font-weight: 600;
    font-size: 1em;
    padding: 1px 11px;
}
  span.card-icon {
    position: absolute;
    font-size: 3em;
    bottom: .2em;
    color: #ffffff80;
}
.file-item{
  cursor: pointer;
}
a.custom-menu-list:hover,.file-item:hover,.file-item.active {
    background: #80808024;
}
table th,td{
  /*border-left:1px solid gray;*/
  margin-left:auto;
  margin-right:auto;
}
a.custom-menu-list span.icon{
    width:1em;
    margin-right: 5px
}
.candidate {
    margin: auto;
    width: 23vw;
    padding: 0 10px;
    border-radius: 20px;
    margin-bottom: 1em;
    display: flex;
    border: 3px solid #00000008;
    background: #8080801a;

}
.candidate_name {
    margin: 8px;
    margin-left: 3.4em;
    margin-right: 3em;
    width: 100%;
}
  .img-field {
      display: flex;
      height: 8vh;
      width: 4.3vw;
      padding: .3em;
      background: #80808047;
      border-radius: 50%;
      position: absolute;
      left: -.7em;
      top: -.7em;
  }
  
  .candidate img {
    height: 100%;
    width: 100%;
    margin: auto;
    border-radius: 50%;
}
.vote-field {
    position: absolute;
    right: 0;
    bottom: -.4em;
}
</style>
<body>
    <?php include 'topbar.php' ?>
  <?php include 'sNavbar.php' ?>
  </body>

  <div class="row mt-3 ml-3 mr-3">
  <div class="col-lg-12">
  <div class="card">
  <div class="card-body">
  <div class="text-center">
  <h3><b>Candidate Profile</b></h3>
  <hr>

  <!-- TABLE DISPLAY CANDIDATE -->
  <table class="table table-bordered table-hover">

  <tr>
  <th>Candidate ID</th>
  <th>Candidate Name</th>
  <th>Action</th>
  </tr>
  
<?php

//CREATE CONNECTION TO THE DATABASE
$conn = new mysqli("localhost", "root", "", "umpovs");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT cImage, cID, cName FROM candidates";
$result = $conn->query($sql);

$count=1;
if (mysqli_num_rows($result) > 0){
  foreach($result as $row){
  ?>

<tr>
    <?php   
    foreach($result as $row){  
    ?>

  <td><?=$row["cID"]?></td>
  <td><?=$row["cName"]?></td>
  <td><form method="post" action="vHomepage.php?page=vhome"><input type="submit" name="View" value="View"></form></td>


</tr>

      
  <?php $count=$count+1;
    echo "</tr>";
    }
    ?>
  
  </tbody>
    </table>
</center>

  <?php
    } }
else {
    echo "0 results";
}
?>

</div>
</div>
</div>
<!-- ENDTABLE DISPLAY CANDIDATE -->



<script>
  $('.candidate').click(function(){
    var chk = $(this).find('input[type="checkbox"]').prop("checked");
    
    if(chk == true){
      $(this).find('input[type="checkbox"]').prop("checked",false)
    }else{
      var arr_chk = $("input[name='opt_id["+$(this).attr('data-cid')+"][]']:checked").length
      if($(this).attr('data-max') == 1){
      $("input[name='opt_id["+$(this).attr('data-cid')+"][]']").prop("checked",false)
      $(this).find('input[type="checkbox"]').prop("checked",true)
      }else{
      if(arr_chk >= $(this).attr('data-max')){
          alert_toast("Choose only "+$(this).attr('data-max')+" for "+$(this).attr('data-name')+" category","warning")
          return false;
        }
      }
      $(this).find('input[type="checkbox"]').prop("checked",true)
    }
    $('.candidate').each(function(){
      if($(this).find('input[type="checkbox"]').prop("checked") == true){
        $(this).find('.rem_btn').addClass('active')
      }else{
        $(this).find('.rem_btn').removeClass('active')
      }
    })
    
  })
</script>

<footer>
<small>Copyright © 2021 Universiti Malaysia Pahang. Al rigt ehredver by NurtAWi ah butni  abdul NAba[
</small>
</footer>