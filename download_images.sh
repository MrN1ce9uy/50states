#!/bin/bash

imgdir=/mypool/sambashare/john/software_dev/50_states/images
urllist=/mypool/sambashare/john/software_dev/50_states/50_states_image_links.txt

mkdir $imgdir

while read p;
do
	wget $p -P $imgdir
done < $urllist
echo "Finished downloading"
