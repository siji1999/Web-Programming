//InsertBooks.php
&lt;!DOCTYPE HTML&gt;
&lt;html&gt;
&lt;body bgcolor=&quot;87ceeb&quot;&gt;
&lt;center&gt;&lt;h2&gt;Simple Library Management System&lt;/h2&gt;&lt;/center&gt;
&lt;br&gt;

&lt;?php
include(&quot;DBConnection.php&quot;);

$isbn=$_POST[&quot;isbn&quot;];
$title=$_POST[&quot;title&quot;];
$author=$_POST[&quot;author&quot;];
$edition=$_POST[&quot;edition&quot;];
$publication=$_POST[&quot;publication&quot;];

$query = &quot;insert into book_info(isbn,title,author,edition,publication)
values(&#39;$isbn&#39;,&#39;$title&#39;,&#39;$author&#39;,&#39;$edition&#39;,&#39;$publication&#39;)&quot;; //Insert query to add book details into the
book_info table
$result = mysqli_query($db,$query);

?&gt;

&lt;h3&gt; Book information is inserted successfully &lt;/h3&gt;

&lt;a href=&quot;SearchBooks.php&quot;&gt; To search for the Book information click here &lt;/a&gt;

&lt;/body&gt;
&lt;/html&gt;