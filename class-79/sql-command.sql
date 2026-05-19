drop table student_logs;
create table if not exists student_logs(
    id int unsigned auto_increment primary key,
    student_id int, 
    status varchar(20),
    time timestamp
);

-- Trigger --
drop trigger if exists add_student;
create trigger add_student
after insert on students
for each row
insert into student_logs(student_id,status,time)
values(new.id,"Added",now());

insert into students(full_name,email)
values("Redoy","redoy@mail.com");

create trigger if not exists modify_student 
after update on students 
for each row 
insert into student_logs(student_id,status,time)
values(old.id,"Updated",now());

update students 
set full_name="Redoy 70", email="doy@mail.com"
where id = 13;

drop trigger if exists remove_student;
create trigger remove_student 
after delete on students 
for each row 
insert into student_logs(student_id,status,time)
values(old.id,"Deleted",now());