<?php
 include("cap.php");
 if(isset($_POST['but_shem']))
   {   	 $f=fopen("conf/shem/shem.txt","w+");
   	 fwrite($f,$_POST['shem']);
   	 fclose($f);
   }

  if(isset($_POST['but_file_scan']))
   {   	 if($_POST['file_scan']!="")
   	   {
   	    $f=fopen("conf/shem/filey.txt","a");
   	    fwrite($f,$_POST['file_scan']."\r\n");
   	    fclose($f);
   	   }
   }

  if(isset($_POST['but_dir_scan']))
   {
   	 if($_POST['dir_scan']!="")
   	   {
   	    $f=fopen("conf/shem/diry.txt","a");
   	    fwrite($f,$_POST['dir_scan']."\r\n");
   	    fclose($f);
   	   }
   }

  if(isset($_POST['but_file_no_scan']))
   {
   	 if($_POST['file_no_scan']!="")
   	   {
   	    $f=fopen("conf/shem/filen.txt","a");
   	    fwrite($f,$_POST['file_no_scan']."\r\n");
   	    fclose($f);
   	   }
   }

   if(isset($_POST['but_dir_no_scan']))
   {
   	 if($_POST['dir_no_scan']!="")
   	   {
   	    $f=fopen("conf/shem/dirn.txt","a");
   	    fwrite($f,$_POST['dir_no_scan']."\r\n");
   	    fclose($f);
   	   }
   }

   if(isset($_POST['but_type_file']))
   {
   	 if($_POST['type_file']!="")
   	   {
   	    $f=fopen("conf/type_file.txt","w+");
   	    fwrite($f,$_POST['type_file']);
   	    fclose($f);
   	   }
   }

 //�������� ������
 $shem_val=file("conf/shem/shem.txt");
 if($shem_val[0]==1)$check_shem1="checked";
 else $check_shem1="";

 if($shem_val[0]==2)$check_shem2="checked";
 else $check_shem2="";

 $file_type_file=file("conf/type_file.txt");

?>
<style>
#block
  {   font-family:"Times New Roman", "serif";
   font-size:10pt;
   color:#000040;
   font-weight:300;
   overflow:auto;
   width:70%;
   height:100px;
   background-color:#FFFFFF;
   padding:10px;
  }
 #block a
  {
   font-family:"Times New Roman", "serif";
   font-size:10pt;
   color:#000040;
   font-weight:300;

  }
</style>

<TABLE align=center bgcolor=#EBEBEB width=80% CELLPADDING=10 CELLSPACING=0 border=0>

<tr >
   <td><FONT COLOR="#408080" size=+1  >����������� ������</FONT> </td>
</tr>
<tr >
   <td>��� ����������� ������ ������������� ������� ���� ������ �� �����������. <b>��������!</b> ��� ������ ��������
   ������ web-���������, ����� ��� <b>html</b>, <b>php</b> � ��. ��� ��������� ����� � ����������� <b>txt</b>,
   ����� ������ ����� �������� � ������� ��������. <br>
    ��� �� ����� ���������� ����� � �������� � �������� ����������� ��� ��������� �� ������ ����� � ��������, ��� ����
   ���������� �� ����������.<br> ��� �������� ������ ��� �����: ���� � ��� ����������� �������������� �������, ������� ��������� �����������
   ��������� ����� ��� ���� ����� ��������, ���������� ������ ��������� ���������� (�������� ����� �� ���������)<br>
   ���� ������� � ����������� ������, ����� ����� ������ � ������ ������ � ��������� �� �������� � �����, � ������� ����� ������������ �����.<br>
   ���� �� ��������� (��� ���������) ����� �������, ����� �� ���� � ������ ������� �� ����!
    ��������� ��� ������ � ��������, ����� ������� (�������������� ��� ��������������) ������������.
    <b>��������!</b> �������� ����� ��������� ��� ����������� ������ /<br>
    ��������, � ��� ���� ������� �� �������� �� ������ http://���_����/scripts/script
