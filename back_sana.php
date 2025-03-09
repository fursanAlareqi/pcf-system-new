<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==22||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title">  عودة حالة </div>
									</div>
									<div class="card-body">
										
											
										
								
								<div class="row row-demo-grid">
							
									<div class="form-group form-floating-label">
															
										<label for="tokens">رقم الكود</label>
										<select class="selectpicker form-control" name="code" id="tokens"  data-live-search="true" >
											<option value=""></option>
											<?php 
												// find branch
												$branch=$_SESSION['user']['branch_id'];
												
												//end find branch 
												$sql="select DISTINCT(code) from sana where branch=? ";
												$stm=$con->prepare($sql); 
												$stm->execute(array($branch));
												if($stm->rowCount()>0)
													{
														foreach($stm->fetchAll() as $row) 
														{
												
											
												
										
											?>
												<option value="<?php echo $row['code']; ?>"><?php echo $row['code']; ?></option>
												
											<?php
														}
													}
											?>
										
										</select>	
								  </div>
									
							</div>
							
											
										
							<input class="btn btn-success" type="submit" name="search" value="search">
							
										
													
													
											
											
									
									
								</form>
								<?php if(isset($_POST['search'])){
										
										$code=$_POST['code'];
										
										$sql="SELECT * FROM sana where code=?  ORDER BY `sana`.`date` desc  ";	
										$stmu=$con->prepare($sql); 
										$stmu->execute(array($code));
										//عدد الحالات الكلية
										
										
										if($stm->rowCount()>0)
											{
												$row=$stmu->fetch();
											
									
									?>
									<div class="row">
											
										
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
													<label >تاريخ تسجيل الحالة</label>
													<input  type="date"  class="form-control input-border-bottom" id="inputFloatingLabel" name="date"  required >
												</div>
												<div class="form-group form-floating-label">
												
													<div class="form-group form-floating-label">
														<label >رقم الكود</label>
														<input  type="number" value="<?php echo $row['code']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel"   required >
														<input  type="hidden" value="<?php echo $row['code']; ?>"  class="form-control input-border-bottom" id="inputFloatingLabel" name="code"  required >
													</div>
												
													
												
                                                    </div>
												
                                                    <div class="form-group form-floating-label">
														<label >الاسم الرباعي</label>
														<input  type="text" value="<?php echo $row['name']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="name"  required >
													</div>
                                                    <div class="form-group form-floating-label">
														<label >تاريخ الميلاد</label>
														<input  type="date" value="<?php echo $row['brithday']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel"  required  >
														<input  type="hidden" value="<?php echo $row['brithday']; ?>"  class="form-control input-border-bottom" id="inputFloatingLabel" name="brithday"  required >
													</div>
                                                    <div class="form-group form-floating-label">
														<label >الجنس</label>
														<input  type="text" value="<?php echo $row['sex']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel"  required >
														<input  type="hidden" value="<?php echo $row['sex']; ?>"  class="form-control input-border-bottom" id="inputFloatingLabel" name="sex"  required >
													</div>
                                                    <div class="form-group form-floating-label">
                                                        <label >الخدمه </label>
                                                        <select class="selectpicker form-control" multiple  id="tokens ddd"  data-live-search="true" name="services[]" required  >
                                                            <option value="إحالة المستفيدة للخدمات">إحالة المستفيدة للخدمات</option>
                                                            <option value="استشارة نفسية" >استشارة نفسية</option>
                                                            <option value="معاينه طبية"معاينه طبية > </option>
                                                            <option value="بيانات المستفيدة ">بيانات المستفيدة </option>
                                                            <option value=" دعم نفسي أولي" > دعم نفسي أولي</option>
                                                            <option value="جلسة دعم نفسي فردي" >جلسة دعم نفسي فردي</option>
                                                            <option value="جلسة دعم نفسي جماعي" >جلسة دعم نفسي جماعي</option>
                                                            <option value="دعم نفسي توعوي" >دعم نفسي توعوي</option>
                                                            <option value="صرف العلاج" >صرف العلاج</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group form-floating-label">
													<label > الحاله الاجتماعيه</label>
                                                        <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="social_status"  >
                                                            <option ></option>
                                                            <option value="عازب" <?php if( $row['social_status'] == "عازب") echo "selected" ?>>عازب</option>
                                                            <option value="مخطوب/ة"<?php if( $row['social_status'] == "مخطوب/ة") echo "selected" ?>>مخطوب/ة</option>
                                                            <option value="مطلق/ة"<?php if( $row['social_status'] == "مطلق/ة") echo "selected" ?>>مطلق/ة</option>
                                                            <option value="متزوج/ة"<?php if( $row['social_status'] == "متزوج/ة") echo "selected" ?>> متزوج/ة</option>
                                                            <option value="أرمل/ة"<?php if( $row['social_status'] == "أرمل/ة") echo "selected" ?>> أرمل/ة</option>
                                                            <option value="طفل/ة"<?php if( $row['social_status'] == "طفل/ة") echo "selected" ?>> طفل/ة</option>
                                                            <option value="منفصل بشكل غير رسمي"<?php if( $row['social_status'] == "منفصل بشكل غير رسمي") echo "selected" ?>> منفصل بشكل غير رسمي</option>
                                                            <option value="منفصل بشكل غير رسمي">منفصل بشكل غير رسمي </option>
                                                        </select>
												    </div>
                                                    <div class="form-group form-floating-label">
                                                        <label >نوع العمل</label>
                                                        <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="work" required  >
                                                            <option ></option>
                                                            <option value="طالب/ة" <?php if( $row['work'] == "طالب/ة") echo "selected" ?>>طالب/ة</option>
                                                            <option value="ربة بيت" <?php if( $row['work'] == "ربة بيت") echo "selected" ?>>ربة بيت</option>
                                                            <option value="معيل/ة" <?php if( $row['work'] == "معيل/ة") echo "selected" ?>>معيل/ة</option>
                                                            <option value="عسكري/ة" <?php if( $row['work'] == "عسكري/ة") echo "selected" ?>>عسكري/ة</option>
                                                            <option value="عاطل عن العمل" <?php if( $row['work'] == "عاطل عن العمل") echo "selected" ?>>عاطل عن العمل</option>
                                                            <option value="طفل/ة" <?php if( $row['work'] == "طفل/ة") echo "selected" ?>>طفل/ة</option>
                                                            <option value="مدرس/ة" <?php if( $row['work'] == "مدرس/ة") echo "selected" ?>>مدرس/ة</option>
                                                            <option value=" عامل/ة" <?php if( $row['work'] == "عامل/ة") echo "selected" ?>>عامل/ة</option>
                                                            <option value="اخر" <?php if( $row['work'] == "اخر") echo "selected" ?>>اخر</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group form-floating-label">
													    <label >نوع الاقامة </label>
														<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="place"  >
															<option ></option>
															<option value="مقيم/ة"<?php if( $row['place'] == "مقيم/ة") echo "selected" ?>>مقيم/ة</option>
															<option value="لاجى/ة"<?php if( $row['place'] == "لاجى/ة") echo "selected" ?>>لاجى/ة</option>
															<option value="نازح/ة"<?php if( $row['place'] == "نازح/ة") echo "selected" ?> >نازح/ة</option>
														</select>
												    </div>
                                                    <div class="form-group form-floating-label">
													<label >نوع الاعاقة</label>
													    <?php $Disability_explode =explode(",",$row['Disability']);?>
														<select class="selectpicker form-control" multiple  id="tokens ddd"  data-live-search="true" name="Disability[]" required  >
															<option value="لا توجد إعاقة" <?php if( in_array('لا توجد إعاقة',$Disability_explode) ) echo "selected" ?>>لا توجد إعاقة</option>
															<option value="إعاقة سمعية" <?php if( in_array('إعاقة سمعية',$Disability_explode) ) echo "selected" ?>>إعاقة سمعية</option>
															<option value="إعاقة بصرية" <?php if( in_array('إعاقة بصرية',$Disability_explode) ) echo "selected" ?>>إعاقة بصرية</option>
															<option value="إعاقة حركية" <?php if( in_array('إعاقة حركية',$Disability_explode) ) echo "selected" ?>>إعاقة حركية</option>
															<option value="إعاقة ذهنية" <?php if( in_array('إعاقة ذهنية',$Disability_explode) ) echo "selected" ?>>إعاقة ذهنية</option>
														</select>
 												    </div>
                                                     <div class="form-group form-floating-label">	
                                                        <label for="tokens">تشخيص رئيسي </label>
                                                        <select class="form-control input-border-bottom" name="diagnosis" id="tokens"    required >
                                                            <option <?php if( $row['diagnosis'] == "لا يوجد تشخيص رئيسي") echo "selected" ?> > لا يوجد تشخيص رئيسي</option>
                                                            <option <?php if( $row['diagnosis'] == "Acute Stress (ACU) /الإجهاد الحاد (ACU)") echo "selected" ?> >Acute Stress (ACU)  /الإجهاد الحاد (ACU)</option>
                                                            <option <?php if( $row['diagnosis'] == "Grief (GRI) / الحزن") echo "selected" ?> >Grief (GRI)  /  الحزن</option>
                                                            <option <?php if( $row['diagnosis'] == "Moderate-severe Depressive Disorder (DEP) /اضطراب الاكتئاب المتوسط الشديد") echo "selected" ?> >Moderate-severe Depressive Disorder (DEP)  /اضطراب الاكتئاب المتوسط الشديد</option>
                                                            <option <?php if( $row['diagnosis'] == "Post-traumatic Stress Disorder (PTSD) / اضطراب ما بعد الصدمة") echo "selected" ?> >Post-traumatic Stress Disorder (PTSD) / اضطراب ما بعد الصدمة</option>
                                                            <option <?php if( $row['diagnosis'] == "Psychosis (PSY) / الذهان") echo "selected" ?> >Psychosis (PSY)  /  الذهان</option>
                                                            <option <?php if( $row['diagnosis'] == "Epilepsy/Seizures (EPI) /الصرع / النوبات") echo "selected" ?> >Epilepsy/Seizures (EPI)  /الصرع / النوبات</option>
                                                            <option <?php if( $row['diagnosis'] == "Intellectual Disability (ID) /الإعاقة الذهنية") echo "selected" ?> >Intellectual Disability (ID)  /الإعاقة الذهنية</option>
                                                            <option <?php if( $row['diagnosis'] == "Harmful Use of Alcohol and Drugs (SUB) /الاستخدام الضار للكحول والمخدرات") echo "selected" ?> >Harmful Use of Alcohol and Drugs (SUB) /الاستخدام الضار للكحول والمخدرات</option>
                                                            <option <?php if( $row['diagnosis'] == "Suicide (SUI) /الانتحار") echo "selected" ?> >Suicide (SUI) /الانتحار</option>
                                                            <option <?php if( $row['diagnosis'] == "Other Significant Mental Health Complaints/شكاوى أخرى هامة تتعلق بالصحة العقلية") echo "selected" ?> >Other Significant Mental Health Complaints/شكاوى أخرى هامة تتعلق بالصحة العقلية</option>
                                                        </select>	
                                                    </div>
											
													<div class="form-group form-floating-label">
														<label >الاحالة  وارد</label>
														<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="type_con_from"  >
															<option ></option>
															<option <?php if( $row['type_con_from'] == "احالة وارد") echo "selected" ?> >احالة وارد</option>
														</select>
															
													</div>
													<div class="form-group form-floating-label">
														<label >جهة الاحالة  وارد </label>
														<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="side_con_from"  >
															<option ></option>
															<option  <?php if( $row['side_con_from'] == "مؤسسة الرعاية النفسية التنموية - الخط الساخن") echo "selected" ?>>مؤسسة الرعاية النفسية التنموية - الخط الساخن</option>
															<option  <?php if( $row['side_con_from'] == "مركز الدعم النفسي - إب<") echo "selected" ?>>مركز الدعم النفسي - إب</option>
															<option <?php if( $row['side_con_from'] == "مركز الدعم النفسي - تعز") echo "selected" ?>>مركز الدعم النفسي - تعز</option>
															<option <?php if( $row['side_con_from'] == "مركز الدعم النفسي - عدن") echo "selected" ?>>مركز الدعم النفسي - عدن</option>
															<option  <?php if( $row['side_con_from'] == "المساحة الامنة - العدين") echo "selected" ?>>المساحة الامنة - العدين</option>
															<option <?php if( $row['side_con_from'] == "المساحة الامنة - القفر") echo "selected" ?>>المساحة الامنة - القفر</option>
															<option <?php if( $row['side_con_from'] == "المساحة الامنة - الظهار") echo "selected" ?>>المساحة الامنة - الظهار</option>
															<option <?php if( $row['side_con_from'] == "المساحة الامنة - ذي السفال") echo "selected" ?>>المساحة الامنة - ذي السفال</option>
															<option <?php if( $row['side_con_from'] == "مؤسسة ديم") echo "selected" ?>>مؤسسة ديم</option>
															<option <?php if( $row['side_con_from'] == "المركز المجتمعي للنازحين") echo "selected" ?>>المركز المجتمعي للنازحين</option>
															<option <?php if( $row['side_con_from'] == "منظمة أطباء بلا حدود") echo "selected" ?>>منظمة أطباء بلا حدود</option>
															<option <?php if( $row['side_con_from'] == "الشؤون الاجتماعية") echo "selected" ?>>الشؤون الاجتماعية</option>
															<option <?php if( $row['side_con_from'] == "منظمة الهجرة الدولية") echo "selected" ?>>منظمة الهجرة الدولية</option>
															<option <?php if( $row['side_con_from'] == "CARE منظمة كير") echo "selected" ?>>CARE منظمة كير</option>
															<option <?php if( $row['side_con_from'] == "دار الايواء اتحاد نساء اليمن - فرع اب") echo "selected" ?>>دار الايواء اتحاد نساء اليمن - فرع اب</option>
															<option <?php if( $row['side_con_from'] == "سبل العيش اتحاد نساء اليمن - فرع اب") echo "selected" ?>>سبل العيش اتحاد نساء اليمن - فرع اب</option>
															<option <?php if( $row['side_con_from'] == "منظمة انترسوس") echo "selected" ?>>منظمة انترسوس</option>
															<option <?php if( $row['side_con_from'] == "وزارة الصحة والاسكان - تعز") echo "selected" ?>>وزارة الصحة والاسكان - تعز</option>
															<option <?php if( $row['side_con_from'] == "اتحاد نساء اليمن - تعز") echo "selected" ?>>اتحاد نساء اليمن - تعز</option>
															<option <?php if( $row['side_con_from'] == "مواطنة لحقوق الانسان") echo "selected" ?> >مواطنة لحقوق الانسان</option>
															<option <?php if( $row['side_con_from'] == "مؤسسة رسالتي للتنمية") echo "selected" ?> >مؤسسة رسالتي للتنمية</option>
															<option <?php if( $row['side_con_from'] == "مكتب الصحة اب") echo "selected" ?> >مكتب الصحة اب</option>
															<option <?php if( $row['side_con_from'] == "مركز السويدي الدولي") echo "selected" ?> > مركز السويدي الدولي</option>
															<option <?php if( $row['side_con_from'] == "مؤسسة الخدمة الاجتماعية") echo "selected" ?> >  مؤسسة الخدمة الاجتماعية</option>
															<option <?php if( $row['side_con_from'] == "مؤسسة تواصل للتنمية") echo "selected" ?> >    مؤسسة تواصل للتنمية</option>
															<option <?php if( $row['side_con_from'] == "مركز المراة الامنه") echo "selected" ?> >    مركز المراة الامنه</option>
															<option <?php if( $row['side_con_from'] == "منظمة الطفل والشباب") echo "selected" ?> >  منظمة الطفل والشباب    </option>
															<option <?php if( $row['side_con_from'] == "+cm") echo "selected" ?> >+cm</option>

														</select>
															
													</div>
													<div class="form-group form-floating-label">
														<label >الاحالة  صادرة </label>
														<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="type_con_to"  >
															<option ></option>
															<option  <?php if( $row['type_con_to'] == "احالة صادر") echo "selected" ?>>احالة صادر</option>
														</select>
															
													</div>
													<div class="form-group form-floating-label">
														<label >جهة الاحالة  صادرة </label>
														<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="side_con_to"  >
															<option ></option>
															<option  <?php if( $row['side_con_to'] == "مؤسسة الرعاية النفسية التنموية - الخط الساخن") echo "selected" ?>>مؤسسة الرعاية النفسية التنموية - الخط الساخن</option>
															<option  <?php if( $row['side_con_to'] == "مركز الدعم النفسي - إب") echo "selected" ?>>مركز الدعم النفسي - إب</option>
															<option <?php if( $row['side_con_to'] == "مركز الدعم النفسي - تعز") echo "selected" ?>>مركز الدعم النفسي - تعز</option>
															<option <?php if( $row['side_con_to'] == "مركز الدعم النفسي - عدن") echo "selected" ?>>مركز الدعم النفسي - عدن</option>
															<option  <?php if( $row['side_con_to'] == "المساحة الامنة - العدين") echo "selected" ?>>المساحة الامنة - العدين</option>
															<option <?php if( $row['side_con_to'] == "المساحة الامنة - القفر") echo "selected" ?>>المساحة الامنة - القفر</option>
															<option <?php if( $row['side_con_to'] == "المساحة الامنة - الظهار") echo "selected" ?>>المساحة الامنة - الظهار</option>
															<option <?php if( $row['side_con_to'] == "المساحة الامنة - ذي السفال") echo "selected" ?>>المساحة الامنة - ذي السفال</option>
															<option <?php if( $row['side_con_to'] == "مؤسسة ديم") echo "selected" ?>>مؤسسة ديم</option>
															<option <?php if( $row['side_con_to'] == "المركز المجتمعي للنازحين") echo "selected" ?>>المركز المجتمعي للنازحين</option>
															<option <?php if( $row['side_con_to'] == "منظمة أطباء بلا حدود") echo "selected" ?>>منظمة أطباء بلا حدود</option>
															<option <?php if( $row['side_con_to'] == "الشؤون الاجتماعية") echo "selected" ?>>الشؤون الاجتماعية</option>
															<option <?php if( $row['side_con_to'] == "منظمة الهجرة الدولية") echo "selected" ?>>منظمة الهجرة الدولية</option>
															<option <?php if( $row['side_con_to'] == "CARE منظمة كير") echo "selected" ?>>CARE منظمة كير</option>
															<option <?php if( $row['side_con_to'] == "دار الايواء اتحاد نساء اليمن - فرع اب") echo "selected" ?>>دار الايواء اتحاد نساء اليمن - فرع اب</option>
															<option <?php if( $row['side_con_to'] == "سبل العيش اتحاد نساء اليمن - فرع اب") echo "selected" ?>>سبل العيش اتحاد نساء اليمن - فرع اب</option>
															<option <?php if( $row['side_con_to'] == "منظمة انترسوس") echo "selected" ?>>منظمة انترسوس</option>
															<option <?php if( $row['side_con_to'] == "وزارة الصحة والاسكان - تعز") echo "selected" ?>>وزارة الصحة والاسكان - تعز</option>
															<option <?php if( $row['side_con_to'] == "اتحاد نساء اليمن - تعز") echo "selected" ?>>اتحاد نساء اليمن - تعز</option>
															<option <?php if( $row['side_con_to'] == "مواطنة لحقوق الانسان") echo "selected" ?> >مواطنة لحقوق الانسان</option>
															<option <?php if( $row['side_con_to'] == "مؤسسة رسالتي للتنمية") echo "selected" ?> >مؤسسة رسالتي للتنمية</option>
															<option <?php if( $row['side_con_to'] == "مكتب الصحة اب") echo "selected" ?> >مكتب الصحة اب</option>
															<option <?php if( $row['side_con_to'] == "مركز السويدي الدولي") echo "selected" ?> > مركز السويدي الدولي</option>
															<option <?php if( $row['side_con_to'] == "مؤسسة الخدمة الاجتماعية") echo "selected" ?> >  مؤسسة الخدمة الاجتماعية</option>
															<option <?php if( $row['side_con_to'] == "مؤسسة تواصل للتنمية") echo "selected" ?> >    مؤسسة تواصل للتنمية</option>
															<option <?php if( $row['side_con_to'] == "مركز المراة الامنه") echo "selected" ?> >    مركز المراة الامنه</option>
															<option <?php if( $row['side_con_to'] == "منظمة الطفل والشباب") echo "selected" ?> >  منظمة الطفل والشباب    </option>
															<option <?php if( $row['side_con_to'] == "+cm") echo "selected" ?> >+cm</option>


														</select>
															
													</div>
												
												
											</div>
											<div class="col-md-6 col-lg-4">
											
										
											</div>
											<div class="col-md-6 col-lg-4">
											
											</div>
											
										</div>
									<div class="card-action">
										
										
										<input class="btn btn-success" type="submit" name="save" value="save">
										<input class="btn btn-danger" type="reset" value="Cancel">
									</div>
									<?php }
									else {
										echo' <div class="alert alert-danger">NO Row</div>';
									}
								}?>
								</div>
							</form>
							
							
						</div>
					</div>
				</div>
			</div>
		
		
		
		<!-- Custom template | don't include it in your project! -->
		
		<!-- End Custom template -->
		<?php

