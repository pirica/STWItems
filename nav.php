<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #111;
}
#slideshow{
 overflow: hidden;
}
#slideshow figure{
 position: relative;
 width: 500%;
 height: 600px;
 margin: 0;
 left: 0;
 animation: 20s slider infinite;
}
#slideshow figure img{
 width: 20%;
 height: 600px;
 float: left;
 
}
@keyframes slider{
 0%{
 left: 0;
 }
 20%{
 left: 0;
 }
 25%{
 left: -100%;
 }
 45%{
 left: -100%;
 }
 50%{
 left: -200%;
 }
 70%{
 left: -200%;
 }
 100%{
 left: 0;
 }


</style>
<ul>
<li><a href="index.php">ARMI</a></li>
<li><a href="index.php">TRAPPOLE</a></li>
<li><a href="index.php">MATERIALI</a></li>
</ul>
<h1 style="text-align: center;color:red;">STWItems</h1>
<br/>
<h2 style="text-align: center;color:yellow;">BestSellers</h2>
<div id="slideshow">
<figure>
 <a href="http://157.90.150.166/STWItems/index.php#130"><img src="130.JPG"></a>
 <a href="http://157.90.150.166/STWItems/index.php#mats"><img src="mats.JPG"></a>
 <a href="http://157.90.150.166/STWItems/index.php#5random"><img src="random.jpg"></a>
</figure>