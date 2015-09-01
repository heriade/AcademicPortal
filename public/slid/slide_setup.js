$(document).ready(function() {

<!-- ===========================slide on and close =======================-->

	$("#slideit").click(function(){
		$("div#slidepanel").slideDown("slow");
	});
	
	$("#closeit").click(function(){
		$("div#slidepanel").slideUp("slow");
	});
	
	$("#chartopen").click(function(){
		$("div#chartpanel").slideDown("slow");
	});
	
	$("#chartclose").click(function(){
		$("div#chartpanel").slideUp("slow");
	});
    
	
<!-- ===========================toggle =======================-->	
	$("#toggle a").click(function(){
		
		$("#toggle a").toggle();
	});
	
	$("#Chart").toggle(function(){
		$("#ch").slideDown('1000');
		}, function(){
		$("#ch").slideUp('1000');
	});
	
<!-- ===========================plugin class=======================-->
	$('#sout').bind('click', function(e) {
        e.preventDefault();
        $('div#signout').addClass($.Zebra_Dialog('<strong>Creating student forum:</strong><br><br>', {
            source: {'ajax': 'page/login.php'},
            width: 500,
            title:  'Sign Up Here'
        }));
    });
	
	
	/*$("#sout").click(function(){
		$("div#signout").($.Zebra_Dialog('<strong>Some dummy content:</strong><br><br>', {
            source: {'ajax': 'page/login.php'}, width: 600, title:  'Sign Up here'
        });
		
		//$("div#signout").addClass(new Messi.load('page/login.php',{title:'SignUp Log',modal:'true'}));
		//$("div#login")function.load("login.php");
		//$("div#slidepanel").slideDown("slow");
	});*/
	
	$("#coment").click(function(){
		//$("div#comment").addClass(new Messi.load('page/comment.php',{title:'Comment Box',modal:'true'}));
		//$("div#login")function.load("login.php");
		//$("div#slidepanel").slideDown("slow");
		$("div#comment").addClass($.Zebra_Dialog('<strong>Drop your comment:</strong><br><br>', {
            source: {'ajax': 'page/comment.php'}, width: 600, title:  'Comment Here'
        }));
		
	});
	
});

	
