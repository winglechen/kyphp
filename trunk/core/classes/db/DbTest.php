<?php

$Data = Db::select()
        ->table($tableName)
        ->column('*')
        ->join($table,array($feild1,$feild2))
        ->where()
        ->orderBy()
        ->groupBy()
        ->limit();
$stat = Db::insert($tableName,$data);
$stat = Db::insert()
        ->table($tableName)
        ->data();
$stat = Db::update()
        ->table($tableName)
        ->data($data)
        ->where($where)
        ->limit();
$stat = Db::delete()
        ->table($tableName)
        ->where($where)
        ->limit();
$date = Db::get($tableName,$key);
$stat = Db::set($tableName,$key,$value);
