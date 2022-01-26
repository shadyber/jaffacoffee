@extends('layouts.app')
@section('title','Blog')
@section('sub_title','List')
@section('content')


    <div class="page_content_wrap page_paddings_yes">
        <div class="content_wrap">
            <div class="content">
@foreach($blogs as $blog)
                <article class="post_item post_item_excerpt post_featured_default post_format_standard post has-post-thumbnail hentry">
                    <div class="post_featured">
                        <div class="post_thumb" data-image="{{$blog->thumb}}" data-title="{{$blog->title}}">
                            <a class="hover_icon hover_icon_link" href="/blog/{{$blog->slug}}">
                                <img width="770" height="434" alt="" src="{{$blog->thumb}}">
                            </a>
                        </div>
                    </div>
                    <div class="post_content clearfix">
                        <h3 class="post_title">
                            <a href="/blog/{{$blog->slug}}">{{$blog->title}}</a>
                        </h3>
                        <div class="post_info">
                                <span class="post_info_item post_info_posted">
                                    <a href="/blog/{{$blog->slug}}" class="post_info_date">{{$blog->created_at->diffForHumans()}}</a>
                                </span>
                            <span class="post_info_item post_info_posted_by">written by
                                    <a href="#" class="post_info_author">admin</a>
                                </span>
                            <span class="post_info_item post_info_counters">
                                    <a class="post_counters_item post_counters_views icon-eye109" title="Views - 745" href="/blog/{{$blog->slug}}">
                                        <span class="post_counters_number">745</span>
                                    </a>
                                    <a class="post_counters_item post_counters_comments icon-write57" title="Comments - 3" href="#comments">
                                        <span class="post_counters_number">3</span>
                                    </a>
                                </span>
                        </div>
                        <div class="post_descr">
                            <p>{{substr($blog->detail,0,256)}}</p>
                            <a href="/blog/{{$blog->slug}}" class="sc_button sc_button_square sc_button_style_border_1 sc_button_size_small">Read more</a>
                        </div>
                    </div>
                </article>
    @endforeach
            </div>
        </div>
    </div>


@endsection
