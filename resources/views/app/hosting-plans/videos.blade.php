@extends('layouts.web.master')

@section('title','Dashboard')

@section('videos')
<div class="page-content-inner">

  <!--Lifestyle Dashboard V5-->
  <div class="lifestyle-dashboard lifestyle-dashboard-v5">

      <div class="dashboard-title is-main">
          <div class="left">
              <h2 class="dark-inverted">Recent Videos</h2>
              <p class="h-hidden-mobile">Recent videos in this workspace</p>
          </div>
          <div class="right">
              <div class="members">
                  <h4>Members</h4>
                  <div class="members-list">
                      <div class="h-avatar is-small">
                          <button class="avatar is-fake is-squared">
                              <span><i data-feather="plus"></i></span>
                          </button>
                      </div>
                      <div class="h-avatar is-small">
                          <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/33.jpg" alt="">
                      </div>
                      <div class="h-avatar is-small">
                          <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" alt="">
                      </div>
                      <div class="h-avatar is-small">
                          <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/5.jpg" alt="">
                      </div>
                      <div class="h-avatar is-small">
                          <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                      </div>
                      <div class="h-avatar is-small">
                          <span class="avatar is-fake is-squared">
                            <span>+6</span>
                          </span>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!--Media Feed-->
      <div class="media-feed">

          <!--Group-->
          <div class="feed-group">
              <h4 class="group-title">Today</h4>

              <div class="group-content">
                  <div class="columns">
                      <div class="column is-6">
                          <div class="columns is-multiline">
                              <div class="column is-12">
                                  <div class="media-feed-item is-big has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/-VHQ0cw2euA/800x600">
                                      <!--Duration-->
                                      <span class="tag item-duration">01:43</span>
                                      <!--Play button-->
                                      <button class="play-button">
                                          <i data-feather="play"></i>
                                      </button>
                                      <!--Bottom Overlay-->
                                      <div class="item-overlay"></div>
                                      <!-- Overlay content -->
                                      <div class="overlay-layer">
                                          <div class="overlay-content">
                                              <div class="inner-content">
                                                  <h3 class="media-title">The best ways to do a nice team building</h3>
                                                  <div class="media-meta">
                                                      <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                                      <a class="meta-item is-hoverable">Erik K.</a>
                                                      <span class="separator">|</span>
                                                      <span class="meta-item">NEW</span>
                                                      <span class="separator">|</span>
                                                      <a class="meta-item is-hoverable">2 comments</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="column is-6">
                                  <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/S2jw81lfrG0/800x600">
                                      <!--Duration-->
                                      <span class="tag item-duration">05:17</span>
                                      <!--Play button-->
                                      <button class="play-button">
                                          <i data-feather="play"></i>
                                      </button>
                                      <!--Bottom Overlay-->
                                      <div class="item-overlay"></div>
                                      <!-- Overlay content -->
                                      <div class="overlay-layer">
                                          <div class="overlay-content">
                                              <div class="inner-content">
                                                  <h3 class="media-title">Bake beautiful and tasty cupcakes</h3>
                                                  <div class="media-meta">
                                                      <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                                                      <a class="meta-item is-hoverable">Alice C.</a>
                                                      <span class="separator">|</span>
                                                      <a class="meta-item is-hoverable">1 comment</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="column is-6">
                                  <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/7F65HDP0-E0/800x600">
                                      <!--Duration-->
                                      <span class="tag item-duration">03:12</span>
                                      <!--Play button-->
                                      <button class="play-button">
                                          <i data-feather="play"></i>
                                      </button>
                                      <!--Bottom Overlay-->
                                      <div class="item-overlay"></div>
                                      <!-- Overlay content -->
                                      <div class="overlay-layer">
                                          <div class="overlay-content">
                                              <div class="inner-content">
                                                  <h3 class="media-title">My last trip to Rio de Janeiro in 3 min</h3>
                                                  <div class="media-meta">
                                                      <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="">
                                                      <a class="meta-item is-hoverable">Tara S.</a>
                                                      <span class="separator">|</span>
                                                      <a class="meta-item is-hoverable">0 comments</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="column is-6">
                          <div class="columns is-multiline">
                              <div class="column is-6">
                                  <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/W_MUqtuHwyY/800x600">
                                      <!--Duration-->
                                      <span class="tag item-duration">04:24</span>
                                      <!--Play button-->
                                      <button class="play-button">
                                          <i data-feather="play"></i>
                                      </button>
                                      <!--Bottom Overlay-->
                                      <div class="item-overlay"></div>
                                      <!-- Overlay content -->
                                      <div class="overlay-layer">
                                          <div class="overlay-content">
                                              <div class="inner-content">
                                                  <h3 class="media-title">My last trip to Rio de Janeiro in 3 min</h3>
                                                  <div class="media-meta">
                                                      <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" alt="">
                                                      <a class="meta-item is-hoverable">Joshua S.</a>
                                                      <span class="separator">|</span>
                                                      <a class="meta-item is-hoverable">5 comments</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="column is-6">
                                  <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/h4i9G-de7Po/800x600">
                                      <!--Duration-->
                                      <span class="tag item-duration">08:29</span>
                                      <!--Play button-->
                                      <button class="play-button">
                                          <i data-feather="play"></i>
                                      </button>
                                      <!--Bottom Overlay-->
                                      <div class="item-overlay"></div>
                                      <!-- Overlay content -->
                                      <div class="overlay-layer">
                                          <div class="overlay-content">
                                              <div class="inner-content">
                                                  <h3 class="media-title">The best workout guide for women</h3>
                                                  <div class="media-meta">
                                                      <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/19.jpg" alt="">
                                                      <a class="meta-item is-hoverable">Greta K.</a>
                                                      <span class="separator">|</span>
                                                      <a class="meta-item is-hoverable">3 comments</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="column is-6">
                                  <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/_CFv3bntQlQ/800x600">
                                      <!--Duration-->
                                      <span class="tag item-duration">07:11</span>
                                      <!--Play button-->
                                      <button class="play-button">
                                          <i data-feather="play"></i>
                                      </button>
                                      <!--Bottom Overlay-->
                                      <div class="item-overlay"></div>
                                      <!-- Overlay content -->
                                      <div class="overlay-layer">
                                          <div class="overlay-content">
                                              <div class="inner-content">
                                                  <h3 class="media-title">10 incredible waves surfed by pros</h3>
                                                  <div class="media-meta">
                                                      <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/5.jpg" alt="">
                                                      <a class="meta-item is-hoverable">Mary L.</a>
                                                      <span class="separator">|</span>
                                                      <a class="meta-item is-hoverable">3 comments</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="column is-6">
                                  <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/sp-p7uuT0tw/800x600">
                                      <!--Duration-->
                                      <span class="tag item-duration">12:37</span>
                                      <!--Play button-->
                                      <button class="play-button">
                                          <i data-feather="play"></i>
                                      </button>
                                      <!--Bottom Overlay-->
                                      <div class="item-overlay"></div>
                                      <!-- Overlay content -->
                                      <div class="overlay-layer">
                                          <div class="overlay-content">
                                              <div class="inner-content">
                                                  <h3 class="media-title">Enchanting rain forests around the world</h3>
                                                  <div class="media-meta">
                                                      <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/18.jpg" alt="">
                                                      <a class="meta-item is-hoverable">Esteban C.</a>
                                                      <span class="separator">|</span>
                                                      <a class="meta-item is-hoverable">3 comments</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!--Group-->
          <div class="feed-group">
              <h4 class="group-title">Yesterday</h4>

              <div class="group-content">

                  <div class="columns is-multiline">
                      <!--Media item-->
                      <div class="column is-3">
                          <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/jmURdhtm7Ng/800x600">
                              <!--Duration-->
                              <span class="tag item-duration">04:24</span>
                              <!--Play button-->
                              <button class="play-button">
                                  <i data-feather="play"></i>
                              </button>
                              <!--Bottom Overlay-->
                              <div class="item-overlay"></div>
                              <!-- Overlay content -->
                              <div class="overlay-layer">
                                  <div class="overlay-content">
                                      <div class="inner-content">
                                          <h3 class="media-title">The ultimate guide to beard care</h3>
                                          <div class="media-meta">
                                              <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" alt="">
                                              <a class="meta-item is-hoverable">Joshua S.</a>
                                              <span class="separator">|</span>
                                              <a class="meta-item is-hoverable">5 comments</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--Media item-->
                      <div class="column is-3">
                          <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/j7lTi6MtYgk/800x600">
                              <!--Duration-->
                              <span class="tag item-duration">12:18</span>
                              <!--Play button-->
                              <button class="play-button">
                                  <i data-feather="play"></i>
                              </button>
                              <!--Bottom Overlay-->
                              <div class="item-overlay"></div>
                              <!-- Overlay content -->
                              <div class="overlay-layer">
                                  <div class="overlay-content">
                                      <div class="inner-content">
                                          <h3 class="media-title">Test driving the latest Tesla release</h3>
                                          <div class="media-meta">
                                              <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/5.jpg" alt="">
                                              <a class="meta-item is-hoverable">Mary L.</a>
                                              <span class="separator">|</span>
                                              <a class="meta-item is-hoverable">4 comments</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--Media item-->
                      <div class="column is-3">
                          <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/RN6ts8IZ4_0/800x600">
                              <!--Duration-->
                              <span class="tag item-duration">06:19</span>
                              <!--Play button-->
                              <button class="play-button">
                                  <i data-feather="play"></i>
                              </button>
                              <!--Bottom Overlay-->
                              <div class="item-overlay"></div>
                              <!-- Overlay content -->
                              <div class="overlay-layer">
                                  <div class="overlay-content">
                                      <div class="inner-content">
                                          <h3 class="media-title">5 places you should definitely check</h3>
                                          <div class="media-meta">
                                              <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/27.jpg" alt="">
                                              <a class="meta-item is-hoverable">Carmen E.</a>
                                              <span class="separator">|</span>
                                              <a class="meta-item is-hoverable">8 comments</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--Media item-->
                      <div class="column is-3">
                          <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/sS9AkuTE9aA/800x600">
                              <!--Duration-->
                              <span class="tag item-duration">03:49</span>
                              <!--Play button-->
                              <button class="play-button">
                                  <i data-feather="play"></i>
                              </button>
                              <!--Bottom Overlay-->
                              <div class="item-overlay"></div>
                              <!-- Overlay content -->
                              <div class="overlay-layer">
                                  <div class="overlay-content">
                                      <div class="inner-content">
                                          <h3 class="media-title">Why you should plan first before shopping</h3>
                                          <div class="media-meta">
                                              <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/21.jpg" alt="">
                                              <a class="meta-item is-hoverable">Elizabeth F.</a>
                                              <span class="separator">|</span>
                                              <a class="meta-item is-hoverable">11 comments</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--Media item-->
                      <div class="column is-3">
                          <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/_h1IO0AHilM/800x600">
                              <!--Duration-->
                              <span class="tag item-duration">07:21</span>
                              <!--Play button-->
                              <button class="play-button">
                                  <i data-feather="play"></i>
                              </button>
                              <!--Bottom Overlay-->
                              <div class="item-overlay"></div>
                              <!-- Overlay content -->
                              <div class="overlay-layer">
                                  <div class="overlay-content">
                                      <div class="inner-content">
                                          <h3 class="media-title">10 asian cities you should travel to</h3>
                                          <div class="media-meta">
                                              <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/23.jpg" alt="">
                                              <a class="meta-item is-hoverable">Irina V.</a>
                                              <span class="separator">|</span>
                                              <a class="meta-item is-hoverable">9 comments</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--Media item-->
                      <div class="column is-3">
                          <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/xTkxZN_DV8o/800x600">
                              <!--Duration-->
                              <span class="tag item-duration">15:39</span>
                              <!--Play button-->
                              <button class="play-button">
                                  <i data-feather="play"></i>
                              </button>
                              <!--Bottom Overlay-->
                              <div class="item-overlay"></div>
                              <!-- Overlay content -->
                              <div class="overlay-layer">
                                  <div class="overlay-content">
                                      <div class="inner-content">
                                          <h3 class="media-title">Our awesome 6 months worlwide trip</h3>
                                          <div class="media-meta">
                                              <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/40.jpg" alt="">
                                              <a class="meta-item is-hoverable">Jeanne M.</a>
                                              <span class="separator">|</span>
                                              <a class="meta-item is-hoverable">2 comments</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--Media item-->
                      <div class="column is-3">
                          <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/ilvDG96PRWo/800x600">
                              <!--Duration-->
                              <span class="tag item-duration">11:16</span>
                              <!--Play button-->
                              <button class="play-button">
                                  <i data-feather="play"></i>
                              </button>
                              <!--Bottom Overlay-->
                              <div class="item-overlay"></div>
                              <!-- Overlay content -->
                              <div class="overlay-layer">
                                  <div class="overlay-content">
                                      <div class="inner-content">
                                          <h3 class="media-title">Traditional blue houses in Morocco</h3>
                                          <div class="media-meta">
                                              <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/22.jpg" alt="">
                                              <a class="meta-item is-hoverable">Dwayne H.</a>
                                              <span class="separator">|</span>
                                              <a class="meta-item is-hoverable">0 comments</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--Media item-->
                      <div class="column is-3">
                          <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/H8w5w4AiY1Q/800x600">
                              <!--Duration-->
                              <span class="tag item-duration">08:43</span>
                              <!--Play button-->
                              <button class="play-button">
                                  <i data-feather="play"></i>
                              </button>
                              <!--Bottom Overlay-->
                              <div class="item-overlay"></div>
                              <!-- Overlay content -->
                              <div class="overlay-layer">
                                  <div class="overlay-content">
                                      <div class="inner-content">
                                          <h3 class="media-title">8 awesome activies to do with the family</h3>
                                          <div class="media-meta">
                                              <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/16.jpg" alt="">
                                              <a class="meta-item is-hoverable">Jason G.</a>
                                              <span class="separator">|</span>
                                              <a class="meta-item is-hoverable">6 comments</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--Media item-->
                      <div class="column is-3">
                          <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/Oalh2MojUuk/800x600">
                              <!--Duration-->
                              <span class="tag item-duration">07:16</span>
                              <!--Play button-->
                              <button class="play-button">
                                  <i data-feather="play"></i>
                              </button>
                              <!--Bottom Overlay-->
                              <div class="item-overlay"></div>
                              <!-- Overlay content -->
                              <div class="overlay-layer">
                                  <div class="overlay-content">
                                      <div class="inner-content">
                                          <h3 class="media-title">Choosing the right development method</h3>
                                          <div class="media-meta">
                                              <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" alt="">
                                              <a class="meta-item is-hoverable">Joshua S.</a>
                                              <span class="separator">|</span>
                                              <a class="meta-item is-hoverable">5 comments</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--Media item-->
                      <div class="column is-3">
                          <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/7okkFhxrxNw/800x600">
                              <!--Duration-->
                              <span class="tag item-duration">11:17</span>
                              <!--Play button-->
                              <button class="play-button">
                                  <i data-feather="play"></i>
                              </button>
                              <!--Bottom Overlay-->
                              <div class="item-overlay"></div>
                              <!-- Overlay content -->
                              <div class="overlay-layer">
                                  <div class="overlay-content">
                                      <div class="inner-content">
                                          <h3 class="media-title">How peer programming improves productivity</h3>
                                          <div class="media-meta">
                                              <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" alt="">
                                              <a class="meta-item is-hoverable">Melany W.</a>
                                              <span class="separator">|</span>
                                              <a class="meta-item is-hoverable">12 comments</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--Media item-->
                      <div class="column is-3">
                          <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/Z9VQmkpxLNU/800x600">
                              <!--Duration-->
                              <span class="tag item-duration">05:22</span>
                              <!--Play button-->
                              <button class="play-button">
                                  <i data-feather="play"></i>
                              </button>
                              <!--Bottom Overlay-->
                              <div class="item-overlay"></div>
                              <!-- Overlay content -->
                              <div class="overlay-layer">
                                  <div class="overlay-content">
                                      <div class="inner-content">
                                          <h3 class="media-title">An introduction to the art of rugby</h3>
                                          <div class="media-meta">
                                              <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/30.jpg" alt="">
                                              <a class="meta-item is-hoverable">Clément D.</a>
                                              <span class="separator">|</span>
                                              <a class="meta-item is-hoverable">3 comments</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--Media item-->
                      <div class="column is-3">
                          <div class="media-feed-item has-background-image" data-background="https://via.placeholder.com/800x600" data-demo-background="https://source.unsplash.com/8YG31Xn4dSw/800x600">
                              <!--Duration-->
                              <span class="tag item-duration">08:49</span>
                              <!--Play button-->
                              <button class="play-button">
                                  <i data-feather="play"></i>
                              </button>
                              <!--Bottom Overlay-->
                              <div class="item-overlay"></div>
                              <!-- Overlay content -->
                              <div class="overlay-layer">
                                  <div class="overlay-content">
                                      <div class="inner-content">
                                          <h3 class="media-title">A guide to improving your customer calls</h3>
                                          <div class="media-meta">
                                              <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/33.jpg" alt="">
                                              <a class="meta-item is-hoverable">Harvey M.</a>
                                              <span class="separator">|</span>
                                              <a class="meta-item is-hoverable">5 comments</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>

      </div>

  </div>

</div>
@endsection