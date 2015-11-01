<?
require_once('process_form.php');
    
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <META http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css"></link>
  <title>Cognitive Science: Evaluation of TA / IA</title>
</head>

<body>

<div id="form">

<form method="POST" action="">

<div id="head">
  <div style="position:absolute;top:0;left:238"><b>Cognitive Science: Evaluation of TA / IA</b></div>
  <div style="position:absolute;top:42;left:0">
    Name  of  TA  /  IA 
    <input name="TA_name" class="TA_name" type="text"  
           value="<?= (isset($_REQUEST['name'])?$_REQUEST['name']:'')?>"></input>
  
    Course  #  
    <input name="course_number" class="course_number" type="text"
           value="<?= (isset($_REQUEST['course'])?$_REQUEST['course']:'')?>"></input>
    
    Quarter
    <input name="quarter" class="quarter" type="text"
           value="<?= (isset($_REQUEST['quarter'])?$_REQUEST['quarter']:'')?>"></input>
  </div>
  <div style="position:absolute;top:75;left:0">
    Section  day  and  time  
    <input name="section_time" class="section_time" type="text"
           value="<?= (isset($_REQUEST['section'])?$_REQUEST['section']:'')?>"></input>
  </div>
  <div style="position:absolute;top:75;left:535">
    Year 
    <input name="year" class="year" type="text"
           value="<?= (isset($_REQUEST['year'])?$_REQUEST['year']:'')?>"></input>
  </div>
</div>

