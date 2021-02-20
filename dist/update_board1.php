<div class="modal fade" id="update_modal<?php echo $fetch['b_id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_query.php">
				<div class="modal-header">
					<h3 class="modal-title">Update User</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>รูป</label>
                                <input type="file" name="b_image" required="required"/>
                                <br></br>
							<label>ชื่อ</label>
							<input type="hidden" name="b_id" value="<?php echo $fetch['b_id']?>"/>
							<input type="text" name="b_name" value="<?php echo $fetch['b_name']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>นามสกุล</label>
							<input type="text" name="b_lname" value="<?php echo $fetch['b_lname']?>" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label>ตำแหน่ง</label>
							<input type="text" name="b_status" value="<?php echo $fetch['b_status']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>ตำแหน่ง</label>
							<input type="text" name="เบอร์โทรศัพท์" value="<?php echo $fetch['b_phone']?>" class="form-control" required="required"/>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>