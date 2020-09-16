
@extends('master')
@section('content')


<br>
<br>

<!-- ============================================================== -->
	<!-- Start - corona Blog Area -->
	<!-- ============================================================== -->
	<div class="blog_area bg_img pb-60 pt-80" id="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title center mb-5">
						<div class="section_title_thumb rotateme">
							<img src="{{ asset('front/images/lg.png')}}" alt="" />
						</div>
						<div class="section_title_content pt-2">
							
							<h2>Latest Update Coronavirus</h2>
							<p>The most common symptoms of COVID-19 are fever, tiredness, and dry cough. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Also the symptoms may appear 2-14 days after exposure.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="blog_list owl-carousel curosel-style">
					<!-- Single Blog -->
					<div class="col-md-12">
						<div class="single_blog mb-4">
							
							<div class="single_blog_inner">
								<div class="single_blog_thumb">
									<img src="{{ asset('front/images/b2.jpg')}}" alt="" />
								</div>
								<div class="single_blog_content pl-4 pr-4 pb-3">
									<div class="single_blog_meta">
										<div class="single_blog_meta_date pr-2">
											<span>Corona Jun 22, 2020.</span>
										</div>
									</div>
									<div class="single_blog_title pt-2 pb-3">
										<h4><a href="details.html">Conulting Reporting Qouncil Arei Not Could More...</a></h4>
									</div>
									<div class="single_blog_text">
										<p>A reader will be distracted by the readable content offs page when looking at its layout the point.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				

					<!-- Single Blog -->
					<div class="col-md-12">
						<div class="single_blog mb-4">
							<div class="single_blog_inner">
								<div class="single_blog_thumb">
									<img src="{{ asset('front/images/b3.jpg')}}" alt="" />
								</div>
								<div class="single_blog_content pl-4 pr-4 pb-3">
									<div class="single_blog_meta">
										<div class="single_blog_meta_date pr-2">
											<span>Corona April 25, 2020.</span>
										</div>
									</div>
									<div class="single_blog_title pt-2 pb-3">
										<h4><a href="details.html">Financial Reporting Qouncil What Could More...</a></h4>
									</div>
									<div class="single_blog_text">
										<p>A reader will be distracted by the readable content offs page when looking at its layout the point.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!- Single Blog ->
					<div class="col-md-12">
						<div class="single_blog mb-4">
							<div class="single_blog_inner">
								<div class="single_blog_thumb">
									<img src="{{ asset('front/images/b4.jpg')}}" alt="" />
								</div>
								<div class="single_blog_content pl-4 pr-4 pb-3">
									<div class="single_blog_meta">
										<div class="single_blog_meta_date pr-2">
											<span>Corona July 15, 2020.</span>
										</div>
									</div>
									<div class="single_blog_title pt-2 pb-3">
										<h4><a href="details.html">Consulting Reporting Qounc Arei Could More...</a></h4>
									</div>
									<div class="single_blog_text">
										<p>A reader will be distracted by the readable content offs page when looking at its layout the point.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{-- Single Blog --}}
					<div class="col-md-12">
						<div class="single_blog mb-4">
							<div class="single_blog_inner">
								<div class="single_blog_thumb">
									<img src="{{ asset('front/images/b.jpg')}}" alt="" />
								</div>
								<div class="single_blog_content pl-4 pr-4 pb-3">
									<div class="single_blog_meta">
										<div class="single_blog_meta_date pr-2">
											<span>Corona July 23, 2020.</span>
										</div>
									</div>
									<div class="single_blog_title pt-2 pb-3">
										<h4><a href="details.html">The release of Letraset sheets contains four</a></h4>
									</div>
									<div class="single_blog_text">
										<p>A reader will be distracted by the readable content offs page when looking at its layout the point.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{-- <!- Single Blog -> --}}

					<div class="col-md-12">
						<div class="single_blog mb-4">
							<div class="single_blog_inner">
								<div class="single_blog_thumb">
									<img src="{{ asset('front/images/b1.jpg')}}" alt="" />
								</div>
								<div class="single_blog_content pl-4 pr-4 pb-3">
									<div class="single_blog_meta">
										<div class="single_blog_meta_date pr-2">
											<span>Corona April 21, 2020.</span>
										</div>
									</div>
									<div class="single_blog_title pt-2 pb-3">
										<h4><a href="{{ route('detailpage') }}">The release of Letraset sheets contains four</a></h4>
									</div>
									<div class="single_blog_text">
										<p>A reader will be distracted by the readable content offs page when looking at its layout the point.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End - corona Blog Area -->
	<!-- ============================================================== -->

