<!-- FILE UPLOAD -->
<script type="text/javascript">
$(document).ready(function(){
	$(".toggle_container").hide();
	$("h4.trigger").click(function(){
		$(this).toggleClass("active").next().slideToggle("slow");
	});
});
</script>
<hr class='flourishes'>
<br />
<div class='attachFileDiv'>
<h4 class='trigger'>Click to attach a file</h4>
<div class='toggle_container'>
<div class='addFileDiv'>
<!-- max file size here to avoid waiting for uploading a too big file (can be fooled browser side) -->
<input type='hidden' name='MAX_FILE_SIZE' value='200000000000000000000' />
<script type='text/javascript'>
function add_file_field(){
var container=document.getElementById('file_container');
var com_container=document.getElementById('filecomment_container');
var file_field=document.createElement('input');
var com_file_field=document.createElement('input');
file_field.name='files[]';
com_file_field.name='filescom[]';
com_file_field.setAttribute('size', '35');
com_file_field.setAttribute('placeholder', 'Enter a comment for the file');
com_file_field.setAttribute('class', 'com_file_field');
file_field.type='file';
container.appendChild(file_field);
container.appendChild(com_file_field);
var br_field=document.createElement('br');
container.appendChild(br_field);
}
</script>
<div id='file_container'>
    <input name="files[]" type="file"  />
    <input size='35' placeholder='Enter a comment for the file' name='filescom[]' />
  </div>
<br />
<img src='img/attach_add.png' alt='' /> <a href="javascript:void(0);" onClick="add_file_field();">Add another file</a><br />
</div>
</div><!-- end toggle container -->
</div>
<hr class='flourishes'><!-- END FILE UPLOAD -->
