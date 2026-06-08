<?php
require_once 'db-config.php';

$sql = "select count(*) as stu_num from students WHERE address='Mothijheel'";
$sql = "select sum(score) total_score from results";
$sql = "
select r.student_id, s.full_name, r.score 
from results r, students s 
where r.exam_type = 'Mid-2' and r.student_id = s.id and 
r.score = (select max(score) from results WHERE exam_type = 'Mid-2')
";
$sql = "select avg(price) from products";
$sql = "select avg(score) from results where exam_type = 'Mid-2'";
$sql = "select exam_type, avg(score) avg_score from results group by exam_type order by exam_type desc";

?>
