<?php
require_once '../includes/PdoPortfolio.php';

include('../includes/navbar.php');
include('../includes/footer.php');

?>

<div class="container">
  <header class="fb">
    <div class="navigation">
      <div class="icon"><i class="fa fa-align-left"></i></div>
      <div class="text">Social Network</div>
    </div>
    <div class="awesome-form">
      <input type="text" placeholder="search..."/>
    </div>
    <div class="other">
      <div class="user-info">
        <div class="face"></div>
        <div class="text">Kofi Arhin</div>
        <div class="text">Home</div>
        <div class="text">Find Friends</div>
      </div>
      <div class="other-icons"><i class="fa fa-user"></i><i class="fa fa-comment"></i><i class="fa fa-globe"></i><i class="fa fa-align-right"></i></div>
    </div>
  </header>
  <div class="main-content">
    <div class="cover">
      <div class="face"></div>
    </div>
    <div class="sub-navigation"><a href="#">Feed</a><a href="#">About</a><a href="#">Friends</a><a href="#">Photos</a><a href="#">More</a></div>
    <div class="col-wrapper">
      <div class="col-50">
        <div class="card">
          <div class="text"><span><i class="fa fa-graduation-cap"></i></span>Studied at University of Ghana Legon</div>
          <div class="text"><span><i class="fa fa-home"> </i></span>Lives in Accra, Ghana</div>
          <div class="text"><span><i class="fa fa-map"></i></span>From Queens-NY, USA</div>
        </div>
        <div class="card">
          <div class="title">Friends<span>700</span></div>
          <div class="thumb-wrapper">
            <div class="thumb-unit">
              <div class="name">Nasir Jones</div>
            </div>
            <div class="thumb-unit">
              <div class="name">Albert Einstein</div>
            </div>
            <div class="thumb-unit">
              <div class="name">Denzel Washington</div>
            </div>
            <div class="thumb-unit">
              <div class="name">Oprah Winfrey</div>
            </div>
            <div class="thumb-unit">
              <div class="name">Travis Neilson</div>
            </div>
            <div class="thumb-unit">
              <div class="name">Bill Gate</div>
            </div>
            <div class="thumb-unit">
              <div class="name">Pablo Escobar</div>
            </div>
            <div class="thumb-unit">
              <div class="name">Marthin Luther King</div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="title">Friends<span>700</span></div>
          <div class="thumb-wrapper">
            <div class="thumb-unit">
              <div class="name">Nasir Jones</div>
            </div>
            <div class="thumb-unit">
              <div class="name">Albert Einstein</div>
            </div>
            <div class="thumb-unit">
              <div class="name">Denzel Washington</div>
            </div>
            <div class="thumb-unit">
              <div class="name">Oprah Winfrey</div>
            </div>
            <div class="thumb-unit">
              <div class="name">Travis Neilson</div>
            </div>
            <div class="thumb-unit">
              <div class="name">Bill Gate</div>
            </div>
            <div class="thumb-unit">
              <div class="name">Pablo Escobar</div>
            </div>
            <div class="thumb-unit">
              <div class="name">Marthin Luther King</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-50">
        <div class="card status">
          <div class="icon-wrapper"><a href="#"><i class="fa fa-edit"><span>Status</span></i></a><a href="#"><i class="fa fa-photo"><span>Photos/Videos</span></i></a></div>
          <div class="message">
            <input type="message"/>
            <label>Write Something.....</label>
          </div>
        </div>
        <div class="card feed-1">
          <div class="user">
            <div class="face"></div>
            <div class="text"><span>Kofi Arhin</span>posted a status
              <div class="time">Dec 25</div>
            </div>
          </div>
          <div class="user-status"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit aspernatur, nulla pariatur accusamus aut officia necessitatibus amet odit asperiores illo quisquam maiores quis magni debitis hic alias qui tenetur numquam.</div>
          <div class="reaction">
            <div class="text">Unlinke</div>
            <div class="text">Comment</div>
            <div class="text">Share</div>
          </div>
          <div class="reaction-info">
            <div class="text"><span><i class="fa fa-heart"></i></span>Kenneth, Seth Amoah<span>and</span>50 otheres<span>Like this</span></div>
          </div>
          <div class="comment">
            <div class="face"></div>
            <div class="comment-form">
              <input type="text"/>
              <label>Write a Comment</label>
            </div>
            <div class="icon-wrap"><i class="fa fa-camera"></i><i class="fa fa-smile-o"></i></div>
          </div>
        </div>
        <div class="card feed-2">
          <div class="user">
            <div class="face"></div>
            <div class="text"><span>Kofi Arhin</span>uploaded a photo
              <div class="time">Dec 25</div>
            </div>
          </div>
          <div class="caption">YOLO Yesterday was freaking Good #5Star!!!</div>
          <div class="person-image"></div>
        </div>
        <div class="card feed-2">
          <div class="user">
            <div class="face"></div>
            <div class="text"><span>Kofi Arhin</span>uploaded a photo
              <div class="time">Dec 25</div>
            </div>
          </div>
          <div class="caption">Stillmatic</div>
          <div class="person-image"></div>
        </div>
      </div>
    </div>
  </div>
</div>