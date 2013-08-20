function OmnitureHelper( strPageName  ) {
var _objOmniture					= s_gi( s_account );
var _strPageName					= strPageName;
var _strEvent							= "";
var _strProducts					= "";
var _strCity 							= "";
var _bIsWebSpecial 				= false;
var _strCategory					= "";
var _strSearchTerms 			= "";
var _strErrorMessage			= "";
var _strChannel						= "";
var thisObj								= this;
var _productName					= "";
var _ADDPRODUCT						= "scAdd";
var _REMOVEPRODUCT				= "scRemove";
var _VIEWPRODUCT					= "prodView";
var _PURCHASE							= "purchase";
var _CHECKOUT							= "scCheckout";
var _VIEWCART							= "scView";
var _OPENACCOUNT					= "scOpen";
var _ADDTOGEARBAG					= "event1";
var _REMOVE_FROM_GEARBAG	= "event2";
var _REMOVE_FROM_SAVED		= "event3";
var _GEARBAG_TO_SAVED			= "event4";
var _SAVED_TO_GEATBAG			= "event5";
this.setPageName = function( strPageName ) { _strPageName = strPageName; }
this.getPageName = function() { return _strPageName; }
this.setEvent = function( strEvent ) { _strEvent = strEvent; }
this.getEvent = function() { return _strEvent; }
this.setErrorMessage = function( strErrorMessage ) { _strErrorMessage = strErrorMessage; }
this.getErrorMessage = function() { return _strErrorMessage; }
this.setProducts = function( strProducts ) { _strProducts = strProducts; }
this.getProducts = function() { return _strProducts; }
this.setSearchTerms = function( strSearchTerms ) { _strSearchTerms = strSearchTerms; }
this.getSearchTerms = function() { return _strSearchTerms; }
this.setCity = function( strCity ) { _strCity = strCity; }
this.getCity = function() { return _strCity; }
this.setIsWebSpecial = function( bIsWebSpecial ) { _bIsWebSpecial = bIsWebSpecial; }
this.getIsWebSpecial = function() { return _bIsWebSpecial; }
this.setCategory = function( strCategory ) { _strCategory = strCategory; }
this.getCategory = function() { return _strCategory; }
this.setChannel = function( strChannel ) { _strChannel = strChannel; }
this.getChannel = function() { return _strChannel; }
this.logError = function( strErrorMessage ) {
thisObj.setErrorMessage( strErrorMessage );
_objOmniture.sProp2			= thisObj.getErrorMessage();
_objOmniture.t();
}
this.viewProduct = function() {
CallOmniture( _VIEWPRODUCT );
}
/* Omniture event, remove from gearbag */
this.removeFromGearbag = function() {
CallOmniture( _REMOVE_FROM_GEARBAG );
}
/* Omniture event, remove from gearbag */
this.removeFromSaved = function() {
CallOmniture( _REMOVE_FROM_SAVED );
}
/* Omniture event, items moved from gearbag to saved */
this.moveGearbagToSaved = function() {
CallOmniture( _GEARBAG_TO_SAVED );
}
/* Omniture event, items moved from saved to gearbag */
this.moveSavedToGearbag = function() {
CallOmniture( _SAVED_TO_GEATBAG );
}
this.addToGearbag = function() {
CallOmniture( _ADDTOGEARBAG );
}
this.updateProducts = function( strCategory, strStyleNumber, strProductDescription, strColorNumber, strSize, strQuantity, strUnitPrice, bIsWebSpecial ) {
var strProductName;
var strEventIncrementor = "";
_productName = strProductDescription;
_strCategory = strCategory;
thisObj.setCategory( strCategory );
if( _strProducts.length > 0 ) {
_strProducts += ",";
}
if( bIsWebSpecial == null || bIsWebSpecial == "" ) {
bIsWebSpecial = false;
}
thisObj.setChannel( strCategory );
strProductName = strProductDescription.replace(';','') + " (" + strStyleNumber + ")";
_strProducts += ";";
_strProducts += strProductName + ";";
_strProducts += strQuantity + ";";
_strProducts += CalculateTotalPrice( strQuantity, strUnitPrice ) + ";";
_strProducts += strEventIncrementor + ";evar2=" + bIsWebSpecial;
_strProducts += "|evar4=" + strCategory;
}
function CallOmniture( strAction ) {
_objOmniture.events      = strAction;
_objOmniture.pageName		= thisObj.getPageName();
_objOmniture.products    = thisObj.getProducts();
_objOmniture.channel    	= thisObj.getChannel();
_objOmniture.eVar1       = thisObj.getCity();
_objOmniture.eVar3				= thisObj.getSearchTerms();
s.eVar11		= "";
_objOmniture.sProp2			= "";
s.prop6			= GetAction(strAction);
s.prop7			= GetAction(strAction) + ": " + _productName;
s.prop8			= s.trackRefresh(GetAction(strAction),'tr_p1');
_objOmniture.sProp2			= thisObj.getErrorMessage();
_objOmniture.t();
}
function GetAction(strAction) {
var ret = "";
switch(strAction) {
case _ADDTOGEARBAG:
ret = "ADD_TO_GEARBAG";
break;
case _REMOVE_FROM_GEARBAG:
ret = "REMOVE_FROM_GEARBAG";
break;
case _REMOVE_FROM_SAVED:
ret = "REMOVE_FROM_SAVED";
break;
case _GEARBAG_TO_SAVED:
ret = "MOVED_FROM_GEARBAG_TO_SAVED";
break;
case _SAVED_TO_GEATBAG:
ret = "MOVED_FROM_SAVED_TO_GEATBAG";
break;
default:
ret = "";
break;
}
return ret;
}
function GenerateRandomId() {
var strId;
strId = new Date().getTime();
return strId;
}
/* Multiplies quantity x price and then formats */
function CalculateTotalPrice( strQuantity, strUnitPrice ) {
var iQuantity, flPrice;
iQuantity = parseInt( strQuantity );
flPrice = parseFloat( strUnitPrice );
var strTotal = ( iQuantity * flPrice ).toString();
if( strTotal.indexOf( "." ) < 0 ) {
strTotal += ".00";
}
if( strTotal.indexOf( "." ) == ( strTotal.length - 2 ) ) {
strTotal += "0";
}
return strTotal;
}
}
function LogLink(ref,linkName) {
try {
s_gi(s_account);
s.tl(ref,'o',linkName);
}
catch(e) {}
}
function logPageView(pageName, path) {
logPageEvent(pageName,"",path,null);
}
function logPage(pageName,genPath,specPath) {
logPageEvent(pageName,genPath,specPath,null);
}
function logPageEvent(pageName,genPath,specPath,evnt) {
if(typeof(s_account)=='undefined') {
return;
}
var s=s_gi(s_account);
s.pageName = pageName;
if(!IsEmpty(evnt)) {
s.events = evnt;
}
s.prop6	= (genPath == "" ? s.prop6 : genPath);
s.prop7	= specPath;
s.t();
}
function logDirectSearch(style,page) {
if(typeof(s_account)=='undefined') {
return;
}
var s=s_gi(s_account);
s.pageName = page + ":" + style;
s.events = "event21";
s.prop1	= style + ":1";
s.prop6= page;
s.prop7= page + ": " + style;
s.prop8= s.trackRefresh(page,'tr_p1');
s.products = "";
s.evar3	= style + ":1";
s.t();
}
