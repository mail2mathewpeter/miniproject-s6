$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
        
		var first=$('#caravan_name'+id).text();
		var start=$('#start'+id).text();
		var end=$('#end'+id).text();
		$('#edit').modal('show');
		$('#caravan_name').val(first);
		$('#start').val(start);
		$('#end').val(end);
        $('#id1').val(id);
 
            email2 =id;
        start =start;
            end = end;

           

          
            $.ajax({
                            type:'POST',
                            url:'employeecheck.php',
                            data:{
                              
                              email2: email2,
                              start: start,
                              end: end
                            
                            },
                            success:function(result){
                               
                                $('#select').html(result);
                               
                             
                               
                            }
                          
                            })
            });
          });
      
       
