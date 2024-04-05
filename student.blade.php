
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>STUDENT dashboard</title>
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
	  <link href="resources/css/style2.css" rel="stylesheet">
  </head>

<body>
<div class="wrapper">
	  <div class="body-overlay"></div>
	 <div id="sidebar">
	    <div class="sidebar-header">
		<h3><span>Dashboard</span></h3>
		</div>
		<ul class="list-unstyled component m-0">
		<li class="active">
		<a href="#" class="dashboard"><i class="material-icons">dashboard</i>USER LOGIN </a>
		</li>
	</ul>
	</div>
    <div id="content">  
		  <div class="top-navbar">
		     <div class="xd-topbar">
			     <div class="row">
				     <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
					    <div class="xp-menubar">
						    <span class="material-icons text-white">signal_cellular_alt</span>
						</div>
					 </div>
					 <div class="col-md-5 col-lg-3 order-3 order-md-2">
					     <div class="xp-searchbar">
							    <div class="input-group">
								  <input type="search" class="form-control"
								  placeholder="Search">
								  <div class="input-group-append">
								     <button class="btn" type="submit" id="button-addon2">Go
									 </button>
								  </div>
								</div>
						 </div>
					 </div>
					 <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
					     <div class="xp-profilebar text-right">
						    <nav class="navbar p-0">
							   <ul class="nav navbar-nav flex-row ml-auto"> 
							   </ul>
							</nav>
						 </div>
					 </div>
				 </div>
							 
			 </div>
		  </div>
		      <div class="main-content">
			     <div class="row">
				    <div class="col-md-12">
					   <div class="table-wrapper">
					   <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							    <h2 class="ml-lg-2">Add  students</h2>
							 </div>  
							 </div>
					     </div>
					   </div>
					   </div>
					</div>
					<div>

                                 <!-- HTML form start -->
<section class="registration-container">
        <h2> Registration </h2>
        <section class="details-section">
		<form  action="{{'studentController'}}" method="POST">
    @csrf
                <!-- Personal Details Section -->
                <h4> Personal Details </h4>
                <section class="personal-details">
                    <div class="three-details-item">
                        <label for="name">
                            <p>Full Name</p>
                            <input type="text" name="name" value="{{old('name')}}" placeholder="Enter your name">
                        </label>
                        <label for="fName">
                            <p> Father Name </p>
                            <input type="text" name="father" value="{{old('fName')}}"  placeholder="Enter father name">
                        </label>
                        <label for="mName">
                            <p>Mother Name</p>
                            <input type="text" name="mother" value="{{old('mName')}}"  placeholder="Enter mother name">
                        </label>
                    </div>

                    <div class="three-details-item">
                        
                        <label for="email">
                            <p>Gender</p>
                            <input type="text" name="gender" value="{{old('gender')}}"  placeholder="Gender">
                        </label>
						<label for="address">
                            <p>address</p>
                            <input type="text" name="address" value="{{old('address')}}"  placeholder="Address">
                        </label>
                        <label for="phone">
                            <p>phone Number</p>
                            <input type="number" name="phone" value="{{old('phonenumber')}}"  placeholder="Enter your number">
                        </label>
                    </div>  
                </section>
                <hr>
                 <button  class="submit-btn"> Submit </button>
        </section>
    </section>
	</form>
</body>
</html>