DELETE FROM `checking`;
INSERT INTO `checking` (`checkId`,`userId`,`checkIn`,`checkOut`,`hostelId`)
VALUES
(1,1,"20/11/19","25/11/19",1),
(2,2,"30/11/19","08/12/19",2),
(3,3,"01/12/19","02/12/19",3),
(4,4,"04/12/19","07/12/19",4),
(5,5,"05/12/19","15/12/19",5),
(6,6,"15/12/19","25/12/19",6),
(7,7,"16/12/19","20/12/19",7),
(8,8,"23/12/19","25/12/19",8),
(9,9,"01/01/20","10/01/20",9),
(10,10,"10/01/20","14/01/20",10);
        
DELETE FROM `faq`;
INSERT INTO `faq` (`faqId`,`question`,`answer`,`priority`)
VALUES (1,"auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa","interdum feugiat.",3),(2,"morbi tristique senectus et","nunc sed libero. Proin sed turpis nec mauris blandit",3),(3,"interdum enim non nisi. Aenean eget metus. In nec","ridiculus mus. Proin vel nisl. Quisque fringilla",1),(4,"a, auctor non, feugiat nec, diam. Duis","Donec egestas. Duis ac arcu. Nunc mauris. Morbi non",3),(5,"placerat. Cras","Donec est",3),(6,"non enim commodo hendrerit. Donec","sagittis lobortis mauris.",2),(7,"semper egestas, urna justo faucibus lectus,","dignissim magna a tortor. Nunc",2),(8,"facilisis, magna tellus faucibus","Sed eget lacus. Mauris",2),(9,"arcu.","magna sed dui. Fusce",3),(10,"vulputate velit","euismod in, dolor. Fusce feugiat. Lorem ipsum dolor",3);

DELETE FROM `forum`;
INSERT INTO `forum` (`forumId`,`forumName`) 
VALUES (1,"forum numero 1"), (2,"forum numero 2"),(3,"forum numero 3"), (5,"forum numero 5"), (6,"forum numero 6"), (7,"forum numero 7"), (8,"forum numero 8"), (9,"forum numero 9"), (10,"forum numero 10"), (4,"forum numero 4");

DELETE FROM `hostel`;
INSERT INTO `hostel` 
(`hostelName`,`hostelStars`,`hostelId`,`add_postCode`,`add_number`,`add_streetName`,`add_country`,`coo_lat`,`coo_long`,`phone`,`email`,`pool`,`valet`,`roomService`,`touristTaxes`,`isDeleted`,`forumId`) 
VALUES 
("Sit Amet Industries",3,1,"2395",301,"Ap #994-8950 Dui. Avenue","Andorra","-12.68569","-23.79695","00334 39 11 18 91","laoreet.lectus.quis@maurisMorbi.com","1","1","1",7,"0",1),("Tempor Lorem Eget Corp.",5,2,"A71 5NG",310,"898-7999 Elementum, St.","Tanzania","-89.31681","172.477","00338 62 47 37 89","dictum@malesuadafamesac.net","1","1","1",5,"0",2),
("Tortor At Risus PC",5,3,"56873",552,"Ap #848-259 Hendrerit Rd.","Yemen","9.35313","160.06037","00336 74 62 36 08","facilisis.Suspendisse.commodo@luctus.org","1","1","1",7,"0",3),("Cursus Vestibulum Institute",5,4,"273046",589,"637-1479 Et Avenue","Tunisia","41.91041","-27.13483","00339 42 22 76 87","venenatis.lacus.Etiam@nonummyipsum.com","1","1","1",7,"0",4),
("Auctor Industries",2,5,"76456",621,"617 Morbi St.","Thailand","-89.90333","30.7262","00335 74 43 10 70","Class@nascetur.ca","1","1","1",5,"0",5),
("Parturient Company",2,6,"38737",124,"Ap #580-9472 Quis, Road","Curaçao","-39.19013","23.39703","00339 51 05 51 08","pede.Cum@nullaCraseu.org","1","1","1",7,"0",6),
("Vulputate Ullamcorper Magna Limited",3,7,"579773",639,"P.O. Box 943, 237 Proin St.","Tuvalu","17.55356","84.69438","00334 77 26 55 44","natoque@consequat.edu","1","1","1",6,"0",7),
("Nulla Dignissim Maecenas Limited",5,8,"484161",357,"5381 Imperdiet Av.","Syria","52.89302","-51.65803","00338 07 19 67 51","Aenean@egettinciduntdui.com","1","1","1",10,"0",8),
("Sed Associates",4,9,"61205",582,"Ap #321-7874 Semper. St.","Botswana","-62.37058","147.41574","00339 89 82 40 41","ante.dictum.cursus@Integerid.edu","1","1","1",5,"0",9),
("Vehicula Et Rutrum Incorporated",5,10,"15-391",45,"494-3913 Augue. Av.","Fiji","-48.61424","-177.44469","00336 56 20 64 34","sit.amet.dapibus@Cras.com","1","1","1",8,"0",10);


