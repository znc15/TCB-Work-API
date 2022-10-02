	 var system ={};
	 var p = navigator.platform;
	 console.log(p)
	  system.win = p.indexOf("Win") == 0;
	  system.mac = p.indexOf("Mac") == 0;
	   system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
	   if(system.win||system.mac||system.xll){//如果是电脑跳转到
	      //window.location.href="#";
	      // alert(888)
	   }else{  //如果是手机,跳转到
	       window.location.href="https://www.miaomc.cn/errors/pconly.html";
	   }