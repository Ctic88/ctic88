<?php

class HistoryController extends AppController
{
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        $data['title'] = 'History';
        $data['mainContent'] = '<h2>History</h2>


<h3>Fishing Tools from the Mesolithic and Neolithic Period</h3>

<p>Fishing is an ancient practice that dates back to at least the beginning of the Upper Paleolithic period, about 40,000 years ago. Isotopic analysis of the remains of Tianyuan man, a 40,000-year-old modern human from eastern Asia, has shown that he regularly consumed freshwater fish.</p>

<p>Archaeological features such as shell middens, discarded fish bones, and cave paintings indicate that seafood was important for survival and consumed in significant quantities. Fishing in Africa is evident very early in human history. Neanderthals were fishing by about 200,000 BC. People may have developed basketry for fish traps, using spinning and early forms of knitting to make fishing nets, enabling them to catch more fish.</p>

<p>During this period, most people lived a hunter-gatherer lifestyle and were constantly on the move. However, where there are early examples of permanent settlements—though not necessarily permanently occupied—such as those at Lepenski Vir, they are almost always associated with fishing as a major source of food.</p>

<h3>Trawling</h3>

<p>The British dogger was an early type of sailing trawler from the 17th century, but the modern fishing trawler was developed in the 19th century at the English fishing port of Brixham. By the early 19th century, the fishers at Brixham needed to expand their fishing area further than ever before due to the ongoing depletion of fish stocks in the overfished waters of South Devon.</p>

<p>The Brixham trawler that evolved there had a sleek build and a tall gaff rig, which gave the vessel enough speed to make long-distance trips out to the fishing grounds in the ocean. These vessels were also sufficiently robust to tow large trawls in deep water. The great trawling fleet that developed at Brixham earned the village the title of <em>Mother of Deep-Sea Fisheries.</em></p>


<p>This revolutionary design made large-scale trawling in the ocean possible for the first time, leading to a massive migration of fishers from the ports in the south of England to villages further north, such as Scarborough, Hull, Grimsby, Harwich, and Yarmouth, which provided access to the large fishing grounds in the Atlantic Ocean.</p>

<p>The small village of Grimsby grew to become the largest fishing port in the world by the mid-19th century. An Act of Parliament was first obtained in 1796 to authorize the construction of new quays and the dredging of the Haven to make it deeper. It was only in 1846, with the rapid expansion of the fishing industry, that the Grimsby Dock Company was formed. The foundation stone for the Royal Dock was laid by Albert, the Prince Consort, in 1849. Covering 25 acres (10 ha), the dock was formally opened by Queen Victoria in 1854 as the first modern fishing port.</p>

<p>The elegant Brixham trawler influenced fishing fleets worldwide. By the end of the 19th century, over 3,000 fishing trawlers were in commission in Britain, with almost 1,000 at Grimsby. These trawlers were sold across Europe, including to fishers from the Netherlands and Scandinavia. Twelve trawlers formed the nucleus of the German fishing fleet.</p>

<h3>Steam-Powered Fishing Boats</h3>

<p>The earliest steam-powered fishing boats first appeared in the 1870s and used trawl systems, as well as lines and drift nets. These boats were typically 80–90 feet (24–27 m) long, with a beam of around 20 feet (6 m). They weighed 40–50 tons and traveled at speeds of 9–11 knots (17–20 km/h; 10–13 mph). David Allen designed and built the earliest purpose-built fishing vessels in Leith, Scotland, in March 1875, when he converted a drifter to steam power. In 1877, he built the world s first screw-propelled steam trawler.</p>

<p>Steam trawlers were introduced at Grimsby and Hull in the 1880s. By 1890, an estimated 20,000 men worked in the North Sea fishing industry. The steam drifter was not used in the herring fishery until 1897. The last sailing fishing trawler was built in 1925 in Grimsby. Trawler designs evolved as power sources shifted from sail to coal-fired steam by World War I and later to diesel and turbines by the end of World War II.</p>

<h3>Technological Advancements</h3>

<p>In 1931, Laurie Jarelainen invented the first powered drum, a circular device set on the side of the boat that drew in fishing nets. Since World War II, radio navigation aids and fish finders have been widely used.</p>

<p>The first trawlers fished over the side rather than over the stern. The first purpose-built stern trawler, <em>Fairtry</em>, was built in 1953 in Aberdeen, Scotland. This ship was much larger than previous trawlers and ushered in the era of the super trawler. As it pulled its nets over the stern, it could lift much larger hauls—up to 60 tons. This design laid the foundation for the expansion of super trawlers worldwide in the following decades.</p>';
        $data['asideContent'] = '<div>
        <h3>A Brief History of Fishing</h3>
        <ul>
            <li>Fishing dates back over 40,000 years.</li>
            <li>Ancient Egyptians used nets and harpoons.</li>
            <li>Romans developed early fishing techniques.</li>
            <li>Medieval Europe saw the rise of fish farming.</li>
            <li>Industrialization brought commercial fishing.</li>
            <li>Modern rods and reels emerged in the 19th century.</li>
            <li>Echo-sounding tech improved fishing in the 20th century.</li>
            <li>Overfishing became a concern in the late 20th century.</li>
            <li>Today, sustainable fishing practices are promoted.</li>
        </ul>
    </div>';


