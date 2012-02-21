// JavaScript Document
function setTab(id,idx,url){
	var liset = document.getElementById(id).getElementsByTagName('li');
	for(var i=0; i<liset.length; i++){
		if(i==idx){
			liset[i].className = "curtab";
			document.getElementById('intro').src = url;
		}
		else{
			liset[i].className = "";
		}
	}
}
