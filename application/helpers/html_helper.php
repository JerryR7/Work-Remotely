<?php
  function active($value,$method)
  {
    if($method == 'tab')
    {
      if($value == 2)
      {
        echo " active";
      }
    }
    else if($method == 'nav')
    {
      if($value == 2)
      {
        echo " class='active'";
      }
    }
  }

  function salary($salary)
  {
    if($salary < 66000)
    {
      echo "label-default";
    }
    else if($salary >= 66000 && $salary < 120000)
    {
      echo "label-warning";
    }
    else if($salary >= 120000 && $salary < 180000)
    {
      echo "label-success";
    }
    else
    {
      echo "label-danger";
    }
  }

  function turn_back_category($title,$own_id)
  {
    foreach($title as $title)
    {
      if($title['category_id'] == $own_id)
      {
        echo anchor('jobs/category/' . $title['category_id'], '看更多 ' . $title['category_title'] . ' 的工作 →', array('class'=>'underline pull-right'));
      }
    }
  }

  function validation($validation,$value)
  {
    if($validation == $value)
    {
      echo " checked='checked'";
    }
  }

  function dring_two_day($day)
  {
    $tow_day = strtotime(date("Y-m-d",strtotime("-2 day")));
    if($tow_day <= strtotime($day))
    {
      echo '<span class="label label-success">NEW</span>';
    }

  }
?>