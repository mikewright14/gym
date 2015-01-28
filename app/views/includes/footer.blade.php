
<?php Header("Content-Type: application/x-javascript; charset=UTF-8"); ?>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->


{{ HTML::script('plugins/jquery.min.js') }}
{{ HTML::script('plugins/jquery-migrate.min.js') }}
{{ HTML::script('plugins/bootstrap/js/bootstrap.min.js') }}
{{ HTML::script('plugins/jquery.blockui.min.js') }}
{{ HTML::script('plugins/uniform/jquery.uniform.min.js') }}
{{ HTML::script('plugins/jquery.cokie.min.js') }}
{{ HTML::script('global/scripts/metronic.js') }}
{{ HTML::script('layout/scripts/layout.js') }}
{{ HTML::script('layout/scripts/demo.js') }}
{{ HTML::script('pages/scripts/login.js') }}
{{ HTML::script('plugins/jquery-validation/js/jquery.validate.min.js') }}





<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Login.init();
Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>