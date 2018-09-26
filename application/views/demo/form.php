<?php echo form_open('OpsUser/addUp', 'class="form-horizontal"')?>
                            <!--<form class="form-horizontal" role="form">-->
                                <!--Start KTP-->
                                    <h5> Pax Arrival</h5>
                                    <div class="hr hr8 hr-double hr-dotted"></div>

                                    <div class="space-4"></div>
                                    
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Produk</label>

										<div class="col-sm-4">
											<input type="text" name="nama_lengkap" placeholder="Produk Name" required class="col-xs-12 col-sm-12" maxlength="13" value="<?php echo @$_SESSION['nama_lengkap_us'];?>"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Promo Sale</label>

										<div class="col-sm-4">
											<input type="text" name="promo_sale" placeholder="Promo Sale" required class="col-xs-12 col-sm-12" maxlength="9" value="<?php echo @$_SESSION['username_us'];?>"/>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Special Sale</label>

										<div class="col-sm-4">
											<input type="text" name="special_sale" placeholder="Special Sale" required class="col-xs-12 col-sm-12" maxlength="9" value="<?php echo @$_SESSION['username_us'];?>"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Status Promark</label>

										<div class="col-sm-4">
                                            <select name="status_promark" class="form-control" required>
												<?php
													$stts=$_SESSION['status_us'];
													if ($stts== "Y") echo "<option value='Y' selected>ACTIVE</option>";
														else echo "<option value='Y'>ACTIVE</option>";
													if ($stts== "N") echo "<option value='N' selected>INACTIVE</option>";
														else echo "<option value='N'>INACTIVE</option>";
												?>
                                            </select>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Url Tujuan</label>

										<div class="col-sm-4">
											<input type="text" name="url_tujuan" placeholder="Url Tujuan" required class="col-xs-12 col-sm-12" maxlength="9" value="<?php echo @$_SESSION['username_us'];?>"/>
										</div>
									</div>

									<div class="space-4"></div>
                                <!--End KTP-->


									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info btn-xs" type="submit">
												<i class="ace-icon fa fa-save bigger-110"></i>
												Save
											</button>
											<a href="<?php echo site_url('OpsPromark');?>"
												class="btn btn-default btn-xs">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Back
											</a>
										</div>
									</div>
							</form>