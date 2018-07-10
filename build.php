<?php
	
	$html = shell_exec('pandoc --toc -H head.html --css style.css -s ch0.md ch1.md ch2.md ch3.md ch4.md acknowledgements.md -t html');

	file_put_contents("index.html", preg_replace("/<figure>\n<img src=\"(.*?)\.jpg\" alt=\"(.*?)\" \/>.*?<\/figure>/ms", "<figure><a href=\"$1.jpg\"><img src=\"$1_md.jpg\" srcset=\"$1_sm.jpg 320w, $1_md.jpg 640w\" sizes=\"(max-width: 480px) 320px, (max-width: 4000px) 640px, 640px\" alt=\"$2\" /><figcaption>$2</figcaption></a></figure>", $html));


/*

for i in *.png; do convert $i ${i%.*}.jpg; convert -adaptive-resize 320x320 -quality 60 $i ${i%.*}_sm.jpg; convert -adaptive-resize 640x640 -quality 90 $i ${i%.*}_md.jpg; done

<figure>
<img src="images/1-02.jpg" alt="Chelsea Creek: maritime industrial character" /><figcaption>Chelsea Creek: maritime industrial character</figcaption>
</figure>

<figure><a href="$1.jpg"><img src="$1.jpg" srcset="$1_sm.jpg 320w, $1_640.jpg 640w" sizes="(max-width: 320px) 320px, 640px" alt="$2" /><figcaption>$2</figcaption></a></figure>



*/