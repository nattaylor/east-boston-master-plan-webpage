# East Boston Master Plan

This was converted in July 2018 by Nat Taylor from the PDF available at [bostonplans.org](http://www.bostonplans.org/planning/planning-initiatives/eastbostonmasterplan)

The goal is to make it more readable, especially on phones/tablets and as such the positioning of some of the figures has changed and some typographical errors are present due to the image-to-text conversion.

Please submit corrections to [nattaylor@gmail.com](mailto:nattaylor@gmail.com)

## TODO

* Translation: https://www.deepl.com/translator ? https://github.com/matheuss/google-translate-api
* ~Small images for speedy downloads~
* ~Section 3.5, 3.6 & 3.7~
* ~Responsive Images with click through to full res~
* ~Build script~

## Build Notes


```
pandoc --toc -H head.html --css style.css -s ch0.md ch1.md ch2.md ch4.md acknowledgements.md -o index.html
```

## Process

1. OCR with Tesseract
2. Screenshot & caption all the figures
3. Manually format in Markdown
4. Spellcheck Markdown in MSWord
5. Build with `pandoc` and post-process with PHP
