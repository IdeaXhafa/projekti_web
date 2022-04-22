<?php
include 'resources\dbResources.php';

session_start();
?>

<!DOCTYPE html>
<html lang="">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layoout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
          <div id="logo" class="fl_left">
            <h1><a href="hoome.php">Home</a></h1>
          </div>
          <nav id="mainav" class="fl_right">
            <ul class="clear">
              <li class="active"><a href="hoome.php">Home</a></li>
              <li><a href="galleery.php">Gallery</a></li>
              <?php if(isset($_SESSION['logged_in_user'])){ ?>
                <li><a href="adminPanel.php">Dashboard</a></li>
                <li><a href="resources/auth/logoutFunction.php">Log Out</a></li>
              <?php }else {?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
              <?php }?>
              </ul>
          </nav>
        </header>
      </div>
      <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
        <div id="pageintro" class="hoc clear">
          <article>
            <p><?php echo $welcoming_data[0]['title']; ?>
              <!--Welcome to our home page!--></p>
            <h3 class="heading"><?php echo $welcoming_data[0]['sub_title']; ?>
            <!--Where we welcome you and present news that we have gathered from over the globe--></h3>
            <!--<footer><a class="btn" href="#"><strong>Go back</strong></a></footer>-->
          </article>
        </div>
      </div>
      <div class="wrapper coloured">
        <article class="hoc cta clear">
          <h6 class="three_quarter first font-x2"><?php echo $short_text_data[0]['text']?>
            <!--The news we present are always accurate.--></h6>
          <!--<footer class="one_quarter"><a class="btn" href="#"><strong>Go back</strong></a></footer>-->
        </article>
      </div>
      <div class="wrapper row3">
        <main class="hoc container clear">
          <section>
            <article class="one_third first">
              <p><?php echo $headline_text_data[0]['text'] ?></p>
              <h6 class="heading font-x2"><?php echo $headline_text_data[0]['info_text'] ?></h6>
            </article>
          
            <div class="two_third">
                <ul class="nospace group">
                  <li class="one_half first btmspace-30"><!--<a href="#">--><i class="icon btmspace-30 fas fa-dove" style="background-image: url('<?php echo $headline_data[3]['image'] ?>');"></i></a>  
                  <h6 class="heading">
                    <?php echo $headline_data[3]['title']; ?>
                    </h6>
                    <p><?php echo $headline_data[3]['body'] ?></p>
                  </li>
                  <li class="one_half btmspace-30"><i class="icon btmspace-30 fas fa-car-crash" style="background-image: url('<?php echo $headline_data[2]['image'] ?>');"></i></a>
                  <h6 class="heading">
                    <?php echo $headline_data[2]['title']; ?>
                  </h6> 
                  <!--<h6 class="heading">Stock Market</h6>-->
                  <p><?php echo $headline_data[2]['body'] ?></p>
                    <!--<p>Quick rises on DJI, Tesla & Amazon!</p>-->
                  </li>
                  <li class="one_half first"><i class="icon btmspace-30 fas fa-charging-station" style="background-image: url('<?php echo $headline_data[1]['image']; ?>');"></i></a>
                    <h6 class="heading">
                      <?php echo $headline_data[1]['title']; ?>
                      <!--From scientists observations-->
                    </h6>
                    <p><?php echo $headline_data[1]['body']; ?>
                      <!--'Earth is spinning faster than it was half a century ago, and if it continues speeding up scientists say they may have to remove a second from the atomic clock.'-->
                    </p>
                  </li>
                  <li class="one_half last"><i class="icon btmspace-30 fas fa-eye-dropper" style="background-image: url('<?php echo $headline_data[0]['image']; ?>');"></i></a>
                    <h6 class="heading">
                    <?php echo $headline_data[0]['title']; ?>  
                    <!--Low temperatures-->
                  </h6>
                    <p><?php echo $headline_data[0]['body']; ?>
                      <!--In the wake of the first strong winter storm of the season, very cold and dry air will remain over eastern Utah and western Colorado through the weekend and through much of next week.--> 
                    </p>
                  </li>
                </ul>
              </div>
            </section>


            <div class="clear"></div>
        </main>
      </div>
      <div class="wrapper bgded" style="background-image:url('images/demo/backgrounds/01.png');">
        <div class="hoc split clear">
          <section>
            <p><?php echo $arts_data[0]['title']; ?></p>
            <h6 class="heading font-x2"><?php echo $arts_data[0]['sub_title']; ?></h6>
            <p class="btmspace-30"><?php echo $arts_data[0]['description']; ?></p>
            <footer><a class="btn" href="#" onclick="viewDetailsButton()">View Details &raquo;</a></footer>
          </section>
        </div>
      </div>

