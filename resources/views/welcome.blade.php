<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		
		<title>Mohamed Zaki Portiflio</title>
		
		
		<!--=====================================================
			CSS Stylesheets
		=====================================================-->
		<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css' >
		<link rel='stylesheet' type='text/css' href='css/linea.css' >
		<link rel='stylesheet' type='text/css' href='css/ionicons.min.css' >
		<link rel='stylesheet' type='text/css' href='css/owl.carousel.css' >
		<link rel='stylesheet' type='text/css' href='css/magnific-popup.css' >
		<link rel='stylesheet' type='text/css' href='css/style.css' >
		
	</head>
	<body>
		
		
		<!--=====================================================
			Preloader
		=====================================================-->
		<div id='preloader' >
			<div class='loader' ></div>
			<div class='left' ></div>
			<div class='right' ></div>
		</div>
		
		
		<div class='main-content' >
			
			<!--=====================================================
				Page Borders
			=====================================================-->
			<div class='page-border border-left' ></div>
			<div class='page-border border-right' ></div>
			<div class='page-border border-top' ></div>
			<div class='page-border border-bottom' ></div>
			
			
			
			<!--=====================================================
				Menu Button
			=====================================================-->
			<a href='#' class='menu-btn' >
				<span class='lines' >
					<span class='l1' ></span>
					<span class='l2' ></span>
					<span class='l3' ></span>
				</span>
			</a>
			
			
			<!--=====================================================
				Menu
			=====================================================-->
			<div class='menu' >
				<div class='inner' >
					<ul class='menu-items' >
						
						<li>
							<a href='#' class='section-toggle' data-section='intro' >
								Home
							</a>
						</li>
						
						<li>
							<a href='#about' class='section-toggle' data-section='about' >
								About
							</a>
						</li>
						
						<li>
							<a href='#resume' class='section-toggle' data-section='resume' >
								Resume
							</a>
						</li>
						
						<li>
							<a href='#portfolio' class='section-toggle' data-section='portfolio' >
								Portfolio
							</a>
						</li>
						
						
						<li>
							<a href='#contact' class='section-toggle' data-section='contact' >
								Contact
							</a>
						</li>
						
						
					</ul>
				</div>
			</div>
			
			<div class='animation-block' ></div>
			
			
			<!--=====================================================
				Sections
			=====================================================-->
			<div class='sections' >
				
				<!--=====================================================
					Main Section
				=====================================================-->
				<section id='intro' class='section section-main active' >
					
					<div class='container-fluid' >
						
						<div class='v-align' >
							<div class='inner' >
								<div class='intro-text' >
									
									<h1>I'm Mohamed Zaki</h1>
									
									<p>
										A Software Engineer . 
									</p>
									
									<div class='intro-btns' >
										
										<a href='#about' class='btn-custom section-toggle' data-section='about' >
											 More Details Of Me
										</a>
										
										<a href='#contact' class='btn-custom section-toggle' data-section='contact' >
											Hire Me
										</a>
										
									</div>
									
								</div>
							</div>
							
						</div>
						
					</div>
				
				</section>
				
				
				<!--=====================================================
					About Section
				=====================================================-->
				<section id='about' class='section about-section border-d' >
					
					<div class='section-block about-block' >
						<div class='container-fluid' >
							
							<div class='section-header' >
								<h2>
									I'm a <strong class='color' >{{ $user->job_major }}</strong>
								</h2>
							</div>
							
							<div class='row' >
								
								<div class='col-md-4' >
									
									<ul class='info-list' >
										
										<li>
											<strong>Name:</strong>
											<span>{{ $user->name }}</span>
										</li>
										
										<li>
											<strong>Job:</strong>
											<span>{{ $user->job }}</span>
										</li>
										
										<li>
											<strong>Age:</strong>
											<span>{{ $user->age }} Years</span>
										</li>
										
										<li>
											<strong>Residence:</strong>
											<span>{{ $user->country }}</span>
										</li>
										
										<li>
											<strong>Hometown:</strong>
											<span>{{ $user->city }}</span>
										</li>
										
										
										
									</ul>
									
								</div>
								
								<div class='col-md-8' >
								
									<div class='about-text' >
										<p>
											I am a hopeful and hard-working person, I can learn anything
