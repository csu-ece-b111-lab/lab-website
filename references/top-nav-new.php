<!-- Added Proxima Nova fonts along with #pnb and #pn styles for the pnb and pn id's (which were added throughtout the document) -->
<style>
	@font-face
	{
		font-family:"Proxima Nova";
		font-style:normal;
		font-weight:normal;
		src:url("//static.colostate.edu/fonts/proxima-nova/proximanova_regular_macroman/ProximaNova-Reg-webfont.woff2") format("woff2"),
			url("//static.colostate.edu/fonts/proxima-nova/proximanova_regular_macroman/ProximaNova-Reg-webfont.woff") format("woff"),
			url("//static.colostate.edu/fonts/proxima-nova/proximanova_regular_macroman/ProximaNova-Reg-webfont.ttf") format("truetype"),
			url("/ece/_support/fonts/new-header/ProximaNova-Reg-webfont.woff2") format("woff2"),
			url("/ece/_support/fonts/new-header/ProximaNova-Reg-webfont.woff") format("woff"),
			url("/ece/_support/fonts/new-header/ProximaNova-Reg-webfont.ttf") format("truetype");
	}
	@font-face
	{
		font-family:"Proxima Nova Bold";
		font-style:normal;
		font-weight:normal;
		src:url("//static.colostate.edu/fonts/proxima-nova/proximanova_bold_macroman/ProximaNova-Bold-webfont.woff2") format("woff2"),
			url("//static.colostate.edu/fonts/proxima-nova/proximanova_bold_macroman/ProximaNova-Bold-webfont.woff") format("woff"),
			url("//static.colostate.edu/fonts/proxima-nova/proximanova_bold_macroman/ProximaNova-Bold-webfont.ttf") format("truetype"),
			url("/ece/_support/fonts/new-header/ProximaNova-Bold-webfont.woff2") format("woff2"),
			url("/ece/_support/fonts/new-header/ProximaNova-Bold-webfont.woff") format("woff"),
			url("/ece/_support/fonts/new-header/ProximaNova-Bold-webfont.ttf") format("truetype");
	}
	@font-face
	{
		font-family:"Proxima Nova Light";
		font-style:normal;
		font-weight:normal;
		src:url("//static.colostate.edu/fonts/proxima-nova/proximanova_light_macroman/ProximaNova-Light-webfont.woff2") format("woff2"),
			url("//static.colostate.edu/fonts/proxima-nova/proximanova_light_macroman/ProximaNova-Light-webfont.woff") format("woff"),
			url("//static.colostate.edu/fonts/proxima-nova/proximanova_light_macroman/ProximaNova-Light-webfont.ttf") format("truetype"),
			url("/ece/_support/fonts/new-header/ProximaNova-Light-webfont.woff2") format("woff2"),
			url("/ece/_support/fonts/new-header/ProximaNova-Light-webfont.woff") format("woff"),
			url("/ece/_support/fonts/new-header/ProximaNova-Light-webfont.ttf") format("truetype");
	}
	#pnb
	{
		font-family:"Proxima Nova Bold";
		font-size:15px; /* font size changed to keep search box from wrapping to next line */
	}
	#pn
	{
		font-family:"Proxima Nova";
	}