DELETE FROM `message`;
INSERT INTO `message` 
(`messageContent`,`postDate`,`messageId`,`userId`,`subjectId`,`isActive`) 
VALUES 
("Lorem ipsum dolor","21/10/18",1,1,1,"1"),
("Lorem ipsum dolor sit amet, consectetuer","28/09/19",2,2,2,"1"),
("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.","10/03/20",3,3,3,"1"),
("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed","17/03/19",4,4,4,"1"),
("Lorem","02/12/18",5,5,5,"1"),("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur","05/05/20",6,6,6,"1"),
("Lorem ipsum dolor sit amet,","21/08/19",7,7,7,"1"),("Lorem ipsum","21/06/20",8,8,8,"1"),
("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.","08/10/18",9,9,9,"0"),
("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.","06/01/20",10,10,10,"0");

DELETE FROM `picture`;
INSERT INTO `picture` (`pictureId`,`roomId`,`picturePath`) 
VALUES 
(1,1,"https://images.pexels.com/photos/1838554/pexels-photo-1838554.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(2,1,"https://images.pexels.com/photos/275845/pexels-photo-275845.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(3,2,"https://images.pexels.com/photos/2507010/pexels-photo-2507010.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(4,2,"https://images.pexels.com/photos/2467285/pexels-photo-2467285.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(5,2,"https://images.pexels.com/photos/262048/pexels-photo-262048.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(6,2,"https://images.pexels.com/photos/2736388/pexels-photo-2736388.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(7,3,"https://images.pexels.com/photos/271619/pexels-photo-271619.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(8,3,"https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(9,4,"https://images.pexels.com/photos/2029719/pexels-photo-2029719.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(10,5,"https://images.pexels.com/photos/210604/pexels-photo-210604.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(11,5,"https://images.pexels.com/photos/2507016/pexels-photo-2507016.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(12,6,"https://images.pexels.com/photos/2775320/pexels-photo-2775320.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(13,7,"https://images.pexels.com/photos/237393/pexels-photo-237393.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(14,7,"https://images.pexels.com/photos/2725675/pexels-photo-2725675.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(15,8,"https://images.pexels.com/photos/210604/pexels-photo-210604.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(16,8,"https://images.pexels.com/photos/2290753/pexels-photo-2290753.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(17,8,"https://images.pexels.com/photos/1457847/pexels-photo-1457847.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(18,9,"https://images.pexels.com/photos/2134224/pexels-photo-2134224.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(19,9,"https://images.pexels.com/photos/1028379/pexels-photo-1028379.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(20,9,"https://images.pexels.com/photos/280121/pexels-photo-280121.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(21,9,"https://images.pexels.com/photos/189293/pexels-photo-189293.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(22,10,"https://images.pexels.com/photos/545012/pexels-photo-545012.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(23,10,"https://images.pexels.com/photos/279652/pexels-photo-279652.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(24,10,"https://images.pexels.com/photos/1030834/pexels-photo-1030834.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"),
(25,10,"https://images.pexels.com/photos/221457/pexels-photo-221457.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");

DELETE FROM `option`;
INSERT INTO `option`(`optionId`, `optionName`, `optionPrice`, `isPossible`) 
VALUES 
(1,"WIFI",10,1), 
(2,"breakfast",20,1),
(3,"petsAllowed",15,1),
(4,"airConditionner",15,1),
(5,"TV",15,1);

DELETE FROM `existanceoptionroomtype`;
INSERT INTO `existanceoptionroomtype`(`optionId`, `roomTypeId`) 
VALUES 
(1,1),
(1,2),
(1,3),
(2,3),
(3,3),
(3,2),
(4,1),
(4,2),
(4,3),
(5,3),
(5,2),
(5,1);

DELETE FROM `adds`;
INSERT INTO `adds`
(`optionId`, `reservationId`)
VALUES 
(1,1),
(1,10),
(2,9),
(3,5),
(4,8),
(1,7),
(1,9);

DELETE FROM `price`;
INSERT INTO `price`(`priceId`, `value`, `roomTypeId`, `seasonId`) 
VALUES 
(1,50,1,1), 
(2,100,1,2), 
(3,150,1,3), 
(4,100,2,1), 
(5,150,2,2), 
(6,200,2,3), 
(7,150,3,1), 
(8,200,3,2), 
(9,250,3,3);

DELETE FROM `reservation`;
INSERT INTO `reservation` 
(`reservationId`,`startDate`,`endDate`,`insurance`,`isCancelled`,`childrenQuantity`,`adultQuantity`,`totalPrice`,`roomId`,`userId`) 
VALUES 
(1,"06/10/18","19/10/12","1","1",1,2,248,9,4),
(2,"11/11/19","18/11/04","1","1",3,3,603,2,8),
(3,"28/10/04","12/02/06","1","1",4,2,166,8,3),
(4,"17/08/07","15/06/08","0","0",1,2,514,6,5),
(5,"01/12/05","29/09/11","0","0",0,2,643,4,10),
(6,"20/11/18","02/01/09","0","0",2,4,679,1,7),
(7,"31/07/19","25/09/18","1","1",1,1,257,2,7),
(8,"16/07/10","24/01/08","1","1",1,1,828,7,10),
(9,"10/06/14","18/03/05","1","1",1,3,697,6,4),
(10,"30/09/05","30/11/07","0","0",2,4,230,7,8);

DELETE FROM `review`;
INSERT INTO `review` (`reviewId`,`reviewStars`,`comment`,`isApproved`,`userId`,`roomId`)
VALUES (1,3,"Très belle chambre par contre moyen pour la tache de pisse sur le lit",1,1,1);

DELETE FROM `role`;
INSERT INTO `role` (`roleId`,`roleName`)
VALUES (1,"Client"),(2,"Admin"),(3,"Moderator");

DELETE FROM `room`;
INSERT INTO `room` (`roomId`,`roomName`,`shortDescription`,`longDescription`,`childrenCapacity`,`adultCapacity`,`bathroomQuantity`,`toiletQuantity`,`balcony`,`deleteDate`,`isDeleted`,`roomTypeId`,`hostelId`)
VALUES (1,"Chambre Picasso","Chambre avec un seul lit","Chambre face à la mer et c'est super cool et chouette et belle vue et lorem",2,1,1,2,"0",null,"0",1,24);

DELETE FROM `room_type`;
INSERT INTO `room_type` (`roomTypeId`,`roomTypeName`)
VALUES (1,"Single"),(2,"Double"),(3,"Master Suite");

DELETE FROM `season`;
INSERT INTO `season` (`seasonId`,`seasonName`,`startDate`,`endDate`)
VALUES (1,"Basse saison","01/10","31/01"), (2,"Moyenne saison","01/02","31/05"), (3,"Haute saison","01/06","31/09");

DELETE FROM `subject`;
INSERT INTO `subject` (`subjectId`,`subjectTitle`,`subjectContent`,`isActive`,`postDate`,`forumId`,`userId`) 
VALUES 
(1,"test 1", "content 1", "1", "11/12/16",1 ,1),
(2,"test 2", "content 2", "2", "11/12/16",2 ,2),
(3,"test 3", "content 3", "3", "11/12/16",3 ,3),
(4,"test 4", "content 4", "4", "11/12/16",4 ,4),
(5,"test 5", "content 5", "5", "11/12/16",5 ,5),
(6,"test 6", "content 6", "6", "11/12/16",6 ,6),
(7,"test 7", "content 7", "7", "11/12/16",7 ,7),
(8,"test 8", "content 8", "8", "11/12/16",8 ,8),
(9,"test 9", "content 9", "9", "11/12/16",9 ,9),
(10,"test 10", "content 10", "10", "11/12/16",10 ,10);

DELETE FROM `user`;
INSERT INTO `user` (`userId`,`firstName`,`lastName`,`email`,`country`,`phone`,`password`,`roleId`)
VALUES 
(1,"Lance","Aiko","a.odio.semper@netusetmalesuada.org","Maldives","0496512341","testpassword",1), 
 (2,"Elias","Le Champion","elias@netusetmalesuada.org","Belgique","04965000141","testpassword",1), 
  (3,"Kloe","La freeky Control","kloe@gmail.org","Belgique","0478000141","testpassword",1), 
 (5,"Sterio","La moustatche","strio@gmail.com","Belgique","0478000141","testpassword",2), 
 (6,"Brigitte","La mauvaise","brigitte@gmail.com","Belgique","0478000141","testpassword",2),
 (7,"Ahmed","Candidat","ahmed@gmail.com","Belgique","0478000141","testpassword",2),
  (8,"Stephan","Champagne","stef@gmail.com","Belgique","0478000141","testpassword",1),
  (9,"Omar","Toutsourir","omar@gmail.com","Belgique","0478000141","testpassword",1),
(10,"Christophe","lefevre","chris@gmail.com","Belgique","0478000141","testpassword",1);