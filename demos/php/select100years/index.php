<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP &amp; HTML Demo: Select field für die letzten 100 Jahre inkl. Altersgrenze</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-3">
				
				<h3 class="text-muted">PHP &amp; HTML Demo: Select field für die letzten 100 Jahre inkl. Altersgrenze</h3>

				<br>

				<form action="">
					<div class="well">
						<div class="row">
							<div class="col-xs-4">
								<select id="geburtstag" name="form[geburtstag]" class="form-control">
									<option value="" selected="selected">Tag</option>
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
							</div>
							<div class="col-xs-4">
								<select id="geburtsmonat" name="form[geburtsmonat]" class="form-control">
									<option value="" selected="selected">Monat</option>
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</div>
							<div class="col-xs-4">
								<select id="geburtsjahr" name="form[geburtsjahr]" class="form-control">
								  <option>Jahr</option>
								    <?php
								      $range = 100;
								      $limit = 18;
								      $current = date('Y');
								      $eldest = $current - $range;
								      $recent = $current - $limit;
								 
								      foreach (range($recent, $eldest) as $year)
								      {
								        echo "<option value=\"".$year."\">".$year."</option>";
								      }
								    ?>
								</select>
							</div>
						</div>
					</div>
				</form>
				
				<p>(Siehe Quelltext zur Implementierung)</p>
				<p><a href="http://bloggerschmidt.github.io/2015/02/11/jQuery-Autovervollstandigung-von-Ort-bzw-Stadt-anhand-der-Postleitzahl.html" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Zur&uuml;ck zum Beitrag</a></p>

			</div>
		</div>
	</div>

</body>

</html>