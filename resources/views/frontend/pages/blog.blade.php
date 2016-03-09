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
                                        <li class="blog"> <strong>Tin tức</strong>
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
                                        <div class="em_post-items">
                                        @foreach($allBlogs as $key => $val)
                                            <div class="em_post-item">
                                                <div class="post-title">
                                                    <h2><a href="{{asset('/blog_detail/'.$val->id.'/'.$val->alias)}}">{{$val->title}}</a></h2>
                                                </div>
                                                <div class="post-header">
                                                     <span class="post-time"><small class="time-stamp">{{$val->created_at}}</small></span> <!-- <span class="comment-count"> 3 </span> <a class="comment-post-link" href="blog-detail.html">Comments</a> -->
                                                </div>
                                                <div class="post-image">
                                                    <a href="{{asset('/blog_detail/'.$val->id.'/'.$val->alias)}}"> <img class="img-responsive" alt="" src="{{asset($val->image)}}" style="width:380px; height:209px;"/> </a>
                                                </div>
                                                <div class="post-content">
                                                    <div class="std">
                                                        <p><span>{{$val->description}}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div><!-- /.em_post-item -->
                                        @endforeach   
                                        </div><!-- /.em_post-items -->
                                        <div class="toolbar">
                                            <div class="pager">
                                                
                                                <div style="float:right;">
                                                    
                                                        {!!$allBlogs->setPath('')->appends(Input::query())->render() !!}
                                                        
                                                    
                                                </div>
                                            </div><!-- /.pager -->
                                           
                                            
                                        </div><!-- /.toolbar -->
                                    </div><!-- /.em-col-main -->
                                    <div class="col-sm-6 col-sm-pull-18 em-col-left em-sidebar">
                                       
                                        <div class="block em_block-recent-post em-line-01">
                                            <div class="block-title"> <strong><span>Các bài viết gần đây</span></strong>
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
                                        
                                    </div><!-- /. em-sidebar -->
                                </div>
                            </div><!-- /.em-main-container -->
                        </div>
                    </div>
                </div>
@endsection