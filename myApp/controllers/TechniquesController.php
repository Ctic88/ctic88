<?php

class TechniquesController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){

        $data['title'] = 'Techniques';
        $data['mainContent'] = '<div>
    <h1>Fishing Techniques</h1>
    <p>Fishing techniques are methods used to catch fish and other aquatic animals like mollusks and marine invertebrates. These techniques vary based on purpose, such as recreational, commercial, or artisanal fishing.</p>

    <h2>Types of Fishing Techniques</h2>

    <h3>Hand-Gathering</h3>
    <p>Hand-gathering involves collecting seafood with minimal equipment. Examples include:</p>
    <ul>
        <li><strong>Flounder Tramping:</strong> Capturing flounder by stepping on them.</li>
        <li><strong>Noodling:</strong> Catching catfish by placing a hand inside their hole.</li>
        <li><strong>Pearl Diving:</strong> Harvesting oysters by free-diving.</li>
        <li><strong>Trout Tickling:</strong> Catching trout by hand, an ancient British practice.</li>
    </ul>

    <h3>Spearfishing</h3>
    <p>Spearfishing is one of the oldest fishing techniques, using various tools such as:</p>
    <ul>
        <li><strong>Bowfishing:</strong> Using a bow and arrow to target fish.</li>
        <li><strong>Harpoons:</strong> Traditional barbed spears used for hunting marine animals.</li>
        <li><strong>Spearguns:</strong> Modern underwater spearing equipment.</li>
        <li><strong>Tridents:</strong> Three-pronged spears, often seen in mythology.</li>
    </ul>

    <h3>Netting</h3>
    <p>Netting involves using different types of fishing nets to catch fish. Common types include:</p>
    <ul>
        <li><strong>Cast Nets:</strong> Round nets thrown by hand that spread and sink.</li>
        <li><strong>Gillnets:</strong> Nets that trap fish by their gills.</li>
        <li><strong>Drift Nets:</strong> Unanchored nets used in coastal waters.</li>
        <li><strong>Seine Nets:</strong> Large nets dragged through the water, including purse seines and Danish seines.</li>
        <li><strong>Lift Nets:</strong> Nets submerged and lifted vertically to catch fish.</li>
    </ul>

    <h3>Angling</h3>
    <p>Angling is the practice of catching fish using a hook, line, and sometimes a fishing rod. Methods include:</p>
    <ul>
        <li><strong>Trolling:</strong> Dragging baited lines behind a slow-moving boat.</li>
        <li><strong>Jigging:</strong> Using a weighted lure with jerky motions.</li>
        <li><strong>Longlining:</strong> Deploying a long fishing line with multiple hooks.</li>
        <li><strong>Trotlining:</strong> Setting a long line with multiple hooks horizontally across a body of water.</li>
    </ul>

    <h3>Line Fishing</h3>
    <p>Fishing lines can be used with or without rods. Common methods include:</p>
    <ul>
        <li><strong>Handlining:</strong> Fishing with a single line held by hand.</li>
        <li><strong>Droplining:</strong> Deploying a vertical fishing line with baited hooks.</li>
        <li><strong>Slabbing:</strong> Using a flat metal lure to target fish.</li>
    </ul>

    <p>Each fishing technique has its own advantages and is suited for different environments and target species.</p>
    <h2>Angling with a Rod</h2>
    <p>Angling with fishing rods gives more control of the fishing line and allows the bait/lure to be launched much farther than hand-throwing can reach. The rod is usually fitted with a fishing reel which functions as a mechanism for storing, retrieving, and paying out the line. Floats may also be used and can function as bite indicators. The hook can be dressed with lures or baits.</p>
</div>';
   
$data['asideContent'] = '<div>
    <h3>Popular Fishing Techniques</h3>
    <ul>
        <li>Fly fishing – uses artificial flies on a lightweight rod.</li>
        <li>Bottom fishing – targets fish near the seabed.</li>
        <li>Trolling – drags baited lines behind a moving boat.</li>
        <li>Spin fishing – uses spinning reels and artificial lures.</li>
        <li>Ice fishing – drills holes in ice-covered waters.</li>
        <li>Spearfishing – catches fish using a spear or harpoon.</li>
        <li>Net fishing – involves casting or dragging nets.</li>
        <li>Handlining – a simple line and hook technique.</li>
    </ul>
</div>';
        
