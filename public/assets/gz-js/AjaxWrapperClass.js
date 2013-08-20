//Copyright (c) 2005 Allan Spartacus Mangune, allan@lexysoft.com, http://www.ajaxgear.com
//Permission is hereby granted, free of charge, to any person
//obtaining a copy of this software and associated documentation
//files (the "Software"), to deal in the Software without restriction,
//including without limitation the rights to use, copy, modify, merge,
//publish, distribute, sublicense, and/or sell copies of the Software,
//and to permit persons to whom the Software is furnished to do so,
//subject to the following conditions:
//The above copyright notice and this permission notice shall be included
//in all copies or substantial portions of the Software.
//THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
//EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
//MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
//IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
//DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
//ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE
//OR OTHER DEALINGS IN THE SOFTWARE.
function AjaxWrapper()
{
// Private members
var _objXmlHttp;
var _objXslDoc;
var _bIsXslLoaded 			= false;
var _strResponseText 		= "";
var _objResponseXml;
var _strMethod 					= "GET";
var _bIsAsynchronous 		= true;
var _strRequestData 		= "";
var _strErrorText				= "";
var _objThis 						= this;
var _strDestinationPath = "";
var _bIsXml 						= false;
var _bIsMozilla 				= false;
// Properties
//Gets the method to be invoked.
this.getMethod = function () { return _strMethod; }
this.getErrorText = function () { return _strErrorText; }
// Returns flag indicating whether or not xsl is loaded
this.getIsXslLoaded = function() { return _bIsXslLoaded; }
//Sets the method to be invoked.
this.setMethod = function (inparam) { _strMethod = inparam; }
//Gets a value that indicates whether or not the call is asynchronous.
this.getIsAsynchronous = function () { return _bIsAsynchronous; }
//Sets a value that indicates whether or not the call is asynchronous.
this.setIsAsynchronous = function (inparam) { _bIsAsynchronous = inparam; }
//Gets the query string of the post method.
this.getRequestData = function () { return _strRequestData;}
//Sets the query string of the post method.
this.setRequestData = function (inparam) { _strRequestData = inparam;}
//Gets the text reponse of the server.
this.getResponseText = function () { return _strResponseText; }
//Gets the text reponse of the server.
this.getResponseXml = function () { return _objResponseXml; }
//Sets the URL we are posting/getting to
this.setDestinationPath = function (inparam) { _strDestinationPath = inparam; }
//Sets the URL we are posting/getting to
this.getDestinationPath = function () { return _strDestinationPath; }
//Will the response be xml?
this.setIsXml = function (inparam) { _bIsXml = inparam; }
// Events
this.onRequestComplete = function () {};
this.onRequestError = function () {};
// Methods
this.refreshObject = function () {
_strRequestData = "";
_objResponseXml = null;
_strResponseText = "";
_strDestinationPath = "";
}
this.appendRequestData = function ( strKey, strVal ) {
if( _strRequestData.length > 0 ) {
_strRequestData += "&";
}
_strRequestData += strKey;
_strRequestData += "=";
_strRequestData += strVal;
}
// Starts the request to server.
this.startRequest = function(){
CreateXMLHttpRequest();
if ( _strMethod.toUpperCase() == "GET" ){
SendGetRequest();
}
else if (_strMethod.toUpperCase() == "POST"){
SendPostRequest();
}
_objXmlHttp.onreadystatechange = HandleServerResponse;
}
// Sends a get request.
function SendGetRequest()
{
var strAmpersand = "&";
if ( _strRequestData == "" ) {
strAmpersand = "";
}
_objXmlHttp.open( _strMethod, _strDestinationPath + "?" + _strRequestData + strAmpersand + CreateTimestamp(), _bIsAsynchronous );
if ( _bIsXml )
{
//if (_bIsMozilla) _objXmlHttp.overrideMimeType('text/xml');
_objXmlHttp.setRequestHeader( "Content-Type", "text/xml" );
}
_objXmlHttp.send( null );
}
// Sends a post request.
function SendPostRequest()
{
_objXmlHttp.open( _strMethod, _strDestinationPath + "?" + CreateTimestamp() , _bIsAsynchronous );
_objXmlHttp.setRequestHeader( "Content-Type", "application/x-www-form-urlencoded" );
if ( _bIsXml )
{
_objXmlHttp.setRequestHeader( "Content-Type", "text/xml" );
}
_objXmlHttp.send( _strRequestData );
}
// Creates a timestamp for querystring.
function CreateTimestamp()
{
return "timestamp=" + new Date().getTime().toString();
}
// Creates the XMLHttpRequest object.
function CreateXMLHttpRequest (){
if ( window.ActiveXObject ){
_objXmlHttp = new ActiveXObject( "Microsoft.XMLHTTP" );
if ( _objXmlHttp ==  null ){
_objXmlHttp = new ActiveXObject ( "Msxml2.XMLHTTP" );
}
}
else if ( window.XMLHttpRequest ){
_objXmlHttp = new XMLHttpRequest();
_bIsMozilla = true;
if ( _objXmlHttp.overrideMimeType ) {
_objXmlHttp.overrideMimeType( "text/xml" );
}
}
else{
alert("The XMLHttpRequest nor ActiveXObject object could not be created.");
}
}
// Handles server's response
function HandleServerResponse(){
if( _objXmlHttp.readyState == 4 ){
if( _objXmlHttp.status == 200 ){
//alert(_objXmlHttp.responseXML.parseError.errorCode);
_strResponseText 	= _objXmlHttp.responseText;
_objResponseXml 	= _objXmlHttp.responseXML;
_objThis.onRequestComplete();
}
else {
_strErrorText = "Communication error.  Status Code: " + _objXmlHttp.status;
_objThis.onRequestError();
}
}
}
}
