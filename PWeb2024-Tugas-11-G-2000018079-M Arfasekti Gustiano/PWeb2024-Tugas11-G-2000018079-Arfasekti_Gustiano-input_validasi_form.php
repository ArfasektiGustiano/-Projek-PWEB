<!DOCTYPE html>
<html>
<head>
	<title>Website Reni </title>
</head>
<style>
	body {

background-image : url("rere.png");}
</style>
<body>
	
		<tr>
			<td>
					<tr>
						<td><font face="arial" color="#f3971b" size="4"> <strong>UNIVERSITAS AHMAD DAHLAN</strong> </font> </td>
						<td width="70%" >&emsp;</td>
					</tr>				
			</td>
		</tr>
	
		<tr>
			<td>
				
					<h3><font face="arial" color="#f3971b" size="6">&ensp;Biodata Mahasiswa</font></h2>
						<h1><font face="arial" color="#FFFFFF" size="6">&ensp;Prodi Teknik Informatika</font></h1>
					<tr>
						<td align="centre" valign="middle" height="350px">
							<form> 
								<label for="name">Nama&emsp;&emsp;&emsp;&emsp;&thinsp;&ensp;:</label> 
								<input type="text" id="name" name="name"><br><br> 
								<label for="alamat">Alamat&emsp;&emsp;&emsp;&ensp;&ensp;&thinsp;:</label>
								<input type="text" id="alamat" name="alamat"><br><br> 
								<label for="telepon">Telepon&emsp;&emsp;&emsp;&ensp;&ensp;:</label> 
								<input type="text" id="telepon" name="telepon"><br><br> 
								<label for="agama">Agama:&emsp;&emsp;&emsp;&emsp;&thinsp;</label>
									<select id="agama" name="agama">    
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Protestan">Katolik</option>
									<option value="Hindu">Hindu</option>
									<option value="Budha">Budha</option></select><br><br>
								<label for="prestasi">Prestasi yang pernah diraih: <label><br>
								<textarea id="prestasi" prestasi="message" rows="12" cols="50"></textarea><br><br>
								<pre>               <input type="submit" onclick="myFunction()" value="Simpan"> <input type="reset" value="Batal"></pre>
							   
							</form> 
                        <script type="text/javascript">
                            function myFunction(){
                                var name=document.getElementById("name").value;
                                var alamat=document.getElementById("alamat").value;
                                var telepon=document.getElementById("telepon").value;
								var agama=document.getElementById("agama").value;
								var prestasi=document.getElementById("prestasi").value;
								

                                alert("Nama:"+name+
								"\nAlamat:"+alamat+
								"\nTelepon:"+telepon+
								"\nAgama:"+agama+
								"\nPrestasi:"+prestasi										
								);
							}
                        </script>
						</td>
					</tr>
	
			</td>
		</tr>
	
	
</body>
</html>
