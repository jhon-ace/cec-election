LOAD DATA LOCAL INFILE "C://Users/ACE/Desktop/boats.csv" INTO TABLE boatdb.boats
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(id, name, type, owner_id, @datevar, rental_price)
set date_made = STR_TO_DATE(@datevar,'%m/%d/%Y');





LOAD DATA LOCAL INFILE "C://Users/ACE/Desktop/students.csv" INTO TABLE election.students
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(id, stud_id, stud_lastname, stud_firstname, stud_middlename, stud_department, stud_year, code_to_vote, stud_status, voting_status, stud_block_status);



LOAD DATA LOCAL INFILE "C://xampp/htdocs/election/csv_file_final_srhigh/students.csv" INTO TABLE election.students
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(id, stud_id, stud_lastname, stud_firstname, stud_middlename, stud_department, stud_year, code_to_vote, stud_status, voting_status, stud_block_status);


LOAD DATA LOCAL INFILE "C://xampp/htdocs/election/college_csv_file/students.csv" INTO TABLE election.students
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(id, stud_id, stud_lastname, stud_firstname, stud_middlename, stud_department, stud_year, code_to_vote, stud_status, voting_status, stud_block_status);

LOAD DATA LOCAL INFILE "C://xampp/htdocs/election/csv_file_final_srhigh/students.csv" INTO TABLE election.students
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(id, stud_id, stud_lastname, stud_firstname, stud_middlename, stud_department, stud_year, code_to_vote, stud_status, voting_status, stud_block_status);




LOAD DATA LOCAL INFILE "C://xampp/htdocs/election/csv_file_final_srhigh/students.csv" INTO TABLE election.students
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(id, stud_id, stud_lastname, stud_firstname, stud_middlename, stud_department, stud_year, code_to_vote, stud_status, voting_status, stud_block_status, logout_status);