<form action="/newpost" method="post">
@csrf
 名前: <input type="text" name="name" />
 投稿: <input type="text" name="contents" />
 <input type="submit" />
</form>
<a href="/layout">Home</a>