              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <h3 class="modal-title" id="myModalLabel"><strong>會員登入</strong></h3>
                    </div>
                    <div class="modal-body">
                    <!-- Form -->
                      <?php echo form_open('jobs/login',array('role'=>'form','class'=>'modal-body','id'=>'user_login'));?>
                        <h4>使用Email登入：</h4>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email </label>
                          <!-- <?php echo form_error('user_name'); ?> -->
                          <input type="email" class="form-control" name="user_name" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">密碼</label>
                          <!-- <?php echo form_error('user_password'); ?> -->
                          <input type="password" class="form-control" name="user_password" placeholder="Password">
                        </div>
                        <div>
                         <label><input type="checkbox"> 記住我</label>
                        </div>
                        <div style="padding-top: 10px">
                         <button type="submit" class="btn btn-success">確認</button>
                        </div>
                      </form>
                    <!-- Form End -->
                    </div>
                    <div class="modal-footer">
                      <div class="form-group" style="padding-right: 70%">
                        <p class="help-block" style="display: inline">還不是會員嗎？</p>
                        <?php echo anchor('jobs/register', '立即註冊');?>
                      </div>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                  </div>
                </div>
              </div>