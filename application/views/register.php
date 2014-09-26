<div class="well" style="margin-top: 20px;">
  <div class="container">
    <div class="row clearfix">
      <div class="col-md-11 column">
        <div class="modal-header">
        	<h1><strong>加入會員</strong></h1>
        </div>
      </div>
      <div class="col-md-12 column">
        <div class="col-md-6 column">
          <?php echo form_open('jobs/create_user',array('role'=>'form','class'=>'modal-body'));?>
            <div class="form-group">
              <h4 style="padding-bottom: 10px">使用E-mail註冊：</h4>
              <label for="exampleInputEmail1">E-mail</label>
              <?php echo form_error('user_name'); ?>
              <input type="email" class="form-control" name="user_name" placeholder="Enter email" value="<?php echo set_value('user_name'); ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">密碼</label>
              <?php echo form_error('user_password'); ?>
              <input type="password" class="form-control" name="user_password" placeholder="Password" value="<?php echo set_value('user_password'); ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">再次輸入密碼</label>
              <?php echo form_error('user_passconf'); ?>
              <input type="password" class="form-control" name="user_passconf" placeholder="Confirm Password" value="<?php echo set_value('user_passconf'); ?>">
            </div>
            <div class="form-group">
  <!--             <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile"> -->
              <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
  <!--             <label>
                <input type="checkbox"> Check me out
              </label> -->
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>