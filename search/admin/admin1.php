<?php
 include("cap.php");
 if(@$_POST['GO'])
  {
      $f=fopen("conf/mes.txt","w+");
      //���������
      fwrite($f,"0*���������*".$_POST['head']."\r\n");
      fwrite($f,"1*���� ���������*".$_POST['color_head']."\r\n");
      fwrite($f,"2*������ ���������*".$_POST['size_head']."\r\n");
      fwrite($f,"3*��� ���������*".$_POST['font_head']."\r\n");
      fwrite($f,"4*�������� ���������*".$_POST['width_head']."\r\n");

      //�����
      fwrite($f,"5*������ �����*".$_POST['size_form']."\r\n");
      fwrite($f,"6*������ ������*".$_POST['size_str']."\r\n");
      fwrite($f,"7*��� �����*".$_POST['fon']."\r\n");
      fwrite($f,"8*���� ������ �����*".$_POST['color_form']."\r\n");
      fwrite($f,"9*������ ������ �����*".$_POST['size_font_form']."\r\n");
      fwrite($f,"10*��� ������ �����*".$_POST['font_form']."\r\n");
      fwrite($f,"11*�������� ������ �����*".$_POST['width_form']."\r\n");
      fwrite($f,"12*���� ����� �����*".$_POST['line_color']."\r\n");
      fwrite($f,"13*������ ����� �����*".$_POST['line_size']."\r\n");
      fwrite($f,"14*��� ����� �����*".$_POST['border_form']."\r\n");
     //������
      fwrite($f,"15*������� �� ������*".$_POST['head_button']."\r\n");
      fwrite($f,"16*���� ������*".$_POST['color_button']."\r\n");
      fwrite($f,"17*���� ������ ������*".$_POST['color_font_button']."\r\n");
      fwrite($f,"18*������ ������ ������*".$_POST['size_font_button']."\r\n");
      fwrite($f,"19*��� ������ ������*".$_POST['font_font_button']."\r\n");
      fwrite($f,"20*�������� ������ ������*".$_POST['width_font_button']."\r\n");
      fwrite($f,"21*���� ����� ������*".$_POST['line_color_button']."\r\n");
      fwrite($f,"22*������ ����� ������*".$_POST['line_size_button']."\r\n");
      fwrite($f,"23*��� ����� ������*".$_POST['border_button']."\r\n");
      fwrite($f,"24*������������ �����*".$_POST['form_align']."\r\n");

      if(isset($_POST['search_panel'])) fwrite($f,"25*��������� �����*1");
      else fwrite($f,"25*��������� �����*0");

      fclose($f);
  }


//�������� ������---------------------------------------
$config=file("conf/mes.txt");
$n=0;
//�������
foreach($config as $line)
  {
 	$expl=explode("*", $line);
 	$conf[$n]=trim($expl[2]);
 	$n++;
  }


//����� ���������
//������ ���������
for($i=10,$n=0; $i<22; $i+=2,$n++)
 {
   if($conf[2]==$i) $sel_size_head[$n]="selected";
   else $sel_size_head[$n]="";

 }

 //��� ���������
 if($conf[3]=="normal") $sel_font_head[0]="selected";
 if($conf[3]=="italic") $sel_font_head[1]="selected";

 //�������� ���������
 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[4]==$i) $sel_width_head[$n]="selected";
   else $sel_width_head[$n]="";

 }


//����� �����

for($i=10,$n=0; $i<22; $i+=2,$n++)
 {
   if($conf[9]==$i) $sel_size_form[$n]="selected";
   else $sel_size_form[$n]="";

 }

 //��� ���������
 if($conf[10]=="normal") $sel_font_form[0]="selected";
 if($conf[10]=="italic") $sel_font_form[1]="selected";

 //�������� ���������
 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[11]==$i) $sel_width_form[$n]="selected";
   else $sel_width_form[$n]="";

 }

//����� �����
//��� �����
if($conf[14]=="none")$sel_border_form[0]="selected";
if($conf[14]=="dotted")$sel_border_form[1]="selected";
if($conf[14]=="dashed")$sel_border_form[2]="selected";
if($conf[14]=="solid")$sel_border_form[3]="selected";
if($conf[14]=="double")$sel_border_form[4]="selected";


//������ �����
for($i=0; $i<6; $i++)
 {
   if($conf[13]==$i) $sel_line_size[$i]="selected";
   else $sel_line_size[$i]="";

 }

//������������ �����
if($conf[24]=='left') $check_align_form[0]="checked";
if($conf[24]=='center') $check_align_form[1]="checked";
if($conf[24]=='right') $check_align_form[2]="checked";

