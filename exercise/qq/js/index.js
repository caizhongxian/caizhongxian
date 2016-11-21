// JavaScript Document

window.onload=function()
{
	var oPicList=document.getElementById('picList');
	var oPicNum=document.getElementById('picNum');
	var aList=oPicList.getElementsByTagName('li');
	var aNum=oPicNum.getElementsByTagName('li');
	var timer=null;
	var iNow=0;
	var num=0;
	
	aList[0].style.display='block';
	for(var i=0;i<aNum.length; i++)
	{
		aNum[i].index=i;
		aNum[i].onclick=function()
		{
			for(var i=0;i<aNum.length;i++)
			{
				aNum[i].className='';
				aList[i].style.display='none';
			}
			this.className='active';
			aList[this.index].style.display='block';
		};
	}
	timer=setInterval(goRun,2000);
	oPicList.onmouseover=function(){
		clearInterval(timer);
	}
	oPicList.onmouseout=function(){
		timer=setInterval(goRun,2000);
	}
	function goRun(){
		for(i=0;i<aNum.length;i++){
			aNum[i].className='';
			aList[i].style.display='none';
		}
		if(iNow==aNum.length-1){
			iNow=0;
		}
		else{
			iNow++;
		}
		aNum[iNow].className='active';
		aList[iNow].style.display='block';
	}
};