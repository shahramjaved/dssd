<div id="wrapper">
  
<?php 
  $parent = 'ctv';
  $child = 'scc';
  include VIEW_PARTIAL_FOLDER_PATH . '/sidebar.php'; 
?>
    <div id="content" class="clearfix">
      <div class="contentwrapper">
        <div class="heading">
          <h3>Single Clone Class</h3>                    
        </div>
        <?php foreach($scc_clone_list_data as $scc_id => $data){?>
          <div class="row scc_instance_list" id="scc_instance_list_<?php echo $scc_id;?>">
            <div class="col-lg-12">
              <div class="panel panel-default gradient">
                <div class="panel-heading">
                 <h4><span>SCC Clone Instance List - SCC ID - <?php echo $scc_id;?></span></h4>
                </div>
                <div class="panel-body noPad clearfix">
                  <table cellpadding="0" cellspacing="0" border="0" class="responsive dataTable display table table-bordered" width="100%">
                    <thead>
                      <tr>                        
                        <th>No.</th>
                        <th>GID</th>
                        <th>DID</th>
                        <th>FID</th>
                        <th>Start Line</th>
                        <th>End Line</th>
                        <th>File Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                      <tbody>
                        <?php foreach($data as $d){?>
                          <tr>
                            <td><?php echo $d['no'];?></td>
                            <td><?php echo $d['gid'];?></td>
                            <td><?php echo $d['did'];?></td>
                            <td><?php echo $d['fid'];?></td>
                            <td><?php echo $d['start_line'];?></td>
                            <td><?php echo $d['end_line'];?></td>
                            <td><?php echo $d['file_name'];?></td>
                            <td>
                              <a href="javascript:void(0)" onclick="Clonify.SCC.viewCodeData('<?php echo $scc_id;?>', '<?php echo $d['clone_list_id'];?>')">
                                View Code
                              </a>
                            </td>
                          </tr>
                        <?php }?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>No</th>
                          <th>GID</th>
                          <th>DID</th>
                          <th>FID</th>
                          <th>Start Line</th>
                          <th>End Line</th>
                          <th>File Name</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
        <div class="row">
            <div class="col-lg-12">
              <div class="panel panel-default gradient">
                <div class="panel-heading">
                 <h4><span>SCC List</span></h4>
                </div>
                <div class="panel-body noPad clearfix">
                  <table cellpadding="0" cellspacing="0" border="0" class="responsive dynamicTable display table table-bordered" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>SCC ID</th>
                        <th>Length</th>                        
                        <th>No. Clones</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                      <tbody>
                        <?php foreach($scc_data as $data){?>
                        <tr>
                          <td><?php echo $data['no'];?></td>
                          <td><?php echo $data['scc_id'];?></td>                          
                          <td><?php echo $data['length'];?></td>
                          <td><?php echo $data['total_clones'];?></td>
                          <td>
                            <a href="javascript:void(0)" onclick="Clonify.SCC.viewCloneInstance('<?php echo $data['scc_id'];?>')">
                              View Clone Instance List
                            </a>
                          </td>
                        </tr>
                        <?php }?>                        
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>No</th>
                          <th>SCC ID</th>
                          <th>Length</th>                          
                          <th>No. Clones</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                  </table>
                </div>

              </div>
            </div>
          </div>
      </div><!-- End contentwrapper -->
    </div><!-- End #content -->
    
</div><!-- End #wrapper -->

<script>
  $(document).ready(function(){
    
  });
</script>