
CREATE TABLE customers (
  `id` int(11) NOT NULL PRIMARY KEY auto_increment,
   photo blob;
  `givenname` varchar(20) NOT NULL,
  `surname` varchar(23) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `occupation` varchar(70) NOT NULL,
  `streetaddress` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(22) NOT NULL,
  `postal_code` varchar(15) NOT NULL
  `emailaddress` varchar(100) NOT NULL,
  `telephonenumber` tinytext NOT NULL
);
insert into customers values('1','Rese','Ruffner','male','Software Developer','4446 St. Paul Street','St Catharines','ON','L2S 4A1','ReseMRuffner@pookmail.com','905-401-7824');
insert into customers values('2','Jacky','Bradbury','female','Rigging slinger','777 rue des Églises Est','Ste Cecile De Masham','QC','J0X 2W0','JackyABradbury@spambob.com','819-456-6014');
insert into customers values('3','Heleanore','Sanders','female','Fire inspector','1145 47th Avenue','Grassland','AB','T0A 2V0','HeleanoreRSanders@spambob.com','780-525-6148');
insert into customers values('4','Jerf','Craig','male','Job service specialist','1513 Reserve St','Baillieboro','ON','K0L 3B0','JerfSCraig@pookmail.com','705-939-9680');
insert into customers values('5','Daniel','Mason','male','IT Specialist','238 Brant Ave','Assumption','AB','T1T 3T1','DanielGMason@trashymail.com','780-321-1544');
insert into customers values('6','Carolina','Jamar','female','Computer Programmer','3590 Duke Street','Montreal','QC','H3C 7K4','CarolinaJJamar@dodgit.com','514-260-3407');

Select * from customers;
