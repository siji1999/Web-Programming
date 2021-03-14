//DisplayBooks.php
&lt;!DOCTYPE HTML&gt;
&lt;html&gt;
&lt;body bgcolor=&quot;87ceeb&quot;&gt;
&lt;center&gt;&lt;h2&gt;Simple Library Management System&lt;/h2&gt;&lt;/center&gt;
&lt;br&gt;

&lt;?php
include(&quot;DBConnection.php&quot;);

$search = $_REQUEST[&quot;search&quot;];

$query = &quot;select ISBN,Title,Author,Edition,Publication from book_info where title like &#39;%$search%&#39;&quot;;
//search with a book name in the table book_info
$result = mysqli_query($db,$query);

if(mysqli_num_rows($result)&gt;0)if(mysqli_num_rows($result)&gt;0)

{
?&gt;

&lt;table border=&quot;2&quot; align=&quot;center&quot; cellpadding=&quot;5&quot; cellspacing=&quot;5&quot;&gt;

&lt;tr&gt;
&lt;th&gt; ISBN &lt;/th&gt;
&lt;th&gt; Title &lt;/th&gt;
&lt;th&gt; Author &lt;/th&gt;
&lt;th&gt; Edition &lt;/th&gt;
&lt;th&gt; Publication &lt;/th&gt;
&lt;/tr&gt;

&lt;?php while($row = mysqli_fetch_assoc($result))
{
?&gt;
&lt;tr&gt;
&lt;td&gt;&lt;?php echo $row[&quot;ISBN&quot;];?&gt; &lt;/td&gt;
&lt;td&gt;&lt;?php echo $row[&quot;Title&quot;];?&gt; &lt;/td&gt;
&lt;td&gt;&lt;?php echo $row[&quot;Author&quot;];?&gt; &lt;/td&gt;
&lt;td&gt;&lt;?php echo $row[&quot;Edition&quot;];?&gt; &lt;/td&gt;
&lt;td&gt;&lt;?php echo $row[&quot;Publication&quot;];?&gt; &lt;/td&gt;
&lt;/tr&gt;
&lt;?php
}
}
else
echo &quot;&lt;center&gt;No books found in the library by the name $search &lt;/center&gt;&quot; ;
?&gt;

&lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;
&lt;br&gt;