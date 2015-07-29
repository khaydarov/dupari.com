<script src="<?=$assets; ?>/libs/jqvmap/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
<script src="<?=$assets; ?>/libs/jqvmap/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
<script>
	$(document).ready (function() {
		        jQuery('#vmap-northamerica').vectorMap({
                    map: 'north-america_en',
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
                jQuery('#vmap-southamerica').vectorMap({
                    map: 'south-america_en',
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
<h2 id="northamerica">Северная америка</h2>
    <div class="row">
            <div id="vmap-northamerica" style="width: 100%; height: 400px;"></div>
    </div>
<h2 id="southamerica">Южная америка</h2>
    <div class="row">
        <div id="vmap-southamerica" style="width: 100%; height: 400px;"></div>
    </div>