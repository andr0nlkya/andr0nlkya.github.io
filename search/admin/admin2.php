<?php
 include("cap.php");

 if(isset($_POST['go']))
   {
     $f=fopen("conf/mes1.txt","w+");
     fwrite($f,"0 ���� ��������*".$_POST['color_page']."\r\n");
     fwrite($f,"1 ��� ��������*".$_POST['background_page']."\r\n");

     if(!is_numeric($_POST['count_search']) ||  $_POST['count_search']=="")
         fwrite($f,"2 ������� �����������*10\r\n");
     else
         fwrite($f,"2 ������� �����������*".$_POST['count_search']."\r\n");

     fwrite($f,"3 ���� �������� �����*".$_POST['color_block']."\r\n");

     if(!is_numeric($_POST['width_block']) || $_POST['width_block']=="")
        fwrite($f,"4 ������ �������� �����*70\r\n");
     else
     fwrite($f,"4 ������ �������� �����*".$_POST['width_block']."\r\n");

     fwrite($f,"5 ���� ����� �������� �����*".$_POST['border_color_block']."\r\n");
     fwrite($f,"6 ������ ����� �������� �����*".$_POST['border_size_block']."\r\n");
     fwrite($f,"7 ��� ����� �������� �����*".$_POST['border_type_block']."\r\n");

     fwrite($f,"8 ���� ������ ����������*".$_POST['color_font_info']."\r\n");
     fwrite($f,"9 ������ ������ ����������*".$_POST['size_font_info']."\r\n");
     fwrite($f,"10 ���������� ������ ����������*".$_POST['type_font_info']."\r\n");
     fwrite($f,"11 �������� ������ ���������� *".$_POST['width_font_info']."\r\n");

     fwrite($f,"12 ���� ����� � ����� �������*".$_POST['color_search']."\r\n");

     if(!is_numeric($_POST['width_search']) || $_POST['width_search']=="")
         fwrite($f,"13 ������ ����� � ����� �������*100\r\n");
     else
         fwrite($f,"13 ������ ����� � ����� �������*".$_POST['width_search']."\r\n");


     fwrite($f,"14 ���� ����� ����� � ����� �������*".$_POST['border_color_search']."\r\n");
     fwrite($f,"15 ������ ������� ����� ����� � ����� �������*".$_POST['border_size_top_search']."\r\n");
     fwrite($f,"16 ������ ������ ����� ����� � ����� �������*".$_POST['border_size_bottom_search']."\r\n");
     fwrite($f,"17 ������ ������ ����� ����� � ����� �������*".$_POST['border_size_right_search']."\r\n");
     fwrite($f,"18 ������ ����� ����� ����� � ����� �������*".$_POST['border_size_left_search']."\r\n");
     fwrite($f,"19 ��� ����� ����� � ����� �������*".$_POST['border_type_search']."\r\n");

     fwrite($f,"20 ���� ������ �����*".$_POST['color_font_title']."\r\n");
     fwrite($f,"21 ������ ������ �����*".$_POST['size_font_title']."\r\n");
     fwrite($f,"22 ���������� ������ �����*".$_POST['type_font_title']."\r\n");
     fwrite($f,"23 �������� ������ �����*".$_POST['width_font_title']."\r\n");

     fwrite($f,"24 ���� ������ �����������*".$_POST['color_font_content']."\r\n");
     fwrite($f,"25 ������ ������ �����������*".$_POST['size_font_content']."\r\n");
     fwrite($f,"26 ���������� ������ �����������*".$_POST['type_font_content']."\r\n");
     fwrite($f,"27 �������� ������ �����������*".$_POST['width_font_content']."\r\n");

     fwrite($f,"28 ���� ������ ����������*".$_POST['color_font_count']."\r\n");
     fwrite($f,"29 ������ ������ ����������*".$_POST['size_font_count']."\r\n");
     fwrite($f,"30 ���������� ������ ����������*".$_POST['type_font_count']."\r\n");
     fwrite($f,"31 �������� ������ ����������*".$_POST['width_font_count']."\r\n");

     fwrite($f,"32 ���� ������ ��������� ������*".$_POST['color_font_text_link']."\r\n");
     fwrite($f,"33 ������ ������ ��������� ������*".$_POST['size_font_text_link']."\r\n");
     fwrite($f,"34 ���������� ������ ��������� ������*".$_POST['type_font_text_link']."\r\n");
     fwrite($f,"35 �������� ������ ��������� ������*".$_POST['width_font_text_link']."\r\n");

     if(isset($_POST['title_view'])) fwrite($f,"36 ���������� �������� ���������*1\r\n");
     else fwrite($f,"36 ���������� �������� ���������*0\r\n");

     if(isset($_POST['pred_view'])) fwrite($f,"37 ���������� ����������� � ��������� �������*1\r\n");
     else fwrite($f,"37 ���������� ����������� � ��������� �������*0\r\n");

     if(isset($_POST['count_view'])) fwrite($f,"38 ���������� ���������� ����������*1\r\n");
     else fwrite($f,"38 ���������� ���������� ����������*0\r\n");

     if(isset($_POST['text_view'])) fwrite($f,"39 ���������� ������ �� ��������� �����*1\r\n");
     else fwrite($f,"39 ���������� ������ �� ��������� �����*0\r\n");

     fwrite($f,"40 align �������� �����*".$_POST['block_align']);

     fclose($f);
   }



  //====================�������� ������-------------
 $config=file("conf/mes1.txt");
 $n=0;
 //�������
 foreach($config as $line)
  {
 	$expl=explode("*", $line);
 	$conf[$n]=trim($expl[1]);
 	$n++;
  }

