@extends('inc.ui.app')
@section('content')
<div class="add-new-contact-modal modal fade px-0" id="addnewcontact" data-bs-backdrop="static"
data-bs-keyboard="false" tabindex="-1" aria-labelledby="addnewcontactlabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-body p-4">
      <div class="d-flex align-items-center justify-content-between mb-4">
        <h6 class="modal-title" id="addnewcontactlabel">New message</h6>
        <button class="btn btn-close p-1 ms-auto me-0" type="button" data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>

      <form action="#">
        <div class="input-group mb-3">
          <span class="input-group-text" id="to">To</span>
          <input class="form-control" type="text" placeholder="" aria-label="Username" aria-describedby="to">
        </div>
        <div class="form-group">
          <label class="form-label" for="message">Message</label>
          <textarea class="form-control" id="message" name="textarea" cols="3" rows="5" placeholder=""></textarea>
        </div>
        <button class="btn btn-primary w-100" type="submit">Send</button>
      </form>
    </div>
  </div>
</div>
</div>

<div class="page-content-wrapper py-3">
<!-- Add New Contact -->
<div class="add-new-contact-wrap">
  <a class="shadow" href="#" data-bs-toggle="modal" data-bs-target="#addnewcontact">
    <i class="bi bi-plus-lg"></i>
  </a>
</div>

