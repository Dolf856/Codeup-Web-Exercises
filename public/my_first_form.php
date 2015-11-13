<?php
  var_dump($_GET);
  var_dump($_POST);
?><body>
	<form method="GET" action="/my_first_form.php">
	    <p>
	        <label for="username">Username</label>
	        <input id="username" name="username" type="text" placeholder="Enter your username">
	    </p>
	    <p>
	        <label for="password">Password</label>
	        <input id="password" name="password" type="password" placeholder="Enter your password">
	    </p>
	    <p>
	        <input type="submit" name="Desmond's here">
	        <!-- <button></button> -->
	    </p>

	</form>
	<form method="POST" action="my_first_form.php">
		<label for="email address">Send Email To:</label>
		<input id="email address" name="email address"><br>
		<label for="email address">From</label>
		<input id= "email address" name="email address"><br>
		<label for="subject">Subject Area</label>
		<input id= "subject" name="subject"><br>
		<p><textarea></textarea></p>
		<button type="submit">Submit</button>
	</form>		
	
		<h4><em>Food Choices</em></h4>
		<form method="POST" action="my_first_form.php">
			<label>Rice
				<input type="checkbox"  name="foodArray[]">
			</label>
			<label>Beans
				<input type="checkbox"  name="foodArray[]">
			</label>
			<lable>Salsa
				<input type="checkbox"  name="foodArray[]">
			</label>
			<button type="submit">Submit</button>
		</form>
		<p>When will the Red Sox win another penant?</p>
		<label>2 years
			<input type="radio" name="championship" value="2 years">
		</label>
		<label>5 years
			<input type="radio" name="championship" value="5 years">
		</label>
		<label>10 years
			<input type="radio" name="championship" value="10 years">
		</label>
		<button type="submit">Submit</button>
		<p><label for="transmission">Transmission</label><p>
			<h3>Select Testing</h3>
    <select name="transmissions">
        <option value="1">Automatic</option>
        <option value="0">Benz</option>
        <option value="cvt">CVT</option>
        <option value="porsche">PORSCHE</option>
        <option value="manual">MANUAL</option>
     </select>
        <button type="submit">Submit</button>

	</body>
