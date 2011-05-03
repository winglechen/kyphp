<?php
//$table = isset($_GET['table']) ? $_GET['table'] : 'intro';
require_once("common.php");

$rootName = "根目录";
$treeElements = $treeManager->getElementList(null,"manageStructure.php?table=".$table);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords"  content="" />
<meta name="description" content="" />
<title>Editable jquery tree with php codes</title>
<link rel="stylesheet" type="text/css" href="../res/simpleTree/style.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="../res/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="../res/js/jquery.cookie.js"></script>
<script type="text/javascript" src="../res/simpleTree/jquery.simple.tree.js"></script>
<script type="text/javascript" src="js/langManager.js" ></script>
<script type="text/javascript" src="js/treeOperations.js"></script>
<script type="text/javascript">
var simpleTree;
var structureManagerURL = "manageStructure.php?table=<?php echo $table; ?>";
var dragOperation = true;
var operationFailed = -1;

var langManager = new languageManager();
langManager.load("zh");
  

var treeOps = new TreeOperations();
$(document).ready(function() {
	// binding menu functions
	$('#myMenu1 .addDoc').click(function()  {  treeOps.addElementReq(); }); 
	$('#myMenu1 .addFolder').click(function()  {  treeOps.addElementReq(true); });	
	$('#myMenu1 .edit, #myMenu2 .edit').click(function() {  treeOps.updateElementNameReq(); });
	$('#myMenu1 .delete, #myMenu2 .delete').click(function() {  treeOps.deleteElementReq(); });
	$('#myMenu1 .expandAll').click(function (){ treeOps.expandAll($('.simpleTree > .root > ul')); });
	$('#myMenu1 .collapseAll').click(function (){ treeOps.collapseAll(); });
	
	// setting menu texts 
	$('#myMenu1 .addDoc').append(langManager.addDocMenu);
	$('#myMenu1 .addFolder').append(langManager.addFolderMenu);
	$('#myMenu1 .edit, #myMenu2 .edit').append(langManager.editMenu);
	$('#myMenu1 .delete, #myMenu2 .delete').append(langManager.deleteMenu);
	$('#myMenu1 .expandAll').append(langManager.expandAll);
	$('#myMenu1 .collapseAll').append(langManager.collapseAll);
	
		
	// initialization of tree
	simpleTree = $('.simpleTree').simpleTree({
		autoclose: false,
		restoreTreeState: true,
		afterClick:function(node){
		},
		afterDblClick:function(node){
			alert($('span:first',node).text() + " double clicked");		
		},
		afterMove:function(destination, source, pos) {
			if (dragOperation == true) 
			{				
				
				var params = "action=changeOrder&elementId="+source.attr('id')+"&destOwnerEl="+destination.attr('id')+
							 "&position="+pos + "&oldOwnerEl=" + simpleTree.get(0).ownerElOfDraggingItem;
				
				treeOps.ajaxReq(params, structureManagerURL, null, function(result)
				{						
					treeOps.treeBusy = false;
					treeOps.showInProcessInfo(false);
					try {
						var t = eval(result);
						// if result is less than 0, it means an error occured										
						if (treeOps.isInt(t) == true  && t < 0) { 
							alert(eval("langManager.error_" + Math.abs(t)) + "\n"+langManager.willReload);		
							window.location.reload();							
						}
						else {
							var info = eval("(" + result + ")");
							$('#' + info.oldElementId).attr("id", info.elementId);
						}
					}
					catch(ex) {	
							var info = eval("(" + result + ")");
							$('#' + info.oldElementId).attr("id", info.elementId);	
					}	
				});
			}
		},
		afterAjax:function(node)
		{			
			if (node.html().length == 1) {
				node.html("<li class='line-last'></li>");
			}
		},		
		afterContextMenu: function(element, event)
		{
			var className = element.attr('class');
			if (className.indexOf('doc') >= 0) {
				$('#myMenu2').css('top',event.pageY).css('left',event.pageX).show();				
			}
			else {
				if (className.indexOf('root') >= 0) {
					$('#myMenu1 .edit, #myMenu1 .delete').hide();
					$('#myMenu1 .expandAll, #myMenu1 .collapseAll').show();
				}
				else {
					$('#myMenu1 .expandAll, #myMenu1 .collapseAll').hide();
				}
				$('#myMenu1').css('top',event.pageY).css('left',event.pageX).show();
			}
			
			$('*').click(function() { $('#myMenu1, #myMenu2').hide(); $('#myMenu1 .edit, #myMenu1 .delete').show(); });
			
		},
		animate:true
		//,docToFolderConvert:true		
	});		
});
</script>
</head>
<body style="height:800px;">
<div class="contextMenu" id="myMenu1">
		<li class="addFolder">
			<img src="../res/simpleTree/images/folder_add.png" /> </li>
		<li class="edit"><img src="../res/simpleTree/images/folder_edit.png" /> </li>
		<li class="delete"><img src="../res/simpleTree/images/folder_delete.png" /> </li>
		<li class="expandAll"><img src="../res/simpleTree/images/expand.png"/> </li>
		<li class="collapseAll"><img src="../res/simpleTree/images/collapse.png"/> </li>
</div>
<div class="contextMenu" id="myMenu2">
		<li class="edit"><img src="../res/simpleTree/images/page_edit.png" /> </li>
		<li class="delete"><img src="../res/simpleTree/images/page_delete.png" /> </li>
</div>

<div id="wrap">
	<div id="annualWizard">
			<ul class="simpleTree" id='pdfTree'>
					<li class="root" id='<?php echo $treeManager->getRootId();  ?>'><span><?php echo $rootName; ?></span>
						<ul><?php echo $treeElements; ?></ul>
					</li>
			</ul>
	</div>
</div>
<div id='processing'></div>
</body>
</html>
