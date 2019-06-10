<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabookmarks_users = array();
	$tdatabookmarks_users[".truncateText"] = true;
	$tdatabookmarks_users[".NumberOfChars"] = 80;
	$tdatabookmarks_users[".ShortName"] = "bookmarks_users";
	$tdatabookmarks_users[".OwnerID"] = "";
	$tdatabookmarks_users[".OriginalTable"] = "bookmarks";

//	field labels
$fieldLabelsbookmarks_users = array();
$fieldToolTipsbookmarks_users = array();
$pageTitlesbookmarks_users = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsbookmarks_users["Portuguese(Brazil)"] = array();
	$fieldToolTipsbookmarks_users["Portuguese(Brazil)"] = array();
	$pageTitlesbookmarks_users["Portuguese(Brazil)"] = array();
	$fieldLabelsbookmarks_users["Portuguese(Brazil)"]["user"] = "Usuario";
	$fieldToolTipsbookmarks_users["Portuguese(Brazil)"]["user"] = "";
	$fieldLabelsbookmarks_users["Portuguese(Brazil)"]["Listar"] = "Listar Telefones";
	$fieldToolTipsbookmarks_users["Portuguese(Brazil)"]["Listar"] = "";
	if (count($fieldToolTipsbookmarks_users["Portuguese(Brazil)"]))
		$tdatabookmarks_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbookmarks_users[""] = array();
	$fieldToolTipsbookmarks_users[""] = array();
	$pageTitlesbookmarks_users[""] = array();
	$fieldLabelsbookmarks_users[""]["Listar"] = "Listar";
	$fieldToolTipsbookmarks_users[""]["Listar"] = "";
	if (count($fieldToolTipsbookmarks_users[""]))
		$tdatabookmarks_users[".isUseToolTips"] = true;
}


	$tdatabookmarks_users[".NCSearch"] = true;



$tdatabookmarks_users[".shortTableName"] = "bookmarks_users";
$tdatabookmarks_users[".nSecOptions"] = 0;
$tdatabookmarks_users[".recsPerRowList"] = 1;
$tdatabookmarks_users[".recsPerRowPrint"] = 1;
$tdatabookmarks_users[".mainTableOwnerID"] = "";
$tdatabookmarks_users[".moveNext"] = 1;
$tdatabookmarks_users[".entityType"] = 1;

$tdatabookmarks_users[".strOriginalTableName"] = "bookmarks";





$tdatabookmarks_users[".showAddInPopup"] = false;

$tdatabookmarks_users[".showEditInPopup"] = false;

$tdatabookmarks_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabookmarks_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabookmarks_users[".fieldsForRegister"] = array();

$tdatabookmarks_users[".listAjax"] = false;

	$tdatabookmarks_users[".audit"] = false;

	$tdatabookmarks_users[".locking"] = false;



$tdatabookmarks_users[".list"] = true;






