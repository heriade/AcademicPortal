
$(function(){
	
	$(document).on('click','#checkin',function(){
		var name = $('#name').val();
		var mate = $('#mate').val();
		var pass = $('#pass').val();
		var cpass = $('#cpass').val();
		
		if(name=='' || mate=='' || pass=='' || cpass==''){
			//alert("empty");
			new Messi('empty field',{title:'Error Message',titleClass:'anim error'});	
		}else{
				
			if(pass==cpass){

		$.post('page/cityServer.php',{signup:'Sign Up',name:name,mate:mate,pass:pass,cpass:cpass},function(data){
			
				data1=data.replace(/(\r\n|\n|\r)/gm,"");
				
				if(data1=='success'){
			new Messi("User Added Successfully",{title:'Biocalc|Error', titleClass: 'success' });	
			location="page/spage.php";	
				}else{
			new Messi("<b>"+data+"</b>",{title:'Biocalc|Error', titleClass: 'anim error' });		
				}
			});
		}else{
		new Messi("Password does not match",{title:'Biocalc|Error',titleClass:'anim error'});
		}
	}
	});
	
	
	$(document).on('click','#comm',function(){
		var cname = $('#cname').val();
		var cmail = $('#cmail').val();
		var cmt = $('#cmt').val();
			
		if(cname=='' || cmail=='' || cmt==''){
			//alert("empty");
			new Messi('empty field',{title:'Error Message',titleClass:'anim error'});	
		}else{
				
		$.post('page/cityServer.php',{signup:'comment',cname:cname,cmail:cmail,cmt:cmt},function(data){
			
				data1=data.replace(/(\r\n|\n|\r)/gm,"");
				
				if(data1=='success'){
			new Messi("User Added Successfully",{title:'Biocalc|Error', titleClass: 'success' });
				}else{
			new Messi("<b>"+data+"</b>",{title:'Biocalc|Error', titleClass: 'anim error' });		
				}
			});
	}
	});
	
});