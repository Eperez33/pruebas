<?php  
include "encabezado.php" 
?>

<body> 


<section >	
	<div class="content-paralax  paralax-img-contact ">       
		<div class="content content-default contact-paralax">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3 section-head-default">		
						Contact
					</div><!-- End section-text-default--> 	
			  		<div class="col-xs-12 col-sm-9 col-md-9 section-text-default">
			  			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati in possimus facilis debitis itaque porro excepturi repellendus quo, nihil, esse, dolor numquam temporibus cupiditate? Quae officia inventore, nobis consequatur voluptas.</p>
			  		</div><!-- End section-text-default--> 				
				</div><!-- End row-->
			</div><!-- End Container-->
		</div><!-- End content-color-default-->
		
		<div class="container wow flipInX">
			<div class="container-contact">
				<div class="row cont-row">
					<div class="col-xs-12 col-sm-7 col-md-7 ">
						<form>  <!-- REMPLACE <form action="mail.php" method="post"> -->
							<div class="form-group" id="frm-name">
  									<label for="Name">Name</label>
							   		<div class="input-group">
								  	  	<span class="input-group-addon">
								  		  <i class="fa fa-user"></i>
								 	    </span>								  
								 	 	<input type="text" name="Name" id="Name" class="form-control"  placeholder="Name"  required>
									</div>
							</div><!-- End frm-name-->

							  <div class="form-group" id="frm-mail">
							    <label for="Email">Email</label>
							   		<div class="input-group">
								  	  	<span class="input-group-addon">
								  		  <i class="fa fa-envelope"></i>
								 	    </span>								  
								 	 	<input type="mail" class="form-control" name="Mail" placeholder="Email" id="Mail" required>
									</div>
							  </div><!-- End frm-mail-->

							  <div class="form-group" id="frm-phone">
							    <label for="Phone">Phone</label>
							    <div class="input-group">
								  	  	<span class="input-group-addon">
								  		  <i class="fa fa-phone"></i>
								 	    </span>								  
								 	 	<input type="tel" class="form-control" name="Phone" placeholder="Phone">
									</div>
							  </div><!-- End frm-phone-->
							 
								<div class="form-group" id="frm-message">
						    		<label for="Message">Comment</label>
						  			  <textarea class="form-control" rows="3" id="Message" Name="Message" placeholder="Message..."></textarea>
						  	    </div><!-- End frm-message-->

								<div class="alert alert-success alert-dismissible" role="alert" id="message">
  									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  										<span aria-hidden="true">&times;</span>
  									</button>
  									 Message has been send.
								</div><!-- End message alert-->

							  <button type="submit" id="sendmessage"class="btn btn-default">Send Message</button>
						</form>	<!-- End form-->
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5">
						<div class="hed-contact">
							<h2>We are waiting you to get in touch with us</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse mollitia, atque odio, ratione error corporis omnis consectetur vitae reiciendis quaerat nulla repellat debitis temporibus, voluptas expedita, at quo quos totam!</p>

							<address>
 								 <strong>D-ittoo Inc.</strong><br>
 								 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse mollitia, atque odio,<br>
 								 <strong>Phone (1):</strong>
 								 <br> 55-5555-5555<br>
								 <strong>Phone (2):</strong>
								 <br> 55-5555-5555<br>
								 <strong>E-mail: </strong>
								 <br> 
								 	<a href="mailto:user@dittoo.com">Support@dittoo.com</a>
								 <br>
  							</address>
						</div><!-- End hed-contact-->
					</div><!-- End col-xs-12 col-sm-5 col-md-5-->
				</div><!-- End row cont-row-->	
			</div><!-- End container-contact-->	
		</div><!-- End container-->		
	</div><!-- End content-paralax-->	
</section><!-- End secction contact-->
	
		
</body>

<?php  
include "pie.php"
 ?>

</body>
</html>