<script type="text/javascript">

var ie=document.all&&navigator.userAgent.indexOf("Opera")==-1
var dom=document.getElementById&&navigator.userAgent.indexOf("Opera")==-1

//Specify IFRAME display attributes
var iframeprops='width=230 height=230 marginwidth=0 marginheight=0 frameborder=0 scrolling=no'

//Specify random URLs to display inside iframe
var randomcontent=new Array()
randomcontent[0]="http://www.dailymotion.com/embed/video/x2v3pfc?logo=0&autoplay=1&hideInfos=1&muted=1&volume=0&forcedQuality=sd,http://www.dailymotion.com/embed/video/x2v3mio?logo=0&autoplay=1&hideInfos=1&muted=1&volume=0&forcedQuality=sd"




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