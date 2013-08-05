$(function()
{
	initialize();
	$('#informationMain').html('');
			$.getJSON('show.php',function(data)
		{
			alert(data);
		$('#informationMain').html('');
		$.each(data,function(key,val){
		$('#informationMain').html(
		$('#informationMain').html()+
		'<div id="data'+val['Cus_Id']+'">'
		+'<table>'
		+'<tr><td width="300">'
		+'<font color="white" size=4>'
		+val['Name']
		+'</font>'
		+'</td></tr></table></div>'
		);
		});
		});
});

function del(id)
	{
	
	$.get('delete.php',{'deletecus':id},function(data)
		{
			//alert(id);
			window.location.reload()
		});
		
	}