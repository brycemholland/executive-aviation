<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HEAD>
		<TITLE>Executive Aviation Services</TITLE>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
			<meta name="Description" content="Executive Aviation Services provides private air charter services for corporate and group travel at a moments notice. We operate on your time your schedule.  EAS is the solution for air charters, aircraft management, based out of Drake Airport, Roger Arkansas; United States, Canada, Caribbean, Mexico.">
			<META NAME="keywords" CONTENT="air charter, charter jets, charter jet and charter flights services, aircraft charter, airline charter, airplane charter, aviation charter, business jet,  charter flight, charter plane, corporate jet, executive jet, private air charter, private jet, private jets for rent, private jet charter quotes rates, business jet.">

			<script type="text/javascript" src="swfobject.js">
			</script>
			<LINK REL="STYLESHEET" TYPE="text/css" HREF="flyexec.css">
</HEAD>
<BODY MARGINHEIGHT="0" MARGINWIDTH="0" TOPMARGIN="0" LEFTMARGIN="0" bgcolor="#2b74d9">
	<?php
		require_once "./includes/db.inc";
		$destination = $_POST["selectedCity"];
		if($destination != "")
		{
			$king_air 		= find_time($destination, "King Air 200");
			$diamond_jet 	= find_time($destination, "Diamond Jet");
		}
	?>
	<TABLE CELLPADDING="0" CELLSPACING="0" WIDTH="100%" HEIGHT="100%" BORDER="0">
		<TR>
			<TD ALIGN="center" VALIGN="top" BACKGROUND="img/bg_grad2.gif" STYLE="background-repeat:repeat-x">
			<!-- MAIN TABLE -->
				<TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0" WIDTH="780">
					<TR>
						<TD>
						<!-- HEADER -->
						<TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
							<TR>
								<TD><img src="img/head1.gif" width="35" height="275" alt="" border="0"></TD>
								<TD>
									<div id="div1">
										<strong>You need to upgrade your Flash Player</strong>
										This is replaced by the Flash content. 
										Place your alternate content here and users without the Flash plugin or with 
										Javascript turned off will see this. Content here allows you to leave out <code>noscript</code> 
									</div>
									<script type="text/javascript">
									// <![CDATA[		
									var so = new SWFObject("fly_inner4.swf", "flash", "710", "275", "6");
										so.addVariable("flashLogoVarText", "this is passed in via FlashVars for example only"); // this line is optional, but this example uses the variable and displays this text inside the flash movie
										so.write("div1");		
										// ]]>
										</script>
								</TD>
								<TD><img src="img/head2.gif" width="35" height="275" alt="" border="0"></TD>
							</TR>
						</TABLE>
						<!-- HEADER end-->
						</TD>
					</TR>
					<TR>
						<TD>
						<!-- BODY -->
							<TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
								<TR>
									<TD rowspan="2"><img src="img/pixel.gif" width="35" height="1" alt="" border="0"></TD>
									<TD valign="top">
									<!-- NAVIGATION -->
										<a href="index.htm" onmouseover="nav1.src='img/nav1c.gif'" onmouseout="nav1.src='img/nav1b.gif'">
											<img src="img/nav1b.gif" width="149" height="26" alt="" border="0" name="nav1"></a><br>
										<a href="about_executive_aviation_services.html" onmouseover="nav2.src='img/nav2c.gif'" onmouseout="nav2.src='img/nav2b.gif'"> 
											<img src="img/nav2b.gif" width="149" height="20" alt="" border="0" name="nav2"></a><br>
										<a href="why.htm" onmouseover="nav3.src='img/nav3c.gif'" onmouseout="nav3.src='img/nav3b.gif'">
											<img src="img/nav3b.gif" width="149" height="20" alt="" border="0" name="nav3"></a><br>
										<a href="aircraft.htm" onmouseover="nav4.src='img/nav4c.gif'" onmouseout="nav4.src='img/nav4b.gif'">
											<img src="img/nav4b.gif" width="149" height="20" alt="" border="0" name="nav4"></a><br>
										<a href="faq.htm" onmouseover="nav5.src='img/nav5c.gif'" onmouseout="nav5.src='img/nav5b.gif'">
											<img src="img/nav5b.gif" width="149" height="21" alt="" border="0" name="nav5"></a><br>
										<a href="contact.php" onmouseover="nav6.src='img/nav6c.gif'" onmouseout="nav6.src='img/nav6b.gif'">
											<img src="img/nav6b.gif" width="149" height="16" alt="" border="0" name="nav6"></a>
									<!-- NAVIGATION end-->
									</TD>
									<td style="background-repeat:repeat-y" background="img/bgleft.gif"><img src="img/topleft.gif" width="34" height="307" alt="" border="0"></td>
									<TD rowspan="2" background="img/bg.gif" valign="top">
									<!-- CONTENTS -->
										<form name="frmCalculate" method="post" action="calculate.php">
											<TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0" width="509">
												<TR>
													<TD colspan="3"><img src="img/calculate1.gif" width="509" height="46" alt="" border="0"></TD>
												</TR>
												<TR>
													<TD><img src="img/pixel.gif" width="10" height="1" alt="" border="0"></TD>
													<TD class="txt2" valign="top">
														<p>&nbsp;</p>
														<p>Try our Flight Time Calculator to discover how quickly Executive Aviation 
															Services can get you to your destination.</p>
															<b>Origin:</b> Drake Field, Fayetteville AR<br>
															<img src="img/pixel.gif" width="25" height="15" alt="" border="0"><br>
															<b>Destination:</b>
															<SELECT name="selectedCity" class="select" onchange="javascript:document.frmCalculate.submit();">
																<OPTION value='0'> Select City </OPTION>
																<OPTION value='Albuquerque'>Albuquerque</OPTION>
																<OPTION value='Atlanta'>Atlanta</OPTION>
																<OPTION value='Augusta'>Augusta</OPTION>
																<OPTION value='Bahamas'>Bahamas</OPTION>
																<OPTION value='Boston'>Boston</OPTION>
																<OPTION value='Cancun'>Cancun</OPTION>
																<OPTION value='Charlotte'>Charlotte</OPTION>
																<OPTION value='Chicago'>Chicago</OPTION>
																<OPTION value='Dallas'>Dallas</OPTION>
																<OPTION value='Denver'>Denver</OPTION>
																<OPTION value='Destin'>Destin</OPTION>
																<OPTION value='Houston'>Houston</OPTION>
																<OPTION value='Indianapolis'>Indianapolis</OPTION>
																<OPTION value='Kansas City'>Kansas City</OPTION>
																<OPTION value='Las Vegas'>Las Vegas</OPTION>
																<OPTION value='Little Rock'>Little Rock</OPTION>
																<OPTION value='Los Angeles'>Los Angeles</OPTION>
																<OPTION value='Memphis'>Memphis</OPTION>
																<OPTION value='Miami'>Miami</OPTION>
																<OPTION value='Milwaukee'>Milwaukee</OPTION>
																<OPTION value='Nashville'>Nashville</OPTION>
																<OPTION value='New York'>New York</OPTION>
																<OPTION value='Orlando'>Orlando</OPTION>
																<OPTION value='Rochester, Minn'>Rochester, Minn</OPTION>
																<OPTION value='San Antonio'>San Antonio</OPTION>
																<OPTION value='San Diego'>San Diego</OPTION>
																<OPTION value='Seattle'>Seattle</OPTION>
																<OPTION value='St Louis'>St Louis</OPTION>
																<OPTION value='Tampa'>Tampa</OPTION>
																<OPTION value='Toronto'>Toronto</OPTION>
															</SELECT><br /><br />
															<?php
																if($destination != "")
																{
															?>
															This is how fast you reach <strong><?php echo $destination; ?></strong> if you flew with <strong>EAS:</strong><br /><br />
																<table cellpadding="6" cellspacing ="0" border="0">
																	<tr>
																		<td>
																			<img src="/img/arrow.gif" width="14" height="16" alt border="0" />
																		</td>
																		<td class="txt2">King Air 200</td>
																		<td class="txt2"><strong><?php echo $king_air[3]; ?></strong> hours and <strong><?php echo $king_air[4]; ?></strong> minutes.</td>
																	</tr>
																	<tr>
																		<td>
																			<img src="/img/arrow.gif" width="14" height="16" alt border="0" />
																		</td>
																		<td class="txt2">Diamond Jet</td>
																		<td class="txt2"><strong><?php echo $diamond_jet[3]; ?></strong> hours and <strong><?php echo $diamond_jet[4]; ?></strong> minutes.</td>
																	</tr>
																</table>
															<?php
																} // end if destination not empty
															?>
															<table CELLPADDING="0" CELLSPACING="0" BORDER="0">
																<TR>
																	<TD colspan="2"><p>&nbsp;</p>
																	</TD>
																</TR>
																<TR>
																	<TD colspan="2"><img src="img/distmap2.gif" width="270" height="26" alt="" border="0"></TD>
																</TR>
																<TR>
																	<TD><a href="distmap.htm"><img src="img/distmap3.gif" width="144" height="98" alt="" border="0"></a></TD>
																	<TD class="txt2">
																		Compare our aircraft's speed base on time and distance by using <b>E</b>xecutive
																		<b>A</b>viation <b>S</b>ervices Distance Map.
																	</TD>
																</TR>
															</table>
													</TD>
													<TD align="right" valign="top"><img src="img/pixel.gif" width="210" height="30" alt="" border="0"><br>
														<!-- FACTS -->
														<TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0" width="181">
															<TR>
																<TD><img src="img/qfact1.gif" width="26" height="49" alt="" border="0"></TD>
																<TD><img src="img/qfact2.gif" width="141" height="49" alt="" border="0"></TD>
																<TD><img src="img/qfact3.gif" width="16" height="49" alt="" border="0"></TD>
															</TR>
															<TR>
																<TD background="img/qfactbg1.gif" style="background-repeat:repeat-y" valign="top">
																	<img src="img/qfact7.gif" width="26" height="80" alt="" border="0"></TD>
																<TD background="img/qfactbg3.gif" style="background-repeat:repeat-x" bgcolor="#C9BB97" align="center">
																	<!-- FACTS TEXT HERE -->
																	<TABLE width="133" CELLPADDING="0" CELLSPACING="0" BORDER="0">
																		<TR>
																			<TD class="txt2" align="center">
																			<p>Visit the Magical Kingdom the fastest way possible. You can be in Orlando, 
																				Kissimmee Airport in 3 hours and drive to Disney World in 20 minutes.
																			</p>
																			</TD>
																		</TR>
																	</TABLE>
																</FORM>
																<!-- FACTS TEXT HERE -->
																</TD>
																<TD background="img/qfactbg2.gif" style="background-repeat:repeat-y" valign="top"><img src="img/qfact8.gif" width="16" height="80" alt="" border="0"></TD>
															</TR>
															<TR>
																<TD><img src="img/qfact4.gif" width="26" height="16" alt="" border="0"></TD>
																<TD><img src="img/qfact6.gif" width="141" height="16" alt="" border="0"></TD>
																<TD><img src="img/qfact5.gif" width="16" height="16" alt="" border="0"></TD>
															</TR>
														</TABLE>
														<!-- FACTS end-->
													</TD>
												</TR>
											</TABLE>
											<!-- CONTENTS -->
										</TD>
										<TD valign="top" style="background-repeat:repeat-y" background="img/bg_right.gif">
											<img src="img/top_right.gif" width="53" height="300" alt="" border="0"></TD>
									</TR>
									<TR>
										<TD valign="bottom"><img src="img/bot_right2.gif" width="149" height="140" alt="" border="0"></TD>
										<td style="background-repeat:repeat-y" background="img/bgleft.gif" valign="bottom"><img src="img/bot_left.gif" width="34" height="146" alt="" border="0"></td>
										<TD style="background-repeat:repeat-y" background="img/bg_right.gif" valign="bottom"><img src="img/bot_right.gif" width="53" height="140" alt="" border="0"></TD>
									</TR>
								</TABLE>
								<!-- BODY END -->
							</TD>
						</TR>
						<TR>
							<TD><img src="img/bottom.gif" width="780" height="36" alt="" border="0"></TD>
						</TR>
						<TR>
							<TD align="center" class="txt1">&copy; 2010 Executive Aviation Services. Hosted and Maintained by <a href="http://www.ifworld.com" target="_blank" class="txt1">IFWORLD, INC.</a>
							</TD>
						</TR>
					</TABLE> 		
					<!-- MAIN TABLE END-->
				</TD>
			</TR>
		</TABLE>
	</BODY>
</HTML>
								
			