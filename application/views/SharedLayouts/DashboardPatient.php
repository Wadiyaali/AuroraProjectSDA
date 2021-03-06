<!DOCTYPE html>

<html>

<head  >
  <title><?php echo $Title; ?></title>

  <meta charset="utf-8" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="JavaScript.js"></script>
  <script src="//code.jquery.com/jquery-1.12.1.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url('CSS/StyleSheet2.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('CSS/StyleSheet2.min.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('CSS/StyleSheet2.scss') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('Js/JavaScript.js') ?>" />
  <script src="//code.jquery.com/jquery-1.12.1.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url('CSS/bootstrap.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('CSS/bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('CSS/bootstrap.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('CSS/site.css') ?>" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- <script type="text/javascript">
    function preventBack() {
      window.history.forward(1);
    }
    setTimeout("preventBack()", 0);
    window.onunload = function() {
      null
    };
  </script>
  <script type="text/javascript" language="javascript">
    window.history.forward();

    function DisableBackButton() {
      window.history.forward()
    }
    DisableBackButton();
    window.onload = DisableBackButton;
    window.onpageshow = function(evt) {
      if (evt.persisted) DisableBackButton()
    }
    window.onunload = function() {
      void(0)
    }
  </script> -->

</head>

<body>
  <script>
    function na() {
      var ans = window.confirm("By clicking OK you will be logged out");
      if (ans == true) {
        window.location.href = 'Articles.aspx';
      }
    };
  </script>
  <script>
    function log() {
      var ans = window.confirm("By clicking OK you will be logged out");
      if (ans == true) {
        window.location.href = "<?php echo site_url("User/SignOut"); ?>";
      }
    };
  </script>

  <div class="wrapper">
    <div class="grid">
      <header class="header">
        <i class="fas fa-bars header__menu"></i>
        <div class="header__search">
          <input class="header__input" placeholder="Search..." />
          <i class="fas fa-search"></i>

        </div>
        <div class="header__avatar">
          <div class="dropdown">
            <ul class="dropdown__list">
              <li class="dropdown__list-item">
                <span class="dropdown__icon"><i class="far fa-user text-dark"></i></span>
                <span class="dropdown__title text-dark">my profile</span>
              </li>
              <li class="dropdown__list-item" onclick="log()">
                <span class="dropdown__icon"><i class="fas fa-sign-out-alt text-dark"></i></span>
                <span class="dropdown__title text-dark">log out</span>
              </li>
            </ul>
          </div>
        </div>
      </header>

      <aside class="sidenav">
        <div class="sidenav__brand">

          <a class="sidenav__brand-link" href="#"><span class="text-light">AURORA</span></a>

        </div>
        <div class="sidenav__profile">
          <div class="sidenav__profile-avatar"></div>
          <div class="sidenav__profile-title text-light"><?php echo $this->session->userdata('Name'); ?></div>
        </div>
        <div class="row row--align-v-center row--align-h-center">
          <ul class="navList">
            <li class="navList__heading">Aurora<i class="far fa-info"></i></li>
            <li>
              <div class="navList__subheading row row--align-v-center">
                <span class="navList__subheading-icon"><i class="fas fa-briefcase-medical"></i></span>
                <span class="navList__subheading-title">About us</span>
              </div>
              <ul class="subList subList--hidden">
                <li class="subList__item">Team</li>
                <li class="subList__item">vision</li>

              </ul>
            </li>
            <li>
              <div class="navList__subheading row row--align-v-center">
                <span class="navList__subheading-icon"><i class="fas fa-briefcase-medical"></i></span>
                <a style="color:white;" href="<?php echo site_url("Patient/Index"); ?>"><span class="navList__subheading-title">Home</span></a>
              </div>

            </li>
            <li>
              <div class="navList__subheading row row--align-v-center">
                <span class="navList__subheading-icon"><i class="fas fa-plane-departure"></i></span>
                <span class="navList__subheading-title">Head Offices</span>
              </div>
              <ul class="subList subList--hidden">
                <li class="subList__item">Karachi</li>
                <li class="subList__item">Islamabad</li>

              </ul>
            </li>
            <li>
              <div class="navList__subheading row row--align-v-center">
                <span class="navList__subheading-icon"><i class="fa fa-smile-o"></i></span>
                <span class="navList__subheading-title">Feedbacks</span>
              </div>
              <ul class="subList subList--hidden">
                <li class="subList__item"><a href="<?php echo site_url("Feedback/sendFeedback"); ?>" style="color:white;">Psychologists</a></li>
                <li class="subList__item">Writer</li>
              </ul>
            </li>

            <li class="navList__heading">Sessions<i class="far fa-envelope"></i></li>
            <li>
              <div class="navList__subheading row row--align-v-center">
                <span class="navList__subheading-icon"><i class="fas fa-envelope"></i></span>
                <span class="navList__subheading-title">Emergency Help</span>
              </div>

            </li>
            <li>
              <div class="navList__subheading row row--align-v-center">
                <span class="navList__subheading-icon"><i class="fas fa-eye"></i></span>
                  </div>

            </li>
            <li>
              <div class="navList__subheading row row--align-v-center">
                <span class="navList__subheading-icon"><i class="fas fa-book-open"></i></span>
                <a href="<?php echo site_url("Patient/BookSession"); ?>" style="color:white;"> <span class="navList__subheading-title">Book session</span></a>
              </div>
            </li>
            <li>
              <div class="navList__subheading row row--align-v-center">
                <span class="navList__subheading-icon"><i class="fas fa-book-open"></i></span>
                <a href="<?php echo site_url("Patient/MyBookings"); ?>" style="color:white;"> <span class="navList__subheading-title">Booking History</span></a>
              </div>
            </li>

            <li class="navList__heading">Articles<i class="far fa-image"></i></li>
            <li>
              <div class="navList__subheading row row--align-v-center">
                <span class="navList__subheading-icon"><i class="fas fa-mountain"></i></span>
                <span class="navList__subheading-title">Articles</span>
              </div>
              <ul class="subList subList--hidden">
                <li class="subList__item"><a href="#" style="color:white;" onclick="na()">Read Article</a></li>
                <li class="subList__item"><a href="<?php echo site_url("Patient/WriteArticle"); ?>" style="color:white;">Write Article</a></li>
              </ul>
            </li>
            <li class="navList__heading">Feedback<i class="fas fa-chart-bar"></i></li>
            <li>
              <div class="navList__subheading row row--align-v-center">
                <span class="navList__subheading-icon"><i class="fas fa-credit-card"></i></span>
                <span class="navList__subheading-title">Review us</span>
              </div>
            </li>
            <li>
            </li>
          </ul>
        </div>
      </aside>

      <main class="main">
      <div class="main-header" style="background-image:url('https://www.hurtigruten.com/globalassets/global/inspiration/verticals/northern-light/nordlys-norge-hgr-122602-foto_stian__klo.jpg')">
     <div class="main-header__intro-wrapper">
            <div class="main-header__welcome">
              <div class="main-header__welcome-title text-light" id="mainhead"  >Welcome back <?php echo ucfirst($this->session->userdata('Name')); ?></div>
              <div class="main-header__welcome-subtitle text-light">May life be easy on you!</div>
            </div>
            <div class="quickview__item">
              <div class="quickview__item-total"></div>
              <div class="quickview__item-description">

                <span class="text-light"></span>
              </div>
            </div>
            <div class="quickview__item">
              <div class="quickview__item-total"></div>
              <div class="quickview__item-description">

                <span class="text-light"></span>
              </div>
            </div>
            <div class="quickview__item">
              <div class="quickview__item-total">20+</div>
              <div class="quickview__item-description">
                <i class="far fa-user"></i>
                <span class="text-light">Psychologists Active</span>
              </div>
            </div>
            <div class="quickview__item">
              <div class="quickview__item-total">27&deg;</div>
              <div class="quickview__item-description">
                <i class="fas fa-map-marker-alt"></i>
                <span class="text-light">Pakistan</span>
              </div>
            </div>
          </div>

        </div>
        <div>
          <?php $this->load->view($Content); ?>
        </div>
      </main>
    </div>
    <footer class="footer">
      <p><span class="footer__copyright">&copy;</span> 2019 Aurora</p>
      <p> <a class="footer__signature">Light beyond Darkness</a></p>
    </footer>
  </div>
