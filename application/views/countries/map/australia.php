<script src="<?=$assets; ?>/libs/jqvmap/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
<script>
	$(document).ready (function() {
		jQuery('#vmap-australia').vectorMap({
                    map: 'australia_en',
                    backgroundColor: '#fff',
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#666666',
                    enableZoom: false,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#C8EEFF', '#006491'],
                    normalizeFunction: 'polynomial'
                });
	});
</script>
<div class="row">
    <div id="vmap-australia" style="width: 100%; height: 400px;"></div>
</div>