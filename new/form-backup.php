<?php
include "include/konek.php";
// --- conn ke database
// fungsi memotong huruf
function cutText($text, $length, $mode = 2)
{
  if ($mode != 1)
  {
    $char = $text{$length - 1};
    switch($mode)
    {
      case 2: 
        while($char != ' ') {
          $char = $text{--$length};
        }
      case 3:
        while($char != ' ') {
          $char = $text{++$num_char};
        }
    }
  }
  return substr($text, 0, $length);
  }
// --- Fngsi tambah data (Create)
function tambah($conn){
    $thisURL="index.php?";
    if (isset($_POST['btn_simpan'])){
        //$id= $_POST['id_jenisbenda'];
        //$id_pemeriksaan=$_GET['vshmy'];
       $query_gas0=mysqli_query($conn, "SELECT * from dragdrop");
       $total=mysqli_num_rows($query_gas0);
       $listorder=$total+1;
       $query_gas1=mysqli_query($conn, "SELECT * from point1");
       $total1=mysqli_num_rows($query_gas1);
       $listorder1=$total1+1;
       $query_gas2=mysqli_query($conn, "SELECT * from keputusan");
       $total2=mysqli_num_rows($query_gas2);
       $listorder2=$total2+1;

       $nomorsurat=$_POST['nomorsurat'];
       $nomoragenda=$_POST['nomoragenda'];
       $perihal=$_POST['perihal'];
       $idkecepatan=$_POST['idkecepatan'];
       $idpejabat=$_POST['idpejabat'];
        $menimbang = $_POST['menimbang'];
        $mengingat=$_POST['mengingat'];
        $keputusan=$_POST['keputusan'];
        //if(!empty($id) && !empty($id_pemeriksaan) && !empty($ket) ){
        if(!empty($menimbang)){
            $sql = "INSERT INTO `dragdrop` (`text`, `listorder`) VALUES ('".$menimbang."', '".$listorder."')";
            $simpan = mysqli_query($conn, $sql);
            if($simpan && isset($_POST['aksi'])){
     if($_POST['aksi'] == 'create'){
        // echo '<script type="text/javascript">';
        // echo 'swal("Sukses!", "Data berhasil ditambah", "success").then(function() {
        // window.location.href = "'. $thisURL.'";
        // });</script>';
      $pesan = "<p style='color:red;'>berhasil ditambahkan</p>";
                }
                echo '<script type="text/javascript">
               setTimeout(function() {window.location.href = "'. $thisURL.'"}, 2000)
            </script>';

            }
        }
        elseif(!empty($mengingat)){
            $sql = "INSERT INTO `point1` (`text`, `listorder`) VALUES ('".$mengingat."', '".$listorder1."')";
            $simpan = mysqli_query($conn, $sql);
            if($simpan && isset($_POST['aksi'])){
     if($_POST['aksi'] == 'create'){
        // echo '<script type="text/javascript">';
        // echo 'swal("Sukses!", "Data berhasil ditambah", "success").then(function() {
        // window.location.href = "'. $thisURL.'";
        // });</script>';
      $pesan = "<p style='color:red;'>berhasil ditambahkan</p>";
                }
                echo '<script type="text/javascript">
               setTimeout(function() {window.location.href = "'. $thisURL.'"}, 2000)
            </script>';

            }
        }
         elseif(!empty($keputusan)){
            $sql = "INSERT INTO `keputusan` (`text`, `listorder`) VALUES ('".$keputusan."', '".$listorder2."')";
            $simpan = mysqli_query($conn, $sql);
            if($simpan && isset($_POST['aksi'])){
     if($_POST['aksi'] == 'create'){
        // echo '<script type="text/javascript">';
        // echo 'swal("Sukses!", "Data berhasil ditambah", "success").then(function() {
        // window.location.href = "'. $thisURL.'";
        // });</script>';
      $pesan = "<p style='color:red;'>berhasil ditambahkan</p>";
                }
                echo '<script type="text/javascript">
               setTimeout(function() {window.location.href = "'. $thisURL.'"}, 2000)
            </script>';

            }
        }

         else {
            $pesan = "<p style='color:red;'>Tidak dapat menyimpan, data belum lengkap!</p>";
        }
    }
    ?> 
       
            <fieldset>
                <legend><h2>Tambah data</h2></legend>
                
 
 <div class="col-md-4">
  <form action="" method="POST">
                            <p><?php echo isset($pesan) ? $pesan : "" ?></p>
            <div class="form-group">
                <label for="exampleInputEmail1">Nomor Surat </label>
                <input type="text" name="nomorsurat" id="inputnosurat" class="form-control"   placeholder="Nomor Surat" onkeyup='saveValue(this);'>
              </div>
  
            <div class="form-group">
                <label for="exampleInputEmail1">Nomor Agenda</label>
                <input type="text" name="nomoragenda"  class="form-control"   id="inputnoagenda" placeholder="Nomor Agenda" readonly>
              </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Perihal</label>
                <input type="text" name="perihal" class="form-control"   id="inputperihal" placeholder="Perihal" onkeyup='saveValue(this);'>
              </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kecepatan Tanggapan</label>
            <select class="form-control select2_1" name="idkecepatan" >
              <option value="" >Cepat</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Ditandatangani oleh</label>
            <select class="form-control select2_1" name="idpejabat" id="selecttandatangan">
              <option value="" selected="selected">pilih
             </option>
              <option value="aqin" >aqin
               <input type="hidden" value="kabit" id="ambil1">
               <input type="hidden" id="ambil2" value="kabin">
             </option>
            </select>
          </div>
                            
         <div class="form-group">
                <label for="exampleInputEmail1">Poin Menimbang</label>
                  <div class="form-group addel-target">
                    <div class="input-group">
                        <textarea class="form-control" id="inputmenimbang" name="menimbang" ></textarea>
                    </div>
                    <br>
                    <input type="hidden" name="aksi" value="create">
                    <button type="submit" class="btn btn-success addel-add" name="btn_simpan" style="margin-top: -10px;  width: 100% !important;">
                        <i class="fa fa-plus"></i> Tambah Poin
                    </button>
                     <div id="list">
                      <div id="response"> </div>
                      <ul>
                        <?php
                        global $conn;
                        $no=1;
                          $query  = "SELECT id, text FROM dragdrop ORDER BY listorder ASC";
                          $result = mysqli_query($conn, $query);
                          while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
                          {
                          $id = stripslashes($row['id']);
                          $text = stripslashes($row['text']);
                          ?>
                        <li id="arrayorder_<?php echo $id ?>"><?php echo $no;?> <?php echo substr($text, 0, 25); ?>
                          <a href="<?php echo $thisURL ?>aksi=update&id=<?php echo $id ?>"  style="color:yellow; "> [ <i class="fa  fa-close"></i>edit ]</a>
                          <a href="<?php echo $thisURL ?>aksi=delete&id=<?php echo $id ?>"  style="color:red; "> [ <i class="fa  fa-close"></i>hapus ]</a>
                          <div class="clear"></div>
                        </li>
                        <?php $no++;} ?>
                      </ul>
                    </div>
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Poin mengingat</label>
                  <div class="form-group addel-target">
                    <div class="input-group">
                        <textarea class="form-control" id="inputmengingat" name="mengingat" > </textarea>
                    </div>
                     <br><input type="hidden" name="aksi" value="create">
                    <button type="submit" class="btn btn-success addel-add" name="btn_simpan" style="margin-top: -10px;  width: 100% !important;">
                        <i class="fa fa-plus"></i> Tambah Poin
                    </button>
                     <div id="list2">
                      <div id="response2"> </div>
                      <ul>
                        <?php
                        global $conn;
                          $no=1;
                          $query1  = "SELECT id, text FROM point1 ORDER BY listorder ASC";
                          $result1 = mysqli_query($conn, $query1);
                          while($row1 = mysqli_fetch_array($result1, MYSQL_ASSOC))
                          {
                          $id = stripslashes($row1['id']);
                          $text = stripslashes($row1['text']);
                          ?>
                        <li id="arrayorder2_<?php echo $id ?>"><?php echo $no;?> <?php echo substr($text, 0, 25); ?>
                          <a href="<?php echo $thisURL ?>aksi=update&id2=<?php echo $id ?>"  style="color:yellow; "> [ <i class="fa  fa-close"></i>edit ]</a>
                          <a href="<?php echo $thisURL ?>aksi=delete&id2=<?php echo $id ?>"  style="color:red; "> [ <i class="fa  fa-close"></i>hapus ]</a>
                          <div class="clear"></div>
                        </li>
                        <?php $no++;} ?>
                      </ul>
                    </div>
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Keputusan</label>
                  <div class="form-group addel-target">
                    <div class="input-group">
                        <textarea class="form-control" id="inputmemutuskan" name="keputusan"></textarea>
                    </div>
                     <br><input type="hidden" name="aksi" value="create">
                    <button type="submit" class="btn btn-success addel-add" name="btn_simpan" style="margin-top: -10px;  width: 100% !important;">
                        <i class="fa fa-plus"></i> Tambah keputusan
                    </button>
                     <div id="list3">
                      <div id="response3"> </div>
                      <ul>
                        <?php
                        global $conn;
                        $no=1;
                          $query2  = "SELECT id, text FROM keputusan ORDER BY listorder ASC";
                          $result2 = mysqli_query($conn, $query2);
                          while($row2 = mysqli_fetch_array($result2, MYSQL_ASSOC))
                          {
                          $id = stripslashes($row2['id']);
                          $text = stripslashes($row2['text']);
                          ?>
                        <li id="arrayorder3_<?php echo $id ?>"><?php echo $no;?> <?php echo substr($text, 0, 25); ?>
                          <a href="<?php echo $thisURL ?>aksi=update&id3=<?php echo $id ?>"  style="color:yellow; "> [ <i class="fa  fa-close"></i>edit ]</a>
                          <a href="<?php echo $thisURL ?>aksi=delete&id3=<?php echo $id ?>"  style="color:red; "> [ <i class="fa  fa-close"></i>hapus ]</a>
                          <div class="clear"></div>
                        </li>
                        <?php $no++;} ?>
                      </ul>
                    </div>
                </div>
              </div>

         
            <input type="hidden" name="aksi" value="create">
           <input type="submit" class="btn btn-primary" name="btn_simpan" value="Simpan" style="float: right;" />
            
   
 </form>
</div>


               
       
    <?php
}
// --- Tutup Fngsi tambah data
// --- Fungsi Baca Data (Read)
function tampil_data($conn){
    $sql = "SELECT * FROM dragdrop";
    $query = mysqli_query($conn, $sql);
    //$thisURL="vs.php?page=".$_GET['page']."";
    $no=1;
    while($data = mysqli_fetch_array($query)){}?>
       <div class="col-md-8">
  <?php
  include "view.php";
  ?>
  </div>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function(){<!-- ww w . j  a  v  a  2 s.  c  o  m-->
$("#inputnosurat").keyup(function () {
var value = $(this).val();
$("#nosurat").text(value);
}).keyup();
$("#inputperihal").keyup(function () {
var value = $(this).val();
$("#perihal").text(value);
}).keyup();
$("#inputmenimbang").keyup(function () {
var value = $(this).val();
$("#menimbang").text(value);
}).keyup();

$("#inputmengingat").keyup(function () {
var value = $(this).val();
$("#mengingat").text(value);
}).keyup();

$("#inputmemutuskan").keyup(function () {
var value = $(this).val();
$("#memutuskan").text(value);
}).keyup();

$("#ambil1").keyup(function () {
var value = $(this).val();
$("#ambil01").text(value);
}).keyup();
$("#ambil2").keyup(function () {
var value = $(this).val();
$("#ambil02").text(value);
}).keyup();
$('#selecttandatangan').bind('change click keyup', function() {
  $('#tandatangan').text($(this).val());
});

});
</script>

