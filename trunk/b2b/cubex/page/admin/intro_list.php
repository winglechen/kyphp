<?php
    var_dump($_POST);
?>
<div class="page">
    <div class="pageHeader">
        <form onsubmit="return navTabSearch(this);" id="pagerForm" action="index.php?p=admin/intro_list" method="post">
        <input type="hidden" name="pageNum" value="1">
            <div class="searchBar">
                <table class="searchContent">
                    <tr>
                        <td>
                            分类：<input type="text"/>
                        </td>
                        <td>
                            标题：<input type="text" name="title" />
                        </td>
                        <td>
                            <div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div>
                        </td>
                    </tr>
                </table>
                <!--div class="subBar">
                    <ul>
                        <li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
                    </ul>
                </div-->
            </div>
        </form>
    </div>
    <div class="pageContent">
        <table class="list" width="98%" layoutH="116">
            <thead>
                <tr>
                    <th width="80">客户号</th>
                    <th width="100">客户名称</th>
                    <th width="100">客户划分</th>
                    <th>证件号码</th>
                    <th align="right" width="100">信用等级</th>
                    <th width="100">企业性质</th>
                    <th width="100">建档日期</th>
                </tr>
            </thead>
            <tbody>
                <tr target="sid_user" rel="1">
                    <td>iso127309</td>
                    <td>北京市政府咿呀哟</td>
                    <td>政府单位</td>
                    <td>0-0001027766351528</td>
                    <td>四等级</td>
                    <td>政府单位</td>
                    <td>2009-05-21</td>
                </tr>
            </tbody>
        </table>

        <div class="panelBar">
            <div class="pages">
            <span>共23条</span>
            </div>

            <div class="pagination" targetType="navTab" totalCount="200" numPerPage="20" pageNumShown="10" currentPage="2"></div>
        </div>
    </div>
</div>
