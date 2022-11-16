CREATE TABLE Aircraft (
id 	int(11)	NULL, 	  	 
acType 	varchar(10)	NULL, 	  	 
acWakeTurb 	varchar(2)	NULL, 	  	 
acName 	varchar(200)	NULL   
);


	  	 

CREATE TABLE User (
id 	int(11)	NULL, 	  	 
name 	varchar(50)	NULL, 	  	 
surname 	varchar(50)	NULL, 	  	 
login 	varchar(50)	NULL, 	  	 
password 	varchar(200)	NULL, 	  	 
email 	varchar(50)	NULL
);	 


CREATE TABLE Flight (
id 	int(11)	NULL, 	  	 
status 	int(11)	NULL, 	  	 
arcid 	varchar(10)	NULL, 	  	 
rule 	char(1)	NULL, 	  	 
acType 	int(11)	NULL, 	  	 
adep 	varchar(4)	NULL, 	  	 
ades 	varchar(4)	NULL, 	  	 
eet 	int(11)	NULL, 	  	 
dof 	date	NULL, 	  	 
flevel 	varchar(5)	NULL, 	  	 
speed 	varchar(5)	NULL, 	  	 
route 	text	NULL, 	  	 
remark 	text	NULL, 	  	 
userId 	int(11)	NULL 	  	 
);



CREATE TABLE FlightMsg(
id int( 11 ) NULL ,
flightId int( 11 ) NULL ,
insDateTime timestamp,
msgTxt text NULL
)