//��� ����������
if($conf[36]==1)$check_title_view="checked";
else $check_title_view ="";

if($conf[37]==1)$check_pred_view="checked";
else $check_pred_view ="";

if($conf[38]==1)$check_count_view="checked";
else $check_count_view ="";

if($conf[39]==1)$check_text_view="checked";
else $check_text_view ="";



 //����� �������� �����

//��� �����
if($conf[7]=="none")$sel_border_type_block[0]="selected";
if($conf[7]=="dotted")$sel_border_type_block[1]="selected";
if($conf[7]=="dashed")$sel_border_type_block[2]="selected";
if($conf[7]=="solid")$sel_border_type_block[3]="selected";
if($conf[7]=="double")$sel_border_type_block[4]="selected";


//������ �����
for($i=0; $i<6; $i++)
 {
   if($conf[6]==$i) $sel_border_size_block[$i]="selected";
   else $sel_border_size_block[$i]="";
 }
//���������� �����
if($conf[40]=='left') $check_align_block[0]="checked";
if($conf[40]=='center') $check_align_block[1]="checked";
if($conf[40]=='right') $check_align_block[2]="checked";

//����� �������������� ������

//������
for($i=10,$n=0; $i<22; $i+=2,$n++)
 {
   if($conf[9]==$i) $sel_size_font_info[$n]="selected";
   else $sel_size_font_info[$n]="";

 }

 //���
 if($conf[10]=="normal") $sel_type_font_info[0]="selected";
 if($conf[10]=="italic") $sel_type_font_info[1]="selected";

 //��������
 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[11]==$i) $sel_width_font_info[$n]="selected";
   else $sel_width_font_info[$n]="";

 }

//���� � ����� ����������� ������
//��� �����
if($conf[19]=="none")$sel_border_type_search[0]="selected";
if($conf[19]=="dotted")$sel_border_type_search[1]="selected";
if($conf[19]=="dashed")$sel_border_type_search[2]="selected";
if($conf[19]=="solid")$sel_border_type_search[3]="selected";
if($conf[19]=="double")$sel_border_type_search[4]="selected";


//������ ������� �����
for($i=0; $i<6; $i++)
 {
   if($conf[15]==$i) $sel_border_size_top_search[$i]="selected";
   else $sel_border_size_top_search[$i]="";
 }

 //������ ������ �����
for($i=0; $i<6; $i++)
 {
   if($conf[16]==$i) $sel_border_size_bottom_search[$i]="selected";
   else $sel_border_size_bottom_search[$i]="";
 }

 //������ ������ �����
for($i=0; $i<6; $i++)
 {
   if($conf[17]==$i) $sel_border_size_right_search[$i]="selected";
   else $sel_border_size_right_search[$i]="";
 }

 //������ ����� �����
for($i=0; $i<6; $i++)
 {
   if($conf[18]==$i) $sel_border_size_left_search[$i]="selected";
   else $sel_border_size_left_search[$i]="";
 }


//����� title

