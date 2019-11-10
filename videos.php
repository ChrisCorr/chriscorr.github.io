<?php

<?php

        class Trailer {
            // Creating some properties (variables tied to an object)
            public $link;
            public $thumbnail;
            public $title;
            public $genre;
            
            // Assigning the values
            public function __construct($link, $thumbnail, $title, &genre) {
              $this->link = $link;
              $this->thumbnail = $thumbnail;
              $this->title = $title;
			  $this->genre = $genre;
				
			}
          
        // Creating a new trailer
        $me = new Trailer('https://www.youtube.com/watch?v=0JcLKbI33vY?autoplay=1', 'img/game1.jpg', 'Spikes Revenge', 'Side-scroller');
		$me = new Trailer('https://www.youtube.com/watch?v=_AkUrrminlg?autoplay=1', 'img/game2.jpg', 'Cursed Treasure', 'Tower Defense');
		$me = new Trailer('https://www.youtube.com/embed/aCEIQLBE1nw?autoplay=1', 'img/game3.jpg', 'Gemini Strike', 'Shoot em up');
		
        
?>