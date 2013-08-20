/*
Lightbox++ v1.0.1 (Initial Release)
Modification by Justin Lyric - http://www.codefidelity.com
Wednesday, July 4th, 2007 (Happy 4th!)
For installation instructions and script updates, please visit:
http://www.codefidelity.com/blog/?page_id=7
Original Lightbox Script by Lokesh Dhakar
http://www.huddletogether.com/projects/lightbox2/
Modifications by Patagonia to handle AJAX calls to fetch and retrieve product data
Still licensed under the Creative Commons Attribution 2.5 License - http://creativecommons.org/licenses/by/2.5/
This script allows you to use the same Lightbox functionality that you're used to as well as
embed Flash movies.
*/
var fileLoadingImage = "/assets/patagonia/blue-grad-loader.gif";
var fileBottomNavCloseImage = "assets/gorillazen/btn_close.gif";
var fallbackOverlayImage = "/assets/patagonia/overlay.png";
var overlayOpacity = 0.2;
var overlayOrig = 0.2;
var animate = true;
var resizeSpeed = 7;
var borderSize = 10;
var borderOrig = 10;
var elementArray = new Array;
var activeElement;
var userAgent = navigator.userAgent.toLowerCase();
if(animate == true){
overlayDuration = 0.2;
if(resizeSpeed > 10){ resizeSpeed = 10;}
if(resizeSpeed < 1){ resizeSpeed = 1;}
resizeDuration = (11 - resizeSpeed) * 0.15;
} else {
overlayDuration = 0;
resizeDuration = 0;
}
Object.extend(Element, {
getWidth: function(element) {
element = $(element);
return element.offsetWidth;
},
setWidth: function(element,w) {
element = $(element);
if (element.style) { element.style.width = w +"px";}
},
setHeight: function(element,h) {
element = $(element);
if (element.style) { element.style.height = h +"px"; }
},
setTop: function(element,t) {
element = $(element);
if (element.style) { element.style.top = t +"px"; }
},
setLeft: function(element,l) {
element = $(element);
if (element.style) { element.style.left = l +"px"; }
},
setSrc: function(element,src) {
element = $(element);
if (element.src) { element.src = src; }
},
setHref: function(element,href) {
element = $(element);
if (element.href) { element.href = href; }
},
setInnerHTML: function(element,content) {
element = $(element);
if (element.innerHTML) { element.innerHTML = content; }
}
});
Array.prototype.removeDuplicates = function () {
for(i = 0; i < this.length; i++){
for(j = this.length-1; j>i; j--){
if(this[i][0] == this[j][0]){
this.splice(j,1);
}
}
}
}
Array.prototype.empty = function () {
for(i = 0; i <= this.length; i++){
this.shift();
}
}
var Lightbox = Class.create();
Lightbox.prototype = {
"isprdltbox" : false,
"isswfltbox" : false,
"istxtltbox" : false,
"startht" : 250,
"startwd"	: 250,
initialize: function() {
this.updateElementList();
var objBody = document.getElementsByTagName("body").item(0);
var objOverlay = document.createElement("div");
objOverlay.setAttribute('id','overlay');
if (userAgent.indexOf('mac') != -1 && userAgent.indexOf('firefox')!=-1 || userAgent.indexOf('camino')!=-1) {
objOverlay.style.backgroundImage = 'url('+fallbackOverlayImage+')';
objOverlay.style.backgroundRepeat = 'repeat';
}else{
objOverlay.style.backgroundColor = '#000000';
}
objOverlay.style.display = 'none';
objOverlay.onclick = function() { myLightbox.end(); }
objBody.appendChild(objOverlay);
var objLightbox = document.createElement("div");
objLightbox.setAttribute('id','lightbox');
objLightbox.style.display = 'none';
objLightbox.onclick = function(e) {
if(window.event) {window.event.cancelBubble = true;}
if (!e) var e = window.event;
var clickObj = Event.element(e).id;
if ( clickObj == 'lightbox') {
myLightbox.end();
}
};
objBody.appendChild(objLightbox);
var objOuterImageContainer = document.createElement("div");
objOuterImageContainer.setAttribute('id','outerImageContainer');
objLightbox.appendChild(objOuterImageContainer);
if(animate){
Element.setWidth('outerImageContainer', this.startwd);
Element.setHeight('outerImageContainer', this.startht);
} else {
Element.setWidth('outerImageContainer', 1);
Element.setHeight('outerImageContainer', 1);
}
var objImageContainer = document.createElement("div");
objImageContainer.setAttribute('id','imageContainer');
objOuterImageContainer.appendChild(objImageContainer);
var objContent = document.createElement("div");
objContent.setAttribute('id','lightboxcontent');
objImageContainer.appendChild(objContent);
var objLightboxImage = document.createElement("img");
objLightboxImage.setAttribute('id','lightboximage');
objLightboxImage.style.display = 'none';
objContent.appendChild(objLightboxImage);
objLightboxSwf = document.createElement("div");
objLightboxSwf.setAttribute('id','lightboxswf');
objLightboxSwf.style.position = 'relative';
objLightboxSwf.style.zIndex = 101; // Safari
objLightboxSwf.style.display = 'none';
objContent.appendChild(objLightboxSwf);
var objHoverNav = document.createElement("div");
objHoverNav.setAttribute('id','hoverNav');
objImageContainer.appendChild(objHoverNav);
var objPrevLink = document.createElement("a");
objPrevLink.setAttribute('id','prevLink');
objPrevLink.setAttribute('href','#');
objHoverNav.appendChild(objPrevLink);
var objNextLink = document.createElement("a");
objNextLink.setAttribute('id','nextLink');
objNextLink.setAttribute('href','#');
objHoverNav.appendChild(objNextLink);
var objLoading = document.createElement("div");
objLoading.setAttribute('id','loading');
objImageContainer.appendChild(objLoading);
var objLoadingLink = document.createElement("div");
objLoadingLink.setAttribute('id','loadiv');
objLoading.appendChild(objLoadingLink);
var objImageDataContainer = document.createElement("div");
objImageDataContainer.setAttribute('id','imageDataContainer');
objLightbox.insertBefore(objImageDataContainer,objOuterImageContainer);
if(animate){
Element.setWidth('imageDataContainer', this.startwd);
Element.setHeight('imageDataContainer',20);
} else {
Element.setWidth('imageDataContainer', 1);
Element.setHeight('imageDataContainer', 1);
}
var objImageData = document.createElement("div");
objImageData.setAttribute('id','imageData');
objImageDataContainer.appendChild(objImageData);
var objImageDetails = document.createElement("div");
objImageDetails.setAttribute('id','imageDetails');
objImageData.appendChild(objImageDetails);
var objCaption = document.createElement("span");
objCaption.setAttribute('id','caption');
objCaption.setAttribute('style','font-size:12px;');
objImageDetails.appendChild(objCaption);
var objNumberDisplay = document.createElement("span");
objNumberDisplay.setAttribute('id','numberDisplay');
objImageDetails.appendChild(objNumberDisplay);
var objBottomNav = document.createElement("div");
objBottomNav.setAttribute('id','bottomNav');
objImageData.appendChild(objBottomNav);
var objBottomNavCloseLink = document.createElement("a");
objBottomNavCloseLink.setAttribute('id','bottomNavClose');
objBottomNavCloseLink.setAttribute('href','#');
objBottomNavCloseLink.onclick = function() { myLightbox.end(); return false; }
objBottomNav.appendChild(objBottomNavCloseLink);
var objBottomNavCloseImage = document.createElement("img");
objBottomNavCloseImage.setAttribute('src', fileBottomNavCloseImage);
objBottomNavCloseImage.setAttribute('alt', 'close');
objBottomNavCloseImage.setAttribute('title', 'close');
objBottomNavCloseLink.appendChild(objBottomNavCloseImage);
},
updateElementList: function() {
if (!document.getElementsByTagName){ return; }
var anchors = document.getElementsByTagName('a');
var areas = document.getElementsByTagName('area');
for (var i=0; i<anchors.length; i++){
var anchor = anchors[i];
var relAttribute = String(anchor.getAttribute('rel'));
if (anchor.getAttribute('href') && (relAttribute.toLowerCase().match('lightbox'))){
if(anchor.onclick == null) {
anchor.onclick = function () {myLightbox.start(this); return false;}
}
else {
Event.observe(anchor, 'click', function () {myLightbox.start(this);return false;});
}
}
}
for (var i=0; i< areas.length; i++){
var area = areas[i];
var relAttribute = String(area.getAttribute('rel'));
if (area.getAttribute('href') && (relAttribute.toLowerCase().match('lightbox'))){
if(anchor.onclick == null) {
anchor.onclick = function () {myLightbox.start(this); return false;}
}
else {
Event.observe(anchor, 'click', function () {myLightbox.start(this);return false;});
}
}
}
},
start: function(elementLink) {
this.prepPage();
if (!document.getElementsByTagName){ return; }
var anchors = document.getElementsByTagName(elementLink.tagName);
if((elementLink.getAttribute('rel') == 'lightbox')){
// Add single image or SWF to elementArray
elementArray.push(new Array(elementLink.getAttribute('href'), elementLink.getAttribute('title'), elementLink.getAttribute('width'), elementLink.getAttribute('height'),elementLink));
} else {
for (var i=0; i<anchors.length; i++){
var anchor = anchors[i];
if (anchor.getAttribute('href') && (anchor.getAttribute('rel') == elementLink.getAttribute('rel'))){
elementArray.push(new Array(anchor.getAttribute('href'), anchor.getAttribute('title'), anchor.getAttribute('width'), anchor.getAttribute('height')));
}
}
elementArray.removeDuplicates();
while(elementArray[elementNum][0] != elementLink.getAttribute('href')) { elementNum++;}
}
this.doOffsets();
Element.show('lightbox');
this.changeElement(elementNum);
},
startWith: function(src,title,wd,ht) {
this.prepPage();
elementArray.push(new Array(src, title, wd, ht));
this.doOffsets();
Element.show('lightbox');
this.changeElement(elementNum);
},
launchNoBorder: function(src,title,wd,ht,op) {
this.showLBBorders(false,op);
this.borderrestore = this.lbrestore;
this.prepPage();
elementArray.push(new Array(src, title, wd, ht));
this.doOffsets();
Element.show('lightbox');
this.changeElement(elementNum);
},
startWithTxt: function(id,title,wd,ht) {
this.prepPage();
elementArray.push(new Array(id, title, wd, ht));
this.doOffsets();
Element.show('lightbox');
this.changeElement(elementNum);
},
changeElement: function(elementNum) {
activeElement = elementNum;
if(animate){ Element.show('loading');}
Element.hide('lightboximage');
Element.hide('lightboxswf');
Element.hide('hoverNav');
Element.hide('prevLink');
Element.hide('nextLink');
Element.hide('numberDisplay');
if (this.isswfltbox){ // SWF
Element.setStyle('imageContainer', {padding: '0px 10px 0px 10px'});
myLightbox.resizeElementContainer(parseInt(elementArray[activeElement][2]), parseInt(elementArray[activeElement][3]));
}
else if(this.istxtltbox) {
$('lightboxswf').innerHTML = "";
Element.setStyle('imageContainer', {padding: '0px'});
$("lightboxswf").innerHTML = $(elementArray[activeElement][0]).innerHTML;
myLightbox.resizeElementContainer(parseInt(elementArray[activeElement][2]), parseInt(elementArray[activeElement][3]));
}
else if(this.isprdltbox) {
var ajxurl = elementArray[activeElement][0];
$('lightboxswf').innerHTML = "";
Element.setStyle('imageContainer', {padding: '0px'});
var objAjax = new AjaxWrapper();
objAjax.refreshObject();
objAjax.setIsXml(false);
objAjax.setDestinationPath(ajxurl);
objAjax.startRequest();
objAjax.onRequestError = function() {
alert(objAjax.getErrorText());
window.location = elementArray[activeElement][0];
return;
}
objAjax.onRequestComplete = function() {
try {
var respText = TrimWhitespace(objAjax.getResponseText());
if(respText.indexOf("]]][[[") > 0) {
var ar = respText.split("]]][[[");
$("lightboxswf").innerHTML = ar[1];
eval(ar[0]);
ResizeLightbox(myLightbox);
}
else {
$("lightboxswf").innerHTML = respText;
myLightbox.resizeElementContainer(parseInt(elementArray[activeElement][2]), parseInt(elementArray[activeElement][3]));
}
}
catch(e) {
return;
}
}
}
else {
imgPreloader = new Image();
Element.setStyle('imageContainer', {padding: '10px'});
imgPreloader.onload=function(){
Element.setSrc('lightboximage', elementArray[activeElement][0]);
myLightbox.resizeElementContainer(imgPreloader.width, imgPreloader.height);
imgPreloader.onload=function(){};
}
imgPreloader.src = elementArray[activeElement][0];
}
},
resizeElementContainer: function(elementWidth, elementHeight) {
this.widthCurrent = Element.getWidth('outerImageContainer');
this.heightCurrent = Element.getHeight('outerImageContainer');
var widthNew = (elementWidth  + (borderSize * 2));
var heightNew;
if(this.isswfltbox) {
heightNew = (elementHeight  + (borderSize));
}
else {
heightNew = (elementHeight  + (borderSize * 2));
}
this.xScale = ( widthNew / this.widthCurrent) * 100;
this.yScale = ( heightNew / this.heightCurrent) * 100;
wDiff = this.widthCurrent - widthNew;
hDiff = this.heightCurrent - heightNew;
if(!( hDiff == 0)){
new Effect.Scale('outerImageContainer', this.yScale, {scaleX: false, duration: resizeDuration, queue: 'front'});
}
if(!( wDiff == 0)){
new Effect.Scale('outerImageContainer', this.xScale, {scaleY: false, delay: resizeDuration, duration: resizeDuration});
new Effect.Scale('imageDataContainer', this.xScale, {scaleY: false, delay: resizeDuration, duration: resizeDuration});
}
if((hDiff == 0) && (wDiff == 0)){
if (navigator.appVersion.indexOf("MSIE")!=-1){ pause(250); } else { pause(100);}
}
this.showElement();
},
showElement: function(){
Element.hide('loading');
if(this.isswfltbox) { // SWF
$('lightboximage').style.display = 'none';
var obj = $('lightboxswf');
var arrf = elementArray[activeElement][4];
if(arrf != null && typeof(arrf)=='object') {
var imgsrc = elementArray[activeElement][4].innerHTML;
imgsrc = imgsrc.replace("wid=360","wid=600");
imgsrc = imgsrc.replace("hei=360","hei=600");
imgsrc = imgsrc.replace("class=\"mainimg\"","");
obj.innerHTML = imgsrc;
}
var runner = "var so = new SWFObject('" + elementArray[activeElement][0] + "', 'lblayer', " + elementArray[activeElement][2] + ", " + elementArray[activeElement][3] + ", '7', '#ffffff');"
runner += "so.addParam('scale','noscale');";
runner += "so.addParam('height','600px');";
runner += "so.addParam('width','600px');";
runner += "so.addParam('allowscriptaccess','always');";
runner += "so.addParam('wmode','transparent');";
runner += "so.addParam('quality','high');";
runner += "so.write(obj);";
eval(runner);
new Effect.Appear('lightboxswf', {  duration: resizeDuration, queue: 'end', from: 0.0, to: 100, afterFinish: function(){ myLightbox.updateDetails(); } });
}
else if(this.isprdltbox || this.istxtltbox) {
new Effect.Appear('lightboxswf', {  duration: resizeDuration, queue: 'end', from: 0.0, to: 100, afterFinish: function(){ myLightbox.updateDetails(); } });
}
else {
$('lightboxswf').style.display = 'none';
new Effect.Appear('lightboximage', { duration: resizeDuration, queue: 'end', afterFinish: function(){ myLightbox.updateDetails(); } });
this.preloadNeighborImages();
}
},
updateDetails: function() {
if(elementArray[activeElement][1]){
Element.setInnerHTML( 'caption', elementArray[activeElement][1]);
Element.show('caption');
}
if(elementArray.length > 1){
Element.show('numberDisplay');
if(elementArray[activeElement][0].endsWith('swf')) { // SWF
Element.setInnerHTML( 'numberDisplay', "Movie " + eval(activeElement + 1) + " of " + elementArray.length);
}else{ // Image
Element.setInnerHTML( 'numberDisplay', "Image " + eval(activeElement + 1) + " of " + elementArray.length);
}
}
var arrayPageSize = getPageSize();
Element.setHeight('overlay', arrayPageSize[1]);
myLightbox.updateNav();
},
doOffsets: function() {
var arrayPageScroll = getPageScroll();
this.isswfltbox = elementArray[elementNum][0].endsWith('swf');
this.isprdltbox = elementArray[elementNum][0].endsWith('prd');
this.istxtltbox = elementArray[elementNum][0].endsWith('txt');
lightboxTop = arrayPageScroll[1] + ((parseInt(arrayPageSize[3]) - parseInt(elementArray[elementNum][3])) / 2);
lightboxLeft = arrayPageScroll[0];
if(lightboxTop < 0) lightboxTop = 0;
Element.setTop('lightbox', lightboxTop);
Element.setLeft('lightbox', lightboxLeft);
},
prepPage: function() {
hideSelectBoxes();
hideFlash();
var arrayPageSize = getPageSize();
Element.setWidth('overlay', arrayPageSize[0]);
Element.setHeight('overlay', arrayPageSize[1]);
if (userAgent.indexOf('mac') != -1 && userAgent.indexOf('firefox')!=-1 || userAgent.indexOf('camino')!=-1) {
Element.show('overlay');
}else{
new Effect.Appear('overlay', { duration: overlayDuration, from: 0.0, to: overlayOpacity });
}
elementArray = [];
elementNum = 0;
},
updateNav: function() {
Element.show('hoverNav');
if(activeElement != 0){
Element.show('prevLink');
$('prevLink').onclick = function() {
myLightbox.changeElement(activeElement - 1); return false;
}
}
if(activeElement != (elementArray.length - 1)){
Element.show('nextLink');
$('nextLink').onclick = function() {
myLightbox.changeElement(activeElement + 1); return false;
}
}
this.enableKeyboardNav();
},
enableKeyboardNav: function() {
document.onkeydown = this.keyboardAction;
},
disableKeyboardNav: function() {
document.onkeydown = '';
},
keyboardAction: function(e) {
},
preloadNeighborImages: function(){
if((elementArray.length - 1) > activeElement){
preloadNextImage = new Image();
preloadNextImage.src = elementArray[activeElement + 1][0];
}
if(activeElement > 0){
preloadPrevImage = new Image();
preloadPrevImage.src = elementArray[activeElement - 1][0];
}
},
borderrestore: function() {},
lbrestore: function() {
this.showLBBorders(true);
},
showLBBorders: function(b_doShow,op) {
var idcPaddingTop, idcVisible, oicBGColor, icPadding, border, overlay, opacity;
if(op) {
opacity = op;
}
else {
opacity = 0.75;
}
if(b_doShow) {
idcPaddingTop = "10px";
idcVisible = "visible";
oicBGColor = "#ffffff";
icPadding = "10px 10px 0px 10px";
border = borderOrig;
overlay = overlayOrig;
}
else {
idcPaddingTop = "0px";
idcVisible = "hidden";
oicBGColor = "transparent";
icPadding = "0px";
border = 0;
overlay = opacity;
}
var idc = $("imageDataContainer");
idc.style.paddingTop = idcPaddingTop;
idc.style.visibility = idcVisible;
$("outerImageContainer").style.backgroundColor = oicBGColor;
$("imageContainer").style.padding = icPadding;
borderSize = border;
overlayOpacity = overlay;
},
end: function() {
this.disableKeyboardNav();
Element.hide('lightbox');
new Effect.Fade('overlay', { duration: overlayDuration, afterFinish: function(){ $('lightboxswf').innerHTML = ''; Element.hide('caption');}} );
showSelectBoxes();
showFlash();
otherclose();
this.borderrestore();
if(typeof lpSendData==='function') {
try {
lpSendData('page','BlockInv','false');
} catch(e) {}
}
}
}
function getPageScroll(){
var xScroll, yScroll;
if (self.pageYOffset) {
yScroll = self.pageYOffset;
xScroll = self.pageXOffset;
} else if (document.documentElement && document.documentElement.scrollTop){	 // Explorer 6 Strict
yScroll = document.documentElement.scrollTop;
xScroll = document.documentElement.scrollLeft;
} else if (document.body) {// all other Explorers
yScroll = document.body.scrollTop;
xScroll = document.body.scrollLeft;
}
arrayPageScroll = new Array(xScroll,yScroll)
return arrayPageScroll;
}
function getPageSize(){
var xScroll, yScroll;
if (window.innerHeight && window.scrollMaxY) {
xScroll = window.innerWidth + window.scrollMaxX;
yScroll = window.innerHeight + window.scrollMaxY;
} else if (document.body.scrollHeight > document.body.offsetHeight){
xScroll = document.body.scrollWidth;
yScroll = document.body.scrollHeight;
} else {
xScroll = document.body.offsetWidth;
yScroll = document.body.offsetHeight;
}
var windowWidth, windowHeight;
if (self.innerHeight) {
if(document.documentElement.clientWidth){
windowWidth = document.documentElement.clientWidth;
} else {
windowWidth = self.innerWidth;
}
windowHeight = self.innerHeight;
} else if (document.documentElement && document.documentElement.clientHeight) {
windowWidth = document.documentElement.clientWidth;
windowHeight = document.documentElement.clientHeight;
} else if (document.body) {
windowWidth = document.body.clientWidth;
windowHeight = document.body.clientHeight;
}
if(yScroll < windowHeight){
pageHeight = windowHeight;
} else {
pageHeight = yScroll;
}
if(xScroll < windowWidth){
pageWidth = xScroll;
} else {
pageWidth = windowWidth;
}
arrayPageSize = new Array(pageWidth,pageHeight,windowWidth,windowHeight)
return arrayPageSize;
}
function getKey(e){
if (e == null) { // ie
keycode = event.keyCode;
} else { // mozilla
keycode = e.which;
}
key = String.fromCharCode(keycode).toLowerCase();
if(key == 'x'){
}
}
function listenKey () {	document.onkeypress = getKey; }
function showSelectBoxes(){
var selects = document.getElementsByTagName("select");
for (i = 0; i != selects.length; i++) {
selects[i].style.visibility = "visible";
}
}
function hideSelectBoxes(){
var selects = document.getElementsByTagName("select");
for (i = 0; i != selects.length; i++) {
selects[i].style.visibility = "hidden";
}
}
function showFlash(){
var flashObjects = document.getElementsByTagName("object");
for (i = 0; i < flashObjects.length; i++) {
flashObjects[i].style.visibility = "visible";
}
var flashEmbeds = document.getElementsByTagName("embed");
for (i = 0; i < flashEmbeds.length; i++) {
flashEmbeds[i].style.visibility = "visible";
}
}
function hideFlash(){
var flashObjects = document.getElementsByTagName("object");
for (i = 0; i < flashObjects.length; i++) {
flashObjects[i].style.visibility = "hidden";
}
var flashEmbeds = document.getElementsByTagName("embed");
for (i = 0; i < flashEmbeds.length; i++) {
flashEmbeds[i].style.visibility = "hidden";
}
}
function lbclose() {
myLightbox.end();
}
function otherclose() {}
function lbnbShow(url,t,w,h,op) {
myLightbox.launchNoBorder(url,t,w,h,op);
if (typeof lpSendData === 'function') {
try {
lpSendData('page','BlockInv','true');
} catch(e) {}
}
}
function lbnbShowNoLocale(url,t,w,h) {
lbnShow('/us' + url,t,w,h);
if (typeof lpSendData === 'function') {
try {
lpSendData('page','BlockInv','true');
} catch(e) {}
}
}
function pause(ms){
var date = new Date();
curDate = null;
do{var curDate = new Date();}
while( curDate - date < ms);
}
function initLightbox() { myLightbox = new Lightbox(); }
Event.observe(window, 'load', initLightbox, false);