<!-- save value -->
<script type="text/javascript">
        document.getElementById("inputnosurat").value = getSavedValue("inputnosurat");    // set the value to this input
        document.getElementById("inputperihal").value = getSavedValue("inputperihal");   // set the value to this input    // set the value to this input
        document.getElementById("inputmenimbang").value = getSavedValue("inputmenimbang");
        /* Here you can add more inputs to set value. if it's saved */

        //Save the value function - save it to localStorage as (ID, VALUE)
        function saveValue(e){
            var id = e.id;  // get the sender's id to save it . 
            var val = e.value; // get the value. 
            localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 
        }

        //get the saved value function - return the value of "v" from localStorage. 
        function getSavedValue  (v){
            if (localStorage.getItem(v) === null) {
                return "";// You can change this to your defualt value. 
            }
            return localStorage.getItem(v);
        }
</script>
<!-- //save value -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.js"></script>
<style>
ul {
  padding:0px;
  margin: 0px;
}
#response {
  padding:10px;
  background-color:#9F9;
  border:2px solid #396;
  margin-bottom:20px;
}
#list li {
  margin: 0 0 3px;
  padding:8px;
  background-color:#333;
  color:#fff;
  list-style: none;
}
#response2 {
  background-color: white;
  color: black;
  padding:10px;
}
#list2 li {
  margin: 0 0 3px;
  padding: 8px;
  background-color:#333;
  color:#fff;
  list-style: none;
}