//������

for($i=10,$n=0; $i<22; $i+=2,$n++)
 {
   if($conf[18]==$i) $sel_size_font_button[$n]="selected";
   else $sel_size_font_button[$n]="";

 }

 //��� ���������
 if($conf[19]=="normal") $sel_font_button[0]="selected";
 if($conf[19]=="italic") $sel_font_button[1]="selected";

 //�������� ���������
 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[20]==$i) $sel_width_font_button[$n]="selected";
   else $sel_width_font_button[$n]="";

 }

//����� ��� ������
//��� �����
if($conf[23]=="none")$sel_border_button[0]="selected";
if($conf[23]=="dotted")$sel_border_button[1]="selected";
if($conf[23]=="dashed")$sel_border_button[2]="selected";
if($conf[23]=="solid")$sel_border_button[3]="selected";
if($conf[23]=="double")$sel_border_button[4]="selected";

//������ �����
for($i=0; $i<6; $i++)
 {
   if($conf[22]==$i) $sel_line_size_button[$i]="selected";
   else $sel_line_size_button[$i]="";

 }

//��������� �����
if($conf[25]==1)$check_search_panel="checked";
else $check_search_panel="";


?>
<style>
   #search_button {
  	   color:<?echo $conf[17]?>;
       font-family:"Times New Roman", "serif";
 	   font-size:<?echo $conf[18]?>pt;
 	   font-weight:<?echo $conf[20]?>;
 	   font-style:<?echo $conf[19]?>;
 	   background-color:<?echo $conf[16]?>;
       border-style:<?echo $conf[23]?>;
       border-width:<?echo $conf[22]?>px;
       border-color:<?echo $conf[21]?>;
      }
    #s_search {
  	   color:<?echo $conf[8]?>;
       font-family:"Times New Roman", "serif";
 	   font-size:<?echo $conf[9]?>pt;
 	   font-weight:<?echo $conf[11]?>;
 	   font-style:<?echo $conf[10]?>;
 	   background-color:<?echo $conf[7]?>;
       padding:5px;
       width:<?echo $conf[5]?>px;
       border-style:<?echo $conf[14]?>;
       border-width:<?echo $conf[13]?>px;
       border-color:<?echo $conf[12]?>;
       text-align:left;
      }

    #head_search {
  	   color:<?echo $conf[1]?>;
       font-family:"Times New Roman", "serif";
 	   font-size:<?echo $conf[2]?>pt;
 	   font-weight:<?echo $conf[4]?>;
 	   font-style:<?echo $conf[3]?>;
       text-align:left;

      }

</style>
<script language='JavaScript1.1' type='text/javascript'>
<?php
echo "
<!--

  function win(par)
  {

    var obj=par;
    mainwin=window.open('rgb.html','',
   'Width=550, height=500,left=100,top=100,status=yes,toolbar=no,menubar=no,scrollbars=yes,resizable=yes');

  }

function ins(i)
 {
      var val=document.search.quit.value;
      var p1=";  if ($conf[0]!="") echo "\"<div id=head_search>$conf[0]</div>\"+";
      echo  "\"<input name='quit' type='text' ID='quit' size=$conf[6]>&nbsp;&nbsp;\"+
        \"<input type='button' value=$conf[15] id=search_button>&nbsp;&nbsp;\"+
        \"<a href='javascript:ins(2)'><img src='/search/img/down.png' alt='��������� �����' border=0></a>\";


      var p2=";if ($conf[0]!="") echo "\"<div id=head_search>$conf[0]</div>\"+";
       echo "\"<input name='quit' type='text' ID='quit' size=$conf[6]>&nbsp;&nbsp;\"+
        \"<input type='button' value=$conf[15] id=search_button>&nbsp;&nbsp;\"+
        \"<a href='javascript:ins(1)'><img src='/search/img/up.png' alt='�������' border=0></a><br>\"+
        \"<input name='toch' type='checkbox' value='ON'>&nbsp;\"+
        \"������ ����������<br>\"+
        \"<input name='registr' type='checkbox' value='ON'>&nbsp;\"+
        \"��������� �������<br>\"+
        \"<input name=log type=radio value='1' >&nbsp;\"+
        \"����� �����<br>\"+
         \"<input name=log type=radio value='2' checked>&nbsp;\"+
        \"����� �������\";

      var insp;
      switch (i)
       {
        case 1: insp=p1;
                break;
        case 2: insp= p2;
                break;
       }
      document.getElementById('s_search').innerHTML = insp;
      document.search.quit.value=val;


 }
