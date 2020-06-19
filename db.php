<?php
echo ($connection = mysqli_connect('localhost', 'root', '', 'loginapp')) ? "we are cogagagnnected" : 'Database connection failed';
