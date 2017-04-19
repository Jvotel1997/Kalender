<div class="container">
	<form action="<?= URL ?>birthday/createSave" method="post">
		<p>
			<label>Name</label>
			<input type="text" name="name" placeholder="Jesse">
		</p>

		<p>
			<label>Day</label>
			<input type="text" name="day">
		</p>

		<p>
			<label>Month</label>
			<select name="month">
				<option value="1">januari</option>
				<option value="2">februari</option>
				<option value="3">maart</option>
				<option value="4">april</option>
				<option value="5">mei</option>
				<option value="6">juni</option>
				<option value="7">juli</option>
				<option value="8">augustus</option>
				<option value="9">september</option>
				<option value="10">oktober</option>
				<option value="11">november</option>
				<option value="12">december</option>
			</select>
		</p>

		<p>
			<label>Year</label>
			<input type="text" name="year">
		</p>

		<input type="submit" value="Verzenden">
	
	</form>

</div>