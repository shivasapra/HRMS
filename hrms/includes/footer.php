<!-- partial:partials/_footer.html -->
<footer class="footer">
    <div class="container-fluid clearfix">
            <span class="text-gray d-block text-center text-sm-left d-sm-inline-block">Copyright © <?php echo date('Y');?>
              <a href="https://www.forbcorp.com/" target="_blank"><b>Him Soft Solution</b></a>. All Rights Reserved.</span>
    </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<script src="./vendors/js/vendor.bundle.base.js"></script>
<script src="./vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="./js/off-canvas.js"></script>
<script src="./js/misc.js"></script>
<script src="./js/chart.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="./js/dashboard.js"></script>
<script src="./js/lightbox.min.js"></script>
<script src="./js/pignose.calendar.full.min.js"></script>
<script src="./vendors/js/jquery.dataTables.js"></script>


<!-- End custom js for this page-->

<script>
    $(document).ready(function() {
        $('#my_table').DataTable();
    } );
</script>

<script>
    $(document).ready(function() {
        $("#remove_disabled_class").click(function () {
            $('.disabled_attribute').removeAttr("disabled");
            $('#remove_disabled_class').hide();
            document.getElementById("save_details").style.display = "block";
        })
    });
</script>
<script>
    $(function() {
        $('.calendar').pignoseCalendar({
            theme: 'blue' // light, dark, blue
        });
    });
</script>

</body>
</html>