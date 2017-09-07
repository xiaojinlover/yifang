</section>
<script src="js/jquery.min.1.11.3.js"></script> 
<script src="lib/jquery-ui/jquery-ui.js"></script> 
<script src="lib/bootstrap/js/bootstrap.js"></script> 
<script src="lib/jquery-toggles/toggles.js"></script> 
<script src="js/quirk.js"></script>
<script src="lib/select2/select2.js"></script>


<script src="js/echarts.min.js"></script>

<script src="js/bootstrap-datetimepicker.js"></script>
<script src="js/bootstrap-datetimepicker.zh-CN.js"></script>

<script src="js/bootstrap-dialog.js"></script>

<script src="lib/jquery.gritter/jquery.gritter.js"></script>

<script src="lib/jquery-maskedinput/jquery.maskedinput.js"></script>
<script src="lib/jquery-confirm2/js/jquery-confirm.js"></script>
<script>
	$(function(){
		$.ajaxSetup({
            cache: false,
            async: false
        });
		
		$('.datepicker').datetimepicker({
            format: "yyyy-mm-dd",
            minView: 2,
            language: 'zh-CN',
            autoclose: true,
            todayBtn: 'linked'
        });
		
		$('.monthpicker').datetimepicker({
            language:  'zh-CN',
			format: 'yyyy-mm',
			autoclose: true,
			todayBtn: true,
			startView: 'year',
			minView:'year',
			maxView:'decade'
        });
		//timepicker
		$('.timepicker').mask("99:99");
		
		//select		
		$(".select1").select2({ minimumResultsForSearch: Infinity });
		//弹出提示
		$('#growlSuccess').click(function(){
			$.gritter.add({
				title: '成功提示',
				text: '添加成功',
				class_name: 'with-icon check-circle' ,
				time:1000
			});
		});
		
		
	})
	
</script>

</body>
</html>
