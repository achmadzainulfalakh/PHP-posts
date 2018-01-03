<?php
function GetPosts()
{
	global $conn;
	$sql="select * from posts";
	$result = $conn->query($sql);
	return $result;
}
function GetPost($id)
{
	$id=htmlentities($id);
	global $conn;
	$sql="select * from posts where id='$id'";
	$result = $conn->query($sql);
	return $result;
}
function DeletePost($id)
{
	$id=htmlentities($id);
	global $conn;
	$sql="delete from posts where id='$id'";
	$result = $conn->query($sql);
	return $result;
}
function InsertPost($featuredimg,$altimg,$title,$content,$publisher)
{
	$featuredimg=htmlentities($featuredimg);
	$altimg=htmlentities($altimg);
	$title=htmlentities($title);
	$content=htmlentities($content);
	$publisher=htmlentities($publisher);
	global $conn;
	$sql="insert into posts values(null,'$featuredimg','$altimg','$title','$content',null,'$publisher')";
	$result = $conn->query($sql);
	return $result;
}
function UpdatePost($id,$featuredimg,$altimg,$title,$content,$publisher)
{
	$id=htmlentities($id);
	$featuredimg=htmlentities($featuredimg);
	$altimg=htmlentities($altimg);
	$title=htmlentities($title);
	$content=htmlentities($content);
	$publisher=htmlentities($publisher);
	global $conn;
	$sql="update posts set featuredimg='$featuredimg',altimg='$altimg',title='$title',content='$content',publisher='$publisher' where id='$id'";
	$result = $conn->query($sql);
	return $result;
}