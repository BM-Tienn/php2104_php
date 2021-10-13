
<h3>Route first</h3>
<p style="color:red">Hello. My name is Phuong!</p>

<hr>

<h3>Route parameters + Route name</h3>

<ul>
    <li><a href="{{ route ('param', ['id' => 1]) }}">Parameter 1</a></li>
    <li><a href="{{ route ('param', ['id' => 2])}}">Parameter 2</a></li>
    <li><a href="{{ route ('param', ['id' => 3])}}">Parameter 3</a></li>    
    <li><a href="{{ route ('param', ['id' => 4])}}">Parameter 4</a></li>    
</ul>

<hr>

<h3>Route conditional 'where'</h3>
<ul>
    <li><a href="/person/1">Ms.Lisa's baby</a></li>
    <li><a href="/person/4">Mr.Peter's baby<a></li>
    <li><a href="/person/age">Mr.Leo's baby</a> //ex:age = string -> flase</li>     
    <li><a href="/person/5">Ms.LiLi's baby</a></li>    
</ul>

<hr>

<h3>Route group</h3>
    <a href="/admin/add">Add product</a><br>
    <a href="/admin/edit">Edit product</a><br>
    <a href="/admin/delete">Delete product</a><br>
