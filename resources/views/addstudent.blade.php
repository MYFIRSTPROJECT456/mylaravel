@include('links.headerlink')
<body>
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
<!-- begin #header -->
<div id="header" class="header navbar navbar-default navbar-fixed-top">
@include('layout.header')
</div>
<!-- end #header -->
@include('layout.sidebar')
<!-- begin #content -->
<div id="content" class="content">
			
			<!-- begin page-header -->
			<h1 class="page-header"></small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-2 -->
			    <div class="col-md-2">
			        
                </div>
                    <!-- end col-2 -->
                <!-- begin col-8 -->
			    <div class="col-md-8">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Basic Form Validation</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form action="{{ url('/createStudent') }}" class="form-horizontal form-bordered"  method="post" data-parsley-validate="true" name="demo-form" enctype="multipart/form-data">
                                {{ csrf_field() }}
								<div class="form-grozup">
                        		<div style="height: 15px;"></div>
									<label class="control-label col-md-4 col-sm-4" for="fullname">Student Name * :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="fullname" name="stuname" placeholder="Required" data-parsley-required="true" />
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="email">Email Id * :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="email" name="email" data-parsley-type="email" placeholder="Email" data-parsley-required="true" />
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="website">Stundard :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="website" name="std" />
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Phone No. :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="number" id="digits" name="phone" min="0" data-parsley-type="digits" placeholder="Digits" />
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Age :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="number" id="number" name="age" min = "0" data-parsley-type="number" placeholder="Number" />
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">State :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="data-phone" name="state" data-parsley-type="number"  />
									</div>
                                </div>
                                <div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">City :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="data-phone" name="city" data-parsley-type="number"  />
									</div>
								</div>
                                <div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Address:</label>
									<div class="col-md-6 col-sm-6">
										<textarea class="form-control" id="message" name="address" rows="4" data-parsley-required="true" placeholder="Range from 20 - 200"></textarea>
									</div>
                                </div>
                                <div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Pincode :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="number" min="0" id="data-phone" name="pincode" data-parsley-type="number"  />
									</div>
								</div>
                                <div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="message">Image :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="file" id="message" name="image">
									</div>
                                </div>
                                <div class="form-group">
									<label class="control-label col-md-4 col-sm-4"></label>
									<div class="col-md-6 col-sm-6">
										<input type="submit" class="btn btn-primary" value="Submit">
									</div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-8 -->
                <!-- begin col-2 -->
			    <div class="col-md-2">
			        
                </div>
                <!-- end col-2 -->
            </div>
            <!-- end row -->
		</div>
        <!-- end #content -->
</div>
</body>
@include('links.footerlink')