//������
for($i=10,$n=0; $i<22; $i+=2,$n++)
 {
   if($conf[21]==$i) $sel_size_font_title[$n]="selected";
   else $sel_size_font_title[$n]="";

 }

 //���
 if($conf[22]=="normal") $sel_type_font_title[0]="selected";
 if($conf[22]=="italic") $sel_type_font_title[1]="selected";

 //��������
 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[23]==$i) $sel_width_font_title[$n]="selected";
   else $sel_width_font_title[$n]="";

 }



//����� �����������

//������
for($i=10,$n=0; $i<22; $i+=2,$n++)
 {
   if($conf[25]==$i) $sel_size_font_content[$n]="selected";
   else $sel_size_font_content[$n]="";

 }

 //���
 if($conf[26]=="normal") $sel_type_font_content[0]="selected";
 if($conf[26]=="italic") $sel_type_font_content[1]="selected";

 //��������
 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[27]==$i) $sel_width_font_content[$n]="selected";
   else $sel_width_font_content[$n]="";

 }

 //����� ����������

 //������
for($i=10,$n=0; $i<22; $i+=2,$n++)
 {
   if($conf[29]==$i) $sel_size_font_count[$n]="selected";
   else $sel_size_font_conten[$n]="";

 }

 //���
 if($conf[30]=="normal") $sel_type_font_count[0]="selected";
 if($conf[30]=="italic") $sel_type_font_count[1]="selected";

 //��������
 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[31]==$i) $sel_width_font_count[$n]="selected";
   else $sel_width_font_count[$n]="";

 }

//����� ��������� ������

 //������
for($i=10,$n=0; $i<22; $i+=2,$n++)
 {
   if($conf[33]==$i) $sel_size_font_text_link[$n]="selected";
   else $sel_size_font_text_link[$n]="";

 }

 //���
 if($conf[34]=="normal") $sel_type_font_text_linkt[0]="selected";
 if($conf[34]=="italic") $sel_type_font_text_link[1]="selected";

 //��������
 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[35]==$i) $sel_width_font_text_link[$n]="selected";
   else $sel_width_font_text_link[$n]="";

 }



?>

<script language='JavaScript1.1' type='text/javascript'>

<!--

  function win(par)
  {

    var obj=par;
    mainwin=window.open('rgb.html','',
   'Width=550, height=500,left=100,top=100,status=yes,toolbar=no,menubar=no,scrollbars=yes,resizable=yes');

  }


//-->

</script>

 <TABLE align=center bgcolor=#EBEBEB width=80% CELLPADDING=10 CELLSPACING=0 border=0>
 <FORM ACTION="admin2.php?sel2=selected" METHOD="POST" name="form">
<tr >
   <td colspan=2><FONT COLOR="#408080" size=+1>������� ��� �������� � ������������ ������</FONT><br>

   </td>
 </tr>
<tr ><td colspan=2>  <a href=# onclick=win()>������� �������� �����</a></td></tr>

<tr >
   <td colspan=2><b>��������</b><br>

   </td>
 </tr>

<tr >
   <td width=35% valign=top>
      ����
   </td>
   <td >
       <input name="color_page" type="text"  size=10 value="<? echo @$conf[0] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[0]; ?> > ����
		</font></big></b>
   </td>
 </tr>

 <tr >
   <td width=35% valign=top >
      ����������� ���<br>
      ����� ������� ���������� ���������, �.�. http://���_����/����
   </td>
   <td valign=top >
       <input name="background_page" type="text"  size=50 value="<? echo @$conf[1] ?>">

   </td>
 </tr>

 <tr >
   <td width=35% valign=top >
      ��� ����������
   </td>
   <td valign=top >
       <input name="title_view" type="checkbox" value="ON" <? echo @$check_title_view ?> > &nbsp;�������� ���������<br />
        <input name="pred_view" type="checkbox" value="ON" <? echo @$check_pred_view ?>> &nbsp;����������� � ��������� �������<br />
         <input name="count_view" type="checkbox" value="ON" <? echo @$check_count_view ?>> &nbsp;���������� ����������<br />
          <input name="text_view" type="checkbox" value="ON" <? echo @$check_text_view ?>> &nbsp;������ �� ��������� �����<br />

   </td>
 </tr>

