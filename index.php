<html>
	<lang=en>
	<head>
		<title>sign up</title>
		
		<!--CSS-->
		<link rel="stylesheet" type="style/css" href="css/semantic.css">
		<link rel="stylesheet" type="style/css" href="css/semantic.min.css">
		
		<!--SCRIPTS-->
		<script type="javascript" src="js/semantic.js"></script>
		<script type="javascript" src="js/semantic.min.js"></script>
	</head>
		<body>
			<!--script type="text/javascript">
				$('.basic.modal')
				  .modal('setting', {
					closable  : false,
					onDeny    : function(){
					  window.alert('Wait not yet!');
					  return false;
					},
					onApprove : function() {
					  window.alert('Approved!');
					}
				  })
				  .modal('show')
				;
			</script-->	
			<!--button data-demo="true">signup here</button-->
			<!--div class="ui modal"-->
					<form class="ui form" action="signup.php" method="post">
						<div class="ui teal segment">
							<h4 class="ui inverted teal block header">
							  Bio data
							</h4>
						  <div class="ui three fields">
							<div class="field">
							  <label>First name</label>
							  <input type="text" placeholder="First Name" name="Fn">	
							</div>
							<div class="field">
							  <label>Middle name</label>
							  <input type="text" placeholder="Middle Name" name="Mn">
							</div>
							<div class="field">
							  <label>Last name</label>
							  <input type="text" placeholder="Last Name" name="Ln">
							</div>
						  </div>
							<div class="field">
							  <label>Email Address</label>
								<div class="ui left labeled icon input">
								  <input type="text" placeholder="school email" name="email">
								  <i class="teal mail icon"></i>
									<div class="ui corner label">
										<i class="icon asterisk"></i>
									</div>
								</div>
							</div>
							<div class="field">
								<label>Username</label>
								<div class="ui left labeled icon input">
								  <input type="text" placeholder="Username" name="username">
								  <i class="teal user icon"></i>
								  <div class="ui corner label">
									<i class="icon asterisk"></i>
								  </div>
								</div>
							</div>
							<div class="field">
								<label>Password</label>
								<div class="ui left labeled icon input">
								  <input type="password" name="password">
								  <i class="teal lock icon"></i>
								  <div class="ui corner label">
									<i class="icon asterisk"></i>
								  </div>
								</div>
							</div>
						</div>	  
					
						<div class="ui purple segment">
							<h4 class="ui inverted purple block header">
							  School information
							</h4>
							<div class="ui three fields">
								<div class="field">
								  <label>School ID</label>
								  <input type="text" placeholder="School id" name="id">
								</div>
								<div class="field">
								  <label>Major</label>
								  <input type="text" placeholder="Major" name="major">
								</div>
								<div class="field">
								  <label>Year of Study</label>
								  <input type="text" placeholder="Year of study" name="yos">
								</div>
							  </div>
						</div>	 
							
						<div class="ui green segment">
							<div class="field">
								<h4 class="ui inverted green block header">
								  What computing skills do you have?
								</h4>
								<textarea name="skills"></textarea>
							</div>
						</div>	
						<button class="fluid ui secondary button">
						  Save
						</button>
					</form>
						<script type="text/javascript">
							$('.ui form')
							  .form({
								firstName: {
								  identifier  : 'Fn',
								  rules: [
									{
									  type   : 'empty',
									  prompt : 'Please enter your first name'
									}
								  ]
								},
								MiddleName: {
								  identifier  : 'Mn',
								  rules: [
									{
									  type   : 'empty',
									  prompt : 'Please enter your first name'
									}
								  ]
								},
								lastName: {
								  identifier  : 'Ln',
								  rules: [
									{
									  type   : 'empty',
									  prompt : 'Please enter your last name'
									}
								  ]
								},
								username: {
								  identifier : 'username',
								  rules: [
									{
									  type   : 'empty',
									  prompt : 'Please enter a username'
									}
								  ]
								},
								password: {
								  identifier : 'password',
								  rules: [
									{
									  type   : 'empty',
									  prompt : 'Please enter a password'
									},
									{
									  type   : 'length[6]',
									  prompt : 'Your password must be at least 6 characters'
									}
								  ]
								}
							  })
							;
						</script>
			<!--/div-->			
		</body>	
</html>
