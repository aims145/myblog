<div  class="navbar navbar-default navbar-fixed-bottom nav">
    <div class="container">
        <p class="navbar-text"></p>
        <a class="navbar-btn btn-link btn " href="#">Home</a>
        <a class="navbar-btn btn-link btn " href="#">About us</a>
        <a class="navbar-btn btn-link btn " href="#" >Privacy </a>
        <a class="navbar-btn btn-link btn " href="#" >Terms</a>
        <a class="navbar-btn btn-link btn " href="#" >Faq</a>
        <a class="navbar-btn btn-link btn " href="#" >Register</a>
        
    </div>
</div>


<div class="modal fade" id="newlogin">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" method="post" action="<?php echo base_url()?>login/process">
                <div class="modal-header">
                    <h4>Login Form</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username" class="control-label col-lg-3">User Name</label>
                        <div class="col-lg-6 ">
                            <input type="text" class="form-control" id="username" name="username" placeholder="User Name">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="control-label col-lg-3">Password</label>
                        <div class="col-lg-6 ">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                        </div>
                    </div>
                        
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery -->
    <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/dist/js/sb-admin-2.js"></script>

<script src="<?php echo base_url();?>assets/choosen/chosen.jquery.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/choosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>    

  
</body>

</html>
