/*
MySQL Data Transfer
Source Host: localhost
Source Database: mylogin
Target Host: localhost
Target Database: mylogin
Date: 9/22/2015 6:44:31 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for active_guests
-- ----------------------------
CREATE TABLE `active_guests` (
  `ip` varchar(15) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for active_users
-- ----------------------------
CREATE TABLE `active_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for banned_users
-- ----------------------------
CREATE TABLE `banned_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for users
-- ----------------------------
CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) default NULL,
  `userid` varchar(32) default NULL,
  `userlevel` tinyint(1) unsigned NOT NULL,
  `email` varchar(50) default NULL,
  `timestamp` int(11) unsigned NOT NULL,
  `parent_directory` varchar(30) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `active_guests` VALUES ('127.0.0.1', '1442975449');
INSERT INTO `users` VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3', '2044310123b1991abcc1bbaa6d542825', '9', 'arman@3g.com', '1442975081', 'admin');
INSERT INTO `users` VALUES ('master1', 'd5802d05bbf0881de2fd823c9560619e', 'a516e723c2eb32fc93402206d8327ad2', '8', 'master1@3g.com', '1442974264', 'admin');
INSERT INTO `users` VALUES ('master1agent1', 'bc6a6d13b10264fa960eddb401342243', '208413dbac8039b518be9f4cb40452af', '1', 'master1agent1@3g.com', '1442974298', 'master1');
INSERT INTO `users` VALUES ('master1agent1member1', '77e8ca40094f38029e99f8e9b6b6edf7', 'ad1988fbb51db1a4dd1310284e1f8954', '2', 'master1agent1member1@3g.com', '1442912022', 'master1agent1');
INSERT INTO `users` VALUES ('master1agent1member2', '6cea8991d4a932fce929f81299d73070', '0', '2', 'master1agent1member2@3g.com', '1442911991', 'master1agent1');
INSERT INTO `users` VALUES ('master1agent2', '66323d3087956e162291cafca8c223ee', '0', '1', 'master1agent2@gmail.com', '1442911821', 'master1');
INSERT INTO `users` VALUES ('master2', '5b9de42bf3fa2534e0d7ae695b12aeab', '91fc9ab68b46a7d1e72fec74246e1d5f', '8', 'master2@3g.com', '1442974483', 'admin');
INSERT INTO `users` VALUES ('master2agent1', '99d66c305f3583738a0889ce4b7cee8e', '5568461648ee8ad472d061f66182e370', '1', 'master2agent@3g.com', '1442974524', 'master2');
INSERT INTO `users` VALUES ('master2agent1member1', 'b882179ce34767d621fc4425b761ae20', '0', '2', 'master2agent1member1@3g.com', '1442974512', 'master2agent1');
INSERT INTO `users` VALUES ('master2agent2', '3b04cb6eac6b48e7520523932f5f885f', '0', '1', 'master2agent2@3g.com', '1442974456', 'master2');
INSERT INTO `users` VALUES ('master3', '2925bf35562c4def8fc90dc08a74c6a3', '689de9d2e01c7c389e3be3bdfe9783e5', '8', 'master3@3g.com', '1442975143', 'admin');
INSERT INTO `users` VALUES ('master3agent1', 'b72af00c5cd73f6957ba2b4ac6427884', 'fefb28cd0ca731c342b5a26e43e529cc', '1', 'master3agent1@3g.com', '1442975214', 'master3');
INSERT INTO `users` VALUES ('master3agent1member1', '4083f8801b76dfb9c1cdfc4bcbbe8062', '0', '2', 'master3agent1member1@3g.com', '1442975176', 'master3agent1');
INSERT INTO `users` VALUES ('master3agent1member2', '489994b84e78ce3ce87a14b806c61e4f', '0', '2', 'master3agent1member2@3g.com', '1442975198', 'master3agent1');
INSERT INTO `users` VALUES ('master3agent2', 'e61cfc028842d595e476d268639f5fb6', '0', '1', 'master3agent2@3g.com', '1442975136', 'master3');
INSERT INTO `users` VALUES ('master4', '5d89b98df6b9ed356f5bb3278a6aca7d', '796aad907bc9c85fc8b2b5168bbdaf39', '8', 'master4@3g.com', '1442975284', 'admin');
INSERT INTO `users` VALUES ('master4agent1', '77b03996fddf7cd26eb20a8467d7b243', '6e87896380fa39f163c76d03202bf672', '1', 'master4agent1@3g.com', '1442975357', 'master4');
INSERT INTO `users` VALUES ('master4agent1member1', '3092c8c2749810f453bc7cdfd8798182', '0', '2', 'master4agent1member1@3g.com', '1442975328', 'master4agent1');
INSERT INTO `users` VALUES ('master4agent1member2', 'e89efc28ddaf3fd62c30cad524575566', '0', '2', 'master4agent1member2@3g.com', '1442975341', 'master4agent1');
INSERT INTO `users` VALUES ('master4agent2', 'acd2362781f529ea59dba3a37d2eae71', '0', '1', 'master4agent2@3g.com', '1442975263', 'master4');
