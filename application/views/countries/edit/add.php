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

<h2 align="center">Добавление записи: Добавить город</h2>

<div class="col-lg-10 col-lg-offset-1">
	<form role="form" class="form" action="" method="post">
				<div class="form-group">
					<select name="" id="" class="form-control">
						<option value="0">Выберите страну</option>
						<option value="">1</option>
						<option value="">2</option>
						<option value="">3</option>
					</select>
				</div>
				<div class="form-group">
					<label for=""></label>
					<input type="text" class="form-control" placeholder="Введите название города">
				</div>			
				<div>
					<textarea class="bbcode" name="bbcode_field" style="width: 100%; height: 500px;"></textarea>
				</div>
				<br>
				<div class="form-group">
					<button class="btn btn-md form-control">Добавить</button>
				</div>
	</form>

</div>
