$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
        var customer_name=$('#customer'+id).text();
		var mobile=$('#mobile'+id).text();
		var start=$('#start'+id).text();
		var end=$('#end'+id).text();
		var place1=$('#place'+id).text();
		var children=$('#children'+id).text();
		var first=$('#caravanname'+id).text();
		var adults=$('#adults'+id).text();
		var file1=$('#caravantype'+id).text();
		var file2=$('#caravanmodel'+id).text();
        var file3=$('#caravanregno'+id).text();
        var file4=$('#amount'+id).text();
		var employee=$('#employee'+id).text();
		
	
		$('#edit').modal('show');
		$('#customer_name').val(customer_name);
		$('#mobile').val(mobile);
		$('#start').val(start);
		$('#end').val(end);
		$('#children').val(children);
		$('#adults').val(adults);
		$('#place').val(place1);
		$('#caravanname').val(first);
		$('#caravantype').val(file1);
		$('#caravanmodel').val(file2);
        $('#caravanregno').val(file3);
		$('#amount').val(file4);
		$('#employee').val(employee);
        $('#id').val(id);
	});
});