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
                                        <li class="blog"> <a href="{{asset('/tintuc')}}" title="Go to Blog"><span >Tin tức</span></a> <span class="separator">/ </span>
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
                                        
                                        <div class="em_post-item">
                                            <div class="post-title">
                                                <h2>{{$blog_detail->title}}</h2>
                                            </div>
                                            <div class="post-content">
                                                <p><span><?php echo $blog_detail->content;?></span>
                                                </p>
                                                
                                            </div>
                                            <div class="post-header">
                                                
                                                </p> <span class="post-time"><small class="time-stamp">{{$blog_detail->created_at}}</small></span>
                                            </div>
                                            
                                            <div class="comments">
                                                
                                                <div class="article-comments">
                                                    <div class="fb-comments" data-href="khoaluan.com/blog" data-colorscheme="light" data-numposts="10" data-width="850"></div>
                                                    
                                                </div>
                                               
                                            </div><!-- /.comments -->
                                        </div>
                                    </div><!-- /.em-col-main -->

                                    <div class="col-sm-6 col-sm-pull-18 em-col-left em-sidebar">
                                       
                                         <div class="block em_block-recent-post em-line-01">
                                            <div class="block-title"> <strong><span>Các bài viết gần đây</span></strong>
                                            </div>
                                            <div class="block-content">
                                                <ul class="em-recent-post">
                                                @foreach($recent_blogs as $key => $recent_blog)
                                                    <li class="item">
                                                        <a href="{{asset('/blog_detail/'.$recent_blog->id.'/'.$recent_blog->alias)}}"> <img alt="" src="{{asset($recent_blog->image)}}" /> </a> <a class="post-title em-blog-title" href="blog-detail.html">{{$recent_blog->title}}</a>
                                                        <p class="intro">
                                                            <p><span>{{$recent_blog->description}}</span>
                                                            </p>
                                                        </p>
                                                        <div class="post-header">
                                                           
                                                            </p> <span class="post-time"><small class="time-stamp">{{$recent_blog->created_at}}</small></span>
                                                        </div>
                                                    </li>
                                                @endforeach
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
