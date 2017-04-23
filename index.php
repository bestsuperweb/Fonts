<!DOCTYPE html>
<html lang="en">
<head>
  <title>Generate Fonts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js.js"></script>
</head>
<body>

<div class="container">
	<br>
	<h2>Font Properties Task</h2>
	
	  <?php

	  	$arr = array(
	  					"title_font"		=> "Title Font",
	                    "subtitle_font"		=> "Subtitle Font",
	                    "description_font"	=> "Description Font"
					);

		foreach ($arr as $key => $value) {
		?>
			<div >
			  <label data-target="<?= $key ?>" class="title">
			    <input type="checkbox"/> <?= $value ?>
			  </label>
			</div>
		    <div id="<?= $key ?>" class="content">		
		    	<div>
		      		<div class="font-detail">
		      			Font Family<br>
		      			<select id="<?= $key ?>_family" class="font-value">
		      				<option>Arial, Helvetica, sans-serif</option>
		      				<option>Georgia, serif</option>
		      				<option>Palatino Linotype, Book Antiqua, Palatino, serif</option>
		      				<option>Times New Roman, Times, serif</option>		      				
		      			</select>
		      		</div>
		      		<div class="font-detail">
		      			Font Weight<br>
		      			<select id="<?= $key ?>_weight" class="font-value">
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
		      		<div class="font-detail">
		      			Font Size<br>
		      			<select id="<?= $key ?>_size" class="font-value">
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
		      	</div>      
		      	<div>		      		
		      		<div class="font-detail">
		      			Line height<br>
		      			<select id="<?= $key ?>_height" class="font-value">
		      				<option>1.5em</option>
		      				<option>1.6em</option>
		      				<option>1.7em</option>
		      				<option>1.8em</option>
		      				<option>1.9em</option>
		      				<option>2.0em</option>
		      			</select>
		      		</div>
		      		<div class="font-detail">
		      			Text Decoration<br>
		      			<select id="<?= $key ?>_decoration" class="font-value">
		      				<option>Underline</option>
		      				<option>Overline</option>
		      				<option>Line-through</option>
		      			</select>
		      		</div>
		      		<div class="font-detail">
		      			Color<br>
		      			<input type="text" id="<?= $key ?>_color" class="font-value">		      				
		      		</div>
		      		<div class="font-detail">
		      			Mobile font size<br>
		      			<select id="<?= $key ?>_mobile_size" class="font-value" >
		      				<option>12px</option>
		      				<option>13px</option>
		      				<option>14px</option>
		      				<option>15px</option>
		      			</select>
		      		</div>		      		
		      	</div>	      				      
		    </div>
		    <?php if ($value != end($arr)) { ?>
		    	<hr>
		    <?php }  ?>
		<?php	
		}
	  ?>
	  <br>
	  <a href="#" id="save">Save</a>
</div>

</body>
</html>