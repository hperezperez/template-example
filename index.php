<?php
$PAGE_TITLE = "Arriba Mexico";
require_once("lib/templates/head-utils.php");
?>

		<!--this wrapper div is for the sticky footer-->
		<div class="sfooter-content">
				<div class="container">
						<header>
								<?php require_once("lib/templates/header.php"); ?>
							</header>

						<div class="row">
								<section class="side-panel col-md-3">
										<?php require_once("lib/templates/side-panel.php"); ?>
									</section>

								<section class="main-content col-md-9">
										<h1>Welcome! ---------- To Your Worst Nightmare</h1>
										<p>----- Main Content Here -----</p>

										<form method="get" action="#" id="sample-form" class="">

												<div class="form-group">
														<!-- Labels for each field are places within a <label> tag. Use the "for" attribute. the class="control-label" is for styling. -->
														<label for="inputName1" class="control-label">Name</label>
														<!-- the div class="input-group" contains both the text field and the icon to the left -->
														<div class="input-group">
																<!-- this div and span contains the glyphicon to the left. aria-hidden is so that screen readers don't read this element -->
																<div class="input-group-addon">
																		<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
																	</div>
																<!-- text field input. pay attention to the id, placeholder text, type, and placeholder attributes -->
																<input type="text" class="form-control" id="textName1" placeholder="Your name here." maxlength="125" />
															</div>
													</div>

												<div class="form-group">
														<label for="email1" class="control-label">Email</label>
														<div class="input-group">
															<div class="input-group-addon">
																		<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
																	</div>
																<input type="email" id="email1" class="form-control" maxlength="125" placeholder="your.email@something.com"/>
															</div>
													</div>

												<div class="form-group">
														<label for="selectList1" class="control-label">Choose a language:</label><br/>
														<select id="selectList1" class="form-control">
																<!--"no-option" is a custom class to style the disabled option-->
																<option class="no-option" value="" disabled selected>Choose One! :D</option>
																<option value="PHP">PHP</option>
																<option value="JavaScript">JavaScript</option>
																<option value="HTML">HTML</option>
																<option value="CSS">CSS</option>
																<option value="Klingon">Klingon (Qapla'!)</option>
															</select>
													</div>

												<div class="form-group">
														<label class="control-label" for="txtareaComments">Tell Us More About Yourself:</label>
														<textarea class="form-control" rows="5" id="txtareaComments" maxlength="500" placeholder="500 characters max."></textarea>
													</div>

												<div class="form-group">
														<!-- the following <a> tag has been styled as a button with class="btn" -->
														<a id="reset-form" class="btn" role="button">Reset Form</a>
														<button type="submit" class="btn">Submit</button>
													</div>
											</form>
									</section>
							</div>
					</div>
			</div>

		<footer class="footer container">
				<?php require_once("lib/templates/footer.php"); ?>
			</footer>
	</body>
</html>``