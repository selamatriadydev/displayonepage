 					<div class="box-content">
						<!-- /.dropdown js__dropdown -->
						
						<center>
						<h3 style="font-family: cambria; font-weight: bold; font-size: 20px; font-size: 1vw;">KEPUTUSAN<br>
						KEPALA DINAS KOMUNIKASI DAN INFORMATIKA KOTA METRO<br>
						NOMOR  : <h7 style="text-transform: uppercase;">{{ message }}</h7><br>
						TENTANG<br>
						<h3 style="width: 50%; font-family: cambria; font-weight: bold; font-size: 20px; font-size: 1vw; text-transform: uppercase;"><h7 style="text-transform: uppercase;"> {{ message1 }}</h7></h3><br>
						</h3>
						</center>
						<div class="col-md-2" style="float: left; font-family: cambria;">
						<table border="0">
						<td rowspan="3" colspan="3" style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;">Menimbang</h7></td>
						<td style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;">:</h7></td>
						</table>
						</div>
						<div class="col-md-10" style="float: left; font-family: cambria;">
						<table border="0" style="margin-right: 20px; text-align: justify;">
						

	
			
						<tr>
							<td style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;"><?php echo $no ?>.</h7></td>
							<td style="padding: 2px"><h7 style="font-size: 18px; font-size: 1vw;"><?php if($count2 == 0) {echo 'Belum ada data';} else { echo $row2['poinmenimbang']; } ?></h7></td>
						</tr>
						

						</table>
					</div>

					<br>

					<div class="col-md-2" style="float: left; font-family: cambria;">
						<table>
						<td rowspan="3" colspan="3" style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;">Mengingat</h7></td>
						<td style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;">:</h7></td>
						</table>
						</div>
						<div class="col-md-10" style="float: left; margin-bottom: 20px; font-family: cambria;">
						<table border="0" style="margin-right: 20px; text-align: justify;">
						
						<tr v-show="pending.length" class="list-group">
							<td style="padding: 2px; vertical-align: top" ><h7 style="font-size: 18px; font-size: 1vw;">1.</h7></td>
							<td style="padding: 2px" v-for="todo in pending" class="list-group-item"><h7 style="font-size: 18px; font-size: 1vw;">{{ todo.body }} <br>
							<button v-on:click="deleteTodo(todo)" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
						<button v-on:click="editTodo(todo)" class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></h7></td>
						</tr>
			
						</table>
					</div>

					<center>
					<h3 style="font-family: cambria; font-weight: bold; font-size: 20px; font-size: 1vw;">MEMUTUSKAN :</h3>
					</center>
					<div class="col-md-12" style="font-family: cambria;">
						<table>
						<td rowspan="3" colspan="3" style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;">Menetapkan</h7></td>
						<td style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;">:</h7></td>
						</table>
						</div>
						<div class="col-md-12" style="float: left; font-family: cambria;">
						<table border="0" style="margin-right: 20px; text-align: justify;">
						<?php 
						$sql4 = mysqli_query($conn, "select * from keputusan_surat where idsurat = '$id'");
						$count4 = mysqli_num_rows($sql4);
						$no = 1;
						if($count4 != 0) {
						while($row4 = mysqli_fetch_array($sql4)) {
			            if ($no == 1) $nomor="Kesatu";
			            else if ($no == 2) $nomor="Kedua";
			            else if ($no == 3) $nomor="Ketiga";
			            else if ($no == 4) $nomor="Keempat";
			            else if ($no == 5) $nomor="Kelima";
			            else if ($no == 6) $nomor="Keenam";
			            else if ($no == 7) $nomor="Ketujuh";
			            else if ($no == 8) $nomor="Kedelapan";
			            else if ($no == 9) $nomor="Kesembilan";
						?>
						<tr>
							<td style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;"><?php echo $nomor ?></h7></td>
							<td style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;">:</h7></td>
							<td style="padding: 2px"><h7 style="font-size: 18px; font-size: 1vw;"><?php //echo nl2br("{{ message4 }}"); ?></h7></td>
						</tr>
						<?php $no++; }}
						else {
						echo '<tr>
							<td style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;"></h7></td>
							<td style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;"></h7></td>
							<td style="padding: 2px"><h7 style="font-size: 18px; font-size: 1vw;">Belum ada data. Silakan tambah keputusan.</h7></td>
						</tr>';
						} ?>
						</table>
					</div>
					<br><br>
					<div class="col-md-12">
					<table style="float: right; margin-top: 20px; margin-left: 320px; font-size: 1vw;">
					<tr>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">Ditetapkan di</td>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">:</td>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">M E T R O</td>
					</tr>
					<tr>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">Pada tanggal</td>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">:</td>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px"><?php //echo date("d M Y", strtotime("{{ message5 }}")); ?></td>
					</tr>
					<tr>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">&nbsp;</td>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">&nbsp;</td>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">&nbsp;</td>
					</tr>
					<tr>
					<td colspan="3" style="width:400px; font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 20px;"><h7 style="font-size: 20px; font-size: 1vw; font-weight: bold"><?php// echo "{{ message6 }}"; $row['nmjabatan']?> <?php echo $row['nmunitkerja']?><br><?php echo $row['nmskpd']?>,</h7></td>
					</tr>
					<tr>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">&nbsp;</td>
					<td style="font-family: cambria; font-size: 20px; padding-right: 2px">&nbsp;</td>
					<td style="font-family: cambria; font-size: 20px; padding-right: 2px">&nbsp;</td>
					</tr>
					<tr>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">&nbsp;</td>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">&nbsp;</td>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">&nbsp;</td>
					</tr>
					<tr>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">&nbsp;</td>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">&nbsp;</td>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">&nbsp;</td>
					</tr>
					<tr>
					<td colspan="3" style="width:400px; font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px;"><h7 style="font-size: 20px; font-size: 1vw; font-weight: bold; text-decoration: underline;"><?php echo $row['nmpegawai']?></h7></td>
					</tr>
					<tr>
					<td colspan="3" style="width:400px; font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px;"><h7 style="font-size: 20px; font-size: 1vw;"><?php echo $row['pangkat']?></h7></td>
					</tr>
					<tr>
					<td colspan="3" style="width:400px; font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px;"><h7 style="font-size: 20px; font-size: 1vw;">NIP. <?php echo $row['nip']?></h7></td>
					</tr>
					</table>
					</div>

					
				
					</div>
					
					<div class="col-md-12" style="background-color: white; margin-top: -20px;">
					<h7 style="font-size: 20px; font-size: 1vw; font-weight: bold; text-decoration: underline; margin-left: 40px; font-family: cambria;">Tembusan Disampaikan Kepada Yth :</h7><br><br>
					<table style="margin-left: 20px; font-size: 20px; font-size: 1vw; font-family: cambria;">
						<?php
						$sql5 = mysqli_query($conn, "select tembusan_surat.*, pegawai.idpegawai, pegawai.idjabatan, pegawai.idunitkerja, unit_kerja.idunitkerja, unit_kerja.nmunitkerja, jabatan.idjabatan, jabatan.nmjabatan from unit_kerja, pegawai, tembusan_surat, jabatan where pegawai.idunitkerja = unit_kerja.idunitkerja and pegawai.idjabatan = jabatan.idjabatan and tembusan_surat.idpegawai = pegawai.idpegawai and tembusan_surat.idsurat = '$id'");
						$count5 = mysqli_num_rows($sql5);
						$no = 1;
						if($count5 != 0) {
						while($row5 = mysqli_fetch_array($sql5)) {
							?>
						<tr>
							<td><?php echo $no ?>.</td>
							<td style="padding-left: 15px; "><?php echo $row5['nmjabatan']?> <?php echo $row5['nmunitkerja']?></td>
						</tr>
						<?php $no++; } }
						else {
						echo '<tr>
							<td></td>
							<td style="padding-left: 15px; ">Belum ada data. Silakan tambahkan tembusan</td>
						</tr>';
						} ?>
					</table><br>
					</div>