include "include/footer.php";

							
?>

<?php
//تم وضع كود في الاخير من اجل تنفيذ رسالة التحدذير
	if(isset($_POST['save'])){
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		
	
		$sex=test_input($_POST['sex']);
		$code=test_input($_POST["code"]);
		   // $date= date('Y-m-d');
		$date=test_input($_POST["date"]);
		$services=$_POST["services"];
		$services=implode(',',$services);
		$Disability=$_POST["Disability"];
		$Disability=implode(',',$Disability);
		$brithday=test_input($_POST["brithday"]);
		$name=test_input($_POST["name"]);
		$place=test_input($_POST["place"]);
		$social_status=test_input($_POST["social_status"]);
		$work=test_input($_POST["work"]);
        $diagnosis=test_input($_POST["diagnosis"]);
        $type_con_from=test_input($_POST["type_con_from"]);
        $side_con_from=test_input($_POST["side_con_from"]);
        $type_con_to=test_input($_POST["type_con_to"]);
        $side_con_to=test_input($_POST["side_con_to"]);


		// age must be more than 5 year
		$c= date('Y');
		$y= date('Y',strtotime($brithday));
		$age= $c-$y;
		//end


			$user=$_SESSION['user']['id'];
			// find branch
			$branch=$_SESSION['user']['branch_id'];
			

			//end find branch 
			
			
			
			//التحقق ان اسم المنتج موجود وليس ارقام
		
			
			
			
			if(empty($user))
			{
				
				
				echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}


			elseif(empty($name))
			{
				
				
				echo '<script>swal("يرجاء ادخال اسم الطبيب ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
			elseif(is_numeric($name))
			{
				
				
				echo '<script>swal("اسم الطبيب لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
				
			}


			elseif(empty($date))
			{
				
				
				echo '<script>swal("يرجاء ادخال  تاريخ دخول الحالة ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}

			elseif(empty($code))
			{
				
				
				echo '<script>swal("يرجاء ادخال كود للحاله ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
		
			elseif(!is_numeric($code))
			{
				
				
				echo '<script>swal("يرجاء ادخال كود للحالة ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
		


			




			elseif(empty($brithday))
			{
			
				
				echo '<script>swal("يرجاء ادخال  تاريخ ميلاد الحاله ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
			elseif($age<5&&!$branch==6)
			{
			
				echo '<script>swal("العمر اقل من 5 سنين يرجاء مراجعة تاريخ الميلاد", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
			




			
			/////////////////////////////////////////////////////////////////////////////////////تذكير الشرط حق الايميل

			//اذا لايوجد اي مشكلة يقوم بارسال الملف
			else
			{
				$sql="select * from sana where  code=? and date=? ";
				$stm=$con->prepare($sql); 
				$stm->execute(array($code,$date));
				if($stm->rowCount()>0){

					echo '<script>swal("لقد تم ادخال بيانات لنفس هذا الحاله في النظام من قبل", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
				}
				else{
                   
					$query="INSERT INTO sana(branch,sex,code,date,services,Disability,brithday,name,place,social_status,work,diagnosis,type_con_from,side_con_from,type_con_to,side_con_to,sender_name,type)
					values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($branch,$sex,$code,$date,$services,$Disability,$brithday,$name,$place,$social_status,$work,$diagnosis,$type_con_from,$side_con_from,$type_con_to,$side_con_to,$user,'عودة'));
					if($stm->rowCount())
					{
						include("print_resption_ticket.php");
						echo '<script src="js/send_success.js"></script>';
					}
					else
					{
						echo'<script src="js/send_error.js"></script>';
					}
				}
				}
			


		

		
	}
} 
else {
echo "<script> window.open('index.php','_self')</script>";
}
?>
