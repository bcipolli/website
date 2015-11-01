<?php
  $KNOWN_SECTIONS = Array('TA_info', 'TA_perf', 'student_info', 'comments');
  $KNOWN_FIELDS = Array( 'TA_info' => 
                              Array( 'TA_name',
                                'course_number',
                                'section_time',
                                'quarter',
                                'year'),
                            'TA_perf' =>
                              Array( 'TA_perf_organization',
                                'TA_perf_knowledge',
                                'TA_perf_clarity',
                                'TA_perf_q_and_a',
                                'TA_perf_student_participation',
                                'TA_perf_interaction',
                                'TA_perf_effectiveness'),
                            'student_info' =>
                              Array( 'attendance_lecture',
                                'attendance_section',
                                'study_hours',
                                'maj_specialization',
                                'min_major',
                                'gen_req_major',
                                'gen_int_major',
                                'time_review_lecture',
                                'time_review_homework',
                                'time_prep_homework',
                                'time_new_material',
                                'time_with_individuals',
                                'time_other_comment',
                                'time_other'),
                            'comments' =>
                              Array( 'comments_liked',
                                'comments_change',
                                'comments_additional' )
                          );

  $ALL_FIELDS = Array();
  foreach($KNOWN_SECTIONS as $sectionKey)
    $ALL_FIELDS = array_merge($ALL_FIELDS, $KNOWN_FIELDS[$sectionKey]);
?>