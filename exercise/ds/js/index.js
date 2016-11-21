window.onload=function()
{
	var oNavOl=document.getElementById('picOl');
	var oNavUl=document.getElementById('picUl');
	var aOlLi=oNavOl.getElementsByTagName('li');
	var aUlLi=oNavUl.getElementsByTagName('li');
	var timer=null;
	var iNow=0;
	for(var i=0; i<aOlLi.length; i++)
	{
		
		aOlLi[i].index=i;
		aOlLi[i].onmouseover=function()
		{
			for(var i=0; i<aOlLi.length; i++)
			{
				aOlLi[i].className='';
				aUlLi[i].style.display='none';
			}
			this.className='active';
			aUlLi[this.index].style.display='block';
		};
	}
	timer=setInterval(goRun,2000);
	oNavUl.onmouseover=function(){
		clearInterval(timer);
	}
	oNavUl.onmouseout=function(){
		timer=setInterval(goRun,2000);
	}
	function goRun(){
		for(var i=0; i<aOlLi.length; i++)
		{
			aOlLi[i].className='';
			aUlLi[i].style.display='none';
		}
		if(iNow==aOlLi.length-1){
			iNow=0;
		}
		else{
			iNow++;
		}
		aOlLi[iNow].className='active';
		aUlLi[iNow].style.display='block';
	}
};
