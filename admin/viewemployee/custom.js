$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
        
		var first=$('#customer_name'+id).text();
		var file1=$('#employee_address'+id).text();
		var file2=$('#email'+id).text();
        var file3=$('#mobile'+id).text();
        var file4=$('#gender'+id).text();
        var file5=$('#employee_designation'+id).text();
        var file6=$('#year'+id).text();
		var file7=$('#date'+id).text();
		$('#edit').modal('show');
		$('#caravan_name').val(first);
		$('#employee_address').val(file1);
		$('#email').val(file2);
        $('#mobile').val(file3);
		$('#gender').val(file4);
		$('#employee_designation').val(file5);
        $('#year').val(file6);
		$('#date').val(file7);
        $('#id').val(id);
	});
});