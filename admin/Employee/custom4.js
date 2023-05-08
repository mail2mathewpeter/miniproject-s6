$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
        var customer_name=$('#customer_name'+id).text();
		var mobile=$('#mobile'+id).text();
		var start=$('#start_date'+id).text();
		var end_date1=$('#end_date1'+id).text();
		var place1=$('#place'+id).text();
		var children=$('#children'+id).text();
		var first=$('#caravanname'+id).text();
		var adults_new=$('#adults_new'+id).text();
		var file1=$('#caravantype'+id).text();
		var file2=$('#caravanmodel'+id).text();
        var file3=$('#caravanregno'+id).text();
        var file4=$('#amount'+id).text();
		var employee=$('#employee'+id).text();
		

		$('#edit').modal('show');
		$('#customer_name').val(customer_name);
		$('#mobile').val(mobile);
		$('#start_date').val(start);
		$('#end_date1').val(end_date1);
		$('#children').val(children);
		$('#adults_new').val(adults_new);
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