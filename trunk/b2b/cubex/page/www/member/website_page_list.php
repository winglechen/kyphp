<?php

include "header.php";
use Ky\Model\Mpage;
use Ky\Core\Core\Db;
use Ky\Core\Core\Form;

Form::init('member_page_list_search');
$_POST['corpid'] = $_SESSION['id'];

$condition = array(
    'title' => 'like',
    'corpid'      => 'eq',
);
$page = array(
    'url'           => 'index.php?p=www/member/website_page_list&page=',
    'curPage'       => $_POST['page'],
    'numPerPage'    => 10,
    'style'         => 'default',
);

$data = Mpage::lists('id,name,ts',$condition,$_POST,$page);

?>

<style>
.tongzhi {
padding-top: 0px;
padding-right: 20px;
padding-bottom: 0px;
padding-left: 20px;		  
}
.tongzhi  li{
padding:8px;
border-bottom-style: solid;
border-bottom-color: #CCCCCC;
border-bottom-width: 1px;
}
.tongzhi li i {
color:#CCCCCC
}	  
</style>



<div class="operationPage">
  <?php include "admin_nav.php"; ?>
  <div class="operationArea">
	<?php include "admin_menu.php"; ?>

	 	 	 	 <div class="management">
    <div class="switchTag">
    <!--ul class="">
		<a href="admin.php?op=SellInfoList&amp;searchType=online&amp;auth=adad359ab3bbd4093d728eb07a7c777d">上线(0)</a>
	</ul>
	<ul class="tagSelected">
		<a href="admin.php?op=SellInfoList&amp;searchType=auditing&amp;auth=adad359ab3bbd4093d728eb07a7c777d">审核中(1)</a>
	</ul>
	<ul class="">
		<a href="admin.php?op=SellInfoList&amp;searchType=refuse&amp;auth=adad359ab3bbd4093d728eb07a7c777d">审核拒绝(0)</a>
	</ul>
	<ul class="">
		<a href="admin.php?op=SellInfoList&amp;searchType=offline&amp;auth=adad359ab3bbd4093d728eb07a7c777d">下线(0)</a>
    </ul-->
    </div>
    <div class="tabswitchborder">
      <div class="searchproducts">
        <form name="searchForm" id="searchForm" method="post" action="index.php?p=www/member/website_page_list">
            <input type="hidden" name="namespace" value="member_page_list_search" />
            <input type="hidden" name="pageParam" value="page" />
            <input type="hidden" name="corpid" value="<?php echo $_SESSION['id']; ?>" />
          <label for="label">页面名称</label>
          <input type="text" name="title" id="title" value="" class="productSearchInput" style="height:19px;line-height:19px;">
          <input type="submit" value="查 询">
        </form>
      </div>
      <div class="productdatablock">
        <form id="listForm" name="listForm" method="post" action="">
        <input type="hidden" name="searchType" id="searchType" value="auditing">
          <div class="operating">
          
            
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td>
                                                                </td>
                <td align="right" class="shangxia"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tbody><tr>
		<td align="right" valign="middle">
				
	            </td>
	</tr>
</tbody></table></td>
              </tr>
                         </tbody></table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pdata">
              <thead>
                <tr>
                  <td>标题</td>
                  <td width="130">更新时间</td>
                  <td width="115">操作</td>
                </tr>
              </thead>
              <tbody>
<?php
$row = null;
for($i=0,$len=count($data['data']); $i<$len; $i++){
    $row = $data['data'][$i];
?>
<tr onmouseover="this.bgColor='#EFFFEE';" onmouseout="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
    <td align="left" valign="top" class="datadescription">
        <a href="index.php?p=www/member/website_page_add&id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
    </td>
    <td align="center" valign="middle" class="dataexpire">
        <?php echo date('Y-m-d',$row['ts']); ?>
    </td>
    <td align="center" valign="middle" class="datamod">
        <table width="100%" border="0" cellspacing="3" cellpadding="0" class="modopration">
            <tbody>
                <tr>
                    <a href="index.php?p=www/member/website_page_add&id=<?php echo $row['id']; ?>">修改</a></td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<?php
}
?>
                </tbody>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:12px;" class="productDataBottom">
              <tbody>
              <tr>
                <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pages">
	<tbody><tr>
		<td align="right" valign="middle" style="height:25px;padding-right:15px; border-bottom:1px solid #93CFFE; background-color:#CBE6FE;">
<?php
    echo $data['page'];
?>
        </td>
	</tr>
</tbody></table>                </td>
                </tr>
            </tbody></table>
                      </div>
        </form>
      </div>
      <div class="columnTips" style="margin:10px 2px;">
                  <strong>重要提示：</strong><br>
1、经常更新供应信息可以在搜索结果中排位更加靠前，建议您将最新的供应信息及时发布；<br>
2、请您尽可能完整填写各项目，以利于买家更好的了解您的产品。<br>
3、每条信息每天限重发一次，当天发布的信息，明天才可以重发。建议您定期修改信息内容，提高信息质量，信息质量越高，越能吸引买家。
	  </div>
    </div>
  </div>
<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

		<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	</div>
</div>


<?php
include "footer.php";
?>				 
	