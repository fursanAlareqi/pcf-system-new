 <?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }
 if($_SESSION['user']['rule_id']==2||$_SESSION['user']['rule_id']==6){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
						<?php 
                if(isset($_GET['action'],$_GET['ids']) && $_GET['action']=='edit'){
                  $id=$_GET['ids'];
                  $sql="select * from psyshological where id=?";
                  $stm=$con->prepare($sql); 
                  $stm->execute(array($id));
                  if($stm->rowCount())
                      {
                  foreach($stm->fetchAll() as $row) {
                     
					  	?>
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> تعديل بيانات الاستقبال</div>
									</div>
									<div class="card-body">
									<div class="row">
											
										
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
													<label >تاريخ تسجيل الحالة</label>
													<input  type="date"  value="<?php echo $row['date']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="date"  required >
												</div>


												<div class="form-group form-floating-label">
													<label >رقم الكود</label>
													<input  type="number" value="<?php echo $row['code']; ?>"  class="form-control input-border-bottom" id="inputFloatingLabel" name="code" required >

												</div>

												<div class="form-group form-floating-label">
													<label > Consciousness </label>
													<input  type="text" value="<?php echo $row['Consciousness'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Consciousness"  required >
												</div>
												<div class="form-group form-floating-label">
													<label > Orientations </label>
													<input  type="text" value="<?php echo $row['Orientations'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Orientations"  required >
												</div>
												<div class="form-group form-floating-label">
													<label > Attention_Concentration </label>
													<input  type="text" value="<?php echo $row['Attention_Concentration'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Attention_Concentration"  required >
												</div>
												<div class="form-group form-floating-label">
													<label > Memory </label>
													<input  type="text" value="<?php echo $row['Memory'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Memory"  required >
												</div>
												<div class="form-group form-floating-label">
													<label > Appearance and  Behavior </label>
													<input  type="text" value="<?php echo $row['Appearance'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Appearance"  required >
												</div>
												<div class="form-group form-floating-label">
													<label > Affect & Mood </label>
													<input  type="text" value="<?php echo $row['Affect_Mood'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Affect_Mood"  required >
												</div>
												
												

												

												
												
							
											</div>
											<div class="col-md-6 col-lg-4">
														<div class="form-group form-floating-label">
															<label > Suicide & Homicide </label>
															<input  type="text" value="<?php echo $row['Suicide_Homicide'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Suicide_Homicide"  required >
														</div>
													 	
														 <div class="form-group form-floating-label">
															<label > Speech </label>
															<input  type="text" value="<?php echo $row['Speech'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Speech"  required >
														</div>
														<div class="form-group form-floating-label">
															<label > Thinking </label>
															<input  type="text" value="<?php echo $row['Thinking'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Thinking"  required >
														</div>
														<div class="form-group form-floating-label">
															<label > Perception </label>
															<input  type="text" value="<?php echo $row['Perception'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Perception"  required >
														</div>
														<div class="form-group form-floating-label">
															<label > Insight </label>
															<input  type="text" value="<?php echo $row['Insight'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Insight"  required >
														</div>
														<?php if($_SESSION['user']['branch_id']==6){ ?>
													 	<div class="form-group form-floating-label">
															<label for="tokens">العلاج</label>
															<select class="selectpicker form-control" name="medical[]" multiple id="tokens"  data-live-search="true" >
																<option value=""></option>
																<?php 
																	
																	$sql="select * from pharmacy where branch=? ORDER BY `pharmacy`.`name` ASC  ";
																	$stm=$con->prepare($sql); 
																	$stm->execute(array($branch));
																	if($stm->rowCount()>0)
																		{
																			$medical_explode =explode(",",$row['medical']);
																			foreach($stm->fetchAll() as $rows) 
																			{

															
																?>
																	<option value="<?php echo $rows['name']; ?> 1x1" <?php if( in_array($rows['name']." 1x1",$medical_explode) ) echo "selected" ?>><?php echo $rows['name']; ?> 1x1 </option>
																	<option value="<?php echo $rows['name']; ?> 1x2" <?php if( in_array($rows['name']." 1x2",$medical_explode) ) echo "selected" ?>><?php echo $rows['name']; ?> 1x2 </option>
																	<option value="<?php echo $rows['name']; ?> 1x3" <?php if( in_array($rows['name']." 1x3",$medical_explode) ) echo "selected" ?>><?php echo $rows['name']; ?> 1x3 </option>
																	
																<?php
																			}
																		}
																?>
															
															</select>	
													  	</div>
														<div class="form-group">
															<label for="comment">الكمية</label>
															<textarea class="form-control" id="comment" name="quantity" rows="5" >
																<?php echo $row['quantity']; ?>
															</textarea>
														</div>
														<?php }else{?>
															<div class="form-group">
															<label for="comment">العلاج</label>
															<textarea class="form-control" id="comment" name="medical" rows="5">
																<?php echo $row['medical']; ?>
															</textarea>
														</div>

														<?php }?>
												
												<div class="form-group form-floating-label">	
													<label for="tokens">رقم الزيارة</label>
													<select class="selectpicker form-control" name="visites" id="tokens"  data-live-search="true" required >
														<option value=""></option>	
														<option <?php if( $row['visites'] == "الزيارة الاولى") echo "selected" ?> >الزيارة الاولى </option>
														<option <?php if( $row['visites'] == "الزيارة الثانية") echo "selected" ?> >الزيارة الثانية  </option>
														<option <?php if( $row['visites'] == "الزيارة الثالثة") echo "selected" ?> >الزيارة الثالثة  </option>
														<option <?php if( $row['visites'] == "الزيارة الرابعة") echo "selected" ?> >الزيارة الرابعة  </option>
														<option <?php if( $row['visites'] == "الزيارة الخامسة") echo "selected" ?> >الزيارة الخامسة </option>
														<option <?php if( $row['visites'] == "الزيارة السادسة") echo "selected" ?> >الزيارة السادسة </option>
														<option <?php if( $row['visites'] == "الزيارة السابعة") echo "selected" ?> >الزيارة السابعة </option>
														<option <?php if( $row['visites'] == "الزيارة الثامنة") echo "selected" ?> >الزيارة الثامنة </option>
														<option <?php if( $row['visites'] == "الزيارة التاسعة") echo "selected" ?> >الزيارة التاسعة  </option>
														<option <?php if( $row['visites'] == "الزيارة العاشرة") echo "selected" ?> >الزيارة العاشرة  </option>
														<option <?php if( $row['visites'] == "الزيارة الحادية عشر") echo "selected" ?> >الزيارة الحادية عشر </option>
														<option <?php if( $row['visites'] == "الزيارة الثانية عشر") echo "selected" ?> >الزيارة الثانية عشر </option>
													</select>	
												</div>

												<div class="form-group form-floating-label">	
													<label for="tokens">تشخيص رئيسي </label>
													<select class="form-control input-border-bottom"  name="diagnosis" id="tokens"    required >
													<option <?php if( $row['diagnosis'] == "لا يوجد تشخيص رئيسي") echo "selected" ?> > لا يوجد تشخيص رئيسي</option>
													<option <?php if( $row['diagnosis'] == "Neurodevelopmental Disorders /إضطرابات النمو العصبية") echo "selected" ?> >  Neurodevelopmental Disorders /إضطرابات النمو العصبية  </option>
													<option <?php if( $row['diagnosis'] == "Schizophrenia Spectrum and Other Psychotic Disorders / طيف الفصام والإضطرابات الذهانية الأخرى") echo "selected" ?> >  Schizophrenia Spectrum and Other Psychotic Disorders /  طيف الفصام والإضطرابات الذهانية الأخرى  </option>
													<option <?php if( $row['diagnosis'] == "Bipolar and Related Disorders / ثنائي القطب والاضطرابات ذات الصلة") echo "selected" ?> > Bipolar and Related Disorders / ثنائي القطب والاضطرابات ذات الصلة  </option>
													<option <?php if( $row['diagnosis'] == "Depressive Disorders / الاضطرابات الاكتئابية") echo "selected" ?> > Depressive Disorders / الاضطرابات الاكتئابية </option>
													<option <?php if( $row['diagnosis'] == "Anxiety Disorders /  اضطرابات القلق") echo "selected" ?> > Anxiety Disorders /  اضطرابات القلق </option>
													<option <?php if( $row['diagnosis'] == "Obsessive-Compulsive and Related Disorders /الوسواس القهري والاضطرابات ذات الصلة") echo "selected" ?> > Obsessive-Compulsive and Related Disorders /الوسواس القهري والاضطرابات ذات الصلة </option>
													<option <?php if( $row['diagnosis'] == "Trauma- and Stressor-Related Disorders /الاضطرابات المتعلقة بالصدمة والإجهاد") echo "selected" ?> >Trauma- and Stressor-Related Disorders /الاضطرابات المتعلقة بالصدمة والإجهاد   </option>
													<option <?php if( $row['diagnosis'] == "Dissociative Disorders / الاضطرابات التفارقية") echo "selected" ?> > Dissociative Disorders / الاضطرابات التفارقية  </option>
													<option <?php if( $row['diagnosis'] == "Somatic Symptom and Related Disorders /الأعراض الجسدية والاضطرابات ذات الصلة") echo "selected" ?> > Somatic Symptom and Related Disorders /الأعراض الجسدية والاضطرابات ذات الصلة  </option>
													<option <?php if( $row['diagnosis'] == "Feeding and Eating Disorders/اضطرابات التغذية والأكل") echo "selected" ?> > Feeding and Eating Disorders/اضطرابات التغذية والأكل   </option>
													<option <?php if( $row['diagnosis'] == "Elimination Disorders / اضطرابات الإفراغ") echo "selected" ?> > Elimination Disorders / اضطرابات الإفراغ   </option>
													<option <?php if( $row['diagnosis'] == "Sleep-Wake Disorders / اضطرابات النوم واليقظة") echo "selected" ?> > Sleep-Wake Disorders / اضطرابات النوم واليقظة   </option>
													<option <?php if( $row['diagnosis'] == "Sexual Dysfunctions / اختلالات الوظيفة الجنسية") echo "selected" ?> >  Sexual Dysfunctions / اختلالات الوظيفة الجنسية  </option>
													<option <?php if( $row['diagnosis'] == "Gender Dysplioria / الانزعاج من الجندر") echo "selected" ?> > Gender Dysplioria / الانزعاج من الجندر   </option>
													<option <?php if( $row['diagnosis'] == "Disruptive, impuise-Control, and Conduct Disorders /  اضطرابات التشوش والتحكم بالاندفاع والمسلك") echo "selected" ?> > Disruptive, impuise-Control, and Conduct Disorders /  اضطرابات التشوش والتحكم بالاندفاع والمسلك   </option>
													<option <?php if( $row['diagnosis'] == "Substance-Related and Addictive Disorders / الاضطرابات المتعلقة بمادة والإدمانية") echo "selected" ?> >  Substance-Related and Addictive Disorders / الاضطرابات المتعلقة بمادة والإدمانية  </option>
													<option <?php if( $row['diagnosis'] == "Neurocognitive Disorders / الاضطرابات العصبية المعرفية") echo "selected" ?> >  Neurocognitive Disorders / الاضطرابات العصبية المعرفية  </option>
													<option <?php if( $row['diagnosis'] == " Personality Disorders /اضطرابات الشخصية") echo "selected" ?> >  Personality Disorders /اضطرابات الشخصية  </option>
													<option <?php if( $row['diagnosis'] == "Paraphilic Disorders / اضطرابات الولع الجنسي") echo "selected" ?> > Paraphilic Disorders / اضطرابات الولع الجنسي   </option>
													<option <?php if( $row['diagnosis'] == "Other Mental Disorders /اضطرابات عقلية أخرى") echo "selected" ?> >  Other Mental Disorders /اضطرابات عقلية أخرى </option>
													<option <?php if( $row['diagnosis'] == "Medication-Induced movement Disorders and Other Adverse Effects of mediction/ اضطرابات الحركة المحدثة بالأدوية والتأثيرات الجانبية الأخرى للأدوية") echo "selected" ?> > Medication-Induced movement Disorders and Other Adverse Effects of mediction/ اضطرابات الحركة المحدثة بالأدوية والتأثيرات الجانبية الأخرى للأدوية    </option>
													<option <?php if( $row['diagnosis'] == "Other Conditions That may Be a Focus of Ciinicai Attention /حالات أخرى قد تكون محوراً للأهتمام السريري") echo "selected" ?> >  Other Conditions That may Be a Focus of Ciinicai Attention /حالات أخرى قد تكون محوراً للأهتمام السريري  </option>
													</select>	
												</div>
												
												
											
											</div>
											<div class="col-md-6 col-lg-4">
											<div class="form-group form-floating-label">	
													<label for="tokens">تشخيص فرعي</label>
													<select class="form-control input-border-bottom"  name="sub_diagnosis" id="tokens"  required >
														<option <?php if( $row['sub_diagnosis'] == "لا يوجد تشخيص فرعي") echo "selected" ?> > لا يوجد تشخيص فرعي</option>
														<optgroup label="Neurodevelopmental Disorders /إضطرابات النمو العصبية " data-subtext="optgroup subtext">
														<option <?php if( $row['sub_diagnosis'] == "Intellectual Disabilities / الإعاقة الذهنية") echo "selected" ?> >Intellectual Disabilities / الإعاقة الذهنية </option>
														<option <?php if( $row['sub_diagnosis'] == "Communication Disorders / إضطرابات التواصل") echo "selected" ?> > Communication Disorders / إضطرابات التواصل</option>
														<option <?php if( $row['sub_diagnosis'] == "Autism Spectrum Disorder / إضطراب طيف التوحد") echo "selected" ?> >Autism Spectrum Disorder / إضطراب طيف التوحد </option>
														<option <?php if( $row['sub_diagnosis'] == "Attention-Deficit/Hyperactivity Disorder/ إضطراب نقص الانتباه - فرط الحركة") echo "selected" ?> > Attention-Deficit/Hyperactivity Disorder/ إضطراب نقص الانتباه - فرط الحركة </option>
														<option <?php if( $row['sub_diagnosis'] == "Specific Learning Disorder /إضطراب التعلم المحدد") echo "selected" ?> > Specific Learning Disorder /إضطراب التعلم المحدد </option>
														<option <?php if( $row['sub_diagnosis'] == "Motor Disorders / الإضطرابات الحركية") echo "selected" ?> >Motor Disorders / الإضطرابات الحركية </option>
														</optgroup>	
														<optgroup label="Schizophrenia Spectrum and Other Psychotic Disorders /  طيف الفصام والإضطرابات الذهانية الأخرى " data-subtext="optgroup subtext">
															<option <?php if( $row['sub_diagnosis'] == "Schizotypal (Personality) Disorder / إضطراب الفصام(الشخصية)") echo "selected" ?> > Schizotypal (Personality) Disorder / إضطراب الفصام(الشخصية)  </option>
															<option <?php if( $row['sub_diagnosis'] == "Delusional Disorder /الإضطراب التوهمي") echo "selected" ?> > Delusional Disorder /الإضطراب التوهمي </option>
															<option <?php if( $row['sub_diagnosis'] == "Brief Psychotic Disorder / الإضطراب الذهاني الوجيز") echo "selected" ?> > Brief Psychotic Disorder / الإضطراب الذهاني الوجيز  </option>
															<option <?php if( $row['sub_diagnosis'] == "Schizophreniform Disorder/ إضطراب الفصام") echo "selected" ?> > Schizophreniform Disorder/ إضطراب الفصام </option>
															<option <?php if( $row['sub_diagnosis'] == "Schizophrenia / الفصام") echo "selected" ?> > Schizophrenia / الفصام </option>
															<option <?php if( $row['sub_diagnosis'] == "Schizoaffective Disorder/ إضطراب الفصام الوجداني") echo "selected" ?> > Schizoaffective Disorder/ إضطراب الفصام الوجداني </option>
															<option <?php if( $row['sub_diagnosis'] == "Substance/Medication-Induced Psychotic Disorder /  الاضطراب الذهاني المحدث بالمواد") echo "selected" ?> > Substance/Medication-Induced Psychotic Disorder /  الاضطراب الذهاني المحدث بالمواد  </option>
															<option <?php if( $row['sub_diagnosis'] == "Psychotic Disorder Due to Another Medical Condition/  اضطراب ذهاني بسبب حالة طبية أخرى") echo "selected" ?> > Psychotic Disorder Due to Another Medical Condition/  اضطراب ذهاني بسبب حالة طبية أخرى  </option>
															<option <?php if( $row['sub_diagnosis'] == "Catatonia Associated With Another Mental Disorder (Catatonia Specifier)/ الكاتاتونيا المرافقة لاضطراب عقلي آخر -محدد الكاتاتونيا") echo "selected" ?> > Catatonia Associated With Another Mental Disorder (Catatonia Specifier)/ الكاتاتونيا المرافقة لاضطراب عقلي آخر -محدد الكاتاتونيا  </option>
															<option <?php if( $row['sub_diagnosis'] == "Catatonic Disorder Due to Another Medical Condition / كاتاتونيا بسبب حالة طبية أخرى") echo "selected" ?> > Catatonic Disorder Due to Another Medical Condition / كاتاتونيا بسبب حالة طبية أخرى  </option>
															<option <?php if( $row['sub_diagnosis'] == "Unspecified Catatonia /الكاتاتونيا غير المحددة") echo "selected" ?> > Unspecified Catatonia /الكاتاتونيا غير المحددة  </option>
														</optgroup>	
														<optgroup label="Bipolar and Related Disorders / ثنائي القطب والاضطرابات ذات الصلة " data-subtext="optgroup subtext">
															<option <?php if( $row['sub_diagnosis'] == "Bipolar I Disorder /  اضطراب ثنائي القطب النوع الأول") echo "selected" ?> >Bipolar I Disorder /  اضطراب ثنائي القطب النوع الأول </option>
															<option <?php if( $row['sub_diagnosis'] == "Bipolar II Disorder/اضطراب ثنائي القطب النوع الثاني") echo "selected" ?> > Bipolar II Disorder/اضطراب ثنائي القطب النوع الثاني </option>
														</optgroup>	
														<optgroup label="Sleep-Wake Disorders / اضطرابات النوم واليقظة " data-subtext="optgroup subtext">
															<option <?php if( $row['sub_diagnosis'] == "Insomnia Disorder/  اضطراب الأرق") echo "selected" ?> >Insomnia Disorder/  اضطراب الأرق  </option>
															<option <?php if( $row['sub_diagnosis'] == "Hypersoninolence Disorder/ اضطراب فرط النعاس") echo "selected" ?> >Hypersoninolence Disorder/ اضطراب فرط النعاس </option>
															<option <?php if( $row['sub_diagnosis'] == "Breathing-Related Sleep Disorders/  اضطرابات النوم ذات الصلة بالتنفس") echo "selected" ?> > Breathing-Related Sleep Disorders/  اضطرابات النوم ذات الصلة بالتنفس</option>
														</optgroup>	
														<optgroup label="Substance-Related and Addictive Disorders / الاضطرابات المتعلقة بمادة والإدمانية " data-subtext="optgroup subtext">
															<option <?php if( $row['sub_diagnosis'] == "Alcohol-Related Disorders/  الاضطرابات المتعلقة بالكحول") echo "selected" ?> > Alcohol-Related Disorders/  الاضطرابات المتعلقة بالكحول</option>
															<option <?php if( $row['sub_diagnosis'] == "Caffeine-Related Disorders /الاضطرابات المتعلقة بالكافيين") echo "selected" ?> > Caffeine-Related Disorders /الاضطرابات المتعلقة بالكافيين</option>
															<option <?php if( $row['sub_diagnosis'] == "Cannabis-Related Disorders / الاضطرابات المتعلقة بالحشيش	") echo "selected" ?> > Cannabis-Related Disorders / الاضطرابات المتعلقة بالحشيش </option>
														</optgroup>	
													</select>	
												</div>
											<div class="form-group">
													<label for="comment">ملخص الحالة</label>
													<textarea class="form-control" id="comment" name="summerie" rows="5">
													<?php echo $row['summerie'] ?>
													</textarea>
												</div>
												<div class="form-group">
													<label for="comment">التوصيات</label>
													<textarea class="form-control" id="comment" name="recommendation" rows="5">
														<?php echo $row['end_diagnosis'] ?>
													</textarea>
												</div>
												
												
												<?php $violense_explode =explode(",",$row['lap']);?>
												<label class="form-label">الفحوصات المطلوبة</label>
														<div class="selectgroup selectgroup-pills">
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]"  <?php  if(in_array("CBC",$violense_explode)) echo "checked";?> value="CBC" class="selectgroup-input" >
																<span class="selectgroup-button">CBC</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("GPT",$violense_explode)) echo "checked";?> value="GPT" class="selectgroup-input" >
																<span class="selectgroup-button">GPT</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("GOT",$violense_explode)) echo "checked";?> value="GOT" class="selectgroup-input" >
																<span class="selectgroup-button">GOT</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("ALT",$violense_explode)) echo "checked";?> value="ALT" class="selectgroup-input" >
																<span class="selectgroup-button">ALT</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("T.B",$violense_explode)) echo "checked";?> value="T.B" class="selectgroup-input" >
																<span class="selectgroup-button">T.B</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("D.B",$violense_explode)) echo "checked";?> value="D.B" class="selectgroup-input" >
																<span class="selectgroup-button">D.B</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("Urea",$violense_explode)) echo "checked";?> value="Urea" class="selectgroup-input" >
																<span class="selectgroup-button">Urea</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("Creatinine",$violense_explode)) echo "checked";?> value="Creatinine" class="selectgroup-input" >
																<span class="selectgroup-button">Creatinine</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("HBSAG",$violense_explode)) echo "checked";?> value="HBSAG" class="selectgroup-input" >
																<span class="selectgroup-button">HBSAG</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]"  <?php  if(in_array("HIVIe2",$violense_explode)) echo "checked";?> value="HIVIe2" class="selectgroup-input" >
																<span class="selectgroup-button">HIVIe2</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("Prolactine",$violense_explode)) echo "checked";?> value="Prolactine" class="selectgroup-input" >
																<span class="selectgroup-button">Prolactine</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("HCVAB",$violense_explode)) echo "checked";?> value="HCVAB" class="selectgroup-input" >
																<span class="selectgroup-button">HCVAB</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("TSH",$violense_explode)) echo "checked";?> value="TSH" class="selectgroup-input" >
																<span class="selectgroup-button">TSH</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("FT3",$violense_explode)) echo "checked";?> value="FT3" class="selectgroup-input" >
																<span class="selectgroup-button">FT3</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("FT4",$violense_explode)) echo "checked";?> value="FT4" class="selectgroup-input" >
																<span class="selectgroup-button">FT4</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("RBS",$violense_explode)) echo "checked";?> value="RBS" class="selectgroup-input" >
																<span class="selectgroup-button">RBS</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("FBS",$violense_explode)) echo "checked";?> value="FBS" class="selectgroup-input" >
																<span class="selectgroup-button">FBS</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("HbA1C",$violense_explode)) echo "checked";?> value="HbA1C" class="selectgroup-input" >
																<span class="selectgroup-button">HbA1C</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("Addication Screen",$violense_explode)) echo "checked";?> value="Addication Screen" class="selectgroup-input" >
																<span class="selectgroup-button">Addication Screen</span>
															</label><label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("EEG",$violense_explode)) echo "checked";?> value="EEG" class="selectgroup-input" >
																<span class="selectgroup-button">EEG</span>
															</label>
														
														</div>
														<div class="form-group form-floating-label">
															<label >تقييم وضع الحالة</label>
															<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="appraisal"  >
																<option ></option>
																<option <?php if( $row['appraisal'] == "مستقرة") echo "selected" ?>>مستقرة</option>
																<option <?php if( $row['appraisal'] == "تحت المتابعة") echo "selected" ?>>تحت المتابعة</option>
																<option <?php if( $row['appraisal'] == "منتكسة") echo "selected" ?>>منتكسة</option>
															</select>
														</div>
												
										
											</div>
											
										</div>
									<?php  } ?>
									<div class="card-action">
										
										
										<input class="btn btn-success" type="submit" name="save" value="save">
										<input class="btn btn-danger" type="reset" value="Cancel">
									</div>
							</form>
					<?php
					
                        }
						else { 
							echo' <div class="alert alert-danger">NO Row</div>';
							  }
                      }
					  
                   ?>
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

	
	$code=test_input($_POST["code"]);
	$today= date('Y-m-d');
	$date=test_input($_POST["date"]);
  

	if($_SESSION['user']['branch_id']!=6){ 
		$quantity=0;
		$medical=$_POST["medical"];
	}
	else{
		$quantity=$_POST["quantity"];
		$medical=$_POST["medical"];
		$medical=implode(',',$medical);
	}
	if(	empty($_POST["violense"])){
		$b=0;
		
	}
	else{
		$violense=$_POST["violense"];
		$b=implode(',',$violense);
		
	}



	$diagnosis=test_input($_POST["diagnosis"]);
	$recommendation=test_input($_POST["recommendation"]);
	$visites=test_input($_POST["visites"]);
	$summerie=test_input($_POST["summerie"]);
	$sub_diagnosis=test_input($_POST["sub_diagnosis"]);
	$Consciousness=test_input($_POST["Consciousness"]);
	$Orientations=test_input($_POST["Orientations"]);
	$Attention_Concentration=test_input($_POST["Attention_Concentration"]);
	$Memory=test_input($_POST["Memory"]);
	$Appearance=test_input($_POST["Appearance"]);
	$Affect_Mood=test_input($_POST["Affect_Mood"]);
	$Suicide_Homicide=test_input($_POST["Suicide_Homicide"]);
	$Speech=test_input($_POST["Speech"]);
	$Thinking=test_input($_POST["Thinking"]);
	$Perception=test_input($_POST["Perception"]);
	$Insight=test_input($_POST["Insight"]);
	$appraisal=test_input($_POST["appraisal"]);

	
	
	


    $branch=$_SESSION['user']['branch_id'];

		$user=$_SESSION['user']['id'];
		// find branch
		


		//end find branch 
		
		
		
		//التحقق ان اسم المنتج موجود وليس ارقام
	
		
		


		

		if(empty($date))
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




		
		/////////////////////////////////////////////////////////////////////////////////////تذكير الشرط حق الايميل

		//اذا لايوجد اي مشكلة يقوم بارسال الملف
		else
		{
		
			$query="UPDATE psyshological set branch=?,code=?,diagnosis=?,end_diagnosis=?,visites=?,medical=?,summerie=?, date=?
			,Consciousness=?,Orientations=?,Attention_Concentration=?
			,Memory=?,Appearance=?,Affect_Mood=?,
			Suicide_Homicide=?,Speech=?,Thinking=?,Perception=?,Insight=?,sender_name=?,lap=?,sub_diagnosis=?,appraisal=?,quantity=? where id=?";
			$stm=$con->prepare($query);
			$stm->execute(array($branch,$code,$diagnosis,$recommendation,$visites,$medical,$summerie,$date,
			$Consciousness,$Orientations,$Attention_Concentration,$Memory,$Appearance,$Affect_Mood,$Suicide_Homicide,$Speech,
			$Thinking,$Perception,$Insight,$user,$b,$sub_diagnosis,$appraisal,$quantity,$id));
			if($stm->rowCount())	
			{
				echo '<script src="js/send_success.js"></script>';
				echo "<script>
				window.open('admin_today_psyshological_data.php?num=11&id=3','_self')
		 		 </script>";
			}
			else
			{
				echo'<script src="js/send_error.js"></script>';
			}
			
			}
		


	

	
}
} 
else {
echo "<script> window.open('index.php','_self')</script>";
}
?>
