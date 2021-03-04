<div class="modal fade" id="update_modal<?php echo $fetch['l_id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_query(landmark1).php" enctype="multipart/form-data">
				<div class="modal-header">
					<h3 class="modal-title">แก้ไขข้อมูล</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-12">
						<label><b>รูป</b></label>
                                <br>
                                <input type="file" name="l_image" id="l_image" value="<?php echo $fetch['v_image']?>"required="required" value="Send File" />
                                <br></br>  
                                <label><b>รายละเอียด</b></label>
                                <textarea name="l_detail" id="l_detail"  class="form-control"><?php echo $fetch['l_detail']?></textarea>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span>บันทึก</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>ยกเลิก</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>