�.�. � ����� �� �������� ����� ��������� ���� � ��������� ���������� ��� ������� ������ �� ������, ��������� ��� ��� ������,
�.�. ������ � ������ ����������� ��������� ���: scripts/script
��� ������, http://���_����/ �� ��������.
� ������� ���� �����. ��������, ���� ���� � �������� http://���_����/�������/pwl.txt �� �� ����� ������ ��������� ������ � ���� �������,
 �� ��� ���������� � ������ ���������, ������ ��� ������. ����� ������ ��� � ������ ����������� ������ ���: �������/pwl.txt

      </td>
</tr>
<form action="admin3.php?sel3=selected" method="post">


<tr >
   <td>
     ���� ������ �� ����������� (������� ����� ������ ��� ����� ����� �����������) <br>
    <input name="type_file" type="text" value="<? echo $file_type_file[0] ?>" size=85><br>
    <input type="submit" value="��������" name=but_type_file><br><br>


    �������� �����<br>
    <input name="shem" type="radio" value="1" <? echo $check_shem1 ?> >&nbsp;������������ ������ ����������� ������ � ���������<br>
    <input name="shem" type="radio" value="2" <? echo $check_shem2 ?> >&nbsp;������������ ������ ����������� ������ � ���������<br><br>
    <input type="submit" value="������� �����" name=but_shem> <br><br>

   <b>������ ��� ������, ���������� ������������.</b><br><br>
     <div id=block>
     <table>
     <?php
        $scan=array();
        $scan=file("conf/shem/filey.txt");
        $n=0;
        foreach($scan as $line)
          {
             $line=trim($line);          	 echo "<tr><td>$line</td><td>&nbsp;&nbsp;<a href=del.php?id=$n&type=filey>�������</a></td></tr>";
          	 $n++;
          }

      ?>
     </table>
     </div><br>
     <input name="file_scan" type="text" size=60>
     <input type="submit" value="��������" name=but_file_scan><br><br>

    <b>������ ��� ���������, ���������� ������������.</b><br><br>
     <div id=block>
     <table>
         <?php
        $scan=array();
        $scan=file("conf/shem/diry.txt");
        $n=0;
        foreach($scan as $line)
          {
             $line=trim($line);
          	 echo "<tr><td>$line</td><td>&nbsp;&nbsp;<a href=del.php?id=$n&type=diry>�������</a></td></tr>";
          	 $n++;
          }

      ?>
      </table>
     </div><br>
     <input name="dir_scan" type="text" size=60>
     <input type="submit" value="��������" name=but_dir_scan><br><br>

    <b>������ ��� ������, �� ���������� ������������.</b><br><br>
     <div id=block>
     <table>
        <?php
        $scan=array();
        $scan=file("conf/shem/filen.txt");
        $n=0;
        foreach($scan as $line)
          {
             $line=trim($line);
          	 echo "<tr><td>$line</td><td>&nbsp;&nbsp;<a href=del.php?id=$n&type=filen>�������</a></td></tr>";
          	 $n++;
          }

      ?>
      </table>
     </div><br>
     <input name="file_no_scan" type="text" size=60>
     <input type="submit" value="��������" name=but_file_no_scan><br><br>


     <b>������ ��� ���������, �� ���������� ������������.</b><br><br>
     <div id=block>
     <table >
      <?php
        $scan=array();
        $scan=file("conf/shem/dirn.txt");
        $n=0;
        foreach($scan as $line)
          {
             $line=trim($line);
          	 echo "<tr><td>$line</td><td>&nbsp;&nbsp;<a href=del.php?id=$n&type=dirn>�������</a></td></tr>";
          	 $n++;
          }

      ?>

     </table>
     </div><br>
     <input name="dir_no_scan" type="text" size=60>
     <input type="submit" value="��������" name=but_dir_no_scan><br><br>
   </td>
</tr>




</form>
</table>

</body>

</html>