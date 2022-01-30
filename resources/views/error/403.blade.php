@extends('layouts.app')
@section('title','Error')
@section('sub_title','403')
@section('content')
    <div class="page_content_wrap page_paddings_yes">
        <div class="content_wrap">
            <div class="content">
                <article class="post_item post_item_404">
                    <div class="post_content">
                        <h1 class="page_title">Oops.</h1>
                        <h2 class="page_subtitle">The requested page cannot be Accessed</h2>
                        <p class="page_description">You Don't Have a Permission to Access this Method on this server.
                            <a href="/">our homepage</a>.
                        </p>
                        <div class="page_go_home">
                            <a href="/home" class="sc_button sc_button_square sc_button_style_border_1 sc_button_size_large">Home page</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