        // Start the session and check if the user is authenticated
        session_start();
        if (isset($_SESSION['user'])) {
            $data['privateMainContent'] = '<h2>History</h2>


<h3>Fishing Tools from the Mesolithic and Neolithic Period</h3>

<p>Fishing is an ancient practice that dates back to at least the beginning of the Upper Paleolithic period, about 40,000 years ago. Isotopic analysis of the remains of Tianyuan man, a 40,000-year-old modern human from eastern Asia, has shown that he regularly consumed freshwater fish.</p>

<p>Archaeological features such as shell middens, discarded fish bones, and cave paintings indicate that seafood was important for survival and consumed in significant quantities. Fishing in Africa is evident very early in human history. Neanderthals were fishing by about 200,000 BC. People may have developed basketry for fish traps, using spinning and early forms of knitting to make fishing nets, enabling them to catch more fish.</p>

<p>During this period, most people lived a hunter-gatherer lifestyle and were constantly on the move. However, where there are early examples of permanent settlements—though not necessarily permanently occupied—such as those at Lepenski Vir, they are almost always associated with fishing as a major source of food.</p>

<h3>Trawling</h3>

<p>The British dogger was an early type of sailing trawler from the 17th century, but the modern fishing trawler was developed in the 19th century at the English fishing port of Brixham. By the early 19th century, the fishers at Brixham needed to expand their fishing area further than ever before due to the ongoing depletion of fish stocks in the overfished waters of South Devon.</p>

<p>The Brixham trawler that evolved there had a sleek build and a tall gaff rig, which gave the vessel enough speed to make long-distance trips out to the fishing grounds in the ocean. These vessels were also sufficiently robust to tow large trawls in deep water. The great trawling fleet that developed at Brixham earned the village the title of <em>Mother of Deep-Sea Fisheries.</em></p>


<p>This revolutionary design made large-scale trawling in the ocean possible for the first time, leading to a massive migration of fishers from the ports in the south of England to villages further north, such as Scarborough, Hull, Grimsby, Harwich, and Yarmouth, which provided access to the large fishing grounds in the Atlantic Ocean.</p>

<p>The small village of Grimsby grew to become the largest fishing port in the world by the mid-19th century. An Act of Parliament was first obtained in 1796 to authorize the construction of new quays and the dredging of the Haven to make it deeper. It was only in 1846, with the rapid expansion of the fishing industry, that the Grimsby Dock Company was formed. The foundation stone for the Royal Dock was laid by Albert, the Prince Consort, in 1849. Covering 25 acres (10 ha), the dock was formally opened by Queen Victoria in 1854 as the first modern fishing port.</p>

<p>The elegant Brixham trawler influenced fishing fleets worldwide. By the end of the 19th century, over 3,000 fishing trawlers were in commission in Britain, with almost 1,000 at Grimsby. These trawlers were sold across Europe, including to fishers from the Netherlands and Scandinavia. Twelve trawlers formed the nucleus of the German fishing fleet.</p>

<h3>Steam-Powered Fishing Boats</h3>

<p>The earliest steam-powered fishing boats first appeared in the 1870s and used trawl systems, as well as lines and drift nets. These boats were typically 80–90 feet (24–27 m) long, with a beam of around 20 feet (6 m). They weighed 40–50 tons and traveled at speeds of 9–11 knots (17–20 km/h; 10–13 mph). David Allen designed and built the earliest purpose-built fishing vessels in Leith, Scotland, in March 1875, when he converted a drifter to steam power. In 1877, he built the world s first screw-propelled steam trawler.</p>

<p>Steam trawlers were introduced at Grimsby and Hull in the 1880s. By 1890, an estimated 20,000 men worked in the North Sea fishing industry. The steam drifter was not used in the herring fishery until 1897. The last sailing fishing trawler was built in 1925 in Grimsby. Trawler designs evolved as power sources shifted from sail to coal-fired steam by World War I and later to diesel and turbines by the end of World War II.</p>

<h3>Technological Advancements</h3>

<p>In 1931, Laurie Jarelainen invented the first powered drum, a circular device set on the side of the boat that drew in fishing nets. Since World War II, radio navigation aids and fish finders have been widely used.</p>

<p>The first trawlers fished over the side rather than over the stern. The first purpose-built stern trawler, <em>Fairtry</em>, was built in 1953 in Aberdeen, Scotland. This ship was much larger than previous trawlers and ushered in the era of the super trawler. As it pulled its nets over the stern, it could lift much larger hauls—up to 60 tons. This design laid the foundation for the expansion of super trawlers worldwide in the following decades.</p>';

            $data['asideContent'] = '<div>
<h3>A Brief History of Fishing</h3>
<ul>
    <li>Fishing dates back over 40,000 years.</li>
    <li>Ancient Egyptians used nets and harpoons.</li>
    <li>Romans developed early fishing techniques.</li>
    <li>Medieval Europe saw the rise of fish farming.</li>
    <li>Industrialization brought commercial fishing.</li>
    <li>Modern rods and reels emerged in the 19th century.</li>
    <li>Echo-sounding tech improved fishing in the 20th century.</li>
    <li>Overfishing became a concern in the late 20th century.</li>
    <li>Today, sustainable fishing practices are promoted.</li>
</ul>
</div>';


            echo $this->render(APP_PATH . VIEWS . 'layoutAuth.html', $data);
        } else {
            // If the user is not authenticated
            echo $this->render(APP_PATH . VIEWS . 'layout.html', $data);
        }
    }
}