$tdatabookmarks_users[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatabookmarks_users[".searchSaving"] = false;
//

$tdatabookmarks_users[".showSearchPanel"] = true;
		$tdatabookmarks_users[".flexibleSearch"] = true;

if (isMobile())
	$tdatabookmarks_users[".isUseAjaxSuggest"] = false;
else
	$tdatabookmarks_users[".isUseAjaxSuggest"] = true;

$tdatabookmarks_users[".rowHighlite"] = true;



$tdatabookmarks_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabookmarks_users[".isUseTimeForSearch"] = false;



$tdatabookmarks_users[".badgeColor"] = "778899";


$tdatabookmarks_users[".allSearchFields"] = array();
$tdatabookmarks_users[".filterFields"] = array();
$tdatabookmarks_users[".requiredSearchFields"] = array();

$tdatabookmarks_users[".allSearchFields"][] = "Listar";
	$tdatabookmarks_users[".allSearchFields"][] = "user";
	

$tdatabookmarks_users[".googleLikeFields"] = array();
$tdatabookmarks_users[".googleLikeFields"][] = "user";
$tdatabookmarks_users[".googleLikeFields"][] = "Listar";


$tdatabookmarks_users[".advSearchFields"] = array();
$tdatabookmarks_users[".advSearchFields"][] = "Listar";
$tdatabookmarks_users[".advSearchFields"][] = "user";

$tdatabookmarks_users[".tableType"] = "list";

$tdatabookmarks_users[".printerPageOrientation"] = 0;
$tdatabookmarks_users[".nPrinterPageScale"] = 100;

$tdatabookmarks_users[".nPrinterSplitRecords"] = 40;

$tdatabookmarks_users[".nPrinterPDFSplitRecords"] = 40;



$tdatabookmarks_users[".geocodingEnabled"] = false;





$tdatabookmarks_users[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabookmarks_users[".pageSize"] = 20;

$tdatabookmarks_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabookmarks_users[".strOrderBy"] = $tstrOrderBy;

$tdatabookmarks_users[".orderindexes"] = array();

$tdatabookmarks_users[".sqlHead"] = "SELECT `user`,  `user` AS Listar";
$tdatabookmarks_users[".sqlFrom"] = "FROM bookmarks";
$tdatabookmarks_users[".sqlWhereExpr"] = "";
$tdatabookmarks_users[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabookmarks_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabookmarks_users[".arrGroupsPerPage"] = $arrGPP;

$tdatabookmarks_users[".highlightSearchResults"] = true;

$tableKeysbookmarks_users = array();
$tdatabookmarks_users[".Keys"] = $tableKeysbookmarks_users;

$tdatabookmarks_users[".listFields"] = array();
$tdatabookmarks_users[".listFields"][] = "Listar";
$tdatabookmarks_users[".listFields"][] = "user";

$tdatabookmarks_users[".hideMobileList"] = array();


$tdatabookmarks_users[".viewFields"] = array();

$tdatabookmarks_users[".addFields"] = array();

$tdatabookmarks_users[".masterListFields"] = array();
$tdatabookmarks_users[".masterListFields"][] = "Listar";
$tdatabookmarks_users[".masterListFields"][] = "user";

$tdatabookmarks_users[".inlineAddFields"] = array();

$tdatabookmarks_users[".editFields"] = array();

$tdatabookmarks_users[".inlineEditFields"] = array();

$tdatabookmarks_users[".exportFields"] = array();

$tdatabookmarks_users[".importFields"] = array();

$tdatabookmarks_users[".printFields"] = array();

//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "bookmarks";
	$fdata["Label"] = GetFieldLabel("bookmarks_users","user");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatabookmarks_users["user"] = $fdata;
//	Listar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Listar";
	$fdata["GoodName"] = "Listar";
	$fdata["ownerTable"] = "bookmarks";
	$fdata["Label"] = GetFieldLabel("bookmarks_users","Listar");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatabookmarks_users["Listar"] = $fdata;


$tables_data["bookmarks_users"]=&$tdatabookmarks_users;
$field_labels["bookmarks_users"] = &$fieldLabelsbookmarks_users;
$fieldToolTips["bookmarks_users"] = &$fieldToolTipsbookmarks_users;
$page_titles["bookmarks_users"] = &$pageTitlesbookmarks_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["bookmarks_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["bookmarks_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_bookmarks_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`user`,  `user` AS Listar";
$proto0["m_strFrom"] = "FROM bookmarks";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "bookmarks",
	"m_srcTableName" => "bookmarks_users"
));

$proto6["m_sql"] = "`user`";
$proto6["m_srcTableName"] = "bookmarks_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "bookmarks",
	"m_srcTableName" => "bookmarks_users"
));

$proto8["m_sql"] = "`user`";
$proto8["m_srcTableName"] = "bookmarks_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Listar";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "bookmarks";
$proto11["m_srcTableName"] = "bookmarks_users";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "phone";
$proto11["m_columns"][] = "name";
$proto11["m_columns"][] = "obs";
$proto11["m_columns"][] = "user";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "bookmarks";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "bookmarks_users";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto14=array();
						$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "bookmarks",
	"m_srcTableName" => "bookmarks_users"
));

$proto14["m_column"]=$obj;
$obj = new SQLGroupByItem($proto14);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bookmarks_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bookmarks_users = createSqlQuery_bookmarks_users();


	
		;

		

$tdatabookmarks_users[".sqlquery"] = $queryData_bookmarks_users;

$tableEvents["bookmarks_users"] = new eventsBase;
$tdatabookmarks_users[".hasEvents"] = false;

?>