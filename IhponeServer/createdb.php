<?php
//密名用户表

//公告表
"create table userList (id int(10)  primary  key auto_increment,userName VARCHAR (20) UNIQUE ,password VARCHAR (100),chinaName VARCHAR (50),groudId VARCHAR (10),powerJson VARCHAR (255),objectGround VARCHAR (2),TTime VARCHAR (15)) engine =innodb default character SET utf8";
//项目表
"create table objectS (id int(10)  primary  key auto_increment,title VARCHAR (20),timeS VARCHAR (20)) engine =innodb default character SET utf8";
//资源服务器列表
"create table fileServer(id int(10) primary  key auto_increment,describeStr VARCHAR (225),netUrl VARCHAR (100),port VARCHAR (10)) engine =innodb default character SET utf8";
//服区列表 ObjectId && Style && GameServerUnid && ServerTitle && OpenTime && NetUrl && GamePort && DBType && DBPort && DBUser && DBPassword && DBGameName && DBLogName && TelnetPort && ChatPort && FileServerId && OpenType && PayType
"create table gameServer (id int(10) primary  key auto_increment,ObjectId VARCHAR (10),Style VARCHAR (2),GameServerUnid VARCHAR (20) UNIQUE ,ServerTitle VARCHAR (255),OpenTime VARCHAR (20),NetUrl VARCHAR (200),GamePort VARCHAR (10),DBType VARCHAR (30),DBPort VARCHAR (10),DBUser VARCHAR (20),DBPassword VARCHAR (100),DBGameName VARCHAR (100),DBLogName VARCHAR (100),TelnetPort VARCHAR (10),ChatPort VARCHAR (10),FileServerId VARCHAR (100),OpenType VARCHAR (2),PayType VARCHAR (2)) engine =innodb default character SET utf8";
//元宝申请
"create table AcerApply( id int(10) primary  key auto_increment,objectId VARCHAR (10),serverIndex VARCHAR (3),serverUnid VARCHAR (10),roleS VARCHAR (255),message VARCHAR (255),number VARCHAR (10),isBind CHAR (1),isReward VARCHAR (1),ApplyTime CHAR(15),ApplyName VARCHAR (30),inspectName VARCHAR (30),inspectTime CHAR(15),state CHAR (1))  engine =innodb default character SET utf8";
//禁言
"create table GagList( id int(10) PRIMARY  KEY  auto_increment,serverIndex int(10),roleS VARCHAR (255),message VARCHAR (255),time CHAR (20),CTime CHAR (20),state int(2))  engine =innodb default character SET utf8";
// 封号
"create table BanNumber( id int(10) PRIMARY  KEY  auto_increment,serverIndex int(10),roleS VARCHAR (255),message VARCHAR (255),CTime CHAR (20),sendState int(2),serverUnid VARCHAR (10),userName VARCHAR (20),BanState int (2))  engine =innodb default character SET utf8";

//日志表
"create table DoingLog( id int(10) PRIMARY  KEY  auto_increment,userName VARCHAR (50),className VARCHAR (100),userIp VARCHAR (100),sendType VARCHAR (10),tTime VARCHAR (15),whereAddress VARCHAR (110))  engine =innodb default character SET utf8";
//公告发布
"create table NoticeList(id int(10) PRIMARY  KEY  auto_increment,serverIndex int(10),title VARCHAR (255),message VARCHAR (255),startDay VARCHAR (20),timeNumber int(10),timeLong int(10),sendNum int(10),timerId int(10)) engine =innodb default character SET utf8";
//收到的Mac
"create table ReveiveMAC(id int(10) PRIMARY  KEY  auto_increment,serverId int(10),macInt VARCHAR (100),CTime VARCHAR (20)) engine =innodb default character SET utf8";


"select aa.PlayerID,aa.PlayerName,aa.SendIP,aa.SendTime,aa.NeTCardSN,aa.MsgID,bb.SendIP from dbo.ChartLog_2016_03_01 as aa LEFT  JOIN (select PlayerID,PlayerName,SendIP,SendTime,NeTCardSN,MsgID from dbo.LogMsg) as bb on aa.SendIP=bb.SendIP  where bb.SendIP is not null";
//踢人下线记录
"create table UserOfflineLog(id int(10) PRIMARY  KEY  auto_increment,serverUNID int(10),roleS VARCHAR (200),CTime CHAR(20)) engine =innodb default character SET utf8";
//聊天敏感
"create table TalkKey (id int(10) PRIMARY  KEY  auto_increment,keyStr VARCHAR (255) UNIQUE )engine=myisam default character SET utf8";
//
"alter table IhponeServer.userList add UFromIdmId varchar(10)";
"alter table IhponeServer.userList add UFromIdmName varchar(30)";
//
"alter table IhponeServer.userList add UFromIdsId varchar(50)";
"alter table IhponeServer.userList add UFromIdsName varchar(30)";

//mac唯一地址
"create table UniqueMAC (id int(10) PRIMARY  KEY  auto_increment,macInt VARCHAR (100) not NULL UNIQUE ,fromIdm VARCHAR (30),CTime VARCHAR (20),dayStringKey VARCHAR (20))engine=myisam default character SET utf8"

?>