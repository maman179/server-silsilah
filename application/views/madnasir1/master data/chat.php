<!-- DIRECT CHAT PRIMARY -->
            <div class="card card-primary card-outline direct-chat direct-chat-primary">
              <div class="card-header">
              <?php
              foreach($tujuan as $n)        
                    { ?>
                <h3 class="card-title">Direct Chat <?php echo $n->nama_cucu;?></h3>   
                <div class="card-tools">
                  <span title="3 New Messages" class="badge bg-primary">3</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                  	                  
                  <i class="fas fa-times"></i>
                  </button>
                 
                </div>
  
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
 
                <!-- Message. Default to the left -->
                    <?php foreach($outbox as $o)
                    {?> 
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Admin</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                    <?php echo $o->message?> 
                    </div>
                    <!-- /.direct-chat-text -->
                  </div><?php } ?>
                  <!-- /.direct-chat-msg -->
                  
                  <!-- Message to the right -->
                  <?php foreach($inbox as $j)
                    {?>
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right"><?php echo $n->nama_cucu;?></span>
                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="<?php echo base_url().'/assets/foto_cucu/'.$n->foto_cucu?>" alt="User">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                    <?php echo $j->message;?>
                    </div>
                    <!-- /.direct-chat-text -->
                    <?php } ?>
                    <!-- Contacts are loaded here -->
                  </div>
                  <!-- /.direct-chat-msg -->
                </div>
                <!--/.direct-chat-messages-->
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                  </ul>
                  <!-- /.contatcts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              
              <div class="card-footer">             
              <?php echo form_open_multipart('dashboard1/aksi_chat');?>
              <div class="input-group">
                    <input type="hidden" name="target" class="form-control" value="<?php echo $n->NoHP_cucu;?>">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-primary">Send</button>
                    </span>
                  </div
                  <?php } ?>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
          </div>
          <!-- /.col -->