<div id="ta_poll">
  <div style="position:absolute;top:0;left:0"><b>In items a–g, choose a number (1–5) to rate this TA’s performance in this class using the following scale:</b></div>
  <div style="position:absolute;top:22;left:30"><b>Poor</b></div>
  <div style="position:absolute;top:22;left:141"><b>Satisfactory</b></div>
  <div style="position:absolute;top:22;left:276"><b>Exceptional</b></div>
  <div style="position:absolute;top:22;left:457"><b>Insufficient basis for response</b></div>
  <div style="position:absolute;top:50;left:43"><b>1</b></div>
  <div style="position:absolute;top:50;left:111"><b>2</b></div>
  <div style="position:absolute;top:50;left:178"><b>3</b></div>
  <div style="position:absolute;top:50;left:246"><b>4</b></div>
  <div style="position:absolute;top:50;left:313"><b>5</b></div>
  <div style="position:absolute;top:50;left:546"><b>N/A</b></div>
  <div class="box" style="position:absolute;top:70;left:35">
    <div style="position:absolute;top:10;left:14"><b>a. </b>Organization and preparation for section</div>
    <div style="position:absolute;top:10;left:418"><input type="radio" name="TA_perf_organization" value="1"    />1</div>
    <div style="position:absolute;top:10;left:452"><input type="radio" name="TA_perf_organization" value="2"    />2</div>
    <div style="position:absolute;top:10;left:487"><input type="radio" name="TA_perf_organization" value="3"    />3</div>
    <div style="position:absolute;top:10;left:521"><input type="radio" name="TA_perf_organization" value="4"    />4</div>
    <div style="position:absolute;top:10;left:556"><input type="radio" name="TA_perf_organization" value="5"    />5</div>
    <div style="position:absolute;top:10;left:599"><input type="radio" name="TA_perf_organization" value="N/A"  />N/A</div>
    
    <div style="position:absolute;top:41;left:14"><b>b. </b>Knowledge of material</div>
    <div style="position:absolute;top:41;left:418"><input type="radio" name="TA_perf_knowledge" value="1"    />1</div>
    <div style="position:absolute;top:41;left:452"><input type="radio" name="TA_perf_knowledge" value="2"    />2</div>
    <div style="position:absolute;top:41;left:487"><input type="radio" name="TA_perf_knowledge" value="3"    />3</div>
    <div style="position:absolute;top:41;left:521"><input type="radio" name="TA_perf_knowledge" value="4"    />4</div>
    <div style="position:absolute;top:41;left:556"><input type="radio" name="TA_perf_knowledge" value="5"    />5</div>
    <div style="position:absolute;top:41;left:599"><input type="radio" name="TA_perf_knowledge" value="N/A"  />N/A</div>

    <div style="position:absolute;top:72;left:14"><b>c. </b>Clarity of explanations</div>
    <div style="position:absolute;top:72;left:418"><input type="radio" name="TA_perf_clarity" value="1"    />1</div>
    <div style="position:absolute;top:72;left:452"><input type="radio" name="TA_perf_clarity" value="2"    />2</div>
    <div style="position:absolute;top:72;left:487"><input type="radio" name="TA_perf_clarity" value="3"    />3</div>
    <div style="position:absolute;top:72;left:521"><input type="radio" name="TA_perf_clarity" value="4"    />4</div>
    <div style="position:absolute;top:72;left:556"><input type="radio" name="TA_perf_clarity" value="5"    />5</div>
    <div style="position:absolute;top:72;left:599"><input type="radio" name="TA_perf_clarity" value="N/A"  />N/A</div>

    <div style="position:absolute;top:103;left:14"><b>d. </b>Effective responses to questions</div>
    <div style="position:absolute;top:103;left:418"><input type="radio" name="TA_perf_q_and_a" value="1"    />1</div>
    <div style="position:absolute;top:103;left:452"><input type="radio" name="TA_perf_q_and_a" value="2"    />2</div>
    <div style="position:absolute;top:103;left:487"><input type="radio" name="TA_perf_q_and_a" value="3"    />3</div>
    <div style="position:absolute;top:103;left:521"><input type="radio" name="TA_perf_q_and_a" value="4"    />4</div>
    <div style="position:absolute;top:103;left:556"><input type="radio" name="TA_perf_q_and_a" value="5"    />5</div>
    <div style="position:absolute;top:103;left:599"><input type="radio" name="TA_perf_q_and_a" value="N/A"  />N/A</div>
    
    <div style="position:absolute;top:134;left:14"><b>e. </b>Encouragement of student participation in section</div>
    <div style="position:absolute;top:134;left:418"><input type="radio" name="TA_perf_student_participation" value="1"    />1</div>
    <div style="position:absolute;top:134;left:452"><input type="radio" name="TA_perf_student_participation" value="2"    />2</div>
    <div style="position:absolute;top:134;left:487"><input type="radio" name="TA_perf_student_participation" value="3"    />3</div>
    <div style="position:absolute;top:134;left:521"><input type="radio" name="TA_perf_student_participation" value="4"    />4</div>
    <div style="position:absolute;top:134;left:556"><input type="radio" name="TA_perf_student_participation" value="5"    />5</div>
    <div style="position:absolute;top:134;left:599"><input type="radio" name="TA_perf_student_participation" value="N/A"  />N/A</div>

    <div style="position:absolute;top:165;left:14"><b>f. </b>Interaction with students</div>
    <div style="position:absolute;top:165;left:418"><input type="radio" name="TA_perf_interaction" value="1"    />1</div>
    <div style="position:absolute;top:165;left:452"><input type="radio" name="TA_perf_interaction" value="2"    />2</div>
    <div style="position:absolute;top:165;left:487"><input type="radio" name="TA_perf_interaction" value="3"    />3</div>
    <div style="position:absolute;top:165;left:521"><input type="radio" name="TA_perf_interaction" value="4"    />4</div>
    <div style="position:absolute;top:165;left:556"><input type="radio" name="TA_perf_interaction" value="5"    />5</div>
    <div style="position:absolute;top:165;left:599"><input type="radio" name="TA_perf_interaction" value="N/A"  />N/A</div>

    <div style="position:absolute;top:196;left:14"><b>g. </b>Effectiveness in helping you learn</div>
    <div style="position:absolute;top:196;left:418"><input type="radio" name="TA_perf_effectiveness" value="1"    />1</div>
    <div style="position:absolute;top:196;left:452"><input type="radio" name="TA_perf_effectiveness" value="2"    />2</div>
    <div style="position:absolute;top:196;left:487"><input type="radio" name="TA_perf_effectiveness" value="3"    />3</div>
    <div style="position:absolute;top:196;left:521"><input type="radio" name="TA_perf_effectiveness" value="4"    />4</div>
    <div style="position:absolute;top:196;left:556"><input type="radio" name="TA_perf_effectiveness" value="5"    />5</div>
    <div style="position:absolute;top:196;left:599"><input type="radio" name="TA_perf_effectiveness" value="N/A" />N/A</div>
  </div>
