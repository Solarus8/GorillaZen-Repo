var M_IN_STOCK 			= "IN_STOCK";
var M_IN_STOCK_RETAIL	= "IN_STOCK_RETAIL";
var M_BACKORDERED		= "BACKORDERED";
var M_RE_ORDERED		= "RE_ORDERED";
var M_OUT_OF_STOCK	= "OUT_OF_STOCK";
var M_FORWARD_STOCK_JAPAN = "FORWARD_STOCK_JAPAN";
var M_iMouseX				= 0;
var M_iMouseY				= 0;
var M_strGFileName	= "Global.js";
var M_bIsDropdownHidden			= false;
var M_bMenuItemShow 				= false;
var BrowserInfo 						= new BrowserDetect2();
var M_oPToPWin							= null;
var M_bSessionLoaded = false;
var M_bIsPToP = false;
function checkNonce(idtoset) {
try {
if( M_bSessionLoaded ) {
var ifrSessInfo = window.frames["ifrSessInfo"];
if ( ifrSessInfo != null ) {
var hccq = ifrSessInfo.document.getElementsByName("noncevalue")[0];
if(hccq != null) {$(idtoset).value = hccq.value; }
}
}
else {
checkNonce();
}
}
catch(e) {
HandleError( "checkNonce", e, M_strGFileName );
}
}
function logStateChange(pageName, path) {
try {
if(typeof(s_account)=='undefined') return;
var s=s_gi(s_account);
s.pageName = pageName;
s.prop7	= path;
s.t();
}
catch(e) {
HandleError( "logStateChange", e, M_strPageName );
}
}
function TrackNewPage(title,gen,spec) {
try {
if(typeof(s_account) == 'undefined') return;
var s=s_gi(s_account);
if(!IsEmpty(title)) {s.pageName = pageName;}
if(!IsEmpty(gen)) {s.prop6= gen;}
s.prop7	= spec;
s.t();
}
catch( e ) {}
}
function DisplayPopUp( strLayer, bShow ) {
try {
Element.setStyle(strLayer, {visibility: ( bShow ? "visible" : "hidden" )});
}
catch( e ) {
HandleError( "DisplayPopUp", e, M_strGFileName );
}
}
function IsEmpty( strVal ) {
try {
return ( strVal == null || strVal == "undefined" || strVal.strip() == "");
}
catch( e ) {
HandleError( "IsEmpty", e, M_strGFileName );
}
}
function isFormNumber ( n ) {
try {
return !isNaN(parseFloat(n)) && isFinite(n);
}
catch( e ) {
HandleError( "isFormNumber", e, M_strGFileName );
}
}
function HandleError( strFunction, err, strFile ) {
try {
var msg = "Sorry, we're having a problem.  Please try refreshing your browser as this issue may be temporary.\n\nDetails: | File Name: " + strFile + " | Function Name: " + strFunction + " | Message: " + err + ", " + err.description;
var p = document.createElement("p");
p.setAttribute("style","margin: 50px auto 0px auto;text-align: center;width: 900px;");
var ntxt = document.createTextNode(msg);
p.appendChild(ntxt);
document.body.appendChild(p);
}
catch( e ) {
alert( "Sorry, we're having a problem.  Please try refreshing your browser as this issue may be temporary.\n\nDetails: \nFile Name: " + strFile + "\nFunction Name: " + strFunction + "\nMessage: " + err + ", " + err.description);
}
}
function popUp( strURL, strWindowName, strFeatures ){
try {
popUpRef( strURL, strWindowName, strFeatures );
} // End try
catch( e ) {
HandleError( "popUp", e, M_strGFileName );
}
}
function popUpRef( strURL, strWindowName, strFeatures ){
try {
new_window = window.open( strURL, strWindowName, strFeatures );
new_window.focus();
return new_window;
} // End try
catch( e ) {
HandleError( "popUpRef", e, M_strGFileName );
}
}
function popUpIntl( strURL, strWindowName, strFeatures ){
try {
popUpRef( "/us/" + strURL, strWindowName, strFeatures );
} // End try
catch( e ) {
HandleError( "popUp", e, M_strGFileName );
}
}
function autoNext( objStartTxtBox, objNextTxtBox ){
try {
if( objStartTxtBox != null ) {
if ( objStartTxtBox.value.length == objStartTxtBox.getAttribute("maxlength") ) {
objNextTxtBox.focus();
} // End length check
} // End if not null
} // End try
catch( e ) {
HandleError( "autoNext", e, M_strGFileName );
}
}
function SelectDD(id,val) {
try {
var ostate = $(id).options;
var sln = ostate.length;
for (i = 0; i< sln; i++) {
if (ostate[i].value == val) {
ostate[i].selected = true;
break;
}
}
}
catch(e) {
HandleError( "SelectDD", e, M_strGFileName );
}
}
function HideDropdowns() {
try {
var objSelects = document.getElementsByTagName( "select" );
var nodes = $A(objSelects);
nodes.each( function(node) { ShowObject( node, false );} );
M_bIsDropdownHidden = true;
}
catch( e ) {
HandleError( "HideDropdowns", e, M_strGFileName );
}
}
function ShowDropdowns() {
try {
var objSelects = document.getElementsByTagName( "select" );
var nodes = $A(objSelects);
nodes.each( function(node) { ShowObject( node, true );} );
M_bIsDropdownHidden = false;
}
catch( e ) {
HandleError( "ShowDropdowns", e, M_strGFileName );
}
}
function OpenSlideshowL(id) {
try {
popUpRef('/us' + '/popup/media_gallery_photo_b.jsp?OPTION=SAR&assetid=' + id,'win','width=760,height=830,scrollbars=yes,resizable=yes');
}
catch(e) {
HandleError( "OpenSlideshowL", e, M_strGFileName );
}
}
function ValidateEmailSignUpFooter() {
try { return ValidateEmailSignUp("emailForm"); }
catch( e ) {
HandleError( "ValidateSignUpFooter", e, M_strGFileName );
}
}
function fireEvent(element,event) {
if (document.createEvent) {
// dispatch for firefox + others
var evt = document.createEvent("HTMLEvents");
evt.initEvent(event, true, true ); // event type,bubbling,cancelable
return !element.dispatchEvent(evt);
} else {
// dispatch for IE
var evt = document.createEventObject();
return element.fireEvent('on'+event,evt)
}
}
function ValidateEmailSignUp() {
var bIsValid = true;
try {
var emailVal = ($F("txtEmailAddress"));
var strOrigMessage = "Sign Up For Patagonia Emails";
if( emailVal == strOrigMessage ) {
$("txtEmailAddress").value = "";
}
}
catch( e ) {
HandleError( "ValidateSignUp", e, M_strPageName );
}
return bIsValid;
}
function ValidateEmail( strVal )
{
var bIsValid = false;
try {
var emailRegex = new RegExp(/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/);
bIsValid = emailRegex.test(TrimWhitespace(strVal));
if (parseInt(strVal.indexOf("'")) > -1) {
bIsValid = false;
}
}
catch( e ) {
HandleError( "ValidateEmail", e, M_strGFileName );
}
return bIsValid;
}
function ValidateEmailExtendedCharacters( strVal )
{
var bIsValid = false;
try {
var emailRegex = new RegExp(/^([a-zA-Z0-9_.\-@])+$/);
bIsValid = emailRegex.test(TrimWhitespace(strVal));
if (parseInt(strVal.indexOf("'")) > -1) {
bIsValid = false;
}
}
catch( e ) {
HandleError( "ValidateEmail", e, M_strGFileName );
}
return bIsValid;
}
function checkCreditCardAndCVV(ccNumber, cardType, CVV) {
var replyObject = {"cardNumberValid":false, "cardCVVValid": false};
var cardRegex = new RegExp("^[0-9]+$"); // Default CC check, just make sure the card number is digits only.
var cvvRegex =  new RegExp("^[0-9]{3,4}$"); // Default CVV check, just make sure it's three or four digits only.
if (cardType == 'Visa' || cardType == '5') {
cardRegex = new RegExp("^4[0-9]{12}(?:[0-9]{3})?$");
cvvRegex = new RegExp("^[0-9]{3}$");
} else if (cardType == 'Mastercard' || cardType == '7') {
cardRegex = new RegExp("^5[1-5][0-9]{14}$");
cvvRegex = new RegExp("^[0-9]{3}$");
} else if (cardType == 'Discover' || cardType == '6') {
cardRegex = new RegExp("^6(?:011|5[0-9]{2})[0-9]{12}$");
cvvRegex = new RegExp("^[0-9]{3}$");
} else if (cardType == 'American Express' || cardType == '8') {
cardRegex = new RegExp("^3[47][0-9]{13}$");
cvvRegex = new RegExp("^[0-9]{4}$");
}
if (ccNumber.match(cardRegex) != null) {
replyObject['cardNumberValid'] = true;
}
if (CVV.match(cvvRegex) != null) {
replyObject['cardCVVValid'] = true;
}
var intResultLuhn = 0;
if(!isNaN(ccNumber) && ccNumber.length == 16) {
for(i=0;i<16;i+=2) {
intRang1 = Number(ccNumber.charAt(i)) * 2;
if(intRang1>9) {
intRang1 = intRang1 - 9;
}
intResultLuhn = intResultLuhn + intRang1;
}
for (i=1;i<16;i+=2) {
intRang2 = Number(ccNumber.charAt(i));
intResultLuhn = intResultLuhn + intRang2;
}
if(intResultLuhn%10 != 0) {
replyObject['cardNumberValid'] = false;
}
}
return replyObject;
}
function ShowObject( layer, bIsVisible ) {
try {
Element.setStyle(layer, {visibility: ( bIsVisible ? "visible" : "hidden" )});
}
catch( e ) {
HandleError( "ShowLayer", e, M_strGFileName );
}
}
function getOffset( el ) {
try {
var _x = 0;
var _y = 0;
while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
_x += el.offsetLeft - el.scrollLeft;
_y += el.offsetTop - el.scrollTop;
el = el.offsetParent;
}
return { top: _y, left: _x };
}
catch(e) {}
}
function SetTimeout( strCodeToRun, flTimeInSeconds ) {
try {
var flLimit = parseFloat( flTimeInSeconds ) * 1000;
setTimeout( strCodeToRun, flLimit );
}
catch( e ) {
HandleError( "SetTimeout", e, M_strGFileName );
}
}
function WirePopups(arPopupLinks) {
try {
$A(arPopupLinks).each( function(arr) {
var alinks = $A(document.getElementsByClassName(arr[0]));
if(alinks != null) {
alinks.each(function(alink) {
alink.onclick = function () { popUp(alink.href, arr[1], arr[2]); return false; };
}); // end each loop
} //end !=null
});
}
catch( e ) {
HandleError( "WirePopups", e, M_strFileName );
}
}
function BrowserDetect2() {
var _strFrameName 				= "ifrHolsterInfo";
var _objIE 						= new RegExp("(MSIE)","i").test(navigator.userAgent)
var _objFF 						= new RegExp("(Firefox)","i").test(navigator.userAgent)
var _objSafari 					= new RegExp("(Safari)","i").test(navigator.userAgent)
var _noPFWBrowsers				= "Safari,linux,Opera"
var _bOverrideShowPFW			= false;
var _bShowPfwOverride			= false;
this.isIE = function() {
return _objIE;
}
this.isFF = function() {
return _objFF;
}
this.isSafari = function() {
return _objSafari;
}
this.showPFW = function() {
if( _bOverrideShowPFW ) {
return _bShowPfwOverride;
}
else {
var noPFWBrowser = false;
var arrNoPFWBrowsers = _noPFWBrowsers.split(",")
for (var i = 0; i < arrNoPFWBrowsers.length; i++) {
var noPFWBrowserSignature = arrNoPFWBrowsers[i];
if (new RegExp("("+noPFWBrowserSignature+")","i").test(navigator.userAgent)) {
//found a noPFWBrowser signature
noPFWBrowser = true;
break;
}
}
return noPFWBrowser;
}
}
this.setOverridePFW = function( bVal ) { _bOverrideShowPFW = bVal; }
this.setShowPFWOverride = function( bVal ) { _bShowPfwOverride = bVal; }
}
function TrimWhitespace( strInput )
{
var strReturn;
try {
if( strInput != null && strInput != ""){
strReturn =  strInput.toString().replace(/^\s+/g, '').replace(/\s+$/g, '');
}
else {
strReturn = strInput;
}
}
catch( e ) {
HandleError( "TrimWhitespace", e, M_strGFileName );
}
return strReturn;
}
function ExcerptText( strInput, charMax, appendString) {
try {
if (charMax === undefined) { charMax = 200; }
if (appendString === undefined) { appendString = "..."; }
if (strInput.length <= charMax) {
return strInput;
} else {
var breakPoint = strInput.indexOf(" ", charMax);
if (breakPoint != -1) {
return strInput.substring(0, breakPoint) + appendString;
}
}
} catch( e ) {
HandleError( "ExcerptText", e, M_strGFileName );
}
}
function dateDifference(theDate, errorMessage) {
theDate = theDate.replace(" ","T") + "Z";
var testDate = Date.parse(theDate);
if (isNaN(testDate)) {
if (errorMessage === undefined) {
return null;
} else {
return errorMessage;
}
} else {
var now = new Date();
var dateDifference = Math.abs(now - testDate);
var dateDifferenceString = "";
var diffValue = 0;
// years
diffValue = Math.floor(dateDifference / ( 1000 * 60 * 60 * 24 * 365));
if (diffValue > 0) {
dateDifferenceString = diffValue + " year" + (diffValue == 1 ?"":"s") + " ago";
} else {
// months
diffValue = Math.floor(dateDifference / ( 1000 * 60 * 60 * 24 * 30));
if (diffValue > 0) {
dateDifferenceString = diffValue + " month" + (diffValue == 1 ?"":"s") + " ago";
} else {
// weeks
diffValue = Math.floor(dateDifference / ( 1000 * 60 * 60 * 24 * 7));
if (diffValue > 0) {
dateDifferenceString = diffValue + " week" + (diffValue == 1 ?"":"s") + " ago";
} else {
// days
diffValue = Math.floor(dateDifference / ( 1000 * 60 * 60 * 24));
if (diffValue > 0) {
dateDifferenceString = diffValue + " day" + (diffValue == 1 ?"":"s") + " ago";
} else {
// hours
diffValue = Math.floor(dateDifference / ( 1000 * 60 * 60));
if (diffValue > 0) {
dateDifferenceString = diffValue + " hours ago";
} else {
dateDifferenceString = " just now";
}
}
}
}
}
return dateDifferenceString;
}
}
function BrowserProperty( strField, strFrame ) {
var _bIsSet 				= false;
var _bIsType 				= false;
var _strFieldName 	= strField;
var _strFrameName 	= strFrame;
this.isOfType = function() {
try {
_bIsType = this.getHiddenBrowserVal();
return _bIsType;
}
catch(e) { return false; }
}
this.getHiddenBrowserVal = function() {
var bReturnVal 			= false;
var ifrHolsterInfo 	= window.frames[_strFrameName];
if ( ifrHolsterInfo != null ) {
if( ifrHolsterInfo.document.getElementById( _strFieldName ) ) {
bReturnVal = Boolean( parseInt( ifrHolsterInfo.document.getElementById( _strFieldName ).value ) );
_bIsSet = true;
}
else {
bReturnVal = false;
}
}
return bReturnVal;
}
}
function recref(cname) {
var v;
try {
var v = Cookie.get(cname);
Cookie.erase(cname);
}
catch(e) {
HandleError( "recref", e, M_strGFileName );
}
finally { return v; }
}
function GetSessionId() {
var sid = "";
try {
var cookiesid = Cookie.get("ts");
if(IsEmpty(cookiesid)) {
var cd = new Date();
sid = cd.getTime();
Cookie.set("ts",sid);
}
else {
sid = cookiesid;
}
}
catch(e) {}
finally { return sid; }
}
function GetUserId() {
var uid = "";
try {
var cookieuid = Cookie.get("uid");
if(!IsEmpty(cookieuid)) {
uid = cookieuid;
}
}
catch(e) {}
finally { return uid; }
}
function MM_preloadImages() { //v3.0
var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
var placeHolder = {
keydown: function(el){
var inputVal = el.value;
if(inputVal.length == 0){
//alert(el.previous('label'));
el.previous('label').hide();
}
},
//Shows & Hides the placeholder label
keyup: function(el){
var inputVal = el.value;
if(inputVal.length > 0){
el.previous('label').hide();
} else {
el.previous('label').show();
}
},
//Shows the placeholder label on blur of there is not a value
blur: function(el){
var inputVal = el.value;
if(inputVal.length == 0) {
el.previous('label').show();
}
},
//Hides the placeholder label if there is a value on page load
pageLoad: function(){
$$('.placeholder input[type=text],.placeholder input[type=password],.placeholder input[type=email]').each(function(el){
// check for text
var inputVal = el.value;
if(inputVal.length > 0  && inputVal != ''){
el.previous('label').hide();
}
// add events
Event.observe(el, 'blur', function () {placeHolder.blur(this);});
Event.observe(el, 'keydown', function () {placeHolder.keydown(this);});
Event.observe(el, 'keyup', function () {placeHolder.keyup(this);});
Event.observe(el, 'change', function () {placeHolder.keyup(this);});
});
}
}
var validateForm = {
msg : {
/*example messaging
email: "Please enter a valid email address.",
*/
username: 'Please enter your User Name',
password: 'Please enter your Password',
email: 'Email address is required.',
emailinvalid: 'Invalid email address. Must be of the form: \'name@something.xyz\'',
zipcode: 'Zip Code cannot be blank',
zipnumber: 'Zip Code must be 5 digits',
required: 'This is a required field'
},
//checks to see if validation conditions are met and hides the errors
keyUp: function(el){
$(el).observe('keyup', function(){
if(el.value != ''){
var labelError = $(el).up().previous();
if(labelError && labelError.hasClassName('error')) {
labelError.remove();
el.removeClassName('error');
}
}
});
},
selectChange: function(el){
$(el).observe('change', function(){
if(el.value != ''){
var labelError = $(el).up().previous();
if(labelError && labelError.hasClassName('error')) {
labelError.remove();
el.removeClassName('error');
}
}
});
},
//shows the error message
errorMsg: function(id,msg){
$(id).addClassName('error');
if(!$('errorlabel' + id)){
$(id).up().insert({'before': '<label id="errorlabel' + id + '" class="error" for="' + id + '">' + msg + '</label>'});
}
},
//regex to validate email
email: function(email) {
var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;  //"
return email.match(re);
}
}
var touchVersion = 'no-touch';
//Call  on DOM Loaded if you need to know if it is a touch device
var touchCheck = function(){
if ("ontouchstart" in document.documentElement) {
var touchVersion = 'touch';
document.body.addClassName('touch');
}
/*
no ie7 support
else {
no ie7 support document.body.addClassName('no-touch');
}
*/
}
var vteTweet = function(el){
var textbox = $('vteinput'),
intent  = {
base     : 'https://twitter.com/intent/tweet?', // This is the base url for the intent
text     : 'I vote the environment #becauseilove ' + textbox.value, // This is the text you would like inserted
hashtags : '', // These are associated hashtags
url      : 'http://www.votetheenvironment.org', // The URL associated with the intent
related  : 'patagonia' // The handle(s) that you want to ask people to follow after the tweet
}, href;
// Create the href
href = intent.base;
// Add text to intent
if (intent.text) {
href += 'text=' + encodeURIComponent(intent.text);
}
// Add related if present
if (intent.related) {
href += '&related=' + encodeURIComponent(intent.related);
}
// add hashtags if present
if (intent.hashtags) {
href += '&hashtags=' + intent.hashtags;
}
// add urk if present
if (intent.url) {
href += '&url=' + intent.url;
}
// Set the intent
el.href = href;
}
function LaunchIntlShip() {
return false;
}