<div class="wrapper row3">
  <section id="services" class="hoc container clear">
    <div class="sectiontitle">
      <p class="nospace font-xs"><?php echo $must_reads_data[0]['title']?><!--Must Reads--></p>
      <h6 class="heading"><?php echo $must_reads_data[0]['sub_title']?><!--On Science And Technology--></h6>
    </div>
    <ul class="nospace group grid-3">
      <li class="one_third">
        <article>
          <h6 class="heading"><a href="#"><i class="fas fa-feather-alt"></i></a><?php echo $must_reads_data[5]['section_title']?><!--World's biggest Space Telescope leaves Earth--></h6>
          <p><?php echo $must_reads_data[5]['section_sub_title']?>
            <!--Worth $10bn the telescope is on its mission to show the first stars to light up the Universe. Its flight to orbit lasted just under half an hour, with a signal confirming a successful outcome picked up by a ground antenna at Malindi in Kenya.--></p>
          <footer><a href="#" onclick="readMoreButton()">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
          <h6 class="heading"><a href="#"><i class="fas fa-church"></i></a><?php echo $must_reads_data[4]['section_title']?><!-- Hubble telescope successor faces 'two weeks of terror'--></h6>
          <p><?php echo $must_reads_data[4]['section_sub_title']?>
            <!--Engineers like to describe the process of landing a rover on Mars as the "seven minutes of terror". That's how long it takes for a robot to come to a standing-stop at the surface of the Red Planet after entering the atmosphere.--></p>
          <footer><a href="#" onclick="readMoreButton2()">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
          <h6 class="heading"><a href="#"><i class="fas fa-tshirt"></i></a><?php echo $must_reads_data[3]['section_title']?><!-- Parker Solar Probe makes historic pass through Sun's atmosphere--></h6>
          <p><?php echo $must_reads_data[3]['section_sub_title']?>
            <!--The US space agency (Nasa) is calling it a historic moment - the first time a spacecraft has flown through the outer atmosphere of the Sun. It occurred in April, but the analysis of data has only now confirmed it.--></p>
          <footer><a href="#" onclick="readMoreButton3()">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
          <h6 class="heading"><a href="#"><i class="fas fa-spa"></i></a><?php echo $must_reads_data[2]['section_title']?> <!--Tesla disables gaming while driving feature--></h6>
          <p><?php echo $must_reads_data[2]['section_sub_title']?>
            <!--The agency said it had been informed by Tesla that a software update would disable the feature while driving. Elon Musk's car firm had faced criticism that the feature was dangerous.--></p>
          <footer><a href="#" onclick="readMoreButton4()">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
          <h6 class="heading"><a href="#"><i class="fas fa-lightbulb"></i></a><?php echo $must_reads_data[1]['section_title']?> <!--Intel apologises to China over supplier advice--></h6>
          <p><?php echo $must_reads_data[1]['section_sub_title']?>
            <!--US microchip maker Intel has apologised following a backlash over its letter urging suppliers not to source products or labour from China's Xinjiang region.--></p>
          <footer><a href="#" onclick="readMoreButton5()">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
          <h6 class="heading"><a href="#"><i class="fas fa-diagnoses"></i></a><?php echo $must_reads_data[0]['section_title']?> <!--TikTok ousts Google to become favourite online destination--></h6>
          <p><?php echo $must_reads_data[0]['section_sub_title']?>
            <!--Move over Google, TikTok is the world's new most popular online destination. The viral video app gets more hits than the American search engine, according to Cloudflare, an IT security company.--></p>
          <footer><a href="#" onclick="readMoreButton6()">Read More</a></footer>
        </article>
      </li>
    </ul>
  </section>