</div>
<div id="ta_perf">
  <div style="position:absolute;top:0;left:0"><b>h. </b>What percent of the time do you attend <i>lecture</i> for this course?</div>
  <div style="position:absolute;top:0;left:410">
    <input type="radio" name="attendance_lecture" value="0-25" />0–25%
    <input type="radio" name="attendance_lecture" value="26-50" />26-50%
    <input type="radio" name="attendance_lecture" value="51-75" />51-75%
    <input type="radio" name="attendance_lecture" value="76-100" />76-100%
  </div>
  <div style="position:absolute;top:27;left:0"><b>i. </b>What percent of the time do you attend <i>section</i> for this course?</div>
  <div style="position:absolute;top:27;left:410">
    <input type="radio" name="attendance_section" value="0-25" />0–25%
    <input type="radio" name="attendance_section" value="26-50" />26-50%
    <input type="radio" name="attendance_section" value="51-75" />51-75%
    <input type="radio" name="attendance_section" value="76-100" />76-100%
  </div>
  <div style="position:absolute;top:54;left:0"><b>j. </b>
    Approximate number of hours per week spent outside of class studying for this course: 
    <input type="text" name="study_hours" class="study_hours" /> hours
  </div>
  <div style="position:absolute;top:81;left:0"><b>k. </b>Reason for taking </div>
  <div style="position:absolute;top:108;left:50">this course:</div>
  <div style="position:absolute;top:81;left:140">
    major (enter specialization) <input type="text" name="maj_specialization" class="maj_specialization" />
  </div>
  <div style="position:absolute;top:108;left:140">
    minor (enter major) <input type="text" name="min_major" class="min_major" />
  </div>
  <div style="position:absolute;top:81;left:440">
    gen. ed. req't (enter major) <input type="text" name="gen_req_major" class="gen_int_major" />
  </div>
  <div style="position:absolute;top:108;left:440">
    gen. interest (enter major) <input type="text" name="gen_int_major" class="gen_int_major" />
  </div>
  
  <div style="position:absolute;top:135;left:0"><b>l. For you to benefit most from this course, how would you like your TA to spend time during section?</b></div>
  <div style="position:absolute;top:150;left:28"><b>Activity</b></div>
  <div style="position:absolute;top:155;left:412"><b>Priority  (1–5)</b></div>
  <div style="position:absolute;top:170;left:412"><b>(1 = very important … 5 = not important)</b></div>
  <div style="position:absolute;top:195;left:28">Review unclear parts of class lectures</div>
  <div style="position:absolute;top:195;left:412">
    <select name="time_review_lecture" class="time_review_lecture">
      <option value="" SELECTED="1"></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div style="position:absolute;top:222;left:28">Review past homework or readings</div>
  <div style="position:absolute;top:222;left:412">
    <select name="time_review_homework" class="time_review_homework">
      <option value="" SELECTED="1"></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div style="position:absolute;top:249;left:28">Prepare for current homework or readings</div>
  <div style="position:absolute;top:249;left:412">
    <select name="time_prep_homework" class="time_prep_homework">
      <option value="" SELECTED="1"></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div style="position:absolute;top:276;left:28">Present new examples or new material</div>
  <div style="position:absolute;top:276;left:412">
    <select name="time_new_material" class="time_new_material">
      <option value="" SELECTED="1"></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div style="position:absolute;top:303;left:28">Divide his/her time to work with individual students</div>
  <div style="position:absolute;top:303;left:412">
    <select name="time_with_individuals" class="time_with_individuals">
      <option value="" SELECTED="1"></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div style="position:absolute;top:330;left:28">Other:
    <input type="text" name="time_other_comment" class="time_other_comment" />
  </div>
  <div style="position:absolute;top:330;left:412">
    <select name="time_other" class="time_other">
      <option value="" SELECTED="1"></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
</div>

<div id="comments">
  <div style="position:relative">
    <div style="position:absolute;top:0;left:0"><b>m. </b>What did you particularly like about this TA or this section?</div>
    <div style="position:absolute;top:27;left:20"><textarea name="comments_liked" class="comments_liked"></textarea></div>
    
    <div style="position:absolute;top:150;left:0"><b>n. </b>Please note any suggestions for change.</div>
    <div style="position:absolute;top:177;left:20"><textarea name="comments_change" class="comments_change"></textarea></div>
    
    <div style="position:absolute;top:300;left:0"><b>n. </b>Please feel free to make any additional comments. Thank you!</div>
    <div style="position:absolute;top:327;left:20"><textarea name="comments_additional" class="comments_additional"></textarea></div>
  </div>
</div>

<input type="submit" value="SUBMIT!!" class="submit" />
</form>
</div>
</body>
</html>  