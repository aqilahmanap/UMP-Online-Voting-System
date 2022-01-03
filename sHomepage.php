<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Voting System</title>
 	

<?php
	session_start();
  if(!isset($_SESSION['login_id']))
    header('location:login.php');
 include('./header.php'); 
 // include('./auth.php'); 
 ?>

</head>
<style>
	body{
        background: #80808045;
  }
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
  <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body text-white">
    </div>
  </div>

  <!-- DISPLAY sHOME.php -->
  <main id="view-panel" >
    <?php $page = isset($_GET['page']) ? $_GET['page'] :'sHome'; ?>
  	<?php include $page.'.php' ?>
  </main>	
  <!-- END DISPLAY sHOME.php -->
</html>