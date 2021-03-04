<div class="modal fade" id="update_modal<?php echo $fetch['v_id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_query(v1).php" enctype="multipart/form-data">
				<div class="modal-header">
					<h3 class="modal-title">แก้ไขข้อมูล</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-12">
						<label><b>รูป</b></label>
						<br>
                            <input type="file" name="v_image" id="v_image"  value="Send File"/>
                            <br></br>
                        <label><b>คำนำหน้า</b></label>  
                          <select type="gender" id="v_prefix" name="v_prefix" value="<?php echo $fetch['v_prefix']?>"class="form-control">  
                               <option value="">---กรุณาเลือก---</option>
                               <option value="นาย">นาย</option>  
                               <option value="นาง">นาง</option>
                               <option value="นางสาว">นางสาว</option>  
                        </select>
                        <br>
                         <div class="form-group">    
							<label><b>ชื่อ</b></label>
							<input type="text" name="v_name" value="<?php echo $fetch['v_name']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label><b>นามสกุล</b></label>
							<input type="text" name="v_lname" value="<?php echo $fetch['v_lname']?>" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label><b>อายุ</b></label>
							<input type="text" name="v_age" value="<?php echo $fetch['v_age']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
                            <label><b>รายละเอียด</b></label>
                             <textarea name="v_detail" id="v_detail"><?php echo $fetch['v_detail']?></textarea>
                            <script>
        ClassicEditor
            .create( document.querySelector( '#v_detail' ) )
            .catch( error => {
                console.error( error );
            } );
    </script> 
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

    <!-- delete -->
    <div  class="modal fade" id="delete_modal<?php echo $fetch['b_id']?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="delete_query.php" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h3 class="modal-title">ลบข้อมูล</h3>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="delete" class="btn btn-primary" data-emp-id="<?php echo $rows["b_id"]; ?>" href="javascript:void(0)"><span class="glyphicon glyphicon-save"></span>ยืนยันการลบ</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>ยกเลิก</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>    
    </div>
    <!-- end delete -->