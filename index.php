<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="./assets/images/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/css.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/flickity.css">

  <meta name="description" content="FirstLine Recovery Ltd. is the leading 24/7 vehicle recovery service in South East England, offering comprehensive solutions from breakdown recovery and roadside assistance to vehicle storage and transportation.">
  <meta name="keywords" content="Car Breakdown London, Car Recovery London, Firstline Recovery, Vehicle Towing, Roadside Assistance, Accident Recovery, Vehicle Storage, Vehicle Transportation, Abandoned Vehicle Removal, Bailiff Recovery, Scrap Vehicle Collections, Keyless Recovery, Total Lift Recovery, Fleet Vehicle Services, Commercial Recovery, Police Collections, Compound Collections, Surrey Recovery Services, Essex Recovery Services, Kent Recovery Services, Epsom Recovery Services, Ewell Recovery Services, Leatherhead Recovery Services, Sutton Recovery Services, Kingston upon Thames Recovery Services, Croydon Recovery Services, Redhill Recovery Services, Reigate Recovery Services, Dorking Recovery Services, Chessington Recovery Services, Wimbledon Recovery Services, New Malden Recovery Services, Guildford Recovery Services">

  <title>FirstLine Recovery
    <?php
    $page = (isset($_GET['page']) && $_GET['page'] != 'home') ? $_GET['page'] : '';
    $page = str_replace('-', ' ', $page);
    $page = ucwords($page);

    if ($page !== '') {
      echo ' │ ' . $page;
    } else {
      echo $page;
    }
    ?>
  </title>
</head>

