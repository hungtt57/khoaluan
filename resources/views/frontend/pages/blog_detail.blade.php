@extends('frontend.layout.master')
@section('content')
 <div class="wrapper-breadcrums">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-24">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li class="home"> <a href="{{asset('/')}}" title="Go to Home Page"><span >Trang chủ</span></a> <span class="separator">/ </span>
                                        </li>
                                        <li class="blog"> <a href="{{asset('/blog')}}" title="Go to Blog"><span >Tin tức</span></a> <span class="separator">/ </span>
                                        </li>
                                        <li class="post"><strong>{{$blog_detail->title}}</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.wrapper-breadcrums -->

                <div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>
                            <div class="em-main-container em-col2-left-layout">
                                <div class="row">
                                    <div class="col-sm-18 col-sm-push-6 em-col-main">
                                        <div class="em_post-action-top">
                                            <a class="prev-button" href="#"> <img alt="" src="images/em_prev.gif" /> </a>
                                            <a class="next-button null" href="#"> <img alt="" src="images/em_next-null.gif" /> </a>
                                        </div>
                                        <div class="em_post-item">
                                            <div class="post-title">
                                                <h2>{{$blog_detail->title}}</h2>
                                            </div>
                                            <div class="post-content">
                                                <p><span></span>
                                                </p>
                                                
                                            </div>
                                            <div class="post-header">
                                                <p class="post-by"> <span class="post-user"><span>admin</span></span>
                                                </p> <span class="post-time"><small class="time-stamp">Jul 21 2015</small></span>
                                            </div>
                                            <div class="em_post-action">
                                                <div class="tags"> <span>Tags: </span>
                                                    <ul>
                                                        <li class="item"><a href="#" style="font-size:px;">garden</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="post-share"> <span>Share this post</span>
                                                    
                                                </div>
                                            </div>
                                            <div class="comments">
                                                <div class="post-footer"> <span class="comment-count"> 3 Comments </span> <span class="separator">|</span> <span class="post-by">Posted by <span>admin</span></span>
                                                </div>
                                                <div class="article-comments">
                                                    <div id="comments-header">
                                                        <h3 class="form-title">Comments (3)</h3>
                                                    </div>
                                                    <div id="allcomments">
                                                        <div class="level1 comment-item">
                                                            <div class="wrapper-reply-comment">
                                                                <div class="comment-item-header"> <span class="comment-by"> Comment by <span>Ben Sherman</span> </span>
                                                                </div>
                                                                <div class="comment-body"> We are particularly excited about this transaction as Ben Sherman is consistent with our mission to acquire high quality brands with substantial global growth potential. The current management team under Oxford’s leadership has done a great job building on the core essence of the brand. We’ve received supportive messages from retailers across the globe that share our view of the growth opportunity ahead.</div> <small class="time-stamp"> Wednesday, Jul 22 2015, 02:59AM </small>
                                                                <div class="comment-button">
                                                                    <button class="button" name="reply" value="Post Reply"><span><span>Post reply</span></span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div id="3_comment_box"></div>
                                                        </div><!-- /.level1 -->
                                                        <div class="level1 comment-item">
                                                            <div class="wrapper-reply-comment">
                                                                <div class="comment-item-header"> <span class="comment-by"> Comment by <span>Musgrave</span> </span>
                                                                </div>
                                                                <div class="comment-body"> s the fashion business as guilty as any other offender? Or is it actually better than most? We would love to hear your views, experiences and observations.</div> <small class="time-stamp"> Wednesday, Jul 22 2015, 02:57AM </small>
                                                                <div class="comment-button">
                                                                    <button class="button" name="reply" value="Post Reply"><span><span>Post reply</span></span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div id="1_comment_box"></div>
                                                            <div class='level2 reply comment-item '>
                                                                <div class='comment-item-header'><span>Drappers</span>
                                                                    <div class='comment-status'> <small class='date'>Wednesday, Jul 22 2015, 02:58AM</small>
                                                                        <div class='comment-button'>
                                                                            <button name='reply' class='button' value='Reply'><span><span>Reply</span></span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='comment-body'>It will be interesting to see which firms seize the opportunity to lead by example and how many continue to duck and dive with deflections about staff discounts and other benefits or just ignore the debate. As ever, your views on the topic would be most welcome.</div>
                                                                <div id='2_comment_box'></div>
                                                            </div>
                                                        </div><!-- /.level1 -->
                                                    </div>
                                                    <div class="toolbar">
                                                        <div class="pager">
                                                            <p class="amount"> <strong>2 Item(s)</strong>
                                                            </p>
                                                        </div>
                                                    </div><!-- /.toolbar -->
                                                </div>
                                                <div class="form-comment-container"> <span id="new"><h3>Leave Your Comment</h3> </span>
                                                    <div id="0_comment_box" class="form-comment">
                                                        <form method="post" id="comform" enctype="multipart/form-data" onsubmit="return processForm();">
                                                            <div class="field" id="username">
                                                                <label class="required" for="name">Username<em>*</em>
                                                                </label>
                                                                <div class="input-box">
                                                                    <input type="text" class="input-text required-entry" value="" title="Name" id="name" name="username">
                                                                </div>
                                                            </div>
                                                            <div class="field" id="email">
                                                                <label class="required" for="email1">Your Email<em>*</em>
                                                                </label>
                                                                <div class="input-box">
                                                                    <input type="text" class="input-text required-entry validate-email" value="" title="Email" id="email1" name="email">
                                                                </div>
                                                            </div>
                                                            <div class="input-box">
                                                                <label class="required" for="comment">Comment<em>*</em>
                                                                </label>
                                                                <textarea rows="2" cols="10" class="required-entry input-text" style="width:306px;height:200px" title="Comment" id="comment" name="comment_content"></textarea>
                                                            </div>
                                                            <script type="text/javascript" src="http://api.recaptcha.net/challenge?k=6Ld1Z-MSAAAAAGsU_aFn8G72FhHBsPAID4loAEnh"></script>
                                                            <noscript>
                                                                <iframe src="http://api.recaptcha.net/noscript?k=6Ld1Z-MSAAAAAGsU_aFn8G72FhHBsPAID4loAEnh" height="300" width="500" frameborder="0"></iframe>
                                                                <br/>
                                                                <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
                                                                <input type="hidden" name="recaptcha_response_field" value="manual_challenge" /> </noscript>
                                                            <label class="required-1 " for="recaptcha">Required Field<em>*</em>
                                                            </label>
                                                            <div class="blog_submit">
                                                                <button class="button" type="submit" name="submit" value="Post"><span><span>Submit</span></span>
                                                                </button>
                                                                <input type="hidden" name="parent_id" value="0" id="parent_id" />
                                                                <input type="hidden" name="post_id" id="post_id" value="9" />
                                                                <input type="hidden" name="uri" id="uri" value="/blog/pineapples-mermaids-and-more-kooks-hit-secret-garden-festival.html" />
                                                            </div>
                                                        </form>
                                                    </div><!-- /#0_comment_box -->
                                                </div><!-- /.form-comment-container -->
                                            </div><!-- /.comments -->
                                        </div>
                                    </div><!-- /.em-col-main -->

                                    <div class="col-sm-6 col-sm-pull-18 em-col-left em-sidebar">
                                        <div class="block em_blog-cat em-line-01">
                                            <div class="block-title"> <strong><span>Blog Categories</span></strong>
                                            </div>
                                            <div class="block-content">
                                                <ul class="nav-blog">
                                                    <li class=' level0 first parent'><a href='#'><span>Fashion</span></a>
                                                        <ul class='level0'>
                                                            <li class=' level1 first '><a href='#'><span>Men Fashion</span></a>
                                                            </li>
                                                            <li class=' level1 last '><a href='#'><span>Woman Fashion</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class=' level0  '><a href='#'><span>Shoes</span></a>
                                                    </li>
                                                    <li class=' level0  '><a href='#'><span>Glass</span></a>
                                                    </li>
                                                    <li class=' level0  '><a href='#'><span>Baby</span></a>
                                                    </li>
                                                    <li class=' level0  '><a href='#'><span>Sport</span></a>
                                                    </li>
                                                    <li class=' level0  '><a href='#'><span>Swatch</span></a>
                                                    </li>
                                                    <li class=' level0  '><a href='#'><span>Jewelry</span></a>
                                                    </li>
                                                    <li class=' level0 last '><a href='#'><span>Garden</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.block -->
                                        <div class="block em_block-recent-post em-line-01">
                                            <div class="block-title"> <strong><span>Recent Posts</span></strong>
                                            </div>
                                            <div class="block-content">
                                                <ul class="em-recent-post">
                                                    <li class="item">
                                                        <a href="blog-detail.html"> <img alt="" src="images/blog/em_ads_07_15.jpg" /> </a> <a class="post-title em-blog-title" href="blog-detail.html">Pineapples, Mermaids and More Kooks Hit Secret Garden Festival</a>
                                                        <p class="intro">
                                                            <p><span>Boutique festival Secret Garden went down in Sydney&rsquo;s&nbsp;Camden over the weekend, and all the free-spirited kids came out to play in a mix of creative and outlandish ensembles. Seriously, if you didn&rsquo;t scream eccentric and quirky, you would&rsquo;ve felt like the odd one out amongst the aliens, mermaids and glittery hippies dripping in face paint, flash tatts, tiaras, and clangling gypsy necklaces.</span>
                                                            </p>
                                                        </p>
                                                        <div class="post-header">
                                                            <p class="post-by"> <span class="post-user"><span>admin</span></span>
                                                            </p> <span class="post-time"><small class="time-stamp">Jul 21 2015</small></span>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <a href="blog-detail.html"> <img alt="" src="images/blog/em_ads_08_14.jpg" /> </a> <a class="post-title em-blog-title" href="blog-detail.html">11 Emerging Jewelry Designers You Need to Know</a>
                                                        <p class="intro">
                                                            <p>Jewelry<span>&nbsp;designers are a little like the stepchild of the fashion industry. They&rsquo;re adored, but tend to play second fiddle to fashion brands</span>
                                                            </p>
                                                        </p>
                                                        <div class="post-header">
                                                            <p class="post-by"> <span class="post-user"><span>admin</span></span>
                                                            </p> <span class="post-time"><small class="time-stamp">Jul 21 2015</small></span>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <a href="blog-detail.html"> <img alt="" src="images/blog/em_ads_09_9.jpg" /> </a> <a class="post-title em-blog-title" href="blog-detail.html">Target’s Lilly Pulitzer Collaboration to Include Cosmetics</a>
                                                        <p class="intro">
                                                            <p><span>A few weeks after announcing that&nbsp;</span>Lilly Pulitzer<span>&nbsp;would be its next design collaboration, which will include a&nbsp;plus-sized range and home furnishings, Target has announced that color cosmetics will also be a part of the collection. This marks the first time any of the retailer&rsquo;s designer collaborations have included a beauty component.</span>
                                                            </p>
                                                        </p>
                                                        <div class="post-header">
                                                            <p class="post-by"> <span class="post-user"><span>admin</span></span>
                                                            </p> <span class="post-time"><small class="time-stamp">Jul 21 2015</small></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.block -->
                                        <div class="block em_block-recent-comments em-line-01">
                                            <div class="block-title"> <strong><span>Recent Comments</span></strong>
                                            </div>
                                            <div class="block-content">
                                                <ul class="em-blog-recent-comment">
                                                    <li class="recent-comment-item"> <a class="comment-title" href="blog-detail.html">Pineapples, Mermaids and More Kooks Hit Secret Garden Festival</a>
                                                        <div class="recent-comment-content"> We are particularly excited about this transaction...</div>
                                                        <div class="comment-header"> <span class="comment-by"> <span>Ben Sherman</span> </span> <span class="post-time"><small class="time-stamp">Jul 22 2015</small></span>
                                                        </div>
                                                    </li>
                                                    <li class="recent-comment-item"> <a class="comment-title" href="blog-detail.html">Pineapples, Mermaids and More Kooks Hit Secret Garden Festival</a>
                                                        <div class="recent-comment-content"> It will be interesting to see which firms seize...</div>
                                                        <div class="comment-header"> <span class="comment-by"> <span>Drappers</span> </span> <span class="post-time"><small class="time-stamp">Jul 22 2015</small></span>
                                                        </div>
                                                    </li>
                                                    <li class="recent-comment-item"> <a class="comment-title" href="blog-detail.html">Pineapples, Mermaids and More Kooks Hit Secret Garden Festival</a>
                                                        <div class="recent-comment-content"> s the fashion business as guilty as any other...</div>
                                                        <div class="comment-header"> <span class="comment-by"> <span>Musgrave</span> </span> <span class="post-time"><small class="time-stamp">Jul 22 2015</small></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.block -->
                                        <div class="block em_block-tag-cloud em-line-01">
                                            <div class="block-title"> <strong><span>Tag Cloud</span></strong>
                                            </div>
                                            <div class="block-content">
                                                <ul>
                                                    <li class="item"><a href="#" style="font-size:32px;">shoes</a>
                                                    </li>
                                                    <li class="item"><a href="#" style="font-size:12px;">fashion</a>
                                                    </li>
                                                    <li class="item"><a href="#" style="font-size:12px;">kid</a>
                                                    </li>
                                                    <li class="item"><a href="#" style="font-size:12px;">sport</a>
                                                    </li>
                                                    <li class="item"><a href="#" style="font-size:12px;">style</a>
                                                    </li>
                                                    <li class="item"><a href="#" style="font-size:12px;">comestic</a>
                                                    </li>
                                                    <li class="item"><a href="#" style="font-size:12px;">aging</a>
                                                    </li>
                                                    <li class="item"><a href="#" style="font-size:12px;">jewelry</a>
                                                    </li>
                                                    <li class="item"><a href="#" style="font-size:12px;">you</a>
                                                    </li>
                                                    <li class="item"><a href="#" style="font-size:12px;">garden</a>
                                                    </li>
                                                    <li class="item"><a href="#" style="font-size:12px;">mistakes</a>
                                                    </li>
                                                    <li class="item"><a href="#" style="font-size:12px;">your</a>
                                                    </li>
                                                </ul>
                                                <div class="actions"> <a class="button-link" href="#"><span><span>View All Tags</span></span></a>
                                                </div>
                                            </div>
                                        </div><!-- /.block -->
                                    </div><!-- /. em-sidebar -->
                                </div>
                            </div><!-- /.em-main-container -->
                        </div>
                    </div>
                </div>
@endsection