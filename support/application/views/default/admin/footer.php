</div>

</div>


<div class="container">
	<div class="offset3">
<a href="http://getvivekv.bitbucket.org/fuse">Fuse</a> Support Ticket System |
<a href="https://bitbucket.org/getvivekv/fuse/issues/new">Report Bug</a>	
	</div>
</div>



<script>
$(function(){
       $(".select2").select2({
             placeholder: "Select a value",
             width: 'resolve'
        });
        
        
       
       $("[rel=tooltip]").popover({
            'animation' : 'true',
            'trigger': 'hover',
        });
        
        $(".jsconfirm").live('click',function(e){
    
        		e.preventDefault();
        		link = $(this).attr("href");
        		bootbox.confirm("Are you sure you want to perform this action ?", function(result) {
        		if(result == true )
        		{
            		window.location = link ;    
        		}
        		}); 
        });
        
});
    
</script>







</body>
</html>
