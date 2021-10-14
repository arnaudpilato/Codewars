#!/bin/bash

countToTwenty() {
num=1

while [ $num -le 20 ]
do
  echo Count: $num
  ((num++))
done
}

countToTwenty
