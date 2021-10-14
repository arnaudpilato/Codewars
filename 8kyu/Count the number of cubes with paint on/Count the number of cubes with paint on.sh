if (( $1 != 0 ))

then

  echo 6 * $1 * $1 + 2 | bc

else

  echo 1 | bc
  
fi