</style>
<!-- Navbar -->
<div class="navbar" id="nav-follow" style="background-color:#376f37; background-image:none; border:none;"> <!-- added: style="background-color:#376f37; background-image:none; border:none;" -->
  <div class="navbar-inner">
    <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn navbar-toggle"><i class="glyphicon glyphicon-th-list"></i></a> <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="navbar-brand">Navbar</a>
    <div class="nav-collapse collapse navbar-responsive-collapse">
      <ul class="nav">
        <li class="dropdown active"><a id="pnb" href="<?php echo $basehref ?>future_students/future_students.php">Future Students</a><b class="caret"></b>
          <ul>
            <li><a id="pn" href="<?php echo $basehref ?>future_students/undergraduates.php">Undergraduates</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>future_students/graduates.php">Graduates</a></li>
			<li><a id="pn" href="<?php echo $basehref ?>future_students/online_certificates.php">Online Certificates</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>future_students/scholarships.php">Scholarships</a></li>
			<li><a id="pn" href="<?php echo $basehref ?>current_students/graduate_funding_opportunities.php" style="line-height:175%; margin-top:3%; margin-bottom:3%;">Graduate Funding<br />Opportunities</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>current_students/student_organizations.php">Student Organizations</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>industry/career_outlook.php">Career Outlook</a></li>
			<li><a id="pn" href="http://admissions.colostate.edu/location/" target="_blank">About CSU and Fort Collins</a></li>
			<li><a id="pn" href="<?php echo $basehref ?>future_students/visit_ece.php">Visit ECE</a></li>
          </ul>
        </li>
        <li class="dropdown"><a id="pnb" href="<?php echo $basehref ?>current_students/current_students.php">Current Students</a> <b class="caret"></b>
          <ul>
            <li><a id="pn" href="<?php echo $basehref ?>current_students/undergraduates.php">Undergraduates</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>current_students/graduates.php">Graduates</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>current_students/courses.php">Courses</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>future_students/scholarships.php">Scholarships</a></li>
			<li><a id="pn" href="<?php echo $basehref ?>current_students/graduate_funding_opportunities.php" style="line-height:175%; margin-top:3%; margin-bottom:3%;">Graduate Funding<br />Opportunities</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>industry/career_outlook.php">Career Outlook</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>current_students/student_organizations.php">Student Organizations</a></li>
          </ul>
        </li>
        <li class="dropdown"><a id="pnb" href="<?php echo $basehref ?>research/research.php">Research</a> <b class="caret"></b>
          <ul>
            <li><a id="pn" href="<?php echo $basehref ?>research/research_areas.php">Research Areas</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>research/funded_research_projects.php">Funded Research Projects</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>research/highly_cited_work.php">Highly Cited Work</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>research/centers_and_laboratories.php">Centers and Laboratories</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>research/engineering_research_centers.php" style="line-height:175%; margin-top:3%; margin-bottom:3%;">Engineering Research<br />Centers</a></li>
            <li><a id="pn" href="http://istec.colostate.edu/" target="_blank" style="line-height:175%; margin-top:3%; margin-bottom:3%;">Information Science and<br />Technology Center (ISTeC)</a></li>
			<li><a id="pn" href="<?php echo $basehref ?>research/reu.php" style="line-height:175%; margin-top:3%; margin-bottom:3%;">Research Experience for<br />Undergraduates (REUs)</a></li>
			<li><a id="pn" href="<?php echo $basehref ?>facultystaff/ieee_fellows.php">IEEE Fellows</a></li>
          </ul>
        </li>
        <li class="dropdown"><a id="pnb" href="<?php echo $basehref ?>facultystaff/people.php">People</a> <b class="caret"></b>
          <ul>
            <li><a id="pn" href="<?php echo $basehref ?>facultystaff/faculty.php">Faculty</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>facultystaff/staff.php">Staff</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>facultystaff/alumni.php">Alumni</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>facultystaff/affiliate_faculty.php">Affiliate Faculty</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>facultystaff/ieee_fellows.php">IEEE Fellows</a></li>
          </ul>
        </li>
		<li class="dropdown"><a id="pnb" href="<?php echo $basehref ?>industry/industry.php">Industry</a> <b class="caret"></b>
          <ul>
            <li><a id="pn" href="<?php echo $basehref ?>industry/industrial_advisory_board.php">Industrial Advisory Board</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>industry/giving.php">Giving</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>industry/job_postings.php">Job Postings</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>industry/career_outlook.php">Career Outlook</a></li>
			<li><a id="pn" href="<?php echo $basehref ?>industry/eir.php">Engineer in Residence</a></li>
          </ul>
        </li>
		<li class="dropdown"><a id="pnb" href="<?php echo $basehref ?>about_us/about_us.php">About Us</a> <b class="caret"></b>
          <ul>
            <!--<li><a id="pn" href="<?php echo $basehref ?>centennial/centennial.php">Department History</a></li>-->
            <li><a id="pn" href="<?php echo $basehref ?>about_us/department_overview.php">Department Overview</a></li>
            <li><a id="pn" href="<?php echo $basehref ?>about_us/open_positions.php">Open Positions</a></li>
            <li><a id="pn" href="http://admissions.colostate.edu/location/" target="_blank">About CSU and Fort Collins</a></li>
			<li><a id="pn" href="<?php echo $basehref ?>about_us/contact_us.php">Contact Us</a></li>
          </ul>
        </li>
		<li class="dropdown"><a id="pnb" href="<?php echo $basehref ?>red/red.php">RED</a> <b class="caret"></b>
          <ul>
            <li><a id="pn" href="<?php echo $basehref ?>red/red_at_csu.php" style="line-height:175%; margin-top:3%; margin-bottom:3%;">Revolutionizing Engineering<br />Departments (RED) Overview</a></li>
			<li class="divider"></li>
			<li class="nav-header" id="pn" style="text-shadow:none;">Knowledge Threads</li>
            	<li><a id="pn" href="<?php echo $basehref ?>red/foundations.php">Foundations</a></li>
				<li><a id="pn" href="<?php echo $basehref ?>red/professional_formation.php">Professional Formation</a></li>
				<li><a id="pn" href="<?php echo $basehref ?>red/creativity.php">Creativity</a></li>
				<li class="divider"></li>
			<li class="nav-header" id="pn" style="text-shadow:none;">Knowledge Integration</li>
            	<li><a id="pn" href="<?php echo $basehref ?>red/2nd_year_curriculum.php">2nd Year Curriculum</a></li>
				<li><a id="pn" href="<?php echo $basehref ?>red/3rd_year_curriculum.php">3rd Year Curriculum</a></li>
				<li><a id="pn" href="<?php echo $basehref ?>red/ki_activities.php">Knowledge Integration Activities</a></li>
				<li class="divider"></li>
			<li class="nav-header" id="pn" style="text-shadow:none;">Research</li>
            	<li><a id="pn" href="<?php echo $basehref ?>red/educational_research.php">Educational Research</a></li>
				<li><a id="pn" href="<?php echo $basehref ?>red/organizational_change_research.php">Organizational Change Research</a></li>
          </ul>
        </li>

		<!-- Example of Nested Headings -->
		<!--
        <li class="dropdown"><a id="pnb" href="">Nested Headings</a> <b class="caret"></b>
          <ul>
            <li class="nav-header">Navigation Header</li>
            <li><a href="<?php echo $basehref ?>secondary.php">Navigation Item</a></li>
            <li><a href="<?php echo $basehref ?>secondary.php">Navigation Item</a></li>
            <li><a href="<?php echo $basehref ?>secondary.php">Navigation Item</a></li>
            <li class="divider"></li>
            <li class="nav-header">Navigation Header</li>
            <li><a href="<?php echo $basehref ?>secondary.php">Navigation Item</a></li>
            <li><a href="<?php echo $basehref ?>secondary.php">Navigation Item</a></li>
          </ul>
        </li>
		-->
		
      </ul>
	  
      <div class="social" style="background-color:#376f37; background-image:none; border-left:1px solid #1e3c1e; box-shadow:none;"> <!-- added: style="background-color:#376f37; background-image:none; border-left:1px solid #1e3c1e; box-shadow:none;" -->
        <p id="pn" style="padding-left:11px;">Connect:</p> <!-- added: style="padding-left:11px;" -->
        <ul>
          <li class="email"><a href="/ece/about_us/contact_us.php">email</a></li>
          <!-- <li class="linkedin"><a href="">linkedIn</a></li> -->
          <li class="facebook"><a href=" https://www.facebook.com/pages/Electrical-Computer-Engineering-Department-Colorado-State-University/164419290241892?ref=hl" target="_blank">Facebook</a></li>
        </ul>
      </div>
		
	  <!-- inserted search code (and made necessary style updates) originally found in header.php -->
	  <style>
		form.header-search button:hover{background:#1e4d2b;}
	  </style>

	  <form action="/ece/search/search.php" id="searchbox_001074770120494240330:gi0emznujq4" class="header-search" style="clear:none; margin:10px 15px 10px 15px;">
		<fieldset>
			<legend style="display:none;">Search</legend>
			<input type="hidden" name="cx" value="001074770120494240330:gi0emznujq4" />
			<input type="hidden" name="cof" value="FORID:11" />
			<input type="text" id="pn" name="q" value="Search ECE" aria-label="Search ECE" /> <!-- aria-label="Search ECE" added 2/13/2018 for accessibility -->
			<button type="submit" class="btn" aria-label="Search"><i class="glyphicon glyphicon-search"></i></button> <!-- aria-label="Search" added 2/13/2018 for accessibility -->
		</fieldset>
	  </form>
	  <!-- end -->

    </div>
  </div>
</div>