<?php

include('config.php');
include('fungsi.php');
include('header.php');
?>
<section class="content">
<!--INI NANTI DIPINDAH KE HASIL_AKHIR.PHP-->
<h2 class="ui header">Perangkingan</h2>
	<div class="row mb-3">
    <div class="col-sm-12"><h4>Cari</h4></div>
    <div class="col-sm-3">
        <div class="form-group form-inline">
            <label>Kemasan</label>
            <select name="s_kemasan" id="s_kemasan" class="form-control">
                <option value=""></option>
                <option value="Pump">Pump</option>
			    <option value="Non pump">Non pump</option>
				<option value="Compact">Compact</option>
				<option value="Cushion">Cushion</option>
				<option value="Jar">Jar</option>
            </select>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group form-inline">
            <label>Harga Maksimal</label>
            <input type="text" name="s_harga" id="s_harga" class="form-control">
        </div>
    </div>
    <div class="col-sm-4">
        <button id="search" name="search" class="btn btn-warning"><i class="fa fa-search"></i> Cari</button>
    </div>
</div>
<div class="data"></div>
<script type="text/javascript">
	$(document).ready(function(){
	    //$('.data').load("filter.php");
	    $("#search").click(function(){
	    	var kemasan = $("#s_kemasan").val();
	    	//var hargamin = $("#s_hargamin").val();
            var harga = $("#s_harga").val();
	    	$.ajax({
	            type: 'POST',
	            url: "filter.php",
	            data: {kemasan : kemasan, harga: harga},
	            success: function(hasil) {
	                $('.data').html(hasil);
	            }
	        });
	    });
	});
</script>
<!--SAMPE SINI-->
<?php 
include('filter.php');
include('footer.php'); ?>