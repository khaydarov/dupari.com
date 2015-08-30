<script src="<?=$assets; ?>js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="<?=$assets; ?>libs/editor/minified/jquery.sceditor.bbcode.min.js"></script>
<link rel="stylesheet" href="<?=$assets; ?>libs/editor/minified/themes/default.min.css" type="text/css" media="all">

<script>
$(function() {
    // Replace all textarea's
    // with SCEditor
    $("textarea").sceditor({
        plugins: "bbcode",
		style: "http://localhost/dupari.com/assets/libs/editor/minified/jquery.sceditor.default.min.css"
    });
});
</script>


<hr>
<h3 align="center">Добавление записи: Добавить страну</h3>
<div class="col-lg-10 col-lg-offset-1">
	<form role="form" class="form" action="" method="post">
				<div class="form-group">
					<select name="continent" id="" class="form-control">
						<option value="">Выберите континент</option>
						<option value="">Азия</option>
						<option value="">Африка</option>
						<option value="">Европа</option>
						<option value="">Америка</option>
						<option value="">Австралия</option>
					</select>
				</div>
				<div class="form-group">
					<label for=""></label>
					<input type="text" class="form-control" name="country" placeholder="Введите название страны">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="capital" placeholder="Столица">
				</div>	
				<div class="form-group">
					<input type="text" class="form-control" name="count" placeholder="Численность">
				</div>		
				<div class="form-group">
					<input type="text" class="form-control" name="language" placeholder="Государственный язык">
				</div>
				<div>
					<textarea class="bbcode" name="bbcode_field" style="width: 100%; height: 500px;"></textarea>
				</div>
				<br>
				<div class="form-group">
					<button name="submit" class="btn btn-sm btn-success form-control">Добавить</button>
				</div>
	</form>

</div>
