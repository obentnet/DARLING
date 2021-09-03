/**
 * DARLING Theme.
 */
var copy = "\u0050\u006f\u0077\u0065\u0072\u0065\u0064\u0020\u0042\u0079\u0020\u0054\u0079\u0070\u0065\u0063\u0068\u006f\u0020\u007c\u0020\u0054\u0068\u0065\u006d\u0065\u0020\u0042\u0079\u0020\u0044\u0041\u0052\u004c\u0049\u004e\u0047";
var tips = "\u8bf7\u4e0d\u8981\u5220\u9664\u7248\u6743\u4fe1\u606f\uff0c\u5c0a\u91cd\u6210\u679c\uff01"
console.log("%c theme: DARLING %c Links: https://yujienb.cn ","color:#fff;background-color:#81D4FA;padding:5px","margin: 1em 0; padding: 5px 0; background: #efefef;");
if(document.getElementById("copyright")){
    console.log('Copyright still here.');
    document.getElementById("copyright").innerHTML = copy
}else{
    console.log('Copyright not be .')
    document.getElementById("body").innerHTML = tips
}