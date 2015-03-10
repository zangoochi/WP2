<?php 

function newCommittee($name, $number, $prefix){
	echo '<tr>';
	echo '<td>'.$name.'</td>';
	echo '<td><input type="radio" name="'.$prefix.'i'.$number.'" value="VI"/></td>';
	echo '<td><input type="radio" name="'.$prefix.'i'.$number.'" value="IN"/></td>';
	echo '<td><input type="radio" name="'.$prefix.'i'.$number.'" value="NI" checked/></td>';
	echo '<td><input type="radio" name="'.$prefix.'h'.$number.'" value="C"/></td>';
	echo '<td><input type="radio" name="'.$prefix.'h'.$number.'" value="E"/></td>';
	echo '<td><input type="radio" name="'.$prefix.'h'.$number.'" value="P"/></td>';
	echo '<td><input type="radio" name="'.$prefix.'h'.$number.'" value="N" checked/></td>';
	echo '</tr>';
}

?>

<div class="title">3. Committee Preferences:</div>

<p>
Full descriptions of the committees are located <a href="">here</a>.(This may attempt to open the descriptions in a 
separate window/tab, so you may get a message asking you whether you wish to allow this.)
</p>
<p>
Please indicate your level of interest for each of the listed committees. If you are not interestetd do not
make any entry for the committee.
</p>
<p>
Also indicate if you are a continuing member in 2015-2016 of each committee or have served
previously or are currently serving on one (but are not a continuing member for 2015-2016)
</p>
<hr/>
<br/>

<form method="post" action="">

<table>
	<tr>
		<td></td>
		<td class="right bold" colspan="3">Interest Level</td>
		<td class="right bold" colspan="4">Membership History</td>
	</tr>
	<tr>
		<th>Committee</th>
		<th>Very Interested</th>
		<th>Interested</th>
		<th>Not Interested</th>
		<th>Continuing in 2015-2016</th>
		<th>Expiring 2015-2016</th>
		<th>Previous</th>
		<th>Never</th>
	</tr>

	<?php require_once("committees.php");
		foreach($committees as $name=>$value){
			newCommittee($name, $value, "");
		}
	?>

</table>

<p class="left">
Committees Not Nominated by the Committee on Committees:
These committees are either nominated by the Faculty Senate Executive, or elected by the Faculty Senate, or by the faculty.
</p>

<table>
	<tr>
		<td></td>
		<td class="right bold" colspan="3">Interest Level</td>
		<td class="right bold" colspan="4">Membership History</td>
	</tr>
	<tr>
		<th>Committee</th>
		<th>Very Interested</th>
		<th>Interested</th>
		<th>Not Interested</th>
		<th>Continuing in 2015-2016</th>
		<th>Expiring 2015-2016</th>
		<th>Previous</th>
		<th>Never</th>
	</tr>
	<?php require_once("committees.php");
		foreach($noncommittees as $name=>$value){
			newCommittee($name, $value, "n");
		}
	?>

</table>

<p class="left">
Issues of Interest
</p>
<p class="left">
Additional Ad-hoc Committees are also created from time to time to consider specific issues. Please indicate
</p>
<p class="left">
below any issues of particular interest to you, so that we may consider you for membership should such a 
</p>
<p class="left">
committee be constituted.
</p>
<p class="left">
<textarea rows="10" cols="50">
</textarea>
</p>




<input class="button submit" type="submit" name="submit" value="Submit"/>

</form>
