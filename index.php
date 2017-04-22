<!DOCTYPE html>
<html lang="en">
<head>
  <title>Generate Fonts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/css/bootstrap-colorpicker.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.min.js"></script>
  <script src="js.js"></script>
</head>
<body>

<div class="container">
	<br>
	<h3>Font Properties Task</h3>
	<br>
	
	  <?php

	  	$arr = array(
	  					"title_font"		=> "Title Font",
	                    "subtitle_font"		=> "Subtitle Font",
	                    "description_font"	=> "Description Font"
					);

		foreach ($arr as $key => $value) {
		?>
			<div class="form-group">
				<div class="checkbox">
				  <label data-toggle="collapse" data-target="#<?= $key ?>" aria-expanded="false" aria-controls="<?= $key ?>" class="title">
				    <input type="checkbox"/> <?= $value ?>
				  </label>
				</div>
			</div>
		    <div id="<?= $key ?>" aria-expanded="false" class="collapse">		      
		      	<div class="row">
		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      			Font Family<br>
		      			<select id="<?= $key ?>_family" class="form-control">
		      				<option>Arial, Helvetica, sans-serif</option>
		      				<option>Georgia, serif</option>
		      				<option>Palatino Linotype, Book Antiqua, Palatino, serif</option>
		      				<option>Times New Roman, Times, serif</option>		      				
		      			</select>
		      		</div>
		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      			Font Weight<br>
		      			<select id="<?= $key ?>_weight" class="form-control">
		      				<option>Bold</option>
		      				<option>Normal</option>
		      				<option>Bolder</option>
		      				<option>Lighter</option>
		      				<option>100</option>
		      				<option>200</option>
		      				<option>300</option>
		      				<option>400</option>
		      				<option>500</option>
		      				<option>600</option>
		      				<option>700</option>
		      				<option>800</option>
		      				<option>900</option>
		      			</select>
		      		</div>
		      		<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
		      			Font Size<br>
		      			<select id="<?= $key ?>_size" class="form-control">
		      				<option>12px</option>
		      				<option>13px</option>
		      				<option>14px</option>
		      				<option>15px</option>
		      				<option>16px</option>
		      				<option>17px</option>
		      				<option>18px</option>
		      				<option>19px</option>
		      				<option>20px</option>		      				
		      			</select>
		      		</div>
		      		<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
		      			Line height<br>
		      			<select id="<?= $key ?>_height" class="form-control">
		      				<option>1.5em</option>
		      				<option>1.6em</option>
		      				<option>1.7em</option>
		      				<option>1.8em</option>
		      				<option>1.9em</option>
		      				<option>2.0em</option>
		      			</select>
		      		</div>
		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      			Text Decoration<br>
		      			<select id="<?= $key ?>_decoration" class="form-control">
		      				<option>Underline</option>
		      				<option>Overline</option>
		      				<option>Line-through</option>
		      			</select>
		      		</div>
		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		      			Color<br>
		      			<input type="text" id="<?= $key ?>_color" class="form-control cp">		      				
		      		</div>
		      		<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
		      			Mobile font size<br>
		      			<select id="<?= $key ?>_mobile_size" class="form-control" >
		      				<option>12px</option>
		      				<option>13px</option>
		      				<option>14px</option>
		      				<option>15px</option>
		      			</select>
		      		</div>
		      	</div>		      
		    </div>
		 	<hr>
		<?php	
		}
	  ?>
	  <a href="#" class="btn btn-primary" id="save">Save</a>
</div>

</body>
</html>