<div class="container">
  <div class="card mb-2">
    <div class="card-body p-2">
      <div class="chat-search-box">
        <!-- Search Form -->
        <form action="#">
          <div class="input-group">
            <span class="input-group-text" id="searchbox">
              <i class="bi bi-search"></i>
            </span>
            <input class="form-control" type="search" placeholder="Search users or messages"
              aria-describedby="searchbox">
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- User Status Slide -->
  <div class="chat-user-status-slides-wrapper">
    <div class="chat-user-status-slides mb-2">
      <!-- Single Slide -->
      <div>
        <div class="user-status-slide">
          <a href="#">
            <img src="img/bg-img/user1.png" alt="">
            <div class="active-status"></div>
            <p class="mb-0 mt-1 text-truncate">Aynal</p>
          </a>
        </div>
      </div>

      <!-- Single Slide -->
      <div>
        <div class="user-status-slide">
          <a href="#">
            <img src="img/bg-img/user2.png" alt="">
            <div class="active-status"></div>
            <p class="mb-0 mt-1 text-truncate">Afrin</p>
          </a>
        </div>
      </div>

      <!-- Single Slide -->
      <div>
        <div class="user-status-slide">
          <a href="#">
            <img src="img/bg-img/user3.png" alt="">
            <div class="active-status"></div>
            <p class="mb-0 mt-1 text-truncate">Fairoze</p>
          </a>
        </div>
      </div>

      <!-- Single Slide -->
      <div>
        <div class="user-status-slide offline">
          <a href="#">
            <img src="img/bg-img/user4.png" alt="">
            <div class="active-status"></div>
            <p class="mb-0 mt-1 text-truncate">ReFresh</p>
          </a>
        </div>
      </div>

      <!-- Single Slide -->
      <div>
        <div class="user-status-slide">
          <a href="#">
            <img src="img/bg-img/user1.png" alt="">
            <div class="active-status"></div>
            <p class="mb-0 mt-1 text-truncate">রবিন</p>
          </a>
        </div>
      </div>

      <!-- Single Slide -->
      <div>
        <div class="user-status-slide offline">
          <a href="#">
            <img src="img/bg-img/user2.png" alt="">
            <div class="active-status"></div>
            <p class="mb-0 mt-1 text-truncate">Hasnain</p>
          </a>
        </div>
      </div>

      <!-- Single Slide -->
      <div>
        <div class="user-status-slide">
          <a href="#">
            <img src="img/bg-img/user1.png" alt="">
            <div class="active-status"></div>
            <p class="mb-0 mt-1 text-truncate">Aynal</p>
          </a>
        </div>
      </div>

      <!-- Single Slide -->
      <div>
        <div class="user-status-slide">
          <a href="#">
            <img src="img/bg-img/user2.png" alt="">
            <div class="active-status"></div>
            <p class="mb-0 mt-1 text-truncate">Afrin</p>
          </a>
        </div>
      </div>

      <!-- Single Slide -->
      <div>
        <div class="user-status-slide">
          <a href="#">
            <img src="img/bg-img/user3.png" alt="">
            <div class="active-status"></div>
            <p class="mb-0 mt-1 text-truncate">Fairoze</p>
          </a>
        </div>
      </div>

      <!-- Single Slide -->
      <div>
        <div class="user-status-slide offline">
          <a href="#">
            <img src="img/bg-img/user4.png" alt="">
            <div class="active-status"></div>
            <p class="mb-0 mt-1 text-truncate">ReFresh</p>
          </a>
        </div>
      </div>

      <!-- Single Slide -->
      <div>
        <div class="user-status-slide">
          <a href="#">
            <img src="img/bg-img/user1.png" alt="">
            <div class="active-status"></div>
            <p class="mb-0 mt-1 text-truncate">রবিন</p>
          </a>
        </div>
      </div>

      <!-- Single Slide -->
      <div>
        <div class="user-status-slide offline">
          <a href="#">
            <img src="img/bg-img/user2.png" alt="">
            <div class="active-status"></div>
            <p class="mb-0 mt-1 text-truncate">Hasnain</p>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Element Heading -->
  <div class="element-heading">
    <h6 class="ps-1">Recent contacts</h6>
  </div>

  <!-- Chat User List -->
  <ul class="ps-0 chat-user-list">

    <!-- Single Chat User -->
    <li class="p-3 chat-unread">
      <a class="d-flex" href="chat.html">
        <!-- Thumbnail -->
        <div class="chat-user-thumbnail me-3 shadow">
          <img class="img-circle" src="img/bg-img/user1.png" alt="">
          <span class="active-status"></span>
        </div>
        <!-- Info -->
        <div class="chat-user-info">
          <h6 class="text-truncate mb-0">Designing World</h6>
          <div class="last-chat">
            <p class="mb-0 text-truncate">Hello, Are you there?
              <span class="badge rounded-pill bg-primary">2</span>
            </p>
          </div>
        </div>
      </a>

      <!-- Options -->
      <div class="dropstart chat-options-btn">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-three-dots-vertical"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="bi bi-mic-mute"></i>Mute</a></li>
          <li><a href="#"><i class="bi bi-slash-circle"></i>Ban</a></li>
          <li><a href="#"><i class="bi bi-trash"></i>Remove</a></li>
        </ul>
      </div>
    </li>

    <!-- Single Chat User -->
    <li class="p-3">
      <a class="d-flex" href="chat.html">
        <!-- Thumbnail -->
        <div class="chat-user-thumbnail me-3 shadow">
          <img class="img-circle" src="img/bg-img/user2.png" alt="">
          <span class="active-status"></span>
        </div>
        <!-- Info -->
        <div class="chat-user-info">
          <h6 class="text-truncate mb-0">Mustafa Rabbi</h6>
          <div class="last-chat">
            <p class="text-truncate mb-0">How can I help you?</p>
          </div>
        </div>
      </a>

      <!-- Options -->
      <div class="dropstart chat-options-btn">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-three-dots-vertical"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="bi bi-mic-mute"></i>Mute</a></li>
          <li><a href="#"><i class="bi bi-slash-circle"></i>Ban</a></li>
          <li><a href="#"><i class="bi bi-trash"></i>Remove</a></li>
        </ul>
      </div>
    </li>

    <!-- Single Chat User -->
    <li class="p-3 offline">
      <a class="d-flex" href="chat.html">
        <!-- Thumbnail -->
        <div class="chat-user-thumbnail me-3 shadow">
          <img class="img-circle" src="img/bg-img/user3.png" alt="">
          <span class="active-status"></span>
        </div>
        <!-- Info -->
        <div class="chat-user-info">
          <h6 class="text-truncate mb-0">Affan Islam</h6>
          <div class="last-chat">
            <p class="text-truncate mb-0">I want to buy your Affan template.</p>
          </div>
        </div>
      </a>

      <!-- Options -->
      <div class="dropstart chat-options-btn">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-three-dots-vertical"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="bi bi-mic-mute"></i>Mute</a></li>
          <li><a href="#"><i class="bi bi-slash-circle"></i>Ban</a></li>
          <li><a href="#"><i class="bi bi-trash"></i>Remove</a></li>
        </ul>
      </div>
    </li>

    <!-- Single Chat User -->
    <li class="p-3">
      <a class="d-flex" href="chat.html">
        <!-- Thumbnail -->
        <div class="chat-user-thumbnail me-3 shadow">
          <img class="img-circle" src="img/bg-img/user4.png" alt="">
          <span class="active-status"></span>
        </div>
        <!-- Info -->
        <div class="chat-user-info">
          <h6 class="text-truncate mb-0">Jannatun Lima</h6>
          <div class="last-chat">
            <p class="text-truncate mb-0">Affan - PWA Mobile HTML Template</p>
          </div>
        </div>
      </a>

      <!-- Options -->
      <div class="dropstart chat-options-btn">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-three-dots-vertical"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="bi bi-mic-mute"></i>Mute</a></li>
          <li><a href="#"><i class="bi bi-slash-circle"></i>Ban</a></li>
          <li><a href="#"><i class="bi bi-trash"></i>Remove</a></li>
        </ul>
      </div>
    </li>

    <!-- Single Chat User -->
    <li class="p-3">
      <a class="d-flex" href="chat.html">
        <!-- Thumbnail -->
        <div class="chat-user-thumbnail me-3 shadow">
          <img class="img-circle" src="#" alt="">
          <span class="active-status"></span>
        </div>
        <!-- Info -->
        <div class="chat-user-info">
          <h6 class="text-truncate mb-0">Waves Motion</h6>
          <div class="last-chat">
            <p class="text-truncate mb-0"><i class="bi bi-file-earmark-zip"></i>affan-pwa-mobile.zip</p>
          </div>
        </div>
      </a>

      <!-- Options -->
      <div class="dropstart chat-options-btn">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-three-dots-vertical"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="bi bi-mic-mute"></i>Mute</a></li>
          <li><a href="#"><i class="bi bi-slash-circle"></i>Ban</a></li>
          <li><a href="#"><i class="bi bi-trash"></i>Remove</a></li>
        </ul>
      </div>
    </li>

    <!-- Single Chat User -->
    <li class="p-3 offline">
      <a class="d-flex" href="chat.html">
        <!-- Thumbnail -->
        <div class="chat-user-thumbnail me-3 shadow">
          <img class="img-circle" src="img/bg-img/user1.png" alt="">
          <span class="active-status"></span>
        </div>
        <!-- Info -->
        <div class="chat-user-info">
          <h6 class="text-truncate mb-0">Samantha Sarah</h6>
          <div class="last-chat">
            <p class="text-truncate mb-0">Would you please provide a purchase link?</p>
          </div>
        </div>
      </a>

      <!-- Options -->
      <div class="dropstart chat-options-btn">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-three-dots-vertical"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="bi bi-mic-mute"></i>Mute</a></li>
          <li><a href="#"><i class="bi bi-slash-circle"></i>Ban</a></li>
          <li><a href="#"><i class="bi bi-trash"></i>Remove</a></li>
        </ul>
      </div>
    </li>

    <!-- Single Chat User -->
    <li class="p-3">
      <a class="d-flex" href="chat.html">
        <!-- Thumbnail -->
        <div class="chat-user-thumbnail me-3 shadow">
          <img class="img-circle" src="img/bg-img/user2.png" alt="">
          <span class="active-status"></span>
        </div>
        <!-- Info -->
        <div class="chat-user-info">
          <h6 class="text-truncate mb-0">Hasnain Ahmed</h6>
          <div class="last-chat">
            <p class="text-truncate mb-0">Sure, Here are the purchase link. Please click the purchase now button,
              then fill up your all payment info.</p>
          </div>
        </div>
      </a>

      <!-- Options -->
      <div class="dropstart chat-options-btn">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-three-dots-vertical"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="bi bi-mic-mute"></i>Mute</a></li>
          <li><a href="#"><i class="bi bi-slash-circle"></i>Ban</a></li>
          <li><a href="#"><i class="bi bi-trash"></i>Remove</a></li>
        </ul>
      </div>
    </li>

    <!-- Single Chat User -->
    <li class="p-3 offline">
      <a class="d-flex" href="chat.html">
        <!-- Thumbnail -->
        <div class="chat-user-thumbnail me-3 shadow">
          <img class="img-circle" src="img/bg-img/user3.png" alt="">
          <span class="active-status"></span>
        </div>
        <!-- Info -->
        <div class="chat-user-info">
          <h6 class="text-truncate mb-0">Shaila Afrin</h6>
          <div class="last-chat">
            <p class="text-truncate mb-0">You are welcome &#128525; &#128525;</p>
          </div>
        </div>
      </a>

      <!-- Options -->
      <div class="dropstart chat-options-btn">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-three-dots-vertical"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="bi bi-mic-mute"></i>Mute</a></li>
          <li><a href="#"><i class="bi bi-slash-circle"></i>Ban</a></li>
          <li><a href="#"><i class="bi bi-trash"></i>Remove</a></li>
        </ul>
      </div>
    </li>
  </ul>
</div>
</div>
@endsection