<body>
  <section class="heading">
    <div class="heading__bar">
      <ul class="heading__bar-content" data-flickity='{ "cellSelector":".heading__bar-content__item","wrapAround":true,"autoPlay":true,"watchCSS":true,"pageDots":false,"prevNextButtons":false,"pauseAutoPlayOnHover":false,"accessibility":false  }'>
        <li class="heading__bar-content__item"><b>"Swift Response, Swift Recovery"</b></li>
        <li class="heading__bar-content__item">
          <a target="_blank" href="https://www.google.com/search?q=firstline+recovery&client=opera-gx&sca_esv=564592924&sxsrf=AB5stBgR66Ge77MY2XSUebLJVDl7exb0ag%3A1694499339016&ei=CwIAZaBS2Y2Fsg_AzY6gDA&ved=0ahUKEwjgg7L5taSBAxXZRkEAHcCmA8QQ4dUDCA8&uact=5&oq=firstline+recovery&gs_lp=Egxnd3Mtd2l6LXNlcnAiEmZpcnN0bGluZSByZWNvdmVyeTIEECMYJzIHECMYigUYJzIOEC4YigUYxwEYrwEYkQIyBRAAGIAEMgYQABgWGB4yDBAuGBYYHhjHARjRAzIGEAAYFhgeMggQABiKBRiGAzIIEAAYigUYhgMyCBAAGIoFGIYDSM0FUMQEWMQEcAF4AJABAJgBaaABaaoBAzAuMbgBA8gBAPgBAcICCBAAGKIEGLAD4gMEGAEgQYgGAZAGBQ&sclient=gws-wiz-serp#lrd=0x48760b54d3a8d877:0x14c8d62618ca5460,1,,,,">
            <img alt="google-reviews" src="assets/images/reviews.png" />
          </a>
        </li>
        <li class="heading__bar-content__item">
          <svg width="11" height="15" viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 5.59284C0.00279509 5.96891 0.0433388 6.34371 0.121 6.71141C0.283966 7.48866 0.546541 8.24079 0.902 8.94855C1.91579 10.884 3.20164 12.6588 4.719 14.217L5.5 15L6.281 14.217C7.79836 12.6588 9.08421 10.884 10.098 8.94855C10.4535 8.24079 10.716 7.48866 10.879 6.71141C10.9567 6.34371 10.9972 5.96891 11 5.59284C11 4.10953 10.4205 2.68697 9.38909 1.63811C8.35764 0.589244 6.95869 0 5.5 0C4.04131 0 2.64236 0.589244 1.61091 1.63811C0.579463 2.68697 0 4.10953 0 5.59284ZM6.6 6.71141H4.4V4.47427H6.6V6.71141Z" fill="#838F94" />
          </svg>
          Unit 1, Blenheim Trade Centre, Epsom, KT19 9XX
        </li>
      </ul>
    </div>

    <div class="heading__header">
      <div class="heading__header__nav">
        <a href="?page=home">
          <img alt="logo" src="./assets/images/logo.png" />
        </a>
        <nav>
          <?php
          $pages = [
            'services' => 'SERVICES',
            'about' => 'ABOUT US',
          ];

          $current_page = $_GET['page'] ?? null;
          ?>

          <ul>
            <?php foreach ($pages as $page => $title) : ?>
              <li>
                <a href="?page=<?php echo $page; ?>" class="<?php echo $current_page === $page ? 'active' : ''; ?>">
                  <?php echo $title; ?>
                </a>
              </li>
            <?php endforeach; ?>
            <li><a href="#quote">GET A QUOTE</a></li>
          </ul>
        </nav>
      </div>

      <div class="heading__usp marquee">
        We are the leading providers of vehicle recovery, maintenance and repair services in <b>London, Surrey, Sussex, Essex and Kent - Open 24/7</b>
      </div>
    </div>
  </section>


  <?php
  if (empty($_GET['page'])) {
    $_GET['page'] = 'home';
  }

  $page = $_GET['page'] . '.phtml';
  if (file_exists('page/' . $page)) {
    require('page/' . $page);
  } else {
    require('pages/404.phtml');
  }

  if ($_GET['page'] !== 'home') {
  ?>
    <section class="areas">
      <h1>Areas We Cover</h1>
      <div class="areas__map">
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1F333hpFgiKrX0NXjpkQxkZjsssA3NL4f" style="position: absolute; top: -100px; height: 550px; width: 100%;"></iframe>
      </div>
      </div>
    <?php
  }
    ?>
    </section>

    <section id="quote" class="quote">
      <h1>GET A QUOTE</h1>

      <ul class="quote__form">
        <li>
          <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.49986 8.55049C9.77824 8.55049 11.6253 6.63639 11.6253 4.27524C11.6253 1.9141 9.77824 0 7.49986 0C5.22146 0 3.37445 1.9141 3.37445 4.27524C3.37445 6.63639 5.22146 8.55049 7.49986 8.55049Z" fill="#28355C" />
            <path d="M7.50002 10.6882C3.36633 10.6882 0 13.5612 0 17.1011C0 17.3405 0.181518 17.5286 0.41254 17.5286H14.5875C14.8185 17.5286 15 17.3405 15 17.1011C15 13.5612 11.6337 10.6882 7.50002 10.6882Z" fill="#28355C" />
          </svg>
          <input type="text" id="name" placeholder="Name*">
        </li>
        <li>
          <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.2954 17.9998C9.03576 17.9951 5.91083 16.5333 3.60591 13.9351C1.30099 11.337 0.00422508 7.81443 0 4.14004C0 3.04206 0.386939 1.98905 1.0757 1.21266C1.76445 0.436274 2.69861 0.000102864 3.67265 0.000102864C3.87891 -0.00166813 4.08483 0.0194331 4.28742 0.0631019C4.48328 0.0957718 4.67582 0.150031 4.86227 0.2251C4.99341 0.276965 5.11027 0.366518 5.20128 0.484901C5.2923 0.603284 5.35433 0.746398 5.38124 0.90009L6.47505 6.30001C6.50453 6.44659 6.50098 6.59915 6.46472 6.74378C6.42846 6.88841 6.36065 7.0205 6.26746 7.128C6.16367 7.254 6.15569 7.263 5.17365 7.83899C5.96007 9.78373 7.33988 11.3455 9.06187 12.2399C9.58084 11.1239 9.58882 11.1149 9.7006 10.9979C9.79596 10.8929 9.91314 10.8165 10.0414 10.7756C10.1698 10.7347 10.3051 10.7307 10.4351 10.7639L15.2255 11.9969C15.3575 12.0314 15.4795 12.1033 15.5801 12.2056C15.6807 12.3079 15.7565 12.4374 15.8004 12.5819C15.8678 12.7955 15.9185 13.0154 15.9521 13.2389C15.9842 13.4651 16.0002 13.6938 16 13.9229C15.9853 15.0162 15.5875 16.0585 14.8934 16.8223C14.1993 17.5862 13.2654 18.0095 12.2954 17.9998Z" fill="#28355C" />
          </svg>
          <input type="text" id="phone" placeholder="Phone*">
        </li>
        <li>
          <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 0C1.34314 0 0 1.25359 0 2.79997V3.08179L9.00015 7.60489L18 3.08194V2.79997C18 1.25359 16.6569 0 15 0H3Z" fill="#28355C" />
            <path d="M18 4.67202L9.35573 9.01628C9.13374 9.12784 8.86656 9.12784 8.64458 9.01628L0 4.67188V11.1999C0 12.7464 1.34314 13.9999 3 13.9999H15C16.6569 13.9999 18 12.7464 18 11.1999V4.67202Z" fill="#28355C" />
          </svg>
          <input type="text" id="email" placeholder="Email*">
        </li>
        <li>
          <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.0416 2.19946H3.95831C3.32842 2.19946 2.72433 2.43119 2.27893 2.84366C1.83354 3.25613 1.58331 3.81556 1.58331 4.39888V15.396C1.58355 15.5259 1.62107 15.6534 1.69201 15.7655C1.76295 15.8776 1.86478 15.9702 1.98706 16.0338C2.10538 16.0959 2.23898 16.1287 2.37498 16.1291C2.51707 16.1291 2.65653 16.0936 2.77873 16.0265L6.33331 14.0323C6.4647 13.9599 6.61593 13.9243 6.76873 13.9297H15.0416C15.6715 13.9297 16.2756 13.698 16.721 13.2855C17.1664 12.873 17.4166 12.3136 17.4166 11.7303V4.39888C17.4166 3.81556 17.1664 3.25613 16.721 2.84366C16.2756 2.43119 15.6715 2.19946 15.0416 2.19946ZM6.33331 8.79772C6.17674 8.79772 6.02368 8.75473 5.89349 8.67417C5.7633 8.59361 5.66183 8.47911 5.60191 8.34515C5.54199 8.21118 5.52631 8.06377 5.55686 7.92156C5.5874 7.77934 5.6628 7.64871 5.77352 7.54618C5.88424 7.44364 6.0253 7.37382 6.17887 7.34553C6.33243 7.31724 6.49161 7.33176 6.63627 7.38725C6.78093 7.44274 6.90457 7.53671 6.99156 7.65727C7.07855 7.77784 7.12498 7.91958 7.12498 8.06458C7.12498 8.25903 7.04157 8.4455 6.89311 8.58299C6.74464 8.72048 6.54328 8.79772 6.33331 8.79772ZM9.49998 8.79772C9.3434 8.79772 9.19034 8.75473 9.06015 8.67417C8.92996 8.59361 8.82849 8.47911 8.76857 8.34515C8.70866 8.21118 8.69298 8.06377 8.72352 7.92156C8.75407 7.77934 8.82947 7.64871 8.94019 7.54618C9.0509 7.44364 9.19196 7.37382 9.34553 7.34553C9.4991 7.31724 9.65828 7.33176 9.80294 7.38725C9.9476 7.44274 10.0712 7.53671 10.1582 7.65727C10.2452 7.77784 10.2916 7.91958 10.2916 8.06458C10.2916 8.25903 10.2082 8.4455 10.0598 8.58299C9.91131 8.72048 9.70994 8.79772 9.49998 8.79772ZM12.6666 8.79772C12.5101 8.79772 12.357 8.75473 12.2268 8.67417C12.0966 8.59361 11.9952 8.47911 11.9352 8.34515C11.8753 8.21118 11.8596 8.06377 11.8902 7.92156C11.9207 7.77934 11.9961 7.64871 12.1069 7.54618C12.2176 7.44364 12.3586 7.37382 12.5122 7.34553C12.6658 7.31724 12.8249 7.33176 12.9696 7.38725C13.1143 7.44274 13.2379 7.53671 13.3249 7.65727C13.4119 7.77784 13.4583 7.91958 13.4583 8.06458C13.4583 8.25903 13.3749 8.4455 13.2264 8.58299C13.078 8.72048 12.8766 8.79772 12.6666 8.79772Z" fill="#28355C" />
          </svg>
          <input type="text" id="message" placeholder="Message">
        </li>
      </ul>
      <ul class="quote__form">
        <li>
          <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.1136 5.15484C18.1136 5.51183 17.8132 5.8079 17.4509 5.8079H1.54628C1.18401 5.8079 0.883591 5.51183 0.883591 5.15484C0.883591 4.79783 1.18401 4.50178 1.54628 4.50178H2.44755L2.78331 2.92572C3.10141 1.40191 3.7641 0 6.3972 0H12.6C15.2331 0 15.8958 1.40191 16.2139 2.92572L16.5497 4.50178H17.4509C17.8132 4.50178 18.1136 4.79783 18.1136 5.15484Z" fill="#28355C" />
            <path d="M18.495 10.085C18.3624 8.64824 17.9736 7.11572 15.1372 7.11572H3.86266C1.02634 7.11572 0.646392 8.64824 0.505017 10.085L0.0102061 15.3878C-0.0516453 16.0496 0.169253 16.7114 0.62872 17.2077C1.09702 17.7127 1.75972 18.0001 2.46659 18.0001H4.12774C5.55916 18.0001 5.83307 17.1903 6.00979 16.6591L6.18651 16.1367C6.38974 15.5359 6.44275 15.3878 7.23798 15.3878H11.762C12.5572 15.3878 12.5838 15.4749 12.8135 16.1367L12.9902 16.6591C13.1669 17.1903 13.4408 18.0001 14.8723 18.0001H16.5333C17.2314 18.0001 17.903 17.7127 18.3713 17.2077C18.8307 16.7114 19.0516 16.0496 18.9898 15.3878L18.495 10.085ZM6.8492 11.9048H4.19843C3.83616 11.9048 3.53574 11.6088 3.53574 11.2518C3.53574 10.8948 3.83616 10.5987 4.19843 10.5987H6.8492C7.21148 10.5987 7.5119 10.8948 7.5119 11.2518C7.5119 11.6088 7.21148 11.9048 6.8492 11.9048ZM14.8016 11.9048H12.1508C11.7885 11.9048 11.4881 11.6088 11.4881 11.2518C11.4881 10.8948 11.7885 10.5987 12.1508 10.5987H14.8016C15.1638 10.5987 15.4643 10.8948 15.4643 11.2518C15.4643 11.6088 15.1638 11.9048 14.8016 11.9048Z" fill="#28355C" />
          </svg>
          <input type="text" id="make" placeholder="Make & Model">
        </li>
        <li>
          <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.49998 1.46631C7.93421 1.46631 6.40361 1.89629 5.10172 2.70187C3.79983 3.50746 2.78513 4.65247 2.18594 5.9921C1.58674 7.33174 1.42997 8.80584 1.73543 10.228C2.0409 11.6501 2.79489 12.9565 3.90205 13.9818C5.00922 15.0071 6.41984 15.7054 7.95552 15.9882C9.4912 16.2711 11.083 16.1259 12.5296 15.571C13.9761 15.0161 15.2126 14.0765 16.0824 12.8708C16.9523 11.6652 17.4166 10.2477 17.4166 8.79771C17.4166 7.83494 17.2119 6.88159 16.814 5.9921C16.4162 5.10262 15.833 4.29441 15.0979 3.61363C14.3628 2.93284 13.4901 2.39282 12.5296 2.02438C11.5691 1.65594 10.5396 1.46631 9.49998 1.46631ZM10.2916 11.7303C10.2916 11.9247 10.2082 12.1112 10.0598 12.2487C9.91131 12.3862 9.70995 12.4634 9.49998 12.4634C9.29002 12.4634 9.08866 12.3862 8.94019 12.2487C8.79172 12.1112 8.70832 11.9247 8.70832 11.7303V8.06457C8.70832 7.87013 8.79172 7.68365 8.94019 7.54616C9.08866 7.40867 9.29002 7.33143 9.49998 7.33143C9.70995 7.33143 9.91131 7.40867 10.0598 7.54616C10.2082 7.68365 10.2916 7.87013 10.2916 8.06457V11.7303ZM9.49998 6.59829C9.34341 6.59829 9.19035 6.55529 9.06016 6.47473C8.92997 6.39418 8.8285 6.27967 8.76858 6.14571C8.70866 6.01175 8.69298 5.86434 8.72353 5.72212C8.75407 5.57991 8.82947 5.44927 8.94019 5.34674C9.05091 5.24421 9.19197 5.17438 9.34554 5.1461C9.4991 5.11781 9.65828 5.13233 9.80294 5.18782C9.9476 5.24331 10.0712 5.33727 10.1582 5.45784C10.2452 5.5784 10.2916 5.72015 10.2916 5.86515C10.2916 6.05959 10.2082 6.24607 10.0598 6.38356C9.91131 6.52105 9.70995 6.59829 9.49998 6.59829Z" fill="#28355C" />
          </svg>
          <input type="text" id="service" placeholder="Service">
        </li>
        <li>
          <svg width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 7.08427C0.00381149 7.56062 0.0590983 8.03537 0.165 8.50112C0.387226 9.48563 0.745284 10.4383 1.23 11.3348C2.61244 13.7864 4.36588 16.0345 6.435 18.0082L7.5 19L8.565 18.0082C10.6341 16.0345 12.3876 13.7864 13.77 11.3348C14.2547 10.4383 14.6128 9.48563 14.835 8.50112C14.9409 8.03537 14.9962 7.56062 15 7.08427C15 5.2054 14.2098 3.40349 12.8033 2.07493C11.3968 0.746376 9.48912 0 7.5 0C5.51088 0 3.60322 0.746376 2.1967 2.07493C0.790176 3.40349 0 5.2054 0 7.08427ZM9 8.50112H6V5.66741H9V8.50112Z" fill="#28355C" />
          </svg>
          <input type="text" id="dropoff" placeholder="Dropoff">
        </li>
        <li>
          <svg width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 7.08427C0.00381149 7.56062 0.0590983 8.03537 0.165 8.50112C0.387226 9.48563 0.745284 10.4383 1.23 11.3348C2.61244 13.7864 4.36588 16.0345 6.435 18.0082L7.5 19L8.565 18.0082C10.6341 16.0345 12.3876 13.7864 13.77 11.3348C14.2547 10.4383 14.6128 9.48563 14.835 8.50112C14.9409 8.03537 14.9962 7.56062 15 7.08427C15 5.2054 14.2098 3.40349 12.8033 2.07493C11.3968 0.746376 9.48912 0 7.5 0C5.51088 0 3.60322 0.746376 2.1967 2.07493C0.790176 3.40349 0 5.2054 0 7.08427ZM9 8.50112H6V5.66741H9V8.50112Z" fill="#28355C" />
          </svg>
          <input type="text" id="pickup" placeholder="Pickup">
        </li>
      </ul>
      <button type="submit">SEND</button>

      </div>
    </section>

    <a href="#top" id="back-to-top">
      <svg width="52" height="50" viewBox="0 0 52 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="26" cy="25" rx="26" ry="25" fill="#838F94" />
        <path d="M10.9999 34.1932L23.3778 17.4803C24.8396 15.5066 27.2316 15.5066 28.6934 17.4803L41.0713 34.1932" stroke="white" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </a>


    <section class="footer">
      <ul class="footer__socials">
        <a href="" target="_blank">
          <li class="footer__socials-item"><svg width="54" height="45" viewBox="0 0 54 55" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M47.415 0H5.6898C4.18077 0 2.73355 0.620853 1.6665 1.72598C0.59946 2.8311 0 4.32998 0 5.89286L0 49.1072C0 50.6701 0.59946 52.1689 1.6665 53.2741C2.73355 54.3792 4.18077 55 5.6898 55H21.9591V36.3013H14.4912V27.5H21.9591V20.792C21.9591 13.162 26.345 8.94733 33.0625 8.94733C36.2796 8.94733 39.6437 9.54152 39.6437 9.54152V17.0304H35.937C32.2849 17.0304 31.1457 19.3777 31.1457 21.7852V27.5H39.2988L37.9948 36.3013H31.1457V55H47.415C48.9241 55 50.3713 54.3792 51.4383 53.2741C52.5054 52.1689 53.1048 50.6701 53.1048 49.1072V5.89286C53.1048 4.32998 52.5054 2.8311 51.4383 1.72598C50.3713 0.620853 48.9241 0 47.415 0Z" fill="white" />
            </svg>
        </a>
        </li>
        <li class="footer__socials-item">
          <a href="" target="_blank">
            <svg width="54" height="45" viewBox="0 0 54 55" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M48.0616 0H6.33641C3.19516 0 0.646606 2.63951 0.646606 5.89286V49.1072C0.646606 52.3605 3.19516 55 6.33641 55H48.0616C51.2029 55 53.7514 52.3605 53.7514 49.1072V5.89286C53.7514 2.63951 51.2029 0 48.0616 0ZM42.2651 19.4955C42.2889 19.8393 42.2889 20.1953 42.2889 20.5391C42.2889 31.1831 34.4654 43.4476 20.1697 43.4476C15.7601 43.4476 11.6706 42.1217 8.23301 39.8382C8.86126 39.9119 9.4658 39.9364 10.1059 39.9364C13.745 39.9364 17.0878 38.6596 19.7549 36.4989C16.341 36.4252 13.4724 34.1049 12.4885 30.913C13.6857 31.0971 14.7644 31.0971 15.9972 30.7656C12.4411 30.0168 9.774 26.7757 9.774 22.8594V22.7612C10.8053 23.3627 12.0144 23.731 13.2827 23.7801C12.2164 23.0455 11.3422 22.049 10.7383 20.8793C10.1343 19.7097 9.81932 18.4034 9.82141 17.077C9.82141 15.5793 10.2007 14.2042 10.8764 13.0134C14.7052 17.8996 20.4542 21.0915 26.9027 21.4353C25.8003 15.9721 29.7476 11.5402 34.4891 11.5402C36.7294 11.5402 38.7446 12.5101 40.167 14.0815C41.9214 13.7377 43.6046 13.0625 45.0982 12.1417C44.5174 14.0078 43.2964 15.5793 41.6843 16.5737C43.249 16.4018 44.7663 15.9476 46.165 15.3214C45.11 16.9297 43.7824 18.3538 42.2651 19.4955Z" fill="white" />
            </svg>
          </a>
        </li>
        <?php /*
        
        <a href="" target="_blank">
        <li class="footer__socials-item"><svg width="54" height="45" viewBox="0 0 54 55" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M27 20.9516C25.7285 20.952 24.4857 21.3365 23.4287 22.0564C22.3717 22.7762 21.548 23.7991 21.0618 24.9957C20.5755 26.1923 20.4485 27.5089 20.6969 28.779C20.9452 30.0492 21.5577 31.2157 22.457 32.1313C23.3563 33.0469 24.5019 33.6703 25.749 33.9228C26.9961 34.1753 28.2887 34.0454 29.4634 33.5497C30.6381 33.054 31.642 32.2147 32.3484 31.1379C33.0548 30.061 33.4318 28.7951 33.4318 27.5C33.4305 25.7632 32.7524 24.098 31.5464 22.8701C30.3404 21.6423 28.7052 20.9522 27 20.9516ZM42.032 15.9181C41.7047 15.0732 41.2104 14.3059 40.5799 13.6637C39.9494 13.0215 39.196 12.5181 38.3665 12.1847C35.8353 11.167 29.8085 11.3953 27 11.3953C24.1915 11.3953 18.1708 11.1584 15.6323 12.1847C14.8028 12.5181 14.0494 13.0215 13.4189 13.6637C12.7883 14.3059 12.2941 15.0732 11.9668 15.9181C10.9688 18.4962 11.1917 24.6407 11.1917 27.4988C11.1917 30.3568 10.9688 36.494 11.9716 39.0807C12.2989 39.9255 12.7932 40.6929 13.4237 41.3351C14.0542 41.9773 14.8076 42.4807 15.6371 42.8141C18.1683 43.8318 24.1951 43.6035 27.0048 43.6035C29.8145 43.6035 35.8329 43.8404 38.3713 42.8141C39.2008 42.4807 39.9542 41.9773 40.5847 41.3351C41.2153 40.6929 41.7095 39.9255 42.0368 39.0807C43.0433 36.5026 42.8119 30.358 42.8119 27.5C42.8119 24.642 43.0433 18.506 42.0368 15.9193L42.032 15.9181ZM27 37.567C25.0451 37.567 23.1342 36.9765 21.5088 35.8704C19.8834 34.7642 18.6165 33.192 17.8684 31.3525C17.1203 29.513 16.9246 27.4888 17.306 25.536C17.6874 23.5832 18.6287 21.7895 20.011 20.3816C21.3933 18.9737 23.1544 18.0149 25.0717 17.6265C26.989 17.238 28.9764 17.4374 30.7824 18.1993C32.5885 18.9613 34.1321 20.2516 35.2182 21.9071C36.3042 23.5626 36.8839 25.5089 36.8839 27.5C36.8855 28.8225 36.6309 30.1323 36.1348 31.3544C35.6386 32.5765 34.9107 33.6869 33.9925 34.622C33.0744 35.5571 31.9842 36.2986 30.7843 36.804C29.5844 37.3093 28.2984 37.5686 27 37.567ZM37.2913 19.3605C36.835 19.3607 36.3888 19.2231 36.0093 18.9651C35.6297 18.707 35.3338 18.3401 35.159 17.9108C34.9842 17.4814 34.9384 17.0089 35.0273 16.553C35.1161 16.0972 35.3358 15.6784 35.6584 15.3496C35.981 15.0209 36.3921 14.7969 36.8396 14.7062C37.2872 14.6154 37.7511 14.6619 38.1727 14.8397C38.5944 15.0175 38.9547 15.3187 39.2083 15.7051C39.4618 16.0916 39.5972 16.5459 39.5972 17.0107C39.5985 17.3194 39.5399 17.6252 39.4248 17.9108C39.3098 18.1963 39.1405 18.4559 38.9267 18.6747C38.7129 18.8935 38.4589 19.0671 38.179 19.1856C37.8992 19.3041 37.5992 19.3652 37.2962 19.3654L37.2913 19.3605ZM48.2143 0H5.78571C4.25125 0 2.77963 0.620853 1.6946 1.72598C0.609565 2.8311 0 4.32997 0 5.89286L0 49.1071C0 50.67 0.609565 52.1689 1.6946 53.274C2.77963 54.3791 4.25125 55 5.78571 55H48.2143C49.7488 55 51.2204 54.3791 52.3054 53.274C53.3904 52.1689 54 50.67 54 49.1071V5.89286C54 4.32997 53.3904 2.8311 52.3054 1.72598C51.2204 0.620853 49.7488 0 48.2143 0ZM46.1507 35.6027C45.9952 38.7492 45.2901 41.5373 43.0349 43.8281C40.7796 46.119 38.0447 46.8519 34.959 47.0017C31.7756 47.1846 22.2316 47.1846 19.0483 47.0017C15.9589 46.8433 13.2312 46.1239 10.9724 43.8281C8.71353 41.5324 8.00357 38.7431 7.85652 35.6027C7.67692 32.3592 7.67692 22.6372 7.85652 19.3973C8.01201 16.2508 8.7087 13.4627 10.9724 11.1719C13.236 8.88103 15.971 8.1567 19.0483 8.00692C22.2316 7.824 31.7756 7.824 34.959 8.00692C38.0483 8.16529 40.7845 8.88471 43.0349 11.1805C45.2853 13.4762 46.0037 16.2655 46.1507 19.4121C46.3303 22.6433 46.3303 32.3567 46.1507 35.6027Z" fill="white" />
          </svg> 
      </a> */
        ?>
        </li>
        <a href="" target="_blank">
          <li class="footer__socials-item"><svg width="53" height="45" viewBox="0 0 53 55" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 6C0 2.68629 2.68629 0 6 0H47C50.3137 0 53 2.68629 53 6V49C53 52.3137 50.3137 55 47 55H6C2.68629 55 0 52.3137 0 49V6Z" fill="white" />
              <path d="M27.8551 4.17725C30.2073 4.13867 32.546 4.16153 34.882 4.13867C35.0236 7.05477 36.013 10.0252 38.0268 12.0869C40.0366 14.2 42.8795 15.1673 45.6455 15.4944V23.1654C43.0534 23.0754 40.4491 22.5039 38.0969 21.3209C37.0725 20.8294 36.1181 20.1965 35.184 19.5493C35.1718 25.1157 35.2055 30.675 35.1503 36.2186C35.0101 38.8818 34.1811 41.5321 32.7199 43.7267C30.369 47.38 26.2888 49.7618 22.098 49.8361C19.5274 49.9918 16.9595 49.2488 14.7691 47.8801C11.139 45.6112 8.58464 41.4578 8.21261 37.0001C8.16947 36.0471 8.15465 35.0956 8.19104 34.1654C8.51455 30.5407 10.2062 27.0731 12.8321 24.7142C15.8084 21.9667 19.9776 20.658 23.8813 21.4324C23.9177 24.2542 23.8112 27.0731 23.8112 29.8949C22.0279 29.2834 19.9439 29.4548 18.3857 30.6021C17.248 31.3837 16.3839 32.5809 15.9337 33.9354C15.5617 34.9013 15.6682 35.9743 15.6897 37.0001C16.1171 40.1262 18.9532 42.7537 21.9807 42.4694C23.9878 42.4465 25.9113 41.2121 26.9574 39.4047C27.2957 38.7718 27.6745 38.1245 27.6947 37.3801C27.8713 33.9726 27.8012 30.5793 27.8227 27.1717C27.8376 19.4921 27.8012 11.834 27.8564 4.17868L27.8551 4.17725Z" fill="#28355C" />
            </svg>
          </li>
        </a>
      </ul>

      <div class="footer__sections">
        <div class="footer__sections-gallery">
          <h2>Gallery</h2>
          <div class="footer__sections-gallery__contents">
            <a href="https://plus.unsplash.com/premium_photo-1661891539075-24b4e473f67f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" data-lightbox="roadtrip">
              <img src="https://images.unsplash.com/photo-1693956089429-e2394b22071e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2068&q=80" />
            </a>
            <a href="https://plus.unsplash.com/premium_photo-1661891539075-24b4e473f67f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" data-lightbox="roadtrip">
              <img src="https://images.unsplash.com/photo-1693956089429-e2394b22071e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2068&q=80" />
            </a>
            <a href="https://plus.unsplash.com/premium_photo-1661891539075-24b4e473f67f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" data-lightbox="roadtrip">
              <img src="https://images.unsplash.com/photo-1693956089429-e2394b22071e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2068&q=80" />
            </a>
            <a href="https://plus.unsplash.com/premium_photo-1661891539075-24b4e473f67f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" data-lightbox="roadtrip">
              <img src="https://images.unsplash.com/photo-1693956089429-e2394b22071e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2068&q=80" />
            </a>
            <a href="https://plus.unsplash.com/premium_photo-1661891539075-24b4e473f67f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" data-lightbox="roadtrip">
              <img src="https://images.unsplash.com/photo-1693956089429-e2394b22071e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2068&q=80" />
            </a>
            <a href="https://plus.unsplash.com/premium_photo-1661891539075-24b4e473f67f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" data-lightbox="roadtrip">
              <img src="https://images.unsplash.com/photo-1693956089429-e2394b22071e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2068&q=80" />
            </a>
            <a href="https://plus.unsplash.com/premium_photo-1661891539075-24b4e473f67f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" data-lightbox="roadtrip">
              <img src="https://images.unsplash.com/photo-1693956089429-e2394b22071e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2068&q=80" />
            </a>
            <a href="https://plus.unsplash.com/premium_photo-1661891539075-24b4e473f67f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" data-lightbox="roadtrip">
              <img src="https://images.unsplash.com/photo-1693956089429-e2394b22071e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2068&q=80" />
            </a>
            <a href="https://plus.unsplash.com/premium_photo-1661891539075-24b4e473f67f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" data-lightbox="roadtrip">
              <img src="https://images.unsplash.com/photo-1693956089429-e2394b22071e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2068&q=80" />
            </a>
          </div>
        </div>
        <div class="footer__sections-contact">
          <h2>Contact</h2>
          <ul>
            <li>
              <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.68463 11.9999C5.64735 11.9967 3.69427 11.0222 2.25369 9.29009C0.813117 7.55797 0.00264068 5.20962 0 2.76003C0 2.02804 0.241837 1.32603 0.67231 0.808442C1.10278 0.290849 1.68663 6.85759e-05 2.29541 6.85759e-05C2.42432 -0.00111209 2.55302 0.0129554 2.67964 0.0420679C2.80205 0.0638479 2.92239 0.100021 3.03892 0.150066C3.12088 0.184643 3.19392 0.244345 3.2508 0.323267C3.30769 0.402189 3.34646 0.497598 3.36327 0.60006L4.04691 4.20001C4.06533 4.29772 4.06311 4.39943 4.04045 4.49585C4.01779 4.59227 3.9754 4.68033 3.91717 4.752C3.85229 4.836 3.8473 4.842 3.23353 5.22599C3.72505 6.52249 4.58742 7.56365 5.66367 8.15995C5.98802 7.41596 5.99301 7.40996 6.06287 7.33196C6.12248 7.26194 6.19571 7.21097 6.27591 7.18372C6.3561 7.15648 6.44069 7.15381 6.52195 7.17596L9.51597 7.99795C9.59845 8.02096 9.67471 8.06884 9.73757 8.13706C9.80042 8.20529 9.8478 8.29163 9.87525 8.38795C9.91736 8.53036 9.94909 8.67691 9.97006 8.82594C9.99014 8.97673 10.0002 9.12922 10 9.28193C9.9908 10.0108 9.74216 10.7057 9.30837 11.2149C8.87457 11.7241 8.29085 12.0063 7.68463 11.9999Z" fill="white" />
              </svg>
              <span>

                <a href="tel:02039761066">
                  0203 976 1066
                </a>
              </span>

            </li>
            <li>
              <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 0C0.89543 0 0 0.805879 0 1.79998V1.98115L6.0001 4.88886L12 1.98125V1.79998C12 0.805879 11.1046 0 10 0H2Z" fill="white" />
                <path d="M12 3.00351L6.23715 5.79625C6.08916 5.86796 5.91104 5.86796 5.76305 5.79625L0 3.00342V7.20002C0 8.19415 0.89543 9.00001 2 9.00001H10C11.1046 9.00001 12 8.19415 12 7.20002V3.00351Z" fill="white" />
              </svg>
              <span>
                <a href="mailto:info@firstline-recovery.co.uk">
                  info@firstline-recovery.co.uk
              </span>
              </a>
            </li>
            <li>
              <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 4.47427C0.0022869 4.77513 0.035459 5.07497 0.0990001 5.36913C0.232336 5.99092 0.44717 6.59263 0.738 7.15884C1.56746 8.7072 2.61953 10.127 3.861 11.3736L4.5 12L5.139 11.3736C6.38047 10.127 7.43254 8.7072 8.262 7.15884C8.55283 6.59263 8.76766 5.99092 8.901 5.36913C8.96454 5.07497 8.99771 4.77513 9 4.47427C9 3.28762 8.52589 2.14957 7.68198 1.31048C6.83807 0.471395 5.69347 0 4.5 0C3.30653 0 2.16193 0.471395 1.31802 1.31048C0.474106 2.14957 0 3.28762 0 4.47427ZM5.4 5.36913H3.6V3.57942H5.4V5.36913Z" fill="white" />
              </svg>
              <span>
                Unit 1, Blenheim Trade Centre Epsom KT19 9XX
              </span>

            </li>
            <li>
              <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 0C2.7 0 0 2.475 0 5.5C0 8.525 2.7 11 6 11C9.3 11 12 8.525 12 5.5C12 2.475 9.3 0 6 0ZM7.8 6.05H6C5.64 6.05 5.4 5.83 5.4 5.5V2.75C5.4 2.42 5.64 2.2 6 2.2C6.36 2.2 6.6 2.42 6.6 2.75V4.95H7.8C8.16 4.95 8.4 5.17 8.4 5.5C8.4 5.83 8.16 6.05 7.8 6.05Z" fill="white" />
              </svg>
              <span>

                24/7 Monday - Sunday
              </span>

            </li>
          </ul>

        </div>
        <div class="footer__sections-accreditations">
          <h2>Accreditations</h2>
          <img src="assets/images/accreditation.png" height="120" width="290" />
        </div>
      </div>

      <div class="footer__bottom">
        <div class="footer__bottom-copyright">Firstline Recovery © - 2023</div>
        <ul class="footer__bottom-legal">
          <li class="footer__bottom-legal__item">
            <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.999998 9.07138L4.67453 5.74907C5.10849 5.35672 5.10849 4.71467 4.67453 4.32232L0.999998 1" stroke-width="0.9" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <a href="?page=privacy-policy">Privacy Policy</a>
          </li>
          <li class="footer__bottom-legal__item">

            <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.999998 9.07138L4.67453 5.74907C5.10849 5.35672 5.10849 4.71467 4.67453 4.32232L0.999998 1" stroke="#838F94" stroke-width="0.9" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <a href="?page=terms-and-conditions">Terms & Conditions</a>
          </li>
          <li class="footer__bottom-legal__item">
            <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.999998 9.07138L4.67453 5.74907C5.10849 5.35672 5.10849 4.71467 4.67453 4.32232L0.999998 1" stroke="#838F94" stroke-width="0.9" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <a href="?page=cookie-policy">Cookie Policy</a>
          </li>
        </ul>
        <div class="footer__bottom-myself"><a href="https://www.iamfarah.co.uk" target="_blank">Designed & Coded by F</a></div>
      </div>
    </section>



</body>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.js"></script>
<script src="//cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js" crossorigin="anonymous"></script>
<script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js" crossorigin="anonymous"></script>
<script src="assets/js/js.js"></script>


</html>