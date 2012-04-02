// JavaScript Document
	var isNav = (navigator.appName == "Netscape");
	var isIE = (navigator.appName == "Microsoft Internet Explorer");
	var isOpera = (navigator.userAgent.indexOf("Opera") != -1);
	
	function getIEVersionNumber()
	{
		var ua = navigator.userAgent;
		var MSIEOffset = ua.indexOf("MSIE");
		if(MSIEOffset == -1)
		{
			return 0;
		}
		else
		{
			return parseFloat(ua.substring(MSIEOffset+5, ua.indexOf(";",MSIEOffset)));
		}
	}
	
	function write_css(path)
	{
		document.write('<link rel="stylesheet" href="'+ path+'/styleie.css" type="text/css" media="screen" />');
	}
	
	ie = getIEVersionNumber();
	
	f = false;
	if(ie<7 && isIE)
	{
		f = true;
	}