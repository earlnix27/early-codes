	<div id="menu_bar" style="text-align:left;border-radius:0.3rem">
		 <span class="pull-left"><img src="<?php echo base_url();?>ext_lib/images/denr.png" alt="logo" style="height:80px;width:auto;margin:3px 0px 0px 20px"></span>
		  <span style="font-size:26px;margin-left:25px;color:#fff">DENR-10 Online Application System</span>        
	</div>
	
<?php if(!empty($pub_vac_pos)):?>	
	<br>
	<br>
	<div class="shadow p-3 mb-5 bg-body rounded" style="width:60%;text-align:left;padding:30px !important">
	
			<div class="row" style="text-align:center">
				<div class="col-sm-12"><h2>DENR-10 Online Application</h2></div>
			</div><hr><br>
			
			<div class="row" style="text-align:justify">
				<div class="col-sm-12">
					<p style="text-indent:50px">This Application Form applies only to the specified position being applied for. Applicants who intend to apply for several positions need to fill-up <strong>separate Application Forms for each of the position</strong>. In case of duplicate applications, the applicant's most recent submission will be considered for document evaluation.</p>
					<p style="text-indent:50px">Providing false or misleading information may result in immediate disqualification from the hiring process, or if discovered after hiring, termination of employment. Misrepresentation of credentials, experience or any other details may be grounds for permanent ineligibility for future employment opportunities with the office.</p>
				</div>
			</div><br>
			
			<div class="row" style="text-align:center">	
				<div class="col-sm-12"><h5>Consent and Agreement to Conditions</h5></div>
			</div><br>
			
			<div class="row" style="text-align:justify">
				<div class="col-sm-12">
					<p style="text-indent:50px">I declare under oath that I have personally accomplished this Application Form which is a true, correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the Philippines. I authorized the agency head/authorized representative to verify/validate the contents stated in the Application Form. I agree that any misrepresentation made in this Form and its attachments, if any, shall cause the filing of administrative/criminal case/s against me.</p>
				
					<p style="text-indent:50px">I further consent to the DENR 10 Human Resource Merit Promotion and Selection Board, along with the Secretariat, to view my application and evaluate my supporting documents. In compliance with Republic Act No. 10173 (Data Privacy Act of 2012), my data will be handled confidentially and used solely for these specified purposes.</p>
					
					<p style="text-indent:50px">Lastly, I understand that the DENR 10 Online Application Form requires the necessary information to support my application. I also understand that if any documents is lacking, my application shall not be entertained.</p>
				</div>
			</div><br>
	  
			
			<div class="row" style="text-align:center">
				<div class="col-sm-7">
					<input type="radio" class="btn-check" name="consent_option" id="yes_consent" value="Insider" autocomplete="off">
					<label class="btn btn-outline-success" for="yes_consent"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Yes, I give my consent and agree to the conditions</label>
				</div>
				<div class="col-sm-5">
					<input type="radio" class="btn-check" name="consent_option" id="no_consent" value="Outsider" autocomplete="off">
					<label class="btn btn-outline-danger" for="no_consent"><i class="fa fa-thumbs-down" aria-hidden="true"></i> No, I don't consent and agree</label>
				</div>
				
			</div><br>
			<br>
			
			
			
	<div id="app_sec">		
		
		
		
		<div class="vid_tutor">
			<label><i class="fa fa-video-camera" aria-hidden="true"></i> <a href="https://drive.google.com/file/d/1dRXFsYNJcBxpsi3Xn47AJUstFWFXymG6/view?usp=sharing" target="_blank" style="margin-left:10px;color:black">Online Application Video Tutorial</a></label>
			<video width="100%" height="85%" controls controlsList="nodownload">
				<source src="<?php echo base_url();?>ext_lib/images/DENR 10 OAS_Instructional Video.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>	
		
		
		
		
		
		
		
		<form id="application_form" name="application_form" method="POST">
		
		
			<hr style="height:5px">
			<p><b style="color:red">PLEASE READ:</b>  <b>STRICTLY</b> follow the instructions below when filling out the form. Provide all information, indicate <b>N/A</b> if not applicable, do not abbreviate and use the specified filename format before uploading the file. </p>
				
			
			<br>
			<div class="row">
				<div class="col-sm-5" style="padding-left:30px">Are you a government employee?</div>
				<div class="col-sm-5">
					<input type="radio" class="btn-check" name="gov_class" id="gov_success-outlined" value="Yes" autocomplete="off">
					<label class="btn btn-outline-success btn-sm" for="gov_success-outlined">Yes</label>

					<input type="radio" class="btn-check" name="gov_class" id="gov_danger-outlined" value="No" autocomplete="off">
					<label class="btn btn-outline-danger btn-sm" for="gov_danger-outlined" id="gov_no_cons">No</label>
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-5" style="padding-left:30px">Are you <b>CURRENTLY</b> working at DENR?</div>
				<div class="col-sm-5">
					<input type="radio" class="btn-check" name="examinee_class" id="success-outlined" value="Insider" autocomplete="off">
					<label class="btn btn-outline-success btn-sm" for="success-outlined">Yes</label>

					<input type="radio" class="btn-check" name="examinee_class" id="danger-outlined" value="Outsider" autocomplete="off">
					<label class="btn btn-outline-danger btn-sm" for="danger-outlined" id="no_cons">No</label>
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-5" style="padding-left:30px">Position Applied For</div>
				<div class="col-sm-5">
					<select class="vac_position form-select form-select-sm" id="vac_position" name="vac_position">
						<option value="">-Select-</option>
						<?php foreach($pub_vac_pos as $vp):?>
							<option value="<?php echo $vp->position_title;?>"><?php echo $vp->position_title;?></option>
						<?php endforeach;?>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-5" style="padding-left:30px">Place of Vacancy</div>
				<div class="col-sm-5">
					<select class="vac_place form-select form-select-sm" id="vac_place" name="vac_place">
						<option value="">-Select-</option>
					
					</select>
				</div>
			</div><br>
			<br>
			
			<div class="row">
				<div class="col-sm-6" style="padding-left:30px;font-size:14px"><b>Letter of Intent/Application Letter:</b><br>Attach PDF file using the following filename format: <br><i>LastName_FirstName_LetterofIntent</i></div>
				<div class="col-sm-6" style="padding-left:30px">
					<div class="input-group input-group-sm custom-file-button">
						<label class="input-group-text" for="intletter_file">PDF file</label><input class="form-control form-control-sm" style="font-size:14px" type="file" name="intletter_file" id="intletter_file" accept="application/pdf" />
					</div>
				</div>
			</div><br>
			
			<div class="row">
				<div class="col-sm-6" style="padding-left:30px;font-size:14px"><b>Recent Photo Passport size:</b><br>Attach JPEG file using the following filename format: <br><i>LastName_FirstName_Photo</i></div>
				<div class="col-sm-6" style="padding-left:30px">
					<div class="input-group input-group-sm custom-file-button">
						<label class="input-group-text" for="photo_file">JPEG file</label><input class="form-control form-control-sm" style="font-size:14px" type="file" name="photo_file" id="photo_file" accept=".jpg" />
					</div>
				</div>
			</div><br>
			
			
			<br>
			
			
			<div class="sec_head row">
				<div class="col-sm-12"><h6>PERSONAL INFORMATION</h6></div>
			</div><br>
			
			<div class="row">
				<div class="col-sm-2" style="padding-left:30px">Surname</div><div class="col-sm-4"><input type="text" name="surname" id="surname" class="form-control form-control-sm"></div>
				<div class="col-sm-2" style="padding-left:30px">First Name</div><div class="col-sm-4"><input type="text" name="firstname" id="firstname" class="form-control form-control-sm"></div>
			</div><br>
			<div class="row">
				<div class="col-sm-2" style="padding-left:30px">Middle Name</div><div class="col-sm-4"><input type="text" name="middlename" id="middlename" class="form-control form-control-sm"></div>
				<div class="col-sm-2" style="padding-left:30px">Name Ext'n</div><div class="col-sm-4"><input type="text" name="name_ext" id="name_ext" class="form-control form-control-sm" placeholder="ex. Jr/Sr/II/III"></div>
			</div><br>
			<div class="row">
				<div class="col-sm-2" style="padding-left:30px">Date of Birth</div><div class="col-sm-4"><input type="date" name="birth_date" id="birth_date" class="form-control form-control-sm"><input type="hidden" name="age" id="age"></div>
				<div class="col-sm-2" style="padding-left:30px">Place of Birth</div><div class="col-sm-4"><input type="text" name="birth_place" id="birth_place" class="form-control form-control-sm"></div>
			</div><br>
			<div class="row">
				<div class="col-sm-2" style="padding-left:30px">Sex</div>
				<div class="col-sm-4">
					<input type="radio" class="btn-check" name="sex" id="male-outlined" value="Male" autocomplete="off">
					<label class="btn btn-outline-primary btn-sm" for="male-outlined">Male</label>

					<input type="radio" class="btn-check" name="sex" id="female-outlined" value="Female" autocomplete="off">
					<label class="btn btn-outline-primary btn-sm" for="female-outlined" id="no_sex">Female</label>
				</div>
				<div class="col-sm-2" style="padding-left:30px">Civil Status</div>
				<div class="col-sm-4">
					<select class="civil_stat form-select form-select-sm" id="civil_stat" name="civil_stat">
						<option value="">-Select-</option>
						<option value="Single">Single</option>
						<option value="Married">Married</option>
						<option value="Widowed">Widowed</option>
						<option value="Legally Separated">Legally Separated</option>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-2" style="padding-left:30px">Mobile No.</div><div class="col-sm-4"><input type="text" name="mobile_no" id="mobile_no" class="form-control form-control-sm"></div>
				<div class="col-sm-2" style="padding-left:30px">Email Address</div><div class="col-sm-4"><input type="text" name="email_add" id="email_add" class="form-control form-control-sm"></div>
			</div><br>
			<br>
			
			<div class="row">
			
				<div class="col-sm-6" style="padding-left:30px;text-align:justify;font-size:14px">
					<p><b>Personal Data Sheet (CS Form No. 212 Revised 2017):</b><br>To ensure data compatibility with the system database, use the QR-coded template provided on this page. Attach the file using the following filename format: <i>LastName_FirstName_PDS</i></p>
				</div>
				
				<div class="col-sm-6">
				<div class="row">
				<div class="col-sm-6" style="padding-left:30px;font-size:14px">Personal Data Sheet (blank)</div><div class="col-sm-6"><a href="#" class="cs_pds_btn btn btn-sm btn-outline-success"><i class="fa fa-table" aria-hidden="true"></i> Download Template (.xlsx)</a></div>
				</div><br>
				
				<div class="row">
				<div class="col-sm-6" style="padding-left:30px;font-size:14px">Personal Data Sheet (filled-up)</div>
				<div class="col-sm-6">
					<div class="input-group input-group-sm custom-file-button">
						<label class="input-group-text" for="pds_file">Excel file</label><input class="form-control form-control-sm" style="font-size:14px" type="file" name="pds_file" id="pds_file" accept=".xlsx" />
					</div>
				</div>
				</div>
				</div>
			
			</div><br>
			<br>
			
			
			<div class="sec_head row">
				<div class="col-sm-12"><h6>EMPLOYMENT HISTORY (Relevant to the position applied for)</h6></div>
			</div><br>
	  
			<div class="row" style="text-align:center;font-weight:bold">
				<div class="col-sm-3">Position</div>
				<div class="col-sm-2">Employment Status</div>
				<div class="col-sm-4">Office</div>
				<div class="col-sm-2">Period Covered</div>
			</div><br>
	  
			<div id="add_emp_sec">
				<div class="row" id="emp1">
					<div class="col-sm-3"><textarea class="emp_pos form-control" name="emp_pos[]" rows="2"></textarea></div>
					<div class="col-sm-2">
						<select class="emp_stat form-select form-select-sm" name="emp_stat[]">
							<option value="">-Select-</option>
							<option value="N/A">N/A</option>
							<option value="Permanent/Regular">Permanent/Regular</option>
							<option value="Casual">Casual</option>
							<option value="Contractual">Contractual</option>
							<option value="Job Order">Job Order</option>
							<option value="Co-Terminus">Co-Terminus</option>
						</select>
					</div>
					<div class="col-sm-4"><textarea class="emp_office form-control" name="emp_office[]" rows="2"></textarea></div>
					<div class="col-sm-2">
						<div class="input-group input-group-sm mb-3">
							<span class="input-group-text">from</span>
							<input type="date" name="emp_frm[]" class="emp_frm form-control form-control-sm">
						</div>
						<div class="input-group input-group-sm mb-3">
							<span class="input-group-text">to</span>
							<input type="date" name="emp_to[]" class="emp_to form-control form-control-sm">
						</div>
					</div>
					<div class="col-sm-1">
						<button type="button" id="emp_addr" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Row</button>
					</div>
				</div>
			</div><br>
			
			
			
			
			<br>
			<br>
			<div class="sec_head row">
				<div class="col-sm-12"><h6>EDUCATIONAL ATTAINMENT (Relevant to the position applied for)</h6></div>
			</div><br>
	  
			<div class="row" style="text-align:center;font-weight:bold">
				<div class="col-sm-3">Level</div>
				<div class="col-sm-2">Year Graduated</div>
				<div class="col-sm-2">Units earned if not graduated</div>
				<div class="col-sm-4">Degree/Course</div>
			</div><br>
	  
			<div id="add_educ_sec">
				<div class="row" id="educ1">
					<div class="col-sm-3">
						<select class="educ_level form-select form-select-sm" name="educ_level[]">
							<option value="">-Select-</option>
							<option value="N/A">N/A</option>
							<option value="Elementary">Elementary</option>
							<option value="Secondary">Secondary</option>
							<option value="Vocational/Trade/Certificate">Vocational/Trade/Certificate</option>
							<option value="College">College</option>
							<option value="Masters Degree">Masters Degree</option>
							<option value="Doctorate Degree">Doctorate Degree</option>
							<option value="Post Graduate Diploma Course">Post Graduate Diploma Course</option>
						</select>
					</div>
					<div class="col-sm-2">
						<input type="text" name="year_grad[]" class="year_grad form-control form-control-sm">
					</div>
					<div class="col-sm-2">
						<input type="text" name="earn_unit[]" class="earn_unit form-control form-control-sm">
					</div>
					<div class="col-sm-4"><textarea class="degree_course form-control" name="degree_course[]" rows="2"></textarea></div>
					<div class="col-sm-1">
						<button type="button" id="educ_addr" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Row</button>
					</div>
				</div>
			</div><br><br><br>
			
			<div class="row">
				<div class="col-sm-6" style="padding-left:30px;font-size:14px"><b>Authenticated Diploma and Transcript of Records</b><br>Attach PDF file using the following filename format: <br><i>LastName_FirstName_Diploma_TOR</i></div>
				<div class="col-sm-6" style="padding-left:30px">
					<div class="input-group input-group-sm custom-file-button">
						<label class="input-group-text" for="educ_file">PDF file</label><input class="form-control form-control-sm" style="font-size:14px" type="file" name="educ_file" id="educ_file" accept="application/pdf" />
					</div>
				</div>
			</div><br>
			
			
			
			<br>
			<br>
			<div class="sec_head row">
				<div class="col-sm-12"><h6>ELIGIBILITY</h6></div>
			</div><br>
	  
			<div class="row" style="text-align:center;font-weight:bold">
				<div class="col-sm-3">Title of Eligibility</div>
				<div class="col-sm-3">Type of Eligibility</div>
				<div class="col-sm-3">Profession</div>
				<div class="col-sm-2">Rating</div>
			</div><br>
	  
			<div id="add_elig_sec">
				<div class="row" id="elig1">
					<div class="col-sm-3">
						<input type="text" name="eligibility[]" class="eligibility form-control form-control-sm">
					</div>
					<div class="col-sm-3">
						<select class="eligibility_type form-select form-select-sm" name="eligibility_type[]">
							<option value="">-Select-</option>
							<option value="None">None</option>
							<option value="Civil Service">Civil Service Examinations (Professional and Sub-Professional level)</option>
							<option value="Career Executive Service">Career Executive Service</option>
							<option value="Bar/Board Examination Passer">Bar and Board Examination Passer (RA 1080)</option>
							<option value="Honor Graduate">Honor Graduate Eligibility (PD 907)</option>
							<option value="Skills">Skills Eligibility (Category I/Category II/Category III)</option>
							<option value="Barangay/Local Government Official">Eligibility pursuant to RA No. 7160 (Barangay Eligibility/Local Government Official Eligibility)</option>
							<option value="Drivers License">Driver’s License (applicable only to Driver position applicants)</option>
							<option value="Special Laws">Special Laws (Sanggunian Member Eligibility/Scientific and Technological Specialist Eligibility/Foreign School Honor Graduates Eligibility/Veterans Preference Rating Eligibility)</option>
						</select>
					</div>
					<div class="col-sm-3"><input type="text" name="elig_profession[]" class="elig_profession form-control form-control-sm"></div>
					<div class="col-sm-2">
						<input type="text" name="elig_rating[]" class="elig_rating form-control form-control-sm">
					</div>
					<div class="col-sm-1">
						<button type="button" id="elig_addr" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Row</button>
					</div>
				</div>
			</div><br><br><br>
			
			<div class="row">
				<div class="col-sm-6" style="padding-left:30px;font-size:14px"><b>Proof of Eligibility</b><br>Attach PDF file using the following filename format: <br><i>LastName_FirstName_Eligibility</i></div>
				<div class="col-sm-6" style="padding-left:30px">
					<div class="input-group input-group-sm custom-file-button">
						<label class="input-group-text" for="elig_file">PDF file</label><input class="form-control form-control-sm" style="font-size:14px" type="file" name="elig_file" id="elig_file" accept="application/pdf" />
					</div>
				</div>
			</div><br>
			
			
			
			<br>
			<br>
			<div class="sec_head row">
				<div class="col-sm-12"><h6>LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS ATTENDED (Relevant to the position applied for)</h6></div>
			</div><br>
	  
			<div class="row">
				<div class="col-sm-12">
					<p style="text-align:justify">Note: Based on Section VII of Personal Data Sheet (CS Form No. 212 Revised 2017) you uploaded provide a certified true copy of the certificates of the learning and development interventions and training programs attended RELEVANT to the position applied for.</p>
				</div>
			</div><br>
			
			<div class="row">
				<div class="col-sm-6" style="padding-left:30px;font-size:14px"><b>Certified True Copy of Training Certificates:</b><br>Attach PDF file using the following filename format: <br><i>LastName_FirstName_Certificates</i></div>
				<div class="col-sm-6" style="padding-left:30px">
					<div class="input-group input-group-sm custom-file-button">
						<label class="input-group-text" for="cert_file">PDF file</label><input class="form-control form-control-sm" style="font-size:14px" type="file" name="cert_file" id="cert_file" accept="application/pdf" />
					</div>
				</div>
			</div><br>
			
			
			<br>
			<br>
			<div class="sec_head row">
				<div class="col-sm-12"><h6>INDIVIDUAL PERFORMANCE AND COMMITMENT REVIEW (If Applicable)</h6></div>
			</div><br>
	  
			<div class="row">
				<div class="col-sm-3">Latest IPCR Rating</div>
				<div class="col-sm-2"><input type="text" name="ipcr_rating" class="ipcr_rating form-control form-control-sm"></div>
			</div><br>
			
			<div class="row">
				<div class="col-sm-6" style="padding-left:30px;font-size:14px"><b>Certified True Copy of IPCR:</b><br>Attach PDF file using the following filename format: <br><i>LastName_FirstName_IPCR</i></div>
				<div class="col-sm-6" style="padding-left:30px">
					<div class="input-group input-group-sm custom-file-button">
						<label class="input-group-text" for="ipcr_file">PDF file</label><input class="form-control form-control-sm" style="font-size:14px" type="file" name="ipcr_file" id="ipcr_file" accept="application/pdf" />
					</div>
				</div>
			</div><br>
			
			
			
			<br>
			<br>
			<div class="sec_head row">
				<div class="col-sm-12"><h6>NON-ACADEMIC DISTINCTIONS/RECOGNITIONS/IN-SERVICE AWARDS</h6></div>
			</div><br>
			
			<div class="row" style="text-align:center;font-weight:bold">
				<div class="col-sm-6">Title of Award</div>
				<div class="col-sm-3">Date of Conferment</div>
			</div><br>
			
			<div id="add_award_sec">
				<div class="row" id="award1">
					<div class="col-sm-6">
						<input type="text" name="award_title[]" class="award_title form-control form-control-sm">
					</div>
					<div class="col-sm-3">
						<input type="date" name="date_conferm[]" class="date_conferm form-control form-control-sm">
					</div>
					<div class="col-sm-1">
						<button type="button" id="award_addr" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Row</button>
					</div>
				</div>
			</div><br><br>
			
			<div class="row">
				<div class="col-sm-6" style="padding-left:30px;font-size:14px"><b>Proof of Award/Recognitions Received:</b><br>Attach PDF file using the following filename format: <br><i>LastName_FirstName_Awards</i></div>
				<div class="col-sm-6" style="padding-left:30px">
					<div class="input-group input-group-sm custom-file-button">
						<label class="input-group-text" for="award_file">PDF file</label><input class="form-control form-control-sm" style="font-size:14px" type="file" name="award_file" id="award_file" accept="application/pdf" />
					</div>
				</div>
			</div><br>
			
			
			
			
			<br>
			<br>
			<div class="sec_head row">
				<div class="col-sm-12"><h6>OTHER ATTACHMENTS/SUPPORTING DOCUMENTS</h6></div>
			</div><br>
	  
			<div class="row">
				<div class="col-sm-6" style="padding-left:30px;font-size:14px"><b>1. Work Experience Sheet (CS Form 212): Description of Duties</b><br>Attach PDF file using the following filename format: <br><i>LastName_FirstName_WES</i></div>
				<div class="col-sm-6" style="padding-left:30px">
				
				
					<div class="row">
					<div class="col-sm-6" style="font-size:14px">Work Experience Sheet (blank)</div><div class="col-sm-6"><a href="#" class="cs_wes_btn btn btn-sm btn-outline-primary"><i class="fa fa-file-word-o" aria-hidden="true"></i> Download Template (.docx)</a></div>
					</div><br>
					
					<div class="row">
					<div class="col-sm-6" style="font-size:14px">Work Experience Sheet (filled-up)</div>
					<div class="col-sm-6">
						<div class="input-group input-group-sm custom-file-button">
							<label class="input-group-text" for="wes_file">PDF file</label><input class="form-control form-control-sm" style="font-size:14px" type="file" name="wes_file" id="wes_file" accept="application/pdf" />
						</div>
					</div>
					</div>
				
				
				
					</div>
				
			</div><br>
			
			<div class="row">
				<div class="col-sm-6" style="padding-left:30px;font-size:14px"><b>2. Service Record:</b><br>Attach PDF file using the following filename format: <br><i>LastName_FirstName_ServiceRecord</i></div>
				<div class="col-sm-6" style="padding-left:30px">
					<div class="input-group input-group-sm custom-file-button">
						<label class="input-group-text" for="serec_file">PDF file</label><input class="form-control form-control-sm" style="font-size:14px" type="file" name="serec_file" id="serec_file" accept="application/pdf" />
					</div>
				</div>
			</div><br>
			
			<div class="row">
				<div class="col-sm-6" style="padding-left:30px;font-size:14px"><b>3. Special Orders issued related to the position applied for:</b><br>Attach PDF file using the following filename format: <br><i>LastName_FirstName_SO</i></div>
				<div class="col-sm-6" style="padding-left:30px">
					<div class="input-group input-group-sm custom-file-button">
						<label class="input-group-text" for="so_file">PDF file</label><input class="form-control form-control-sm" style="font-size:14px" type="file" name="so_file" id="so_file" accept="application/pdf" />
					</div>
				</div>
			</div><br><br><br>
			
			
			<hr>
			<div class="row">
				<div class="col-sm-12" style="text-align:center">
					<div class="alert alert-danger" role="alert">
					  <b>Reminder:</b> Double check all your encoded data and files before submitting your application.
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-12" style="text-align:center"><button type="button" class="btn btn-success" id="submit_app"><i class="fa fa-send" aria-hidden="true"></i> Submit Application</button></div>
			</div><br>
		
		</form>		
			
	  
	  </div>
	  
	  
	  
	  
	  
	</div>	

