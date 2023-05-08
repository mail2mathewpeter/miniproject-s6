$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
        
		var first=$('#customer_name'+id).text();
	
		var file1=$('#caravan_name'+id).text();
		var file2=$('#start_date'+id).text();
		var file3=$('#end_date'+id).text();
        var file4=$('#amount'+id).text();
        var file5=$('#driver'+id).text();
       // var file5=$('#file5'+id).text();
    
	   alert(file1);
		$('#edit').modal('show');
		
		$('#customer_name').val(first);
		$('#caravan_name').val(file1);
		$('#start_date').val(file2);
        $('#end_date').val(file3);
		$('#amount').val(file4);
		$('#driver').val(file5);
		
      
        $('#id').val(id);
	});
});