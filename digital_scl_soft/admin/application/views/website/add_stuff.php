<aside class="right-side">      <!---rightbar start here --->
                <!-- Content Header (Page header) -->
				<script>
					function imge_upload(img_val){
						if(img_val==''){
							document.getElementById("img_div").style.display = "none";
						}
						else{
							document.getElementById("img_div").style.display = "block";
						$("#img_id").attr('src',URL.createObjectURL(event.target.files[0]));
						}
					}

				</script>
                <section class="content-header">
                    <h1>
                        Add Stuff
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                      <div class="col-md-10">
							
						<form  class="form-horizontal" role="form" action="index.php/admin/add_stuff" method="post" enctype="multipart/form-data">

						<div class="form-group" id="img_div" style="display:none;">
							<div class="col-sm-8">
							 
							</div>
							<div class="col-sm-4">
							 
								<img src="" class="img-thumbnail" height="150" width="150"   id="img_id"/>
							</div>
							</div>
						
						
						  <div class="form-group">
							<label class="control-label col-sm-2" for="email">Name</label>
							<div class="col-sm-4">
							  <input type="name" class="form-control" id="name" placeholder="Enter Student's Name">
							</div>
							<label class="control-label col-sm-2" for="email">Father's Name</label>
							<div class="col-sm-4">
							  <input type="text" name="fName" class="form-control" id="fName" placeholder="Enter Father's Name">
							</div>
						  </div>
						  
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Mother 's Name</label>
								<div class="col-sm-4">
								  <input type="text" name="mName" class="form-control" id="mName" placeholder="Enter Mother's Name">
								</div>
								
								
								<label class="control-label col-sm-2" for="email">Phone</label>
								<div class="col-sm-4">
								  <input type="text" name="Phone_n" class="form-control" id="Phone_n" placeholder="Enter Phone Number" onkeypress="return isNumber(event);">
								</div>
								
							</div>
							
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Birth Day</label>
								<div class="col-sm-4">
								  <input type="email" name="email" class="form-control" id="email" placeholder="Birth Day">
								</div>
								<label class="control-label col-sm-2" for="email">Gender</label>
								<div class="col-sm-4">
								  <select class="form-control" name="gender" id="gender">
									<option>Enter Gender</option>
									<option>Male</option>
									<option>Female</option>
								  </select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="religion">Relagion</label>
								<div class="col-sm-4">
								  <select class="form-control" name ="religion" id="religion">
									<option>Enter Relagion</option>
									<option>Muslim</option>
									<option>Hindu</option>
									<option>Kristan</option>
								  </select>
								</div>
								<label class="control-label col-sm-2" for="email">Blood Group</label>
								<div class="col-sm-4">
								  <select class="form-control" name="blood_grou" id="blood_grou" placeholder="Enter email">
									<option>Group</option>
									<option>O+</option>
									<option>O-</option>
									<option>A+</option>
									<option>A-</option>
								  </select>
								</div>
							</div>
							
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Joning Date</label>
								<div class="col-sm-4">
								  <input type="text" class="form-control" name="trans_id" id="trans_id" placeholder="Enter Date" onkeypress="return isNumber(event);">
								</div>
								
								<label class="control-label col-sm-2" for="email">Picture</label>
								<div class="col-sm-4">
								  <input type="file" class="form-control" name="trans_id" onchange="imge_upload(this.value);" id="trans_id">
								</div>
							
							</div>
							

						  <div class="form-group"> 
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" class="btn btn-primary" name="submit" id="submit"><span class="glyphicon glyphicon-send"></span> Submit</button> &nbsp;&nbsp;&nbsp;
							  <button type="reset" class="btn btn-warning"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
							</div>
						  </div>
						</form>

							
						
					  </div>
					  <div class="col-md-2">
					  
					  </div>
                    </div>


                </section><!-- /.content -->
            </aside><!-- /.right-side -->     <!---rightbar close here ---->