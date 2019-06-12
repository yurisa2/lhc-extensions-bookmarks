<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabookmarks_inits = array();
	$tdatabookmarks_inits[".truncateText"] = true;
	$tdatabookmarks_inits[".NumberOfChars"] = 80;
	$tdatabookmarks_inits[".ShortName"] = "bookmarks_inits";
	$tdatabookmarks_inits[".OwnerID"] = "";
	$tdatabookmarks_inits[".OriginalTable"] = "bookmarks_inits";

//	field labels
$fieldLabelsbookmarks_inits = array();
$fieldToolTipsbookmarks_inits = array();
$pageTitlesbookmarks_inits = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsbookmarks_inits["Portuguese(Brazil)"] = array();
	$fieldToolTipsbookmarks_inits["Portuguese(Brazil)"] = array();
	$pageTitlesbookmarks_inits["Portuguese(Brazil)"] = array();
	$fieldLabelsbookmarks_inits["Portuguese(Brazil)"]["id_init"] = "Id Init";
	$fieldToolTipsbookmarks_inits["Portuguese(Brazil)"]["id_init"] = "";
	$fieldLabelsbookmarks_inits["Portuguese(Brazil)"]["date"] = "Date";
	$fieldToolTipsbookmarks_inits["Portuguese(Brazil)"]["date"] = "";
	$fieldLabelsbookmarks_inits["Portuguese(Brazil)"]["phone"] = "Telefone (Whatsapp)";
	$fieldToolTipsbookmarks_inits["Portuguese(Brazil)"]["phone"] = "";
	$fieldLabelsbookmarks_inits["Portuguese(Brazil)"]["message"] = "Mensagem";
	$fieldToolTipsbookmarks_inits["Portuguese(Brazil)"]["message"] = "";
	$fieldLabelsbookmarks_inits["Portuguese(Brazil)"]["user"] = "User";
	$fieldToolTipsbookmarks_inits["Portuguese(Brazil)"]["user"] = "";
	if (count($fieldToolTipsbookmarks_inits["Portuguese(Brazil)"]))
		$tdatabookmarks_inits[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbookmarks_inits[""] = array();
	$fieldToolTipsbookmarks_inits[""] = array();
	$pageTitlesbookmarks_inits[""] = array();
	$fieldLabelsbookmarks_inits[""]["id_init"] = "Id Init";
	$fieldToolTipsbookmarks_inits[""]["id_init"] = "";
	$fieldLabelsbookmarks_inits[""]["date"] = "Date";
	$fieldToolTipsbookmarks_inits[""]["date"] = "";
	$fieldLabelsbookmarks_inits[""]["phone"] = "Phone";
	$fieldToolTipsbookmarks_inits[""]["phone"] = "";
	$fieldLabelsbookmarks_inits[""]["message"] = "Message";
	$fieldToolTipsbookmarks_inits[""]["message"] = "";
	$fieldLabelsbookmarks_inits[""]["user"] = "User";
	$fieldToolTipsbookmarks_inits[""]["user"] = "";
	if (count($fieldToolTipsbookmarks_inits[""]))
		$tdatabookmarks_inits[".isUseToolTips"] = true;
}


	$tdatabookmarks_inits[".NCSearch"] = true;



$tdatabookmarks_inits[".shortTableName"] = "bookmarks_inits";
$tdatabookmarks_inits[".nSecOptions"] = 0;
$tdatabookmarks_inits[".recsPerRowList"] = 1;
$tdatabookmarks_inits[".recsPerRowPrint"] = 1;
$tdatabookmarks_inits[".mainTableOwnerID"] = "";
$tdatabookmarks_inits[".moveNext"] = 1;
$tdatabookmarks_inits[".entityType"] = 0;

$tdatabookmarks_inits[".strOriginalTableName"] = "bookmarks_inits";





$tdatabookmarks_inits[".showAddInPopup"] = false;

$tdatabookmarks_inits[".showEditInPopup"] = false;

