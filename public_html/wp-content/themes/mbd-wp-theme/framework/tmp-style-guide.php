<?php

/**
 * Template Name: Style Guide
 * Template Post Type: post, page
 *
 */

get_header(); ?>
<main id="main">
   <div class="section alt">
      <div class="container container_narrow">
         <h1>CSS Basic Elements</h1>
         <p class="block--text">The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>
         <hr />
         <h1>Heading 1</h1>
         <p class="block--text">Bacon ipsum dolor amet filet mignon sirloin ground round prosciutto, pastrami meatball turkey jowl bacon brisket. Chicken ham pastrami capicola <a href="#">boudin ball tip pancetta sausage shoulder</a>, kielbasa jerky biltong. Chuck salami pork belly kevin. Boudin andouille landjaeger beef short loin beef ribs ham brisket bresaola pork ham hock shankle.</p>
         <h2>Heading 2</h2>
         <p class="block--text">Bacon ipsum dolor amet filet mignon sirloin ground round prosciutto, pastrami meatball turkey jowl bacon brisket. Chicken ham pastrami capicola boudin ball tip pancetta sausage shoulder, kielbasa jerky biltong. Chuck salami pork belly kevin. Boudin andouille landjaeger beef short loin beef ribs ham brisket bresaola pork ham hock shankle.</p>
         <h3>Heading 3</h3>
         <p class="block--text">Bacon ipsum dolor amet filet mignon sirloin ground round prosciutto, pastrami meatball turkey jowl bacon brisket. Chicken ham pastrami capicola boudin ball tip pancetta sausage shoulder, kielbasa jerky biltong. Chuck salami pork belly kevin. Boudin andouille landjaeger beef short loin beef ribs ham brisket bresaola pork ham hock shankle.</p>
         <h4>Heading 4</h4>
         <p class="block--text">Bacon ipsum dolor amet filet mignon sirloin ground round prosciutto, pastrami meatball turkey jowl bacon brisket. Chicken ham pastrami capicola boudin ball tip pancetta sausage shoulder, kielbasa jerky biltong. Chuck salami pork belly kevin. Boudin andouille landjaeger beef short loin beef ribs ham brisket bresaola pork ham hock shankle.</p>
         <h5>Heading 5</h5>
         <p class="block--text">Bacon ipsum dolor amet filet mignon sirloin ground round prosciutto, pastrami meatball turkey jowl bacon brisket. Chicken ham pastrami capicola boudin ball tip pancetta sausage shoulder, kielbasa jerky biltong. Chuck salami pork belly kevin. Boudin andouille landjaeger beef short loin beef ribs ham brisket bresaola pork ham hock shankle.</p>
         <h6>Heading 6</h6>
         <p class="block--text">Bacon ipsum dolor amet filet mignon sirloin ground round prosciutto, pastrami meatball turkey jowl bacon brisket. Chicken ham pastrami capicola boudin ball tip pancetta sausage shoulder, kielbasa jerky biltong. Chuck salami pork belly kevin. Boudin andouille landjaeger beef short loin beef ribs ham brisket bresaola pork ham hock shankle.</p>
      </div><!-- .container -->
   </div><!-- .section -->
   <hr>
   <div id="buttons" class="section buttons">
      <div class="container">
         <header class="buttons__header">
            <h2>Buttons</h2>
            <p>Colors, states, transitions & sizes</p>
         </header>
         <section class="buttons--primary">
            <h3>Primary Buttons</h3>
            <h4>button</h4>
            <p>
               <button class="button button--primary button--pico">Click Me!</button>
               <button class="button button--primary button--nano">Click Me!</button>
               <button class="button button--primary button--micro">Click Me!</button>
               <button class="button button--primary">Click Me!</button>
               <button class="button button--primary button--kilo">Click Me!</button>
               <button class="button button--primary button--mega">Click Me!</button>
               <button class="button button--primary button--giga">Click Me!</button>
               <button class="button button--primary button--peta">Click Me!</button>
            </p>
            <h4>anchor</h4>
            <p>
               <a href="#" class="button button--primary button--pico">Click Me!</a>
               <a href="#" class="button button--primary button--nano">Click Me!</a>
               <a href="#" class="button button--primary button--micro">Click Me!</a>
               <a href="#" class="button button--primary">Click Me!</a>
               <a href="#" class="button button--primary button--kilo">Click Me!</a>
               <a href="#" class="button button--primary button--mega">Click Me!</a>
               <a href="#" class="button button--primary button--giga">Click Me!</a>
               <a href="#" class="button button--primary button--peta">Click Me!</a>
            </p>
         </section>

         <section class="buttons--secondary">
            <h3>Secondary buttons</h3>
            <h4>button</h4>
            <p><button class="button button--secondary">Click Me!</button></p>
            <h4>anchor</h4>
            <p><a href="#" class="button button--secondary">Click Me!</a></p>
         </section>

         <section class="buttons--ghost">
            <h3>Ghost buttons</h3>
            <p>Check transparency</p>
            <h4>button</h4>
            <p><button class="button button--ghost">Click Me!</button></p>
            <h4>anchor</h4>
            <p><a href="#" class="button  button--ghost">Click Me!</a></p>
         </section>

         <section class="buttons--ghost--secondary">
            <h3>Ghost buttons - secondary</h3>
            <h4>button</h4>
            <p><button class="button button--ghost--secondary">Click Me!</button></p>
            <h4>anchor</h4>
            <p><a href="#" class="button button--ghost--secondary">Click Me!</a></p>
         </section>

      </div><!-- ..container -->
   </div><!-- #buttons ..section -->
   <hr>
   <div id="colors" class="section">
      <div class="container">
         <div class="container">
            <header>
               <h2>Brand Colors</h2>
            </header>
            <h3>Brand</h3>
            <div class="brand">
               <?php $color = array(
                  'primary',
                  'complement',
                  'secondary-1',
                  'secondary-2',
                  'secondary-3',
                  'neutral',
                  'neutral-2'
               ); ?>
               <?php foreach ($color as $value) { ?>
                  <ul class="color-<?php echo $value; ?>">
                     <h4><?php echo $value; ?></h4>
                     <?php $variations = array('ultra-tinted', 'super-tinted', 'tinted', '', 'shaded', 'super-shaded', 'ultra-shaded'); ?>
                     <?php foreach ($variations as $variation) { ?>
                        <li class="color-swatch colors__swatch <?php echo $variation; ?>" title="$color-<?php echo $value; ?>-<?php echo $variation; ?>">
                        </li>
                     <?php }; ?>
                  </ul>
               <?php }; ?>
            </div>
         </div><!-- .content-container -->
      </div><!-- ..container -->
   </div><!-- #colors ..section -->

   <div class="section alt">
      <div class="container">
      <div class="block--text">
         <p>Pork loin drumstick t-bone buffalo pork. Frankfurter pancetta prosciutto, bresaola chuck jowl sirloin. T-bone pork loin leberkas filet mignon landjaeger kielbasa frankfurter ham hock rump. T-bone cow pork chop pastrami picanha sirloin hamburger pork belly capicola beef. Meatloaf tongue andouille buffalo kielbasa ball tip t-bone filet mignon rump corned beef short loin. Swine cupim shank buffalo kevin tri-tip. Ribeye capicola shankle, tail drumstick prosciutto meatball alcatra tenderloin sausage bacon turkey.</p>
      </div>
         <h1 id="paragraph">Paragraph</h1>
         <p class="block--text">Lorem ipsum dolor sit amet, <a href="#" title="test link">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
         <p class="block--text">Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
         <small><a href="#wrapper">[top]</a></small>
      </div><!-- .container -->
   </div><!-- .section -->
   <hr>

   <div class="section alt">
      <div class="container">
         <h1>Social Media Icons</h1>
         <p class="block--text">Facebook, Twitter, etc.</p>
         <?php baindesign324_social_links(); ?>
      </div><!-- .container -->
   </div><!-- .section -->
   <hr>

   <div class="section alt">
      <div class="container">
         <h1>Fontawesome Icons</h1>
         <p class="block--text">For all your iconic needs</p>
         <ul style="font-size: 2rem;">
            <i class="fas fa-air-conditioner"></i>
            <i class="fal fa-air-conditioner"></i>
            <i class="far fa-alien"></i>
            <i class="fas fa-ad"></i>
            <i class="fad fa-ad"></i>
            <i class="fal fa-ad"></i>
            <i class="fad fa-cubes"></i>
         </ul>
         <ul style="font-size: 2rem;">
         <li><i class="fal fa-search"></i></li>
         <li><i class="far fa-search"></i></li>
         <li><i class="fas fa-search"></i></li>
         <li><i class="fad fa-search"></i></li>
         </ul>
      </div><!-- .container -->
   </div><!-- .section -->
   <hr>

   <div id="toggles" class="section">
      <div class="container">
         <header class="toggles__header">
            <h2>Toggles</h2>
         </header>
         <section class="toggles--menu">
            <h3>Menu toggles</h3>
            <p class="block--text">Usually a hamburger</p>
            <h4>Basic menu toggle</h4>
            <p><?php baindesign324_mmenu_toggle(); ?></p>
            <h4>Static menu toggle</h4>
            <p><?php baindesign324_mmenu_toggle(); ?></p>
            <h4>Animated menu toggle</h4>
            <p>Powered by <code>mburger.js</code></p>
            <p><?php baindesign324_mmenu_toggle_animated(); ?></p>            
         </section>
         <section class="toggles--search">
            <h3>Search</h3>
            <p class="block--text">This icon is known as a "loupe"</p>
            <p><?php baindesign324_toggle_search(); ?></p>
         </section>
         <?php /*
         <section class="toggles--dropdown">
            <h3>Dropdown</h3>
            <p class="block--text">You may choose between a plus sign and a down arrow</p>
         </section>
         */ ?>
      </div>
   </div>
   <hr>
   <div class="section">
      <div class="container">
         <h1 id="list_types">List Types</h1>

         <h3>Definition List</h3>
         <dl>
            <dt>Definition List Title</dt>
            <dd>This is a definition list division.</dd>
         </dl>

         <h3>Ordered List</h3>
         <ol>
            <li>List Item 1</li>
            <li>List Item 2</li>
            <li>List Item 3</li>
         </ol>

         <h3>Unordered List</h3>
         <ul>
            <li>List Item 1</li>
            <li>List Item 2</li>
            <li>List Item 3</li>
         </ul>

         <small><a href="#wrapper">[top]</a></small>
      </div><!-- .container -->
   </div><!-- .section -->
   <div class="section">
      <div class="container">
         <h1 id="form_elements">Fieldsets, Legends, and Form Elements</h1>

         <fieldset>
            <legend>Legend</legend>

            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus.</p>

            <form>
               <h2>Form Element</h2>

               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui.</p>

               <p><label for="text_field">Text Field:</label>
                  <input type="text" id="text_field" /></p>

               <p><label for="text_area">Text Area:</label>
                  <textarea id="text_area"></textarea></p>

               <p><label for="select_element">Select Element:</label>
                  <select name="select_element">
                     <optgroup label="Option Group 1">
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                     </optgroup>
                     <optgroup label="Option Group 2">
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                     </optgroup>
                  </select></p>

               <p><label for="radio_buttons">Radio Buttons:</label>
                  <input type="radio" class="radio" name="radio_button" value="radio_1" /> Radio 1<br />
                  <input type="radio" class="radio" name="radio_button" value="radio_2" /> Radio 2<br />
                  <input type="radio" class="radio" name="radio_button" value="radio_3" /> Radio 3<br />
               </p>

               <p><label for="checkboxes">Checkboxes:</label>
                  <input type="checkbox" class="checkbox" name="checkboxes" value="check_1" /> Radio 1<br />
                  <input type="checkbox" class="checkbox" name="checkboxes" value="check_2" /> Radio 2<br />
                  <input type="checkbox" class="checkbox" name="checkboxes" value="check_3" /> Radio 3<br />
               </p>

               <p><label for="password">Password:</label>
                  <input type="password" class="password" name="password" />
               </p>

               <p><label for="file">File Input:</label>
                  <input type="file" class="file" name="file" />
               </p>


               <p><input class="button" type="reset" value="Clear" /> <input class="button" type="submit" value="Submit" />
               </p>



            </form>
            <h2>Inline Forms</h2>
            <form class="inline-a">
               <p><label for="text_field">Text Field:</label>
                  <input type="text" id="text_field" /></p>
               <p><label for="text_field">Text Field:</label>
                  <input type="text" id="text_field" /></p>
               <p><label for="text_field">Text Field:</label>
                  <input type="text" id="text_field" /></p>
               <p><input class="button" type="submit" value="Submit" />
               </p>
            </form>
            <form class="inline-b">
               <p><label for="text_field">Text Field:</label>
                  <input type="text" id="text_field" /></p>
               <p><label for="text_field">Text Field:</label>
                  <input type="text" id="text_field" /></p>
               <p><input class="button" type="submit" value="Submit" />
               </p>
            </form>

         </fieldset>

         <small><a href="#wrapper">[top]</a></small>
      </div><!-- .container -->
   </div><!-- .section -->

   <div class="section">
      <div class="container">
         <h1 id="tables">Tables</h1>

         <table cellspacing="0" cellpadding="0">
            <tr>
               <th>Table Header 1</th>
               <th>Table Header 2</th>
               <th>Table Header 3</th>
            </tr>
            <tr>
               <td>Division 1</td>
               <td>Division 2</td>
               <td>Division 3</td>
            </tr>
            <tr class="even">
               <td>Division 1</td>
               <td>Division 2</td>
               <td>Division 3</td>
            </tr>
            <tr>
               <td>Division 1</td>
               <td>Division 2</td>
               <td>Division 3</td>
            </tr>

         </table>

         <small><a href="#wrapper">[top]</a></small>
      </div><!-- .container -->
   </div><!-- .section -->

   <div id="signup" class="section">
      <div class="container">
         <h1 id="mailchimp"><i class="fa fa-envelope"></i> MailChimp Form</h1>
         <p>Bacon ipsum dolor amet frankfurter ham ham hock fatback, venison chicken jerky shankle chuck drumstick. Tenderloin biltong turducken, picanha doner pork loin ham hock andouille pig cow drumstick ribeye turkey. Capicola bacon bresaola, pancetta swine andouille venison short ribs beef ribs salami. Shankle filet mignon pig doner t-bone ham hock beef ribs spare ribs ribeye capicola shoulder meatloaf. Pancetta leberkas swine, ground round cow prosciutto jowl biltong pork belly.</p>
         <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <p class="username">
               <label for="usernamesignup" class="uname" data-icon="u"><i class="fa fa-user"></i> First Name</label>
               <input id="usernamesignup" name="FNAME" required="required" type="text" placeholder="Jane" />
            </p>

            <p class="username-last">
               <label for="username-lastsignup" class="uname" data-icon="u"><i class="fa fa-user"></i> Second Name</label>
               <input id="username-lastsignup" name="LNAME" required="required" type="text" placeholder="Smith" />
            </p>

            <p class="emailaddress">
               <label for="emailsignup" class="youmail" data-icon="e"><i class="fa fa-envelope"></i> Email Address</label>
               <input id="emailsignup" name="EMAIL" required="required" type="email" placeholder="your-email@example.com" />
            </p>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->


            <p class="signin">
               <input type="submit" class="cta button cta-primary" value="Sign Up!" />
            </p>

         </form>
         <p class="post-form-content">Don't like Spam...</p>



         <small><a href="#wrapper">[top]</a></small>
      </div><!-- .container -->
   </div><!-- .section -->

   <div class="section">
      <div class="container">
         <h1 id="misc">Misc Stuff - abbr, acronym, pre, code, sub, sup, etc.</h1>

         <p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus. <abbr title="Avenue">AVE</abbr></p>

         <pre><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr></p></pre>

         <blockquote>
            "This stylesheet is going to help so freaking much." <br />-Blockquote
         </blockquote>


         <h1 class="h2">Page Markup And Formatting</h1>
         <h2>Headings</h2>
         <h1>Header one</h1>
         <h2>Header two</h2>
         <h3>Header three</h3>
         <h4>Header four</h4>
         <h5>Header five</h5>
         <h6>Header six</h6>
         <h2>Blockquotes</h2>
         <p>Single line blockquote:</p>
         <blockquote>
            <p>Stay hungry. Stay foolish.</p>
         </blockquote>
         <p>Multi line blockquote with a cite reference:</p>
         <blockquote>
            <p>People think focus means saying yes to the thing you’ve got to focus on. But that’s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I’m actually as proud of the things we haven’t done as the things I have done. Innovation is saying no to 1,000 things. <cite>Steve Jobs – Apple Worldwide Developers’ Conference, 1997</cite></p>
         </blockquote>
         <h2>Tables</h2>
         <table>
            <tbody>
               <tr>
                  <th>Employee</th>
                  <th class="views">Salary</th>
                  <th></th>
               </tr>
               <tr class="odd">
                  <td><a href="http://john.do/">John Saddington</a></td>
                  <td>$1</td>
                  <td>Because that’s all Steve Job’ needed for a salary.</td>
               </tr>
               <tr class="even">
                  <td><a href="http://tommcfarlin.com/">Tom McFarlin</a></td>
                  <td>$100K</td>
                  <td>For all the blogging he does.</td>
               </tr>
               <tr class="odd">
                  <td><a href="http://jarederickson.com/">Jared Erickson</a></td>
                  <td>$100M</td>
                  <td>Pictures are worth a thousand words, right? So Tom x 1,000.</td>
               </tr>
               <tr class="even">
                  <td><a href="http://chrisam.es/">Chris Ames</a></td>
                  <td>$100B</td>
                  <td>With hair like that?! Enough said…</td>
               </tr>
            </tbody>
         </table>
         <h2>Definition Lists</h2>
         <dl>
            <dt>Definition List Title</dt>
            <dd>Definition list division.</dd>
            <dt>Startup</dt>
            <dd>A startup company or startup is a company or temporary organization designed to search for a repeatable and scalable business model.</dd>
            <dt>#dowork</dt>
            <dd>Coined by Rob Dyrdek and his personal body guard Christopher “Big Black” Boykins, “Do Work” works as a self motivator, to motivating your friends.</dd>
            <dt>Do It Live</dt>
            <dd>I’ll let Bill O’Reilly will <a title="We'll Do It Live" href="https://www.youtube.com/watch?v=O_HyZ5aW76c">explain</a> this one.</dd>
         </dl>
         <h2>Unordered Lists (Nested)</h2>
         <ul>
            <li>List item one
               <ul>
                  <li>List item one
                     <ul>
                        <li>List item one</li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                     </ul>
                  </li>
                  <li>List item two</li>
                  <li>List item three</li>
                  <li>List item four</li>
               </ul>
            </li>
            <li>List item two</li>
            <li>List item three</li>
            <li>List item four</li>
         </ul>
         <h2>Ordered List (Nested)</h2>
         <ol>
            <li>List item one
               <ol>
                  <li>List item one
                     <ol>
                        <li>List item one</li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                     </ol>
                  </li>
                  <li>List item two</li>
                  <li>List item three</li>
                  <li>List item four</li>
               </ol>
            </li>
            <li>List item two</li>
            <li>List item three</li>
            <li>List item four</li>
         </ol>
         <h2>HTML Tags</h2>
         <p>These supported tags come from the WordPress.com code <a title="Code" href="http://en.support.wordpress.com/code/">FAQ</a>.</p>
         <p><strong>Address Tag</strong></p>
         <address>1 Infinite Loop<br>
            Cupertino, CA 95014<br>
            United States</address>
         <p><strong>Anchor Tag (aka. Link)</strong></p>
         <p>This is an example of a <a title="Apple" href="http://apple.com">link</a>.</p>
         <p><strong>Abbreviation Tag</strong></p>
         <p>The abbreviation <abbr title="Seriously">srsly</abbr> stands for “seriously”.</p>
         <p><strong>Acronym Tag</strong></p>
         <p>The acronym <acronym title="For The Win">ftw</acronym> stands for “for the win”.</p>
         <p><strong>Big Tag</strong></p>
         <p>These tests are a <big>big</big> deal, but this tag is no longer supported in HTML5.</p>
         <p><strong>Cite Tag</strong></p>
         <p>“Code is poetry.” —<cite>Automattic</cite></p>
         <p><strong>Code Tag</strong></p>
         <p>You will learn later on in these tests that <code>word-wrap: break-word;</code> will be your best friend.</p>
         <p><strong>Delete Tag</strong></p>
         <p>This tag will let you <del>strikeout text</del>, but this tag is no longer supported in HTML5 (use the <code>&lt;strike&gt;</code> instead).</p>
         <p><strong>Emphasize Tag</strong></p>
         <p>The emphasize tag should <em>italicize</em> text.</p>
         <p><strong>Insert Tag</strong></p>
         <p>This tag should denote <ins>inserted</ins> text.</p>
         <p><strong>Keyboard Tag</strong></p>
         <p>This scarsly known tag emulates <kbd>keyboard text</kbd>, which is usually styled like the <code>&lt;code&gt;</code> tag.</p>
         <p><strong>Preformatted Tag</strong></p>
         <p>This tag styles large blocks of code.</p>
         <pre>.post-title {
   margin: 0 0 5px;
   font-weight: bold;
   font-size: 38px;
   line-height: 1.2;
}</pre>
         <p><strong>Quote Tag</strong></p>
         <p><q>Developers, developers, developers…</q> –Steve Ballmer</p>
         <p><strong>Strong Tag</strong></p>
         <p>This tag shows <strong>bold<strong> text.</strong></strong></p>
         <p><strong>Subscript Tag</strong></p>
         <p>Getting our science styling on with H<sub>2</sub>O, which should push the “2” down.</p>
         <p><strong>Superscript Tag</strong></p>
         <p>Still sticking with science and Albert Einstein’s&nbsp;E = MC<sup>2</sup>, which should lift the “2” up.</p>
         <p><strong>Teletype Tag</strong></p>
         <p>This rarely used tag emulates <tt>teletype text</tt>, which is usually styled like the <code>&lt;code&gt;</code> tag.</p>
         <p><strong>Variable Tag</strong></p>
         <p>This allows you to denote <var>variables</var>.</p>


      </div><!-- .container -->
   </div><!-- .section -->

</main><!-- #main -->
<?php get_footer(); ?>