</div>


<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
    <article class="hoc container clear">
      <div class="sectiontitle">
        <p class="nospace font-xs">...</p>
        <h6 class="heading">Most Read</h6>
      </div>
      <figure id="points" class="group">
        <ul class="nospace group">
          <?php foreach($most_read_data as $data){ ?>
          <li><i class="fas fa-check-circle"></i><?php echo $data['description'] ?></li>
          <?php } ?>
        </ul>
      </figure>
    </article>
  </div>


  <div class="wrapper row2">
    <section class="hoc container clear">
      <div class="sectiontitle">
        <p class="nospace font-xs"><?php echo $international_news_data[0]['title']?>
          <!--For an international point of view--></p>
        <h6 class="heading"><?php echo $international_news_data[0]['sub_title']?>
          <!--The 3 most talked about events now--></h6>
      </div>
      <ul id="latest" class="nospace group grid-3">
        <li class="one_third">
          <article>
            <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a></figure>
            <div class="excerpt">
              <ul class="nospace meta clear">
                <li>
                  <time datetime="2045-04-06T08:15+00:00"><?php echo $international_news_data[2]['date']?>
                    <!--25 Dec 2021--></time>
                </li>
              </ul>
              <h6 class="heading"><?php echo $international_news_data[2]['section_title']?>
                <!--France--></h6>
              <p><?php echo $international_news_data[2]['section_news']?>
                <!--France on the eve of Christmas, exceeded the threshold of 94 thousand new daily cases of COVID-19, the most since the outbreak in March 2020, according to French public health data.--></p>
              <footer><a href="#" onclick="readMoreBtn()">Read More</a></footer>
            </div>
          </article>
        </li>
        <li class="one_third">
          <article>
            <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a></figure>
            <div class="excerpt">
              <ul class="nospace meta clear">
                <li>
                  <time datetime="2045-04-05T08:15+00:00"><?php echo $international_news_data[1]['date']?>
                    <!--24 Dec 2021--></time>
                </li>
              </ul>
              <h6 class="heading"><?php echo $international_news_data[1]['section_title']?>
                <!--LA--></h6>
              <p><?php echo $international_news_data[1]['section_news']?>
                <!--Los Angeles police have killed two people, including a 14-year-old girl who was trying on new clothes after opening fire inside a clothing store.--></p>
              <footer><a href="#" onclick="readMoreBtn2()">Read More</a></footer>
            </div>
          </article>
        </li>
        <li class="one_third">
          <article>
            <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a></figure>
            <div class="excerpt">
              <ul class="nospace meta clear">
                <!--<li><i class="fas fa-user"></i> <a href="#">Home</a></li>-->
                <li>
                  <time datetime="2045-04-04T08:15+00:00"><?php echo $international_news_data[0]['date']?>
                    <!--15 Dec 2021--></time>
                </li>
              </ul>
              <h6 class="heading"><?php echo $international_news_data[0]['section_title']?>
                <!--Antarctica--></h6>
              <p><?php echo $international_news_data[0]['section_news']?>
                <!--Ice melting in Antarctica is the size of Florida, scientists say in five years could lose crust and raise sea level by 25%. Ice with an area of ​​about 119,090 square kilometers--></p>
              <footer><a href="#" onclick="readMoreBtn3()">Read More</a></footer>
            </div>
          </article>
        </li>
      </ul>
    </section>
  </div>


  <div class="wrapper row5">
    <div id="copyright" class="hoc clear">
      <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Idea - Erjoni</a></p>
    </div>
  </div>
</body>
</html>

<script src="script.js"></script>
