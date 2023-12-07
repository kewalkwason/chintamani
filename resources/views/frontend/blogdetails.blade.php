@extends('frontend.layouts.master')
@section('content')
<section id="post-section" class="post-section av-py-default">
    <div class="av-container">

        <div class="av-columns-area">
            <div class="av-column-4">
                <div class="sidebar">


                    <aside id="widget-latest-posts" class="widget widget_latest_posts">
                        <h5 class="widget-title">Recent News <span></span></h5>
                        <div class="widget-content">
                            <article class="latest_posts post-items">
                                <figure class="post-image">
                                    <div class="featured-image">
                                        <a href="javascript:void(0);" class="post-hover">
                                            <img src="assets/images/blog/blogFullSize/img01.jpg" alt="post_item">
                                        </a>
                                    </div>
                                </figure>
                                <div class="post-content">
                                    <span class="count-link">
                                        <a href="javascript:void(0);">1</a>
                                    </span>
                                    <h5 class="post-title"><a href="javascript:void(0);">Money Market Rates Finding The Best Accounts.</a></h5>
                                    <div class="post-meta">
                                        <div class="post-list">
                                            <ul class="post-categories">
                                                <li><a href="#"></a><a href="#">Business</a></li>
                                            </ul>
                                        </div>
                                        <span class="post-date">
                                            <i class="fa fa-clock-o"></i> <time datetime="2020-07-02" class="meta-info">02, July, 2022</time>
                                        </span>
                                    </div>
                                </div>
                            </article>
                            <article class="latest_posts post-items">
                                <figure class="post-image">
                                    <div class="featured-image">
                                        <a href="javascript:void(0);" class="post-hover">
                                            <img src="assets/images/blog/blogFullSize/img02.jpg" alt="post_item">
                                        </a>
                                    </div>
                                </figure>
                                <div class="post-content">
                                    <span class="count-link">
                                        <a href="javascript:void(0);">2</a>
                                    </span>
                                    <h5 class="post-title"><a href="javascript:void(0);">Future Technology Create Good Jobs In Life.</a></h5>
                                    <div class="post-meta">
                                        <div class="post-list">
                                            <ul class="post-categories">
                                                <li><a href="#"></a><a href="#">Creative</a></li>
                                            </ul>
                                        </div>
                                        <span class="post-date">
                                            <i class="fa fa-clock-o"></i> <time datetime="2020-07-02" class="meta-info">02, Jun, 2022</time>
                                        </span>
                                    </div>
                                </div>
                            </article>
                            <article class="latest_posts post-items">
                                <figure class="post-image">
                                    <div class="featured-image">
                                        <a href="javascript:void(0);" class="post-hover">
                                            <img src="assets/images/blog/blogFullSize/img03.jpg" alt="post_item">
                                        </a>
                                    </div>
                                </figure>
                                <div class="post-content">
                                    <span class="count-link">
                                        <a href="javascript:void(0);">3</a>
                                    </span>
                                    <h5 class="post-title"><a href="javascript:void(0);">We Design Platform For All Your Global Customers.</a></h5>
                                    <div class="post-meta">
                                        <div class="post-list">
                                            <ul class="post-categories">
                                                <li><a href="#"></a><a href="#">Design</a></li>
                                            </ul>
                                        </div>
                                        <span class="post-date">
                                            <i class="fa fa-clock-o"></i> <time datetime="2020-07-02" class="meta-info">22, April, 2022</time>
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </aside>
                    <aside id="widget-subscribe" class="widget widget_subscribe">
                        <h5 class="widget-title">Our Newsletter <span></span></h5>
                        <form role="email" method="get" class="mail-form" action="#">
                            <p>Subscribe to get the latest news, No spam, We promise.</p>
                            <div>
                                <input type="email" class="mail-field" placeholder="Enter Email Address..." name="mail" id="mail">
                                <button role="button" type="submit" class="btn" aria-label="Search">Subscribe</button>
                            </div>
                        </form>
                    </aside>

                    <aside id="widget-categories" class="widget widget_categories">
                        <h5 class="widget-title">Top Categories <span></span></h5>
                        <ul>
                            <li class="cat-item"><a href="#" title="Posts in this category test image and text alignment.">Target</a> (5) </li>
                            <li class="cat-item"><a href="#" title="Posts in this category test the aside post format.">Agency</a> (2) </li>
                            <li class="cat-item"><a href="#" title="Posts in this category test the audio post format.">Marketing</a> (3) </li>
                            <li class="cat-item"><a href="#">Winning</a> (7) </li>
                            <li class="cat-item"><a href="#">Development</a> (9) </li>
                        </ul>
                    </aside>
                    <aside id="tag_cloud-2" class="widget widget_tag_cloud">
                        <h5 class="widget-title">Business Tags <span></span></h5>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">Analisis</a>
                            <a href="#" class="tag-cloud-link">Solution</a>
                            <a href="#" class="tag-cloud-link">Strategy</a>
                            <a href="#" class="tag-cloud-link">Consulting</a>
                            <a href="#" class="tag-cloud-link">Designing</a>
                            <a href="#" class="tag-cloud-link">SEO</a>
                            <a href="#" class="tag-cloud-link">Marketing</a>
                        </div>
                    </aside>
                    <aside id="calendar-2" class="widget widget_calendar">
                        <h5 class="widget-title">Calendar <span></span></h5>
                        <div id="calendar_wrap" class="calendar_wrap">
                            <table id="wp-calendar" class="wp-calendar-table">
                                <caption>July, 2021</caption>
                                <thead>
                                    <tr>
                                        <th scope="col" title="Monday">M</th>
                                        <th scope="col" title="Tuesday">T</th>
                                        <th scope="col" title="Wednesday">W</th>
                                        <th scope="col" title="Thursday">T</th>
                                        <th scope="col" title="Friday">F</th>
                                        <th scope="col" title="Saturday">S</th>
                                        <th scope="col" title="Sunday">S</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="pad">&nbsp;</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>14</td>
                                        <td id="today">15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                        <td>19</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>21</td>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                        <td>25</td>
                                        <td>26</td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>28</td>
                                        <td>29</td>
                                        <td>30</td>
                                        <td class="pad" colspan="3">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="av-column-8">
                <div class="av-columns-area">
                    <div class="av-column-12">
                        <article class="post-items">

                            <div class="post-content">
                                <div class="post-footer">
                                    <p>{!!$blogdetails->content!!}</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection