<div class="modal fade" id="update_modal<?php echo $fetch['b_id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_query1.1.php" enctype="multipart/form-data">
				<div class="modal-header">
					<h3 class="modal-title">แก้ไขข้อมูล</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-12">
						<label><b>คำนำหน้า</b></label>  
                          <select type="gender" id="b_prefix" name="b_prefix" value="<?php echo $fetch['b_prefix']?>"class="form-control">  
                               <option value="">-------</option>
                               <option value="นาย">นาย</option>  
                               <option value="นางสาว">นางสาว</option>  
                          </select>
                          <br>
                        <div class="form-group">
							<label><b>ชื่อ</b></label>
							<input type="hidden" name="b_id" value="<?php echo $fetch['b_id']?>"/>
							<input type="text" name="b_name" value="<?php echo $fetch['b_name']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label><b>นามสกุล</b></label>
							<input type="text" name="b_lname" value="<?php echo $fetch['b_lname']?>" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label><b>ตำแหน่ง</b></label>
							<input type="text" name="b_status" value="<?php echo $fetch['b_status']?>" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label><b>รายละเอียดเพิ่มเติม</b></label>
							<input type="text" name="b_detail" value="<?php echo $fetch['b_detail']?>" class="form-control" required="required" />
						</div>
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