//-->";
?>
</script>
<CENTER>
 <TABLE bgcolor=#EBEBEB width=80% CELLPADDING=10 CELLSPACING=0 border=0>

<tr >
   <td colspan=2><FONT COLOR="#408080" size=+1>������� ��� �����</FONT></td>
 </tr>



   <tr>
      <td colspan=2>

<?php

echo"<div align=$conf[24]><form name='search'  method=post>

        <div id=s_search>";
        if ($conf[0]!="") echo "<div id=head_search>$conf[0]</div>";
        echo "<input name='quit' type='text'  ID='quit' size=$conf[6]>&nbsp;
        <input type='button' value=$conf[15] id=search_button>";
         if($conf[25]==1) echo "&nbsp;
        <a href=\"javascript:ins(2);\"><img src='/search/img/down.png' alt='��������� �����' border=0></a>
        </div>
        </form></div>";

?>
      <td>
   </tr>

 <tr ><td colspan=2>  <a href=# onclick=win()>������� �������� �����</a></td></tr>
<FORM ACTION="admin1.php?sel1=selected" METHOD="POST" name="form">
 <tr ><td colspan=2>  <b>��������� ���������</b></td></tr>
<tr>
   <td  width=35% valign=top>���������.  </td>
   <td><input name="head" type="text" value="<? echo @$conf[0] ?>" size=40></td>
</tr>

<tr >
   <td  width=35% valign=top style=" border-bottom:1px solid #d0c9ad;">
   �����.���������� ����, ������ � �������, ���������� ������ � ��������
   ���������.<br>
   �������� ���������� ��������� �� 100 �� 700<br>  </td>
   <td style=" border-bottom:1px solid #d0c9ad;">
    <input name="color_head" type="text"  size=10 value="<? echo @$conf[1] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[1]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="size_head">
