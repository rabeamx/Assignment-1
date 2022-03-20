<?php

/**
 *  Result System - 01
 */

function result($mark){

    if( $mark >= 0 && $mark <= 32 ){
        echo "<h5 style = 'text-align:center; color:#FD1C03; margin-top:50px; font-family:montserrat;'>Letter Grade: F<br></h5>";
        echo "<h5 style = 'text-align:center; color:#FD1C03; margin-top:-20px; font-family:montserrat;'>& Grade Point: 0.00</h5>";
    } elseif ( $mark >= 33 && $mark <= 39 ) {
        echo "<h5 style = 'text-align:center; color:#6E0DD0; margin-top:50px; font-family:montserrat;'>Letter Grade: D<br> & Grade Point: 1.00</h5>";
    } elseif ( $mark >= 40 && $mark <= 49 ) {
        echo "<h5 style = 'text-align:center; color:#CC00FF; margin-top:50px; font-family:montserrat;'>Letter Grade: C<br> & Grade Point: 2.00</h5>";
    }
    elseif ( $mark >= 50 && $mark <= 59 ) {
        echo "<h5 style = 'text-align:center; color:#9D00FF; margin-top:50px; font-family:montserrat;'>Letter Grade: B<br> & Grade Point: 3.00</h5>";
    }
    elseif ( $mark >= 60 && $mark <= 69 ) {
        echo "<h5 style = 'text-align:center; color:#0033FF; margin-top:50px; font-family:montserrat;'>Letter Grade: A-<br> & Grade Point: 3.50</h5>";
    }
    elseif ( $mark >= 70 && $mark <= 79 ) {
        echo "<h5 style = 'text-align:center; color:#00FF55; margin-top:50px; font-family:montserrat;'>Letter Grade: A<br> & Grade Point: 4.00</h5>";
    }
    elseif ( $mark >= 80 && $mark <= 100 ) {
        echo "<h5 style = 'text-align:center; color:#FF00FF; margin-top:50px; font-family:montserrat;'>Letter Grade: A+<br> & Grade Point: 5.00</h5>";
    }
    else {
        echo "<h5 style = 'text-align:center; color:#FD1C03; margin-top:50px; font-family:montserrat;'>Not Found</h5>";
    }
}

?>