on my own in a reasonable time. I am passionate to go through new
challenges and get hands on experience after graduation.

I am ranked as the 8th student in my department with GPA :3.38/4
										</p>
										
										<p>
											I will do my best to be a valuable, cooperative, and useful
 person to the company.
i love Reading and research in algorithms world ,Problem solving by
programming on online sites and self-study

										</p>
										
									</div>
									
									<div class='about-btns' >
										
										<a href='{{ url('/downloadcv') }}' class='btn-custom btn-color' >
											Download Resume
										</a>
										
										<a href='#contact'  data-section='contact' class='btn-custom btn-color section-toggle' >
											Hire Me
										</a>
										
									</div>
									
								</div>
								
							</div>
							
						</div>
					</div>
					
					<div class='section-block services-block' >
						
						<div class='container-fluid' >
							
						
							
							
							
							
						</div>
						
					</div>
					
					<div class='section-block skills-block' >
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2>
									My <strong class='color' >Skills</strong>
								</h2>
								
							</div>
							
							<div class='row' >
								
								<div class='col-md-6' >
									
									@foreach($skills as $skill)
									<div class='skill' >
										
										<h4>{{ $skill->name }}</h4>
										
										<div class='bar' >
											<div class='percent' style='width:{{ $skill->progress }}%;' ></div>
										</div>
										
									</div>
									@endforeach
									
								
								
									
								</div>
								
							
								
							</div>
							
							
						</div>
					</div>
					
					<div class='section-block pricing-block' >
						
					
						
						
						
						
						
					</div>
					
				</section>
				
				
				<!--=====================================================
					Resume Section
				=====================================================-->
				<section id='resume' class='section resume-section border-d' >
					
					<div class='section-block timeline-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2>My <strong class='color' >Education</strong></h2>
								
							</div>
							
							<ul class='timeline' >
								
								<li>
									
									<div class='timeline-content' >
										
										<h4>El Mokattam Secondary School</h4>
										
										<em>
											<span></span>
											<span>2012-2015</span>
										</em>
										
										<p>
											I graduated from the school with a degree of 94% and joined the software engineering Helwan University .
										</p>
										
									</div>
									
								</li>
								
								<li>
									
									<div class='timeline-content' >
										
										<h4>Faculty Of Computer And information Helwan University .</h4>
										
										<em>
											<span>Bachelor Degree</span>
											<span>2015-2019</span>
										</em>
										
										<p>
											I graduated from the college with a very good grade with honors GPA 3 .38 / 4 from the Department of Software Engineering .
										</p>
										
									</div>
									
								</li>
								
								<li>
									
								
								</li>
								
								
								
							</ul>
							
						</div>
						
					</div>
					
					<div class='section-block timeline-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2>My <strong class='color' >Experience</strong></h2>
								
							</div>
							
							<ul class='timeline' >
								
								<li>
									
									<div class='timeline-content' >
										
										<h4>Back-End Web Developer</h4>
										
										<em>
											
											<span>2017-2019</span>
										</em>
										
										<p>
											Helwan Universoty
Back end php laravel developer at faculty of CS.
										</p>
										
									</div>
									
								</li>
								
								<li>
									
									<div class='timeline-content' >
										
										<h4>Business intelligence & Embedded systems course</h4>
										
										<em>
											<span></span>
											<span>2015-2017</span>
										</em>
										
										<p>
											IBM
