
    
    <!-- pages stack -->
	<div class="pages-stack">
		
		<!-- page -->
		


		<div class="page" id="page-home">
			<!-- Blueprint header -->
			<header class="bp-header cf">
				<span class="bp-header__present">Calendar <span class="bp-tooltip bp-icon bp-icon--about" data-content="On this page you can update about how your day was and can also add some notes."></span></span>
				<!-- <h1 class="bp-header__title">Page Stack Navigation</h1> -->
				<!-- <p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="#">Stacked navigation</a></p> -->
				<nav class="bp-nav">
					<a class="bp-nav__item bp-icon bp-icon--prev" href="#" data-info="previous Page"><span>Previous Blueprint</span></a>
					<a class="bp-nav__item bp-icon bp-icon--drop" href="#" data-info="back to the Home"><span>back to the Codrops article</span></a>
					<a class="bp-nav__item bp-icon bp-icon--archive" href="#" data-info="Stats"><span>Go to the archive</span></a>
				</nav>
				<div class="calendar">
				<div class="cal1"></div>
				


				</div>

				<!-- Modal -->
					<div class="modal fade" id="input_modal" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">New Entry</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
							<!-- row start -->
							<div class="row" id="event_container">
								<div id='events' class='col'>
								   <!-- content from clndr.script.php -->
								</div>
   								<div id="event_form" class="col">
								<form name="event_input_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
								<div class="form-group">
									<label for="date_input" class="form-control-label">Date:</label>
									<input type="text" class="form-control" id="date_input" name="date_input" readonly>
									<input type="hidden" id="date_input_for_sql" name="date_input_for_sql" readonly>
								</div>
								<div class="form-group">
									<label for="event_input" class="form-control-label">Events:</label>
									<textarea class="form-control" id="event_input" name="event_input"></textarea>
								</div>
								<div class="form-group">
									<label for="mood_input" class="form-control-label">Mood:</label>
									<input type="text" class="form-control" id="mood_input" name="mood_input" readonly>
									<br>
									<a class="link link--social link--faded" href="#"><i class="fa fa-smile-o" id="mood_icon" data-mood="happy"></i><span class="text-hidden">Twitter</span></a>
									<a class="link link--social link--faded" href="#"><i class="fa fa-frown-o" id="mood_icon" data-mood="sad"></i><span class="text-hidden">LinkedIn</span></a>
									<a class="link link--social link--faded" href="#"><i class="fa fa-meh-o" id="mood_icon" data-mood="meh"></i><span class="text-hidden">Facebook</span></a>
									<!-- <a class="link link--social link--faded" href="#"><i class="fa fa-youtube-play"></i><span class="text-hidden">YouTube</span></a> -->
								</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-danger" id="toggle_form_events" onclick="toggle()">See Events</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" name="update_event">Update</button>
								</div>
								</form>
								</div>
							</div>
							<!-- row end -->
							</div>
							</div>
					</div>
					</div>
					<!-- Modal -->
			</header>
		</div>


        <div class="page" id="page-signup">
			<header class="bp-header signup">
				<h1 class="bp-header__title">Sign-up</h1>
                <p class="bp-header__desc">Something about product</p>
                <div class="signup-form">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group row form-row"> 
                            <div class="form-group  col-md-2 col-xs-6 col-6  ">
                            <input type="text" class="form-control" name="firstname" placeholder="First" required="required">
                            </div>
                            <div class="form-group   col-md-2 col-xs-6 col-6 ">
                            <input type="text" class="form-control" name="lastname" placeholder="Last" required="required">
							</div>
                        </div>
                        <div class="form-group row form-row">
                            <div class="form-group col-md-4 col-xs-12 col-12">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                            </div>
                        </div>
                        <div class="form-group row form-row">
                            <div class="form-group col-md-2 col-xs-6 col-6 ">
                            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                            </div>
                            <div class="form-group col-md-2 col-xs-6 col-6  ">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                            </div>
                        </div>
                        <div class="form-group row form-row">
                            <div class="form-group col-md-4 col-xs-12 col-12">
                            <input type="text" class="form-control" name="about" placeholder="Something about you..">
                         	</div>
                        </div>
                        <div class="form-group row form-row">
                            <div class="form-group col-md-2 col-xs-6 col-6 ">
                            <input type="number" class="form-control" name="phone" placeholder="Phone no.">
                            </div>
                        </div>
                        
                        <div class="form-group row form-row" >
                            <div class="form-group col-md-2 col-xs-6 col-6 ">
                            <button type="submit" class="btn btn-primary" name="signup">Sign up</button>
                         </div>
                        </div>
                    </form>
                </div>
			</header>
			<!-- <img class="poster" src="images/3.jpg" alt="img03" /> -->
        </div>
        


        <div class="page" id="page-login">
			<header class="bp-header cf">
                <h1 class="bp-header__title">Login</h1>
                 <div class="login-form">
                    <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                       
						<div class="form-group row form-row">
							<div class="form-group  col-md-4 col-xs-6 col-10   ">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username/Email" >
                        	</div>
						</div>
						<div class="form-group row form-row">
                            <div class="form-group  col-md-4 col-xs-6 col-10   ">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
						</div>
				
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        <button class="btn btn-primary" type="submit" name="login">Log In</button>
                        <p class="bp-header__desc">New user?  <a href="#page-signup">Signup here</a></p>
						<a href="#"><p class="small">Forgot your password?</p></a>
                    </form>
                </div>
            </header>
           
			<!-- <img class="poster" src="images/5.jpg" alt="img05" /> -->
		</div>





		<div class="page" id="page-profile">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Profile</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"We cannot have peace among men whose hearts find delight in killing any living creature." &mdash; Rachel Carson
				</p>
			</header>
			<img class="poster" src="images/6.jpg" alt="img06" />
		</div>



		<div class="page" id="page-manuals">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Manuals</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"When you adopt a vegan diet we make a connection, you don't go back, it is not a diet, it is a lifestyle." &mdash; Freelee Frugivore
				</p>
			</header>
			<img class="poster" src="images/2.jpg" alt="img02" />
		</div>


		<div class="page" id="page-custom">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Customization &amp; Settings</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"You have to make a conscious decision to change for your own well-being, that of your family and your country." &mdash;Bill Clinton
				</p>
			</header>
			<img class="poster" src="images/4.jpg" alt="img04" />
		</div>


		<div class="page" id="page-buy">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Where to buy</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"When people ask me why I don't eat meat or any other animal products, I say, 'Because they are unhealthy and they are the product of a violent and inhumane industry.'" &mdash;
				</p>
			</header>
			<img class="poster" src="images/6.jpg" alt="img06" />
		</div>


		<div class="page" id="page-blog">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Blog &amp; News</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"The question is not, 'Can they reason?' nor, 'Can they talk?' but rather, 'Can they suffer?" &mdash; Jeremy Bentham
				</p>
			</header>
			<img class="poster" src="images/1.jpg" alt="img01" />
		</div>


		<div class="page" id="page-contact">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Contact</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"Man is the only animal that can remain on friendly terms with the victims he intends to eat until he eats them." &mdash; Samuel Butler
				</p>
			</header>
			<img class="poster" src="images/4.jpg" alt="img04" />
		</div>
        <!-- /page -->
	</div>
	<!-- /pages-stack -->