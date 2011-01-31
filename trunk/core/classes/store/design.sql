#设计文档

#select 
    #feild 处理
    #where 处理
select table1.feild1 as table1_feild1, table1.feild2 as table1_feild2 from table1 where table1.feild1 = :table1_feild1 

#update
    #feild 处理
    #where 处理
update table1 set 
                table1.feild1 =  :table1_feild1,
                table1.feild2 =  :table1_feild2
            where
                table1.feild3 =  :table1_field3

#insert
    #value 处理
insert into table1(table1.feild1,table1.feild2)
            values(:table1_feild1,table1_feild2);

#delete
    #where 处理


#格式化
    #encode
        #
    #decode
        #
