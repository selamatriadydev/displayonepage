 					<div class="box-content">
						<!-- /.dropdown js__dropdown -->
						
						<center>
						<h3 style="font-family: cambria; font-weight: bold; font-size: 20px; font-size: 1vw;">KEPUTUSAN<br>
						KEPALA DINAS KOMUNIKASI DAN INFORMATIKA KOTA METRO<br>
						NOMOR  : <h7 style="text-transform: uppercase;" id="nosurat"></h7><br>
						TENTANG<br>
						<h3 style="width: 50%; font-family: cambria; font-weight: bold; font-size: 20px; font-size: 1vw; text-transform: uppercase;"><h7 style="text-transform: uppercase;" id="perihal"> </h7></h3><br>
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
						<?php
						$no=1;
						$queryv1=mysqli_query($conn, "SELECT id, text FROM dragdrop ORDER BY listorder ASC");
						$totalv1=mysqli_num_rows($queryv1);
						while($rowv1=mysqli_fetch_array($queryv1)){
							$id = stripslashes($rowv1['id']);
                          $text = stripslashes($rowv1['text']);
						?>
						<tr>
							<td style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;" ><?php echo $no ?></h7></td>
							<td style="padding: 2px"><h7 style="font-size: 18px; font-size: 1vw;"><?php echo $text;?></h7></td>
						</tr>
						<?php $no++;}
						if($totalv1+1) {?>
							<tr>
							<td style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;" ><?php echo $totalv1+1 ?></h7></td>
							<td style="padding: 2px"><h7 style="font-size: 18px; font-size: 1vw;" id="menimbang"><?php echo $text;?></h7></td>
						</tr>
						<?php } ?>

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
						
						<?php
						$no=1;
						$queryv2=mysqli_query($conn, "SELECT id, text FROM point1 ORDER BY listorder ASC");
						$totalv2=mysqli_num_rows($queryv2);
						while($rowv2=mysqli_fetch_array($queryv2)){
							$id = stripslashes($rowv2['id']);
                          $text = stripslashes($rowv2['text']);
						?>
						<tr>
							<td style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;" ><?php echo $no ?></h7></td>
							<td style="padding: 2px"><h7 style="font-size: 18px; font-size: 1vw;"><?php echo $text;?></h7></td>
						</tr>
						<?php $no++;}
						if($totalv2+1) {?>
							<tr>
							<td style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;" ><?php echo $totalv2+1 ?></h7></td>
							<td style="padding: 2px"><h7 style="font-size: 18px; font-size: 1vw;" id="mengingat"><?php echo $text;?></h7></td>
						</tr>
						<?php } ?>
			
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
						$no=1;
						$query=mysqli_query($conn, "SELECT id, text FROM keputusan ORDER BY listorder ASC");
						$total=mysqli_num_rows($query);
						while($row=mysqli_fetch_array($query)){
							$id = stripslashes($row['id']);
                          $text = stripslashes($row['text']);
						?>
						<tr>
							<td style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;" ><?php echo $no ?></h7></td>
							<td style="padding: 2px"><h7 style="font-size: 18px; font-size: 1vw;"><?php echo $text;?></h7></td>
						</tr>
						<?php $no++;}
						if($total+1) {?>
							<tr>
							<td style="padding: 2px; vertical-align: top"><h7 style="font-size: 18px; font-size: 1vw;" ><?php echo $total+1 ?></h7></td>
							<td style="padding: 2px"><h7 style="font-size: 18px; font-size: 1vw;" id="memutuskan"><?php echo $text;?></h7></td>
						</tr>
						<?php } ?>
						
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
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">tanggal</td>
					</tr>
					<tr>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">&nbsp;</td>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">&nbsp;</td>
					<td style="font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px">&nbsp;</td>
					</tr>
					<tr>
					<td colspan="3" style="width:400px; font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 20px;"><h7 style="font-size: 20px; font-size: 1vw; font-weight: bold">
					 <p id="tandatangan"></p> jabatan unit kerja <br>nmkepada,</h7></td>
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
					<td colspan="3" style="width:400px; font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px;"><h7 style="font-size: 20px; font-size: 1vw; font-weight: bold; text-decoration: underline;">nmpegawai</h7></td>
					</tr>
					<tr>
					<td colspan="3" style="width:400px; font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px;"><h7 style="font-size: 20px; font-size: 1vw;">pangkat</td>
					</tr>
					<tr>
					<td colspan="3" style="width:400px; font-family: cambria; font-size: 20px; font-size: 1vw; padding-right: 2px;"><h7 style="font-size: 20px; font-size: 1vw;">NIP. nip</h7></td>
					</tr>
					</table>
					</div>

					
				
					</div>
					
					<div class="col-md-12" style="background-color: white; margin-top: -20px;">
					<h7 style="font-size: 20px; font-size: 1vw; font-weight: bold; text-decoration: underline; margin-left: 40px; font-family: cambria;">Tembusan Disampaikan Kepada Yth :</h7><br><br>
					<table style="margin-left: 20px; font-size: 20px; font-size: 1vw; font-family: cambria;">
						
						<tr>
							<td>no.</td>
							<td style="padding-left: 15px; ">nmjabatan nmunitkerja</td>
						</tr>
						
					</table><br>
					</div>