#response3 {
  background-color: white;
  color: black;
  padding:10px;
}
#list3 li {
  margin: 0 0 3px;
  padding: 8px;
  background-color:#333;
  color:#fff;
  list-style: none;
}
</style>
<script type="text/javascript">
$(document).ready(function(){   
    function slideout(){
  setTimeout(function(){
  $("#response").slideUp("slow", function () {
      });
    
}, 2000);}
  
  $("#response").hide();
  $(function() {
  $("#list ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
      
      var order = $(this).sortable("serialize") + '&update=update'; 
      $.post("updateList.php", order, function(theResponse){
        $("#response").html(theResponse);
        $("#response").slideDown('slow');
        slideout();
      });                                
    }                 
    });
  });

}); 
</script>
<script type="text/javascript">
$(document).ready(function(){   
    function slideout(){
  setTimeout(function(){
  $("#response2").slideUp("slow", function () {
      });
    
}, 2000);}
  
  $("#response2").hide();
  $(function() {
  $("#list2 ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
      
      var order = $(this).sortable("serialize") + '&update=update'; 
      $.post("updateList2.php", order, function(theResponse){
        $("#response2").html(theResponse);
        $("#response2").slideDown('slow');
        slideout();
      });                                
    }                 
    });
  });

}); 
</script>
<script type="text/javascript">
$(document).ready(function(){   
    function slideout(){
  setTimeout(function(){
  $("#response3").slideUp("slow", function () {
      });
    
}, 2000);}
  
  $("#response3").hide();
  $(function() {
  $("#list3 ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
      
      var order = $(this).sortable("serialize") + '&update=update'; 
      $.post("updateList3.php", order, function(theResponse){
        $("#response3").html(theResponse);
        $("#response3").slideDown('slow');
        slideout();
      });                                
    }                 
    });
  });

}); 
</script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7025232-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</fieldset>
  <?php  
    
}
// --- Tutup Fungsi Baca Data (Read)
// --- Fungsi Ubah Data (Update)
function ubah($conn){
    // ubah data
    if(isset($_POST['btn_ubah'])){
        $thisURL="index.php";
        $id = $_POST['id_menimbang'];
        $menimbang = $_POST['menimbang'];
        if(!empty($id) && !empty($menimbang) ){
            $perubahan = "text= '".$menimbang."' ";
            $sql_update = "UPDATE dragdrop SET ".$perubahan." WHERE id=$id";
            $update = mysqli_query($conn, $sql_update);
            if($update && isset($_POST['aksi'])){
                if($_POST['aksi'] == 'update'){
                  echo '<script type="text/javascript">';
                    echo 'swal("Sukses!", "Data berhasil diupdate", "success").then(function() {
                    window.location.href = "'. $thisURL.'";
                    });</script>';
                $pesan = "berhasil!";
            }
             echo '<script type="text/javascript">
              setTimeout(function() {window.location.href = "'. $thisURL.'"}, 1000)
           </script>';
            }
        } else {
            $pesan = "Data tidak lengkap!";
        }
    }
    if(isset($_POST['btn_ubah2'])){
        $thisURL="index.php";
        $id = $_POST['id_mengingat'];
        $mengingat = $_POST['mengingat'];
        if(!empty($id) && !empty($mengingat) ){
            $perubahan = "text= '".$mengingat."' ";
            $sql_update = "UPDATE point1 SET ".$perubahan." WHERE id=$id";
            $update = mysqli_query($conn, $sql_update);
            if($update && isset($_POST['aksi'])){
                if($_POST['aksi'] == 'update'){
                  echo '<script type="text/javascript">';
                    echo 'swal("Sukses!", "Data berhasil diupdate", "success").then(function() {
                    window.location.href = "'. $thisURL.'";
                    });</script>';
                $pesan = "berhasil!";
            }
             echo '<script type="text/javascript">
              setTimeout(function() {window.location.href = "'. $thisURL.'"}, 1000)
           </script>';
            }
        } else {
            $pesan = "Data tidak lengkap!";
        }
    }

    if(isset($_POST['btn_ubah3'])){
        $thisURL="index.php";
        $id = $_POST['id_keputusan'];
        $keputusan = $_POST['keputusan'];
        if(!empty($id) && !empty($keputusan) ){
            $perubahan = "text= '".$keputusan."' ";
            $sql_update = "UPDATE keputusan SET ".$perubahan." WHERE id=$id";
            $update = mysqli_query($conn, $sql_update);
            if($update && isset($_POST['aksi'])){
                if($_POST['aksi'] == 'update'){
                  echo '<script type="text/javascript">';
                    echo 'swal("Sukses!", "Data berhasil diupdate", "success").then(function() {
                    window.location.href = "'. $thisURL.'";
                    });</script>';
                $pesan = "berhasil!";
            }
             echo '<script type="text/javascript">
              setTimeout(function() {window.location.href = "'. $thisURL.'"}, 1000)
           </script>';
            }
        } else {
            $pesan = "Data tidak lengkap!";
        }
    }

    
    // tampilkan form ubah
    if(isset($_GET['id'])){
        $thisURL="index.php";
        ?>
            <a href="<?php echo $thisURL; ?>"><< Kembali ke form</a>
            <form action="" method="POST">
            <input type="hidden" name="id_menimbang" value="<?php echo $_GET['id'] ?>"/>
            <fieldset>
                <legend><h2>Edit data</h2></legend>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis</label>
                  <div class="col-sm-10">
                    <?php 
                    $idlist=$_GET['id'];
                     $query00=mysqli_query($conn, "SELECT * FROM dragdrop where id='$idlist'");
                     $lihat=mysqli_fetch_array($query00);

                      ?>
                     <div class="form-group">
                     <textarea class="form-control" name="menimbang" style="text-align: left;"><?php echo $lihat['text'];  ?></textarea>
                    </div>
                  </div>
                </div>
              
                <br>

               <div class="form-group col-sm-8">
                    <input type="hidden" name="aksi" value="update">
                    <a href="<?php echo $thisURL; ?>&aksi=delete&id=<?php echo $_GET['id'] ?>" class="btn btn-danger"> (x) Hapus data ini</a>
                    <input  type="submit" name="btn_ubah" value="Simpan Perubahan"  class="btn btn-primary"  style="float: right;" />
                </div>
                <br>
                <p><?php echo isset($pesan) ? $pesan : "" ?></p>
            </fieldset>
        </form>
            
        <?php
    }
    if(isset($_GET['id2'])){
        $thisURL="index.php";
        ?>
            <a href="<?php echo $thisURL; ?>"><< Kembali ke form</a>
            <form action="" method="POST">
            <input type="hidden" name="id_mengingat" value="<?php echo $_GET['id2'] ?>"/>
            <fieldset>
                <legend><h2>Edit data</h2></legend>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis</label>
                  <div class="col-sm-10">
                    <?php 
                    $idlist=$_GET['id2'];
                     $query00=mysqli_query($conn, "SELECT * FROM point1 where id='$idlist'");
                     $lihat=mysqli_fetch_array($query00);

                      ?>
                     <div class="form-group">
                     <textarea class="form-control" name="mengingat" style="text-align: left;"><?php echo $lihat['text'];  ?></textarea>
                    </div>
                  </div>
                </div>
              
                <br>

               <div class="form-group col-sm-8">
                    <input type="hidden" name="aksi" value="update">
                    <a href="<?php echo $thisURL; ?>&aksi=delete&id=<?php echo $_GET['id2'] ?>" class="btn btn-danger"> (x) Hapus data ini</a>
                    <input  type="submit" name="btn_ubah2" value="Simpan Perubahan"  class="btn btn-primary"  style="float: right;" />
                </div>
                <br>
                <p><?php echo isset($pesan) ? $pesan : "" ?></p>
            </fieldset>
        </form>
            
        <?php
    }
    if(isset($_GET['id3'])){
        $thisURL="index.php";
        ?>
            <a href="<?php echo $thisURL; ?>"><< Kembali ke form</a>
            <form action="" method="POST">
            <input type="hidden" name="id_keputusan" value="<?php echo $_GET['id3'] ?>"/>
            <fieldset>
                <legend><h2>Edit data</h2></legend>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis</label>
                  <div class="col-sm-10">
                    <?php 
                    $idlist=$_GET['id3'];
                     $query00=mysqli_query($conn, "SELECT * FROM keputusan where id='$idlist'");
                     $lihat=mysqli_fetch_array($query00);

                      ?>
                     <div class="form-group">
                     <textarea class="form-control" name="keputusan" style="text-align: left;"><?php echo $lihat['text'];  ?></textarea>
                    </div>
                  </div>
                </div>
              
                <br>

               <div class="form-group col-sm-8">
                    <input type="hidden" name="aksi" value="update">
                    <a href="<?php echo $thisURL; ?>&aksi=delete&id=<?php echo $_GET['id3'] ?>" class="btn btn-danger"> (x) Hapus data ini</a>
                    <input  type="submit" name="btn_ubah3" value="Simpan Perubahan"  class="btn btn-primary"  style="float: right;" />
                </div>
                <br>
                <p><?php echo isset($pesan) ? $pesan : "" ?></p>
            </fieldset>
        </form>
            
        <?php
    }
    
}
// --- Tutup Fungsi Update
// --- Fungsi Delete
function hapus($conn){
    if(isset($_GET['id']) && isset($_GET['aksi'])){
        $thisURL="index.php";
        $id = $_GET['id'];
        $sql_hapus = "DELETE FROM dragdrop WHERE id=" . $id;
        $hapus = mysqli_query($conn, $sql_hapus);
        
        if($hapus){
            if($_GET['aksi'] == 'delete'){
             
           echo '<script type="text/javascript">';
        echo 'swal("Sukses!", "Data berhasil dihapus", "success").then(function() {
        window.location.href = "'.$thisURL.'";
        });</script>';
            }
            
            echo '<script type="text/javascript">
              setTimeout(function() {window.location.href = "'.$thisURL.'"}, 1000)
           </script>';
            
        }
    }
    if(isset($_GET['id2']) && isset($_GET['aksi'])){
        $thisURL="index.php";
        $id = $_GET['id2'];
        $sql_hapus = "DELETE FROM point1 WHERE id=" . $id;
        $hapus = mysqli_query($conn, $sql_hapus);
        
        if($hapus){
            if($_GET['aksi'] == 'delete'){
             
           echo '<script type="text/javascript">';
        echo 'swal("Sukses!", "Data berhasil dihapus", "success").then(function() {
        window.location.href = "'.$thisURL.'";
        });</script>';
            }
            
            echo '<script type="text/javascript">
              setTimeout(function() {window.location.href = "'.$thisURL.'"}, 1000)
           </script>';
            
        }
    }
    if(isset($_GET['id3']) && isset($_GET['aksi'])){
        $thisURL="index.php";
        $id = $_GET['id3'];
        $sql_hapus = "DELETE FROM keputusan WHERE id=" . $id;
        $hapus = mysqli_query($conn, $sql_hapus);
        
        if($hapus){
            if($_GET['aksi'] == 'delete'){
             
           echo '<script type="text/javascript">';
        echo 'swal("Sukses!", "Data berhasil dihapus", "success").then(function() {
        window.location.href = "'.$thisURL.'";
        });</script>';
            }
            
            echo '<script type="text/javascript">
              setTimeout(function() {window.location.href = "'.$thisURL.'"}, 1000)
           </script>';
            
        }
    }
    
}
// --- Tutup Fungsi Hapus
// ===================================================================
// --- Program Utama
if (isset($_GET['aksi'])){
    switch($_GET['aksi']){
        case "create":
            echo '<a href="'.$thisURL.'"> &laquo; Home</a>';
            tambah($conn);
            break;
        case "read":
            tampil_data($conn);
            break;
        case "update":
            ubah($conn);
            //tampil_data($conn);
            break;
        case "delete":
            hapus($conn);
            break;
        default:
            //echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
            tambah($conn);
            tampil_data($conn);
    }
} else {
    tambah($conn);
    tampil_data($conn);
}
?>