$tdatabookmarks_inits[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabookmarks_inits[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabookmarks_inits[".fieldsForRegister"] = array();

$tdatabookmarks_inits[".listAjax"] = false;

	$tdatabookmarks_inits[".audit"] = false;

	$tdatabookmarks_inits[".locking"] = false;


$tdatabookmarks_inits[".add"] = true;
$tdatabookmarks_inits[".afterAddAction"] = 1;
$tdatabookmarks_inits[".closePopupAfterAdd"] = 1;
$tdatabookmarks_inits[".afterAddActionDetTable"] = "";







$tdatabookmarks_inits[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatabookmarks_inits[".searchSaving"] = false;
//

$tdatabookmarks_inits[".showSearchPanel"] = true;
		$tdatabookmarks_inits[".flexibleSearch"] = true;

if (isMobile())
	$tdatabookmarks_inits[".isUseAjaxSuggest"] = false;
else
	$tdatabookmarks_inits[".isUseAjaxSuggest"] = true;

$tdatabookmarks_inits[".rowHighlite"] = true;



$tdatabookmarks_inits[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabookmarks_inits[".isUseTimeForSearch"] = false;



$tdatabookmarks_inits[".badgeColor"] = "9ACD32";


$tdatabookmarks_inits[".allSearchFields"] = array();
$tdatabookmarks_inits[".filterFields"] = array();
$tdatabookmarks_inits[".requiredSearchFields"] = array();



$tdatabookmarks_inits[".googleLikeFields"] = array();
$tdatabookmarks_inits[".googleLikeFields"][] = "id_init";
$tdatabookmarks_inits[".googleLikeFields"][] = "date";
$tdatabookmarks_inits[".googleLikeFields"][] = "phone";
$tdatabookmarks_inits[".googleLikeFields"][] = "message";
$tdatabookmarks_inits[".googleLikeFields"][] = "user";


$tdatabookmarks_inits[".advSearchFields"] = array();
$tdatabookmarks_inits[".advSearchFields"][] = "id_init";
$tdatabookmarks_inits[".advSearchFields"][] = "date";
$tdatabookmarks_inits[".advSearchFields"][] = "phone";
$tdatabookmarks_inits[".advSearchFields"][] = "message";
$tdatabookmarks_inits[".advSearchFields"][] = "user";

$tdatabookmarks_inits[".tableType"] = "list";

$tdatabookmarks_inits[".printerPageOrientation"] = 0;
$tdatabookmarks_inits[".nPrinterPageScale"] = 100;

$tdatabookmarks_inits[".nPrinterSplitRecords"] = 40;

$tdatabookmarks_inits[".nPrinterPDFSplitRecords"] = 40;



$tdatabookmarks_inits[".geocodingEnabled"] = false;





$tdatabookmarks_inits[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabookmarks_inits[".pageSize"] = 20;

$tdatabookmarks_inits[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabookmarks_inits[".strOrderBy"] = $tstrOrderBy;

$tdatabookmarks_inits[".orderindexes"] = array();

$tdatabookmarks_inits[".sqlHead"] = "SELECT id_init,  	`date`,  	phone,  	message,  	`user`";
$tdatabookmarks_inits[".sqlFrom"] = "FROM bookmarks_inits";
$tdatabookmarks_inits[".sqlWhereExpr"] = "";
$tdatabookmarks_inits[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabookmarks_inits[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabookmarks_inits[".arrGroupsPerPage"] = $arrGPP;

$tdatabookmarks_inits[".highlightSearchResults"] = true;

$tableKeysbookmarks_inits = array();
$tableKeysbookmarks_inits[] = "id_init";
$tdatabookmarks_inits[".Keys"] = $tableKeysbookmarks_inits;

$tdatabookmarks_inits[".listFields"] = array();

$tdatabookmarks_inits[".hideMobileList"] = array();


$tdatabookmarks_inits[".viewFields"] = array();

$tdatabookmarks_inits[".addFields"] = array();
$tdatabookmarks_inits[".addFields"][] = "date";
$tdatabookmarks_inits[".addFields"][] = "phone";
$tdatabookmarks_inits[".addFields"][] = "message";
$tdatabookmarks_inits[".addFields"][] = "user";

$tdatabookmarks_inits[".masterListFields"] = array();
$tdatabookmarks_inits[".masterListFields"][] = "id_init";
$tdatabookmarks_inits[".masterListFields"][] = "date";
$tdatabookmarks_inits[".masterListFields"][] = "phone";
$tdatabookmarks_inits[".masterListFields"][] = "message";
$tdatabookmarks_inits[".masterListFields"][] = "user";

$tdatabookmarks_inits[".inlineAddFields"] = array();

$tdatabookmarks_inits[".editFields"] = array();

$tdatabookmarks_inits[".inlineEditFields"] = array();

$tdatabookmarks_inits[".exportFields"] = array();

$tdatabookmarks_inits[".importFields"] = array();

$tdatabookmarks_inits[".printFields"] = array();

//	id_init
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_init";
	$fdata["GoodName"] = "id_init";
	$fdata["ownerTable"] = "bookmarks_inits";
	$fdata["Label"] = GetFieldLabel("bookmarks_inits","id_init");
	$fdata["FieldType"] = 3;

	
	
	
	
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "id_init";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_init";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatabookmarks_inits["id_init"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "bookmarks_inits";
	$fdata["Label"] = GetFieldLabel("bookmarks_inits","date");
	$fdata["FieldType"] = 135;

	
	
	
	
	
		$fdata["bAddPage"] = true;

	
	
	
	
	
	
	
		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
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








	$tdatabookmarks_inits["date"] = $fdata;
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "bookmarks_inits";
	$fdata["Label"] = GetFieldLabel("bookmarks_inits","phone");
	$fdata["FieldType"] = 200;

	
	
	
	
	
		$fdata["bAddPage"] = true;

	
	
	
	
	
	
	
		$fdata["strField"] = "phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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








	$tdatabookmarks_inits["phone"] = $fdata;
//	message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "message";
	$fdata["GoodName"] = "message";
	$fdata["ownerTable"] = "bookmarks_inits";
	$fdata["Label"] = GetFieldLabel("bookmarks_inits","message");
	$fdata["FieldType"] = 201;

	
	
	
	
	
		$fdata["bAddPage"] = true;

	
	
	
	
	
	
	
		$fdata["strField"] = "message";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "message";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatabookmarks_inits["message"] = $fdata;
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "bookmarks_inits";
	$fdata["Label"] = GetFieldLabel("bookmarks_inits","user");
	$fdata["FieldType"] = 200;

	
	
	
	
	
		$fdata["bAddPage"] = true;

	
	
	
	
	
	
	
		$fdata["strField"] = "user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
			
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatabookmarks_inits["user"] = $fdata;


$tables_data["bookmarks_inits"]=&$tdatabookmarks_inits;
$field_labels["bookmarks_inits"] = &$fieldLabelsbookmarks_inits;
$fieldToolTips["bookmarks_inits"] = &$fieldToolTipsbookmarks_inits;
$page_titles["bookmarks_inits"] = &$pageTitlesbookmarks_inits;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["bookmarks_inits"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["bookmarks_inits"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_bookmarks_inits()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_init,  	`date`,  	phone,  	message,  	`user`";
$proto0["m_strFrom"] = "FROM bookmarks_inits";
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
	"m_strName" => "id_init",
	"m_strTable" => "bookmarks_inits",
	"m_srcTableName" => "bookmarks_inits"
));

$proto6["m_sql"] = "id_init";
$proto6["m_srcTableName"] = "bookmarks_inits";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "bookmarks_inits",
	"m_srcTableName" => "bookmarks_inits"
));

$proto8["m_sql"] = "`date`";
$proto8["m_srcTableName"] = "bookmarks_inits";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "bookmarks_inits",
	"m_srcTableName" => "bookmarks_inits"
));

$proto10["m_sql"] = "phone";
$proto10["m_srcTableName"] = "bookmarks_inits";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "message",
	"m_strTable" => "bookmarks_inits",
	"m_srcTableName" => "bookmarks_inits"
));

$proto12["m_sql"] = "message";
$proto12["m_srcTableName"] = "bookmarks_inits";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "bookmarks_inits",
	"m_srcTableName" => "bookmarks_inits"
));

$proto14["m_sql"] = "`user`";
$proto14["m_srcTableName"] = "bookmarks_inits";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "bookmarks_inits";
$proto17["m_srcTableName"] = "bookmarks_inits";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id_init";
$proto17["m_columns"][] = "date";
$proto17["m_columns"][] = "phone";
$proto17["m_columns"][] = "message";
$proto17["m_columns"][] = "user";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "bookmarks_inits";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "bookmarks_inits";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bookmarks_inits";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bookmarks_inits = createSqlQuery_bookmarks_inits();


	
		;

					

$tdatabookmarks_inits[".sqlquery"] = $queryData_bookmarks_inits;

include_once(getabspath("include/bookmarks_inits_events.php"));
$tableEvents["bookmarks_inits"] = new eventclass_bookmarks_inits;
$tdatabookmarks_inits[".hasEvents"] = true;

?>