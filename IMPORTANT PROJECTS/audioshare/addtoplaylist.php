<?php
ERROR_REPORTING(E_PARSE);
mysql_connect("localhost","root","");
mysql_select_db("audioshare");
$id=$_GET['id'];
$e=$_GET['email'];
if($e==NULL)
{
echo "Sorry Log in First";
}
else
{
$find=mysql_query("select * from playlist where email='$e' and id=$id ");
if(mysql_fetch_array($find))
{
echo "Song already on playlist";
}
else
{
$result=mysql_query("insert into playlist(email,id) values ('$e',$id) ");
}
$extract=mysql_query("select id from playlist where email='$e'");

if($_GET['valid']==1)
{
?>
			<table>
			<?php
			ERROR_REPORTING(E_PARSE);
			while($r=mysql_fetch_array($extract)):
			$check=mysql_query(" select * from audio where id=$r[0] ");
			$row=mysql_fetch_array($check);
			?>
              

				<tr>
					<td class="obj1"> <a href="playdemo.php?valid=no&id=<?php echo $row['id']?>"><img src="uploads/<?php echo $row['cover']?>" width="100px" height="100px"/> </a> </br>
					</td>
					<td class="obj1"> 
					</br>TITLE: <?php echo $row['title'];?>
					</br>ARTIST:<?php echo $row['artist'];?>
					</br>GENRE:<?php echo $row['audio_type'];?>
					</br>LIKES:<?php echo $row['likes'];?>
					</br>VIEWS:<?php echo $row['views'];?>
					</td>
				</tr>
			
			<?php
				endwhile;?>
			</table >
<?php
}
}
?>
