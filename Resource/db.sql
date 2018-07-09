create database reply_mark default charset utf8 collate = utf8_general_ci;
create table login
(
	id mediumint unsigned not null auto_increment comment 'id',
	user_id mediumint unsigned not null comment '用户id',
	user_name varchar(30) not null comment '用户的姓名',
	user_type varchar(10) not null comment '用户类型 l:学生，2：老师',
	is_valid varchar(10) not null default '1' comment '是否有效 1:有效,0：无效',
	role_id
	class_id mediumint comment '班级id',
	primary key(id),
	key user_id(user_id)  
)engine = MyISAM comment '是否是有效用户表';
alter table login add class_id mediumint not null comment '班级id';
alter table login add role_id mediumint not null comment '角色id'
加入字段：alter table is_valid add user_name varchar(30) not null comment '用户的姓名';
修改字段类型: alter table login modify column class_id mediumint comment '班级id'; 
alter table is_valid modify column user_id varchar(30); 
插入数据:insert into is_valid values('1', '1410020031','1', '颜孙达','1');
insert into is_valid values('2', '测试', '1','测试学生', '1');
insert into is_valid values('3', '测试', '2','测试老师', '1');
修改表名:alter table topic rename title;
修改字段名字：alter table title_report change tatus status varchar(10) default 1 comment '审核状态 1:审核中,2:审核通过,3:审核未通过';

