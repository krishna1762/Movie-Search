# playlist
I have have complete this peoject on my Database Course. In this project any user can register by using their email address and they can collect their fovourate song or any video link from youtoube embeded link and they can play those song on our website. finaly if user want he/she can share those playList with their relatives or friends by using a SHARE CODE provided by Website.

WHat Is Used ???

    Booststrap
    html5
    css3
    javascript
    
    
    PHP (Not OOP)
    MYSQLI
  
  
  
   I have use 1 database and 3 table
       first table: user

           CREATE TABLE `user` (
          `id` int(100) NOT NULL,
          `name` varchar(100) NOT NULL,
          `username` varchar(100) NOT NULL,
          `password` varchar(100) NOT NULL,
          `email` varchar(100) NOT NULL
          )


      second table :

           CREATE TABLE `filelist` (
          `id` int(11) NOT NULL,
          `user_id` int(11) NOT NULL,
          `title` varchar(255) NOT NULL,
          `catagory` varchar(100) NOT NULL,
          `file` text NOT NULL,
          `playcount` int(100) NOT NULL
           )


       3rd table :

           CREATE TABLE `shareinfo` (
          `shareid` int(100) NOT NULL,
      `    user_id` int(100) NOT NULL,
      `    share_code` varchar(100) NOT NULL,
      `    value` int(1) NOT NULL
           ) 

  Details about the project: https://www.youtube.com/watch?v=j-UoCgVZ61Y&feature=youtu.be
   
    
    
    
    
    
