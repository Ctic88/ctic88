<?php

class HomeController extends AppController
{
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {

        $data['title'] = 'Home page';
        $data['mainContent'] =
            '<p>     
        <div class="container mt-5">
        <div class="row">
          <main class="col-12">
              <div class="text-center">
                  <h1>Types of fishing:</h1>
              </div>
<div class="row d-flex justify-content-evenly">
    <!-- Ordered List Section -->
    <div class="col-12 col-md-6 border border-3 rounded p-3 mt-3">
        <ul>
            <li><strong>Angling</strong> – Using a hook and line, usually with bait and sinkers.</li>
            <li><strong>Bank Fishing</strong> – Fishing from a riverbank or shoreline.</li>
            <li><strong>Bottom Fishing</strong> – Fishing near the seabed for groundfish.</li>
            <li><strong>Casting</strong> – Using a fishing rod to throw a line into the water.</li>
            <li><strong>Chartered Fishing</strong> – Fishing on a hired boat, with or without a guide.</li>
            <li><strong>Commercial Fishing</strong> – Fishing for profit, regulated by authorities.</li>
            <li><strong>Droplining</strong> – Dropping a long fishing line straight down with multiple hooks.</li>
            <li><strong>Fly Fishing</strong> – Using artificial flies as bait, effective for trout and salmon.</li>
            <li><strong>Freshwater Fishing</strong> – Fishing in lakes and rivers.</li>
            <li><strong>Hand-Gathering</strong> – Catching fish or shellfish by hand.</li>
            <li><strong>Handlining</strong> – Fishing with a single line held in hand.</li>
            <li><strong>Ice Fishing</strong> – Fishing through holes in frozen water bodies.</li>
            <li><strong>Jigging</strong> – Using a jig (weighted hook) to attract fish.</li>
            <li><strong>Kayak Fishing</strong> – Fishing from a kayak with specialized equipment.</li>
            <li><strong>Kite Fishing</strong> – Using a kite to troll a lure through the water.</li>
            <li><strong>Longlining</strong> – Using a long fishing line with many baited hooks.</li>
            <li><strong>Netting</strong> – Using nets to capture multiple fish at once.</li>
            <li><strong>Noodling</strong> – Hand-fishing for catfish, often risky.</li>
            <li><strong>Pitch Fishing</strong> – Casting a line at a lower angle to enter water quietly.</li>
            <li><strong>Recreational Fishing</strong> – Fishing for fun, using various techniques.</li>
            <li><strong>Remote Control Fishing</strong> – Using a floating drone to fish.</li>
            <li><strong>Rock Fishing</strong> – Fishing from rocky shores or cliffs, considered dangerous.</li>
            <li><strong>Saltwater Fishing</strong> – Fishing in ocean waters.</li>
            <li><strong>Slabbing</strong> – Using a flat lead lure to catch bass.</li>
            <li><strong>Spearfishing</strong> – Catching fish with spears, harpoons, or spearguns.</li>
            <li><strong>Sportfishing</strong> – Competitive fishing for the biggest or most fish.</li>
            <li><strong>Surfcasting</strong> – Casting a line from a saltwater beach.</li>
            <li><strong>Tenkara Fishing</strong> – Japanese fly fishing using a simple pole and line.</li>
            <li><strong>Trapping</strong> – Using baited cages to catch fish like crabs and lobsters.</li>
            <li><strong>Trawling</strong> – Dragging a large net behind a slow-moving boat.</li>
            <li><strong>Trolling</strong> – Pulling baited lines through the water from a moving boat.</li>
            <li><strong>Trotlining</strong> – Suspending multiple baited hooks horizontally in the water.</li>
        </ul>
    </div>

    <!-- Image Section -->
    <div class="col-12 col-md-6 d-flex flex-column align-items-center mt-3">
        <img src="myApp/img/4.jpg" class="img-fluid border border-2 rounded mb-2" alt="Fishing Image 1">
        <img src="myApp/img/5.jpg" class="img-fluid border border-2 rounded mb-2" alt="Fishing Image 2">
        <img src="myApp/img/6.jpg" class="img-fluid border border-2 rounded mb-2" alt="Fishing Image 3">
        <img src="myApp/img/7.jpg" class="img-fluid border border-2 rounded mb-2" alt="Fishing Image 4">
        <img src="myApp/img/8.jpg" class="img-fluid border border-2 rounded mb-2" alt="Fishing Image 5">
        <img src="myApp/img/9.jpg" class="img-fluid border border-2 rounded mb-2" alt="Fishing Image 6">
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


        // dacă userul e autentificat
        session_start();
        if (isset($_SESSION['user'])) {
            $data['privateMainContent'] =
                '<p>     
        <div class="container mt-5">
        <div class="row">
          <main class="col-12">
              <div class="text-center">
                  <h1>Types of fishing:</h1>
              </div>
<div class="row d-flex justify-content-evenly">
    <!-- Ordered List Section -->
    <div class="col-12 col-md-6 border border-3 rounded p-3 mt-3">
        <ul>
            <li><strong>Angling</strong> – Using a hook and line, usually with bait and sinkers.</li>
            <li><strong>Bank Fishing</strong> – Fishing from a riverbank or shoreline.</li>
            <li><strong>Bottom Fishing</strong> – Fishing near the seabed for groundfish.</li>
            <li><strong>Casting</strong> – Using a fishing rod to throw a line into the water.</li>
            <li><strong>Chartered Fishing</strong> – Fishing on a hired boat, with or without a guide.</li>
            <li><strong>Commercial Fishing</strong> – Fishing for profit, regulated by authorities.</li>
            <li><strong>Droplining</strong> – Dropping a long fishing line straight down with multiple hooks.</li>
            <li><strong>Fly Fishing</strong> – Using artificial flies as bait, effective for trout and salmon.</li>
            <li><strong>Freshwater Fishing</strong> – Fishing in lakes and rivers.</li>
            <li><strong>Hand-Gathering</strong> – Catching fish or shellfish by hand.</li>
            <li><strong>Handlining</strong> – Fishing with a single line held in hand.</li>
            <li><strong>Ice Fishing</strong> – Fishing through holes in frozen water bodies.</li>
            <li><strong>Jigging</strong> – Using a jig (weighted hook) to attract fish.</li>
            <li><strong>Kayak Fishing</strong> – Fishing from a kayak with specialized equipment.</li>
            <li><strong>Kite Fishing</strong> – Using a kite to troll a lure through the water.</li>
            <li><strong>Longlining</strong> – Using a long fishing line with many baited hooks.</li>
            <li><strong>Netting</strong> – Using nets to capture multiple fish at once.</li>
            <li><strong>Noodling</strong> – Hand-fishing for catfish, often risky.</li>
            <li><strong>Pitch Fishing</strong> – Casting a line at a lower angle to enter water quietly.</li>
            <li><strong>Recreational Fishing</strong> – Fishing for fun, using various techniques.</li>
            <li><strong>Remote Control Fishing</strong> – Using a floating drone to fish.</li>
            <li><strong>Rock Fishing</strong> – Fishing from rocky shores or cliffs, considered dangerous.</li>
            <li><strong>Saltwater Fishing</strong> – Fishing in ocean waters.</li>
            <li><strong>Slabbing</strong> – Using a flat lead lure to catch bass.</li>
            <li><strong>Spearfishing</strong> – Catching fish with spears, harpoons, or spearguns.</li>
            <li><strong>Sportfishing</strong> – Competitive fishing for the biggest or most fish.</li>
            <li><strong>Surfcasting</strong> – Casting a line from a saltwater beach.</li>
            <li><strong>Tenkara Fishing</strong> – Japanese fly fishing using a simple pole and line.</li>
            <li><strong>Trapping</strong> – Using baited cages to catch fish like crabs and lobsters.</li>
            <li><strong>Trawling</strong> – Dragging a large net behind a slow-moving boat.</li>
            <li><strong>Trolling</strong> – Pulling baited lines through the water from a moving boat.</li>
            <li><strong>Trotlining</strong> – Suspending multiple baited hooks horizontally in the water.</li>
        </ul>
    </div>

    <!-- Image Section -->
    <div class="col-12 col-md-6 d-flex flex-column align-items-center mt-3">
        <img src="myApp/img/4.jpg" class="img-fluid border border-2 rounded mb-2" alt="Fishing Image 1">
        <img src="myApp/img/5.jpg" class="img-fluid border border-2 rounded mb-2" alt="Fishing Image 2">
        <img src="myApp/img/6.jpg" class="img-fluid border border-2 rounded mb-2" alt="Fishing Image 3">
        <img src="myApp/img/7.jpg" class="img-fluid border border-2 rounded mb-2" alt="Fishing Image 4">
        <img src="myApp/img/8.jpg" class="img-fluid border border-2 rounded mb-2" alt="Fishing Image 5">
        <img src="myApp/img/9.jpg" class="img-fluid border border-2 rounded mb-2" alt="Fishing Image 6">
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