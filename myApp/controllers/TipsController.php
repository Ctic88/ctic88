<?php

class TipsController extends AppController
{
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {

        $data['title'] = 'Tips';
        $data['mainContent'] = '<h3>Fishing Tips and Techniques</h3>

  <p>
    You’ll find everything you need at a fishing tackle or sporting goods store. While you’re in the store, pick up a copy of your state’s fishing laws (or regulations), which will tell you the types of fish, the minimum size limit, and the number of fish you can catch in one day.
  </p>

  <p>
    <strong>PRO-TIP:</strong> Some libraries, state agencies, national fish hatcheries, and national wildlife refuges even offer tackle loaner programs for families and beginning anglers. Call around in your area to see what’s available!
  </p>

  <h3>Choosing and Setting Up Your First Fishing Rod</h3>
  <p>
    Many outdoor retailers sell kits that include everything you need (and a special excise tax ensures that a portion of the sales gets funneled back into conservation!). Choose a fishing rod that you can hold comfortably in one hand. Two of the most common types used for beginners are a closed spin-casting reel and an open-bail spinning reel.
  </p>

  <p>
    <strong>Closed Spin-Casting Reels:</strong> These use a rod with a pistol-like grip and a reel that’s mounted on the top of the rod’s handle. Line is released using a push button on the reel. This is the easiest rod and reel for beginners.
  </p>

  <p>
    <strong>Open-Bail Spinning Reels:</strong> These use a rod with a straight handle and a reel that’s mounted under the handle. Line is released using your index finger.
  </p>

  <h3>Setting Up Your Hook, Line, and Sinker</h3>

  <p>
    Now you are ready to set up your rod with hook, line, and sinker.
  </p>

  <ul>
    <li>Tie on a fishhook. (Check out an easy beginners knot below.)</li>
    <li>Attach 1 or 2 sinkers, 6 to 12 inches above the hook. This weight will keep your bait or lure down in the water and will help swing it away from shore.</li>
    <li>A bobber lets you know when fish are biting, because it moves up and down in the water as fish nibble at the bait. Most bobbers attach to fishing line with a spring clip and move up and down the line easily, depending on how deep you want to fish the bait.</li>
  </ul>

  <h3>Tying an Improved Clinch Knot</h3>

  <p>
    <strong>Step 1:</strong> Pass the line through the hook eye and, with the loose end, make 5 turns around the standing line. Insert the loose end of the line between the eye and the first loop formed.
  </p>

  <p>
    <strong>Step 2:</strong> Bring the loose end through the large second loop formed. Wet the line and tighten the knot slowly.
  </p>



  <h2>Learning to Cast</h2>

  <p>
    Once you’ve picked out all your gear, it’s time to practice. To practice your cast, remove the hook and tie on a rubber weight called a casting plug. Next, find an open area away from other people where you can practice casting.
  </p>

  <h3>Closed Spin-Casting Reel</h3>

  <p>
    A closed spin-casting reel has a button that you push with your thumb to release the line.
  </p>

  <ol>
    <li>Grasp the rod’s pistol grip with one hand. Push the reel’s thumb button down and hold it in.</li>
    <li>Face the target area with your body turned at a slight angle, about a quarter turn. Aim the rod tip toward the target, about level with your eyes.</li>
    <li>Swiftly and smoothly, bend your arm at the elbow, raising your hand with the rod until it almost reaches eye level.</li>
    <li>When the rod is almost straight up and down, move your forearm forward with a slight wrist movement. When the rod reaches eye level, release the thumb button.</li>
  </ol>

  <h3>Open-Bail Spinning Reel</h3>

  <p>
    With an open-bail spinning reel, you use your finger to release the line.
  </p>

  <ol>
    <li>
      Grasp the rod’s handle, placing the reel “stem” that attaches the reel to the rod between your middle fingers. Place your thumb on top of the handle and extend your forefinger to touch the spool cover. With the other hand, rotate the reel spool until the line roller is directly beneath your extended index finger. Pick up the line in front of the roller with your index finger and open the reel’s bail with your other hand.
    </li>
    <li>
      Face the target area with your body turned at a slight angle — about a quarter turn. The arm holding the rod handle should be closest to the target. Aim the rod tip toward the target at about eye level.
    </li>
    <li>
      Swiftly and smoothly, using just one motion, bend your casting arm at the elbow and raise your forearm so that your hand is almost at eye level.
    </li>
    <li>
      When the rod is almost straight up and down, move your forearm forward with a slight wrist movement. When the rod reaches eye level, straighten your forefinger to release the line.
    </li>
  </ol>
</div> ';





        // dacă userul e autentificat
        session_start();
        if (isset($_SESSION['user'])) {
            $data['privateMainContent'] ='
            <div>
            
        
            <div class="row d-flex">
                <!-- Left Side: Text Content -->
                <div class="col-12 col-md-9">
                    <h3>Checklist for Fishing in Fresh Water:</h3>
                    <ul>
                        <li>A state fishing license (depending on your age)</li>
                        <li>A fishing rod and reel</li>
                        <li>4- to 12-pound-test monofilament fishing line</li>
                        <li>A package of fishing weights</li>
                        <li>Fishhooks (Number 6–10 size)</li>
                        <li>A plastic or cork bobber</li>
                        <li>A selection of live bait or fishing lures (Be sure to check with local regulations. Some areas prohibit certain types of bait.)</li>
                        <li>Rubber fishing net and rubber glove</li>
                    </ul>
        
                    <h3>Fishing Tips and Techniques</h3>
                    <p>
                        You’ll find everything you need at a fishing tackle or sporting goods store. While you’re in the store, pick up a copy of your state’s fishing laws (or regulations), which will tell you the types of fish, the minimum size limit, and the number of fish you can catch in one day.
                    </p>
        
                    <p>
                        <strong>PRO-TIP:</strong> Some libraries, state agencies, national fish hatcheries, and national wildlife refuges even offer tackle loaner programs for families and beginning anglers. Call around in your area to see what’s available!
                    </p>
        
                    <h3>Choosing and Setting Up Your First Fishing Rod</h3>
                    <p>
                        Many outdoor retailers sell kits that include everything you need (and a special excise tax ensures that a portion of the sales gets funneled back into conservation!). Choose a fishing rod that you can hold comfortably in one hand. Two of the most common types used for beginners are a closed spin-casting reel and an open-bail spinning reel.
                    </p>
        
                    <p>
                        <strong>Closed Spin-Casting Reels:</strong> These use a rod with a pistol-like grip and a reel that’s mounted on the top of the rod’s handle. Line is released using a push button on the reel. This is the easiest rod and reel for beginners.
                    </p>
        
                    <p>
                        <strong>Open-Bail Spinning Reels:</strong> These use a rod with a straight handle and a reel that’s mounted under the handle. Line is released using your index finger.
                    </p>
        
                    <h3>Setting Up Your Hook, Line, and Sinker</h3>
                    <p>Now you are ready to set up your rod with hook, line, and sinker.</p>
        
                    <ul>
                        <li>Tie on a fishhook. (Check out an easy beginner’s knot below.)</li>
                        <li>Attach 1 or 2 sinkers, 6 to 12 inches above the hook. This weight will keep your bait or lure down in the water and will help swing it away from shore.</li>
                        <li>A bobber lets you know when fish are biting, because it moves up and down in the water as fish nibble at the bait. Most bobbers attach to fishing line with a spring clip and move up and down the line easily, depending on how deep you want to fish the bait.</li>
                    </ul>
        
                    <h3>Tying an Improved Clinch Knot</h3>
                    <p><strong>Step 1:</strong> Pass the line through the hook eye and, with the loose end, make 5 turns around the standing line. Insert the loose end of the line between the eye and the first loop formed.</p>
                    <p><strong>Step 2:</strong> Bring the loose end through the large second loop formed. Wet the line and tighten the knot slowly.</p>
        
                    <h2>Learning to Cast</h2>
                    <p>Once you’ve picked out all your gear, it’s time to practice. To practice your cast, remove the hook and tie on a rubber weight called a casting plug. Next, find an open area away from other people where you can practice casting.</p>
        
                    <h3>Closed Spin-Casting Reel</h3>
                    <p>A closed spin-casting reel has a button that you push with your thumb to release the line.</p>
                    <ol>
                        <li>Grasp the rod’s pistol grip with one hand. Push the reel’s thumb button down and hold it in.</li>
                        <li>Face the target area with your body turned at a slight angle, about a quarter turn. Aim the rod tip toward the target, about level with your eyes.</li>
                        <li>Swiftly and smoothly, bend your arm at the elbow, raising your hand with the rod until it almost reaches eye level.</li>
                        <li>When the rod is almost straight up and down, move your forearm forward with a slight wrist movement. When the rod reaches eye level, release the thumb button.</li>
                    </ol>
        
                    <h3>Open-Bail Spinning Reel</h3>
                    <p>With an open-bail spinning reel, you use your finger to release the line.</p>
                    <ol>
                        <li>Grasp the rod’s handle, placing the reel “stem” between your middle fingers. Place your thumb on top of the handle and extend your forefinger to touch the spool cover. With the other hand, rotate the reel spool until the line roller is directly beneath your extended index finger. Pick up the line in front of the roller with your index finger and open the reel’s bail with your other hand.</li>
                        <li>Face the target area with your body turned at a slight angle — about a quarter turn. The arm holding the rod handle should be closest to the target. Aim the rod tip toward the target at about eye level.</li>
                        <li>Swiftly and smoothly, using just one motion, bend your casting arm at the elbow and raise your forearm so that your hand is almost at eye level.</li>
                        <li>When the rod is almost straight up and down, move your forearm forward with a slight wrist movement. When the rod reaches eye level, straighten your forefinger to release the line.</li>
                    </ol>
                </div>
        
                <!-- Right Side: Button Section -->

                <div class="col-12 col-md-3 d-flex flex-column">
                <h2>Useful Links</h2>
                    <a href="https://en.wikipedia.org/wiki/Fishing" target="_blank">
                      <button class="helpBtn">Wikipedia</button>
                    </a>
                    <a href="https://www.fisheries.co.uk/learning-how-to-fish/" target="_blank">
                      <button class="helpBtn">Fisheries</button>
                    </a>
                    <a href="https://www.fishing.net.nz/fishing-advice/fishing-hints-tips-and-how-to-articles/fishing-basics-getting-started-part-1/" target="_blank">
                      <button class="helpBtn">Fishing.net</button>
                    </a>
                    <a href="https://kids.britannica.com/students/article/fishing/274328" target="_blank">
                      <button class="helpBtn">Britannica</button>
                    </a>
                    <a href="https://www.totalfishing.ro/" target="_blank">
                      <button class="helpBtn">Total Fishing</button>
                    </a>
                    <a href="https://www.fishingmall.ro" target="_blank">
                      <button class="helpBtn">Fishing Mall</button>
                    </a>
                    <a href="https://fishingshop.ro" target="_blank">
                      <button class="helpBtn">Fishing Shop</button>
                    </a>
                    <a href="https://expert-fishing.ro" target="_blank">
                      <button class="helpBtn">Expert-Fishing</button>
                    </a>
                    <a href="https://www.foxfishing.ro" target="_blank">
                      <button class="helpBtn">FoxFishing</button>
                    </a>
                    <a href="https://www.crfishing.ro" target="_blank">
                      <button class="helpBtn">CRFishing</button>
                    </a>
                </div>
            </div>
        </div>';


            $data['asideContent'] = '<div>
          <h3>10 Tips on How to Fish for Beginners</h3>
      <ul>
        <li>Match your lure to the water color.</li>
        <li>Choose your lure shapes and sizes that let you match the hatch.</li>
        <li>Get fishing gear that appropriately size to the fish you re pursuing.</li>
        <li>If you are trolling, make sure your lures are swimming in a lifelike manner.</li>
        <li>Choose your fishing line wisely.</li>
        <li>Fish early, and fish late.</li>
        <li>Be conscious of the tides and currents.</li>
        <li>Always use new hooks and/or sharpen your old hooks.</li>
        <li>Use a scale to set your reel s drag.</li>
        <li>Do your pre-fishing research.</li>

      </ul>
      </div>';
            echo $this->render(APP_PATH . VIEWS . 'layoutAuth.html', $data);
        } else {
            // dacă nu e autentificat
            echo $this->render(APP_PATH . VIEWS . 'layout.html', $data);
        }
    }
}