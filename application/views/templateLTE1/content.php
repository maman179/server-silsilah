    <div class="tab-content">
    	<div class="tab-empty">
    		<h2 class="display-4">
    			<!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
    			<?php if ($this->session->flashdata('message')) :
						echo $this->session->flashdata('message');
					endif; ?>
    	</div>

    	</h2>
    </div>
    <div class="tab-loading">
    	<div>
    		<h2 class="display-4">Tab is loading <i class="fa fa-sync fa-spin"></i></h2>
    	</div>