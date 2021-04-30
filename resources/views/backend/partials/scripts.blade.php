<!-- jQuery 3 -->
<script src={{asset("backend/bower_components/jquery/dist/jquery.min.js")}}></script>
<!-- Bootstrap 3.3.7 -->
<script src={{asset("backend/bower_components/bootstrap/dist/js/bootstrap.min.js")}}></script>
<!-- FastClick -->
<script src={{asset("backend/bower_components/fastclick/lib/fastclick.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("backend/dist/js/adminlte.min.js")}}></script>
<!-- Sparkline -->
<script src={{asset("backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js")}}></script>
<!-- jvectormap  -->
<script src={{asset("backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}></script>
<script src={{asset("backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}></script>
<!-- SlimScroll -->
<script src={{asset("backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}></script>
<!-- ChartJS -->
<script src={{asset("backend/bower_components/chart.js/Chart.js")}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{asset("backend/dist/js/pages/dashboard2.js")}}></script>
<!-- AdminLTE for demo purposes -->
<script src={{asset("backend/dist/js/demo.js")}}></script>
<script src={{asset("backend/bower_components/ckeditor/ckeditor.js")}}></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
    };
</script>
<script>
    CKEDITOR.replace('editor1',options);

</script>