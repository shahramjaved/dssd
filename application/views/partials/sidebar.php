<?php
  $parent = isset($parent) ? $parent : '';
  $child = isset($child) ? $child : '';
?>

        <div class="resBtn">
            <a href="#"><span class="icon16 minia-icon-list-3"></span></a>
        </div>
        
        <!--Left Sidebar collapse button-->  
        <div class="collapseBtn leftbar">
             <a href="#" class="tipR" title="Hide Left Sidebar"><span class="icon12 minia-icon-layout"></span></a>
        </div>

        <!--Sidebar background-->
        <div id="sidebarbg"></div>
 <div id="sidebar"> 
 <div class="shortcuts" style="height:50px;">
</div>                   
    <div class="sidenav">
        <div class="sidebar-widget" style="margin: -1px 0 0 0;">
            <h5 class="title" style="margin-bottom:0">Navigation</h5>
        </div><!-- End .sidenav-widget -->

        <div class="mainnav">
            <ul>
                <li id="cds"><a href="#">
                    <span class="marginL10"></span>
                    Clone Detection Settings
                  </a></li>
                <li id="ctv">
                    <a href="#">
                      <span class="marginL10"></span>
                      Clone Table View
                    </a>
                    <ul class="sub">
                        <li id="ctv_scc">
                            <a href="<?php echo site_url('home/SingleCloneClass');?>">
                              <span class="marginL20"></span> 
                              Single Clone Class 
                            </a>
                        </li>                        
                    </ul>
                </li>
                <li id="cgs">
                  <a href="#">
                    <span class="marginL10"></span>
                    Clone Graph View
                  </a>
                </li>
                <li id="msv">
                  <a href="#">
                    <span class="marginL10"></span>
                    Multi System View
                  </a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
<script>
  $(document).ready(function(){
    <?php if ($parent){?>
     // if ($("#<?php echo $parent?> ul").length > 0){
        //$("#<?php echo $parent?> ul").addClass("expand show");
      //}
    <?php }?>
    <?php if ($child){?>
      //if ($("#<?php echo $parent."_" . $child;?>").length > 0){
        //$("#<?php echo $parent."_" . $child;?>").addClass("current");
      //}
    <?php }?>
  });
</script>        
