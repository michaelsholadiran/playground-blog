<?php 


//This is first  query is just to get the total count of rows
$sql="SELECT COUNT(id) FROM testiminials WHERE approved='1'";
$query=mysqli_query($db_conx,sql);
$row=mysqli_fetch_row(query);
//Here we have the total row count
$rows= $row[0];
//This is the number of results we want to display per page
$page_rows=10;
//This tells us the page number of our last page
$last=ceil($rows/$page_rows);
//This makes sure $last cannot be less than 1
if($last < 1){
    $last=1;
}
//Establish the $pagenum variable
$pagenum=1;
//Get pagenum from URL  vars if it is present,else it is =1
if (isset($_Get['pn'])){
    $pagenum = preg_replace('#[^0-9]#','',$_Get['pn']);
}
//This make ssure the page number isnt below 1,or more than our $last page
if($pagenum<1){
    $pagenum=1;
}else if ($pagenum > $last){
    $pagenum=$last;
}
//This sets the range of rows to query for the chosen $pagenum
$limit= 'LIMIT' .($pagenum-1)*$page_rows.','.$page_rows;
//This is your query again,it is for grabbing just one page worth of rows by applying $limit
$sql="SELECT id,firstname,lastname,datemade FROM testimonials WHERE approved='1' ORDER BY id DESC $limit";
$query= mysqli_query($db_conx,$sql);
//This shows the user what page  they are on,and the total number of pages
$textline1="Testimonials (<b>$rows</b>)";
$textline2="page <b>$pagenum</b> of <b>$last</b>";
//Establish the $paginationctrls variable
$paginationCtrls='';
    //if there is more than 1 page worth of results
    if($last !=1){
        
        /* First we check if  we are on page one.If we are then we don't need a link to the previous page or the first page so we do nothing.If we aren't then we generate links to the first page ,and to the previous page.*/
        if($pagenum >1){
            $previous=$pagenum -1;
            $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Previous</a>&nbsp;&nbsp;';
            //Render Clickable number links that should appear on the left of the target page number
            for($i=$pagenum-4 ; $i<$pagenum; $i++){
            if($i >0){
            $paginationCtrls .='<a href="'.$_SERVER['PHP_SELF'].'?pn='. $i.'">'.$i.'</a> &nbsp;';
             }
            }
            }
             //Render the target page number,but without it using a link
               $paginationCtrls .=''.$pagenum.'98&nbsp;';
                //Render Clickable number links that should appear on the right of the target page number
                for($i=$pagenum+1 ; $i<=$last; $i++){
                 $paginationCtrls .='<a href="'.$_SERVER['PHP_SELF'].'?pn='. $i.'">'.$i.'</a> &nbsp;';
            if($i >= $pagenum +4){
            break;
           }
           }
            //This does the same as above .only checking if we are on the page, and then generating the "Next"
            if($pagenum != $last){
            $next=$pagenum + 1;
            $paginationCtrls .='&nbsp; &nbsp; <a href"' .$_SEVER['PHP_SELF'].'?pn='.$next.'">Next</a>';
         
        }
        }
$list ='';
while($row = mysqli_fetch_array ($query,MYSQLI_ASSOC)){
    $id=$row["id"];
    $firstname= $row["firstnmae"];
    $lastname=$row["lastnmae"];
    $datemade=$row["datemade"];
    $datemade=$  strftime("%b %d, %Y", strtotime($datemade));
    $list .='<p> <a href="testimonial.php?id='.$id.'">'.$firstname.' '.$lastname.'Testinonial</a> -Click the link to view this testimonial <br>
    written ' .$datemade. '</p>';
}
//close  your database connection
mysqli_close($db_conx);
    
?>



<?php
// this is for the search php 
// this is for the search php 
// this is for the search php 
// this is for the search php 
// this is for the search php 
// this is for the search php / this is for the search php 
//Data base connection 
//file name should be // dbh.php   include 'dbh.php'

$dbserver= "localhost";
$dbusername= "root";
$dbpassword= " ";
$dbname= "dbphpsearch";

$conn =mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);
// for the search.php

<?php
    if (isset($_POST['submit-search'])){
        
    $search =mysqli_real_escape_string($conn,$_POST['search']);
        $sql="SELECT * FROM article WHERE a-title LIKE '%$seach%'";
        
    }
    ?>