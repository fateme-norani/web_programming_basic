// JavaScript Document
var divscrl;
var libtns;
var piclen;
var picwidth=980;
var corentslid=0 ;
var go2slide,nextslid;
window.onload=function(){
	
	divscrl=document.getElementsByClassName('baner').item(0).getElementsByClassName('scrol').item(0);
	
	libtns=document.getElementsByClassName('baner').item(0).getElementsByClassName('btn').item(0).getElementsByTagName('li');
	
	piclen=libtns.length;
	//alert(piclen);
	
	go2slide=function (n){
		if(n>=piclen) n=0;
		if(n<0) n=piclen-1;
		
		divscrl.style.left = -n*picwidth + 'px';
		corentslid=n;
	};
	
	 nextslid=function(){
		go2slide(corentslid+1);	
	}
	
	backslid=function(){
		go2slide(corentslid-1);		
	}
	
	for(var i=0;i<=piclen;i++){
		(function(index){
			libtns.item(index).onclick=function(){
				go2slide(index);
				//alert(i);
				//alert(divscrl.style.left);
			}
		})(i);
	}
	
}