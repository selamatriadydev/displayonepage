<?php    
    mysql_connect("localhost","root","");    
    mysql_select_db("dragdrop");   
    ?>
<title>Combobox</title>

<p></p>
    <table width="451" border="0" align="center">
      <tr>
        <td width="118">drag</td>
        <td width="323">
          <select name="nim" id="selecttandatangan" onchange="changeValue(this.value)" >
        <option value=0>-Pilih-</option>
        <?php 
    $result = mysql_query("select * from dragdrop");    
    $jsArray = "var dtMhs = new Array();\n";        
    while ($row = mysql_fetch_array($result)) {    
        echo '<option value="' . $row['id'] . '">' . $row['text'] . '</option>';    
        $jsArray .= "dtMhs['" . $row['id'] . "'] = {text:'" . addslashes($row['text']) . "',jrsn:'".addslashes($row['listorder'])."'};\n";    
    }      
    ?>    
        </select></td>
      </tr>
      <tr>
        <td>Nama Mahasiswa</td>
        <td><input type="text" name="nm" id="nm"/></td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td><input type="text" name="jrsn" id="jrsn"/></td>
      </tr>
    </table>
      <script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(selecttandatangan){  
    document.getElementById('nm').value = dtMhs[selecttandatangan].nama;  
    document.getElementById('jrsn').value = dtMhs[selecttandatangan].jrsn;  
    };  
    </script> 