<tr >
   <td width=35% valign=top style=" border-bottom:1px solid #d0c9ad;">
      ������� ����������� ������ �� ��������
   </td>
   <td valign=top style=" border-bottom:1px solid #d0c9ad;">
       <input name="count_search" type="text"  size=10 value="<? echo @$conf[2] ?>">

   </td>
 </tr>

 <tr >
   <td colspan=2><b>������� ���� �� ����� ������������ ������</b><br>
   </td>
 </tr>

  <tr >
   <td width=35% valign=top >
    ����
   </td>
   <td valign=top >
      <input name="color_block" type="text"  size=10 value="<? echo @$conf[3] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[3]; ?> > ����
		</font></big></b>
   </td>
 </tr>

<tr >
   <td width=35% valign=top >
      ������ ������������� ����������� ����� ��������.<br>
      ��������! ���� � ��� � ���������� <b>���������� �����</b> �������� ��� ���
      ������ �(���) ����� ����� ��������, �� ���� ������� ����� ������������� �� ����������� �����.<br>
      <b>�����</b> 90% ������� �� ������������� � ����� � ���������������� ����������� ��������
      ������� ����������!
   </td>
   <td valign=top >
       <input name="width_block" type="text"  size=10 value="<? echo @$conf[4] ?>">&nbsp;%

   </td>
 </tr>

 <tr>
   <td >����, ������ � ��� �����</td>
   <td >
         <INPUT TYPE="text" NAME="border_color_block" SIZE="10"  VALUE="<? echo @$conf[5] ?>">
         &nbsp;<font color="<? echo @$conf[5]; ?>">&nbsp;&nbsp;<b>����</b></font>&nbsp;&nbsp;&nbsp;

         &nbsp;&nbsp;&nbsp;<select  name="border_size_block">
           <option value="0" <? echo @$sel_border_size_block[0] ?> >0</option>
           <option value="1" <? echo @$sel_border_size_block[1] ?> >1</option>
           <option value="2" <? echo @$sel_border_size_block[2] ?> >2</option>
           <option value="3" <? echo @$sel_border_size_block[3] ?> >3</option>
           <option value="4" <? echo @$sel_border_size_block[4] ?> >4</option>
           <option value="5" <? echo @$sel_border_size_block[5] ?> >5</option>
        </select>&nbsp;px&nbsp;&nbsp;&nbsp;
        <SELECT NAME="border_type_block">
<OPTION value="none" <?  echo @$sel_border_type_block[0]; ?>>���</option>
<OPTION value="dotted" <?  echo @$sel_border_type_block[1]; ?>>�����</option>
<OPTION value="dashed" <? echo @$sel_border_type_block[2]; ?>>�������</option>
<OPTION value="solid" <? echo @$sel_border_type_block[3]; ?>>��������</option>
<OPTION value="double" <? echo @$sel_border_type_block[4]; ?>>�������</option>
</SELECT>

        </td>
</tr>
<tr>
   <td  width=35% valign=top  style=" border-bottom:1px solid #d0c9ad;">������������ �� ��������</td>
    <td  style=" border-bottom:1px solid #d0c9ad;">
         <input name="block_align" type="radio" value="left" <? echo @$check_align_block[0]; ?>>&nbsp;�����&nbsp;
         <input name="block_align" type="radio" value="center" <? echo @$check_align_block[1]; ?>>&nbsp;�� ������&nbsp;
         <input name="block_align" type="radio" value="right" <? echo @$check_align_block[2]; ?>>&nbsp;������
    </td>
</tr>
<tr >
   <td colspan=2><b>�������������� ������ � ������������ ������ (������ ��������)</b><br>
   </td>
 </tr>


<tr>
   <td  width=35% valign=top style=" border-bottom:1px solid #d0c9ad;">�����. ����, ������, ����������, ��������.</td>
    <td style=" border-bottom:1px solid #d0c9ad;"> <input name="color_font_info" type="text"  size=10 value="<? echo @$conf[8]; ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[8]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="size_font_info">
