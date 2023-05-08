$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
        
		var first=$('#caravanname'+id).text();
		var file1=$('#caravantype'+id).text();
		var file2=$('#caravanmodel'+id).text();
        var file3=$('#caravanregno'+id).text();
        var file4=$('#amount'+id).text();
		

		$('#edit').modal('show');
		$('#caravanname').val(first);
		$('#caravantype').val(file1);
		$('#caravanmodel').val(file2);
        $('#caravanregno').val(file3);
		$('#amount').val(file4);
        $('#id').val(id);
	});
});