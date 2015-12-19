#!/bin/bash
echo "Hello Shell"
path1=/home/ubuntu/codesrc/codefortest/
echo $path1
path2=$1
path3=${path1}${path2}
echo $path3
#cd /home/cse542/codeForanalys/IRcode-f/IRcode-f
cd $path3
/home/ubuntu/sonar-runner-2.4/bin/sonar-runner
mkdir SendToSonar
