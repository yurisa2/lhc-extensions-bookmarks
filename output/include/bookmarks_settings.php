<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabookmarks = array();
	$tdatabookmarks[".truncateText"] = true;
	$tdatabookmarks[".NumberOfChars"] = 80;
	$tdatabookmarks[".ShortName"] = "bookmarks";
	$tdatabookmarks[".OwnerID"] = "";
	$tdatabookmarks[".OriginalTable"] = "bookmarks";

//	field labels
$fieldLabelsbookmarks = array();
$fieldToolTipsbookmarks = array();
$pageTitlesbookmarks = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsbookmarks["Portuguese(Brazil)"] = array();
	$fieldToolTipsbookmarks["Portuguese(Brazil)"] = array();
	$pageTitlesbookmarks["Portuguese(Brazil)"] = array();
	$fieldLabelsbookmarks["Portuguese(Brazil)"]["phone"] = "Telefone";
	$fieldToolTipsbookmarks["Portuguese(Brazil)"]["phone"] = "Com código do País, exemplo: 5511996660661";
	$fieldLabelsbookmarks["Portuguese(Brazil)"]["name"] = "Name";
	$fieldToolTipsbookmarks["Portuguese(Brazil)"]["name"] = "Nome do contato";
	$fieldLabelsbookmarks["Portuguese(Brazil)"]["obs"] = "Obs";
	$fieldToolTipsbookmarks["Portuguese(Brazil)"]["obs"] = "";
	$fieldLabelsbookmarks["Portuguese(Brazil)"]["user"] = "Usuario";
	$fieldToolTipsbookmarks["Portuguese(Brazil)"]["user"] = "Quem anotou";
	$fieldLabelsbookmarks["Portuguese(Brazil)"]["ID"] = "ID";
	$fieldToolTipsbookmarks["Portuguese(Brazil)"]["ID"] = "";
	$fieldLabelsbookmarks["Portuguese(Brazil)"]["initiate"] = "Initiate";
	$fieldToolTipsbookmarks["Portuguese(Brazil)"]["initiate"] = "";
	if (count($fieldToolTipsbookmarks["Portuguese(Brazil)"]))
		$tdatabookmarks[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbookmarks[""] = array();
	$fieldToolTipsbookmarks[""] = array();
	$pageTitlesbookmarks[""] = array();
	$fieldLabelsbookmarks[""]["initiate"] = "Initiate";
	$fieldToolTipsbookmarks[""]["initiate"] = "";
	if (count($fieldToolTipsbookmarks[""]))
		$tdatabookmarks[".isUseToolTips"] = true;
}


	$tdatabookmarks[".NCSearch"] = true;



$tdatabookmarks[".shortTableName"] = "bookmarks";
$tdatabookmarks[".nSecOptions"] = 0;
$tdatabookmarks[".recsPerRowList"] = 1;
$tdatabookmarks[".recsPerRowPrint"] = 1;
$tdatabookmarks[".mainTableOwnerID"] = "";
$tdatabookmarks[".moveNext"] = 1;
$tdatabookmarks[".entityType"] = 0;

$tdatabookmarks[".strOriginalTableName"] = "bookmarks";





$tdatabookmarks[".showAddInPopup"] = false;

$tdatabookmarks[".showEditInPopup"] = false;

