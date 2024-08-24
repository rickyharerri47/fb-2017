<script type="text/javascript">

var ie=document.all&&navigator.userAgent.indexOf("Opera")==-1
var dom=document.getElementById&&navigator.userAgent.indexOf("Opera")==-1

//Specify IFRAME display attributes
var iframeprops='width=300 height=250 marginwidth=0 marginheight=0 frameborder=0 scrolling=no'

//Specify random URLs to display inside iframe
var randomcontent=new Array()
randomcontent[0]="https://href.li/?http://www.dailymotion.com/embed/video/x3hs8b4?ui-logo=0&autoplay=1&mute=1&quality=240&controls=0&endscreen-enable=0&sharing-enable=0"
randomcontent[1]="https://href.li/?http://www.dailymotion.com/embed/video/x3hs8b3?ui-logo=0&autoplay=1&mute=1&quality=240&controls=0&endscreen-enable=0&sharing-enable=0"
//No need to edit after here
if (ie||dom)
document.write('<iframe id="dynstuff" src="" '+iframeprops+'></iframe>')

function random_iframe(){
if (ie||dom){
var iframeobj=document.getElementById? document.getElementById("dynstuff") : document.all.dynstuff
iframeobj.src=randomcontent[Math.floor(Math.random()*randomcontent.length)]
}
}

window.onload=random_iframe

</script>