<OPTION value="10" <?  echo @$sel_size_head[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_size_head[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_size_head[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_size_head[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_size_head[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_size_head[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="font_head">
<OPTION value="normal" <?  echo @$sel_font_head[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_font_head[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="width_head">
<OPTION value="100" <?  echo @$sel_width_head[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_width_head[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_width_head[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_width_head[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_width_head[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_width_head[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_width_head[6]; ?> >700</option>
</SELECT>

   </td>
</tr>

 <tr ><td colspan=2>  <b>��������� �����</b></td></tr>
 <tr>
   <td  width=35% valign=top>������ � ��������  </td>
   <td><input name="size_form" type="text" value="<? echo @$conf[5]?>" size=10></td>
</tr>

<tr>
   <td  width=35% valign=top>������ ��������� ������  </td>
   <td><input name="size_str" type="text" value="<? echo @$conf[6] ?>" size=10></td>
</tr>

<tr>
   <td  width=35% valign=top>��� ����� </td>
    <td>   <input name="fon" type="text"  size=10 value="<? echo @$conf[7] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[7]; ?> > ����
		</font></big></b>
    </td>
</tr>

<tr>
   <td  width=35% valign=top>����� �����</td>
    <td>     <input name="color_form" type="text"  size=10 value="<? echo @$conf[8] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[8]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="size_font_form">
<OPTION value="10" <?  echo @$sel_size_form[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_size_form[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_size_form[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_size_form[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_size_form[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_size_form[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="font_form">
<OPTION value="normal" <?  echo @$sel_font_form[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_font_form[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="width_form">
<OPTION value="100" <?  echo @$sel_width_form[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_width_form[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_width_form[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_width_form[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_width_form[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_width_form[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_width_form[6]; ?> >700</option>
</SELECT>
    </td>
</tr>

<tr>
   <td>���� ������ � ��� �����</td>
   <td>
         <INPUT TYPE="text" NAME="line_color" SIZE="10"  VALUE="<? echo @$conf[12] ?>">
         &nbsp;<font color="<? echo @$conf[12]; ?>">&nbsp;&nbsp;<b>����</b></font>&nbsp;&nbsp;&nbsp;

         &nbsp;&nbsp;&nbsp;<select  name="line_size">
           <option value="0" <? echo @$sel_line_size[0] ?> >0</option>
           <option value="1" <? echo @$sel_line_size[1] ?> >1</option>
           <option value="2" <? echo @$sel_line_size[2] ?> >2</option>
           <option value="3" <? echo @$sel_line_size[3] ?> >3</option>
           <option value="4" <? echo @$sel_line_size[4] ?> >4</option>
           <option value="5" <? echo @$sel_line_size[5] ?> >5</option>
        </select>&nbsp;px&nbsp;&nbsp;&nbsp;
        <SELECT NAME="border_form">
<OPTION value="none" <?  echo @$sel_border_form[0]; ?>>���</option>
<OPTION value="dotted" <?  echo @$sel_border_form[1]; ?>>�����</option>
<OPTION value="dashed" <? echo @$sel_border_form[2]; ?>>�������</option>
<OPTION value="solid" <? echo @$sel_border_form[3]; ?>>��������</option>
<OPTION value="double" <? echo @$sel_border_form[4]; ?>>�������</option>
</SELECT>

        </td>
</tr>

<tr>
   <td  width=35% valign=top >������������ �� ��������</td>
    <td>
         <input name="form_align" type="radio" value="left" <? echo @$check_align_form[0]; ?>>&nbsp;�����&nbsp;
         <input name="form_align" type="radio" value="center" <? echo @$check_align_form[1]; ?>>&nbsp;�� ������&nbsp;
         <input name="form_align" type="radio" value="right" <? echo @$check_align_form[2]; ?>>&nbsp;������
    </td>
</tr>

<tr>
   <td  width=35% valign=top  style=" border-bottom:1px solid #d0c9ad;">������ ���������� ������</td>
    <td  style=" border-bottom:1px solid #d0c9ad;">
         <input name="search_panel" type="checkbox" value="ON" <? echo @$check_search_panel; ?> > &nbsp;�������� � �����
    </td>
</tr>

<tr ><td colspan=2>  <b>��������� ������</b></td></tr>

<tr>
   <td  width=35% valign=top>�������</td>
    <td>   <input name="head_button" type="text"  size=20 value="<? echo @$conf[15]; ?>">

    </td>
</tr>

<tr>
   <td  width=35% valign=top>����</td>
    <td><INPUT TYPE="text" NAME="color_button" SIZE="10"  VALUE="<? echo @$conf[16] ?>">
         &nbsp;<font color="<? echo @$conf[16]; ?>">&nbsp;&nbsp;<b>����</b></font>

    </td>
</tr>

<tr>
   <td  width=35% valign=top>�����</td>
    <td> <input name="color_font_button" type="text"  size=10 value="<? echo @$conf[17]; ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[17]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="size_font_button">
<OPTION value="10" <?  echo @$sel_size_font_button[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_size_font_button[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_size_font_button[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_size_font_button[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_size_font_button[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_size_font_button[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="font_font_button">
<OPTION value="normal" <?  echo @$sel_font_button[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_font_button[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="width_font_button">
<OPTION value="100" <?  echo @$sel_width_font_button[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_width_font_button[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_width_font_button[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_width_font_button[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_width_font_button[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_width_font_button[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_width_font_button[6]; ?> >700</option>
</SELECT>

    </td>
</tr>

<tr>
   <td style=" border-bottom:1px solid #d0c9ad;">���� ������ � ��� �����</td>
   <td style=" border-bottom:1px solid #d0c9ad;">
         <INPUT TYPE="text" NAME="line_color_button" SIZE="10"  VALUE="<? echo @$conf[21] ?>">
         &nbsp;<font color="<? echo @$conf[21]; ?>">&nbsp;&nbsp;<b>����</b></font>&nbsp;&nbsp;&nbsp;

         &nbsp;&nbsp;&nbsp;<select  name="line_size_button">
           <option value="0" <? echo @$sel_line_size_button[0] ?> >0</option>
           <option value="1" <? echo @$sel_line_size_button[1] ?> >1</option>
           <option value="2" <? echo @$sel_line_size_button[2] ?> >2</option>
           <option value="3" <? echo @$sel_line_size_button[3] ?> >3</option>
           <option value="4" <? echo @$sel_line_size_button[4] ?> >4</option>
           <option value="5" <? echo @$sel_line_size_button[5] ?> >5</option>
        </select>&nbsp;px&nbsp;&nbsp;&nbsp;
        <SELECT NAME="border_button">
<OPTION value="none" <?  echo @$sel_border_button[0]; ?>>���</option>
<OPTION value="dotted" <?  echo @$sel_border_button[1]; ?>>�����</option>
<OPTION value="dashed" <? echo @$sel_border_button[2]; ?>>�������</option>
<OPTION value="solid" <? echo @$sel_border_button[3]; ?>>��������</option>
<OPTION value="double" <? echo @$sel_border_button[4]; ?>>�������</option>
</SELECT>

        </td>
</tr>


<tr><td align=bottom><INPUT TYPE="submit" VALUE="���������" name='GO'></td></tr>




</TABLE>
</CENTER>
</FORM>

</BODY>
</HTML>