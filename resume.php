<?php
require("view/Header.php");
require("view/Footer.php");

use APP\View\Footer;
use APP\View\Header;

Header::init("Home");

?>
      
      <aside style="background-image: url(img/profile_big.jpg);"></aside>
      <main>
        <a href="index.html" class="home-button"><span class="fa fa-home"></span></a>
        <h1 class="mb-5">Experience</h1>
        <div class="mb-5">
          <ul class="resume-list">
            <li>
              <h3>Product Designer, Google</h3>
              <p class="date">Sep 2017 - Present</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint dolorum dolore culpa libero delectus excepturi! Repellat dolore, sapiente officia quod.</p>
            </li>
            <li>
              <h3>User Experience Director, Facebook</h3>
              <p class="date">Jan 2016 - Sep 2017</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint dolorum dolore culpa libero delectus excepturi! Repellat dolore, sapiente officia quod.</p>
            </li>

            <li>
              <h3>Mobile Application Designer, Yahoo</h3>
              <p class="date">Nov 2015 - Jan 2016</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint dolorum dolore culpa libero delectus excepturi! Repellat dolore, sapiente officia quod.</p>
            </li>
            <li>
              <h3>Product Designer, Medium</h3>
              <p class="date">Feb 2013 - Nov 2015</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint dolorum dolore culpa libero delectus excepturi! Repellat dolore, sapiente officia quod.</p>
            </li>
          </ul>
        </div>


        <h1 class="mb-5">Education</h1>
        <div class="mb-5">
          <ul class="resume-list">
            <li>
              <h3>Harvard University</h3>
              <p class="date">2010 - 2014</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint dolorum dolore culpa libero delectus excepturi! Repellat dolore, sapiente officia quod.</p>
            </li>
            
          </ul>
        </div>
        
      </main>
    </div>

    <?php
    Footer::init();
    ?>