Attended IBM Cognos Analytics Reporting course
and certificated. <br>
AMIT Courses, maadi
embedded systems introductions and afinal
project .
										</p>
										
									</div>
									
								</li>
								
						
								
								
							</ul>
							
						</div>
						
					</div>
			
					
				</section>
				
				
				<!--=====================================================
					Portfolio Section
				=====================================================-->
				<section id='portfolio' class='section portfolio-section border-d' >
					
					<div class='section-block portfolio-block' >
						
						<div class='container-fluid' >
							
							
							<div class='section-header' >
								<h2>My <strong class='color' >Works</strong></h2>
							</div>
							
							<ul class='portfolio-filters' >
								@foreach($categories as $category)
								<li>
									<a href='#'  >
										{{ $category->name }}
									</a>
								</li>
		@endforeach
								
							</ul>
							
							<ul class='portfolio-items' >
							@foreach($projects as $project)
								<li  >
									<div class='inner' >
										<img style="width: 500px;height: 500px" src="{{ url('/project/'.$project->id.'/getImage') }}"  alt>
										
										<div class='overlay' >
											
											<a href='#popup-{{ $project->id }}' class='view-project' >
												View Project
											</a>
											
											<!--project popup-->
											<div id='popup-{{ $project->id }}' class='popup-box zoom-anim-dialog mfp-hide' >
												<figure>
													
													<!--project popup image-->
													<img style="width: 700px;height: 300px" src="{{ url('/project/'.$project->id.'/getImage') }}" alt>
												
												</figure>
												<div class='content' >
													
													<!--project popup title-->
												<h4>{{ $project->name }}</h4>
													
													<!--project popup description-->
													<p>
													 {{ $project->description }}
													</p>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
								</li>
								
								

								@endforeach
							


						
								
								
								
								
								
								
								
								
							</ul>
							
						</div>
					
					</div>








				
								
								
								
								
								
								
								
								
								
					
					
				</section>
				
				
				<!--=====================================================
					Contact Section
				=====================================================-->
				<section id='contact' class='section contact-section border-d' >
					
					<div class='section-block contact-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								<h2>Contact <strong class='color' >Me</strong></h2>
							</div>
							
							
							<div class='row' >
							
								<div class='col-md-8' >
									
									<div class='contact-form' >
									
										<form  method='post' action='{{ url('/contact') }}' >
										@csrf
											<div id='contact-form-result' ></div>
										
											<div class='row' >
												
												<div class='col-md-6' >
													<div class='form-group' >
														
														<input type='text' class='form-control' placeholder='Name' name='name' required>
														<div class='help-block with-errors' ></div>
														
													</div>												
												</div>
												
												<div class='col-md-6' >
													<div class='form-group' >
														
														<input type='email' class='form-control' placeholder='Email' name='email' required>
														<div class='help-block with-errors' ></div>
													
													</div>
												</div>
												
											</div>
											
											<div class='form-group' >
												
												<input type='text' class='form-control' placeholder='Subject' name='subject' required>
												<div class='help-block with-errors' ></div>
											
											</div>
											
											<div class='form-group' >
												
												<textarea class='form-control' placeholder='Message' name='message' rows='5' required></textarea>
												<div class='help-block with-errors' ></div>
												
											</div>
											
											<div class='form-group text-center' >
												<button type='submit' class='btn-custom btn-color' >
													Send Message
												</button>
											</div>
											
										</form>
										
									</div>
									
									
								</div>
								
								<div class='col-md-4' >
									
									<div class='contact-info-icons' >
										
										<div class='contact-info' >
											
											<i class='ion-ios-location-outline' ></i>
											
											<p>
												{{ $user->country }}<br>
												{{ $user->city }}
											</p>
											
										</div>
										
										
										<div class='contact-info' >
											
											<i class='ion-ios-telephone-outline' ></i>
											
											<p>
												<br>
												{{ $user->phone }}
											</p>
											
										</div>
										
										
										<div class='contact-info' >
											
											<i class='ion-android-globe' ></i>
											
											<p>
												https://www.linkedin.com/in/mohamed-zaki-7a9724174/<br>
												https://github.com/mohamedzakii1997
											</p>
											
										</div>
										
										
										
										
									</div>
									
									
									
								</div>
								
								
							</div>
							
							
							
						</div>
					
					</div>
					
				</section>
				
			</div>
			
		</div>
		
		
		<!--=====================================================
			JavaScript Files
		=====================================================-->
		<script src='js/jquery.min.js' ></script>
		<script src='js/jquery.shuffle.min.js' ></script>
		<script src='js/owl.carousel.min.js' ></script>
		<script src='js/jquery.magnific-popup.min.js' ></script>
		<script src='js/validator.min.js' ></script>
		<script src='js/script.js' ></script>
		
	</body>
</html>