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

<form role="form" class="form" action="" method="post">
			
			<div class="col-lg-10 col-lg-offset-1">
				<textarea class="bbcode" name="bbcode_field" style="width: 100%; height: 500px;"></textarea>
			</div>
</form>

