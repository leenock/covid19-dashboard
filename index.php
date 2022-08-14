
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Corona Updates</title>

        <link href="assets/img/icon.ico" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/atlantis.min.css" rel="stylesheet" />

    </head>
<body>

<?php 
$data = file_get_contents('https://covid-19.dataflowkit.com/v1');
$country = json_decode($data, true);

?>     
    <div class="wrapper overlay-sidebar">
		<div class="main-header">
			

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<a class="navbar-brand" style="color:white" href="#">Covid-22 Updates</a>
				<div class="container-fluid">
					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						
						
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown"  title="Share link" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-share"></i>
								
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">AudioQuest254</a>
							
							</div>
						</li>
						
						
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		
		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Overall Covid-21 statistics</div>
									<hr>
									<div class="row">
										<div class="col-sm-6 col-md-5">
											<div id="lookatme" class="animated pulse">
											<div class="card card-stats card-warning card-round">
												<div class="card-body">
													<div class="row">
														<div class="col-3">
															<div class="icon-big text-center">
																<i class="flaticon-users"></i>
															</div>
														</div>
														<div class="col-7 col-stats">
															<div class="numbers">
															
																<p class="card-category">Total Cases</p>
																<h4 class="card-title" id="totalcases"></h4>
															</div>
														</div>
													</div>
												</div>
											</div>
											</div>
										</div>
										<div class="col-sm-6 col-md-6">
											<div id="lookatme" class="animated pulse">
											<div class="card card-stats card-danger card-round">
												<div class="card-body">
													<div class="row">
														<div class="col-3">
															<div class="icon-big text-center">
																<i class="
															fas fa-cloud-upload-alt"></i>
															</div>
														</div>
														<div class="col-7 col-stats">
															<div class="numbers">
																<p class="card-category">Total Deaths</p>
																<h4 class="card-title" id="totaldeaths"></h4>
															</div>
														</div>
													</div>
												</div>
											</div>
											</div>
										</div>
										
										<div class="col-sm-8 col-md-5">
											<div id="lookatme" class="animated pulse">
											<div class="card card-stats card-success card-round">
												<div class="card-body ">
													<div class="row">
														<div class="col-3">
															<div class="icon-big text-center">
																<i class="fas fa-first-aid"></i>
															</div>
														</div>
														<div class="col-7 col-stats">
															<div class="numbers">
																<p class="card-category">Total Recovered</p>
																<h4 class="card-title" id="totalrecovered"></h4>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										</div>
										
										<div class="col-sm-8 col-md-6">
											<div id="lookatme" class="animated pulse">
											<div class="card card-stats card-secondary card-round">
												<div class="card-body ">
													<div class="row">
														<div class="col-3">
															<div class="icon-big text-center">
																<i class="icon-fire"></i>
															</div>
														</div>
														<div class="col-7 col-stats">
															<div class="numbers">
																<p class="card-category">Total Tests</p>
																<h4 class="card-title" id="totaltests"></h4>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Covid-21 (corona virus)</h4>
								</div>
								<div class="card-body">
									<ul class="nav nav-pills nav-secondary nav-pills-no-bd" id="pills-tab-without-border" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-home-tab-nobd" data-toggle="pill" href="#pills-home-nobd" role="tab" aria-controls="pills-home-nobd" aria-selected="true">About Covid-19</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-profile-tab-nobd" data-toggle="pill" href="#pills-profile-nobd" role="tab" aria-controls="pills-profile-nobd" aria-selected="false">Transmition</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-contact-tab-nobd" data-toggle="pill" href="#pills-contact-nobd" role="tab" aria-controls="pills-contact-nobd" aria-selected="false">Signs&Symptons</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-prevention-tab-nobd" data-toggle="pill" href="#pills-prevention-nobd" role="tab" aria-controls="pills-contact-nobd" aria-selected="false">How to prevent</a>
										</li>
									</ul>
									<div class="tab-content mt-2 mb-3" id="pills-without-border-tabContent">
										<div class="tab-pane fade show active" id="pills-home-nobd" role="tabpanel" aria-labelledby="pills-home-tab-nobd">

										<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
										Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.
										At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.</p>
										</div>
										<div class="tab-pane fade" id="pills-profile-nobd" role="tabpanel" aria-labelledby="pills-profile-tab-nobd">
											<p>	Data from published epidemiology and virologic studies provide evidence that COVID-19 is primarily transmitted from symptomatic people to others who are in close contact through respiratory droplets, by direct contact with infected persons, or by contact with contaminated objects and surfaces.
											</p>
										</div>
										<div class="tab-pane fade" id="pills-contact-nobd" role="tabpanel" aria-labelledby="pills-contact-tab-nobd">
										<p>	COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.</p>
										<li>Most common symptoms:
										fever,
										dry cough,
										tiredness</li>
										<li>Less common symptoms:
										aches and pains,
										sore throat,
										diarrhoea,
										conjunctivitis,
										headache,
										loss of taste or smell,
										a rash on skin, or discolouration of fingers or toes</li>
										<li>Serious symptoms:
										difficulty breathing or shortness of breath,
										chest pain or pressure,
										loss of speech or movement</li>
										<p>	Seek immediate medical attention if you have serious symptoms. Always call before visiting your doctor or health facility.
										People with mild symptoms who are otherwise healthy should manage their symptoms at home.
										On average it takes 5–6 days from when someone is infected with the virus for symptoms to show, however it can take up to 14 days.</p>
											
										</div>
										<div class="tab-pane fade" id="pills-prevention-nobd" role="tabpanel" aria-labelledby="pills-prevention-tab-nobd">
										<p>Protect yourself and others around you by knowing the facts and taking appropriate precautions. Follow advice provided by your local public health agency.
										To prevent the spread of COVID-19:
										Clean your hands often. Use soap and water, or an alcohol-based hand rub.
										Maintain a safe distance from anyone who is coughing or sneezing.
										Don’t touch your eyes, nose or mouth.
										Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.
										Stay home if you feel unwell.
										If you have a fever, cough and difficulty breathing, seek medical attention. Call in advance.
										Follow the directions of your local health authority.
										Avoiding unneeded visits to medical facilities allows healthcare systems to operate more effectively, therefore protecting you and others.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="lookatme" class="animated bounce">
					<div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<div>
											<h5><b>New Cases</b></h5>
											<p class="text-muted">Covid-19</p>
										</div>
										<h3 class="text-info fw-bold" id="new_cases"></h3>
									</div>
								<hr>
									<div class="d-flex justify-content-between mt-2">
										<p class="text-muted mb-0">Percentage(%)</p>
										<p class="text-muted mb-0" id="percent"> </p>
									</div>
								</div>
							</div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<div>
											<h5><b>Serious,Critical</b></h5>
											<p class="text-muted">Covid-19</p>
										</div>
										<h3 class="text-info fw-bold" id="serious_critical"></h3>
									</div>
								</div>
							</div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<div>
											<h5><b>New Deaths</b></h5>
											<p class="text-muted">Covid-19</p>
										</div>
										<h3 class="text-info fw-bold" id="newdeaths"></h3>
									</div>
									<hr>
									<div class="d-flex justify-content-between mt-2">
										<p class="text-muted mb-0">Percentage(%)</p>
										<p class="text-muted mb-0" id="newdeathspercentage"></p>
									</div>
								</div>
							</div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<div>
											<h5><b>New Recovered</b></h5>
											<p class="text-muted">Covid-19</p>
										</div>
										<h3 class="text-info fw-bold" id="NewRecovered">jm</h3>
									</div>
									<hr>
									<div class="d-flex justify-content-between mt-2">
										<p class="text-muted mb-0">Percentage(%)</p>
										<p class="text-muted mb-0" id="new_recovered_percentage"></p>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					</div>
					<div class="row row-card-no-pd">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row card-tools-still-right">
										<h4 class="card-title">Users Geolocation</h4>
										<div class="card-tools">
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
										</div>
									</div>
									
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
											<div class="table-responsive table-head-bg-info">
												<table id="basic-datatables" class="display table table-striped table-hover" >	
													<thead>
														<tr>
															<th>S.No</th>
															<th>Contry,Other</th>
															<th>Total Cases</th>
															<th>New Cases</th>
															<th>Total Deaths</th>
															<th>New Deaths</th>
															<th>Total Recovered</th>
															<th>DatesConfirmed</th>
															
														</tr>
													</thead>

													<tfoot>
														<tr>
														    <th>S.No</th>
															<th>Contry,Other</th>
															<th>Total Cases</th>
															<th>New Cases</th>
															<th>Total Deaths</th>
															<th>New Deaths</th>
															<th>Total Recovered</th>	
															<th>DatesConfirmed</th>
														</tr>
													</tfoot>
													
													<tbody>
													<?php $i = 1; ?>
													<?php foreach ($country as $row ) :?>
														<tr>
															<th scope="row"><?= $i; ?></th>
															<th><?php echo $row['Country_text'];?></th>
															<th><?php echo $row['Total Cases_text'];?></th>
															<th><?php echo $row['New Cases_text'];?></th>
															<th><?php echo $row['Total Deaths_text'];?></th>
															<th><?php echo $row['New Deaths_text'];?></th>
															<th><?php echo $row['Total Recovered_text'];?></th>
															<th><?php echo $row['Last Update'];?></th>
															
															
															
															</tr>
															<?php $i++; ?>
														<?php endforeach; ?>			
													</tbody>
													
												</table>
												<button onclick="location.reload();"  style="height:2.5rem " class="btn btn-warning">refresh</button>

											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>	

			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="#">
									COVID 19
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.google.com/">
									Google
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Updates
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2021, <a href="">Mwenda.M</a>
					</div>				
				</div>
			</footer>
		</div>	
	</div>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<!-- jQuery UI -->
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<!-- Datatables -->
<script src="assets/js/plugin/datatables/datatables.min.js"></script>
<!-- Bootstrap Notify -->
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<!-- Sweet Alert -->
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
<!-- Atlantis JS -->
<script src="assets/js/atlantis.min.js"></script>
<script>
$('#basic-datatables').DataTable({
		});

		$(document).on({
    "contextmenu": function(e) {
        console.log("ctx menu button:", e.which); 

        // Stop the context menu
        e.preventDefault();
    },
    "mousedown": function(e) { 
        console.log("normal mouse down:", e.which); 
    },
    "mouseup": function(e) { 
        console.log("normal mouse up:", e.which); 
    }
});

