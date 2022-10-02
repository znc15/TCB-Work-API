//注释部分是设置2秒的定时延迟，timeout结束后加载网页
      //setTimeout(() => {
        // $(".loading-div").hide();
        //$('body').css('overflow-y','scroll');
     // }, 2000);
//这是根据js判断，页面加载完毕就显示
document.onreadystatechange = function () {
    if (document.readyState == "complete") {    
        $(".loading-div").hide();
        $('body').css('overflow','scroll');
    }
  }