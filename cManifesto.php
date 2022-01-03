<?php 
include('db_connect.php');
?>

<div class="container-fluid">
	
			<div class="col-md-6">
				<div class="card">
					
					<div class="card-header">
					Manifesto Form
				  	</div>

					<div class="card-body">
					<input type="hidden" name="id">
					<div class="form-group">
					<br>	

			<!-- FORM FOR MANIFESTO --> 
			<form action="insertManifesto.php" method="post">
                <div class="form-group">
                <label>Insert ID number</label>
                <input type="text" name="cID" class="form-control">
                </div>

                <div class="form-group">
                <label>Insert manifesto</label>
                <textarea type="text" name="cManifesto" class="form-control"></textarea>
                </div>

                <input type="submit" class="btn btn-primary" name="hantar" value="Save">
            </form>
            <!-- END FORM FOR MANIFESTO --> 

				</div>
				</div>
				<div class="card-footer">
				<div class="row">
				<div class="col-md-12">
				</div>
				</div>
				</div>
				</div>
			<!-- FORM Panel -->
</div>
</div>	
</div>
<footer>
<small>Copyright © 2021 Universiti Malaysia Pahang. All Rights Reserved. By Nur Aqilah</small>
</footer>