</body>

</html>
<script>
  $(document).ready(function() {
    $(".form-wrapper .button").click(function() {
      var button = $(this);
      var currentSection = button.parents(".section");
      var currentSectionIndex = currentSection.index();
      var headerSection = $('.steps li').eq(currentSectionIndex);
      currentSection.removeClass("is-active").next().addClass("is-active");
      headerSection.removeClass("is-active").next().addClass("is-active");

      $(".form-wrapper").submit(function(e) {
        e.preventDefault();
      });

      if (currentSectionIndex === 3) {
        $(document).find(".form-wrapper .section").first().addClass("is-active");
        $(document).find(".steps li").first().addClass("is-active");
      }
    });
  });
</script>
<script>
  /* Scripts for css grid dashboard */

  $(document).ready(function() {
    addResizeListeners();
    setSidenavListeners();
    setUserDropdownListener();
    renderChart();
    setMenuClickListener();
    setSidenavCloseListener();
  });

  // Set constants and grab needed elements
  const sidenavEl = $('.sidenav');
  const gridEl = $('.grid');
  const SIDENAV_ACTIVE_CLASS = 'sidenav--active';
  const GRID_NO_SCROLL_CLASS = 'grid--noscroll';

  function toggleClass(el, className) {
    if (el.hasClass(className)) {
      el.removeClass(className);
    } else {
      el.addClass(className);
    }
  }

  // User avatar dropdown functionality
  function setUserDropdownListener() {
    const userAvatar = $('.header__avatar');

    userAvatar.on('click', function(e) {
      const dropdown = $(this).children('.dropdown');
      toggleClass(dropdown, 'dropdown--active');
    });
  }

  // Sidenav list sliding functionality
  function setSidenavListeners() {
    const subHeadings = $('.navList__subheading');
    console.log('subHeadings: ', subHeadings);
    const SUBHEADING_OPEN_CLASS = 'navList__subheading--open';
    const SUBLIST_HIDDEN_CLASS = 'subList--hidden';

    subHeadings.each((i, subHeadingEl) => {
      $(subHeadingEl).on('click', (e) => {
        const subListEl = $(subHeadingEl).siblings();

        // Add/remove selected styles to list category heading
        if (subHeadingEl) {
          toggleClass($(subHeadingEl), SUBHEADING_OPEN_CLASS);
        }

        // Reveal/hide the sublist
        if (subListEl && subListEl.length === 1) {
          toggleClass($(subListEl), SUBLIST_HIDDEN_CLASS);
        }
      });
    });
  }



  function toggleClass(el, className) {
    if (el.hasClass(className)) {
      el.removeClass(className);
    } else {
      el.addClass(className);
    }
  }

  // If user opens the menu and then expands the viewport from mobile size without closing the menu,
  // make sure scrolling is enabled again and that sidenav active class is removed
  function addResizeListeners() {
    $(window).resize(function(e) {
      const width = window.innerWidth;
      console.log('width: ', width);

      if (width > 750) {
        sidenavEl.removeClass(SIDENAV_ACTIVE_CLASS);
        gridEl.removeClass(GRID_NO_SCROLL_CLASS);
      }
    });
  }

  // Menu open sidenav icon, shown only on mobile
  function setMenuClickListener() {
    $('.header__menu').on('click', function(e) {
      console.log('clicked menu icon');
      toggleClass(sidenavEl, SIDENAV_ACTIVE_CLASS);
      toggleClass(gridEl, GRID_NO_SCROLL_CLASS);
    });
  }

  // Sidenav close icon
  function setSidenavCloseListener() {
    $('.sidenav__brand-close').on('click', function(e) {
      toggleClass(sidenavEl, SIDENAV_ACTIVE_CLASS);
      toggleClass(gridEl, GRID_NO_SCROLL_CLASS);
    });
  }
</script>
<script>

</script>