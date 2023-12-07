@extends('frontend.layouts.master')
@section('content')
<section id="post-section" class="post-section av-py-default shapes-section">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-12">
                <div class="heading-default text-center wow fadeInUp">
                    <h3>Our <span class="primary-color">Blogs</span></h3>
                    <span class="separator"><span><span></span></span></span>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <div class="av-columns-area">
            @foreach($blogs as $blogsdata)
            <div class="av-column-4 av-md-column-6">
                <article class="post-items">
                    <figure class="post-image post-image-absolute">
                        <div class="featured-image">
                            <a href="blogs-details.php" class="post-hover">
                                <img src="{{asset('uploads/article')}}/{{$blogsdata->image}}" alt="blog_item">
                            </a>
                        </div>
                    </figure>
                    <div class="post-content">
                        <span class="post-date"> <a href="blogs-details.php"><span>14</span>Dec 2022</a> </span>
                        <h5 class="post-title"><a href="blogs-details.php" rel="bookmark">{{$blogsdata->title}}</a></h5>
                        <div class="post-footer">
                            <p>
                                <?php
                                $contentWords = str_word_count(strip_tags($blogsdata->content), 1);
                                echo implode(' ', array_slice($contentWords, 0, 25));
                                ?>
                            </p>
                            <a href="{{route('blogdetails', encrypt($blogsdata->id))}}" class="more-link">Read More</a>
                            <span class="post-count">{{$blogsdata->tags}}</span>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection