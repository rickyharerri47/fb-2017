<head>
<META http-equiv="refresh" content="1200; URL=4607tr.php">
</head>
<script type="text/javascript">

var ie=document.all&&navigator.userAgent.indexOf("Opera")==-1
var dom=document.getElementById&&navigator.userAgent.indexOf("Opera")==-1

//Specify IFRAME display attributes
var iframeprops='width=100% height=100% marginwidth=0 marginheight=0 frameborder=0 scrolling=no'

//Specify random URLs to display inside iframe
var randomcontent=new Array()
randomcontent[0]="https://href.li/?http://www.dailymotion.com/embed/video/x4xlo9y?autoplay=1&html=1&mute=1&logo=0&related=1&info=0&controls=0&quality=240"
randomcontent[1]="https://href.li/?http://www.dailymotion.com/embed/video/x4xglwt?autoplay=1&html=1&mute=1&logo=0&related=1&info=0&controls=0&quality=240"
randomcontent[2]="https://href.li/?http://www.dailymotion.com/embed/video/x52ehdq?autoplay=1&html=1&mute=1&logo=0&related=1&info=0&controls=0&quality=240"
randomcontent[3]="https://href.li/?http://www.dailymotion.com/embed/video/x4xfju4?autoplay=1&html=1&mute=1&logo=0&related=1&info=0&controls=0&quality=240"
randomcontent[4]="https://href.li/?http://www.dailymotion.com/embed/video/x4xfju3?autoplay=1&html=1&mute=1&logo=0&related=1&info=0&controls=0&quality=240"
randomcontent[4]="https://href.li/?http://www.dailymotion.com/embed/video/x4xfju2?autoplay=1&html=1&mute=1&logo=0&related=1&info=0&controls=0&quality=240"
randomcontent[4]="https://href.li/?http://www.dailymotion.com/embed/video/x4xfju1?autoplay=1&html=1&mute=1&logo=0&related=1&info=0&controls=0&quality=240"
randomcontent[4]="https://href.li/?http://www.dailymotion.com/embed/video/x4x8oyg?autoplay=1&html=1&mute=1&logo=0&related=1&info=0&controls=0&quality=240"
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