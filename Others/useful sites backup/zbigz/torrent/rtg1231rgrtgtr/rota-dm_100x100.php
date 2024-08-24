<script type="text/javascript">

var ie=document.all&&navigator.userAgent.indexOf("Opera")==-1
var dom=document.getElementById&&navigator.userAgent.indexOf("Opera")==-1

//Specify IFRAME display attributes
var iframeprops='width=100% height=100% marginwidth=0 marginheight=0 frameborder=0 scrolling=no'

//Specify random URLs to display inside iframe
var randomcontent=new Array()
randomcontent[0]="http://www.dailymotion.com/embed/video/x2v3pfc?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"
randomcontent[1]="http://www.dailymotion.com/embed/video/x2v3mio?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"
randomcontent[2]="http://www.dailymotion.com/embed/video/x2v3mip?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"
randomcontent[3]="http://www.dailymotion.com/embed/video/x2v3min?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"
randomcontent[4]="http://www.dailymotion.com/embed/video/x2v3miq?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"
randomcontent[5]="http://www.dailymotion.com/embed/video/x2v3pf8?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"
randomcontent[6]="http://www.dailymotion.com/embed/video/x2v3pfa?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"
randomcontent[7]="http://www.dailymotion.com/embed/video/x2v3pfb?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"
randomcontent[8]="http://www.dailymotion.com/embed/video/x2v3pfe?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"
randomcontent[9]="http://www.dailymotion.com/embed/video/x2v3mim?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"
randomcontent[10]="http://www.dailymotion.com/embed/video/x2vyjdy?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"
randomcontent[11]="http://www.dailymotion.com/embed/video/x2vteqd?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"
randomcontent[12]="http://www.dailymotion.com/embed/video/x2vteqf?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"
randomcontent[13]="http://www.dailymotion.com/embed/video/x2vteqh?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"
randomcontent[14]="http://www.dailymotion.com/embed/video/x2vteqj?logo=0&autoplay=1&hideInfos=1&automute=1&volume=0&unmuteOnMouseOver=1&forcedQuality=sd"


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