<?php else:?>
	<br>
	<br>
	<br>
	<div class="card" style="width: 40rem;">
	  <div class="card-body">
		<h3 class="card-title alert alert-danger">NOTICE</h3>
		<h5 class="card-text">The system is no longer accepting online application(s). <br><br>Thank you.</h5>
	  </div>
	</div>		
	
<?php endif;?>

		
		<script type="text/javascript">
		$(document).ready(function(){	
		
			
		$('#app_sec').hide();
		
		$(document).on("click", "#yes_consent" , function(e){
			$('#app_sec').fadeIn('slow');
		});	
		
		$(document).on("click", "#no_consent" , function(e){
			$('#app_sec').fadeOut('slow');
			window.open("https://denr10.com.ph/dashboard/",'_top');
		});	
		
		
			$('#birth_date').on('change',function(){	
					
					dobDate = new Date($(this).val());
					nowDate = new Date();
					
					var diff = nowDate.getTime() - dobDate.getTime();
					
					var ageDate = new Date(diff); // miliseconds from epoch
					var age = Math.abs(ageDate.getUTCFullYear() - 1970);
					
					$('#age').val(age);
			});
			
			
			
			$(document).on("click", "a.cs_pds_btn" , function(e){
			
				window.open("<?php echo base_url();?>ext_lib/images/PDS_CSFormNo_212_Revised2017.xlsx",'_blank');
			
			});
			
			$(document).on("click", "a.cs_wes_btn" , function(e){
			
				window.open("<?php echo base_url();?>ext_lib/images/WorkExperienceSheet_CSForm212.docx",'_blank');
			
			});



		
			$(document).on("change", "#vac_position" , function(e){
				
				$('#vac_place').find('option').remove();
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/get_assign_place",
					method:"POST",
					dataType: 'json',
					data:{'position_title': $(this).val()},
					success: function(data) {
						
						$('#vac_place').append('<option value="">-Select-</option>');
						$.each(data,function(key, value){
							
							$('#vac_place').append('<option value="' + value['place_assignment'] + '">' + value['place_assignment'] + '</option>');
						});
						
					}
				});
				
			});
			
			
			var emprow = 2;
			$('#emp_addr').on('click', function() {
				$('#add_emp_sec').append('<div class="row" id="emp'+emprow+'" style="margin-top:30px;padding-top:30px;border-top:1px solid #d1d1d1"><div class="col-sm-3"><textarea class="emp_pos form-control" name="emp_pos[]" rows="2"></textarea></div> <div class="col-sm-2"> <select class="emp_stat form-select form-select-sm" name="emp_stat[]"> <option value="">-Select-</option> <option value="N/A">N/A</option> <option value="Permanent/Regular">Permanent/Regular</option> <option value="Casual">Casual</option> <option value="Contractual">Contractual</option> <option value="Job Order">Job Order</option> <option value="Co-Terminus">Co-Terminus</option> </select> </div> <div class="col-sm-4"><textarea class="emp_office form-control" name="emp_office[]" rows="2"></textarea></div> <div class="col-sm-2"> <div class="input-group input-group-sm mb-3"> <span class="input-group-text">from</span> <input type="date" name="emp_frm[]" class="emp_frm form-control form-control-sm"> </div> <div class="input-group input-group-sm mb-3"> <span class="input-group-text">to</span> <input type="date" name="emp_to[]" class="emp_to form-control form-control-sm"> </div> </div> <a class="del_emp btn btn-danger btn-sm" title="Delete Row" style="float:left;height:30px;width:30px;color:#fff;margin-left:14px">X</a></div>');
				emprow++;
			});
			
			$(document).on("click", "a.del_emp" , function(){
				$('#'+$(this).parent().attr('id')).remove();
			});
			
			
			
			var educrow = 2;
			$('#educ_addr').on('click', function() {
				$('#add_educ_sec').append('<div class="row" id="educ'+educrow+'" style="margin-top:30px;padding-top:30px;border-top:1px solid #d1d1d1"><div class="col-sm-3"> <select class="educ_level form-select form-select-sm" name="educ_level[]"> <option value="">-Select-</option> <option value="N/A">N/A</option> <option value="Elementary">Elementary</option> <option value="Secondary">Secondary</option> <option value="Vocational/Trade/Certificate">Vocational/Trade/Certificate</option> <option value="College">College</option> <option value="Masters Degree">Masters Degree</option> <option value="Doctorate Degree">Doctorate Degree</option> <option value="Post Graduate Diploma Course">Post Graduate Diploma Course</option> </select> </div> <div class="col-sm-2"> <input type="text" name="year_grad[]" class="year_grad form-control form-control-sm"> </div> <div class="col-sm-2"> <input type="text" name="earn_unit[]" class="earn_unit form-control form-control-sm"> </div> <div class="col-sm-4"><textarea class="degree_course form-control" name="degree_course[]" rows="2"></textarea></div> <a class="del_educ btn btn-danger btn-sm" title="Delete Row" style="float:left;height:30px;width:30px;color:#fff;margin-left:14px">X</a></div>');
				educrow++;
			});
			
			$(document).on("click", "a.del_educ" , function(){
				$('#'+$(this).parent().attr('id')).remove();
			});
			
			
			
			var eligrow = 2;
			$('#elig_addr').on('click', function() {
				$('#add_elig_sec').append('<div class="row" id="educ'+eligrow+'" style="margin-top:30px;padding-top:30px;border-top:1px solid #d1d1d1"><div class="col-sm-3"> <input type="text" name="eligibility[]" class="eligibility form-control form-control-sm"> </div> <div class="col-sm-3"> <select class="eligibility_type form-select form-select-sm" name="eligibility_type[]"> <option value="">-Select-</option> <option value="None">None</option> <option value="Civil Service">Civil Service Examinations (Professional and Sub-Professional level)</option> <option value="Career Executive Service">Career Executive Service</option> <option value="Bar/Board Examination Passer">Bar and Board Examination Passer (RA 1080)</option> <option value="Honor Graduate">Honor Graduate Eligibility (PD 907)</option> <option value="Skills">Skills Eligibility (Category I/Category II/Category III)</option> <option value="Barangay/Local Government Official">Eligibility pursuant to RA No. 7160 (Barangay Eligibility/Local Government Official Eligibility)</option> <option value="Drivers License">Driver’s License (applicable only to Driver position applicants)</option> <option value="Special Laws">Special Laws (Sanggunian Member Eligibility/Scientific and Technological Specialist Eligibility/Foreign School Honor Graduates Eligibility/Veterans Preference Rating Eligibility)</option> </select> </div> <div class="col-sm-3"><input type="text" name="elig_profession[]" class="elig_profession form-control form-control-sm"></div> <div class="col-sm-2"> <input type="text" name="elig_rating[]" class="elig_rating form-control form-control-sm"> </div><a class="del_elig btn btn-danger btn-sm" title="Delete Row" style="float:left;height:30px;width:30px;color:#fff;margin-left:14px">X</a></div>');
				eligrow++;
			});
			
			$(document).on("click", "a.del_elig" , function(){
				$('#'+$(this).parent().attr('id')).remove();
			});
			
			
			
			var awardrow = 2;
			$('#award_addr').on('click', function() {
				$('#add_award_sec').append('<div class="row" id="award'+awardrow+'" style="margin-top:30px;padding-top:30px;border-top:1px solid #d1d1d1"><div class="col-sm-6"> <input type="text" name="award_title[]" class="award_title form-control form-control-sm"> </div> <div class="col-sm-3"> <input type="date" name="date_conferm[]" class="date_conferm form-control form-control-sm"> </div><a class="del_award btn btn-danger btn-sm" title="Delete Row" style="float:left;height:30px;width:30px;color:#fff;margin-left:14px">X</a></div>');
				awardrow++;
			});
			
			$(document).on("click", "a.del_award" , function(){
				$('#'+$(this).parent().attr('id')).remove();
			});
			
			
			
			$(document).on("input", "input, select, textarea, file" , function(){
				$(this).css({
						"border": "",
						"background": ""
					});
			});
			
			$("#submit_app").click(function(){ 
							  
					var error = '';
					var intletter_file = $('#intletter_file')[0].files;
					var photo_file = $('#photo_file')[0].files;
					var pds_file = $('#pds_file')[0].files;
					var educ_file = $('#educ_file')[0].files;
					var elig_file = $('#elig_file')[0].files;
					var cert_file = $('#cert_file')[0].files;
					var ipcr_file = $('#ipcr_file')[0].files;
					var award_file = $('#award_file')[0].files;
					var wes_file = $('#wes_file')[0].files;
					var serec_file = $('#serec_file')[0].files;
					var so_file = $('#so_file')[0].files;
					var $examinee_class = $('input[name="examinee_class"]');
					var $examinee_class_val = $examinee_class.filter(':checked').val();
					var countexaminee_class = $examinee_class.filter(':checked').length;
					var $gov_class = $('input[name="gov_class"]');
					var $gov_class_val = $gov_class.filter(':checked').val();
					var countgov_class = $gov_class.filter(':checked').length;
					var $sex = $('input[name="sex"]');
					var countsex = $sex.filter(':checked').length;
					var form_data = new FormData();
					var isValid = true;
							

							$('#application_form input[type="text"], input[name="birth_date"], select, textarea').each(function() {
								if ($.trim($(this).val()) == '') {
									isValid = false;
									$(this).css({
										"border": "1px solid red",
										"background": "#feebeb"
									});
									
									$(this).after( "<i class='notif' style='color:red;font-size:12px'>(Required field)</i>");
									$('.notif').delay(3000).fadeOut('slow');
									
									$('html,body').animate({scrollTop: $(this).offset().top-200}, 10);
									
									
								}
								else {
									$(this).css({
										"border": "",
										"background": ""
									});
								}
							});
							
							
							
							if (isValid == false){error = "Please fill out all highlighted fields. Put 'N/A' if not applicable";}
							
							if(countexaminee_class==0){
								$('#no_cons').after( "<i class='notif' style='color:red;font-size:12px'> (Requires answer)</i>");
								$('.notif').delay(3000).fadeOut('slow');
								
								$('html,body').animate({scrollTop: $('#danger-outlined').offset().top-200}, 10);
								error = 'Please answer Yes/No if you are a DENR employee';
							}
							
							if(countgov_class==0){
								$('#gov_no_cons').after( "<i class='notif' style='color:red;font-size:12px'> (Requires answer)</i>");
								$('.notif').delay(3000).fadeOut('slow');
								
								$('html,body').animate({scrollTop: $('#danger-outlined').offset().top-200}, 10);
								error = 'Please answer Yes/No if you are a DENR employee';
							}
							
							
							if(countsex==0){
								$('#no_sex').after( "<i class='notif' style='color:red;font-size:12px'> (Select gender)</i>");
								$('.notif').delay(3000).fadeOut('slow');
								
								$('html,body').animate({scrollTop: $('#danger-outlined').offset().top-200}, 10);
								error = 'Please select gender';
							}
							
							
							if(so_file.length!=''){
								 
								   var name = so_file[0].name;
								   var extension = name.split('.').pop().toLowerCase();
								   if(jQuery.inArray(extension, ['pdf']) == -1)
									   {
										error = "Invalid file attached. Please attach PDF file only.";
										
										$('#so_file').after( "<i class='notif' style='color:red;font-size:12px'>Invalid file attached.</i>");
										$('.notif').delay(3000).fadeOut('slow');
										
										$('html,body').animate({scrollTop: $('#so_file').offset().top-200}, 10);
									   }
									else
										{
										form_data.append("files[10]", so_file[0]);
									   }
										
							  }else{
									// $('#so_file').css({
										// "border": "1px solid red",
										// "background": "#feebeb"
									// });
									// $('html,body').animate({scrollTop: $('#so_file').offset().top-200}, 10);
									// error = "No 'Special Orders' file attached.";
							  }
							  
							  
							
							if(serec_file.length!=''){
								 
								   var name = serec_file[0].name;
								   var extension = name.split('.').pop().toLowerCase();
								   if(jQuery.inArray(extension, ['pdf']) == -1)
									   {
										error = "Invalid file attached. Please attach PDF file only.";
										
										$('#serec_file').after( "<i class='notif' style='color:red;font-size:12px'>Invalid file attached.</i>");
										$('.notif').delay(3000).fadeOut('slow');
										
										$('html,body').animate({scrollTop: $('#serec_file').offset().top-200}, 10);
									   }
									else
										{
										form_data.append("files[9]", serec_file[0]);
									   }
										
							  }else{
								  if($gov_class_val=='Yes'){
									$('#serec_file').css({
										"border": "1px solid red",
										"background": "#feebeb"
									});
									$('html,body').animate({scrollTop: $('#serec_file').offset().top-200}, 10);
									error = "No 'Service Record' file attached.";
								  }
							  }
							  
							  
							
							if(wes_file.length!=''){
								 
								   var name = wes_file[0].name;
								   var extension = name.split('.').pop().toLowerCase();
								   if(jQuery.inArray(extension, ['pdf']) == -1)
									   {
										error = "Invalid file attached. Please attach PDF file only.";
										
										$('#wes_file').after( "<i class='notif' style='color:red;font-size:12px'>Invalid file attached.</i>");
										$('.notif').delay(3000).fadeOut('slow');
										
										$('html,body').animate({scrollTop: $('#wes_file').offset().top-200}, 10);
									   }
									else
										{
										form_data.append("files[8]", wes_file[0]);
									   }
										
							  }else{
									$('#wes_file').css({
										"border": "1px solid red",
										"background": "#feebeb"
									});
									$('html,body').animate({scrollTop: $('#wes_file').offset().top-200}, 10);
									error = "No 'Work Experience Sheet' file attached.";
									
							  }
							  
							  
							
							if(award_file.length!=''){
								 
								   var name = award_file[0].name;
								   var extension = name.split('.').pop().toLowerCase();
								   if(jQuery.inArray(extension, ['pdf']) == -1)
									   {
										error = "Invalid file attached. Please attach PDF file only.";
										
										$('#award_file').after( "<i class='notif' style='color:red;font-size:12px'>Invalid file attached.</i>");
										$('.notif').delay(3000).fadeOut('slow');
										
										$('html,body').animate({scrollTop: $('#award_file').offset().top-200}, 10);
									   }
									else
										{
										form_data.append("files[7]", award_file[0]);
									   }
										
							  }else{
									// $('#award_file').css({
										// "border": "1px solid red",
										// "background": "#feebeb"
									// });
									// $('html,body').animate({scrollTop: $('#award_file').offset().top-200}, 10);
									// error = "No 'Proof of Award/Recognitions' file attached.";
							  }
							  
							  
							
							if(ipcr_file.length!=''){
								 
								   var name = ipcr_file[0].name;
								   var extension = name.split('.').pop().toLowerCase();
								   if(jQuery.inArray(extension, ['pdf']) == -1)
									   {
										error = "Invalid file attached. Please attach PDF file only.";
										
										$('#ipcr_file').after( "<i class='notif' style='color:red;font-size:12px'>Invalid file attached.</i>");
										$('.notif').delay(3000).fadeOut('slow');
										
										$('html,body').animate({scrollTop: $('#ipcr_file').offset().top-200}, 10);
									   }
									else
										{
										form_data.append("files[6]", ipcr_file[0]);
									   }
										
							  }else{
								  if($gov_class_val=='Yes'){
									$('#ipcr_file').css({
										"border": "1px solid red",
										"background": "#feebeb"
									});
									$('html,body').animate({scrollTop: $('#ipcr_file').offset().top-200}, 10);
									error = "No 'Certified True Copy of IPCR' file attached.";
								  }
							  }
							  
							  
							
							if(cert_file.length!=''){
								 
								   var name = cert_file[0].name;
								   var extension = name.split('.').pop().toLowerCase();
								   if(jQuery.inArray(extension, ['pdf']) == -1)
									   {
										error = "Invalid file attached. Please attach PDFssss file only.";
										
										$('#cert_file').after( "<i class='notif' style='color:red;font-size:12px'>Invalid file attached.</i>");
										$('.notif').delay(3000).fadeOut('slow');
										
										$('html,body').animate({scrollTop: $('#cert_file').offset().top-200}, 10);
									   }
									else
										{
										form_data.append("files[5]", cert_file[0]);
									   }
										
							  }else{
									$('#cert_file').css({
										"border": "1px solid red",
										"background": "#feebeb"
									});
									$('html,body').animate({scrollTop: $('#cert_file').offset().top-200}, 10);
									error = "No 'Certified True Copy of Training Certificates' file attached.";
							  }
							  
							
							
							if(elig_file.length!=''){
								 
								   var name = elig_file[0].name;
								   var extension = name.split('.').pop().toLowerCase();
								   if(jQuery.inArray(extension, ['pdf']) == -1)
									   {
										error = "Invalid file attached. Please attach PDFsss file only.";
										
										$('#elig_file').after( "<i class='notif' style='color:red;font-size:12px'>Invalid file attached.</i>");
										$('.notif').delay(3000).fadeOut('slow');
										
										$('html,body').animate({scrollTop: $('#elig_file').offset().top-200}, 10);
									   }
									else
										{
										form_data.append("files[4]", elig_file[0]);
									   }
										
							  }else{
									$('#elig_file').css({
										"border": "1px solid red",
										"background": "#feebeb"
									});
									$('html,body').animate({scrollTop: $('#elig_file').offset().top-200}, 10);
									error = "No 'Proof of Eligibility' file attached.";
							  }
							  
							
							
							if(educ_file.length!=''){
								 
								   var name = educ_file[0].name;
								   var extension = name.split('.').pop().toLowerCase();
								   if(jQuery.inArray(extension, ['pdf']) == -1)
									   {
										error = "Invalid file attached. Please attach PDFss file only.";
										
										$('#educ_file').after( "<i class='notif' style='color:red;font-size:12px'>Invalid file attached.</i>");
										$('.notif').delay(3000).fadeOut('slow');
										
										$('html,body').animate({scrollTop: $('#educ_file').offset().top-200}, 10);
									   }
									else
										{
										form_data.append("files[3]", educ_file[0]);
									   }
										
							  }else{
									$('#educ_file').css({
										"border": "1px solid red",
										"background": "#feebeb"
									});
									$('html,body').animate({scrollTop: $('#educ_file').offset().top-200}, 10);
									error = "No 'Authenticated Diploma and TOR' file attached.";
							  }
							  
							
							if(pds_file.length!=''){
								 
								   var name = pds_file[0].name;
								   var extension = name.split('.').pop().toLowerCase();
								   if(jQuery.inArray(extension, ['xlsx']) == -1)
									   {
										error = "Invalid file attached. Please attach EXCEL file only.";
										
										$('#pds_file').after( "<i class='notif' style='color:red;font-size:12px'>Invalid file attached.</i>");
										$('.notif').delay(3000).fadeOut('slow');
										
										$('html,body').animate({scrollTop: $('#pds_file').offset().top-200}, 10);
									   }
									else
										{
										form_data.append("files[2]", pds_file[0]);
									   }
										
							  }else{
									$('#pds_file').css({
										"border": "1px solid red",
										"background": "#feebeb"
									});
									$('html,body').animate({scrollTop: $('#pds_file').offset().top-200}, 10);
									error = "No 'Personal Data Sheet' file attached.";
							  }
							
							if(photo_file.length!=''){
								 
								   var name = photo_file[0].name;
								   var extension = name.split('.').pop().toLowerCase();
								   if(jQuery.inArray(extension, ['jpg']) == -1)
									   {
										error = "Invalid file attached. Please attach JPEG file only.";
										
										$('#photo_file').after( "<i class='notif' style='color:red;font-size:12px'>Invalid file attached.</i>");
										$('.notif').delay(3000).fadeOut('slow');
										
										$('html,body').animate({scrollTop: $('#photo_file').offset().top-200}, 10);
									   }
									else
										{
										form_data.append("files[1]", photo_file[0]);
									   }
										
							  }else{
									$('#photo_file').css({
										"border": "1px solid red",
										"background": "#feebeb"
									});
									$('html,body').animate({scrollTop: $('#photo_file').offset().top-200}, 10);
									error = "No 'Recent Photo Passport size' file attached.";
							  }
							
							
							
							if(intletter_file.length!=''){
								 
								   var name = intletter_file[0].name;
								   var extension = name.split('.').pop().toLowerCase();
								   if(jQuery.inArray(extension, ['pdf']) == -1)
									   {
										error = "Invalid file attached. Please attach PDFs file only.";
										
										$('#intletter_file').after( "<i class='notif' style='color:red;font-size:12px'>Invalid file attached.</i>");
										$('.notif').delay(3000).fadeOut('slow');
										
										$('html,body').animate({scrollTop: $('#intletter_file').offset().top-200}, 10);
									   }
									else
										{
										form_data.append("files[0]", intletter_file[0]);
									   }
										
							  }else{
									$('#intletter_file').css({
										"border": "1px solid red",
										"background": "#feebeb"
									});
									$('html,body').animate({scrollTop: $('#intletter_file').offset().top-200}, 10);
									error = "No 'Letter of Intent' file attached.";
							  }
							
							
							
							
							
					  if(error == '')
							  {
								  $.ajax({ 
										type: "POST", 
										url: "<?php echo base_url();?>c_phrms/submit_app",
										data: $("#application_form").serialize(),
										beforeSend:function(){
													
										},
										success: function(data){
											
											
											var app_code = data;
											var upload_progress = 0;
												
												if(app_code!=''){
													
													$.ajax({
														
														xhr: function() {
															var xhr = new window.XMLHttpRequest();

															xhr.upload.addEventListener("progress", function(evt) {
															  if (evt.lengthComputable) {
																var percentComplete = evt.loaded / evt.total;
																percentComplete = parseInt(percentComplete * 100);
																
																
																$("#prog_bar").progressbar({value: percentComplete});
																$('#prog_percent').text(percentComplete);
																//console.log(percentComplete);

															  }
															}, false);

															return xhr;
														},
														
														
														
														url:"<?php echo base_url(); ?>c_phrms/upload_app_files?app_code="+app_code+"",
														method:"POST",
														data:form_data,
														contentType:false,
														cache:false,
														processData:false,
														beforeSend:function(data){
																														
															Swal.fire({
																title: "Please wait!",
																html: "Uploading files... (<span id='prog_percent'>"+upload_progress+"</span>%) <br> <div id='prog_bar'></div>",
																icon: "warning",
																showConfirmButton: false,
																allowOutsideClick: false,
																allowEscapeKey: false,
																didOpen: () => {Swal.showLoading()},
															});
																
														},
														success:function(data)
														{
															
															var emp_email=$('#email_add').val();
															var u_id=$('#u_id').val();
															
															
															if(emp_email.indexOf('@')!=-1){
															  $.ajax({ 
																	type: "GET", 
																	url: "<?php echo base_url();?>c_phrms/email_app_confirm/"+app_code+"",
																	beforeSend:function(){
																		
																	},
																	success: function(data){
																		Swal.fire({
																			title: "Application successfully submitted", 
																			icon: "success",
																			html: "Please take note of your application code for future reference. <br><br> Application Code: <b>"+app_code+"</b>",
																			allowOutsideClick: false,
																			allowEscapeKey: false,
																			showCancelButton: true,
																			confirmButtonColor: '#469741',
																			cancelButtonColor: '#3085d6',
																			cancelButtonText: 'Done',
																			confirmButtonText: 'Submit new application?',
																			reverseButtons: true,
																			
																		}).then( ( value )  => {
																			 
																			window.location.reload();
																			
																		});
																	}
															  });
															}
															
															
															
															
															
															
															
															
															
															
															// setTimeout(function(){
												
																// Swal.fire({
																	// title: "Application successfully submitted", 
																	// icon: "success",
																	// html: "Please take note of your application code for future reference. <br><br> Application Code: <b>"+app_code+"</b>",
																	// allowOutsideClick: false,
																	// allowEscapeKey: false,
																	// showCancelButton: true,
																	// confirmButtonColor: '#469741',
																	// cancelButtonColor: '#3085d6',
																	// cancelButtonText: 'Done',
																	// confirmButtonText: 'Submit new application?',
																	// reverseButtons: true,
																	
																// }).then( ( value )  => {
																	 
																	// window.location.reload();
																	
																// });
															// },2000); 
																												
														}
												   });
												}
										}
								  });
							  }
					  else
					  {
						// Swal.fire({
							// text: error,
							// icon: "warning",
						// });
					 }	  
				  
		});
			
			
			
			
			
			
			$( ".vid_tutor" ).draggable();
			
			var resizeOpts = { 
			  handles: "all",
			  autoHide:true,
			  aspectRatio:true, 
			  maxHeight:600,
			}; 
			$( ".vid_tutor" ).resizable(resizeOpts);	
			
			
			
			
			
				
		});
		</script>
		
		<style>
		
			.sec_head{
				background-color:#484848;
				color:#fff;
				vertical-align:center;
				border-radius: 5px;
				padding:10px 5px 5px;
			}
			
			.custom-file-button {
				input[type="file"] {
					margin-left: -2px !important;

					&::-webkit-file-upload-button {
						display: none;
					}
					&::file-selector-button {
						display: none;
					}
				}

				&:hover {
					label {
						background-color: #dde0e3;
						cursor: pointer;
					}
				}
			}
			
			
			.vid_tutor {
			  cursor: grab;
			  padding: 10px;
			  position: fixed;
			  z-index: 100;
			  position: fixed;
			  width: 300px;
			  height: 225px;
			  top: 75%;
			  left: 82%;
			  background-color: rgba(84, 217, 175, 1);
			  border-radius: 10px;
			} 



			
		</style>