<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Arquivos em JS -->
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/alert.js') ?>"></script>

<?php if(isset($arquivo_val) && isset($arquivo_js)):?>
<script src="<?php echo base_url('assets/js/jquery.mask.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.validate.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/app.js') ?>"></script>
<script src="<?php echo base_url('assets/js/'.$arquivo_val) ?>"></script>
<script src="<?php echo base_url('assets/js/'.$arquivo_js) ?>"></script>
<?php endif;