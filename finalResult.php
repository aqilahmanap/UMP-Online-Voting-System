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

<div class="containe-fluid">
  <?php include('db_connect.php') ;
  $voting = $conn->query("SELECT * FROM voting_list where  is_default = 1 ");
  foreach ($voting->fetch_array() as $key => $value) {
    $$key = $value;
  }
  $votes  = $conn->query("SELECT * FROM votes where voting_id = $id ");
  $v_arr = array();
  while($row=$votes->fetch_assoc()){
    if(!isset($v_arr[$row['voting_opt_id']]))
      $v_arr[$row['voting_opt_id']] = 0;

    $v_arr[$row['voting_opt_id']] += 1;
  }
  $opts = $conn->query("SELECT * FROM voting_opt where voting_id=".$id);
  $opt_arr = array();
    while($row=$opts->fetch_assoc()){
    $opt_arr[$row['category_id']][] = $row;

  }

  ?>
  <div class="row mt-3 ml-3 mr-3">
  <div class="col-lg-12">
  <div class="card">
  <div class="card-body">
  <div class="text-center">

  <!-- TABLE DISPLAY CANDIDATE -->
  <table class="table table-bordered table-hover">

  <tr>
    <th>Category Type</th>
    <th>Result</th>
  </tr>
  <tr>
    <td>President</td>
    <td><form method="post" action="presidentChart.php" target="_blank"><input type="submit" name="View" value="View"></form></td>
  </tr>
    <tr>
    <td>Vice President</td>
    <td><form method="post" action="VPChart.php" target="_blank"><input type="submit" name="View" value="View"></form></td>
  </tr>

  </div>

</div>
<script>
  
</script>