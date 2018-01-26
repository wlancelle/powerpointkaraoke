# powerpointkaraoke
slideshow of images for powerpoint karaoke
print random images in "corporate_slide", and print random image in "whatever_slide" directorys

# convert odp to pdf
libreoffice --headless --convert-to pdf fichier.odp

# convert pdf to png
convert -density 150 -quality 100 -sharpen 0x1.0 001.pdf 001-%04d.png

# compress
for file in $(ls *.png); do convert -verbose -strip -interlace Plane -gaussian-blur 0.05 -quality 100% ${file} ${file/.png}.jpg ; done
