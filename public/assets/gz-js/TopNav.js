var M_objHolster;
var myHeight;
var myHeight2;
var M_ToggleOnImgSrc;
var M_ToggleOffImgSrc;
var M_bIsIframeLoaded = false;
var M_bShowProductOptions = false;
var M_bMenuItemShow = false;
var M_resultingPageNoServlet;
var M_haveResultingPageNoServlet = false;
var M_altHolsterEditOption;
var M_altHolsterMoveOption;
var M_bIsMInitialized           = false;
var M_pntShowDropdowns          = function(){};
var M_pntHideDropdowns          = function(){};
var M_pntHolsterShowDropdowns     = function(){};
var M_pntHolsterHideDropdowns     = function(){};
var M_pntShowCheckout         = function(){};
var M_objGearBagAjax;
var M_strTNPageName           = "TopNav.js";
var M_bSetGearSavedImages         = true;
var M_bIsGearbagRefreshed         = false;
var M_bIsProdLinkWinOpen          = false;
var M_pntDoHolster                = function(){};
var M_strOmnCategory        = "";
var M_bIsAdd        				= false;
function setGearSavedImages(value) {
M_bSetGearSavedImages = value;
}
function InitializeTopNav(resultingPage) {
try {
InitializeHolster(resultingPage);
Event.observe('emailForm', 'submit', doFootEmail);
var parms = location.search.toQueryParams();
var affid = parms['netid'];
if(affid == '0' || affid == '1' || affid == '2') {
Cookie.set("aff", affid, 60);
}
M_bIsMInitialized = true;
}
catch( e ) {
HandleError( "InitializeTopNav", e, M_strTNPageName );
}
}
function InitializeHolster(resultingPage) {
try {
// Set references
M_resultingPage         = resultingPage;
//Ajax object for updating gear bag
M_objGearBagAjax = new AjaxWrapper();
// Set Other Globals
var imgGearMin = $("imgMyGearMin");
if( imgGearMin != null ) {
M_ToggleOnImgSrc = imgGearMin.getAttribute("src");
}
var imgMyGear = $("imgMyGear");
if( imgMyGear != null ) {
M_ToggleOffImgSrc = imgMyGear.getAttribute("src");
}
// Register toggle menu
var dvHolster = $("dvHolster");
if( dvHolster != null ) {
myHeight = new fx.Height(dvHolster, {duration: 400});
//myHeight.hide();
//ShowObject(dvHolster, true );
}
var signinToggle = $("dvSignInToggle");
if( signinToggle != null ) {
myHeight2 = new fx.Height(signinToggle, {duration: 400});
myHeight2.hide();
}
IframeOnloadEvent(0);
}
catch( e ) {
HandleError( "InitializeHolster", e, M_strTNPageName );
}
}
function SetResultingPageNoServlet(resultingPageNoServlet) {
try {
M_resultingPageNoServlet         = resultingPageNoServlet;
M_haveResultingPageNoServlet = true;
}
catch( e ) {
HandleError( "SetResultingPageNoServlet", e, M_strTNPageName );
}
}
function AssembleAuthenticationLinks() {
var bIsUserLoggedIn, ifrData, strPath, strOnClick, signUpOnClick, strSignInPath, strSignUpPath, strSignInText, strSignUpText, strMaxPath, nv;
try {
ifrData = window.frames["ifrHolsterInfo"];
bIsPublicSite = true;
strPath = "https://www.patagonia.com/us";
if( ifrData != null && ifrData.document != null && ifrData.document.getElementById("hdnIsLoggedIn") != null) {
bIsUserLoggedIn = Boolean(parseInt(ifrData.document.getElementById( "hdnIsLoggedIn" ).value));
if( bIsUserLoggedIn ) {
strSignInText = "My Account";
strSignUpText = "";
//Set the account Link as logged in (Show +)
$('aSignIn').addClassName('loggedIn');
strSignInPath = "javascript: DisplaySignIn(true);";
strSignUpPath = "#";
strMaxPath = "javascript: DisplaySignIn(true);";
strOnClick = '';
signUpOnClick = '';
} // End if is userLoggedIn
else {
strSignInText = "Sign In";
strSignUpText = "Sign Up";
//remove Logged in from account Link
$('aSignIn').removeClassName('loggedIn');
var delim = document.createTextNode(" | ");
$('myGearAccount').insertBefore(delim ,$('aAccount'));
var accthtml = $("myGearAccount").innerHTML;
var parms = location.search.toQueryParams();
var kval = parms['k'];
var pval = parms['p'];
var purl = "";
var kurl = "";
var sipage = strPath + "/user/login.jsp";
var supage = strPath + "/user/reg_form.jsp";
sipage = strPath + "/user/account-login.jsp";
supage = strPath + "/user/account-registration.jsp";
if(!IsEmpty(kval)) {
strSignInPath = sipage + "?ke=" + kval;
strSignUpPath = supage + "?ke=" + kval;
}
else if(!IsEmpty(pval)) {
strSignInPath = sipage + "?pe=" + pval;
strSignUpPath = supage + "?pe=" + pval;
}
else if(IsCheckout()) {
strSignInPath = sipage + "?target=1";
strSignUpPath = supage + "?target=1";
}
else {
strSignInPath = sipage + "?target=" + escape(location.protocol + "//www.patagonia.com" + location.pathname + location.search);
strSignUpPath = supage + "?target=" + escape(location.protocol + "//www.patagonia.com" + location.pathname + location.search);
}
strOnClick = function(){lightboxLogin('account-login'); return false;}
signUpOnClick = function(){lightboxCreate(); return false;}
strMaxPath = "#";
} // End else user IS logged In
var aSignIn = $("aSignIn");
aSignIn.setAttribute( "href", strSignInPath );
aSignIn.onclick = strOnClick;
Element.update(aSignIn, strSignInText);
var aSignUp = $("aAccount");
aSignUp.setAttribute( "href", strSignUpPath );
aSignUp.onclick = signUpOnClick;
Element.update(aSignUp, strSignUpText);
} // End if iframe
}
catch( e ) {
HandleError( "AssembleAuthenticationLinks", e, M_strTNPageName );
}
}
function UpdateQtyAndPriceFromHolsterForm() {
var qtyEle, sQtyEle;
var priceEle;
try {
if ($("CurrentCartvars")) {
if (qtyEle = $('hdnHolsterCurrentCartQty')) {
emptyZero(qtyEle.value, $("hdnGearQuantity"));
}
if (priceEle = $('hdnHolsterCurrentCartTotal')) {
emptyZero(priceEle.value, $("hdnGearTotal"));
}
if (sQtyEle = $('hdnHolsterSavedCartQty')) {
emptyZero(sQtyEle.value, $("hdnSavedQuantity"));
}
}
}
catch (e) {
HandleError("UpdateQtyAndPriceFromHolsterForm", e, M_strTNPageName );
}
}
function emptyZero(val, obj) {
try {
if(!IsEmpty(val)) {
obj.value = val;
}
else {
obj.value = "0";
}
}
catch(e) {
HandleError("emptyZero", e, M_strTNPageName );
}
}
function IframeOnloadEvent( intCounter ) {
var strError = "Sorry, we're having a problem.  Please try refreshing your browser as this issue may be temporary.";
try {
if( M_bIsIframeLoaded ) {
if(window.frames["ifrHolsterInfo"] != null) {
M_bIsAdd = true;
UpdateTotalsFromIframe();
UpdateCheckoutBar();
AssembleAuthenticationLinks();
AssembleMyGearToggle();
GetGearSavedImagesOnLoad();
showMergedCartMessage();
showItemsRemovedCartMessage();
// Decide which menu gets put in the shopcart toggle bar
ChangeGearbagDescriptionVisibility();
}
return;
}
else if( parseInt(intCounter) <=150 ) {
var intCount = parseInt(intCounter) + 1;
setTimeout("IframeOnloadEvent("+ intCount +");", 100 );
}
else {
AssembleStandby();
throw strError;
}
}
catch (e) {
HandleError("IframeOnloadEvent", e, M_strTNPageName );
}
}
function AssembleStandby() {
try {
Element.update("aSignIn", "Loading...");
Cookie.erase("b");
}
catch( e ) {
HandleError( "AssembleStandby", e, M_strTNPageName );
}
}
function UpdateTotalsFromIframe() {
var qtyEle, sQtyEle;
var priceEle;
try {
var ifrAccountData = window.frames["ifrHolsterInfo"];
if ( ifrAccountData != null ) {
var hccq = ifrAccountData.document.getElementById("hdnHolsterCurrentCartQty");
if(hccq != null) {emptyZero(hccq.value, $("hdnGearQuantity")); }
var hcct = ifrAccountData.document.getElementById("hdnHolsterCurrentCartTotal")
if(hcct != null) { emptyZero(hcct.value, $("hdnGearTotal")); }
var hscq = ifrAccountData.document.getElementById("hdnHolsterSavedCartQty");
if(hscq != null) { emptyZero(hscq.value, $("hdnSavedQuantity"));}
}
}
catch (e) {
throw e;
}
}
function GetGearSavedImages() {
var currentStyleList = null;
var savedStyleList = null;
try {
if (M_bSetGearSavedImages) {
if ($("CurrentCartvars")) {
if (styleListEle = $('hdnHolsterCurrentCartStyles')) {
currentStyleList = styleListEle.value;
}
}
if ($("SavedCartvars")) {
if (styleListEle = $('hdnHolsterSavedCartStyles')) {
savedStyleList = styleListEle.value;
}
}
UpdateGearSavedImages( currentStyleList, savedStyleList );
}
}
catch (e) {
HandleError("GetGearSavedImages", e, M_strTNPageName );
}
}
function UpdateGearSavedImages( currentStyleList, savedStyleList ) {
var styleListEle = null;
var styleRG = null;
var imgEle = null;
try {
if (M_bSetGearSavedImages) {
if (currentStyleList != null) {
styleRG = currentStyleList.split(",");
for (i = 0; i < styleRG.length; i++) {
if ($('in_gear_' + styleRG[i])) {
$('in_gear_' + styleRG[i]).style.display = 'block';
}
}
}
if (savedStyleList != null) {
styleRG = savedStyleList.split(",");
for (i = 0; i < styleRG.length; i++) {
if ($('saved_' + styleRG[i])) {
$('saved_' + styleRG[i]).style.display = 'block';
}
} // End for loop
} // End if savedStyleList != null
} // End ifbSetGearSavedImages
} // End try
catch (e) {
HandleError("UpdateGearSavedImages", e, M_strTNPageName );
}
}
function GetGearSavedImagesOnLoad() {
var currentStyleList = null;
var savedStyleList = null;
try {
if (M_bSetGearSavedImages) {
var ifrAccountData = window.frames["ifrHolsterInfo"];
if ( ifrAccountData != null ) {
var hccs = ifrAccountData.document.getElementById("hdnHolsterCurrentCartStyles");
if(hccs != null ) { currentStyleList = hccs.value; }
var hscs = ifrAccountData.document.getElementById("hdnHolsterSavedCartStyles");
if(hccs != null ) { savedStyleList   = hscs.value; }
}
UpdateGearSavedImages(currentStyleList, savedStyleList );
} // End big if
}
catch (e) {
throw e;
}
}
function showMergedCartMessage() {
try {
var ifrAccountData = window.frames["ifrHolsterInfo"];
if ( ifrAccountData != null ) {
if (ifrAccountData.document.getElementById( "hdnHolsterMerged" ).value == 'TRUE') {
alert('The contents of your current gear have been updated to include the contents of your order from a previous session that was not completed.  Please review the contents of your gear.');
}
}
}
catch (e) {
HandleError("showMergedCartMessage", e, M_strTNPageName );
}
}
function showItemsRemovedCartMessage() {
try {
var ifrAccountData = window.frames["ifrHolsterInfo"];
if ( ifrAccountData != null ) {
if (ifrAccountData.document.getElementById( "hdnHolsterItemsRemoved" ).value == 'TRUE') {
alert('Due to being out-of-stock, some of your order items have been removed from your cart.');
}
}
}
catch (e) {
HandleError("showItemsRemovedCartMessage", e, M_strTNPageName );
}
}
function removeGearSavedImage(ctype, style) {
var prefix = "";
try {
if (M_bSetGearSavedImages) {
if (ctype == 'CURRENT') {
prefix = 'in_gear_';
}
else {
prefix = 'saved_';
}
var objItem = $(prefix + style);
if ( objItem != null ) {
Element.setStyle(objItem,{display:'none'});
}
}
}
catch (e) {
HandleError("removeGearSavedImage", e, M_strTNPageName );
}
}
function AssembleMyGearToggle() {
try {
var intQuantity = parseInt( $F("hdnGearQuantity") );
var intSavedQuantity = parseInt($F("hdnSavedQuantity"));
var cacheFlag = ( TrimWhitespace("true").length == 0 ? false : TrimWhitespace("true") );
if( (!isNaN( intQuantity ) && intQuantity > 0) || (!isNaN(intSavedQuantity) && intSavedQuantity > 0) ) {
Event.stopObserving("aMyGear", 'click');
Event.observe("aMyGear", 'click', function () {RefreshGearBagXML(); return false;});
}
else {
Event.stopObserving("aMyGear", 'click');
Event.observe("aMyGear", 'click', function () {DisplayHolster(null); return false;});
}
}
catch (e) {
HandleError("AssembleMyGearToggle", e, M_strTNPageName );
}
}
function ChangeGearbagDescriptionVisibility() {
var objDescription, objHdnHolster, intGearbagItems;
try {
objHdnHolster = $("dvHiddenHolster");
objDescription = $("whatIsMyGear");
intGearbagItems = parseInt($F("hdnGearQuantity"));
if ( (intGearbagItems == 0) && (parseInt( $F("hdnSavedQuantity") ) == 0) ) {
if( objDescription.parentNode == objHdnHolster ) {
$("dvChildHolster").appendChild( objDescription );
objHdnHolster.appendChild( $("dvCartWrapper") );
}
}
else {
if( objDescription.parentNode != objHdnHolster ) {
objHdnHolster.appendChild( objDescription );
$("dvChildHolster").appendChild( $("dvCartWrapper") );
}
}
// Fire page level events
(intGearbagItems == 0) ? M_pntShowCheckout(false) : M_pntShowCheckout(true);
}
catch( e ) {
HandleError( "ChangeGearbagDescriptionVisibility", e, M_strTNPageName );
}
}
function ToggleMyGearImage( bIsExpanded ) {
try {
if (bIsExpanded) {
$("holster").addClassName('activeHolster');
}
else {
$("holster").removeClassName('activeHolster');
}
}
catch( e ) {
HandleError( "ToggleMyGearImage", e, M_strTNPageName );
}
}
function IsHolsterOpen() {
try {
return myHeight.isOpen();
}
catch( e ) {
HandleError( "IsHolsterOpen", e, M_strTNPageName );
}
}
function DisplayHolster( bMakeVisible ) {
try {
//if holster is not initialized, do nothing
if( !M_bIsMInitialized ) { return; }
var dvSaved = $("dvSavedItems");
//check if holster is currently open
var bIsHolsterOpen = IsHolsterOpen();
// If directive parameter is null, we are toggling from the top nav set directve to oposite of current
if( bMakeVisible == null) {
bMakeVisible = !bIsHolsterOpen;
}
// set myGear image to same as directive
ToggleMyGearImage(bMakeVisible);
if( bMakeVisible ) {
// Hide other tabs
DisplaySignIn( !bMakeVisible );
}
// Show gearbag
var gearItems = $("dvCheckOutItems");
if ( gearItems != null ) {
gearItems.style.overflow  = ( bIsHolsterOpen ? "hidden" : "auto" );
}
if ( dvSaved != null ) {
dvSaved.style.overflow    = ( bIsHolsterOpen ? "hidden" : "auto" );
}
// only toggle if the current state is different than what we want
if ( bMakeVisible != bIsHolsterOpen ) {
myHeight.toggle();
bMakeVisible ? M_pntHolsterHideDropdowns() : M_pntHolsterShowDropdowns();
}
}
catch( e ) {
HandleError( "DisplayHolster", e, M_strTNPageName );
}
}
function DisplaySignIn( bMakeVisible,intCounter ) {
var objOldParent, ifrData, objNewParent, strSignInPath, strSignOutPath, bIsUserLoggedIn, aSignIn;
if(M_bIsIframeLoaded) {
ifrData = window.frames["ifrHolsterInfo"];
if( ifrData != null ) {
bIsUserLoggedIn = Boolean(parseInt(ifrData.document.getElementById( "hdnIsLoggedIn" ).value));
}
aSignIn = $("aSignIn");
if(bIsUserLoggedIn == false){
strSignInPath = aSignIn.href;
}
else {
strSignInPath = "javascript: DisplaySignIn(true);";
}
strSignOutPath = "javascript: DisplaySignIn(false);";
try {
// If not initialized, leave.
if( !M_bIsMInitialized ) { return; }
if( bMakeVisible ) {
// Hide gearbag holster
HideHolster();
aSignIn.setAttribute('href',strSignOutPath);
aSignIn.addClassName('active');
// Show sign in form
$("myGearAccountWrapper").style.display = "block";
myHeight2.toggle();
}
else {
myHeight2.hide();
aSignIn.setAttribute('href',strSignInPath);
aSignIn.removeClassName('active');
$("myGearAccountWrapper").style.display = "none";
DisplayCheckoutBar( true );
}
}
catch( e ) {
HandleError( "DisplaySignIn", e, M_strTNPageName );
}
} //end if iframeloaded
else if(parseInt(intCounter) <=150 ) {
var intCount = parseInt(intCounter) + 1;
//setTimeout("DisplaySignIn("+ intCount +");", 100 );
setTimeout("DisplaySignIn(" + bMakeVisible + "," + intCount +");", 100 );
}
else {}
}
function DisplayCheckoutBar( bShowBar ) {
try {
if( Element.getStyle("dvCheckoutBar", "display") == "block" ) {
ShowCheckoutBar( bShowBar );
}
}
catch( e ) {
HandleError( "DisplayCheckoutBar", e, M_strTNPageName );
}
}
function ShowCheckoutBar( bShowBar ) {
try {
if(bShowBar) {
Element.setStyle("dvCheckoutBar", {display:'block'});
$('holster').addClassName('full');
}
else {
Element.setStyle("dvCheckoutBar", {display:'none'});
$('holster').removeClassName('full');
}
}
catch( e ) {
HandleError( "ShowCheckoutBar", e, M_strTNPageName );
}
}
function HideHolster() {
try {
if( !M_bIsMInitialized ) return;
ToggleMyGearImage( false );
myHeight.hide();
}
catch( e ) {
HandleError( "HideHolster", e, M_strTNPageName );
}
}
function ShowItemOptionsII( cartId, referenceId, colorCode, skuRefId, quantity, ctype, hasRelProducts, userIsLoggedIn, pType, price, webSpecial, orderId) {
try {
var itemHolderOffset = $("dvCheckOutItems").cumulativeScrollOffset();
var objDiv = $("dvGearOption");
var elItem = $("dvGear_" + cartId);
var elLeft = getOffset(elItem).left;
var elTop = getOffset(elItem).top;
var ileft = parseInt(elLeft) - 120;
Element.setStyle(objDiv, {top: ( elTop - itemHolderOffset.top ) + 'px', left: ileft + 'px' });
// Wire up the links
arrA = objDiv.getElementsByTagName( "a" );
// Evaluate which part of the holster we're in and format options accordingly
WireGearbagItemEvents( arrA, cartId, referenceId, colorCode, skuRefId, quantity, ctype, hasRelProducts, userIsLoggedIn, pType, price, webSpecial, orderId);
ShowObject( objDiv, true );
}
catch( e ) {
HandleError( "ShowItemOptionsII", e, "TopNav.js" );
}
}
function KeepOptionsOpen() {
try {
M_bShowProductOptions = true;
}
catch( e ) {
HandleError( "KeepOptionsOpen", e, M_strTNPageName );
}
}
function GetBasePositionX() {
var arrPos;
try {
var objBase = $("wrapper");
arrPos = objBase.cumulativeOffset();
}
catch( e ) {
HandleError( "GetBasePositionX" + e, M_strGFileName );
}
//return parseInt( objBase.x );
return parseInt( arrPos[0] );
}
function LetOptionsClose( bIsCheckout ) {
try {
M_bShowProductOptions = false;
HideItemOptions();
}
catch( e ) {
HandleError( "LetOptionsClose", e, M_strTNPageName );
}
}
function HideItemOptions( bIsCheckout ) {
try {
if( M_bShowProductOptions ) return;
SetTimeout( "if(!M_bShowProductOptions) ForceCloseItemOptions();", 2 );
}
catch( e ) {
HandleError( "HideItemOptions", e, M_strTNPageName );
}
}
function ForceCloseItemOptions() {
try {
ShowObject( $("dvGearOption"), false );
}
catch( e ) {
HandleError( "ForceCloseItemOptions", e, M_strTNPageName );
}
}
function holsterSearchForm_onsubmit(form) {
try {
var sval = $F('Ntt');
if (sval == 'site search - keyword or style #') {
sval = '';
}
Cookie.set("ct","1119");
sval = sval.replace(/%/g, "%25"); // escape() chokes on Kanji.
document.location = 'http://www.patagonia.com/us/search/' + sval;
return false;
}
catch( e ) {
HandleError( "holsterSearchForm_onsubmit", e, M_strTNPageName );
}
}
function WireGearbagItemEvents( arrA, cartId, referenceId, colorCode, skuRefId, quantity, ctype, hasRelProducts, userIsLoggedIn, pType, price, webSpecial, orderId) {
try {
if( !M_bIsMInitialized ) return;
if (webSpecial == null || webSpecial == '') { webSpecial = false; }
//Save For Later
if(ctype == 'CURRENT') {
if ( userIsLoggedIn ) {
Event.stopObserving(arrA[0], "click");
Event.observe(arrA[0], "click", function () {MoveWithinGearBagXML(cartId,'CURRENT','SAVED',referenceId); ForceCloseItemOptions(); return false;});
arrA[0].setAttribute("href","#");
}
else {
arrA[0].setAttribute("href","https://www.patagonia.com/us/user/login.jsp?saveCartItemForLater=" + cartId + "&target=" + escape(location.protocol + "//www.patagonia.com" + location.pathname + location.search));
}
arrA[0].innerHTML = "Save For Later";
}
else {
Event.stopObserving(arrA[0], "click");
Event.observe(arrA[0], "click", function () {MoveWithinGearBagXML(cartId,'SAVED','CURRENT',referenceId); ForceCloseItemOptions(); return false;});
arrA[0].setAttribute("href","#");arrA[0].innerHTML = "Move to My Cart";
}
//View Product Details
var viewhtml;
if (referenceId == '89970') {
viewhtml = "/us/product/gift_card_page.jsp?zoi_id-1=" + cartId + "&zoi_quantity-1=" + quantity + "&zoi_price-1=" + price + "&zoi_product-1=" + referenceId + "&zoi_sku-1=" + skuRefId;
}
else if (referenceId == '89946') {
viewhtml = "/us/product/electronic-gift-card.jsp?zoi_id-1=" + cartId + "&zoi_quantity-1=" + quantity + "&zoi_price-1=" + price + "&zoi_product-1=" + referenceId + "&zoi_sku-1=" + skuRefId;
}
else {
viewhtml = "/us/product/product_focus.jsp?OPTION=PRODUCT_FOCUS_DISPLAY_HANDLER&style_color=" + referenceId + "-" + colorCode + "&skuRefId=" + skuRefId + "&quantity=" + quantity+ "&cartId=" + cartId+ "&ws=" + webSpecial+ "&cartType=" + ctype;
}
arrA[1].innerHTML = "View Product Details";
arrA[1].setAttribute("href", viewhtml);
/* Edit size, color or qty. */
if(ctype == 'CURRENT') {
var edithref;
arrA[2].innerHTML = "Edit size, color or qty.";
if (referenceId == '89970') {
edithref = "/us/product/gift_card_page.jsp?zoi_id-1=" + cartId + "&zoi_quantity-1=" + quantity + "&zoi_price-1=" + price + "&zoi_product-1=" + referenceId + "&zoi_sku-1=" + skuRefId;
}
else if (referenceId == '89946') {
var dt = new Date().getTime();
edithref = "/us/product/electronic-gift-card.jsp?OPTION=VIRTUAL_GIFTCARD_CARD_VALUES_HANDLER&zoi_id-1=" + cartId + "&zoi_product-1=" + referenceId + "&zoi_sku-1=" + skuRefId + "dt=" + dt;
}
else {
edithref = "/us/product/product_focus.jsp?OPTION=PRODUCT_FOCUS_DISPLAY_HANDLER&style_color=" + referenceId + "-" + colorCode + "&skuRefId=" + skuRefId + "&quantity=" + quantity+ "&cartId=" + cartId+ "&ws=" + webSpecial+ "&cartType=" + ctype;
}
arrA[2].setAttribute("href", edithref);
}
/* remove from cart */
var remhref;
if ( M_resultingPage != null && M_resultingPage != '' ) {
if (ctype == 'CURRENT') {
if(M_haveResultingPageNoServlet) {M_resultingPage = M_resultingPageNoServlet;}
if (M_altHolsterEditOption == null) {
remhref = "/us" + M_resultingPage + "?OPTION=EDITCART&zoi_save=1&zoi_id-1=" + cartId + "&zoi_delete-1=true";
}
else {
remhref = "/us" + M_resultingPage + "?OPTION=" + M_altHolsterEditOption + "&zoi_save=1&zoi_id-1=" + cartId + "&zoi_delete-1=true";
}
}// end if currentordertype
else {
remhref = "/us" + M_resultingPage + "?OPTION=EDIT_SAVED_ORDER&zoi_save=1&zoi_id-1=" + cartId + "&zoi_delete-1=true&zo_id=" + orderId;
}
}//end if resultingpage
else {
remhref = "#"
Event.stopObserving(arrA[3], 'click');
Event.observe(arrA[3], 'click', function () {RemoveFromGearBagXML(cartId,ctype,referenceId); ForceCloseItemOptions(); return false;});
}
arrA[3].setAttribute("href", remhref);
arrA[3].innerHTML = "Remove";
}
catch( e ) {
HandleError( "WireGearbagItemEvents", e, M_strTNPageName );
}
}
function UpdateCheckoutBar(message) {
var countAndTotal, objDescText, objBar, objCheckImgProgress, strQnty, chkbtn;
try {
objDescText       = $("spCheckoutItemCountAndTotal");
objCheckImgProgress = $("imgCheckoutLoading");
var chkbtn = $("checkoutBtn");
if (message != null && message != "") {
Element.setStyle(objDescText,{display:'none'});
Element.show(objCheckImgProgress);
Element.hide(chkbtn);
Element.update(objDescText, "");
ShowCheckoutBar(true);
return;
}
var onShippingBillingPaymentPage = IsCheckout();
Element.hide(objCheckImgProgress);
Element.show("checkoutBtn");
Element.setStyle(objDescText,{display:'block'});
strQnty = $F("hdnGearQuantity");
if ( strQnty != "0" && strQnty != "" && !onShippingBillingPaymentPage) {
countAndTotal = strQnty;
countAndTotal += "&nbsp;" + "items ready to go";
Element.update(objDescText, countAndTotal);
ShowCheckoutBar( true );
}
else {
Element.update(objDescText, "Your gearbag is empty");
ShowCheckoutBar( false );
}
}
catch( e ) {
HandleError( "UpdateCheckoutBar", e, M_strTNPageName );
}
}
function IsCheckout() {
try {
var isCheckout = false;
if (location.pathname != null && (location.pathname.indexOf('shipping.jsp') != (-1) || location.pathname.indexOf('shopcart.jsp') != (-1) || location.pathname.indexOf('qas_prompt.jsp') != (-1) || location.pathname.indexOf('billing.jsp') != (-1)|| location.pathname.indexOf('order_summary.jsp') != (-1) || location.pathname.indexOf('order_summary_paypal.jsp') != (-1) || location.pathname.indexOf('order_summary_amazon.jsp') != (-1)|| location.pathname.indexOf('payment.jsp') != (-1) )) {
isCheckout = true;
}
return isCheckout;
}
catch(e) {
HandleError( "IsCheckout", e, M_strTNPageName );
}
}
function HasGearItems() {
var bHasGear = false;
try {
bHasGear = ( parseInt( $F("hdnGearQuantity") ) > 0 );
}
catch( e ) {
HandleError( "HasGearItems", e, M_strTNPageName );
}
return bHasGear;
}
function HasSavedItems() {
var bHasSavedItems = false;
try {
bHasSavedItems = ( parseInt( $F("hdnSavedQuantity") ) > 0 );
}
catch( e ) {
HandleError( "HasSavedItems", e, M_strTNPageName );
}
return bHasSavedItems;
}
var APOS = "'";
var QUOTE = '"';
var ESCAPED_QUOTE = {  }
ESCAPED_QUOTE[QUOTE] = '&quot;';
ESCAPED_QUOTE[APOS] = '&apos;';
function XElement(name,content,attributes) {
var att_str = '';
if (attributes) { // tests false if this arg is missing!
att_str = XFormatAttributes(attributes);
}
var xml;
if (!content) { xml='<' + name + att_str + '/>\n'; }
else { xml='<' + name + att_str + '>' + content + '</'+name+'>\n'; }
return xml;
}
function XFormatAttributes(attributes) {
var att_value;
var apos_pos, quot_pos;
var use_quote, escape, quote_to_escape;
var att_str;
var re;
var result = '';
for (var att in attributes) {
att_value = attributes[att];
// Find first quote marks if any
apos_pos = att_value.indexOf(APOS);
quot_pos = att_value.indexOf(QUOTE);
// Determine which quote type to use around
// the attribute value
if (apos_pos == -1 && quot_pos == -1) {
att_str = ' ' + att + "='" + att_value +  "'";
result += att_str;
continue;
}
// Prefer the single quote unless forced to use double
if (quot_pos != -1 && quot_pos < apos_pos) { use_quote = APOS; }
else { use_quote = QUOTE; }
// Figure out which kind of quote to escape
// Use nice dictionary instead of yucky if-else nests
escape = ESCAPED_QUOTE[use_quote];
// Escape only the right kind of quote
re = new RegExp(use_quote,'g');
att_str = ' ' + att + '=' + use_quote + att_value.replace(re, escape) + use_quote;
result += att_str;
}
return result;
}
function BuildCartModifyMsg(todo,cartid,otype,style,sku,qty,price,spec) {
try {
var strMessage = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
strMessage += XElement("ModifyOrderItems",
XElement("Items",
XElement("Item",
XElement("id",cartid) +
XElement("order_type",otype) +
XElement("style",style) +
XElement("short_sku",sku) +
XElement("quantity",qty) +
XElement("price",price) +
XElement("web_special",spec) +
XElement("cat_code","<![CDATA[" + escape(M_strOmnCategory) + "]]>")
,{action:todo}
)
)
);
return strMessage;
}
catch( e ) {
HandleError( "BuildCartModifyMsg", e, M_strTNPageName );
}
}
function BuildCartMoveMsg(cartid,oTypeFrom,oTypeTo) {
try {
var strMessage = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
strMessage += XElement("MoveOrderItems",
XElement("Items",
XElement("Item",
XElement("id",cartid) +
XElement("from_order_type",oTypeFrom) +
XElement("to_order_type",oTypeTo)
)
)
);
return strMessage;
}
catch( e ) {
HandleError( "BuildCartMoveMsg", e, M_strTNPageName );
}
}
function BuildCartRetrieveMsg() {
try {
var strMessage = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
strMessage += XElement("RetrieveOrder");
return strMessage;
}
catch( e ) {
HandleError( "BuildCartRetrieveMsg", e, M_strTNPageName );
}
}
var doggle;
function RefreshHolsterWithNewAJAX(objMyAjax) {
try {
var cartWrap = $("dvCartWrapper");
Element.update(cartWrap, objMyAjax.getResponseText());
UpdateQtyAndPriceFromHolsterForm();
GetGearSavedImages();
ChangeGearbagDescriptionVisibility();
UpdateCheckoutBar();
if ( HasGearItems() || HasSavedItems()) {
var checktwo = $("dvCheckoutBar").cloneNode(true);
checktwo.id = "dvShopBar";
checktwo.getElementsByTagName("div")[2].style.display = "none";
checktwo.getElementsByTagName("div")[3].innerHTML = "<a href=\"#\" onclick=\"DisplayHolster(false);LogLink(this,'Continue Shopping'); return false;\"><img src=\"/images/structure/en_US/buttons/btn_continue_shopping.gif\" id=\"continueShopping\" height=\"23\" width=\"139\" alt=\"\" border=\"0\" /></a>";
cartWrap.appendChild(checktwo);
DisplayHolster(null);
}
}
catch( e ) {
HandleError( "RefreshHolsterWithNewAJAX", e, M_strTNPageName );
}
}
function RefreshGearBagXML() {
try {
if( !M_bIsGearbagRefreshed ) {
// if the holster is currently open, just close it
if (myHeight.isOpen()) {
DisplayHolster(false);
}
else {
//AddCheckoutBar();
UpdateCheckoutBar("Communicating with server...");
HideHolster();
M_objGearBagAjax.refreshObject();
M_objGearBagAjax.setIsXml(true);
M_objGearBagAjax.setDestinationPath( "/us/option" );
M_objGearBagAjax.appendRequestData( "OPTION", "XML_MESSAGE_HANDLER" );
var strMessage = BuildCartRetrieveMsg();
//alert(strMessage);
M_objGearBagAjax.appendRequestData( "XML", strMessage );
M_objGearBagAjax.appendRequestData( "convertToHTML","true");
M_objGearBagAjax.startRequest();
M_objGearBagAjax.onRequestComplete = function() {
RefreshHolsterWithNewAJAX(M_objGearBagAjax);
}
// Flip our flag
M_bIsGearbagRefreshed = true;
}
} // End if gearbag is not refreshed
else {
// We already got the gearbag - just toggle it now
DisplayHolster( null );
}
}
catch ( e ) {
HandleError( "RefreshGearBagXML", e, M_strTNPageName );
}
}
function RemoveFromGearBagXML(cartId, ctype, style) {
try {
UpdateCheckoutBar("Communicating with server...");
HideHolster();
var objHdnField = $("dvHdn_" + cartId);
var strHiddenText = "";
if( objHdnField != null ) {
strHiddenText = objHdnField.innerHTML;
}
M_objGearBagAjax.refreshObject();
M_objGearBagAjax.setIsXml(true);
M_objGearBagAjax.setDestinationPath( "/us/option" );
M_objGearBagAjax.appendRequestData( "OPTION", "XML_MESSAGE_HANDLER" );
var strMessage = BuildCartModifyMsg("delete",cartId,ctype,"","","","","");
M_objGearBagAjax.appendRequestData( "XML", strMessage );
M_objGearBagAjax.appendRequestData( "convertToHTML","true");
M_objGearBagAjax.startRequest();
M_objGearBagAjax.onRequestComplete = function() {
RefreshHolsterWithNewAJAX(M_objGearBagAjax);
removeGearSavedImage(ctype, style);
if ( !HasGearItems() && !HasSavedItems() ) {
M_pntHolsterShowDropdowns();
}
if( strHiddenText.length > 0 ) {
RecordOmnitureRemoveEvent( strHiddenText, ctype );
lpSendData("page","ConversionAction","GEARBAG - REMOVE ITEM");
}
}
M_objGearBagAjax.onRequestError = function() {}
}
catch ( e ) {
HandleError( "RemoveFromGearBagXML", e, M_strTNPageName );
}
}
function RecordOmnitureRemoveEvent( strProductText, strType ) {
try {
var objOmniture;
if( strProductText.length > 0 ) {
switch( strType ) {
case "CURRENT":
objOmniture = new OmnitureHelper( "Item removed from GEARBAG" );
objOmniture.setProducts( strProductText );
objOmniture.removeFromGearbag();
break;
case "SAVED":
objOmniture = new OmnitureHelper( "Item removed from SAVED" );
objOmniture.setProducts( strProductText );
objOmniture.removeFromSaved();
break;
default:
break;
}
objOmniuture = null;
}
}
catch ( e ) {
HandleError( "RecordOmnitureRemoveEvent", e, M_strTNPageName );
}
}
function MoveWithinGearBagXML(cartId,currentLocation,newLocation,style) {
try {
var strMessage = BuildCartMoveMsg(cartId,currentLocation,newLocation);
var objHdnText = $("dvHdn_" + cartId);
var strHdnText = "";
if( objHdnText != null ) {
strHdnText = objHdnText.innerHTML;
}
if ( M_resultingPage != null && M_resultingPage != '' ) {
$('imf_hid_XML').value = strMessage;
$('imf_hid_returnJSPPage').value = M_resultingPage;
if (M_altHolsterMoveOption != null) {
$('imf_hid_OPTION').value = M_altHolsterMoveOption;
}
document.forms['itemmoveform'].submit();
}
else {
//AddCheckoutBar();
UpdateCheckoutBar("Communicating with server...");
HideHolster();
M_objGearBagAjax.refreshObject();
M_objGearBagAjax.setIsXml(true);
M_objGearBagAjax.setDestinationPath( "/us/option" );
M_objGearBagAjax.appendRequestData( "OPTION", "XML_MESSAGE_HANDLER" );
//alert(strMessage);
M_objGearBagAjax.appendRequestData( "XML", strMessage );
M_objGearBagAjax.appendRequestData( "convertToHTML","true");
M_objGearBagAjax.startRequest();
M_objGearBagAjax.onRequestComplete = function() {
RefreshHolsterWithNewAJAX(M_objGearBagAjax);
removeGearSavedImage(currentLocation, style);
if( strHdnText.length > 0 ) {
RecordOmnitureMovedEvent( strHdnText, newLocation );
}
} //end function
M_objGearBagAjax.onRequestError = function() {}
} //end else
}
catch ( e ) {
HandleError( "MoveWithinGearBagXML", e, M_strTNPageName );
}
}
function doFootEmail(event) {
try {
var emailVal = $F('txtEmailAddress');
var opt = "EMAIL_SUBSCRIPTION_LB";
if (IsEmpty(emailVal) || !ValidateEmail(emailVal) ){
}
else {
var pars = $('emailForm').serialize();
var addpars = "&catalog1=EmailSign&option=" + opt + "&country=" + $F('emcountry');
new Ajax.Request('/us/option', {
parameters: pars + addpars,
onSuccess: function(){
footerEmail.innerHTML = "Thank you for signing up!";
logPageEvent("Footer Email Confirmation","FOOTER EMAIL CONFIRMATION","FOOTER EMAIL CONFIRMATION","event6");
},
onLoading: function(){
$("footeremailbtn").style.display = "none";
var i = document.createElement("img");
i.setAttribute("src", "/assets/patagonia/zoomloader.gif");
i.setAttribute("alt", "Loading");
i.setAttribute("height", "16");
i.setAttribute("width", "16");
$("emailForm").appendChild(i);
i.setStyle({margin:'0px',verticalAlign:'middle',cssFloat:'none',padding:'3px 17px 5px 7px',lineHeight:'1em'});
},
onFailure: function() { footerEmail.innerHTML = "Sorry, we encountered a problem."; }
}
);
Event.stop(event);
}
}
catch(e) {
HandleError( "doFootEmail", e, M_strTNPageName );
}
}
function lbEmail(v){
try {
var c = $("emcountry");
var ct = "";
if(c!=null) {
ct = c.value;
}
lbnbShow('/us/popup/lightbox/email-signup-container.jsp?h=285&w=400&c=' + ct + '&v=' + v +'&end=prd','',400,500,.4);
}
catch(e) {
HandleError( "lbEmail", e, M_strTNPageName );
}
}
function lbContact(){
lbnbShow('/us/popup/lightbox/contact-us-container.jsp?w=596&h=440&end=prd','',596,600,.4);
}
function RecordOmnitureMovedEvent( strProductText, strTo ) {
try {
var objOmniture;
if( strProductText.length > 0 ) {
//SAVED
switch( strTo ) {
case "CURRENT":
objOmniture = new OmnitureHelper( "Item moved within holster from SAVED to GEARBAG" );
objOmniture.setProducts( strProductText );
objOmniture.moveSavedToGearbag();
break;
case "SAVED":
objOmniture = new OmnitureHelper( "Item moved within holster from GEARBAG to SAVED" );
objOmniture.setProducts( strProductText );
objOmniture.moveGearbagToSaved();
break;
default:
break;
}
objOmniuture = null;
}
}
catch ( e ) {
HandleError( "RecordOmnitureMovedEvent", e, M_strTNPageName );
}
}
/*  */
function RecordLCEvent( strEventId ) {
try {
var s=s_gi(s_account);
s.linkTrackVars='prop10';
s.prop10 = strEventId;
s.tl(true,'o','Live Chat Event');
}
catch ( e ) {}
}
function lightboxLogin(page){
var parentURL = window.location;
lbnbShow('/us/popup/lightbox/lightbox_login_container.jsp?o=1&h=405&w=400&page=' + page + '&parentURL=' + parentURL + '&end=prd','',400,540,.4);
}
function lightboxLoginB(page){
var parentURL = window.location;
lbnbShow('/us/popup/lightbox/lightbox_login_container.jsp?o=2&h=405&w=400&page=' + page + '&parentURL=' + parentURL + '&end=prd','',400,540,.4);
}
function displayVideo(ht, wd, id){
displayVideoAd(ht,wd,id,ht);
}
function displayVideoAd(ht, wd, id, ad){
lbnbShow('/us/popup/lightbox/video-container.jsp?h=' + ht + '&w=' + wd + '&c=' + id + '&end=prd','',wd,ad,.4);
}
function lightboxCreate(){
var parentURL = window.location;
lbnbShow('/us/popup/lightbox/lightbox_login_container.jsp?o=3&h=550&w=400&page=account-create&parentURL=' + parentURL + '&end=prd','',400,655,.4);
}
function lightboxCreateB(){
var parentURL = window.location;
lbnbShow('/us/popup/lightbox/lightbox_login_container.jsp?o=4&h=550&w=400&page=account-create&parentURL=' + parentURL + '&end=prd','',400,655,.4);
}