<!-- BLOG AREA -->
	<div class="blog_area blog-grid blog-details-area" id="blog">
		<div class="container">		
			<div class="row">	
				<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-md-12">
							<div class="blog_details">
								<div class="blog_dtl_thumb">
									<img src="{{ asset('front/images/b2.jpg')}}" alt="" />
								</div>
								<div class="blog_dtl_content">
									<h2>What to Do if You are feeling Sick</h2>
									
									<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical on Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at thes Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discoverede the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum is et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on thes theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum ines dolor sit amet..", comes from a line in section 1.10.32.</p>
									
									<h3>Election Day Is Coming</h3>
									<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical on Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at thes Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites</p>
									<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical on Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at thes Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites</p>
									
								</div>
							
                            
								
								
							</div>
						</div>

						{{-- <div class="col-md-12">
								<!- BLOG COMMENTST SECTION ->
                            <div class="blog_comments_section">
                                <div class="comments_ttl">
                                    <h3>3 Comments</h3>
                                </div>
                                <!-- Single Comments -->
                                <div class="single_comments">
                                    <div class="comments_thumb">
                                        <img src="assets/images/testi2.png" alt="" />
                                    </div>
                                    <div class="commentst_content">
                                        <div class="post_meta">
                                            <span class="badmin">John Dome</span>
                                            <span class="badmin"><i class="fa fa-clock-o"></i> Jan 06 2020</span>
                                            <a href=""><span class="commentst_meta_reply"><i class="fa fa-reply"></i>Reply</span></a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .</p>
                                    </div>
                                    <!-- Single Comments Inner -->
                                    <div class="single_commentst_inner">
                                        <div class="comments_thumb">
                                            <img src="assets/images/testi1.png" alt="" />
                                        </div>
                                        <div class="commentst_content">
                                            <div class="post_meta">
                                                <span class="badmin">John Dome</span>
                                                <span class="badmin"><i class="fa fa-clock-o"></i> Jan 06 2020</span>
                                                <a href=""><span class="commentst_meta_reply"><i class="fa fa-reply"></i>Reply</span></a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Comments -->
                                <div class="single_comments">
                                    <div class="comments_thumb">
                                         <img src="assets/images/testi3.png" alt="" />
                                    </div>
                                    <div class="commentst_content">
                                        <div class="post_meta">
                                            <span class="badmin">John Dome</span>
                                            <span class="badmin"><i class="fa fa-clock-o"></i> Jan 06 2020</span>
                                            <a href=""><span class="commentst_meta_reply"><i class="fa fa-reply"></i>Reply</span></a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .</p>
                                    </div>
                                </div>
                            </div>

						</div>
						<div class="col-md-12">
							<div class="blog_reply">
                                <div class="reply_ttl">
                                    <h3>Leave A Comments</h3>
                                </div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="contact_form">
										<form action="#">
											<div class="form_field">
												<div class="form_field_inner">
													<input type="text" name="name" placeholder="Name" />
												</div>
												<div class="form_field_inner">
													<input type="text" name="web" placeholder="Websit" />
												</div>
											</div>
											<div class="form_field">
												<div class="form_field_inner">
													<input type="text" name="phone" placeholder="Phone " />
												</div>
												<div class="form_field_inner">
													<input type="text" name="email" placeholder="Email" />
												</div>
											</div>
											<div class="form_field text_area">
												<div class="form_field_inner">
													<textarea name="textarea" placeholder="Message...."></textarea>
												</div>
											</div>
											<div class="form_field">
												<div class="contact_button">
													<button name="submit">Send Message</button>
												</div>
											</div>
											
										
										</form>
									</div>
								</div>
							</div>
							</div>
						
						</div>
					</div>	
						
				</div>
				<div class=" col-lg-4 col-md-5 col-sm-12 col-xs-12 sidebar-right content-widget pdsr">
					<div class="blog-left-side widget">
						<div id="search-3" class="widget widget_search">
							<div class="search">
								<form action="#" method="get">
									<input type="text" name="s" value="" placeholder="Type Your Keyword" title="Search for:">
									<button type="submit" class="icons">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
						</div>
						<div id="categories-3" class="widget widget_categories">
							<h2 class="widget-title">Categories</h2>
							<ul>
								<li class="cat-item cat-item-8"><a href="#/"><i class="fa fa-youtube-play"></i> Graphic Design <span>(25)</span></a>
								</li>
								<li class="cat-item cat-item-10"><a href="#"><i class="fa fa-youtube-play"></i> Corporate building <span>(29)</span></a>
								</li>
								<li class="cat-item cat-item-10"><a href="#"><i class="fa fa-youtube-play"></i> Web Design <span>(29)</span></a>
								</li>
								<li class="cat-item cat-item-9"><a href="#"><i class="fa fa-youtube-play"></i> Corporate Office <span>(15)</span></a>
								</li>
								<li class="cat-item cat-item-11"><a href="#"><i class="fa fa-youtube-play"></i> Road Map <span>(22)</span></a>
								</li>
							</ul>
						</div>
						<div id="em_recent_post_widget-7" class="widget widget_recent_data">
							<div class="single-widget-item">
								<h2 class="widget-title">Popular Post</h2>				
								<div class="recent-post-item">
									<div class="recent-post-image">
										<a href="#">
											<img width="100" height="80" src="assets/images/recent1.jpg" alt="">					
										</a>
									</div>
									<div class="recent-post-text">
										<span class="rcomment">October 16, 2020</span>
										<h4><a href="#">
											3 Ways to Transform Your Blog Into 										
											</a>
										</h4>					
										
									</div>
								</div>
								<div class="recent-post-item">
									<div class="recent-post-image">
										<a href="#">
											<img width="100" height="80" src="assets/images/recent2.jpg" alt="">					
										</a>
									</div>
									<div class="recent-post-text">
										<span class="rcomment">October 16, 2020</span>
										<h4><a href="#">
										How Important Is Design To Business. 										
										</a></h4>					
										
									</div>
								</div>
								<div class="recent-post-item">
									<div class="recent-post-image">
										<a href="#">
											<img width="100" height="80" src="assets/images/recent1.jpg" alt="">					
										</a>
									</div>
									<div class="recent-post-text">
										<span class="rcomment">October 16, 2020</span>
										<h4><a href="#">
										Your Small Business Web Design Solution. 										
										</a></h4>
									</div>
								</div>
								
							</div>
						</div>		
						
						{{-- <div id="tags" class="widget tagcloud">
							<h2 class="widget-title">Archives</h2>	
								<a href="">Event</a>
								<a href="">Food</a>
								<a href="">Water</a>
								<a href="">Glass</a>
								<a href="">Ciramic</a>
								<a href="">Plastic</a>
								<a href="">Polite</a>
								<a href="">Modern</a>
						</div> --}}
							
					</div>
				{{-- </div> --}} 

			</div>
		</div>
	</div>
	<!-- BLOG_AREA END -->
	@endsection