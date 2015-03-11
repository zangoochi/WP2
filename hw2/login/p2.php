<div class="title">2. Your Information (continued):</div>

<p>
We need to know how to contact you and a little bit about you.
</p>
<hr/>
<br/>

<form method="post" action="">

<h4>Personal:</h4>
<div class="table">
	<div class="row">
		<div class="txtlabel">Last Name</div>
		<div class="txtbx"><input id="last_name" name="last_name" type="text" required=""/></div>
	</div>
	<div class="row">
		<div class="txtlabel">First Name</div>
		<div class="txtbx"><input id="first_name" name="first_name" type="text" required=""/></div>
	</div>
	<div class="row">
		<div class="txtlabel">Middle Initial</div>
		<div class="txtbx"><input id="middle_init" name="middle_init" type="text" maxlength="1" required=""/></div>
	</div>
	<div class="row">
		<div class="txtlabel">Kent Email Address</div>
		<div class="txtbx"><input id="kemail" name="kemail" type="text" value="@kent.edu" required=""/></div>
	</div>
	<div class="row">
		<div class="txtlabel">Preferred Email Address (if different from above)</div>
		<div class="txtbx"><input id="other_email" name="other_email" type="text"/></div>
	</div>
	<div class="row">
		<div class="txtlabel">Phone</div>
		<div class="txtbx"><input type="text" id="phone" name="phone" pattern="\d*" maxlength="10"/></div>
	</div>

</div>

<br/>

<h4>Rank:</h4>
<div class="table">
	<div class="row">
		<div class="label">Assistant Professor</div>
		<div class="radio"><input id="Asst" type="radio" name="rank" value="Asst" required=""/></div>
	</div>
	<div class="row">
		<div class="label">Associate Professor</div>
		<div class="radio"><input id="Assoc" type="radio" name="rank" value="Assoc"/></div>
	</div>
	<div class="row">
		<div class="label">Professor</div>
		<div class="radio"><input id="Prof" type="radio" name="rank" value="Prof"/></div>
	</div>
</div>

<br/>

<h4>Status</h4>
<div class="table">
	<div class="row">
		<div class="label">Tenured</div>
		<div class="radio"><input type="radio" name="status" value="TT/T" required=""/></div>
	</div>
	<div class="row">
		<div class="label">Tenure Track/ Not Yet Tenured</div>
		<div class="radio"><input type="radio" name="status" value="TT/NYT"/></div>
	</div>
	<div class="row">
		<div class="label">Non Tenure Track</div>
		<div class="radio"><input type="radio" name="status" value="NTT"/></div>
	</div>
</div>

<br/>

<label for="years"><h4>Total Years of KSU Service:</h4></label>
<input id="years" name="years" type="text" maxlength="3" pattern="\d*" text="Failed" required=""/>

<br/>

<h4>Campus:</h4>
<div class="table">
	<div class="row">
		<div class="label">Geauga</div>
		<div class="radio"><input type="radio" name="campus" value="G" required=""/></div>
	</div>
	<div class="row">
		<div class="label">Kent</div>
		<div class="radio"><input type="radio" name="campus" value="K"/></div>
	</div>
	<div class="row">
		<div class="label">Stark</div>
		<div class="radio"><input type="radio" name="campus" value="St"/></div>
	</div>
</div>

<br/>

<h4>Department or School:</h4>
<div class="table">
	<div class="row">
		<div class="label">Computer Science</div>
		<div class="radio"><input type="radio" name="dept" value="Computer Sci" required=""/></div>
	</div>
	<div class="row">
		<div class="label">English</div>
		<div class="radio"><input type="radio" name="dept" value="English"/></div>
	</div>
	<div class="row">
		<div class="label">Geography</div>
		<div class="radio"><input type="radio" name="dept" value="Geography"/></div>
	</div>
	<div class="row">
		<div class="label">History</div>
		<div class="radio"><input type="radio" name="dept" value="History"/></div>
	</div>
	<div class="row">
		<div class="label">Justice Studies</div>
		<div class="radio"><input type="radio" name="dept" value="Justice Studies"/></div>
	</div>
	<div class="row">
		<div class="label">Economics</div>
		<div class="radio"><input type="radio" name="dept" value="Economics"/></div>
	</div>
	<div class="row">
		<div class="label">Management and Information Systems</div>
		<div class="radio"><input type="radio" name="dept" value="MIS"/></div>
	</div>
	<div class="row">
		<div class="label">Marketing & Entrepreneurship</div>
		<div class="radio"><input type="radio" name="dept" value="Marketing"/></div>
	</div>
</div>

<input class="button" type="submit" name="submit" value=" Next "/>

</form>

<script type="text/javascript">
document.getElementById("last_name").value = "<?php echo $faculty->last_name; ?>";
document.getElementById("first_name").value = "<?php echo $faculty->first_name; ?>";
document.getElementById("middle_init").value = "<?php echo $faculty->middle_init; ?>";
document.getElementById("kemail").value = "<?php echo $faculty->kemail; ?>";
document.getElementById("kemail").setAttribute("disabled", ""); 
document.getElementById("other_email").value = "<?php echo $faculty->email; ?>";
document.getElementById("phone").value = "<?php echo $faculty->phone; ?>";
document.getElementById("<?php echo $faculty->rank; ?>").setAttribute("checked", "");


</script>