<OPTION value="10" <?  echo @$sel_size_font_info[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_size_font_info[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_size_font_info[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_size_font_info[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_size_font_info[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_size_font_info[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="type_font_info">
<OPTION value="normal" <?  echo @$sel_type_font_info[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_type_font_info[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="width_font_info">
<OPTION value="100" <?  echo @$sel_width_font_info[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_width_font_info[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_width_font_info[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_width_font_info[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_width_font_info[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_width_font_info[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_width_font_info[6]; ?> >700</option>
</SELECT>

    </td>
</tr>

<tr >
   <td colspan=2><b>���� � ����� ����������� ������</b><br>
   </td>
 </tr>

 <tr >
   <td width=35% valign=top >
    ����
   </td>
   <td valign=top >
      <input name="color_search" type="text"  size=10 value="<? echo @$conf[12] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[12]; ?> > ����
		</font></big></b>
   </td>
 </tr>

<tr >
   <td width=35% valign=top >
      ������ ������������� �������� �����
   </td>
   <td valign=top >
       <input name="width_search" type="text"  size=10 value="<? echo @$conf[13] ?>">&nbsp;%

   </td>
 </tr>

 <tr>
   <td style=" border-bottom:1px solid #d0c9ad;">����, ������ ����� � px � ������ ������-
   ����-���-�����-����, ��� �����</td>
   <td style=" border-bottom:1px solid #d0c9ad;">
         <INPUT TYPE="text" NAME="border_color_search" SIZE="10"  VALUE="<? echo @$conf[14] ?>">
         &nbsp;<font color="<? echo @$conf[14]; ?>">&nbsp;&nbsp;<b>����</b></font><br><br>

	         <select  name="border_size_top_search">
           <option value="0" <? echo @$sel_border_size_top_search[0] ?> >0</option>
           <option value="1" <? echo @$sel_border_size_top_search[1] ?> >1</option>
           <option value="2" <? echo @$sel_border_size_top_search[2] ?> >2</option>
           <option value="3" <? echo @$sel_border_size_top_search[3] ?> >3</option>
           <option value="4" <? echo @$sel_border_size_top_search[4] ?> >4</option>
           <option value="5" <? echo @$sel_border_size_top_search[5] ?> >5</option>
        </select>&nbsp;&nbsp;


         <select  name="border_size_bottom_search">
           <option value="0" <? echo @$sel_border_size_bottom_search[0] ?> >0</option>
           <option value="1" <? echo @$sel_border_size_bottom_search[1] ?> >1</option>
           <option value="2" <? echo @$sel_border_size_bottom_search[2] ?> >2</option>
           <option value="3" <? echo @$sel_border_size_bottom_search[3] ?> >3</option>
           <option value="4" <? echo @$sel_border_size_bottom_search[4] ?> >4</option>
           <option value="5" <? echo @$sel_border_size_bottom_search[5] ?> >5</option>
        </select>&nbsp;&nbsp;


         <select  name="border_size_right_search">
           <option value="0" <? echo @$sel_border_size_right_search[0] ?> >0</option>
           <option value="1" <? echo @$sel_border_size_right_search[1] ?> >1</option>
           <option value="2" <? echo @$sel_border_size_right_search[2] ?> >2</option>
           <option value="3" <? echo @$sel_border_size_right_search[3] ?> >3</option>
           <option value="4" <? echo @$sel_border_size_right_search[4] ?> >4</option>
           <option value="5" <? echo @$sel_border_size_right_search[5] ?> >5</option>
        </select>&nbsp;&nbsp;


         <select  name="border_size_left_search">
           <option value="0" <? echo @$sel_border_size_left_search[0] ?> >0</option>
           <option value="1" <? echo @$sel_border_size_left_search[1] ?> >1</option>
           <option value="2" <? echo @$sel_border_size_left_search[2] ?> >2</option>
           <option value="3" <? echo @$sel_border_size_left_search[3] ?> >3</option>
           <option value="4" <? echo @$sel_border_size_left_search[4] ?> >4</option>
           <option value="5" <? echo @$sel_border_size_left_search[5] ?> >5</option>
        </select>&nbsp;&nbsp;

        ��� �����&nbsp;
        <SELECT NAME="border_type_search">
<OPTION value="none" <?  echo @$sel_border_type_search[0]; ?>>���</option>
<OPTION value="dotted" <?  echo @$sel_border_type_search[1]; ?>>�����</option>
<OPTION value="dashed" <? echo @$sel_border_type_search[2]; ?>>�������</option>
<OPTION value="solid" <? echo @$sel_border_type_search[3]; ?>>��������</option>
<OPTION value="double" <? echo @$sel_border_type_search[4]; ?>>�������</option>
</SELECT>
        </td>
</tr>

<tr >
   <td colspan=2><b>�������� ��������� (��������)</b><br>
   </td>
 </tr>

<tr>
   <td  width=35% valign=top style=" border-bottom:1px solid #d0c9ad;">
   �����. ����, ������, ����������, ��������.</td>
    <td style=" border-bottom:1px solid #d0c9ad;">
     <input name="color_font_title" type="text"  size=10 value="<? echo @$conf[20]; ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[20]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="size_font_title">
<OPTION value="10" <?  echo @$sel_size_font_title[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_size_font_title[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_size_font_title[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_size_font_title[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_size_font_title[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_size_font_title[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="type_font_title">
<OPTION value="normal" <?  echo @$sel_type_font_title[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_type_font_title[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="width_font_title">
<OPTION value="100" <?  echo @$sel_width_font_title[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_width_font_title[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_width_font_title[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_width_font_title[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_width_font_title[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_width_font_title[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_width_font_title[6]; ?> >700</option>
</SELECT>

    </td>
</tr>

<tr >
   <td colspan=2><b>����������� �� ���������, ��� ����� ����������� ������� ������
    (��������� ��� ��������� ���������)</b><br>
   </td>
 </tr>

<tr>
   <td  width=35% valign=top style=" border-bottom:1px solid #d0c9ad;">
   �����. ����, ������, ����������, ��������.</td>
    <td style=" border-bottom:1px solid #d0c9ad;">
     <input name="color_font_content" type="text"  size=10 value="<? echo @$conf[24]; ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[24]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="size_font_content">
<OPTION value="10" <?  echo @$sel_size_font_content[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_size_font_content[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_size_font_content[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_size_font_content[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_size_font_content[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_size_font_content[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="type_font_content">
<OPTION value="normal" <?  echo @$sel_type_font_content[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_type_font_content[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="width_font_content">
<OPTION value="100" <?  echo @$sel_width_font_content[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_width_font_content[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_width_font_content[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_width_font_content[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_width_font_content[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_width_font_content[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_width_font_content[6]; ?> >700</option>
</SELECT>

    </td>
</tr>

<tr >
   <td colspan=2><b>������ � ����������� ����������</b><br>
   </td>
 </tr>

<tr>
   <td  width=35% valign=top style=" border-bottom:1px solid #d0c9ad;">
   �����. ����, ������, ����������, ��������.</td>
    <td style=" border-bottom:1px solid #d0c9ad;">
     <input name="color_font_count" type="text"  size=10 value="<? echo @$conf[28]; ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[28]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="size_font_count">
<OPTION value="10" <?  echo @$sel_size_font_count[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_size_font_count[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_size_font_count[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_size_font_count[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_size_font_count[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_size_font_count[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="type_font_count">
<OPTION value="normal" <?  echo @$sel_type_font_count[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_type_font_count[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="width_font_count">
<OPTION value="100" <?  echo @$sel_width_font_count[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_width_font_count[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_width_font_count[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_width_font_count[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_width_font_count[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_width_font_count[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_width_font_count[6]; ?> >700</option>
</SELECT>

    </td>
</tr>

<tr >
   <td colspan=2><b>������ �� ��������� �����</b><br>
   </td>
 </tr>

<tr>
   <td  width=35% valign=top style=" border-bottom:1px solid #d0c9ad;">
   �����. ����, ������, ����������, ��������.</td>
    <td style=" border-bottom:1px solid #d0c9ad;">
     <input name="color_font_text_link" type="text"  size=10 value="<? echo @$conf[32]; ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[32]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="size_font_text_link">
<OPTION value="10" <?  echo @$sel_size_font_text_link[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_size_font_text_link[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_size_font_text_link[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_size_font_text_link[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_size_font_text_link[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_size_font_text_link[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="type_font_text_link">
<OPTION value="normal" <?  echo @$sel_type_font_text_link[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_type_font_text_link[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="width_font_text_link">
<OPTION value="100" <?  echo @$sel_width_font_text_link[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_width_font_text_link[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_width_font_text_link[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_width_font_text_link[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_width_font_text_link[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_width_font_text_link[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_width_font_text_link[6]; ?> >700</option>
</SELECT>

    </td>
</tr>

<tr >
   <td colspan=2><input type="submit" value="���������" name="go"></td>
 </tr>
 </form>
 </table>