        // dacă userul e autentificat
        session_start();
        if(isset($_SESSION['user'])){
            $data['privateMainContent'] = '<div>
    <h1>Fishing Techniques</h1>
    <p>Fishing techniques are methods used to catch fish and other aquatic animals like mollusks and marine invertebrates. These techniques vary based on purpose, such as recreational, commercial, or artisanal fishing.</p>

    <h2>Types of Fishing Techniques</h2>

    <h3>Hand-Gathering</h3>
    <p>Hand-gathering involves collecting seafood with minimal equipment. Examples include:</p>
    <ul>
        <li><strong>Flounder Tramping:</strong> Capturing flounder by stepping on them.</li>
        <li><strong>Noodling:</strong> Catching catfish by placing a hand inside their hole.</li>
        <li><strong>Pearl Diving:</strong> Harvesting oysters by free-diving.</li>
        <li><strong>Trout Tickling:</strong> Catching trout by hand, an ancient British practice.</li>
    </ul>

    <h3>Spearfishing</h3>
    <p>Spearfishing is one of the oldest fishing techniques, using various tools such as:</p>
    <ul>
        <li><strong>Bowfishing:</strong> Using a bow and arrow to target fish.</li>
        <li><strong>Harpoons:</strong> Traditional barbed spears used for hunting marine animals.</li>
        <li><strong>Spearguns:</strong> Modern underwater spearing equipment.</li>
        <li><strong>Tridents:</strong> Three-pronged spears, often seen in mythology.</li>
    </ul>

    <h3>Netting</h3>
    <p>Netting involves using different types of fishing nets to catch fish. Common types include:</p>
    <ul>
        <li><strong>Cast Nets:</strong> Round nets thrown by hand that spread and sink.</li>
        <li><strong>Gillnets:</strong> Nets that trap fish by their gills.</li>
        <li><strong>Drift Nets:</strong> Unanchored nets used in coastal waters.</li>
        <li><strong>Seine Nets:</strong> Large nets dragged through the water, including purse seines and Danish seines.</li>
        <li><strong>Lift Nets:</strong> Nets submerged and lifted vertically to catch fish.</li>
    </ul>

    <h3>Angling</h3>
    <p>Angling is the practice of catching fish using a hook, line, and sometimes a fishing rod. Methods include:</p>
    <ul>
        <li><strong>Trolling:</strong> Dragging baited lines behind a slow-moving boat.</li>
        <li><strong>Jigging:</strong> Using a weighted lure with jerky motions.</li>
        <li><strong>Longlining:</strong> Deploying a long fishing line with multiple hooks.</li>
        <li><strong>Trotlining:</strong> Setting a long line with multiple hooks horizontally across a body of water.</li>
    </ul>

    <h3>Line Fishing</h3>
    <p>Fishing lines can be used with or without rods. Common methods include:</p>
    <ul>
        <li><strong>Handlining:</strong> Fishing with a single line held by hand.</li>
        <li><strong>Droplining:</strong> Deploying a vertical fishing line with baited hooks.</li>
        <li><strong>Slabbing:</strong> Using a flat metal lure to target fish.</li>
    </ul>

    <p>Each fishing technique has its own advantages and is suited for different environments and target species.</p>
    <h2>Angling with a Rod</h2>
    <p>Angling with fishing rods gives more control of the fishing line and allows the bait/lure to be launched much farther than hand-throwing can reach. The rod is usually fitted with a fishing reel which functions as a mechanism for storing, retrieving, and paying out the line. Floats may also be used and can function as bite indicators. The hook can be dressed with lures or baits.</p>
</div>';

$data['asideContent'] = '<div>
    <h3>Popular Fishing Techniques</h3>
    <ul>
        <li>Fly fishing – uses artificial flies on a lightweight rod.</li>
        <li>Bottom fishing – targets fish near the seabed.</li>
        <li>Trolling – drags baited lines behind a moving boat.</li>
        <li>Spin fishing – uses spinning reels and artificial lures.</li>
        <li>Ice fishing – drills holes in ice-covered waters.</li>
        <li>Spearfishing – catches fish using a spear or harpoon.</li>
        <li>Net fishing – involves casting or dragging nets.</li>
        <li>Handlining – a simple line and hook technique.</li>
    </ul>
</div>';

            echo $this->render(APP_PATH.VIEWS.'layoutAuth.html', $data);
        }
        else {
                // dacă nu e autentificat
            echo $this->render(APP_PATH.VIEWS.'layout.html', $data);
        }        
    }
}