$tdatabookmarks[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabookmarks[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabookmarks[".fieldsForRegister"] = array();

$tdatabookmarks[".listAjax"] = false;

	$tdatabookmarks[".audit"] = false;

	$tdatabookmarks[".locking"] = false;

$tdatabookmarks[".edit"] = true;
$tdatabookmarks[".afterEditAction"] = 1;
$tdatabookmarks[".closePopupAfterEdit"] = 1;
$tdatabookmarks[".afterEditActionDetTable"] = "";

$tdatabookmarks[".add"] = true;
$tdatabookmarks[".afterAddAction"] = 1;
$tdatabookmarks[".closePopupAfterAdd"] = 1;
$tdatabookmarks[".afterAddActionDetTable"] = "";

$tdatabookmarks[".list"] = true;


$tdatabookmarks[".import"] = true;




$tdatabookmarks[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatabookmarks[".searchSaving"] = false;
//

$tdatabookmarks[".showSearchPanel"] = true;
		$tdatabookmarks[".flexibleSearch"] = true;

if (isMobile())
	$tdatabookmarks[".isUseAjaxSuggest"] = false;
else
	$tdatabookmarks[".isUseAjaxSuggest"] = true;

$tdatabookmarks[".rowHighlite"] = true;



$tdatabookmarks[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabookmarks[".isUseTimeForSearch"] = false;



$tdatabookmarks[".badgeColor"] = "778899";


$tdatabookmarks[".allSearchFields"] = array();
$tdatabookmarks[".filterFields"] = array();
$tdatabookmarks[".requiredSearchFields"] = array();

$tdatabookmarks[".allSearchFields"][] = "phone";
	$tdatabookmarks[".allSearchFields"][] = "name";
	$tdatabookmarks[".allSearchFields"][] = "obs";
	$tdatabookmarks[".allSearchFields"][] = "user";
	$tdatabookmarks[".allSearchFields"][] = "initiate";
	

$tdatabookmarks[".googleLikeFields"] = array();
$tdatabookmarks[".googleLikeFields"][] = "phone";
$tdatabookmarks[".googleLikeFields"][] = "name";
$tdatabookmarks[".googleLikeFields"][] = "obs";
$tdatabookmarks[".googleLikeFields"][] = "user";
$tdatabookmarks[".googleLikeFields"][] = "ID";
$tdatabookmarks[".googleLikeFields"][] = "initiate";


$tdatabookmarks[".advSearchFields"] = array();
$tdatabookmarks[".advSearchFields"][] = "phone";
$tdatabookmarks[".advSearchFields"][] = "name";
$tdatabookmarks[".advSearchFields"][] = "obs";
$tdatabookmarks[".advSearchFields"][] = "user";
$tdatabookmarks[".advSearchFields"][] = "ID";
$tdatabookmarks[".advSearchFields"][] = "initiate";

$tdatabookmarks[".tableType"] = "list";

$tdatabookmarks[".printerPageOrientation"] = 0;
$tdatabookmarks[".nPrinterPageScale"] = 100;

$tdatabookmarks[".nPrinterSplitRecords"] = 40;

$tdatabookmarks[".nPrinterPDFSplitRecords"] = 40;



$tdatabookmarks[".geocodingEnabled"] = false;





$tdatabookmarks[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabookmarks[".pageSize"] = 20;

$tdatabookmarks[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabookmarks[".strOrderBy"] = $tstrOrderBy;

$tdatabookmarks[".orderindexes"] = array();

$tdatabookmarks[".sqlHead"] = "SELECT phone,  name,  obs,  `user`,  ID,  phone AS initiate";
$tdatabookmarks[".sqlFrom"] = "FROM bookmarks";
$tdatabookmarks[".sqlWhereExpr"] = "";
$tdatabookmarks[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabookmarks[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabookmarks[".arrGroupsPerPage"] = $arrGPP;

$tdatabookmarks[".highlightSearchResults"] = true;

$tableKeysbookmarks = array();
$tableKeysbookmarks[] = "ID";
$tdatabookmarks[".Keys"] = $tableKeysbookmarks;

$tdatabookmarks[".listFields"] = array();
$tdatabookmarks[".listFields"][] = "initiate";
$tdatabookmarks[".listFields"][] = "phone";
$tdatabookmarks[".listFields"][] = "name";
$tdatabookmarks[".listFields"][] = "obs";
$tdatabookmarks[".listFields"][] = "user";

$tdatabookmarks[".hideMobileList"] = array();


$tdatabookmarks[".viewFields"] = array();

$tdatabookmarks[".addFields"] = array();
$tdatabookmarks[".addFields"][] = "phone";
$tdatabookmarks[".addFields"][] = "name";
$tdatabookmarks[".addFields"][] = "obs";
$tdatabookmarks[".addFields"][] = "user";

$tdatabookmarks[".masterListFields"] = array();
$tdatabookmarks[".masterListFields"][] = "phone";
$tdatabookmarks[".masterListFields"][] = "name";
$tdatabookmarks[".masterListFields"][] = "obs";
$tdatabookmarks[".masterListFields"][] = "user";
$tdatabookmarks[".masterListFields"][] = "ID";
$tdatabookmarks[".masterListFields"][] = "initiate";

$tdatabookmarks[".inlineAddFields"] = array();

$tdatabookmarks[".editFields"] = array();
$tdatabookmarks[".editFields"][] = "phone";
$tdatabookmarks[".editFields"][] = "name";
$tdatabookmarks[".editFields"][] = "obs";
$tdatabookmarks[".editFields"][] = "user";

$tdatabookmarks[".inlineEditFields"] = array();

$tdatabookmarks[".exportFields"] = array();

$tdatabookmarks[".importFields"] = array();
$tdatabookmarks[".importFields"][] = "initiate";

$tdatabookmarks[".printFields"] = array();

//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "bookmarks";
	$fdata["Label"] = GetFieldLabel("bookmarks","phone");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";

	
	
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
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Telefone %value% ja existe no cadastro", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatabookmarks["phone"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "bookmarks";
	$fdata["Label"] = GetFieldLabel("bookmarks","name");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatabookmarks["name"] = $fdata;
//	obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "obs";
	$fdata["GoodName"] = "obs";
	$fdata["ownerTable"] = "bookmarks";
	$fdata["Label"] = GetFieldLabel("bookmarks","obs");
	$fdata["FieldType"] = 201;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "obs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "obs";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatabookmarks["obs"] = $fdata;
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "bookmarks";
	$fdata["Label"] = GetFieldLabel("bookmarks","user");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
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




	$tdatabookmarks["user"] = $fdata;
//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "bookmarks";
	$fdata["Label"] = GetFieldLabel("bookmarks","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
	
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
			
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








	$tdatabookmarks["ID"] = $fdata;
//	initiate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "initiate";
	$fdata["GoodName"] = "initiate";
	$fdata["ownerTable"] = "bookmarks";
	$fdata["Label"] = GetFieldLabel("bookmarks","initiate");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";

	
	
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




	$tdatabookmarks["initiate"] = $fdata;


$tables_data["bookmarks"]=&$tdatabookmarks;
$field_labels["bookmarks"] = &$fieldLabelsbookmarks;
$fieldToolTips["bookmarks"] = &$fieldToolTipsbookmarks;
$page_titles["bookmarks"] = &$pageTitlesbookmarks;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["bookmarks"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["bookmarks"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_bookmarks()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "phone,  name,  obs,  `user`,  ID,  phone AS initiate";
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
	"m_strName" => "phone",
	"m_strTable" => "bookmarks",
	"m_srcTableName" => "bookmarks"
));

$proto6["m_sql"] = "phone";
$proto6["m_srcTableName"] = "bookmarks";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "bookmarks",
	"m_srcTableName" => "bookmarks"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "bookmarks";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "obs",
	"m_strTable" => "bookmarks",
	"m_srcTableName" => "bookmarks"
));

$proto10["m_sql"] = "obs";
$proto10["m_srcTableName"] = "bookmarks";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "bookmarks",
	"m_srcTableName" => "bookmarks"
));

$proto12["m_sql"] = "`user`";
$proto12["m_srcTableName"] = "bookmarks";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "bookmarks",
	"m_srcTableName" => "bookmarks"
));

$proto14["m_sql"] = "ID";
$proto14["m_srcTableName"] = "bookmarks";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "bookmarks",
	"m_srcTableName" => "bookmarks"
));

$proto16["m_sql"] = "phone";
$proto16["m_srcTableName"] = "bookmarks";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "initiate";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "bookmarks";
$proto19["m_srcTableName"] = "bookmarks";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "phone";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "obs";
$proto19["m_columns"][] = "user";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "bookmarks";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "bookmarks";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bookmarks";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bookmarks = createSqlQuery_bookmarks();


	
		;

						

$tdatabookmarks[".sqlquery"] = $queryData_bookmarks;

$tableEvents["bookmarks"] = new eventsBase;
$tdatabookmarks[".hasEvents"] = false;

?>