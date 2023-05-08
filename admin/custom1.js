$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
        
		var first=$('#caravan_name'+id).text();
		var file1=$('#file1'+id).text();
		var file2=$('#file2'+id).text();
        var file3=$('#file3'+id).text();
        var file4=$('#file4'+id).text();
        var file5=$('#file5'+id).text();
        var file6=$('#file6'+id).text();

		$('#edit').modal('show');
		$('#caravan_name').val(first);
		$('#file1').val(file1);
		$('#file2').val(file2);
        $('#file3').val(file3);
		$('#file4').val(file4);
		$('#file5').val(file5);
        $('#file6').val(file6);
        $('#id').val(id);
	});
});