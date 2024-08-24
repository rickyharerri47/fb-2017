<script type="text/javascript">

var ie=document.all&&navigator.userAgent.indexOf("Opera")==-1
var dom=document.getElementById&&navigator.userAgent.indexOf("Opera")==-1

//Specify IFRAME display attributes
var iframeprops='width=230 height=230 marginwidth=0 marginheight=0 frameborder=0 scrolling=no'

//Specify random URLs to display inside iframe
var randomcontent=new Array()
randomcontent[1]="http://www.dailymotion.com/embed/video/x3hi3o6?logo=0&autoplay=1&hideInfos=1&muted=1&volume=0&forcedQuality=sd"
randomcontent[2]="http://www.dailymotion.com/embed/video/x3hhr1c?logo=0&autoplay=1&hideInfos=1&muted=1&volume=0&forcedQuality=sd"
randomcontent[3]="http://www.dailymotion.com/embed/video/x3hj3m1?logo=0&autoplay=1&hideInfos=1&muted=1&volume=0&forcedQuality=sd"
randomcontent[4]="http://www.dailymotion.com/embed/video/x3hh9wv?logo=0&autoplay=1&hideInfos=1&muted=1&volume=0&forcedQuality=sd"
randomcontent[5]="http://www.dailymotion.com/embed/video/x3hje51?logo=0&autoplay=1&hideInfos=1&muted=1&volume=0&forcedQuality=sd"
randomcontent[6]="http://www.dailymotion.com/embed/video/x3hhkam?logo=0&autoplay=1&hideInfos=1&muted=1&volume=0&forcedQuality=sd"
randomcontent[7]="http://www.dailymotion.com/embed/video/x3hkoq7?logo=0&autoplay=1&hideInfos=1&muted=1&volume=0&forcedQuality=sd"
randomcontent[8]="http://www.dailymotion.com/embed/video/x3hmlpu?logo=0&autoplay=1&hideInfos=1&muted=1&volume=0&forcedQuality=sd"
randomcontent[9]="http://www.dailymotion.com/embed/video/x3hmlyz?logo=0&autoplay=1&hideInfos=1&muted=1&volume=0&forcedQuality=sd"
randomcontent[10]="http://www.dailymotion.com/embed/video/x3hgwe1?logo=0&autoplay=1&hideInfos=1&muted=1&volume=0&forcedQuality=sd"


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