<?php
	@require_once("SecurityLibrary.class.php");
	$sec = new SecurityLibrary();

	
	//echo $sec->HtmlEscape("$_GET[out]");
	
	//include $sec->SecurityPathValidate(		$_GET[f]	);
	
	//echo $sec->DataBaseMetaData($_GET['md']);
	//echo $sec->DataBaseKeyWord($_GET['dbkw']);
	//echo $sec->DataBaseEscapeString($_GET['dbs']);
	echo $sec->GetCsrfToken()."<br>";
	
	echo $sec->GetUrlRedirectToken()."<br>";

	print_r($sec->___Security_TokenContainer);
	
	if($sec->ValidateCSRFToken()){
		echo "success";
	}
	if($sec->ValidateUrlRedirectToken()){
		echo "url success";
	}else{
		echo "url error";
	}

	$md="table name";
	$id="10a";
	$ord="asc";
	$txt = $_GET['text'];
	if(isset($txt)){
		echo $sec->HtmlRichText($txt);
		echo $sec->HtmlEscape($txt);
	}
?>
<form method=post action=test.php>
	<?php 	echo $sec->GetCSRFTokenHiddenInput();	?>
	<input type=submit>
</form>
<!--
<script>
	var s='<?php echo $sec->StringEscape($_GET[js]);?>';
	alert(s);
</script>
-->

<script>
	document.write(document.cookie)
</script>

