<script>
$(document).ready(function() {
		$('#vmap').vectorMap({
			map: 'world_en',
		    backgroundColor: 'rgb(245, 245, 245)',
		    color: '#fff',
		    hoverOpacity: 0.7,
		    hoverColor: '#c9dfaf',
		    selectedColor: '#666',
		    enableZoom: false,
		    showTooltip: true,
		    values: sample_data,
		    scaleColors: ['#C8EEFF', '#006491'],
		    normalizeFunction: 'polynomial'
		});

});
</script>
<div class="row">
	<div id="vmap" style="width: 100%; height: 500px;"></div>
</div>