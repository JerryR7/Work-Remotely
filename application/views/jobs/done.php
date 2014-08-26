<div class="container">
  <div class="row clearfix">
  <div class="col-md-1 column">
  </div>
    <div class="col-md-11 column" style="padding-top: 30px">
      <h2 style="display: inline; padding-right: 20px"><p class="label label-default">Step 1. 撰寫你的徵才啟事 </p></h2>
      <h2 style="display: inline; padding-right: 20px"><p class="label label-default">Step 2. 預覽你的徵才啟事 </p></h2>
      <h2 style="display: inline; padding-right: 20px"><p class="label label-success" style="text-shadow:2px 2px 2px #222;">Step 3. 刊登你的徵才啟事 </p></h2>
    </div>
  </div>
  <div class="row clear-fix">
    <div class="col-md-10 column" style="padding-bottom: 30px">
      <br>
      <br>
      <br>
      <h2>STEP 3 : 刊登徵才啟事</h2>
      <br>
      <footer style="color: #777; text-align: right;">你張貼的工作會在這個網站上停留三十天，三十天過後這個徵才啟事會過期，你可以隨時再回來重新張貼工作廣告。</footer>
      <hr>
      <br>
      <div class="row clearfix">
        <div class="col-md-12 column">
          <br>
          <hr>
          <br>
          <div class="well">
            <h4> 提醒 </h4>
            <ul>
              <li>你的廣告會在本站首頁上停留三十天（從現在算起）。</li>
              <li>一則廣告只允許公告一個職缺</li>
              <li>我們保留將廣告徹架的權利</li>
              <li>如有任何疑問，請來信 avtechtest3@gmail.com</li>
            </ul>
          </div>
        </div>
        <div class="col-md-11 column" style="padding-top: 30px">
          <div class="checkbox col-md-5 colum">
            <br>
            <br>
            <br>
            <br>
            <br>
          </div>
          <?php echo form_open('jobs/insert_jobs');?>
            <input type="hidden" name="job_title" value="<?php echo $jobs_title;?>" />
            <input type="hidden" name="category" value="<?php echo $jobs_category;?>" />
            <input type="hidden" name="lower_bound" value="<?php echo $jobs_lower;?>" />
            <input type="hidden" name="higher_bound" value="<?php echo $jobs_higher;?>" />
            <input type="hidden" name="work_place" value="<?php echo $jobs_place;?>" />
            <input type="hidden" name="description" value="<?php echo $jobs_description;?>" />
            <input type="hidden" name="how_hire" value="<?php echo $jobs_hire;?>" />
            <input type="hidden" name="company" value="<?php echo $jobs_company;?>" />
            <input type="hidden" name="url" value="<?php echo $jobs_url;?>" />
            <input type="hidden" name="email" value="<?php echo $jobs_email;?>" />
            <input type="hidden" name="jobs_update" value="<?php echo $jobs_update;?>" />
            <input class="btn btn-lg btn-primary" name="commit" type="submit" value="刊登徵才啟事">
          <?php echo form_close();?>
        </div>
      </div>
    </div>
  </div>
</div>