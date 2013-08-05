function renderMap()
{
	var jSon = $.getJSON(url,function(data)
	{
		if(data.error != undefined)
		{
			for (i in markers) {
				markers[i].setMap(null);
			  }
		}
		else
		{
			mapOptions = 
			{
				center: new google.maps.LatLng(18.923825,98.682922),
				zoom: 12,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

			markers = new Array();
			infowindow = new google.maps.InfoWindow();

			$.each(data, function(i, field)
			{					
				markers[i] = new google.maps.Marker({ 
					markerid: field.Cus_Id,
					title: field.Name,
					label: field.Address,
					lat: field.Latitude,
					lng: field.Longitude,
					position: new google.maps.LatLng(field.Latitude, field.Longitude),
					map: map,
					icon: field.icon,
				});
					

				if(field.r_code > 0)
				{
					contentMarker[i] =  '<a style="cursor: pointer;"></a><br><font color="blue" size="-1"><b>ชื่อลูกค้า : ' + field.Name +' <br><font color="#cc00ff" size="-1">ที่อยู่ลูค้า : '+ field.Address+'';
					
				}
				else
				{
					contentMarker[i] =  '<a style="cursor: pointer;"></a><br><font color="blue" size="-1"><b>ชื่อลูกค้า : ' + field.Name +' <br><font color="#cc00ff" size="-1">ที่อยู่ลูค้า : '+ field.Address+'';
					
					
				}				

				google.maps.event.addListener(markers[i], 'click', function() 
				{	
					infowindow.setContent(contentMarker[i]);
					infowindow.open(map, markers[i]);
					map.setCenter(markers[i].getPosition());
					//show_left(markers[i].home_id);
				});
			});
		}
	});
}
$(function()
{
	
	$.get('showDriver.php',function(data)
	{
		$('#showDri').html(data);
	});
	
	$.get('show.php',function(data)
	{
		$('#showCus').html(data);
	});
	
});