</script>
<script>
	fetch("https://api.covid19api.com/summary").then(
res=>{
	res.json().then(
		data=>{
			console.log(data);

			var percent = (data.Global.NewConfirmed/data.Global.TotalConfirmed*100).toFixed(2);
			var newdeaths = ( data.Global.NewDeaths/data.Global.TotalDeaths*100).toFixed(2);
			var new_recovered_percentage = ( data.Global.NewRecovered/ data.Global.TotalRecovered*100).toFixed(2);
			
			document.getElementById("totalcases").innerHTML = data.Global.TotalConfirmed;
			document.getElementById("totaldeaths").innerHTML = data.Global.TotalDeaths;
			document.getElementById("totalrecovered").innerHTML = data.Global.TotalRecovered;
			document.getElementById("new_cases").innerHTML = data.Global.NewConfirmed;
			document.getElementById("newdeaths").innerHTML = data.Global.NewDeaths;
			document.getElementById("NewRecovered").innerHTML = data.Global.NewRecovered;

			document.getElementById("percent").innerHTML = percent;
			document.getElementById("newdeathspercentage").innerHTML = newdeaths;
			document.getElementById("new_recovered_percentage").innerHTML = new_recovered_percentage;

		}
	)
		}
	)
</script>

<script>
	fetch("https://corona.lmao.ninja/v2/all?yesterday").then(
res=>{
	res.json().then(
		data=>{
			console.log(data);
			
			document.getElementById("serious_critical").innerHTML = data.critical;
			document.getElementById("totaltests").innerHTML = data.tests;
			
		}
	)
		}
	)
</script>
    </body>
</html>