create table title
(
	id mediumint unsigned not null auto_increment comment 'id',
	title tinytext not null comment '论文题目，最多255个字符',
	mainContent text not null comment '主要内容',
	request text not null comment '论文要求', 
	addtime timestamp not null default current_timestamp on update current_timestamp  comment '添加时间',
	join_number tinyint unsigned not null comment '参与人数',
	subject varchar(30) not null comment '适用专业',
	isvalid varchar(10) not null default 1 comment '是否有效',
	primary key(id)
)engine = InnoDB comment '题目表';
alter table title modify column isvalid varchar(10) default 1 comment '是否有效';
insert into title (id, title,mainContent,request,join_number,subject,isvalid) values(2,'企业网络的设计与配置管理','1.基于RIP、OSPF、IS-IS、BGP、IPv6及路由策略控制的大规模路由设计与配置管理
2.基于VLAN、STP（RSTP、MSTP）、RRPP、VRRP、IRF及链路聚合的高性能园区网络设计与配置管理
3.支持SNMP、镜像管理、二层、三层组播技术的园区网络管理设计与配置管理
4.基于VPN （PPTP、L2TP、GRE、IPSec、SSL）、NAT、SSH、端口接入控制、QoS 策略、AAA认证及防火','1.掌握计算机网络技术、通信原理及信息安全等相关的基础理论知识、基本方法与基本技能，具有网络系统分析、设计、实施及项目管理等综合应用能力，具备一定工程素养、工程实践能力及较好团队合作精神
2.具备IP地址规划、大规模网络路由、高性能园区网络、安全防火墙系统、服务器系统集成等设计、部署技能',4,'网本','0');
alter table check_title add addtime timestamp not null default current_timestamp on update current_timestamp  comment '审核时间'
create table check_title
(
	id mediumint unsigned not null auto_increment comment 'id',
	user_id varchar(30) not null comment '提交审核的用户id',
	submit_user_name varchar(30) comment '申请人的姓名',
	title_id mediumint unsigned not null comment '文章id',
	status varchar(10) default 1 comment '审核状态 1:审核中,2:审核通过,3:审核未通过',
	submit_cause text not null comment '提交原因',
	check_cause text comment '审核原因 主要是未通过的原因',
	addtime timestamp not null default current_timestamp on update current_timestamp  comment '审核时间',
	check_time varchar(20) comment '审核时间',
	check_id varchar(30) comment '审核用户id',
	check_user_name varchar(30) comment '用户的姓名'
	isvalid varchar(10) not null default 1 comment '是否有效',
	primary key(id)
)engine = InnoDB comment '论文题目审核表';

alter table check_title modify column status varchar(10) default 1 comment '审核状态 1:审核中,2:审核通过'
alter table check_title add check_time varchar(20) comment '审核时间'
alter table check_title add check_id varchar(30) comment '审核用户id';
alter table check_title add check_user_name varchar(30) comment '用户的姓名';
alter table check_title add submit_user_name varchar(30) comment '申请人的姓名';

create table title_report
(
	id mediumint unsigned not null auto_increment comment 'id',
	user_id varchar(30) not null comment '提交开题报告的用户id',
	submit_user_name varchar(30) comment '提交开题报告的姓名';
	title_id mediumint unsigned not null comment '文章id',
	submit_cause text not null comment '提交原因 主要是备注',
	check_cause text comment '审核原因 主要是未通过的原因',
	status varchar(10) default 1 comment '审核状态 1:审核中,2:审核通过,3:审核未通过',
	addtime timestamp not null default current_timestamp on update current_timestamp  comment '审核时间',
	check_time varchar(20) comment '审核时间',
	check_id varchar(30) comment '审核用户id',
	check_user_name varchar(30) comment '用户的姓名',
	isvalid varchar(10) not null default 1 comment '是否有效',
	report_path varchar(100) not null comment '开题报告的路径',
	primary key(id)
)engine = InnoDB comment '开题报告审核表'; 


create table document
(
	id mediumint unsigned not null auto_increment comment 'id',
	user_id varchar(30) not null comment '提交文档用户id',
	submit_user_name varchar(30) comment '提交文档的姓名',
	filename varchar(100) not null comment '文档路径',
	addtime timestamp not null default current_timestamp on update current_timestamp  comment '审核时间',
	isvalid varchar(10) not null default 1 comment '是否有效',
	file_path varchar(100) not null comment '文档路径',
	college_id mediumint unsigned not null comment '学院id',
	primary key(id)
)engine = InnoDB comment '文档表'; 

create table college
(
	id mediumint unsigned not null auto_increment comment 'id',
	college_name varchar(30) not null comment '学院名字',
	addtime timestamp not null default current_timestamp on update current_timestamp  comment '审核时间',
	isvalid varchar(10) not ndull default 1 comment '是否有效',
	primary key(id)
)engine = InnoDB comment '学院表'; 

insert into college(id,college_name,isvalid) values('1','计算机学院', '1');
insert into college(id,college_name,isvalid) values('2','物理电子学院', '1');
alter table column document college_id mediumint comment '学院id';

create table resource
(
	id mediumint unsigned not null auto_increment comment 'id',
	name varchar(100) comment '资源名字',
	url varchar(100) comment '资源url',
	parent_id mediumint comment '父级id',
	isvalid varchar(10) not null comment '是否有效',
	primary key(id)
) engine = InnoDB comment '资源表';

alter table resource modify column name varchar(100) comment '资源名字'; 
insert into resource values('总资源','', '', '1');
alter table resource modify column parent_id mediumint comment '父级id';
alter table resource modify column url varchar(100) comment '资源url';


create table reply_group
(
	id mediumint unsigned not null auto_increment comment 'id',
	boss_name varchar(30) comment '答辩组长',
	secretary varchar(30) comment '答辩秘书',
	isvalid varchar(10) default '1' comment '是否有效',
	primary key(id)
) engine = InnoDB comment '答辩小组表';

alter table other_member add addtime timestamp not null default current_timestamp on update current_timestamp  comment '添加时间';
删除字段 alter table reply_group drop column other_member_id;
alter table other_member add reply_group_id mediumint unsigned not null comment '所属的答辩小组id',
create table other_member
(
	id mediumint unsigned not null auto_increment comment 'id',
	member_name varchar(30) comment '成员名字',
	isvalid varchar(10) default '1' comment '是否有效',
	reply_group_id mediumint unsigned not null comment '所属的答辩小组id',
	primary key(id)
) engine = InnoDB comment '其他成员表';


create table distribution
(
	id mediumint unsigned not null auto_increment comment 'id',
	user_id varchar(20) not null comment '学生id',
	reply_group_id mediumint comment '答辩小组id',
	isvalid varchar(10) default '1' comment '是否有效',
	addtime timestamp not null default current_timestamp on update current_timestamp  comment '审核时间',
	primary key(id)
) engine = InnoDB comment '学生答辩小组表';
select a.user_id,a.user_name,a.class_id,b.reply_group_id from login a left join 
distribution b on a.user_id = b.user_id where a.user_type = 1 and a.isvalid = 1;
create table my_file
(
	id mediumint unsigned not null auto_increment comment 'id',
	user_id varchar(20) not null comment '上传人id',
	user_name varchar(20) not null comment '上传人名字',
	isvalid varchar(10) default '1' comment '是否有效',
	file_path varchar(100) not null comment '文件存储路径',
	upload_name varchar(100) not null comment '文件刚开始上传的文件名',
	addtime timestamp not null default current_timestamp on update current_timestamp  comment '审核时间',
	primary key(id)
) engine = InnoDB comment '我的文件';


create table reply_document
(
	id mediumint unsigned not null auto_increment comment 'id',
	user_id varchar(30) not null comment '提交论文用户id',
	user_name varchar(30) comment '提交论文的姓名',
	upload_name varchar(100) not null comment '上传上去的名字',
	addtime timestamp not null default current_timestamp on update current_timestamp  comment '审核时间',
	isvalid varchar(10) not null default 1 comment '是否有效',
	file_path varchar(100) not null comment '论文路径',
	primary key(id)
)engine = InnoDB comment '论文表'; 

create table send_info
(
	id mediumint unsigned not null auto_increment comment 'id',
	send_user_id varchar(30) not null comment '发送用户id',
	send_user_name varchar(30) not null comment '发送用户姓名',
	accept_user_id varchar(30) not null comment '接收用户id',
	accept_user_name varchar(30) not null comment '接收用户名字',
	content text not null comment '发送内容',
	index(send_user_id),
	index(accept_user_id),
	addtime timestamp not null default current_timestamp on update current_timestamp  comment '发送时间',
	primary key(id)
)engine = InnoDB comment '';

create table class
(
	id mediumint unsigned not null auto_increment comment 'id',
	class_name varchar(30) not null comment '班级id',
	addtime timestamp not null default current_timestamp on update current_timestamp  comment '发送时间',
	isvalid varchar(10) not null default '1',
	primary key(id)
)engine = InnoDB comment '班级表'; 


create table role
(
	id mediumint unsigned not null auto_increment comment 'id',

	role_name varchar(30) not null comment '角色名字',
	can_look_resource_ids varchar(100) not null comment '可以看的资源ids每个资源用‘，’隔开',
	addtime timestamp not null default current_timestamp on update current_timestamp  comment '发送时间',
	isvalid varchar(10) not null default '1',
	primary key(id)
)engine = InnoDB comment '角色表';

create table question
(
	id mediumint unsigned not null auto_increment comment 'id',
	title_id mediumint not null comment '标题id',
	title varchar(200) not null comment '论文题目',
	user_id mediumint not null comment '学生id',
	user_name varchar(30) not null coment '学生名字',
	teacher_id mediumint not null comment '老师id',
	teacher_name varchar(30) not null comment '老师名字',
	appraisal varchar(200) not null comment '总体评价',
	lunwen_grade varchar(10) not null comment '论文成绩',
	dabian_grade varchar(10) not null comment '答辩成绩',
	dabian_sign varchar(50) not null comment '答辩小组签名',
	zuzhang_sign varchar(10) not null comment '负责人签名',
	addtime timestamp not null default current_timestamp on update current_timestamp  comment '发送时间',
	isvalid varchar(10) not null default '1',
	primary key(id)
)engine = InnoDB comment '问题表'; 

create table question_link
(
	id mediumint unsigned not null auto_increment comment 'id',
	question_id mediumint not null
	isvalid varchar(10) not null default '1',
	grade  
)engine = InnoDB comment '关联表'; 
