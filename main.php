<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Lab1</title>
<script type="text/javascript">
function validate() {
	var x=Xvalidate();
	var y=Yvalidate();
	var r=Rvalidate();
	if (x==false || y==false || z==false) {
		return false;
	}
}

function Yvalidate(){
	var y=document.forms["form"]["Y"].value;
	if (y.length==0){
	    document.getElementById("Ywarning").innerHTML="*данное поле обязательно для заполнения";
	    return false;
	   }
	if (!(y>-5 && y<3)) {
		document.getElementById("Ywarning").innerHTML="*должно быть между -5 и 3";
		return false;
	}
	if (isNaN([+y])) {
		document.getElementById("Ywarning").innerHTML="*должно быть число";
		return false;
	}	
}

function Xvalidate(){
	var x=document.forms["form"]["X"].value;
	if (isNaN([+x])) {
		document.getElementById("Xwarning").innerHTML="*должно быть число";
		return false;
	}
	if (!(x==-4 || x==-3 || x==-2 || x==-1 || x==-0 || x==1 || x==2 || x==3 || x==4)) {
		document.getElementById("Xwarning").innerHTML="*не в диапазоне";
		return false;
	}
}

function Rvalidate() {
	var r=document.forms["form"]["R"].value;
	if (isNaN([+r])) {
		document.getElementById("Rwarning").innerHTML="*должно быть число";
		return false;
	}
	if (r<0) {
		document.getElementById("Rwarning").innerHTML="*должно быть положительным";
		return false;
	}	
}
</script>
<style>
@import url( 'mystyle.css');
</style>
</head>
<body>
	<form method="post" name="form" action="myphp.php" onsubmit="return validate()">
		<table border="0" cellpadding="0" cellspacing="0" width="100%">

			<tr>
				<th width="20%">Лабораторная работа №1.</th>
				<th width="50%">Выполнили: Смирнов Владимир и Сёмочкин Константин.</th>
				<th width="15%">Группа P3200.</th>
				<th width="15%">Вариант 913.</th>
			</tr>
			<tr>
				<td>
					<p>
						Введите параметр X:<input type="text" name="X" id="X" value=""
							border="1" size="1"/><span style="color:red" id="Xwarning"></span></p>
				</td>
				<td rowspan="7"><img src="areas.png" id="areas" alt="areas"></td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td width='50'>
								<p>
									<input type="button" id="Xn4" value="-4" class="button"
										onclick="document.getElementById('X').value='-4'" />
								</p>
							</td>
							<td width='50'>
								<p>
									<input type="button" id="Xn3" value="-3" class="button"
										onclick="document.getElementById('X').value='-3'" />
								</p>
							</td>
							<td width='50'>
								<p>
									<input type="button" id="Xn2" value="-2" class="button"
										onclick="document.getElementById('X').value='-2'" />
								</p>
							</td>
							<td width='50'>
								<p>
									<input type="button" id="Xn1" value="-1" class="button"
										onclick="document.getElementById('X').value='-1'" />
								</p>
							</td>
							<td width='50'>
								<p>
									<input type="button" id="X0" value="0" class="button"
										onclick="document.getElementById('X').value='0'" />
								</p>
							</td>
							<td width='50'>
								<p>
									<input type="button" id="Xp1" value="1" class="button"
										onclick="document.getElementById('X').value='1'" />
								</p>
							</td>
							<td width='50'>
								<p>
									<input type="button" id="Xp2" value="2" class="button"
										onclick="document.getElementById('X').value='2'" />
								</p>
							</td>
							<td width='50'>
								<p>
									<input type="button" id="Xp3" value="3" class="button"
										onclick="document.getElementById('X').value='3'" />
								</p>
							</td>
							<td width='50'>
								<p>
									<input type="button" id="Xp4" value="4" class="button"
										onclick="document.getElementById('X').value='4'" />
								</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<p>Введите параметр Y:</p>
				</td>
			</tr>
			<tr>
				<td><input type="text" name="Y" /><p><span style="color:red" id="Ywarning"></span></p></td>
			</tr>
			<tr>
				<td><p>Введите параметр R:<input type="text" name="R" id="R"
					value="" border="1" size="1"/><span style="color:red" id="Rwarning"></span></p></td>
			</tr>
			<tr>
				<td>
					<table>
						<tr>
							<td width='50'>
								<p>
									<input type="button" value="1.0" class="button"
										onclick="document.getElementById('R').value='1'" />
								</p>
							</td>
							<td width='50'>
								<p>
									<input type="button" value="1.5" class="button"
										onclick="document.getElementById('R').value='1.5'" />
								</p>
							</td>
							<td width='50'>
								<p>
									<input type="button" value="2.0" class="button"
										onclick="document.getElementById('R').value='2'" />
								</p>
							</td>
							<td width='50'>
								<p>
									<input type="button" value="2.5" class="button"
										onclick="document.getElementById('R').value='2.5'" />
								</p>
							</td>
							<td width='50'>
								<p>
									<input type="button" value="3.0" class="button"
										onclick="document.getElementById('R').value='3'" />
								</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><div class="centered">
						<input type="submit" class="button" />
					</div></td>
			</tr>
		</table>
	</form>
</body>
</html>
